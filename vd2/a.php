<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script>
        <!-- Ham ajax kieu 1 -->
        $(Document).ready(function(){
            $("#noidung").load("b.php");


        });
    </script>
</head>
<body>
    <h1>Trang AAA</h1>
    <a href="b.php">link A</a>
    <div id="noidung">  ... </div>
</body>
</html>