<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";
$topic=$_REQUEST["topic"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "<h1>Failed!</h1>";
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
$sql = "SELECT postid,likes,topic,authorname,content FROM post where topic='$topic'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    echo "<p style='text-align:center;'>Search Result for Topic <strong>'$topic'</strong>:</p>";
    while($row = $result->fetch_assoc()) {
    echo '
    <div class="col-sm-3 m-2 shadow align-self-center" style="width: 400px;">
                    <div class="p-2 m-2 bg-white">
                        <p><strong>Topic:</strong>'.$row["topic"].'
                            <span class="align-self-center" style="float: right;">'.$row["likes"].
                                '<a href="#">   
                                    <img src="images/icons8-like-50.png" alt="" style="width: 20px;height:20px;">
                               </a>
                            </span> 
                                
                        </p>
                        <p>
                            '.substr($row["content"],0,200).'....
                        </p>
                        <p><strong>Author:</strong>Ram
                            <span class="align-self-center" style="float: right;">
                                12.12.2023
                            </span> </p>
                        </p>
                    </div>
                </div>
    
    ';
    }
    $conn->close();
} else {
    echo "<p style='text-align:center;'>Search Result for Topic <strong>'$topic'</strong>: Nothing! </p>";
    $conn->close();
}
?>