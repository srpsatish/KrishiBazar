<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <script src="https://kit.fontawesome.com/5b085c0ec3.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>

    <body>
         <!--NAVBAR THAT WILL SLIDE AND TOGGLE-->
         <div class="toggleNav" id="mytoggleNav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact Us</a>
        </div>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <span class="navbar-brand" onclick="openNav()" style="cursor: pointer;"><i class="fas fa-bars"></i></span>
           
          </nav>

         

          <script>
            function openNav() {
              document.getElementById("mytoggleNav").style.width = "250px";
            }
            
            function closeNav() {
              document.getElementById("mytoggleNav").style.width = "0";
            }
            </script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>