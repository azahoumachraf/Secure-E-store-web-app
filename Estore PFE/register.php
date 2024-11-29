<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Enregistrer</title>
<link rel="icon"  type="image" href="assets/images/pig.jpg">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Enregistrer</h1>
    <p>Remplissez ce formulaire pour créer un compte.</p>
    <hr>

    <label for="email"><b>e-mail</b></label>
    <input type="text" placeholder="email...." name="email" required>

    <label for="psw"><b>mot de passe</b></label>
    <input type="password" placeholder="password...." name="psw" required>

    <label for="psw-repeat"><b>Répéter le mot de passe</b></label>
    <input type="password" placeholder="repeat password" name="psw-repeat" required>
    <hr>
    <p>En créant un compte, vous nous acceptez<a href="#">Conditions et confidentialité</a>.</p>

    <button type="submit" class="registerbtn">Enregistrer</button>
  </div>
  
  <div class="container signin">
    <p>
        Vous avez déjà un compte ?<a href="#">Connexion</a>.</p>
  </div>
</form>

</body>
</html>
