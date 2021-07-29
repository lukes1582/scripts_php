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
    $sql = "SELECT * FROM tab_dpc_covid19_ita_andamento_nazionale";
    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            echo '<table class="table table-head-fixed text-nowrap">';
                echo "<tr>";
                    echo"
                    <th>ID</th>
                    <th>Data</th>
                    <th>Stato</th>
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
                echo "</tr>";
            while($row = $result->fetch_array()){
                echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['data'] . "</td>";
                    echo "<td>" . $row['stato'] . "</td>";
                    echo "<td>" . $row['ricoverati_con_sintomi'] . "</td>";
                    echo "<td>" . $row['terapia_intensiva'] . "</td>";
                    echo "<td>" . $row['totale_ospedalizzati'] . "</td>";
                    echo "<td>" . $row['isolamento_domiciliare'] . "</td>";
                    echo "<td>" . $row['totale_attualmente_positivi'] . "</td>";
                    echo "<td>" . $row['nuovi_attualmente_positivi'] . "</td>";
                    echo "<td>" . $row['dimessi_guariti'] . "</td>";
                    echo '<td><span class="tag tag-danger">' . $row['deceduti'] . '</span></td>';
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
