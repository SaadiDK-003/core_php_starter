<header class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
            <a href="./" class="text-decoration-none">
                  <h3 class="text-white"><?= env("TITLE") ?></h3>
            </a>
            <div class="buttons-wrapper">
                  <?php if (isLoggedIn()): ?>
                        <?php if ($userRole == ""): ?>
                        <?php endif; ?>
                        <a href="./logout.php" class="btn btn-danger">LOGOUT</a>
                  <?php else: ?>
                        <a href="./login.php" class="btn btn-success">LOGIN</a>
                  <?php endif; ?>
            </div>
      </div>
</header>