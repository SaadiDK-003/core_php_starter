<?php
require_once 'core/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?= env("TITLE") ?> | Home</title>
      <?php include_once 'includes/external_css.php'; ?>
</head>

<body id="home">
      <?php include_once 'includes/header.php'; ?>
      <main>
            <section class="hero d-flex align-items-center justify-content-center">
                  <div class="container">
                        <div class="row">
                              <div class="col-12 col-md-6">
                                    <div class="content text-white">
                                          <h1><?= env("TITLE") ?></h1>
                                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio a optio
                                                maxime aliquid aut veritatis molestiae, minima nihil ea quis!</p>
                                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos corrupti,
                                                quae accusantium quasi exercitationem, quaerat nihil alias delectus
                                                laudantium ex vitae at ipsa tempora quidem fugit rerum obcaecati
                                                eligendi iste.</p>
                                          <div class="btns-wrapper d-flex gap-2 align-items-center">
                                                <a href="#!" class="btn btn-primary">Learn More</a>
                                                <a href="#!" class="btn btn-secondary">Explore More</a>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-12 col-md-6">
                                    <div class="slider">
                                          <div class="slide">
                                                <img src="img/slide-1.jpg" alt="img-1" class="rounded">
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>
      </main>
      <?php include_once 'includes/footer.php'; ?>
      <?php include_once 'includes/external_js.php'; ?>
      <script>
            $(document).ready(function () { });
      </script>
</body>

</html>