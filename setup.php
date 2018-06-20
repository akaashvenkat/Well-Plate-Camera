<!DOCTYPE html>
<html lang="en"><html>
  <link type="text/css" rel="stylesheet" href="./css/stylez.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <head><meta charset="utf-8"></head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
	        <h1>Incubator Photo Library</h1>
        </div>
        <nav>
          <ul>
            <li><a href="./index.php">View Images</a></li>
            <li><a href="compare.php">Compare Images</a></li>
            <li class="current"><a href="./setup.php">Setup Videos</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </head>
  <body>
    <div class="light">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <form method = 'GET' action='#'> 

              <h4>Starting Up Camera, Before the 24 Hours:</h4>
              <video width='480' height= '320' controls><source src='./instruction_1.mov' type='video/mp4'>video 1</video>
                    
              <?php 
                for($x = 0; $x < 3; $x++) {
                  echo "&nbsp;</br>";
                } 
              ?>    
              
              <h4>Viewing Images, During the 24 Hours:</h4>
              <video width='480' height= '320' controls><source src='./instruction_2.mov' type='video/mp4'>video 2</video>
              
              <?php 
                for($x = 0; $x < 3; $x++) {
                  echo "&nbsp;</br>";
                } 
              ?>   

              <h4>Transferring Images to Your Computer, After the 24 Hours:</h4> 
              <video width='480' height= '320' controls><source src='./instruction_3.mov' type='video/mp4'>video 3</video>
            </form>
          </div>
        </div>
      </div> 
    </div>
  </div>
</body>

<footer>
  <p>Zheng Lab, Copyright &copy; 2018</p>
</footer>
</html>