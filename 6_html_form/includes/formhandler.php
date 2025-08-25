<?php # no closing tag as this is a pure PHP file

# this includes folder should not be pulic though. 

/* var_dump($_SERVER["REQUEST_METHOD"]); */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// sanitize data
	$firstname = htmlspecialchars($_POST["firstname"]);
	$lastname= htmlspecialchars($_POST["lastname"]);
	$favouritepet= htmlspecialchars($_POST["favouritepet"]);

// chcek that 
    if (empty($firstname) || empty($lastname) || empty($favouritepet)) {
        header("Location: ../index.php");
        exit();
    }

    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;

}
   # can send user back
header("Location: ../index.php");
