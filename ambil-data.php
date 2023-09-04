<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "wander_t1";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Pagination setup
$itemsPerPage = 4; // Number of items to show per page
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$offset = ($page - 1) * $itemsPerPage;


$sql = "SELECT * FROM tbl_wishes LIMIT $offset, $itemsPerPage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo '<div class="card card-sm  mt-2 rounded-3" style="width: 16rem;">
                <div class="card-body" >
                    <p style="font-size:9px" class="card-title text-start"><strong>From: ' . $row["name"] . '</strong></p>   
                    <p style="font-size:9px" class="card-text text-start ">' . $row["ucapan"] . '</p>
                </div>
              </div>';
    }

    echo "</table>";
} else {
    echo '<div class="card card-sm  mt-2 rounded-3" style="width: 14rem;">
    <div class="card-body " >
        
        <p style="font-size:10px;" class="card-title text-center"><strong>No Data Found</strong></p>  
        
    </div>
  </div>';
}

$conn->close();
