
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mainpage</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <script>
            window.alert ("Do You Have Light In Your Location???");
            var lighton = "Yes";
            var lightoff = "No";
            var total = lighton + lightoff; document.write(total); 
        </script> 
        <div class="container">
              <nav class="navbar">
                  
                <div class="nav-container">
                    
                        <div class="Menu">
                        <button class="Menubtn">Menu<i class="fa fa-caret-down"></i></button>
                        <div class="Menu-content">
                          <a href="#Search"><form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form></a>
                          <a href="#Comments">Comments</a>
                          <a href="chargingpoint.html">Charging points</a>
                   </div>    
                </div>
                   <a href="index.html">Home</a>    
                </div>
            </nav>
             <!--Navigation bar ends here -->
             <section class="map" id="map">
                 
                <div class="center">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63433.383678575025!2d3.4562048!3d6.447104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgos+map!5e0!3m2!1sen!2sng!4v1519128671582" width="1500px" height="800px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
             </section>
        </div>
        
       
    </body>
</html>