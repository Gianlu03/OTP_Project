<?php
    include 'CheckOTP.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href = "..\Style\Home.css" rel = "stylesheet">

</head>
<body>
    <div id = "wrapper">

        <div id = "bar">
            <div id = "title">PROGETTO OTP: LINGUAGGI UTILIZZATI</div>
            <div id = "user">
                <p style = "margin-top:22px;"><?php echo $_SESSION['Email'] ?><p>
            </div>
        </div>

        <div id = "content">

            <div id = "txtHTML">
                <h2 style = "color: rgb(255, 0, 0)">HTML</h2>
                <hr style = "border:solid 1px rgb(255, 0, 0)">

                <p>HyperText Markup Language (HTML) is the set of markup symbols or codes inserted into a file intended for display on the Internet. The markup tells web browsers how to display a web page's words and images.</p>
                <hr style = "border:solid 1px rgb(255, 0, 0)">
            </div>
            <div id = "imgHTML">
    
            </div>
        </div>

    </div>
</body>
</html>