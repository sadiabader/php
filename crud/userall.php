<?php
include('connect.php');

$sql = "select * from `students`";
$fetch = mysqli_query($connection, $sql);
$data = mysqli_fetch_assoc($fetch);
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
    
<tabel class="table table-bordered text-center">
<thead class="table table-dark">
<tr>
<th> Id </th>
<th> Name</th>
<th> Age </th>
<th> Gender </th>
<th> Email </th>
<th> update </th>
</tr>
</thead>
<tbody>
<?php
while($data = mysqli_fetch_assoc($fetch)){
?>
<tr>
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['age']; ?></td>
<td><?php echo $data['gender']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><a href="update.php?id=<?php echo $data['id'];?>"class="btn btn-warning"></a></td>
</tr>
<?php
}
?>
</tbody>

</table>
</body>
</html>