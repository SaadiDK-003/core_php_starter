<?php
if ($tailwind === '1'):
?>
      <script src="https://cdn.tailwindcss.com"></script>
<?php
else:
?>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
endif;
if ($alpineJs === '1'):
?>
      <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<?php
endif;
?>
<link rel="stylesheet" href="css/style.min.css">