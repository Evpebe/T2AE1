<html>
    <head>
        <title>Examen Eva Perona</title>
        
    </head>
    <body>
        
            <?php
                echo "<h1>EXAMEN Eva Perona</h1>";

                $conn = mysqli_connect('database', 'root', 'root', "evpebe");
                $query = 'SELECT * FROM persona';
                $result = mysqli_query($conn, $query);

                echo '<table class="table table-striped">';
                echo 'ID NOMBRE ESTILO';
                while($value = $result->fetch_array(MYSQLI_ASSOC)){
                    echo '<tr>';
                    foreach($value as $element){
                        echo '<td>' . $element . '</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';

                $result->close();
                mysqli_close($conn);
            ?>
        
    </body>
</html>
