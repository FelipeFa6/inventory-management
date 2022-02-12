<?php
/* See LICENSE file for copyright and license details.
 *
 * Usage on parent directory:
 * ---
 * 	require "utils/connection.php";
 * 	$conf = include_once "utils/config.php";
 *
 * This is done because you (as a developer) will
 * use the config file (utils/config.php) in the
 * parent file. This is done to avoid loading the
 * same file multiple times
 *
 * Dependencies:
 * ---
 * Because this PHP code uses MySQL connections,
 * it is dependant on the following PHP extensions:
 *  extension=pdo_mysql
 *  extension=mysqli
 *
 */

$conf = include "config.php";

$db_host = $conf["db"]["host"];
$db_username = $conf["db"]["username"];
$db_password = $conf["db"]["password"];
$db_name = $conf["db"]["name"];

try {
  $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
  //echo "Connection Successful!"; //Used for debugging
} catch (Exception $E) {
  echo "Failed to connect! <br>";
  echo $E->getMessage();
}
