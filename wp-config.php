<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define('DB_NAME', 'ilajywp');

/** اسم مستخدم قاعدة البيانات */
define('DB_USER', 'root');

/** كلمة مرور قاعدة البيانات */
define('DB_PASSWORD', '');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8mb4');

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nDwp~,*q[.E$ MS0,e?L(Y{B(M<9P0vK0]PAu#E !nwwE%zcO5d<Cc@/WJE7M=Az');
define('SECURE_AUTH_KEY',  'U&ML5)!S5(5{3k&1[+@50dt3Q2W2-cC%aSd=-sqe*R}k}wpH8E*Jq,<!{Q$GGD^P');
define('LOGGED_IN_KEY',    'hY{/(9;P>G[,Ai@S3J)z4>H?N;WS3aaKh)U7-3C_6E/Vh`-Qw}0@Qm1E<{rg2t23');
define('NONCE_KEY',        'eZse<ze|S<^Sk>@nx7xCwC5%xjc%=N>OAw<+,:2P#D@5/,f<Bau9eLm.CC6+Gltb');
define('AUTH_SALT',        'keGwFab9aAyow>/+&^x.;qF6d:IgSpZG@w}pE/ybQlD*ZgBoKI@,eUSrE7lG_oTo');
define('SECURE_AUTH_SALT', 'k;l-o+#!PpO`khGvU~1awLwNO]>wcY8inmrB.=BUq~Oti&J,R)[K,>U#O}?$-~Ea');
define('LOGGED_IN_SALT',   'zMWm,J{-9Db*>}m@.Xg[|nQcJv,j8W2vA}h/ZU^qN^gnFyX[mF~ss>j6*opxM&!p');
define('NONCE_SALT',       '2h;hA;#=w&`h4Y~gurUH#};uX@j~b52zkg!2Hr]$0YjpC4}6D+CQ4VtZ^F3IC}9I');

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix  = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once(ABSPATH . 'wp-settings.php');