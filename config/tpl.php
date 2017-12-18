<?php
$xenon=[
		'common_js'=>[
			"/js/LAB.min.js",
			"/js/common/bootstrap.min.js",
			"/js/xenon/TweenMax.min.js",
			"/js/xenon/resizeable.js",
			"/js/xenon/joinable.js",
			"/js/xenon/xenon-api.js",
			"/js/xenon/xenon-toggles.js",
			"/js/xenon/xenon-custom.js",
			"/js/xenon/common.js",
		],
		'common_css'=>[
			'/css/fonts/fontawesome/css/font-awesome.min.css',
			'/css/fonts/linecons/css/linecons.css',
			'/css/bootstrap.css',
			'/css/xenon-core.min.css',
			'/css/admin/common.css',
			'/css/xenon-forms.css',
			'/css/xenon-components.css',
			//'/assetswoldycms//css/xenon-skins.css',
		]
];



return [
	'admin_cfg'=>[
			'menu_id'=>'0',
			'logo2x'=>'/assets/images/logo@2x.png',
			'logo_c'=>'/assets/images/logo-collapsed@2x.png',
      'tpl_base'=>'woldycms::admin',//模板目录
      'tpl_layout'=>'woldycms::xenon.layout.left',//left,letfc,top,topleft,topleftc
    	'static_url' =>'/assets/woldycms',//静态资源地址
      'static_base'=>'/assets/woldycms',//基础组件静态资源地址/res?src=
    	'common_js'=>array_merge($xenon['common_js'],['/js/xenon/jquery-validate/jquery.validate.min.js']),
    	'common_css'=>$xenon['common_css'],
	],

	'wiki_cfg'=>[
			// 'title'=>'woldycms',
			'menu_id'=>'1',
			'version'=>'5',
			'logo2x'=>'/assets/images/logo@2x.png',
			'logo_c'=>'/assets/images/logo-collapsed@2x.png',
			'tpl_base'=>'woldycms::wiki',//模板目录
      'tpl_layout'=>'woldycms::xenon.layout.left',//left,letfc,top,topleft,topleftc
			'static_url' =>'/assets',//静态资源地址
      'static_base'=>'/assets/woldycms',//基础组件静态资源地址/res?src=
			'common_js'=>array_merge($xenon['common_js'],[
				'/js/xenon/jquery-ui/jquery-ui.min.js',
				'/js/common/markdown.min.js',
				'/js/xenon/tocify/jquery.tocify.min.js',
				'/js/common/editor.md/editormd.min.js',
				'/js/common/editor.md/lib/marked.min.js',
				'/js/common/editor.md/lib/prettify.min.js',
				'/js/common/editor.md/lib/raphael.min.js',
				'/js/common/editor.md/lib/underscore.min.js',
				'/js/common/editor.md/lib/sequence-diagram.min.js',
				'/js/common/editor.md/lib/flowchart.min.js',
				'/js/common/editor.md/lib/jquery.flowchart.min.js',
				'/js/common/editor.md/lib/codemirror/codemirror.min.js'
			]),
    	'common_css'=>array_merge($xenon['common_css'],[
					'/js/common/editor.md/css/editormd.min.css',
			])
	],

	'user_cfg'=>[
			// 'title'=>'woldycms',
			'menu_id'=>'1',
			'logo2x'=>'/assets/images/logo@2x.png',
			'logo_c'=>'/assets/images/logo-collapsed@2x.png',
			'version'=>'4',
			'tpl_base'=>'woldycms::user',//模板目录
      'tpl_layout'=>'woldycms::xenon.layout.left',//left,letfc,top,topleft,topleftc
			'tpl_layout_simple'=>'woldycms::xenon.layout.simple',//left,letfc,top,topleft,topleftc
			'static_url' =>'/assets/woldycms',//静态资源地址
      'static_base'=>'/assets/woldycms',//基础组件静态资源地址/res?src=
			'common_js'=>$xenon['common_js'],
    	'common_css'=>$xenon['common_css'],
	],

    'index_cfg'=>[
        // 'title'=>'woldycms',
				'menu_id'=>'1',
				'logo2x'=>'/assets/images/logo@2x.png',
				'logo_c'=>'/assets/images/logo-collapsed@2x.png',
        'tpl_base'=>'index',//模板目录
        //'tpl_portal'=>'',//模板主框架
        'tpl_layout'=>'woldycms::xenon.layout.left',//left,letfc,top,topleft,topleftc
				'static_url' =>'/assets',//静态资源地址
	      'static_base'=>'/assets/woldycms',//基础组件静态资源地址/res?src=
				'common_js'=>array_merge(
					$xenon['common_js'],
					[
							'/js/xenon/jquery-ui/jquery-ui.min.js',
							'/js/common/markdown.min.js',
							'/js/xenon/tocify/jquery.tocify.min.js'
					]),
	    	'common_css'=>$xenon['common_css'],
    ],


];
