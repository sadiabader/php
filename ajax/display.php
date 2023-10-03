<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container">
<div class="row">
<div class="col-md-6">

<form action="" id="form" method="POST" class="form-group">
    <label for="nanne"> Name</label>
    <input type="text" name="name" id="name" class="form-control">
    <label for="email"> Email</label>
    <input type="email" name="email" id="email" class="form-control">
    <label for="phone"> Phone</label>
    <input type="number" name="phone" id="phone" class="form-control">
    <input type="submit" name="submit" id="submit" class="btn btn-primary">
</form>
</div>
<div class="col-md-6">
    <h1>User Data</h1>
    <button id="btn" class="btn btn-success"> Get Data</button>
    <table class="table table-borderd">
      <thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>
</thead>
<tbody id="tab">

</tbody>
</table>
    </div>
</div>
</div>

</div>




<script src= "js/jquery-3.7.1.min.js"> </script>
<script>

$(document).ready(function(){
    $('#btn').click(function(){
        $.ajax({
            url: 'loaddata.php',
            method:'POST',
           // data: obj, arr,
           success : function(data){
            console.log(data);
            $('#tab').html(data);
           }
        })
    })
})

</script>
</body>
</html>