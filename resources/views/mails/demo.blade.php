<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello <i> {{ $demo->receiver }} </i>
    <p>This is a demo email for testing purposes</p>
    Thank You, <br>
    <i> {{ $demo->sender }} </i> 
</body>
</html>