<style>
    @import url("https://i0.wp.com/www.transports-et-demenagement.com/wp-content/uploads/2021/09/taxi-e1596741663857.jpg");
   
.button {background-color: #4CAF50;}
* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
#header {
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
    url("landing-img.jpg");
  background-position: center;
  background-size: cover;
  width: 100%;
  height: 100vh;
  position: relative;
}
:root {
  --main-color: #e6b30e;
}
.act,
.navbar ul li a:hover {
  color: var(--main-color) !important;
  border-bottom: 1px solid var(--main-color);
}
.theme-text {
  color: var(--main-color) !important;
}

svg.wave {
  position: absolute;
  bottom: -70px;
}
.middle {
  display: flex;
  justify-content: start;
  align-items: center;
  height: 80vh;
  width: 70%;
}
.middle h1 {
  font-size: 70px;
}
</style>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style2.css">
    <title>Bienvenue</title>
</head>

<body>

    <section id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e6b30e" class="bi bi-house"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd"
                            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg> <a class="navbar-brand theme-text" href="#">
                        &nbsp;Taxibokko</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link act" aria-current="page" href="#">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Nos services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">A propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- navbar code -->
            <div class="middle">

                <h4 class="text-white display-3 fw-bold">Nous vous aidons à trouver <span class="theme-text">un taxi en toute sécurité
                        </span>.</h4>              
            </div>
            <a href="/login">
                <button>Connectez vous ici</button>
            </a> 
            
        </div>
        
  </body>  
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
      


</body>

</html>