<!DOCTYPE html>
<html>
<head>
	<title>Přihlášení</title>
	<link rel="stylesheet" type="text/css" href="../css/form.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Přihlášení</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Uživatelské jméno</label>
     	<input type="text" name="uname" placeholder="Uživatelské jméno"><br>

     	<label>Heslo</label>
     	<input type="password" name="password" placeholder="Heslo"><br>

            <div class="ucet"> 
                <p>Ještě nemáš účet?</p><a href="../php/register.php">Zaregistruj se</a>
            </div>


     	<button class="button" type="submit">Přihlásit se</button>
     </form>
</body>
</html>