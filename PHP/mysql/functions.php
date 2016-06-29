 <?php include "db.php";?>
 
 <?php

function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";  //This pulls information from database
    $result = mysqli_query($connection, $query);  //The mysqli_query function to send information from $query in with a $connection
    
    if(!$result) {
        die('Query FAILED!' . mysqli_query);
    }
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value=>$id</option>";
    }
}
?>