<?php
/**
 * Created by PhpStorm
 * User: aaronkeith
 * Date: 11/1/2019
 * Time: 12:40 PM
 */
$currentfile = "";

?>
<div class="topnav">
<ul>
    <?php
    echo ($currentfile == "index.php") ? "<li>Home</li>" : "<li><a href='index.php'>Home</a></li>";
    if(!isset($_SESSION['username'])){echo "<li><a href='login.php'>Login</a></li>";}
    if(isset($_SESSION['username'])){echo "<li><a href='logout.php'>Logout</a></li>";}
    echo ($currentfile == "register.php") ? "<li>Create New Account</li>" : "<li><a href='register.php'>Create New Account</a></li>";
    if(isset($_SESSION['username'])){echo "<li><a href='students.php'>Available Students</a></li>";}
    ?>
</ul>
</div>
