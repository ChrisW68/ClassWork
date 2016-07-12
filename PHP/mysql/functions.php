 <?php include "db.php";?>
 
 <?php


function createRows() {
    global $connection;
    if(isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        
    $username = mysqli_real_escape_string($connection, $username);  //This functions escapes all the data from $username field to clean it up then assign it back, this allows the application to be more secure 
    $password = mysqli_real_escape_string($connection, $password);  //This functions escapes all the data from $password field to clean it up then assign it back, this allows the application to be more secure
      
    //The below functions encrypts the user password to make it much harder to for hackers to figure out.  It will cycle thru 10 times    
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);    
    
    
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