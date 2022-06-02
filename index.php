<?php
  include "Database.php";

  $d = new Database();
  $data = $d->getDataAll();

  $data->setFetchMode(PDO::FETCH_OBJ);

  // echo "Jumlah data: ",$data->rowCount(),"<br/>";
  // foreach($data as $ddata => $list)
  // {
  //   echo $list->username,"<br/>";
  // }

?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

  <title>CRUD PHP MVC</title>
</head>
<body>

 <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <a class="navbar-brand" href="#">CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Data User</span></a>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row mt-5">
    <div class="col-12">
      <a href="add_data.php" class="btn btn-success mb-3">Add Data</a>
      <div class="card">
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach($data as $ddata => $list) { ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $list->username ?></td>
                <td align="center">
                  <a href="edit_data.php?id=<?php echo $list->id ?>" class="btn btn-warning">Edit</a>
                  <a href="process_delete.php?id=<?php echo $list->id ?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>