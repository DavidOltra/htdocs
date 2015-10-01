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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY', ';e^<|:afn+)n^Q{,+/CD,-aACn3HzE1+wIk+w*8+xfj7eC=!62#U>B dQGo3zB=x');
define('SECURE_AUTH_KEY', '^TUHBFL(udgi+Tswxilm~]OPR?A.>-)i>-zkw,6#;cExV|,Dvr}4KCmOWNN*@N`]');
define('LOGGED_IN_KEY', 'eUKD?+zo@[0Tfh48G;>7jB+YebSRZ>V-99:&L$t1SULkY?yP&N.UIGn-(8j#mOg,');
define('NONCE_KEY', '+_N8s%h@BKb% ZFTE+5p3p,l|rIM+`t2A:Wt<=76VPQYoZ/~D&+Qr#5XY.rX+.4I');
define('AUTH_SALT', 'EzSn[ZcNeXV+NzlhM/ ]@z~BmR*h+ko,QKJN b^~CY1lf1Rcnh{o4G|cd&w_6|Rt');
define('SECURE_AUTH_SALT', '<+Ee0SE]3`5cyEH3y6qsApd1mn9Op@hvp4ujTc+b/kbm7Y+cl0C*_O[}wZ9o+cVY');
define('LOGGED_IN_SALT', '*,c`hJLxmk)z.j.Rel*mv[YzDu2SIVxFy`Cu%tR?rJcNA/6GFj2&]oeh8zt SYSl');
define('NONCE_SALT', '_Y@%N`A>T[PB2nj]=qisa~--|KSd+;V4CH9N#}h9WekBX4Q-u`a35l{w1{ s1^{3');

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

