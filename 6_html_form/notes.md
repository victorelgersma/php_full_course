# 6. Basics of PHP form Handling 
- [link](https://www.youtube.com/watch?v=bOqTCDfc7Tk)
- check that method is POST by using the superglobal `$_SERVER["REQUEST METHOD"] == "POST"`
- every time you grab data from a user, make sure to use the `htmlspecialchars` function to sanitize user data
- send the user back to the front page with a header: header("Location: ../index.php");
- the `exit()` function in PHP to quit the execution of a script (like `exit` in bash)
