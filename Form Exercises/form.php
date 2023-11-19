<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAYI OYUNU</title>
    <link rel="stylesheet" href="/bootstraplinkedinclone/css/style.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
        crossorigin="anonymous"
    />
    <style>
        .cerceve {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-top: 25px;
        }
    </style>
</head>
<body>

<div class="cerceve">
<form action="post.php" method="post">


    <div class="form-group" style="" >
        <label for="exampleInputEmail1">Bir Sayı Giriniz..</label>
        <input type="number" name="sayi" class="form-control" placeholder="Sayı" aria-label="Sayı" aria-describedby="basic-addon1">
    </div>

    <button type="submit" class="btn btn-primary">Gönder</button>
</form>
</div>


</body>
</html>