<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <input aria-label="labelChk1" name="chk" type="checkbox" value="1">1
        <input name="chk" type="checkbox" value="2">2
        <input name="chk" type="radio" value="3">3
        <input name="chk" type="radio" value="4">4
        <button aria-describedby="more-info" type="submit">
            Self-destruct
        </button>
    </form>

    <div id="more-info">
        This page will self-destruct in 10 seconds.
    </div>
</body>
</html>