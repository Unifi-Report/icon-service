<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Token icon service</title>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-12 text-center pt-3">
      <h1>Tron token icon service</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12 py-5">
      <h3>TRC10</h3>
      <form class="needs-validation" novalidate action="icon_trc10.php" method="get">
        <div class="row">
          <div class="input-group mb-3 pt-1 col-10">

            <input type="text" class="form-control" name="token" placeholder="Token ID">
          </div>
          <div class="col-2">
            <button class="btn btn-danger mt-1 w-100" type="submit">Let's go</button>
          </div>
        </div>
      </form>
      <h3>TRC20</h3>
      <form class="needs-validation" novalidate action="icon_trc20" method="get">
        <div class="row">
          <div class="input-group mb-3 pt-1 col-10">
            <input type="text" class="form-control" name="token" placeholder="Token Address">
          </div>
          <div class="col-2">
            <button class="btn btn-danger mt-1 w-100" type="submit">Let's go</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>