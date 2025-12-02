<?php
$nama = "Hello Alma Rahmatia Ningrum!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .box {
            background: rgba(255, 255, 255, 0.2);
            padding: 30px 50px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        h1 {
            margin: 0;
            font-size: 48px;
            font-weight: bold;
        }

        p {
            margin-top: 10px;
            color: #eee;
        }
    </style>
</head>
<body>

<div class="box">
    <h1><?php echo $nama; ?></h1>
    <p>Ini adalah halaman index.</p>
</div>

</body>
</html>
