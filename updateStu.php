<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updated student</title>
</head>
<body>
    <?php
        $id= $_POST['stu_id'];
        $new_fn = $_POST['stu_fn'];
        $new_ln = $_POST['stu_ln'];
        $new_book_limit = $_POST['book_limit'];
        $new_day_limit = $_POST['day_limit'];
        $conn = new mysqli('localhost','root','','library');
        $statment = $conn -> prepare("UPDATE students SET  stu_fn = '$new_fn', stu_ln ='$new_ln', book_limit='$new_book_limit', day_limit='$new_day_limit' WHERE stu_id = $id");
        $statment ->execute();
        echo "update done";

        $statment = $conn-> prepare("SELECT * FROM students");
        $statment-> execute();
        $result = $statment->get_result();
        echo "<h3 style='margin:20px auto;text-align:center;text-transform:capitalize;'>students relation</h3>";
    
        echo "<table border='1' style = 'margin: 20px auto; text-align=:center;'>";
        echo    "<tr style='background-color:#ccc;font-weight:bold;height: 30px;'>
                    <td style='text-align:center;'>student id</td>
                    <td style='text-align:center;width:150px;'>first name</td>
                    <td style='text-align:center;width:150px;'> last name </td>
                    <td style='text-align:center;'> book limit </td>
                    <td style='text-align:center;'> day limit </td>
                </tr>";
        while ($row = $result->fetch_assoc()){
            echo "<tr style='height: 30px;'>
                    <td style='text-align:center;'>".$row['stu_id']."</td>
                    <td style='text-align:center;'>".$row['stu_fn']."</td>
                    <td style='text-align:center;'>".$row['stu_ln']."</td>
                    <td style='text-align:center;'>".$row['book_limit']."</td>
                    <td style='text-align:center;'>".$row['day_limit']."</td>
                </tr>";
        }
        echo "</table>";

    ?>
</body>
</html>