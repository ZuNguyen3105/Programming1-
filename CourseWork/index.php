<?php
$title = 'Internet Post Database';
ob_start();  //Since this command is called, any output data (e.g. HTML, echo, print) will not be displayed immediately on the browser but will be saved to the output buffer.
include 'templates/home.html.php';
$output = ob_get_clean(); //get content from cache and then clear that cache
include 'templates/layout.html.php'; //"include" an HTML file into the PHP code. This file can use the saved $output variable to display information on the user interface.
