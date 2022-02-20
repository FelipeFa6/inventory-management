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
				echo "<td>" . $array["categoria"] . "</td>";
				echo "</tr>";
				break;

      case "historial":
        echo "<tr>";
        echo "<th scope='row'>" . $array["id"] . "</th>";
        echo "<td>" . $array["descripcion"] . "</td>";
        echo "<td>" . $array["fecha"] . "</td>";
        echo "<td>" . $array["cuenta"] . "</td>";
        echo "<td>" . $array["producto"] . "</td>";
        echo "</tr>";
        break;

			default:
				echo "Switch option not recognized in the 'printTable()' function.<br>";
				echo "Check under utils/function.php the 'printTable()' function";
				die();
				break;
		}
	}
}

?>
