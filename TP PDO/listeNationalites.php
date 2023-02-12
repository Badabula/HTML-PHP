<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Jumbotron example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>


  <body>
    
  
    <?php include "header.php";
      include "connexionPDO.php";
      include "fontawesome.php";
      
      $req=$monPdo->prepare("select * from nationalite");
      $req->setFetchMode(PDO::FETCH_OBJ);
      $req->execute();
      $lesNationalites=$req->fetchAll();
      
      
    ?>

    <div class="container mt-5">
      <div class="row pt-3">
        <div class="col-9"><h1 class= "h1">Liste des nationalités</h1></div> 
        <div class="col-3"><a href="" class="btn btn-success">créer une nationalité</a></div>
      </div>  
      
        <table class="table table-hover">
          <thead>
              <tr class="d-flex">
              <th scope="col" class="col-md-2">Numéro</th>
              <th scope="col" class="col-md-8">libelle</th>
              <th scope="col" class="col-md-2">Actions</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach($lesNationalites as $nationalite)
            {
              echo "<tr class='d-flex'>";
              echo"<td class='col-md-2'>$nationalite->num</td>";
              echo"<td class='col-md-8'>$nationalite->libelle</td>";
              echo"<td class='col-md-2'>
              <a href=' ' class='btn btn-primary'><i class='fas fa-pen'></i></a>
              <a href=' ' class='btn btn-danger'><i class='fas fa-trash'></i></a>
              </td>";
              echo"</tr>";
            }
            ?>
          </tbody>
        </table>
      
          
    

      

          <footer class="pt-3 mt-4 text-muted border-top">
          &copy; 2022
          </footer>
    
    </div>


    
  </body>
</html>
