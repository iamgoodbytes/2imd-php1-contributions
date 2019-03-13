<?php
    $page = basename($_SERVER['SCRIPT_NAME']);
    if($page == "index.php"){

?>
    <header>
        <nav>
            <a class="navLink active" href="index.php">Home</a>
            <a class="navLink" href="contact.php">Contact</a>
        </nav>
    </header>
<?php
    }elseif ($page == "contact.php"){
?>
    <header>
    <nav>
        <a class="navLink" href="index.php">Home</a>
        <a class="navLink active" href="contact.php">Contact</a>
    </nav>
    </header>
<?php
    }
?>