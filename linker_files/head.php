<!doctype html>
<html class="no-js" lang="">

<head>
  <!-- bootstrap cdn -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
  
  <!-- bootstrap on server -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


  <!-- font awesome on server -->
  <link href="font-awesome/css/all.css" rel="stylesheet" type="text/css"/>



  <!-- font-awesome cdn -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
  
  <!-- css custom stylesheet -->
  <link rel="stylesheet" href="css/main.css">
  
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-2"><a href="index.php"><img src="img/logo.png"></a></div>
      <div class="offset-md-0 col-6 div_margin">

        <form action="search_result.php">
          <div class="form-row align-items-center">
            <div class="col-9">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-search"></i></div>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search">
              </div>
            </div>
            <div class="col-3">
              <button type="submit" class="btn btn-primary mb-2">Search</button>
            </div>
          </div>
        </form>


      </div>
      


      



      <div class="col div_margin"><a href="login.php" class="btn btn-primary"> <i class="fas fa-stroopwafel"></i> Sign In</a></div>

      <div class="col div_margin"><a href="contact.php" class="btn btn-primary">Need Help?</a></div>


      <div class="col div_margin">
        <a href="cart.php" class="btn btn-primary">
          Cart <span class="badge badge-light">4</span>
        </a>
      </div>


    </div>
  </div>



  