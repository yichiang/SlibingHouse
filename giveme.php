<?php

 $connectstr_dbhost = '';
 $connectstr_dbusername = '';
 $connectstr_dbpassword = '';

 foreach ($_SERVER as $key => $value) {
 	     if (strpos($key, "MYSQLCONNSTR_") !== 0) {
 				          continue;
 	     }
       $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
 	     $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
 			 $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
 }

echo 'DB_USERNAME:'
echo $connectstr_dbusername;
echo "\n";
echo 'DB_PASSWORD:' + $connectstr_dbpassword + "\n";
echo 'DB_HOST' + $connectstr_dbhost + "\n";
