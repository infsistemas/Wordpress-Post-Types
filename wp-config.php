<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpresssae');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 't0 /us7*q9*=#7YC#K,x&%C*_O0Zf1w%B_.XrO3>WFDqYQeaA9C`X/WsRL7z[ZN;');
define('SECURE_AUTH_KEY', 'keINgYb}ERG>oU8.Agq`Fdtk_7eX=tN7MT#UQ~`5!PeROt|!++./^Bg*/)>,m#vQ');
define('LOGGED_IN_KEY', 'J]P@UO(6b?9$0iGKY)0K9eBUIA{HwB!y;bS^BQ5w|S/y#4 ;jJyh:QUrk}}p*6`/');
define('NONCE_KEY', '_+E=@ea>c|>2186lh?(17#9^fH3N%ohe.g}$?,x]Q9X9YunXC>}%)1nn0 UU|~f;');
define('AUTH_SALT', ':YEfKgFEXWFN+c<ra4(gTBE$TWee5Jv*-5KU:-U3~EHRYFe/lc9rZ2~hMCD;-v]k');
define('SECURE_AUTH_SALT', 'sEW![)/)l=G_gvtx>Kt,itt{f8pE3dY^[xF+Q!P].9u@yX%hg3rygSN* M7yR PA');
define('LOGGED_IN_SALT', 'FYIVpblrTcx>N-NZ~pL)jj&nN}Vm!,fa^UNf:x#+Hb6RbG64L0=hJ0,6imbImG90');
define('NONCE_SALT', 'yk&7%PC/Gd3vMr*R%WZ@3I8T#8MKn*,_^^KpLV_:/EVb{]32l+!3D@wVEf8bDeQV');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

