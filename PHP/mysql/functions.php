 <?php include "db.php";?>
 
 <?php


function createRows() {
    global $connection;
    if(isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    
    if($connection) {
        echo "The username: " . $username . " with the password ##### has been created." ;
    }else {
        die("Database connection failed"); 
    }
    
    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUE ('$username', '$password')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die('Query FAILED!' . mysqli_query);
    } else {
        echo " Thanks for creating new record!";
    }
}
}

function readRows() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query Failed' . mysqli_error());
    }
    
    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }   
}


function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";  //This pulls information from database
    $result = mysqli_query($connection, $query);  //The mysqli_query function to send information from $query in with a $connection
    
    if(!$result) {
        die('Query FAILED!' . mysqli_query());
    }
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}


function UpdateTable() {
    global $connection;
    if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .="username = '$username', ";
    $query .="password = '$password' ";
    $query .="WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed!" . mysqli_error($connection)); //The mysqli_error($connection) will provide more information on errors           
    } else {
        echo "Record Updated";
    }
    }
}
    
function deleteRows() {
    global $connection;
    if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .="WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed!" . mysqli_error($connection)); //The mysqli_error($connection) will provide more information on errors           
    } else {
        echo "Record DELETED!";
    }
    }
}

?>