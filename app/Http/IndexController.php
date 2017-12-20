<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;
use Illuminate\Support\Facades\Input;
use Tpl;
class IndexController extends Controller
{
    public function index(){
        return Redirect::to('/wiki/index');
    }

    public function logout(){
    	Session::forget('user');
        return Redirect::to('/wiki/index');
    }

    public function open(){
      return Tpl::view('open.index','index',
  		[

  		]);
    }

    public function jump(){
      $url=Input::get('url');
      $key=Input::get('key');

      if($key=='almwoldy'){
        die(md5($url.'#woldy#'));
      }

      if($key!=md5($url.'#woldy#')){
        $url='http://service.100tal.com';
      }

      return view('misc/jump',[
          'url' =>$url,
      ]);

    }
}
