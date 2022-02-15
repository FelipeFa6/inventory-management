<?php
function printTable($result, $table)
{
	while ($array = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		switch ($table) {
			case "producto":
				echo "<tr>";
				echo "<th scope='row'>" . $array["id"] . "</th>";
				echo "<td>" . $array["nombre"] . "</td>";
				echo "<td>" . $array["precio"] . "</td>";
				echo "<td>" . $array["stock"] . "</td>";
				echo "<td>" . $array["fk_categoria"] . "</td>";
				echo "</tr>";
				break;

			case "categoria":
				echo "<tr>";
				echo "<th scope='row'>" . $array["id"] . "</th>";
				echo "<td>" . $array["nombre"] . "</td>";
				echo "<td>";
				echo "<form action='utils/delete.php' method='POST'>";
				echo "<input type='hidden' name='table' id='table' value='categoria'/>";
				echo "<input type='hidden' id='id' name='id' value='" .
					$array["id"] .
					"'>";
				echo "<button type='submit' name='submit' class='btn btn-sm btn-danger'>Borrar</button>";
				echo "</form></td>";

				echo "</td>";
				echo "</tr>";
				break;

			//case "historial":
				//echo "<tr>";
				//echo "<th scope='row'>" . $array["id"] . "</th>";
				//echo "<td>" . $array["descripcion"] . "</td>";
				//echo "<td>" . $array["fecha"] . "</td>";
				//echo "<td>" . $array["fk_cuenta"] . "</td>";
				//echo "<td>" . $array["fk_producto"] . "</td>";
				//echo "</tr>";
				//break;

			default:
				echo "Switch option not recognized in the 'printTable()' function.<br>";
				echo "Check under utils/function.php the 'printTable()' function";
				die();
				break;
		}
	}
}

?>
