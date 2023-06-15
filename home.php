<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>books</title>
    <link rel="stylesheet" href="./signin.css">
	<link rel="stylesheet" href="./framework.css">
</head>
<body>
    <div style="margin-bottom: 100px; overflow:visible;position:relative"class="formBox">
        <div class="container" style="top:0;width: 40%;position:absolute;left:0px;top: 20px;">
            <div style="margin-bottom: 50px;top: 20px;"class="box">
                <form action="insert.php" method="post"> 
                    <h2 class="h2-label"> Insert book</h2>
                    <h6 class="h6-label">book id: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph  "name="book_id" type="number" placeholder="enter book id" > <br>
                    <h6 class="h6-label">book name: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="book_name" type="text" placeholder="enter book name"> <br>
                    <h6 class="h6-label">no of copies: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph  " name="no_of_copies" type="number" placeholder="enter number of copies"> <br>
                    <h6 class="h6-label">author number : </h6>
                    <input style="height: 45px;" class="no-outline no-border ph  "  name="author_no" type="number" placeholder="enter no of copies"> <br>
                    <h6 class="h6-label">publisher number : </h6>
                    <input style="height: 45px;" class="no-outline no-border ph "  name="publisher_no" type="number" placeholder="enter publisher number"> <br>
                    <h6 class="h6-label">category number : </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="cat_no" type="number" placeholder="enter category number"> <br>
                    <input style="text-transform: capitalize;width:fit-content;font-size:20px;" class="submit-button " type="submit" value="insert">
                </form>
            </div>
        </div>
        <div class="container" style="width: 40%;position:absolute;left:50%;transform:translateX(-50%);">
            <div style="margin-bottom: 50px;"class="box">
                <form action="delete.php" method="post"> 
                    <h2 class="h2-label"> delete book</h2>
                    <h6 class="h6-label">book id: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph  "name="book_id" type="number" placeholder="enter book id" > <br>
                    
                    <input style="text-transform: capitalize;width:fit-content;font-size:20px;" class="submit-button" type="submit" value="delete">
                </form>
            </div>
        </div>
        
        <div class="container" style=" width:40%;position:absolute;right: 0px;top: 20px">
            <div style="margin-bottom: 50px;top: 20px;"class="box">
                <form action="update.php" method="post"> 
                    <h2 class="h2-label"> update book</h2>
                    <h6 class="h6-label">book id: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph  "name="book_id" type="number" placeholder="enter book id wanted to update" > <br>
                    <h6 class="h6-label">book name: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="book_name" type="text" placeholder="enter book new name"> <br>
                    <h6 class="h6-label">no of copies: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph  " name="no_of_copies" type="number" placeholder="enter number of copies"> <br>
                    <h6 class="h6-label">author number : </h6>
                    <input style="height: 45px;" class="no-outline no-border ph  "  name="author_no" type="number" placeholder="enter no of copies"> <br>
                    <h6 class="h6-label">publisher number : </h6>
                    <input style="height: 45px;" class="no-outline no-border ph "  name="publisher_no" type="number" placeholder="enter publisher number"> <br>
                    <h6 class="h6-label">category number : </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="cat_no" type="number" placeholder="enter category number"> <br>
                    <input style="font-size:20px;text-transform:capitalize;width:fit-content " class="submit-button" type="submit" value="update">
                </form>
            </div>
        </div>

        
    </div>
    <?php 
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