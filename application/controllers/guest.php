<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guest extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('userinfo');
		$access_token=get_cookie('access_token');
		$userinfo=$this->userinfo->getOAuthUser($access_token);
		if(!empty($userinfo)) redirect(base_url('oauth2'));

		$data['app_icon']=$this->config->item('uiux_path').'/web/vendors/ecs/images/app_icons/'.$this->config->item('uiux_app_icon');	
		$data['app_name']='Demo Client Application';
		$data['User_info']=$userinfo;

		$this->template->write('title','Demo Client Application',TRUE);
		$this->template->write_view('app_info','landing/app_info',$data);
		$this->template->write_view('menu','landing/top_menu',$data);
		$this->template->write_view('footer','landing/footer',$data);
	}

	public function index()
	{

		$this->template->add_css($this->load->view('guest/css/guest-syle.css',null,TRUE),'embed',TRUE);
		$this->template->write_view('content','guest/content');
		$this->template->render();
	}
}

/* End of file guest.php */
/* Location: ./application/controllers/guest.php */