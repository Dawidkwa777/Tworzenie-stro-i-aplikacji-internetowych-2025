<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$tilte = 'pierwsza strona z PHP-EM';
$link_1 = 'https://www.wp.pl/';
$link_2 = 'https://www.onet.pl/';
$link_3 = 'https://www.interia.pl/';
?>

<body style ="paddng: 20px;">
      <h1><?= $tilte ?></h1>
      <ol style="list-style: decimal-leading-zero;">
      <li><a href="<?= $link_1 ?>">wirtualna polska</a></li>
      <li><a href="<?= $link_2 ?>">onet</a></li>
      <li><a href="<?= $link_3 ?>">interia</a></li>

</body>
</html>