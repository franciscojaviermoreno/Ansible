<?php
/**
 * Configuración de WordPress
 *
 * Este archivo se utiliza para configurar la instalación de WordPress. Contiene información
 * como los detalles de acceso a la base de datos. No edites este archivo directamente,
 * en su lugar, utiliza el archivo wp-config.php que se genera a partir de este archivo.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Configuración de la base de datos
define( 'DB_NAME', 'wordpress-bd' );
define( 'DB_USER', 'wordpress-user' );
define( 'DB_PASSWORD', '1234' );
define( 'DB_HOST', '192.168.10.62' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// Claves únicas de autenticación y seguridad
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// Prefijo de la tabla de la base de datos para WordPress
$table_prefix = 'wp_';

// Debugging
define( 'WP_DEBUG', false);

// Ajustes de WordPress
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __DIR__ ) . '/' );
}
require_once ABSPATH . 'wp-settings.php';

