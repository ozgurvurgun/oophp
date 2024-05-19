<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello <?= $name ?></title>
</head>

<body>
    <h1>Hello <?= $name ?>!</h1>

    <script> const name = "<?= $name ?>"; </script>
    <script type="module" src="<?= $_ENV['BASE_URL'] ?>public/js/Main.js"></script>
</body>

</html>