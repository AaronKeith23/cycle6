<?php
/**
 * Created by PhpStorm
 * User: aaronkeith
 * Date: 11/1/2019
 * Time: 12:40 PM
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$pagetitle = "Homepage";
include_once "header.php";
?>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5o7mj88vhvtv3r2c5v5qo4htc088gcb5l913qx5wlrtjn81y"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<h2>Welcome to Aarons Internship Page</h2>
<img src="images/internship.jpg" alt="Internship" class="center">
<p>Welcome to my Cycle 6 Project, a Internship Posting Website</p>
<?php
"<br></br>";
require_once "footer.php";
?>


