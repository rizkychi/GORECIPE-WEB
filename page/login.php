<div class="container" id="login">
	<div class="flex-grid" style="justify-content: center;">
		<div class="outer">
			<div class="box animated zoomIn faster">
				<div class="login-img" style="background-image:url('img/tentang/banner-tentang.jpg')"></div>
				<div class="login-form">
					<form method="POST">
						<div class="username">
							<svg class="login__icon name svg-icon" viewBox="0 0 20 20">
								<path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8"/>
							</svg>
							<input type="text" name="user" placeholder="Username" class="user">
						</div>
						
						<div class="password">
							<svg class="login__icon svg-icon" viewBox="0 0 20 20">
								<path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
							</svg>
							<input type="password" name="pass" placeholder="Password" class="pass">
						</div>
						
						<div class="button">
							<input type="submit" name="login" value="Login" class="login">
						</div>
					</form>
					<p class="register">Belum punya akun?<br><span style="font-size:18px;">Daftar <a href="?p=daftar">disini</a></span></p>
				</div>
			</div>
		</div>
	</div>
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
			echo '<script>alert("Username/Password salah!");</script>';
        }
    }
?>
