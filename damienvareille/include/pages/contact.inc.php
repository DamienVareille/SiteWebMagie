<?php
  $db = new Mypdo();
?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('images/fondTemp.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Contact</h1>
                        <hr class="small">
                        <span class="subheading">Une question, un message ? C'est ici !</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Pour me contacter, remplissez ce fomulaire, je réponds le plus vite possible !</p>

                <form method="post" action="index.php?page=7">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Votre nom</label>
                            <input name="name" type="text" class="form-control" placeholder="Votre nom" id="name" required data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Votre e-mail</label>
                            <input name="email" type="email" class="form-control" placeholder="Votre e-mail" id="email" required data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Votre téléphone</label>
                            <input name="phone" type="tel" class="form-control" placeholder="Votre téléphone" id="phone" required data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Votre message</label>
                            <textarea name="message" rows="5" class="form-control" placeholder="Votre message" id="message" required ></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Envoyer !</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
