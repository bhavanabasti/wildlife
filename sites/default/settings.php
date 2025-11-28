<?php 

 if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
   include $app_root . '/' . $site_path . '/settings.local.php';
 }
$settings['hash_salt'] = 'FFhXwImw8eDHe_u_lCGzjabom7W8iz-mgn8znl3qIrmteTlbbAM59I8V8Me4E6k0g2GIj7DwXg';
$settings['config_sync_directory'] = 'sites/default/files/config/sync';
