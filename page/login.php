<div class="container">
<form method="post"><br><br>
    <input type="text" name="user" id=""><br>   
    <input type="password" name="pass" id=""><br>
    <input type="submit" value="Submit"><br><br>
</form>
</div>
<?php
    if (isset($_POST["user"]) && isset($_POST["pass"])){
        $username = $_POST["user"];
        $password = $_POST["pass"];
        
        if ($username == 'admin' && $password == '123') {
            $_SESSION["user"] = $username;
            $_SESSION["login"] = true;
            
            header("Location: ?p=akun");
        } else {
            $_SESSION["login"] = false;
        }
    }
?>