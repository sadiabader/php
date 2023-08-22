<?php
$conn = mysqli_connect("localhost", "root", "", "classC2");
if(!$conn){
    die("connection failed");
}
$sql = "select * from `students`";
$data = mysqli_query($conn, $sql);
if (mysqli_num_rows($data) > 0){
//print_r($data);

//while($data = mysqli_fetch_assoc($fetch)){
    // echo $data['id'];
    // echo $data['name'];
    // echo $data['age'];
    // echo $data['gender'];
    // echo $data['email'];
    
//}
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
<table class="table table-bordered text-center">
<thead class="table table-dark">
<tr>
<th> Id </th>
<th> Name</th>
<th> Age </th>
<th> Gender </th>
<th> Email </th>
<th> Password </th>
<th> update </th>
<th> Delete </th>
</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($data)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-warning"> UPDATE </a></td>
<td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-warning"> Delete </a></td>
</tr>
<?php
}
}
?>
</tbody>

</table>
</body>
</html>