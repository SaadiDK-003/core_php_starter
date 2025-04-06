<?php
require_once 'core/database.php';

if (!isLoggedIn()) {
    header('Location: login.php');
    exit();
}

if ($userRole != 'admin') {
    header('Location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= env("TITLE") ?> | Admin Dashboard</title>
    <?php include_once 'includes/external_css.php'; ?>
</head>

<body id="adminDashboard">
    <?php include_once 'includes/header.php'; ?>
    <main>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Admin Dashboard</h1>
                </div>
            </div>
        </div>
    </main>
    <?php include_once 'includes/footer.php'; ?>
    <?php include_once 'includes/external_js.php'; ?>
    <script>
        $(document).ready(function () { });
    </script>
</body>

</html>