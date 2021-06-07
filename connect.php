<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script
   src="https://kit.fontawesome.com/64d58efce2.js"
   crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="styles.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription ou connexion</title>
</head>
<body>
<div class="container">
    
   <div class="forms-container">
    <div class="signin-signup">
     <form action="test.php" method="post" class="sign-in-form">
      <h2 class="title">Connexion</h2>
      <div class="input-field">
       <i class="fas fa-envelope"></i>
       <input type="email" name="username" placeholder="Email" />
      </div>
      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" name="pwd" placeholder="Enter your password" />
      </div>
      <input class="btn solid" type="submit" value="Se Connecter" />
      <p class="social-text">Se connecter sur d'autre réseaux</p>
      <div class="social-media">
       <a href="#" class="social-icon" id="facebook">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="social-icon" id="twitter">
        <i class="fab fa-twitter"></i>
       </a>
       <a href="#" class="social-icon" id="google">
        <i class="fab fa-google"></i>
       </a>
       <a href="#" class="social-icon" id="linkedin">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </div>
     </form>
     <form action="test.php" method="post" class="sign-up-form">
      <h2 class="title">S'inscrire</h2>
      <div class="input-field">
       <i class="fas fa-user"></i>
       <input type="text"  placeholder="Username" />
      </div>
      <div class="input-field">
       <i class="fas fa-envelope"></i>
       <input type="email" name="username" placeholder="Email" />
      </div>
      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" name="pwd" placeholder="Password" />
      </div>
      <input type="submit" class="btn" value="S'inscrire" />
      <p class="social-text">Ou s'inscrire avec d'autres réseaux</p>
      <div class="social-media">
       <a href="#" class="social-icon" id="facebook">
        <i class="fab fa-facebook-f"></i>
       </a>
       <a href="#" class="social-icon" id="twitter">
        <i class="fab fa-twitter"></i>
       </a>
       <a href="#" class="social-icon" id="google">
        <i class="fab fa-google"></i>
       </a>
       <a href="#" class="social-icon" id="linkedin">
        <i class="fab fa-linkedin-in"></i>
       </a>
      </div>
     </form>
    </div>
   </div>

   <div class="panels-container">
    <div class="panel left-panel">
     <div class="content">
      <h3>vous étes un nouveau membre?</h3>
      <p>
       cliquez sur s'inscrire pour devenir membre!
      </p>
      <button class="btn transparent" id="sign-up-btn">S'inscrire</button>
     </div>
     <img src="log.svg" class="image" alt="" />
    </div>
    <div class="panel right-panel">
     <div class="content">
      <h3>Déja membre?</h3>
      <p>
       Cliquez sur se connecter pour accéder à notre site
      </p>
      <button class="btn transparent" id="sign-in-btn">Se connecter</button>
     </div>
     <img src="signin.svg" class="image" alt="" />
    </div>
   </div>
  </div>
  <script src="app.js"></script>
    </form>
  
    </div>
</body>
</html>