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
define('AUTH_KEY', 'NCc#Go|kI2Cf={StsK[S]Ya;A:.MfW;_!;LDF#/j~L*f3wc`$t{7+7]~d(Y%@>ZD');
define('SECURE_AUTH_KEY', 'kJrg?+qSTrwqV-aTUkWvmuA!FM1rt,{NB17oKc;EwJtN$%Z<$;,s|`1u3M,rsET~');
define('LOGGED_IN_KEY', 'o}.gv4(D@!~u}w$.~)7V=k^<q:v]T5p:QZM~&(AYJKVmI&yLtt40ly Xh)cd^U5W');
define('NONCE_KEY', '70U`P<WOZ{05`.e}-$pcq(C1vFC],Z:5+M9kOoN=9U4bG(xbM33sGv.,-`q5!/)]');
define('AUTH_SALT', '@USnhW{E.7p& ]ET,e`xDXYG,HJ:)*nURH=xHyatT$WOt)OrZ*LERCS=I7yEPa^g');
define('SECURE_AUTH_SALT', 'ETEvA5N*c0dVs(zLn@u*/`Wpg38]n-+9EZQ@J!I86-DTdAZ?z5|tX*ZO*m:8%rb,');
define('LOGGED_IN_SALT', 'jy=PW?ac>3rnE7wyyGWCICO-!h.HIdL[=]<}bmn1^L}+an^vwKVR05/%{cMiOx?Z');
define('NONCE_SALT', '7(1BDd7E:]InJG>-[dK.3rbEx=kTpn+G:=?EB!j]^kb*s14;%Tlj$6YxQVM 4;jy');

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

