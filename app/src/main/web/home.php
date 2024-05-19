<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= $_ENV['BASE_URL'] ?>public/css/main.css" />
    <title>Home</title>
</head>

<body>
    <h1>Home Page</h1>
    <form method="POST" action="<?= $_ENV['BASE_URL'] ?>login">
        <br />
        <button>SEND POST REQUEST</button>
    </form>
</body>

</html>