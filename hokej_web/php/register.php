<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    <title>Registrace</title>
</head>
<body>
    <form action="register_process.php" method="post">
        <h2>Registrace</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        
        <label>Uživatelské jméno</label>
        <input type="text" name="uname" placeholder="Uživatelské jméno" required><br>
        
        <label>Heslo</label>
        <input type="password" name="password" placeholder="Heslo" required><br>

        <div class="ucet"> 
                <p>Máš již účet?</p><a href="../php/index.php">Přihlaš se</a>
            </div>
        
        <button type="submit">Registrovat</button>
    </form>
</body>
</html>
