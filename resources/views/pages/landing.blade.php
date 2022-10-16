<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IPT Midterm Project</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   
    <!-- Main Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">IPT Midterm Project</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="nav justify-content-end">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= url('/')?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Account</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-3 offset-md-4">
                <div class="card  bg-primary mt-3">
                    <div class="card-header text-center text-white">
                        <h4>Main Menu</h4>
                    </div>
                    <div class="d-grid card-body">
                        <a href="{{url('/')}}" class="btn btn-light btn-inline mt-2">Home</a>
                        <a href="{{url('/users')}}" class="btn btn-light btn-inline mt-2">Users</a>
                        <a href="{{url('/accounts')}}" class="btn btn-light btn-inline mt-2">Accounts</a>
                    </div>
                </div>
        </div>
    </div>

</body>
</html>