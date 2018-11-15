<!doctype html>
<html class="no-js" lang="">

<head>
  <!-- bootstrap cdn -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
  
  <!-- bootstrap on server -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">


  <!-- font awesome on server -->
  <link href="font-awesome/css/all.css" rel="stylesheet" type="text/css"/>
  
  <link rel="icon" href="img/fevicon.png" type="image/gif" sizes="16x16">

  <title>U-M-A-R-T</title>
  
  <!-- font-awesome cdn -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
  
  <!-- css custom stylesheet -->
  <link rel="stylesheet" href="css/main.css">
  
</head>
<body>


  <!-- navigation bar and search bar starts -->

  <div class="container-fluid bg-light">
    <div class="row">
      <div class="col">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-12 justify-content-lg-start d-flex justify-content-center"><a href="index.php"><img src="img/logo.png"></a>
            </div>

            <div class="col-lg-6 col-12 align-self-lg-center">
              
              <form action="search_result.php">
                <div class="form-row align-items-center">
                  <div class="col-9">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-search"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search">
                    </div>
                  </div>

                  <div class="col-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                </div>
              </form> 
            </div>
            <div class="col-lg-1  col-3 offset-1 mt-3 mb-3 mb-lg-0 mt-lg-0 offset-lg-0 d-flex justify-content-center align-self-lg-center"><a href="login.php" class="btn btn-success"> Sign In</a></div>
            
            <div class=" col-lg-2 col-xl-1 col-3 mt-3 mb-3 mb-lg-0 mt-lg-0 d-flex justify-content-center align-self-lg-center"><a href="contact.php" class="btn btn-info">Need Help?</a></div>
            
            
            <div class=" col-lg-1 col-3 mt-3 mb-3 mb-lg-0 mt-lg-0 d-flex justify-content-center align-self-lg-center">
              <a href="cart.php" class="btn btn-danger">
                Cart <span class="badge badge-light">4</span>
              </a>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- navigation bar and search bar ends -->


  