<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $Username = $_POST["username"];
    $Password = $_POST["password"];
    $ConfirmPassword = $_POST["confirm-password"];


	if ($Password == $ConfirmPassword ) {echo  "registration successful.<br>"; echo $Username;} 
else {echo "password do not match.";} 

    

}

?>