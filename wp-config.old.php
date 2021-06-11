<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache







/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the

 * installation. You don't have to use the web site, you can

 * copy this file to "wp-config.php" and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "imakina_learn" );


/** MySQL database username */

define( 'DB_USER', "imakina_learn" );


/** MySQL database password */

define( 'DB_PASSWORD', "xfYcyrLA" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'D&!0UW=)p:TKX/1j79{hf:~TSsZkE]lveO)lZ6C[IBE>PZ(>3RM8}Lx>{QvdiuK6' );

define( 'SECURE_AUTH_KEY',  '*LH7q*-&nXCURye1],mnG*FUkoDKS4`_]c:%5A#K%(y+|W1^9%%O+<I_kTVe 4)a' );

define( 'LOGGED_IN_KEY',    '/?|*$<!u(l[W Aq[A,[IcJ:e+aN {$QlpR^E*Gy}oM_rQyvAo`/qq=d ctqM=ocK' );

define( 'NONCE_KEY',        'w0}+Mf*g5TMf_|!}h +O_<_1?L@T!{8Od1u-Az%cFO]r?pz4@#z#Bp {uB40lMLS' );

define( 'AUTH_SALT',        'j)kFRHl-]_{NIO4X*(w3Irh9tcWD&jwlhJHuM2:2.}<_:f,!l{s458!xf?UrMbn3' );

define( 'SECURE_AUTH_SALT', '!Kc5h|_$>( x&sC66ZS::wLO9n>n 6u=Q[c{6KF3+7Z@=]@v>qdmDt&grJ/mQ -Y' );

define( 'LOGGED_IN_SALT',   'ku{81oE{zHkAz~1Jo#|]ngM+Q=()7Be4.pj94pJi*zP,8F5A!MKjQg!?uoT_R.L)' );

define( 'NONCE_SALT',       'HMXrqV=zl~0.YtfZeB:|1abIpTnk~_{k~?7n.d>-@b+ZLZ<2K^vFx+~O&c[2+,e]' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'oe_';


/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );
define('ALLOW_UNFILTERED_UPLOADS', true);




/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

