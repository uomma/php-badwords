<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BADWORDS</title>
</head>

<body>
    <form action="badwords.php" method="GET">
        <div>
            <label for="badword">Replace this Word</label>
            <input type="text" name="badword" id="badword">
        </div>
        <div>
            <label for="primo-testo">Text</label>
            <textarea name="primo-testo" id="primo-testo" cols="30" rows="10"></textarea>
        </div>
        <button>send</button>
    </form>
</body>

</html>