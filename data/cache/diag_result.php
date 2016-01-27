<?php $diagResults = array (
  'Client' => 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0',
  'Command Line Available' => 'No : ',
  'DOM Enabled' => 'Yes',
  'GD Enabled' => 'Yes',
  'Upload Max Size' => '128M',
  'Memory Limit' => '512M',
  'Max execution time' => '300',
  'Safe Mode' => '0',
  'Safe Mode GID' => '0',
  'Xml parser enabled' => '1',
  'MCrypt Enabled' => 'Yes',
  'Serveur OS' => 'WINNT',
  'Session Save Path' => 'C:/Bitnami/WAPPST~1.37-/php/tmp',
  'Session Save Path Writeable' => true,
  'PHP Version' => '5.4.37',
  'Locale' => 'C',
  'Directory Separator' => '\\',
  'Upload Tmp Dir Writeable' => true,
  'PHP Upload Max Size' => 134217728,
  'PHP Post Max Size' => 134217728,
  'Users enabled' => true,
  'Guest enabled' => false,
  'Writeable Folders' => '[<b>conf.serial</b>:true,<br> <b>auth.serial</b>:true,<br> <b>logs</b>:true,<br> <b>cache</b>:true]',
  'Zlib Enabled' => 'Yes',
);$outputArray = array (
  0 => 
  array (
    'name' => 'AjaXplorer version',
    'result' => false,
    'level' => 'info',
    'info' => 'AJXP version : 4.2.3',
  ),
  1 => 
  array (
    'name' => 'Client Browser',
    'result' => false,
    'level' => 'info',
    'info' => 'Current client Mozilla/5.0 (Windows NT 6.2; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0',
  ),
  2 => 
  array (
    'name' => 'PHP Command Line',
    'result' => false,
    'level' => 'warning',
    'info' => 'Php command line not detected, this is NOT BLOCKING, but enabling it could allow to send some long tasks in background. If you do not have the ability to tweak your server, you can safely ignore this warning.<br> On Windows, try to activate the php COM extension, and set correct rights to the cmd exectuble to make it runnable by the web server, this should solve the problem.',
  ),
  3 => 
  array (
    'name' => 'DOM Xml enabled',
    'result' => true,
    'level' => 'error',
    'info' => 'Dom XML is required, you may have to install the php-xml extension.',
  ),
  4 => 
  array (
    'name' => 'PHP error level',
    'result' => false,
    'level' => 'info',
    'info' => 'E_ERROR | E_WARNING | E_PARSE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING | E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE | E_STRICT',
  ),
  5 => 
  array (
    'name' => 'PHP GD version',
    'result' => true,
    'level' => 'warning',
    'info' => 'GD is required for generating thumbnails',
  ),
  6 => 
  array (
    'name' => 'PHP Limits variables',
    'result' => false,
    'level' => 'info',
    'info' => '<b>Testing configs</b>
Upload Max Size=128M
Memory Limit=512M
Max execution time=300
Safe Mode=0
Safe Mode GID=0
Xml parser enabled=1',
  ),
  7 => 
  array (
    'name' => 'MCrypt enabled',
    'result' => true,
    'level' => 'warning',
    'info' => 'MCrypt is required for generating publiclets',
  ),
  8 => 
  array (
    'name' => 'PHP operating system',
    'result' => false,
    'level' => 'info',
    'info' => 'Current operating system WINNT',
  ),
  9 => 
  array (
    'name' => 'PHP Session',
    'result' => false,
    'level' => 'info',
    'info' => '<b>Testing configs</b>',
  ),
  10 => 
  array (
    'name' => 'PHP version',
    'result' => true,
    'level' => 'error',
    'info' => 'Minimum required version is PHP 5.1.0, PHP 5.2 or higher recommended when using foreign language',
  ),
  11 => 
  array (
    'name' => 'SSL Encryption',
    'result' => false,
    'level' => 'warning',
    'info' => 'You are not using SSL encryption, or it was not detected by the server. Be aware that it is strongly recommended to secure all communication of data over the network.<p class=\'suggestion\'><b>Suggestion</b> : if your server supports HTTPS, set the AJXP_FORCE_REDIRECT_HTTPS parameter in the <i>conf/bootstrap_conf.php</i> file.</p>',
  ),
  12 => 
  array (
    'name' => 'Server charset encoding',
    'result' => false,
    'level' => 'warning',
    'info' => 'You must set a correct charset encoding in your locale definition in the form: en_us.UTF-8. Please refer to setlocale man page. If your detected locale is C, please check the <a href="http://www.ajaxplorer.info/wordpress/documentation-3/chapter-faq/#toc-i-have-a-warning-concerning-the-character-encoding-when-i-first-start-ajaxplorer-what-should-i-do">F.A.Q.</a>. Detected locale: C (using UTF-8)<p class=\'suggestion\'><b>Suggestion</b> : Set the AJXP_LOCALE parameter to the correct value in the <i>conf/bootstrap_conf.php</i> file</p>',
  ),
  13 => 
  array (
    'name' => 'Upload particularities',
    'result' => false,
    'level' => 'info',
    'info' => '<b>Testing configs</b>
Upload Tmp Dir Writeable=1
PHP Upload Max Size=134217728
PHP Post Max Size=134217728',
  ),
  14 => 
  array (
    'name' => 'Users Configuration',
    'result' => false,
    'level' => 'info',
    'info' => 'Current config for users',
  ),
  15 => 
  array (
    'name' => 'Required writeable folder',
    'result' => false,
    'level' => 'info',
    'info' => '[<b>conf.serial</b>:true,<br><b>auth.serial</b>:true,<br><b>logs</b>:true,<br><b>cache</b>:true]',
  ),
  16 => 
  array (
    'name' => 'Zlib extension (ZIP)',
    'result' => false,
    'level' => 'info',
    'info' => 'Extension enabled : 1',
  ),
  17 => 
  array (
    'name' => 'Filesystem Plugin
 Testing repository : Archivos por Defecto',
    'result' => true,
    'level' => 'error',
    'info' => '',
  ),
  18 => 
  array (
    'name' => 'Filesystem Plugin
 Testing repository : Mis Archivos',
    'result' => true,
    'level' => 'error',
    'info' => '',
  ),
); ?>