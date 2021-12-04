<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ELECTRONIC-MEDICAL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <link rel="stylesheet" href="boosrtap/app.php">
         <!--a ne pas oublier de le mettre surtout -->
          <link rel="stylesheet" href="{{ asset('css/app.css') }}">
          <!--a ne pas oublier de le mettre surtout -->

          <style media="screen">
            *{
              padding: 0;
              margin:0;
              box-sizing: border-box;

            }
            body{
               background: rtb(219,226,226);
               background-image: url("image/hopital 1.jpg");
               background-repeat: no-repeat;
               background-size: cover;
            }
            .row{
               background: white;
               border-radius: 30xp;
            }
            img{
              border-top-left-radius: 30px;
              border-bottom-left-radius: 30xp;
            }

          </style>

    </head>
    <body>
         <!--insertion d'une image-->

         <!--insertion d'une image-->
 <!-- navbar debut-->
 <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"> <img src="image/electronique.png" height="30xp" width="40xp" alt="logo" > </a>
      </nav>
</div>
<!--navbar fin-->
         <br><br><br>
         <section class="form my-4 MX-5 ">
            <div class="container">
               <div class="row no-gutter">
                 <div class="row align-items-center">

                   <div class="col">
                     One of three columns
                   </div>

                   <div class="col">
                     One of three columns
                   </div>
                   
                   <div class="col">
                     One of three columns
                   </div>

                 </div>
                </div>
               </div>
            </div>
         </section>

<!--a ne pas oublier de le mettre surtout -->
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
       <script src="{{ asset('js/app.js') }}"></script>
       <!-- a ne pas oublier de le mettre surtout -->
    </body>
</html>
