<?php

# var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstName = htmlspecialchars($_POST["firstname"]);
}



