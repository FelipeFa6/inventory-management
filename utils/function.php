<?php
/* See LICENSE file for copyright and license details.
 *
 * Dependencies:
 * ---
 * - config.php (to access the db credentials).
 * - connection.php (to get the connection).
 *
 * Connections are made while executing the functions,
 * not before.
 *
 */

// Read Data
function getAllData($table)
{
	/*
	 * The table parameter is passed through
	 * POST Method.
	 */

	if (!isset($table)) {
		echo "ERROR:Table not passed on POST method.<br>";
		echo "Check utils/function.php";
		die();
	}

	$conn = require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/connection.php"; //Create connection
	if ($conn === false) {
		echo "Connection failed";
		mysqli_close($conn);
		die();
	}

	$query = "SELECT * FROM $table";
	$result = mysqli_query($conn, $query);

	require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/print.php"; //Create connection
	printTable($result, $table);
	mysqli_close($conn);
}

function createObject($table, $dataArray)
{
	$conn = require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/connection.php"; //Create connection
	switch ($table) {
		case "producto":
			$query = "INSERT INTO $table (nombre, precio, stock, categoria) VALUES (?, ?, ?, ?);";
			$dataTypes = "sdis";
			$stmt = mysqli_prepare($conn, $query);
			mysqli_stmt_bind_param(
				$stmt,
				$dataTypes,
				$nombre,
				$precio,
				$stock,
				$categoria
			);
			$nombre = $dataArray["nombre"];
			$precio = $dataArray["precio"];
			$stock = $dataArray["stock"];
			$categoria = $dataArray["categoria"];
			break;

		case "cuenta":
			$query = "INSERT INTO $table (username, password) VALUES (?, ?);";
			$dataTypes = "ss";
			$stmt = mysqli_prepare($conn, $query);
			mysqli_stmt_bind_param(
				$stmt,
				$dataTypes,
				$username,
				$password
			);
			$username = $dataArray["username"];
			$password = $dataArray["password"];
			break;

		default:
			echo "Switch option not recognized in the 'createObject()' function.<br>";
			echo "Check under utils/function.php the 'createObject()' function.";
			die();
			break;
	}

	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
}

function deleteObject($table, $idObject)
{
	$query = "DELETE FROM $table WHERE id = $idObject";
	$conn = require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/connection.php"; //Create connection

	try {
		mysqli_query($conn, $query);
		mysqli_close($conn);
	} catch (Exception $E) {
		echo "Failed to execute delete query<br>";
		echo "utils/function.php deleteObject()<br>";
		echo "ERROR::";
		echo $E->getMessage();
		die();
	}
}

function login($username, $password)
{
	$query = "SELECT * FROM cuenta WHERE username=? AND password=?";
  $conn = require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/connection.php";

	if (!($stmt = mysqli_prepare($conn, $query))) {
		echo "Error on prepare statement.";
		echo "utils/function.php login()";
		die();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $password);
	mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($result);

	//Close connections
	mysqli_stmt_close($stmt);
  mysqli_close($conn);

	return $row;
}
