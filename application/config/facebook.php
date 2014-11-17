<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


$facebook['api_id'] = '135034412307';
$facebook['app_secret'] = '16fe64ce6f7edb85afbe6afcd18cdc6d';
$facebook['redirect_url'] = site_url('home/login');
$facebook['permissions'] = array(
    'email',
    'user_location',
    'user_birthday'
);

?>