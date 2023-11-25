<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<style>
html,body{
  height: 100%;
}
body{
  background: url(../image/img6.jpg);
  background-size: cover;
}

.form-signin{
    background: rgba(236,240,241,.35);
    border-radius: 20px;
    color: #000000;
    padding: 30px;
    margin: auto;
    max-width: 450px;
    width: 100%;
}

.btn-primary{
  background: #253342;
  border: 0;
}
.btn-primary:hover{
  background: #5c62D6;
}

.text-color{
  color: #fff;
  background: rgb(45,104,157);
}
.text-color:hover{
  background: #5c62D6;
  color: #253342;
}
.form-control{
  border-color: #000000;
}

</style>

</head>
<body class="bg-light">
  <div class="conteiner">
    <div class="row mt-5">
      <div class="col-lg-4 form-signin m-auto">
        <h2 class="text-center pt-5">You Are Welcome!</h2>
        <p class="text-center pt-1">Login for an excited environment!!</p>
        <h3 class="text-center pt-1">Log in</h3>

        <form action="#">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email">
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter Password">
          </div>
          <div class="d-grid">
            <button type="button" class="btn btn-primary">Log In</button>
            <p class="text-center py-2">
                Don't have an account? <a href="project.php" class="text-color"> Sign up Here</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>