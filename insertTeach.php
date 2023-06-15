<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert teacher done</title>
</head>
<body>
    <?php 
        $id = $_POST['teach_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $book_limit = $_POST['book_limit'];
        $day_limit = $_POST['day_limit'];
        
        $conn = new mysqli('localhost','root','','library');
        $stmt = $conn->prepare("INSERT INTO teachers VALUES (?,?,?,?,?)");
        $stmt ->bind_param('issii',$id, $first_name,$last_name,$book_limit,$day_limit);
        $stmt -> execute();
        echo "insertion done";

        $connection = new mysqli('localhost' , 'root', '' ,'library');
        $statment = $connection-> prepare("SELECT * FROM teachers");
    $statment-> execute();
    $result = $statment->get_result();
    echo "<h3 style='margin:20px auto;text-align:center'>teachers relation</h3>";
    
    echo "<table border='1' style = 'margin: 20px auto; text-align=:center;'>";
        echo    "<tr style='background-color:#ccc;font-weight:bold;height: 30px;'>
                    <td style='text-align:center;'>Teacher id</td>
                    <td style='text-align:center; width:150px;'>first name</td>
                    <td style='text-align:center; width:150px;'> last name </td>
                    <td style='text-align:center;'> book limit </td>
                    <td style='text-align:center;'> day limit </td>
                </tr>";
        while ($row = $result->fetch_assoc()){
            echo "<tr style='height: 30px;'>
                    <td style='text-align:center;'>".$row['teach_id']."</td>
                    <td style='text-align:center;'>".$row['teach_fn']."</td>
                    <td style='text-align:center;'>".$row['teach_ln']."</td>
                    <td style='text-align:center;'>".$row['book_limit']."</td>
                    <td style='text-align:center;'>".$row['day_limit']."</td>
                </tr>";
        }
        echo "</table>";

    ?>
</body>
</html>