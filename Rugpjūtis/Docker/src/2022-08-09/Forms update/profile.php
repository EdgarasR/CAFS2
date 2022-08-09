<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"></head>
</head>
<body>
    <div class="container mt-4">
        <div class="card" style="width: 18rem;">
        <img src="photos/photo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title">Profilio informacija</h4>
            </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Vardas: <?php echo $_POST['name']?></li>
            <li class="list-group-item">Pavardė: <?php echo $_POST['lastname']?></li>
            <li class="list-group-item">Miestas: <?php echo $_POST['city']?></li>
        </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>