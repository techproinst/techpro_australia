<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techpro :: Au</title>
  <link rel="icon" href="images/techpro_img.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('assets/styles/success.cs') }}">
  <style>
    .payment-text {
  color: #fc3468;;
  font-size: 50px;
  margin-top: 100px;
}

  </style>
</head>
<body>

 <div class="container mt-5">
  <div class="row">
    <div class="col text-center mt-5">
      <h1 class="payment-text text-success">Success</h1>
      <p class="fs-4">Your registration is completed and payments Receipts uploaded successfully</p>
      <p class="fs-5">Kindly check your email for your further details </p> 
      <a href="{{ url('/') }}"><button style="background-color: #fc3468;;" type="button" class="btn  pt-2 pb-2 ms-3 mb-1 text-white">Home</button></a> 
    </div>
  </div>
 </div>

  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>