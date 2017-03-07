<!DOCTYPE html>
  <html>
    <head>
      <title>KwekSchool</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

 <nav class="grey">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">KwekSchool</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </div>
  </nav>



<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="img/aw.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="img/aw.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="img/aw.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="img/aw.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="img/aw.jpg"></a>
  </div>



     <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="input_text" type="text" data-length="10">
            <label for="input_text">Input text</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea1">Textarea</label>
          </div>
        </div>
        <p>
      <input name="group1" type="radio" id="test1" />
      <label for="test1"></label>
    </p>
    <p>
      <input name="group1" type="radio" id="test2" />
      <label for="test2">Yellow</label>
    </p>
      </form>
    </div>


  <footer class="page-footer grey">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">TanksTo</h5>
                <p class="grey-text text-lighten-4">KwekSchool </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright KwekSchool
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
   

        <script type="text/javascript">
        $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });

$('.carousel.carousel-slider').carousel({fullWidth: true});

        </script>


    </body>
  </html>