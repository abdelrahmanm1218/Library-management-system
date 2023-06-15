<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacher borrow</title>
</head>
<body>
    <?php
        $connection = new mysqli('localhost','root','', 'library');
        $stmnt = $connection -> prepare("SELECT * FROM teach_borrow");
        $stmnt -> execute();
        $result = $stmnt ->get_result();
        echo "<h3 style='margin:20px auto;text-align:center;text-transform: capitalize;'>teach borrow relation</h3>";

        echo "<table border='1' style='margin: 0px auto;'> ";
    echo    "<tr style='background-color:#ccc;font-weight:bold;height: 30px;'>
                <td style='text-align:center;'>book no.</td>
                <td style='text-align:center;'> teahcer no. </td>
                <td style='text-align:center;'> emp no. </td>
                <td style='text-align:center;'> start date  </td>
                <td style='text-align:center;'> expected date  </td>
                <td style='text-align:center;'> actual date  </td>
                <td style='text-align:center;'> fine amount  </td>
                <td style='text-align:center;'> no. of book  </td>


                
            </tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr>
                <td style='text-align:center;'>".$row['book_no']."</td>
                <td style='text-align:center;' >".$row['teach_no']."</td>
                <td style='text-align:center;' >".$row['emp_no']."</td>
                <td style='text-align:center;' >".$row['start_borrow_date']."</td>
                <td style='text-align:center;' >".$row['exp_retrieve_date']."</td>
                <td style='text-align:center;' >".$row['act_retrieve_date']."</td>
                <td style='text-align:center;' >".$row['fine_amount']."</td>
                <td style='text-align:center;' >".$row['no_of_borrowed_books']."</td>
                
            </tr>";
    }
    echo "</table>";


    ?>
</body>
</html>