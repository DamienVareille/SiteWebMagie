<?php
  $db = new Mypdo();
  $newsManager = new NewsManager($db);
  $listeNews = $newsManager->listerNews();
?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('images/fondTemp.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Damien Vareille</h1>
                    <hr class="small">
                    <span class="subheading">Illusionniste & Mentaliste</span>
                </div>
            </div>
        </div>
    </div>
</header>
<?php if(!isset($_GET['news'])){ ?>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

          <?php foreach($listeNews as $news){ ?>
            <div class="post-preview">
                <a href="index.php?page=0&amp;news=<?php echo $news->getNews_id(); ?>">
                    <h2 class="post-title">
                        <?php echo $news->getNews_titre(); ?>
                    </h2>
                    <h3 class="post-subtitle">
                        <?php echo substr($news->getNews_description(), 0, 30).'...'; ?>
                    </h3>
                </a>
                <p class="post-meta">Posté le <?php echo getFrenchDate($news->getNews_date()); ?></p>
            </div>
            <hr>
          <?php } ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>
<?php }
    else{
      $news = new News();
      $news = $newsManager->getNews($_GET['news']);
      ?>
      <!-- Post Content -->
      <article>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h1><?php echo $news->getNews_titre(); ?></h1>
                    <i>Posté le <?php echo getFrenchDate($news->getNews_date()); ?></i>
                    <p><?php echo $news->getNews_description(); ?></p>
                    <p><a href="index.php?page=0">Retour à l'accueil</a></p>
                  </div>
              </div>
          </div>
      </article>

      <hr>
<?php
    }
 ?>
