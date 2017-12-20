<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;
use Illuminate\Support\Facades\Input;
use Tpl;
use Form;
class IndexController extends Controller
{
    public function index(){
          	$config=[
    		[
    			'type'=>'form',
    			'attr'=>[
           			'action'=>'/admin/menu/item',
            		'method'=>'post',
            		'novalidate'=>"novalidate"
    			],
                'class'=>"validate",
    		],

    		[
    			'type'=>'text',
    			'label'=>'标签',
    			'attr'=>[
           			'name'=>'title',
           			'id'=>'title',
           			'data-validate'=>'required',
					'data-message-required'=>'请输入标签名称！'

    			],
          'p_class'=>'',
    		],

    		[
    			'type'=>'submit',
    			'label'=>'增加',
    			'attr'=>[
    				'class'=>'btn btn-primary btn-single pull-right',
           			'id'=>'submit',
    			],
    		],

     		[
    			'type'=>'endform'
    		],

    	];


        $cfgform['attr']=[
            'action'=>'/admin/menu/list',
            'mothod'=>'post'
        ];

        $listform=Form::build($config);

    	//Form::init($cfgform)->show();
    	//$form->show();
    	//Menu::show();
    	return Tpl::view('test.index','index',[
            'listform'=>$listform,
        ]);
    }
 
}
