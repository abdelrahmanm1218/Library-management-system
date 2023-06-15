<?php
//start a session
session_start();
// include the connections file to use $conn variable
include('inc/connections.php');
//check the id and the password there are values in it when user input the data
if(isset($_POST['emp_id']) && isset($_POST['emp_password'])) {
    //create a variable called emp_id and store in it the id typed in the input 
    $emp_id = $_POST['emp_id'];
    //create variable called emp_password to store in it the password typed in input & the stripcslashed function used to remove any / in input to prevent the user type scipt affect our website or database
    $emp_password = stripcslashes($_POST['emp_password']) ;
    //change the password typed to string to also preventhat any password type if it is a script to hack the database or the website convert the password to string to make sure that the script do not run or performed
    $emp_password = htmlentities(mysqli_real_escape_string($conn, $_POST['emp_password']));
}
//if the id input field is empty there is a messege p element in HTML will appear to make sure that user input the id
if(empty($emp_id)){
    $id_error = '<p id="error"> please enter id </p>';
    $err_s = 1;
}
//if the password input field is empty there is a messege p element in HTML will appear to make sure that user input the password
if (empty($emp_password)) {
    $pasword_error = '<p id="error"> please enter password </p>' ;
    $err_s =1 ;
    include('signin.php');
}
// if err_s is not 1 meaning the id and password input fields are filled with data will perfrom the following code
if(!isset($err_s)) {
    //the $sql variable is SQL query will performed to find the id and password the database in employees table is exists using select statement
    $sql = "SELECT emp_id,emp_pass FROM employees WHERE emp_id = $emp_id AND emp_pass = '$emp_password' "  ;
    //myslqi_query() function will make connection with database using $conn created in connections file and will perform the SQL query stored in %sql variable to find the row of the employee who tried to sign in
    $result = mysqli_query($conn, $sql) ; 
    // when the SQL query is perfromed the mysqli_fetch_assoc() function will store the result in array ['id -> 1' , 'password-> ahmedlai@1'] and store in $row variable
    $row = mysqli_fetch_assoc($result);
    // after the SQL query is perfromed if the data typed in input is ((identical )) to the database in type and value will perform the following code
    if($row['emp_id'] === $emp_id && $row['emp_pass'] === $emp_password) {
        //start a session to the user with id typed and correct
        $_SESSION['emp_id'] = $row['emp_id'];
        //start a session to the user with password typed and correct
        $_SESSION['emp_pass'] = $row['emp_pass'];
        //adter starting a session will redirect the user to the page home.php to begin journey in website whether to insert or to remove or update any data in any table
        header('Location: tables.php');
        //after doing all these will exit this code using exit() function
        exit();
    }
    // else the data is typed butnot correct or not in the table employess in the database
    else {
        // will show a messge that is the data typed in from is incorrect
        $id_error = '<p id="error"> wrong password or id </p>';
        //will redirect to the user to the signin page again to enter data
        include('signin.php');
        // after done this code will end 
        exit();
    }
}


?>