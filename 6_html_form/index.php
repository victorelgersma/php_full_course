<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style>

:root {
    color-scheme: dark;
}
form > * {
display: block;
padding: 1em;
margin: 1em;
}
div > label {
margin-right: 1em;
}

body {
    width: 100vw;   
    height: 100vh;
}

main {
width: fit-content;
margin: auto;
}



</style>


<body>
<main>
	<form action="includes/formhandler.php" method="post">
		<label for="firstname">Enter first name:</label>
		<input required id="firstname" type="text" name="firstname" placeholder="Firstname...">

		<label for="lastname">Enter last name:</label>
		<input id="lastname" type="text" name="lastname" placeholder="Lastname">

    <div>
        <label for="favouritepet">What is your favorite pet?</label>
        <select id="favouritepet" name="favouritepet">
        
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
        </select>
    </div>
		<button type="submit">Submit </button>
	</form>
</main>
</body>
</html>
