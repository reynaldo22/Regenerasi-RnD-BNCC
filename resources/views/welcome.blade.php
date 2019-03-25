<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  @if (session('status'))
      <div class="alert alert-success">
      {{ session('status') }}
      </div>
  @endif
  
<form action="/register/add-mahasiswa" method="post">
  @csrf
  <ul class="items"></ul>
  <fieldset class="username enable">
    <div class="icon left"><i class="user"></i></div>
    <input type="text" name="name" placeholder="Name"/>
    <div class="icon right button"><i class="arrow"></i></div>
  </fieldset>
  <fieldset class="email">
    <div class="icon left"><i class="user"></i></div>
    <input type="text" name="nim" placeholder="NIM"/>
    <div class="icon right button"><i class="arrow"></i></div>
  </fieldset>
  <fieldset class="username">
    <div class="icon left"><i class="user"></i></div>
    <input type="number" name="age" placeholder="Age"/>
    <div class="icon right button"><i class="arrow"></i></div>
  </fieldset>
  <fieldset class="username">
    <div class="icon left"><i class="user"></i></div>
    <input type="number" name="phone" placeholder="Phone"/>
    <div class="icon right button"><i class="arrow"></i></div>
  </fieldset>
  <fieldset class="thanks">
    <div class="icon left"><i class="heart"></i></div>
    <p>Thanks for your time</p>
    <br>
    <input type="submit" value="Submit">
    <div class="icon right"><i class="heart"></i></div>
  </fieldset>
</form>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
