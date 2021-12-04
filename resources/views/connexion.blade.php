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
            .btn btn-primary btn-sm{
              border: none;
              outline: none;
              height: 50XP;
              width: 100xp;
              background-color:black;
              color: white;
              border-radius: 4xp;
              font-weight: bold;
            }
            .btn btn-primary btn-sm:hover{
              background: white;
              border: 1xp solide ;
              color: black;
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>

      </nav>
</div>
<!--navbar fin-->
         <br><br><br>
         <section class="form my-4 MX-5 ">
            <div class="container">
               <div class="row no-gutter">
                 <div class="col-7 ">
                     <img src="image/hopital-2.png" alt="presentation de l'hopital" >
                 </div>
                 <div class="col-4">

                 <div class="col-lg-10 px-6 pt-5">

                   <form  action="{{ route('formulaire') }}" method="post">
                     @csrf
                     <div class="form-row">
                       <div class="col-lg-7">
                         <input type="text" class="forom-control" name="mail" value="" placeholder="entrer votre adresse "> <br><br>
                       </div>
                     </div>

                     <div class="form-row">
                       <div class="col-lg-7">
                         <input type="text" class="forom-control" name="password" value="" placeholder="password"><br><br>
                       </div>
                     </div>

                     <div class="form-row">
                       <div class="col-lg-7">
                         <label for="statut"> choisir un statut</label>
                         <select name="statut">
                           <option value=""></option>
                           <option value="Patient">Patient</option>
                           <option value="Secretaire">Secretaire</option>
                           <option value="Infirmier">Infirmier</option>
                           <option value="Medecin">Medecin</option>
                         </select> <br> <br><br>
                       </div>
                     </div>

                     <div class="form-row">
                       <div class="col-lg-7">
                         <input type="submit" class="btn btn-primary btn-sm" name="valider" value="VALIDER">
                       </div>
                     </div>
                      <a href="#">mot de pass oublier</a>
                      <p> Si vou netes pas inscript clique ici

                        <!--buton modal-->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">inscription
                         </button>
                         <!--fin buton modal-->

                      </p>
                   </form>

                 </div>
                </div>
               </div>
            </div>
         </section>


         <!--  debut Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body justify-content-center">

                         <form action="\inscription" method="post" >
                           @csrf
                             <div class="form-row">

                               <div class="col-lg-7">
                                 <input type="text" class="forom-control" name="name" value="" placeholder="entrer votre nom"> <br><br>
                               </div>

                               <div class="col-lg-7">
                                 <input type="text" class="forom-control" name="prenom" value="" placeholder="entrer votre prenom"> <br><br>
                               </div>

                               <div class="col-lg-7">
                                 <input type="date" class="forom-control" name="birthday" value="" placeholder="entrer votre date de naissance"> <br><br>
                               </div>

                               <div class="col-lg-7">
                                 <input type="number" class="forom-control" name="telephone" value="" placeholder="entrer votre telephone"> <br><br>
                               </div>

                               <div class="col-lg-7">
                                 <input type="email" class="forom-control" name="mail" value="" placeholder="entrer votre email"> <br><br>
                               </div>

                               <div class="col-lg-7">
                                 <input type="password" class="forom-control" name="password" value="" placeholder="entrer votre mot de pass"> <br><br>
                               </div>

                               <div class="col-lg-7">
                                 <label for="">selectionner votre statut</label>
                                 <select name="statut" >
                                   <option value=""></option>
                                   <option value="Patient">Patient</option>
                                   <option value="Secretaire">Secretaire</option>
                                   <option value="Infirmier">Infirmier</option>
                                   <option value="Medecin">Medecin</option>
                                 </select>
                                </div>
                           </div>

                           <div class="col-lg-7">
                             <input type="submit" class="btn btn-primary btn-sm" name="enregistrer" value="ENREGISTRER">
                           </div>
                         </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
              </div>
            </div>
          </div>

<!--a ne pas oublier de le mettre surtout -->
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
       <script src="{{ asset('js/app.js') }}"></script>
       <!-- a ne pas oublier de le mettre surtout -->
    </body>
</html>
