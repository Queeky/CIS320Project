<?php 
    $results = file_get_contents("Supplies.json"); 
    $data = json_decode($results); 

    function displaySupplies($data) {
        foreach ($data as $key => $value) {
            echo "<ul>"; 
            if ($value < 5) {
                echo "<li>$key</li>"; 
            }

            echo "</ul>"; 
        }
    }

    displaySupplies($data); 

?>