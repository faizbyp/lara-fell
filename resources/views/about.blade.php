<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>About</title>
</head>
<body>
  <h1 class="text-center py-3 fw-bold bg-danger text-white">About Me</h1>

  <section class="container">
    <div class="row align-items-center text-center">
      <div class="col">
        <h1>Halo!</h1>
      </div>
      <div class="col">
        <h3>Nama saya <?= $name ?></h3>
        <p><?= $nim ?></p>
      </div>
    </div>
  </section>
</body>
</html>