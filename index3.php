<?php
include "common.php";

?>
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
              <!--jQuery library-->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

              <!--Latest compiled and minified JavaScript-->
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <link href="index.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <style>
            .row_style{
                margin-top:10px;
            }
        </style>
        <title>N</title>
    </head>
    <body>
<?php
        include 'header.php';
        ?><br>

          <div class="container">
              <div class="row justify-content-md-center  row_style">
                  <div class="col-6">
                      <div class="card text-center border-sucess">
                          <div class="card-header">
                              <h4 style="color:black">add community</h4>
                          </div>
                          <div class="card-body">
                              <p class="text-warning">create your own community</p>
                               <div class="container">
              <div class="row">
                  <div class="col-12 ">

                    <form method="POST" action="mysql.php">
                     <div class="form-group">
                         <input type="text"  class="form-control" name="name"  placeholder="name" required>
                     </div>






                     <button type=submit class="btn btn-primary">submit</button>

                 </form>
                  </div>
              </div>
          </div>

                          </div>

                          <div class="card-footer"><p class="text-warning"> </p><a href="signup.php">Register</a></div>
                      </div>
                  </div>
                </div>
                <div class="row  justify-content-md-center row-style">
                  <div class="col-6">
                      <div class="card text-center border-sucess">
                          <div class="card-header">
                              <h4 style="color:black">add ALIAS community</h4>
                          </div>
                          <div class="card-body">
                              <p class="text-warning">Add your community,WITHOUT YOUR LOGIN CREDENTIALS</p>
                               <div class="container">
              <div class="row">
                  <div class="col-12 ">
                    <form method="POST" action="alias.php">
                                    <div class="form-group">
                                        <input type="text"  class="form-control" name="name"  placeholder="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  class="form-control" name="createdby"  placeholder="creator...." required>
                                    </div>




                                    <button type=submit class="btn btn-primary">submit</button>

                                </form>
                  </div>
              </div>
          </div>

                          </div>

                          <div class="card-footer"><p class="text-warning"> </p><a href="signup.php">Register</a></div>
                      </div>
                  </div>

              </div>
          </div>
    <?php
        include 'footer.php';
        ?>
    </body>
</html>
