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
define( 'DB_NAME', 'bd-wordpress' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'LR<%?qP0^$/vG_2;9zO?<SNuq$RL~`C:~5,.K7yN2`X]PHBb|2LB~Se]5m%i]bmi' );
define( 'SECURE_AUTH_KEY', '&UT=[4!f*7A6Op _:)gr({}/IYmxgDF+ 9UqVDE|OS-bHfQe%`c!>9RYh4]#yQS]' );
define( 'LOGGED_IN_KEY', 's256y9?SjOwV)GNQ#wk`)pN mM]k1q_o[&?fW;O/.V$BT;lmicB%`USvA%CjWc(I' );
define( 'NONCE_KEY', 'kd>5vGPW`4T{:-Z?,E<|ZlfVpdPk.V=/.>7}{Pn-Ex. Hic3Pi-*X3h<};&wb0su' );
define( 'AUTH_SALT', '=+G};f|9W|$`/zuh|W;tr?XQk$s]Py}=?}<K~cZx|[Um[8A*i2_#A.}_9KL:XMcn' );
define( 'SECURE_AUTH_SALT', '9!b>E29Zj~E1}k{XMe<|xEF].FqK$nrow&9q}1wVtjjIrS^2V%*PkzWB4!92s~ h' );
define( 'LOGGED_IN_SALT', 'CmA3:x`z36Q/iRyuCaUmo=(.kB.}=.:w!Z6K&#%.1gV3Lxx%ZvlZph=[+P8=n!xm' );
define( 'NONCE_SALT', 'Yd:D94@r5P] B{gIWdMi}skjTF1|iHz ?ghU10ea;:n`B;,oE8qIb^sTld>TU^Cs' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

