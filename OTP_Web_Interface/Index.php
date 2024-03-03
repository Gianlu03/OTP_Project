<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" 
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="Style\Bootstrap\bootstrap.min.css" rel="stylesheet">
    <link href="style\Index.css" rel="stylesheet">
    <title>Log in to OGC</title>
</head>

<body>

    <div id = "UserInfo">

        <form id = "formUser" method = "post" action = "PHP/Login.php">
            
            <h1 id = "title">Log In</h1>

            <?php if (isset($_GET['error'])) { ?>
                <!--Se è settato il valore error nell'url, tramite variabile superglobale GET viene stampato a schermo tale messaggio-->
     		    <div class = "errorBlock"><?php echo $_GET['error']; ?></div>
     	    <?php } ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input type="email" name = "email" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <br>
           
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="password" name = "password" placeholder="Password" class="form-control" id="exampleInputPassword1">
                <div id="emailHelp" class="form-text">The password must be 8-20 characters long</div>
            </div>

            <br>


            <button id = "btnLogin" type="submit">Log In</button>
        
            
            
            
        </form>

        

    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>