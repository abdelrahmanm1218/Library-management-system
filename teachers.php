<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
    <link rel="stylesheet" href="./signin.css">
	<link rel="stylesheet" href="./framework.css">
</head>
<body>
<div style="margin-bottom: 100px; overflow:visible;position:relative"class="formBox">
        <div class="container" style="top:0;width: 40%;position:absolute;left:0px;top: 20px;">
            <div style="margin-bottom: 50px;top: 20px;"class="box">
                <form action="insertTeach.php" method="post"> 
                    <h2 class="h2-label"> Insert Teacher</h2>
                    <h6 class="h6-label">teacher id: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph  "name="teach_id" type="number" placeholder="enter teacher id" > <br>
                    <h6 class="h6-label">teacher first name: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="first_name" type="text" placeholder="enter teacher first name"> <br>
                    <h6 class="h6-label">teacher last name: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="last_name" type="text" placeholder="enter teacher last name"> <br>
                    <h6 class="h6-label">book limit: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="book_limit" type="number" placeholder="enter book limit"> <br>
                    <h6 class="h6-label">day limit: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="day_limit" type="number" placeholder="enter day limit"> <br>
                    
                    <input style="width:fit-content;text-transform:capitalize;font-size:16px;" class="submit-button " type="submit" value="insert">
                </form>
            </div>
        </div>
        <div class="container" style="width: 40%;position:absolute;left:50%;transform:translateX(-50%);">
            <div style="margin-bottom: 50px;"class="box">
                <form action="deleteTeach.php" method="post"> 
                    <h2 class="h2-label"> delete teacher</h2>
                    <h6 class="h6-label">teacher id: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph  "name="teach_id" type="number" placeholder="enter teacher id" > <br>
                    
                    <input style="width:fit-content;text-transform:capitalize;font-size:16px;" class="submit-button" type="submit" value="delete">
                </form>
            </div>
        </div>
        
        <div class="container" style=" width:40%;position:absolute;right: 0px;top: 20px">
            <div style="margin-bottom: 50px;top: 20px;"class="box">
                <form action="updateTeach.php" method="post"> 
                    <h2 class="h2-label"> update teacher</h2>
                    <h6 class="h6-label">teacher id: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph  "name="teach_id" type="number" placeholder="enter teacher id wanted to update" > <br>
                    <h6 class="h6-label">teacher first name: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="teach_fn" type="text" placeholder="enter teacher first name"> <br>
                    <h6 class="h6-label">teacher last name: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="teach_ln" type="text" placeholder="enter teacher last name"> <br>
                    <h6 class="h6-label">book limit: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="book_limit" type="number" placeholder="enter book limit"> <br>
                    <h6 class="h6-label">day limit: </h6>
                    <input style="height: 45px;" class="no-outline no-border ph " name="day_limit" type="number" placeholder="enter day limit"> <br>

                    <input style="width:fit-content;text-transform:capitalize;font-size:16px;" class="submit-button" type="submit" value="update">
                </form>
            </div>
        </div>

        
    </div>
    <?php 
        $connection = new mysqli('localhost' , 'root', '' ,'library');
        $statment = $connection-> prepare("SELECT * FROM teachers");
        $statment-> execute();
        $result = $statment->get_result();
        echo "<h3 style='margin:20px auto;text-align:center;text-transform: capitalize;'>teachers relation</h3>";
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