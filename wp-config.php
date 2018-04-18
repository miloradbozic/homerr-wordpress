<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define('DB_NAME', 'homerr');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'VDlZAhEK7vVrBZgl5pMmpJqCz65f9WsiVsik2RJ3');
define('SECURE_AUTH_KEY',  'LuvpQwPdT3ZdeziqNB4Qcg3mVg9IBYJcm3AmEWF0');
define('LOGGED_IN_KEY',    'IOtuYnb93UhWej7AZSWZHskhTiknMsl7o7vQT3dQ');
define('NONCE_KEY',        'cOh5XEWGJZlstcTO489wH8rS0ogWI2bsSvgNL6U5');
define('AUTH_SALT',        'wSiGietiFWK5CDGxRNMvKIq77ACuN2ZaPXvdOn7x');
define('SECURE_AUTH_SALT', 'Q8koDtcaRrhqN4GkGtLwpZxiXU8hgMp7BnYVP2qg');
define('LOGGED_IN_SALT',   'nr8lybfFc7fq5eII7s6AZX8DNHcwwdd506RtDJ5a');
define('NONCE_SALT',       'i7HZbjr2Ke70RAsIrtAg1cr4uzodaf3uSJiDCV4Z');

$table_prefix  = 'wp_3001bccbc4_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
