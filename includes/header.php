<header class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
            <a href="./" class="text-decoration-none">
                  <h3 class="text-white mb-0"><?= env("TITLE") ?></h3>
            </a>
            <div class="buttons-wrapper d-flex gap-3">
                  <?php if (isLoggedIn()): ?>
                        <?php if ($userRole == "admin"): ?>
                              <a href="./adminDashboard.php" class="btn btn-primary">Dashboard</a>
                        <?php endif; ?>
                        <a href="./logout.php" class="btn btn-danger">LOGOUT</a>
                  <?php else: ?>
                        <a href="./login.php" class="btn btn-success">LOGIN</a>
                        <a href="./register.php" class="btn btn-primary">REGISTER</a>
                  <?php endif; ?>
            </div>
      </div>
</header>