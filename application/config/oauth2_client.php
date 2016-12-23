<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Configuration for connect to OAuth2.0 Services
|--------------------------------------------------------------------------
|
| 
|
| WARNING: You MUST set this value!
|
| client_id: 
| client_secret:
| redirect_uri:
| authorize_url:
| access_token_url:
| endpoint_url: url for use api resource 
| ssl_validate: //set TRUE for valid ssl certificate , set FALSE invalid ssl certificate
*/
$config['client_id']='demo_client';

$config['client_secret']='demo_secret';

$config['redirect_uri']='oauth2/callback';

$config['authorize_url']='https://localhost/authorize';

$config['access_token_url']='https://localhost/authorize/token';

$config['endpoint_url']='https://locahost/resource/';

$config['ssl_validate']=FALSE;

?>