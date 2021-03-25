<link rel="stylesheet" type="text/css" href="style.css">
<center><h1><p class="text-primary">Add Games Success</p></center></h1>

<center><h2><form method="post" action="main.html">
        <input type="submit" value="Back to Menu">
    </form><h2></center><h2>
    <style>
        body{
            background-image: url("");
            background-size: cover;
        }
        </style>

<?php
    // connect database 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "project";
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    $mysqli->set_charset("utf8");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        // connect success, do nothing
        // echo "Connect success.";
    }
    if(isset($_POST['upload']))
{
    $coffeename = $_POST['coffeename'];
    $detail = $_POST['detail'];
    $image = $_FILES['image']['name'];
    $target = "image/".basename($image);


    $sql = mysqli_query($mysqli,"INSERT INTO store_list VALUES ('$coffeename', '$detail' , '$image')");
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    }
}