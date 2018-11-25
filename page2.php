<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site super utile</title>
    <link rel="stylesheet" type="text/css" href="exigences.css">

</head>
<body>
    <h1> Welcome on this very useful website</h1>
    <br><hr/><br>

    <?php
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

    echo 'Welcome '.$first_name. ' '.$last_name.' on this great website.';
?>
</body>
</html>