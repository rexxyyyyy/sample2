
<?php
 $db_server="localhost";
 $db_user= "root";
 $db_pass= "";
 $db_name= "dbcatering";
 $conn="";



$conn = new mysqli ($db_server, $db_user, $db_pass, $db_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$fullname = $_POST['fullname'] ?? null;
$pn = $_POST['pn'] ?? null;
$ev = $_POST['ev'] ?? null;
$ed = $_POST['ed'] ?? null;
$tm = $_POST['tm'] ?? null;
$va = $_POST['va'] ?? null;
$motif = $_POST['motif'] ?? null;
$gc = $_POST['gc'] ?? null;
$beef = $_POST['beef'] ?? null;
$pork = $_POST['pork'] ?? null;
$chicken = $_POST['chicken'] ?? null;
$seafood = $_POST['seafood'] ?? null;
$pasta = $_POST['pasta'] ?? null;
$vegetables = $_POST['vegetables'] ?? null;
$dessert = $_POST['dessert'] ?? null;
$beverages = $_POST['beverages'] ?? null;
$fcuisine = $_POST['fcuisine'] ?? null;
$add = $_POST['add'] ?? null;
$notes = $_POST['notes'] ?? null;


// SQL query to insert data
$sql = "INSERT INTO tblinfo
    (
        Fullname, 
        Phone_Num, 
        event,
        Event_date, 
        Event_time, 
        Venue_address, 
        Event_theme, 
        Guest_count, 
        beef, 
        pork, 
        chicken, 
        seafood, 
        pasta, 
        vegetables, 
        dessert, 
        beverages, 
        filipino_cuisine, 
        add_ons,
        Notes
	

    )
    VALUES 
    (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssssisssssssssss", 
    $fullname, 
    $pn, 
    $ev, 
    $ed, 
    $tm, 
    $va, 
    $motif, 
    $gc, 
    $beef, 
    $pork, 
    $chicken, 
    $seafood, 
    $pasta, 
    $vegetables, 
    $dessert, 
    $beverages, 
    $fcuisine, 
    $add,
    $notes


);

// Execute the query
if ($stmt->execute()) {
    echo "Record added successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
