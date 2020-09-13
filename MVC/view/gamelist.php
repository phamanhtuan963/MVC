<html>
<head>
    <title>Game World</title>
    <style>
        tabble{
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Welcome to Game World</h1>
    <table style="border-collapse: collapse">
    <tr><td>Title</td><td>Price</td><td>Image</td><td>Producer</td></tr><br>
    <?php
        foreach ($games as $key => $game){
            echo '<tr><td><a href="../index.php?game='.$game->title.'">'.$game->title.'</a></td><td>'.$game->price
                .'</td><td>'.$game->image.'</td><td>'.$game->producer.'</td></tr>';
        }
    ?>
    </table>
</body>
</html>