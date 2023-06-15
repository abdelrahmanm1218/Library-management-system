<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert done</title>
</head>
<body>
    <?php 
        $id = $_POST['book_id'];
        $name = $_POST['book_name'];
        $no_copies = $_POST['no_of_copies'];
        $author = $_POST['author_no'];
        $publisher = $_POST['publisher_no'];
        $category = $_POST['cat_no'];


        $conn = new mysqli('localhost','root','','library');

        
        $stmt = $conn->prepare("INSERT INTO books VALUES (?,?,?,?,?,?)");
        $stmt ->bind_param('isiiii',$id, $name,$no_copies, $author, $publisher, $category);
        $stmt -> execute();
        echo "insertion done";

        $connection = new mysqli('localhost' , 'root', '' ,'library');
        $statment = $connection-> prepare("SELECT * FROM books");
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