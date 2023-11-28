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
       background: #253342;
    }

    h1{
        color: #fff;
    }

    .card-img-top{
        border-radius: 40px;
        padding: 20px;
    }
    .card-img2-top{
        border-radius: 40px;
        padding: 20px;
        length: 30px;
    }
    .card{
        border-radius: 20px;
        box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
    }

    .card-body{
        padding: 25px;
        margin-top: -15px;
        margin: auto;
    }

.btn-primary{
    border-radius: 10px;
    length: 15px;
    background: #008080;
}
 .btn-primary:hover{
    background: #253342;
 }

 h5{
    color: #0000ff;
 }


</style>
<head>
    <body>
        <div class="conteiner">
            <h1 class="text-center">Meal Items</h1>

            <div class="row row-cols-1 row-cols-md-4 g-4 py-3">
                <div class="col">
                <div class="card" style="width: 15rem;">
  <img src="../image/breakfast.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Breakfast</h5>
    <p>Press the button to select</p>
  </div>
  <div class="d-flex justify-content-round mb-2">
      
      <button class="btn btn-primary">Add</button>
  </div>
</div>
</div>

        <div class="col">
                <div class="card" style="width: 15rem;">
  <img src="../image/lunch.jpg" class="card-img2-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lunch</h5>
    <p>Press the button to select</p>
  </div>
  <div class="d-flex justify-content-round mb-2">
      
      <button class="btn btn-primary">Add</button>
  </div>
</div>
</div>

        <div class="col">
                <div class="card" style="width: 15rem;">
  <img src="../image/tea.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Evening Tea</h5>
    <p>Press the button to select</p>
  </div>
  <div class="d-flex justify-content-round mb-2">
      
      <button class="btn btn-primary">Add</button>
  </div>
</div>
</div>


        <div class="col">
                <div class="card" style="width: 15rem;">
  <img src="../image/dinner.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dinner</h5>
    <p>Press the button to select</p>
  </div>
  <div class="d-flex justify-content-round mb-2">
      
      <button class="btn btn-primary">Add</button>
  </div>
</div>
</div>
            </div>
        </div>
        
    </body>
</html>