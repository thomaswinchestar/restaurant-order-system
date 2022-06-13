<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sarkaung</title>
    <!-- CSS only -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Bootswatch  -->
    <link rel="stylesheet" href="https://bootswatch.com/5/zephyr/bootstrap.min.css">
    <style>
        .splash{
            position: relative;
            padding: 12em 0em 15em;
            background-image: url("../dist/img/food-banner.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            text-align: center;
        }
        .splash h1{
            color: #fff;
        }
        .navbar-transparent{
            background: none!important;
            position: absolute;
            z-index: 1080;
            top: 0;
            right: 0;
            left: 0;
        }
        #home .navbar{
            background: #375ee3;
            background: linear-gradient(145deg, #375ee3 0%, #6543e0 80%);
            transition: box-shadow 200ms ease-in;
}


    </style>
</head>
<body id="home">
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark navbar-transparent">
            <div class="container">
              <a class="navbar-brand" href="#">Sarkaung</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Home
                      <span class="visually-hidden">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>

        <div class="splash">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>The Best Restaurant in Yangon</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
        </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(window).scroll(function () {
            var top = $(document).scrollTop();
            if (top > 50) {
                $('.wrapper > .navbar').removeClass('navbar-transparent');
                } else {
                $('.wrapper > .navbar').addClass('navbar-transparent');
                }
  })
    </script>
</body>
</html>
