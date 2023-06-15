<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete student</title>
</head>
<body>
    <?php 
        $id = $_POST['stu_id'];
        $conn = new mysqli('localhost' , 'root', '', 'library');
        $stmt = $conn->prepare("DELETE FROM students WHERE stu_id = $id");
        $stmt->execute();
        echo "deletion done";

        $statment = $conn-> prepare("SELECT * FROM students");
        $statment-> execute();
        $result = $statment->get_result();
    
        echo "<table border='1' style = 'margin: 20px auto'>";
        echo    "<tr style='background-color:#ccc;font-weight:bold'>
            <td>student id</td>
            <td>first name</td>
            <td> last name </td>
        </tr>";
while ($row = $result->fetch_assoc()){
    echo "<tr>
            <td>".$row['stu_id']."</td>
            <td>".$row['stu_fn']."</td>
            <td>".$row['stu_ln']."</td>
        </tr>";
}
echo "</table>";
    ?>
</body>
</html>