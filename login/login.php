
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/js_login.js">
    <link rel="stylesheet" href="css/smoke.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/fileinput.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>
<body class="bg-danger" id="fondo">
    <div class="login-page">
        <div class="form">
            <form action="logueo.php" method="POST">
              <div class="inset">
              <p>
                <label for="email">Email o Usuario</label>
                <input type="text" name="correo" placeholder="username">
              </p>
              <p>
                <label for="password">PASSWORD</label>
                <input type="password" name="contrasena" placeholder="password">
              </p>
              <button class="btn-danger" name="login">login</button>
              <p class="message">Not registered? <a href="#" class="text-danger">Enviar mensaje al responsable</a></p>
              </div>
            </form>
          </div> 
    </div>    
</body>
</html>