
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="validate.php" method="post">
        
        <div class="border">
            <label >
                User Name 
                <input type="text" name="user">
            </label>
            <br>
            <label >
                Password
                <input type="password" name="pass">
            </label>
            <br>
            <small class="error">
                <?php 
if (isset($_REQUEST["error"])) echo $_REQUEST["error"];

?>
</small>
</form>

<br>
<button type="submit">Next</button>
    
</body>
</html>
