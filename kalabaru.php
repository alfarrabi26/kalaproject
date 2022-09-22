<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/Kala.png">
 
    <title>Pilih Avatar Mu</title>
 
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .post
  {
  	margin-bottom:50px;
  	margin-top:50px;
  	text-align: center;
  } 
 
  </style>
  </head>
  <body>
 
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
    		<img src="assets/img/NM.png" alt="logo" style="width:40px;">
  		</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/kalakininanti/index.php">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/kalakininanti/index.php">Logout</a>
            </li>
			
          </ul>
          
        </div>
      </nav>
    </header>
 
    <main role="main">
 
      <div id="" class="" data-ride="">
 
  <!-- Indicators -->

  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/bg.png" alt="" width="" height="">
      <div class="carousel-caption">
        <h3>Pick Your character here!!!</h3>
        <p>Temui lah karakter anda di dalam kubus Kala</p>
                      <div>
                        <label for="fname">Isi Nama Kamu</label><br>
                        <input type="text" id="fname" name="fname"><br>
                        <label for="fcontent"></label>
                        Tempat:<br>
                        <textarea placeholder="Type your name" id="fcontent" name="w3review" rows="1" cols="21" >Kala Kini Nanti</textarea>
                        <br>
                        <button id="create">Submit</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" >
                        <a download="info.txt" id="downloadlink" style="display: none">Send Your Name</a></button>
                      </div>
      </div>
     </div>
    </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 
	<div class="container post">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <div class="photo" onclick="" style="cursor: pointer;">
                <img class="card-img-top" src="assets/img/testing.png" alt="Card image cap">
                </div>
                <div class="card-body">
                  <p class="card-text">Belajar HTML di Warung Belajar</p><div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" >
                      <a href="assets/fbx/Unarmed Walk Forward.fbx" download="Kala.fbx">Pick Avatar</a>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <div class="photo" onclick="" style="cursor: pointer;">
                <img class="card-img-top" src="assets/img/testing2.png" alt="Card image cap">
                </div>
                <div class="card-body">
                  <p class="card-text">Belajar HTML di Warung Belajar</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" >
                      <a href="assets/fbx/Breakdance Uprock Var 2.fbx" download="Kala.fbx">Pick Me!</a>
                      </button>
                    </div>
                    <small class="text-muted">30 Part</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <div class="photo" onclick="" style="cursor: pointer;">
                <img class="card-img-top" src="assets/img/testing2.png" alt="Card image cap">
                </div>
                <div class="card-body">
                  <p class="card-text">Belajar HTML di Warung Belajar</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" >
                      <a href="assets/fbx/Breakdance Uprock Var 2.fbx" download="Kala.fbx">Pick Me!</a>
                      </button>
                    </div>
                    <small class="text-muted">30 Part</small>
                  </div>
                </div>
              </div>
            </div>            
        </div>
        </div>
        </main>
 
 
      
 
 
      <!-- FOOTER -->
      <footer class="container">
        <p style="text-align: center;">&copy; Sembilan Matahari </p>
      </footer>

      <script type="text/javascript">
(function() {
    var textFile = null,
        makeTextFile = function(text) {
            var data = new Blob([text], {
                type: 'text/plain'
            });

            if (textFile !== null) {
                window.URL.revokeObjectURL(textFile);
            }

            textFile = window.URL.createObjectURL(data);

            return textFile;
        };


    var create = document.getElementById('create');
    var fileContent = document.getElementById("fcontent");

    create.addEventListener('click', function() {
        const fileName = document.getElementById("fname").value;
        document.getElementById("downloadlink").setAttribute("download", fileName);
        var link = document.getElementById('downloadlink');
        link.href = makeTextFile(fileContent.value);
        link.style.display = 'block';
    }, false);
})();
</script>
  </body>
</html>