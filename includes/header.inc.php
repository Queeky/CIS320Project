<?php
function displayHeader() {
    echo "<header>"; 
    echo "<img src='images/cat-icon.png' alt=''>";
    echo "<h3>Animal Sanctuary</h3>"; 
    echo "</header>"; 
}

function displayNav() {
    echo "<nav>"; 
    echo "<ul class='nav-dropdown'>"; 
    echo "<li><a href='about.php'>ABOUT</a></li>"; 
    echo "<li><a href='index.php'>CONTACT US</a></li>"; 
    echo "<li><a href='pets.php'>PETS</a></li>";
    echo "<li><a href='supplies.php'>SUPPLIES</a></li>"; 
    echo "</ul>"; 
    echo "</nav>"; 
}

displayHeader(); 
displayNav(); 

?>