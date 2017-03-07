<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Perpustakaan</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/min.css">
  <link rel="stylesheet" href="css/stylee.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
        
        <div id="login">   
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button class="button button-block"/>Log In</button><br>
          
          <a href="index.php"><b>Back to Home</b></a>
          
          </form>

        </div>
        
      
</div> <!-- /form -->

  <script src="js/jquery.min.js"></script>
  <script src="js/index.js"></script>

</body>
</html>
