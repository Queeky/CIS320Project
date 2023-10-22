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
    echo "<li><a href='about.php' target='_blank'>ABOUT</a></li>"; 
    echo "<li><a href='index.php' target='_blank'>CONTACT US</a></li>"; 
    echo "</ul>"; 
    echo "</nav>"; 
}

displayHeader(); 
displayNav(); 

?>