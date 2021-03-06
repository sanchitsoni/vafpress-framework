<?php

return array(

	////////////////////////////////////////////////
	// Scripts and Styles Dependencies Definition //
	////////////////////////////////////////////////

	/**
	 * jQuery UI Theme
	 */
	'jqui_theme' => ($jqui_theme = 'smoothness'),

	/**
	 * Scripts.
	 */
	'scripts' => array(
		'always' => array('jquery', 'prefixfree', 'scrollspy', 'tipsy', 'jquery-typing'),
		'paths' => array(
			'jquery' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery-1.8.3.min.js',
				'deps'     => array(),
				'ver'      => '1.8.3',
				'override' => false,
			),
			'bootstrap-colorpicker' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/bootstrap-colorpicker.js',
				'deps'     => array('jquery'),
				'ver'      => false,
			),
			'tipsy' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.tipsy.js',
				'deps'     => array('jquery'),
				'ver'      => '1.0.0a'
			),
			'prefixfree' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/prefixfree.min.js',
				'deps'     => array(),
				'ver'      => '1.0.7',
			),
			'scrollspy' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery-scrollspy.js',
				'deps'     => array('jquery'),
				'ver'      => false,
			),
			'jquery-ui-core' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.ui.core.js',
				'deps'     => array(),
				'ver'      => '1.9.2',
			),
			'jquery-ui-widget' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.ui.widget.js',
				'deps'     => array(),
				'ver'      => '1.9.2',
			),
			'jquery-ui-mouse' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.ui.mouse.js',
				'deps'     => array('jquery-ui-widget'),
				'ver'      => '1.9.2',
			),
			'jquery-ui-slider' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.ui.slider.js',
				'deps'     => array('jquery', 'jquery-ui-core', 'jquery-ui-widget', 'jquery-ui-mouse'),
				'ver'      => '1.9.2',
			),
			'jquery-ui-datepicker' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.ui.datepicker.js',
				'deps'     => array('jquery', 'jquery-ui-core', 'jquery-ui-widget'),
				'ver'      => '1.9.2',
			),
			'jquery-typing' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/jquery.typing-0.2.0.min.js',
				'deps'     => array('jquery'),
				'ver'      => '0.2',
			),
			'ace-editor' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/ace/ace.js',
				'deps'     => array(),
				'ver'      => '1.0.0',
			),
			'shared' => array(
				'path'     => VP_PUBLIC_URL . '/js/shared.js',
				'deps'     => array(),
				'ver'      => '1.1',
				'localize' => array(
					'name' => 'vp_wp',
					'keys' => array(
						'use_upload', 'use_new_media_upload', 'public_url', 'wp_include_url', 'val_msg'
					)
				)
			),
			'select2' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/select2.min.js',
				'deps'     => array('jquery'),
				'ver'      => '3.3.2',
				'override' => true,
			),
			'select2-sortable' => array(
				'path'     => VP_PUBLIC_URL . '/js/vendor/select2.sortable.js',
				'deps'     => array('jquery', 'jquery-ui-sortable', 'select2'),
				'ver'      => '1.0.0',
				'override' => true,
			),
			'kia-metabox' => array(
				'path'     => VP_PUBLIC_URL . '/js/kia-metabox.js',
				'deps'     => array('jquery', 'editor'),
				'ver'      => '1.0',
				'override' => true,
			),
		),
	),

	/**
	 * Styles.
	 */
	'styles' => array(
		'always' => array('tipsy-css', 'font-awesome', 'font-awesome-ie7'),
		'paths' => array(
			'bootstrap-colorpicker' => array(
				'path' => VP_PUBLIC_URL . '/css/vendor/bootstrap-colorpicker.css',
				'deps' => array(),
			),
			'tipsy-css' => array(
				'path' => VP_PUBLIC_URL . '/css/vendor/tipsy.css',
				'deps' => array(),
			),
			'jqui' => array(
				'path' => VP_PUBLIC_URL . '/css/vendor/jqueryui/themes/' . $jqui_theme . '/jquery-ui-1.9.2.custom.min.css',
				'deps' => array(),
			),
			'font-awesome-ie7' => array(
				'path' => VP_PUBLIC_URL . '/css/vendor/font-awesome-ie7.min.css',
				'deps' => array(),
			),
			'font-awesome' => array(
				'path' => VP_PUBLIC_URL . '/css/vendor/font-awesome.min.css',
				'deps' => array(),
			),
			'select2-css' => array(
				'path'     => VP_PUBLIC_URL . '/css/vendor/select2.css',
				'deps' => array(),
			),
		),
	),

	/**
	 * Rules for dynamic loading of dependencies, load only what needed.
	 */
	'rules'   => array(
		'color'       => array( 'js' => array('bootstrap-colorpicker'), 'css' => array('bootstrap-colorpicker') ),
		'select'      => array( 'js' => array('select2'), 'css' => array('select2-css') ),
		'multiselect' => array( 'js' => array('select2'), 'css' => array('select2-css') ),
		'slider'      => array( 'js' => array('jquery-ui-slider'), 'css' => array('jqui') ),
		'date'        => array( 'js' => array('jquery-ui-datepicker'), 'css' => array('jqui') ),
		'codeeditor'  => array( 'js' => array('ace-editor'), 'css' => array() ),
		'sorter'      => array( 'js' => array('select2-sortable'), 'css' => array('select2-css', 'jqui') ),
		'fontawesome' => array( 'js' => array('select2'), 'css' => array('select2-css') ),
		'wpeditor'    => array( 'js' => array('kia-metabox'), 'css' => array() ),
	)

);

/**
 * EOF
 */