<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete book</title>
</head>
<body>
    <?php 
        $id = $_POST['book_id'];
        $conn = new mysqli('localhost' , 'root', '', 'library');
        $stmt = $conn->prepare("DELETE FROM books WHERE book_id = $id");
        $stmt->execute();
        echo "deletion done";

        $statment = $conn-> prepare("SELECT * FROM books");
        $statment-> execute();
        $result = $statment->get_result();
    
        echo "<table border='1' style='margin: 0px auto;'> ";
    echo    "<tr style='background-color:#ccc;font-weight:bold;height: 30px;'>
                <td style='text-align:center;'>book_id</td>
                <td style='text-align:center;width:200px;'>book_name</td>
                <td style='text-align:center;'> no_of_copies </td>
                <td style='text-align:center;'>author_no</td>
                <td style='text-align:center;'>publisher_no</td>
                <td style='text-align:center;'>cat_No</td>
            </tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr>
                <td style='text-align:center;'>".$row['book_id']."</td>
                <td style='text-align:center;' >".$row['book_name']."</td>
                <td style='text-align:center;'>".$row['no_of_copies']."</td>
                <td style='text-align:center;'>".$row['author_no']."</td>
                <td style='text-align:center;'>".$row['publisher_no']."</td>
                <td style='text-align:center;'>".$row['cat_no']."</td>
            </tr>";
    }
    echo "</table>";
    ?>
</body>
</html>