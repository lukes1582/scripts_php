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
    $sql = "SELECT * FROM tab_dpc_covid19_ita_regioni";
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
                    <th>Ricoverati con sintomi</th>
                    <th>Terapia intensiva</th>
                    <th>Totale ospedalizzati</th>
                    <th>Isolamento domiciliare</th>
                    <th>Totale attualmente positivi</th>
                    <th>Nuovi attualmente positivi</th>
                    <th>Dimessi guariti</th>
                    <th>Deceduti</th>
                    <th>Totale casi</th>
                    <th>Tamponi</th>";
//                    <th>Latitudine</th>
//                    <th>Longitudine</th>
                echo "</tr>";
            while($row = $result->fetch_array()){
                echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['data'] . "</td>";
                    echo "<td>" . $row['stato'] . "</td>";
                    echo "<td>" . $row['codice_regione'] . "</td>";
                    echo "<td>" . $row['denominazione_regione'] . "</td>";
  //                  echo "<td>" . $row['lat'] . "</td>";
  //                  echo "<td>" . $row['long'] . "</td>";
                    echo "<td>" . $row['ricoverati_con_sintomi'] . "</td>";
                    echo "<td>" . $row['terapia_intensiva'] . "</td>";
                    echo "<td>" . $row['totale_ospedalizzati'] . "</td>";
                    echo '<td><span class="tag tag-danger">' . $row['isolamento_domiciliare'] . '</span></td>';
                    echo "<td>" . $row['totale_attualmente_positivi'] . "</td>";
                    echo "<td>" . $row['nuovi_attualmente_positivi'] . "</td>";
                    echo "<td>" . $row['dimessi_guariti'] . "</td>";
                    echo "<td>" . $row['deceduti'] . "</td>";
                    echo "<td>" . $row['totale_casi'] . "</td>";
                    echo "<td>" . $row['tamponi'] . "</td>";
                echo "</tr>";
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
