<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: georgia;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
  .table{
      padding: 50px;
      padding-top:10px;
  }
  h1{
      font-size: 35px;
      text-align: center;
      font-weight: 500;
      font-family: Georgia;
  }
 </style>
</head>
<body>
    <h1> Registered Users for Facebook Preview</h1>
    <div class="table">
    <table>
 <tr>
  <th>Id</th> 
  <th>Name</th> 
  <th>Email</th>
  <th>Phone</th>
  <th>Info-Date</th>
  <th>Course-Date</th>
 </tr>
 <?php
 
$conn = mysqli_connect("localhost:3306", "dmcain2g_user", "?Bp(Q^0IZ3)D", "dmcain2g_training");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "select * from digitalmarketing;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["email"]. "</td><td>" . $row["phone"] . "</td><td>" . $row["info"] . $row["course"]. "</td><td>" . "</td></tr>";
        }
    }
echo "</table>";

$conn->close();
?>
</table>
</div>
</body>
</html>