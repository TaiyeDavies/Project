
<?php
    (include "connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Student Information</title>
</head>
<body>
<form method='POST' action=''>
 <fieldset>
 <legend>Add student information</legend>
     <label>ID: </label><input type='number' name='ID' required><br>
     <label>NAME: </label><input type='text' name='NAME' required><br>
     <label>DOB: </label><input type='date' name='DOB' required><br>
     <label>COURSE_ID: </label><input type='number' name='COURSE_ID' required><br>
     <label>INCOME: </label><input type='text' name='INCOME' required><br>
     <input type='submit' value = "Submit" name='Submit'>
 </fieldset>
</form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["Submit"])) {
      $submit = "Submit is set";
      echo $submit ."<br>";
    }
}


     $conn = new mysqli($server_name, $username, $password, $database_name);
     $ID = $_POST['ID'];
     $NAME = $_POST['NAME'];
     $DOB = $_POST['DOB'];
     $COURSE_ID = $_POST['COURSE_ID'];
     $INCOME = $_POST['INCOME'];
     $sql = "INSERT INTO STUDENT VALUES ('".$ID."', '".$NAME."','".$DOB."','".$COURSE_ID."','".$INCOME."', null)";
     $conn->query($sql); 
     $sql = "SELECT * FROM STUDENT WHERE ID = ". $ID;
     $results = $conn->query($sql); 
     echo "<strong>Course Record Connected Successfully!!!</strong>". "<br><br>";

    // fetch a record from result set into an associative array
    while ($row = $results->fetch_assoc()) {
    // the keys must match the field names from the table
    echo "ID: " .$row["ID"]. "<br><br>";
    echo "NAME: " .$row["NAME"]. "<br><br>";
    echo "DOB: " .$row["DOB"]. "<br><br>";
    echo "COURSE_ID: " .$row["COURSE_ID"]. "<br><br>";
    echo "INCOME: " .$row["INCOME"]. "<br><br>";
}
    $conn->close();

?>
