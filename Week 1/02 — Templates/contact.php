<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include_once('nav.inc.php');
    ?>

    <main>
        <h1>Contact</h1>

        <form>
            Name:<br>
            <input type="text" name="firstname"><br>
            Email:<br>
            <input type="text" name="email"><br>
            Message:<br>
            <input type="text" name="message" id="message"> 
            <br><br>
            <input type="submit">
        </form>
    </main>
    <?php
        include_once('footer.inc.php');
    ?>
</body>
</html>