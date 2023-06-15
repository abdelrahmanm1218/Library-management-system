<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors</title>
</head>
<body>
    <?php
        $connection = new mysqli('localhost','root','', 'library');
        $stmnt = $connection -> prepare("SELECT * FROM authors");
        $stmnt -> execute();
        $result = $stmnt ->get_result();
        echo "<h3 style='margin:20px auto;text-align:center;text-transform: capitalize;'>authors relation</h3>";

        echo "<table border='1' style='margin: 0px auto;'> ";
    echo    "<tr style='background-color:#ccc;font-weight:bold;height: 30px;'>
                <td style='text-align:center;'>Author id</td>
                <td style='text-align:center;'> Author name </td>
                
            </tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr>
                <td style='text-align:center;'>".$row['author_id']."</td>
                <td style='text-align:center;' >".$row['author_name']."</td>
                
            </tr>";
    }
    echo "</table>";


    ?>
</body>
</html>