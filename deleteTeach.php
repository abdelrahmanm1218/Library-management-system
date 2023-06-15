<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete teacher</title>
</head>
<body>
    <?php 
        $id = $_POST['teach_id'];
        $conn = new mysqli('localhost' , 'root', '', 'library');
        $stmt = $conn->prepare("DELETE FROM teachers WHERE teach_id = $id");
        $stmt->execute();
        echo "deletion done";

        $statment = $conn-> prepare("SELECT * FROM teachers");
        $statment-> execute();
        $result = $statment->get_result();
        echo "<h3 style='margin:20px auto;text-align:center'>teachers relation</h3>";
    
        echo "<table border='1' style = 'margin: 20px auto'>";
        echo    "<tr style='background-color:#ccc;font-weight:bold'>
            <td>teacher id</td>
            <td>first name</td>
            <td> last name </td>
        </tr>";
while ($row = $result->fetch_assoc()){
    echo "<tr>
            <td>".$row['teach_id']."</td>
            <td>".$row['teach_fn']."</td>
            <td>".$row['teach_ln']."</td>
        </tr>";
}
echo "</table>";
    ?>
</body>
</html>