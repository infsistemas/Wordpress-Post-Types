<?php
/*
Plugin Name: Formularios
Description: Formularios para el proyecto Transfronterizo
Author: Javier Rguez.
Version: 1.0.0
*/


class options_page {

	function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	function admin_menu() {
		add_options_page(
			'Page Title',
			'Circle Tree Login',
			'manage_options',
			'options_page_slug',
			array(
				$this,
				'settings_page'
			)
		);
	}

	function  settings_page() {
		echo 'This is the page content';
	}
}

new options_page;

//--------------------------

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        __( 'Custom Menu Title', 'textdomain' ),
        'custom menu',
        'manage_options',
        'formularios/formularios-admin.php',
        '',
        plugins_url( 'formularios/images/icon.png' ),
        6 // posicion del menu
			/*
			2 – Dashboard
			4 – Separator
			5 – Posts
			10 – Media
			15 – Links
			20 – Pages
			25 – Comments
			59 – Separator
			60 – Appearance
			65 – Plugins
			70 – Users
			75 – Tools
			80 – Settings
			99 – Separator
			*/
    );
	
	add_submenu_page('my-top-level-slug', 'My Custom Page', 'My Custom Page', 'manage_options', 'my-top-level-slug');
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );


class Simple_WP_Admin_Menu {
 
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'register_menus' ) );
	}
	 
	public function register_menus() {
		add_menu_page( 
				 __( 'Simple', 'simple-wp' ),
				 __( 'Simple', 'simple-wp' ), 
				 'administrator', 
				 'simplewp',
				 'simple_dashboard'
		);

		// subpagina
		add_submenu_page( 'simplewp',
							__( 'Ingresos', 'simple-wp' ),
							__( 'Ingresos', 'simple-wp' ), 
						   'administrator', 'simplewp-ingresos',
						   'simple_ingresos' // FunciÃ³n para pintar la pÃ¡gina de esta opciÃ³n de menÃº
		);  
	}
}
 
$simplewp_menu = new Simple_WP_Admin_Menu;

// FunciÃ³n que pinta la pÃ¡gina de ingresos
function simple_ingresos() {
?>
 <div class="wrap">
 <h2><?php _e( 'Listado de Ingresos', 'simple-wp' ); ?></h2>
 <p> Esto es un ejemplo de pagina del panel de administraciÃ³n de WordPress </p>
 
 </div>
<?php
}


#function includes() { 
# 
#	require_once SIMPLEWP_PLUGIN_DIR . 'includes/class-db.php';
#	require_once SIMPLEWP_PLUGIN_DIR . 'includes/class-orders-db.php';
#	requere_once SIMPLEWP_PLUGIN_DIR . 'includes/class-ingresos-db.php';
#
#	require_once SIMPLEWP_PLUGIN_DIR . 'includes/class-capabilities.php';
#
#	if( is_admin() ) {
#
#		require_once SIMPLEWP_PLUGIN_DIR . 'includes/admin/class-menu.php';
#		require_once SIMPLEWP_PLUGIN_DIR . 'includes/admin/dashboard/dashboard.php';
#		require_once SIMPLEWP_PLUGIN_DIR . 'includes/admin/orders/orders.php';
#		require_once SIMPLEWP_PLUGIN_DIR . 'includes/admin/ingresos/ingresos.php';
#	}
#
#	require_once SIMPLEWP_PLUGIN_DIR . 'includes/class-templates.php';
#	require_once SIMPLEWP_PLUGIN_DIR . 'includes/install.php';
# 
#}

