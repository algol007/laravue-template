<?php
use Illuminate\Http\Request;
JavaScript::put([
	'basepath' => dirname($_SERVER['PHP_SELF']),
    'baseurl' => myFunction::baseURL(),
    'myassets' => myFunction::getAssets(),
]);

Route::any('/', function (Request $request) {
    if($request->isMethod('post')){
    	return "Docs Page";
    }else{
    	return view('welcome');
    }
});
Route::any('/laracast', function (Request $request) {
    if($request->isMethod('post')){
    	return "Laracast Page";
    }else{
    	return view('welcome');
    }
});
Route::any('/news', function (Request $request) {
    if($request->isMethod('post')){
    	return "News Page";
    }else{
    	return view('welcome');
    }
});
