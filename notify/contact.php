<?php include 'contact_us_connect.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contact Us.</title>
    <style>
      body{
        background-color: #d5f4e6;
      }
      #submit:hover{
        background-color: green;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
      <a style="font-size: 30px;" class="navbar-brand" href="index.php">iNotify</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <?php
    if($insert)
    {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Success!</strong> Your comment has been sent successfully!
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
      </div>";
    }
    ?>
    <div class="container mt-5">
      <h1 style="text-align: center;">Contact Me!</h1>
      <hr>
      <form class="row g-3" action="contact.php" method="post">
        <div class="col-md-6 mt-3">
          <label for="firstName" class="form-label"> <b>First Name:- </b></label>
          <input class="form-control" type="text" name="firstName" id="firstName" placeholder="Ex: John" required>
        </div>
        <div class="col-md-6 mt-3">
          <label for="LastName" class="form-label"> <b>Last Name:-</b></label>
          <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Ex: Doe" required>
        </div>
        <div class="col-md-6 mt-3">
          <label for="EmailInfo" class="form-label"><b>E-mail Address:-</b></label>
          <input class="form-control" type="email" name="EmailInfo" id="EmailInfo" placeholder="john123doe@gmail.com" required>
        </div>
        <div class="col-md-6 mt-3">
          <label for="PhoneNumber" class="form-label"><b>Phone Number:-</b></label>
          <input class="form-control" type="text" name="PhoneNumber" id="PhoneNumber" placeholder="+91 (4526186183)">
        </div>
        <div class="col-md-12 mt-3">
          <label for="comments" class="form-label"><b>Comments:-</b></label>
          <textarea class="form-control" id="comments" name="comments" rows="8" cols="80" placeholder="Comment here...." ></textarea>
        </div>
        <div class="col-md-12 mt-3">
          <button class="btn btn-primary" id="submit" type="submit" name="submit">Submit</button>
        </div>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
