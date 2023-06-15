<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updated book</title>
</head>
<body>
    <?php
        $id= $_POST['book_id'];
        $new_name = $_POST['book_name'];
        $new_copies = $_POST['no_of_copies'];
        $new_auth_no = $_POST['author_no'];
        $new_publisher = $_POST['publisher_no'];
        $new_category = $_POST['cat_no'];
        
        $conn = new mysqli('localhost','root','','library');
        $statment = $conn -> prepare("UPDATE books SET  book_name = '$new_name', no_of_copies ='$new_copies' , author_no = '$new_auth_no', publisher_no = '$new_publisher', cat_no = '$new_category' WHERE book_id = $id");
        $statment ->execute();
        echo "update done";

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