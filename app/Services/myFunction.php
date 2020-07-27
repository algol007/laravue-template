<?php
namespace App\Services;
use Illuminate\Support\Facades\DB;

class myFunction{
    public static function id($table, $field)
    {
        $data = DB::table($table)->max($field);
        return $data + 1;
    }
	public static function getAssets(){
		if(!empty($_SERVER['HTTP_HOST'])){
			$hostName = $_SERVER['HTTP_HOST']; 
		    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
			$url=$protocol.$hostName.dirname($_SERVER['PHP_SELF']); 
			return $url;
		}
	}
    public static function baseURL(){
        $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
        $getslash = explode("/",dirname($_SERVER['PHP_SELF']));
        if(!empty($getslash[1])){
            $baseurl=$protocol.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
        }else{
            $baseurl=$protocol.$_SERVER['HTTP_HOST'];
        }
        
        return $baseurl;
    }
}