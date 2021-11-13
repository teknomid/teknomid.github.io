<?php

define( 'DB_NAME', 'nlbitdzj_wp_qiayi' );
define( 'DB_USER', 'nlbitdzj_wp_pjcib' );
define( 'DB_PASSWORD', 'Oz3rO91x*23tVl!w' );
define( 'DB_HOST', 'localhost:3306' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY', '92Y3oOP|836|5#U-*Ni#[O*(82p1#yYs%7E24R+TjYt2n3O2[(j4E_n2*/*7h~3@');
define('SECURE_AUTH_KEY', '1JO@:Qh%_1l4/[EgH4*(J#14Fy@O(_2]v|rS0*8:tdGkqn(Ql_l9XbXyEZ6V:L-+');
define('LOGGED_IN_KEY', '5]p17h5EENGXm(|E4y0R12/8o6]MmQ~8&L-a0Kwpoh#u1;ca!f0)N1@H3G2QL5d1');
define('NONCE_KEY', 'Y|**uqC7yP~xi3W4U[)7H2]4R%c4qF_V*9F7(31O/!6Q~_u7-uq%_&7f%(8;C_3~');
define('AUTH_SALT', '7g@7;hp#)jLfd-|3:24+6FD136Yvp%[p]#g4Jq68K#8#|TUq0)~7WP4z#b1qFU+5');
define('SECURE_AUTH_SALT', 'xv6Wnz8YGuu&4vCI762ol3~1+It&ZS)zl#~*M4yudEg64]:7kWkvv53Qwm;87eR2');
define('LOGGED_IN_SALT', '/n-4_EV5|J8YSW4|Z_7Hh0K6253FKo]2i8NK72/x/7Wa+6GstW/88r077fX3%(Bp');
define('NONCE_SALT', 'N:8[3tZ6f1;67[W[Os]3w0hp/e@;Z9nT9ul4DZ2&1G)[j0k:mh5pPK0jE6)jo4vj');

$table_prefix = 'M8Ly0W_';

//define('WP_DEBUG', true);

define('WP_ALLOW_MULTISITE', true);
define('WP_AUTO_UPDATE_CORE', true);
define( 'CONCATENATE_SCRIPTS', false );
define( 'DISALLOW_FILE_EDIT', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
define( 'WP_MEMORY_LIMIT', '256M' );

define("LITESPEED_CFG_HTACCESS_BACKEND", "/home/nlbitdzj/public_html/.htaccess");
define("LITESPEED_CFG_HTACCESS", "/home/nlbitdzj/public_html/.htaccess");
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
