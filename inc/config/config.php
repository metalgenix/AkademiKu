<?php if (defined('GX_LIB') === false) die("Direct Access Not Allowed!");
/**
 * GeniXCMS - Content Management System
 *
 * PHP Based Content Management System and Framework
 *
 * @package GeniXCMS
 * @since 0.0.1 build date 20140925
 * @version 1.1.11
 * @link https://github.com/semplon/GeniXCMS
 * 
 * @author Puguh Wijayanto (www.metalgenix.com)
 * @copyright 2014-2020 Puguh Wijayanto
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 *
*/error_reporting(0);

// DB CONFIG
define('DB_HOST', 'localhost');
define('DB_NAME', 'akademiku');
define('DB_PASS', '');
define('DB_USER', 'root');
define('DB_DRIVER', 'mysqli');

define('SMART_URL', true); //set 'true' if you want use SMART URL (SEO Friendly URL)
define('GX_URL_PREFIX', '.html');

define('ADMIN_DIR', 'gxadmin');
define('USE_MEMCACHED', false);
define('SITE_ID', 'HoIT030S3cJNJmjytnDq');











##################################// 
# DON't REMOVE or EDIT THIS. 
# ==================================
# YOU WON'T BE ABLE TO LOG IN 
# IF IT CHANGED. PLEASE BE AWARE
##################################//
define('SECURITY_KEY', 'XvomTAA9rKH2DRQQWMHL7WA17HOTbeyftahYA65ScTTtCbaCavFGytzYMmX4SpIOkuFK2UTrl1SxtDwYTz0ALLkFT68ExEi8sBzCn9eeEQ3yGrnmvhFFlXniEgD9InIgjrquAV02XjKVp7bgO0f7hjXDyV33kGR6nXIi5PFu4E0HW5Uxg8mHpZek6QZWePBoszM2zFgf'); // for security purpose, will be used for creating password

        