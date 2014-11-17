<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('date_format1'))
{
    function date_format1($date)
    {
        $date = explode('-',$date);
		return $date[2].'-'.$date[1].'-'.$date[0];
    }
	
	function date_format2($date)
    {
		$month = array('January','February','March','April','May','June','July','Augustus','September','October','November','December');
        $date = explode('-',$date);
		return $date[2].' '.$month[$date[1]-1].' '.$date[0];
    }   
}