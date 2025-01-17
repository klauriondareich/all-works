<?php
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");
  $account = new Account($con);
  include("includes/handlers/register-handler.php");

  function displayValue($value){
    if(isset($value)){
      echo $value;
    }
  }
 ?>

<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/master.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Header -->

  <section>

    <nav class="navbar bg-nav fixed-top">
      <div>
        <a href="#" class="navbar-brand"><img src="assets/img/icon/study1.png" alt=""></a>
        <div class="navbar-text text-white">Free Book Manager</div>
      </div>
      <ul class="navbar-nav">
        <li class="navbar-item"><a href="login.php" class="navbar-link pr-5 text-white">Se Connecter</a></li>
      </ul>
    </nav>
  </section>

  <!-- Header End -->

  <!-- Subscription Form -->

  <div class="container">
    <div class="row">
      <form action="subscribe.php" method="POST" class="form-class form-class-auto">
        <h2>Inscription</h2>


        <div class="marg-b position">
          <?php echo $account->getError(Constants::$usernameErrorMessage); ?>
          <?php echo $account->getError(Constants::$usernameExists); ?>
          <input type="text" name="username" placeholder="Nom d'utilisateur" value="<?php displayValue($_POST["username"]); ?>" >
        </div>


        <div class="marg-b position">
          <?php echo $account->getError(Constants::$invalidEmail);?>
          <?php echo $account->getError(Constants::$emailExists);?>
          <input type="email" name="email" placeholder="Email" value="<?php displayValue($_POST["email"]); ?>" >
        </div>


        <div class="password position">
          <?php echo $account->getError(Constants::$passwordLength); ?>
          <?php echo $account->getError(Constants::$incorrectPsw); ?>
          <input type="password" name="password" placeholder="Mot de passe">
        </div>


        <div class="password position">
          <?php echo $account->getError(Constants::$nonIdenticalPsw); ?>
          <input type="password" name="password2" placeholder="Confirmer le mot de passe">
        </div>

        <div>
          <input type="checkbox" name="checkbox" value="ok" id="checkbox">J'accepte les conditions d'utilisations du site
        </div>
        <div>
          <button type="submit" name="registerButton" class="marg-b">S'inscrire</button>
        </div>
      </form>
      <div class="col-6">
        <blockquote>Connect and open the world of books</blockquote>
        <img src="assets/img/book3.png" alt="">
      </div>
    </div>
  </div>

  <!-- Subscription Connection Form End -->



  <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.4.1.min.js"><\/script>')
  </script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function() {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
