<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="https://localhost/Concierge%20India/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Concierge India</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
         <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="assets/styles.css">


<style type="text/css">
  .navbar-brand{
    color:#fff !important;
    font-weight:bold;
  }
    .sidebar-list
    {
        margin-right: -15px;
        
        font-family: 'Quicksand', sans-serif; 
        font-size: 14px
    }

    .sidebar-list li:hover
    {
      background-color: deepskyblue !important;
    }
     .sidebar-list li a
     {
        color:white;
        text-decoration: none;
     }

     .mytable1 .card
     {
      background: #5f2c82;   
      background: -webkit-linear-gradient(to right, #49a09d, #5f2c82);  
      background: linear-gradient(to right, #49a09d, #5f2c82); 

     }

     .mytable2 .card
     {
            background: #EC6F66;    
      background: -webkit-linear-gradient(to right, #F3A183, #EC6F66);  
      background: linear-gradient(to right, #F3A183, #EC6F66); 

     }
     .card 
     {
      overflow: hidden;
      transition: all 0.9s ease;
     }
     .card:hover
     {
      transform: scale(1.04);
     }
    .cog-ico{
      font-size: 28px !important;
      vertical-align: text-bottom;
    }
    .text-primary{
      font-size:24px;

    }


</style>

  </head>

  <body style="background-color:#f1efef">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand" href="/">
  Concierge India
  </a>
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white font-weight-bold" href="/">Dashboard <span class="sr-only">(current)</span></a>
      </li>
    </ul> -->
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



        <!-- sidebar starts -->

    <div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
        <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
              <!-- <li class="list-group-item bg-dark "><p>Manage Courses</p></li> -->
            <li class="list-group-item  bg-dark mt-5 "><a href="">HOME</a></li>
            <!-- <li class="list-group-item  bg-dark "><a href="">HOME</a></li> -->
            
            <li class="list-group-item bg-dark" style="height: 600px;"></li>
          </ul>
        </div>

             <!-- sidebar ends -->
         <!-- main content starts -->

        <div class=" col-md-10">
                  <div class="card-header bg-white text-primary " style="margin-right: -45px; height: 60px;">
                 <b>Welcome User </b><i class="fa fa-cog ml-2 cog-ico"></i>
                  </div>

                  <div class="d-flex justify-content-center align-items-center container ">

<div class="row mt-5">
    <form  action="controllers/getCsvData.php" method="post" name="upload_excel" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inputUserName" class="control-label">Enter Email</label>
            <input type="email" class="form-control" id="" name="email">
        </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload CSV File</label>
    <input type="file" name="file" id="file">
  </div>
<input  class="btn btn-primary btn--pill btn--blue" type="submit" value="Upload file" id="btnSubmit" data-loading-text="Loading..." name="Import">
    </form>

</div>

</div>
<div class="text-center">
<p></p>
</div>

          </div>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


  
    <script type="text/javascript">
$(document).ready(function(){

});
</script>



  </body>
</html>
