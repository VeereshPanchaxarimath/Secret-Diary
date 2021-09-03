<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "dairy";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_REQUEST['email'];
$query = "SELECT `gmail` FROM `login` WHERE gmail = '$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <p style="font-size: 80px;font-family: Verdana,;text-align: center;">Dear Diary</p>

        <style>
            body {
                background-image: url('book.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
        <form name="myform">
            <textarea rows="50" onkeyup="getVal()" cols="205" name="comment" form="usrform" id="dairyinput"></textarea>
        </form>

        <script>
            function getVal() {
                var msg = document.getElementById("dairyinput");
                // alert(msg.value);
                alert(msg.value)
            }
        </script>
    </body>

    </html>
<?php
} else {
    $url = 'http://localhost/Login.php';
    header("Location: " . $url);
    exit();
}
?>