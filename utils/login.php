<?php
/* See LICENSE file for copyright and license details.*/

if (!isset($_POST["submit"])) {
  echo "Submit not set.";
  die();
}

if (!isset($_POST["username"])) {
  echo "Username not set.";
  die();
}

if (!isset($_POST["password"])) {
  echo "Password not set.";
  die();
}

$username = $_POST["username"];
$password = $_POST["password"];

require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/function.php";
$row = login($username, $password);

if ($row) {
  session_start();
  $_SESSION["id"] = $row["id"];
  $_SESSION["username"] = $row["username"];
  header("location: /index.php");
  exit();
}

header("location: /login.php?login=false");
