<?php
if (isset($_SESSION['user'])) {
?>
    <?php include 'dairy.php'; ?>
<?php

} else {
?>
    <html>

    <head>
        <p style="font-size: 80px;font-family: Verdana,;text-align: center;">LOG IN</p>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        div {
            text-align: center;
            font-size: 20px;
            color: black;
        }

        body {
            background-image: url('bg3.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .btn_submit {
            background-color: #23395d;
            border: none;
            color: white;
            padding: 10px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
    <div>
        <form method="POST" action="dairy.php">
            <p>
                <label>User name </label>
                <input type="text" name="UserName" required />
                </br>
            </p>

            </br>
            <p>
                <label for="Password">Password </label>
                <input type="password" id="pwd" name="Password" required>
            </p>
            <input type="submit" class="btn_submit">

        </form>
    </div>

    </html>
<?php
}
