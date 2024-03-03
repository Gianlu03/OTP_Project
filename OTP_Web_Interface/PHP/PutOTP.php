<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" 
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="..\Style\Bootstrap\bootstrap.min.css" rel="stylesheet">
    <link href = "..\Style\StyleOTP.css" rel = "stylesheet">
    <title>Document</title>
</head>
<body>

<div id = "wrapper">

    <div id = "DivForm">

        <form id = "formOTP" method = "post" action = "CheckOTP.php">
            
            <?php
                include 'CheckOTP.php';
                $seed = $_SESSION['Seed'];
                echo "<h1 id = 'title'>OTP</h1>";
                echo $CorrectOTP; //ELIMINA QUESTO PER NON VISUALIZZARE OTP
            ?>

            <?php if (isset($_GET['error'])) { ?>
                <!--Se è settato il valore error nell'url, tramite variabile superglobale GET viene stampato a schermo tale messaggio-->
                <div class = "errorBlock"><?php echo $_GET['error']; ?></div>
            <?php } ?>

            <h4 id = "welcomeOTP">
                <?php
                    echo "<br>Welcome back<br><b id = 'userMail'>" . $_SESSION['Email'] . "</b>"; 
                ?>
            </h4>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input name = "OTP" type="text" class="form-control" placeholder="OTP" aria-label="Username">
                <div id="emailHelp" class="form-text">Enter your x digit OTP</div>
            </div>

            <br>

            <button id = "btnLogin" type="submit">Log In</button>
            
        </form>

    </div>

</div>

</body>

<script src = "../JS/OTP.js"></script>

</html>