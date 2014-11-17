<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    session_start();

 
 
require_once( APPPATH . 'libraries/facebook/GraphObject.php' );
require_once( APPPATH . 'libraries/facebook/GraphSessionInfo.php' );
require_once( APPPATH . 'libraries/facebook/FacebookSession.php' );
require_once( APPPATH . 'libraries/facebook/FacebookCurl.php' );
require_once( APPPATH . 'libraries/facebook/FacebookHttpable.php' );
require_once( APPPATH . 'libraries/facebook/FacebookCurlHttpClient.php' );
require_once( APPPATH . 'libraries/facebook/FacebookResponse.php' );
require_once( APPPATH . 'libraries/facebook/FacebookSDKException.php' );
require_once( APPPATH . 'libraries/facebook/FacebookRequestException.php' );
require_once( APPPATH . 'libraries/facebook/FacebookAuthorizationException.php' );
require_once( APPPATH . 'libraries/facebook/FacebookRequest.php' );
require_once( APPPATH . 'libraries/facebook/FacebookRedirectLoginHelper.php' );


use Facebook\GraphSessionInfo;
use Facebook\FacebookSession;
use Facebook\FacebookCurl;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;
use Facebook\FacebookResponse;
use Facebook\FacebookAuthorizationException;
use Facebook\FacebookRequestException;
use Facebook\FacebookRequest;
use Facebook\FacebookSDKException;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\GraphObject;
 
class Facebooks {
    var $ci;
    var $helper;
    var $session;
 
    public function __construct() {
        $this->ci =& get_instance();
 
        Facebook\FacebookSession::setDefaultApplication( '135034412307', '16fe64ce6f7edb85afbe6afcd18cdc6d');
        $this->helper = new FacebookRedirectLoginHelper( "http://wearebeginner.com/dev/" );
 
        if ( $this->ci->session->userdata('fb_token') ) {
            $this->session = new Facebook\FacebookSession( $this->ci->session->userdata('fb_token') );
 
            // Validate the access_token to make sure it's still valid
            try {
                if ( ! $this->session->validate() ) {
                  $this->session = false;
                }
            } catch ( \Exception $e ) {
                // Catch any exceptions
                $this->session = false;
            }
        } else {
            try {
                //$this->session = $this->helper->getSessionFromRedirect();
            } catch(FacebookRequestException $ex) {
                // When Facebook returns an error
            } catch(Exception $ex) {
                // When validation fails or other local issues
            }
        }
 
        if ( $this->session ) {
            $this->ci->session->set_userdata( 'fb_token', $this->session->getToken() );
 
            $this->session = new Facebook\FacebookSession( $this->session->getToken() );
        }
    }
 
    public function get_login_url() {
		return $this->helper->getLoginUrl( array('email', 'user_location', 'user_birthday') );
    }
 
    public function get_logout_url() {
        if ( $this->session ) {
            return $this->helper->getLogoutUrl( $this->session, site_url( 'logout' ) );
        }
        return false;
    }
 
    public function get_user() {
        if ( $this->session ) {
            try {
                $request = (new FacebookRequest( $this->session, 'GET', '/me' ));
				$request = $request->execute();
                $user = $request->getGraphObject()->asArray();
 
                return $user;
 
            } catch(FacebookRequestException $e) {
                return false;
 
            }
        }
    }
}