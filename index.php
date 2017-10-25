<?php
  
    $cars = [                                      // een multi dimensionele array
        ['Volvo', 22, 18],
        ['BMW', 15, 13],
        ['Saab', 0, 5],
        ['Land Rover', 17, 15],
    ];
    sort($cars);                                   // sort($arrayname); can be used to sort arrays alphabetically
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Sort array alphabetically></title>
</head>
<body>
    <div class="container">
        <table style="width:50%">
            <tr>
                <th>Merk</th>
                <th>Stock</th>
                <th>Aantal verkocht</th>
                <th>totaal aantal</th>
            </tr>
  
                <?php 
                $class = "stock";
                for($i=0; $i<count($cars); $i++){                       // count($cars) aantal rijen
                    echo "<tr>";                                        //
                    
                   
                                                                
                    for ($j=0; $j<count($cars[$i]); $j++){              // count($cars[i]) aantal kolommen 

                        
                        if (($i % 2) == 1){                                                     // if the rij is oneven een grijze achtergrond
                            $class = "=grijsRijen' style='background-color:grey";
                        }
                        if (($i % 2) == 0){ 
                            $class = "='cyanRijen' style='background-color:cyan";              // if even a cyan achtergrond 
                        
                        }
                        if($cars[$i][$j] === 0 && $j === 1){                                   // if any value in the 2nd kolom is 0, change its class to outofstock
                            $class = "='outOfStock' style='background-color:red";               
                           
                          
                        } 
                        echo "<td class='".$class."'>".$cars[$i][$j]."</td>";                  // 3* td inside each tr
                                               
                    }                                                   // de [i] zijn rijen en [j] de kolommen
                    echo "</tr>";
                }
                
                ?>

        </table>
    </div>

 
    


</body>
</html>