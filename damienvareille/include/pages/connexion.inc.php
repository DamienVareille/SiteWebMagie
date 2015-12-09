<?php
  $db = new Mypdo();
?>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<?php if(!isset($_POST['login'])){ ?>
<header class="intro-header" style="background-image: url('images/fondTemp.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <form class="pure-form pure-form-aligned" method="post" action="#">

                      <p class="pure-control-group">
                        <label>Login : </label>
                        <input type="text" name="login" style="color : black;"/>
                      </p>

                      <p class="pure-control-group">
                        <label>Mot de passe : </label>
                        <input type="password" name="pwd" style="color : black;"/>
                      </p>
                      <br/>
                      <input class="btn btn-default" type="submit" value="Valider" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<?php }
    else{
    }
 ?>
