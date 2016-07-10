<?php
// 24時間単位の現在時
$hour = date('G');

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>課題10</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<?php if ($hour >= 6 && $hour <= 17): ?>
<body class="day">
  <h1 class="day">昼と夜でページの見た目が変わります。</h1>
</body>

<?php else: ?>
<body class="night">
  <h1 class="night">昼と夜でページの見た目が変わります。</h1>
</body>
<?php endif; ?>

</html>
