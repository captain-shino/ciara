<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/header.template.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
    
    <title>CiaRa Handmade</title>
</head>

<body class="container">
    <header>
        <div class="">
            <h1>CiaRa Handmade</h1>
        </div>
        <div class="container">
            <img src="./assets/images/banner.jpg" alt="" width="100%" >
        </div>
    </header>

    <div class="">
        <ul>
            <li><a href="./index.php?action=list_cat">Catégories</a></li>
            <li><a href="#news">Produits</a></li>
            <li><a href="#news">News</a></li>
            <li class="dropdown2">
              <a href="" class="dropbtn">Connexion</a>
              <div class="dropdown2-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
              </div>
            </li>
          </ul>
    </div>

    <div class="main">
      <?=$contenu?>
  </div>
</body>
</html>