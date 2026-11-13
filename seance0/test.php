<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>

  <meta charset="UTF-8" />
  <title>Test PHP</title>

</head>

<body>

<h2>Premier test PHP</h2>

<p>
  Ce site utilise PHP en version <?= PHP_VERSION ?>
</p>
<p>Document affiché : <code><?= $_SERVER['REQUEST_URI'] ?></code></p>
</body>
</html>
