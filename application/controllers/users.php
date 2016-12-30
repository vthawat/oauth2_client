<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('userinfo');
		$this->template->set_template('admin');
		$access_token=get_cookie('access_token');
		if(empty($access_token))  // access_token expired
			redirect(base_url('oauth2'));
		$userinfo=$this->userinfo->getOAuthUser($access_token);
		if($this->userinfo->status_code!=200)  // valid access_token
			show_error('Invalid access_token', 403); // invalid access_token handrer


		$this->template->write('title',$this->config->item('uiux_app_name'),TRUE);
		$this->template->write('app_name',$this->config->item('uiux_app_name'),TRUE);
		$data['app_icon']=prep_url($this->config->item('uiux_path')).'/web/vendors/ecs/images/app_icons/'.$this->config->item('uiux_app_icon');
		$data['User_info']=$userinfo;
		$data['app_name']=$this->config->item('uiux_app_name');
		$this->template->write_view('app_icon','users/app-icon',$data);
		$this->template->write_view('menu','landing/top_menu',$data);
		$this->template->write_view('footer','landing/footer',$data);
		

	}

	function index()
	{
		$this->template->render();
	}
}