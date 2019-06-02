<div class="container">
<form method="post"><br><br>
    <input type="text" name="user" id=""><br>   
    <input type="password" name="pass" id=""><br>
    <input type="submit" value="Submit"><br><br>
</form>
</div>

<?php
    if (isset($_POST["user"])){
        $username = $_POST["user"];
        $password = $_POST["pass"];

        
        if ($username == 'admin' && $password == '123') {
            $_SESSION["user"] = $username;
            
            header("location:index.php");
        }
    }

?>