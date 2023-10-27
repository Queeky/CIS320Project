<?php 

$results = file_get_contents("Pets.json"); 
$data = json_decode($results); 

function displayPets($data) {
    foreach ($data as $pets) {
        foreach ($pets as $pet) {
            echo "<div class='sub-box pets'>"; 

            echo "<img src='$pet->Image'>"; 
            echo "<h3>$pet->Name</h3>"; 
            echo "<div>"; 
            echo "<p><span>Age:</span> $pet->Age</p>"; 
            echo "<p><span>Sex:</span> $pet->Sex</p>";
            echo "<p><span>Breed:</span> $pet->Breed</p>";
            echo "</div>"; 

            echo "</div>"; 
        }
    }
}

displayPets($data); 

?>