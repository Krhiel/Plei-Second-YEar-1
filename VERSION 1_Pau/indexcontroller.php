<?php    
$servername = "localhost";
$username = "root";
$password = "";
$database = "Ate_Paula";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['tbl_name']) && !empty($_POST['password'])) {
    $username_lbl = $_POST['tbl_name'];
    $password_lbl = $_POST['password'];

    // Corrected SQL query
    $sql = "SELECT * FROM `tbl_user` WHERE `username` = '$username_lbl' AND `password` = '$password_lbl'";
    $sqlresult = mysqli_query($conn, $sql);

    if (mysqli_num_rows($sqlresult) > 0) {
        echo "Proceed";
    } else {
        echo "Invalid Username or Password";
    }
}

function response($dataresult)
{
    $json_response = json_encode($dataresult);
    echo $json_response;
}
?>
