<?php
    /*
    creato da l0m1s - lukes1582@gmail.com
    ***/



    $mysqli = new mysqli("localhost", "root", "1234", "covid19");

    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }

    // Attempt select query execution
    $sql = "SELECT * FROM tab_dpc_covid19_ita_province";
    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            echo '<table class="table table-head-fixed text-nowrap">';
                echo "<tr>";
                    echo"
                    <th>ID</th>
                    <th>Data</th>
                    <th>Stato</th>
                    <th>Codice regione</th>
                    <th>Denominazione regione</th>
                    <th>Codice provincia</th>
                    <th>Denominazione provincia</th>
                    <th>Sigla provincia</th>
                    <th>Totale casi</th>";
                echo "</tr>";
          //     <th>Latitudine </th>
          //     <th>Longitudine</th>
            while($row = $result->fetch_array()){
                echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['data'] . "</td>";
                    echo "<td>" . $row['stato'] . "</td>";
                    echo "<td>" . $row['codice_regione'] . "</td>";
                    echo "<td>" . $row['denominazione_regione'] . "</td>";
                    echo "<td>" . $row['codice_provincia'] . "</td>";
                    echo "<td>" . $row['denominazione_provincia'] . "</td>";
                    echo "<td>" . $row['sigla_provincia'] . "</td>";
                    echo '<td><span class="tag tag-danger">' . $row['totale_casi'] . '</span></td>';
                echo "</tr>";
                //  echo "<td>" . $row['lat'] . "</td>";
                //  echo "<td>" . $row['long'] . "</td>";
            }
            echo "</table>";
            // Free result set
            $result->free();
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }

    // Close connection
    $mysqli->close();
echo "  </tbody>
</table>"
?>
