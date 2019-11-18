<?php
/**
 * Created by PhpStorm
 * User: aaronkeith
 * Date: 10/21/2019
 * Time: 5:13 PM
 */
$pagetitle = "Display User Account";
include_once "header.php";

try{
    //query the data
    $sql = "SELECT * FROM jobuser";
    $result = $pdo->query($sql);
    ?>
    <?php
    echo "<table>
            <h2 class='center'>Available Students</h2>
            <tr><th>Username</th><th>Email</th><th>Computer Skills</th></tr>";
    //loop through the results and display to the screen
    foreach ($result as $row){
        echo "<tr><td>{$row['username']}</td><td>" .$row['email']."</td><td>{$row['skills']}</td><td>"; "</tr>";
    }
    echo "</table>";
}
catch (PDOException $e)
{
    die( $e->getMessage() );
}
require_once "footer.php";
