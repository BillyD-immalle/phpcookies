<?php
setcookie("usernamecookie", $_POST["username"], time() + (86400 * 30));
if(isset($_COOKIE["usernamecookie"])){
	echo "Welcome, " . $_COOKIE["usernamecookie"] . "!";
}
?>