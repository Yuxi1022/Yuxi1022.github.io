<?php

    $isForm = FALSE;
    $activePage = 'Login';

    require_once 'header.php';

	if(isset($_SESSION['user']))
	{
		?>
		<script>
			document.location = '/about';
		</script>
		<?php
		exit();
	}

/*    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Perform login sequence
        //require_once 'database.php';

        global $usersRef;

        $snapshot = $usersRef->where('username', '==', $_POST['email'])->documents();

        $foundUser = False;
        foreach ($snapshot as $user)
        {
            $foundUser = True;
            if (password_verify($_POST['password'], $user['password']))
            {
                // $errorMessage = 'You logged in!';
                $_SESSION['user'] = $user['username'];
				$_SESSION['orgAdmin'] = false;
				$_SESSION['teamAdmin'] = false;

				//Setting Session variable if orgAdmin or teamAdmin
				if( $user['orgName'] !== null)
				{
					$_SESSION['orgAdmin'] = true;
				}
				if($user['teamName'] !== null)
				{
					$_SESSION['teamAdmin'] = true;
				}
				
                require 'login_successful.php';
                exit();
            }
            else
            {
                $errorMessage = 'Unable to login: Username or Password incorrect';
            }
        }
        if (!$foundUser)
        {
            $errorMessage = 'Unable to login: Username or Password incorrect';
        }
    }
*/
?>

    <div class="container-fluid">
    <div class="row">
    <div class="col-xl-9 col-lg-11 m-2 pb-4 rounded text-center text-light mx-auto">


            <h1>Login</h1>
            <?php if(isset($errorMessage)) { ?>
            <h3>
                We're sorry, but we encountered a problem during your login.<br>
                Please check your details and try again.<br>
                <code class="text-danger"><?php echo $errorMessage; ?></code>
            </h3>
            <?php } ?>
            <section class="jumbotron text-center bg-dark border-primary border">
                <div class="container">
                    <form action="" method="POST">
                        Email Address:<br>
                        <input type="email" name="email" placeholder="you@example.com" required autofocus><br><br>
                        Password:<br>
                        <input type="password" name="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required><br><br>

                        <input class="btn btn-primary" type="submit" value="Login">
                    </form>
                    <br>
					New to This Website?<br>
                    <a href="register.php">Register an account</a>
                </div>
            </section>



    </div><!-- /.col-lg-8 -->

    </div><!-- /.row -->

    </div><!-- /.container -->

<?php

    require 'footer.php';

?>
