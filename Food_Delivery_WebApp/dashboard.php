<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <style>
    .navbar-nav {
      margin-left: auto;
    }
    .btn-danger{
      margin: auto;
      width: 350px;
      height: 75px;
    }
  </style>
  <title>Document</title>
</head>

<body id="home">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

<div class="container-fluid">
  <a class="navbar-brand" href="#">TemPizza</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#feat">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
          Menu
        </a>
        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-macos mx-0 border-0 shadow" style="width: 220px;">
          <li><a class="dropdown-item " href="#">Pizza</a></li>
          <li><a class="dropdown-item" href="#">Garlic Bread</a></li>
          <li><a class="dropdown-item" href="#">Burger</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Beverages</a></li>
        </ul>
      </li>
         
        </ul>
      </div>
    </div>
  </nav>
  <!-- ---------------------------------------------------crousel------------------------------------------------------------------------------------------------ -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/p1.jpg" style="width: 100%; height:700px;" class="d-block w-100" alt="error">
         <div class="carousel-caption d-none d-md-block">
          
          <a href="payscript.php"><button class="btn btn-danger btn-lg">Order Now</button></a>
         </div>     
      </div>
      <div class="carousel-item">
        <img src="Images/p2.jpg" style="width: 100%; height:700px;;" class="d-block w-100" alt="error">
        <div class="carousel-caption d-none d-md-block">
          
           <a href="payscript.php"><button class="btn btn-danger btn-lg">Order Now</button></a>
         </div>
      </div>
      <div class="carousel-item">
        <img src="Images/p3.jpg" style="width: 100%; height:700px;" class="d-block w-100" alt="error">
        <div class="carousel-caption d-none d-md-block">
          
           <a href="payscript.php"><button class="btn btn-danger btn-lg">Order Now</button></a>
         </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- ------------------------------------------------------------------containers---------------------------------------------------------------- -->
  <div class="album py-5 bg-dark text-dark" id="feat">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"
              style="background-image: url('home-box2.jpg'); background-position: center;  background-size: cover;"></svg>
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            </svg>

            <div class="card-body">
              <p class="card-text">
              <pre>
  <strong> Only Pizza Made From
  Fresh Dough For Fresh Pizza</strong>
                </pre>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">TemPizza</small>
              </div>
            </div>
          </div>
          <!-- -------------------------------------------------------------videos--------------------------------------------------------------------------- -->
          <div class="container mt-5 "><iframe width="800" height="400" src="https://www.youtube.com/embed/mj9TaE3r4_g"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <div class="container mt-5 "><iframe width="800" height="400" src="https://www.youtube.com/embed/IwJphW4IPtI"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"
              style="background-image: url('home-box3.jpg'); background-position: center;  background-size: cover;"></svg>
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            </svg>

            <div class="card-body">
              <p class="card-text">
              <pre>
  <strong>Always great to see cheese on pasta.
  Are you ready for spaghetti?</strong>
                </pre>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">TemPizza</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
              role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"
              style="background-image: url('home-box4.jpg'); background-position: center;  background-size: cover;"></svg>
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            </svg>

            <div class="card-body">
              <p class="card-text">
              <pre>
  <strong>pound on the glass, screaming my head off. 
  Everyone ignores me except for some Capitol 
  who appears behind me and offers me a beverage.</strong>
                </pre>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">TemPizza</small>
              </div>
            </div>
          </div>



          <!-- ---------------------------------------------------space-------------------------------------------------------------  -->
          <div class="col my-3 mt-3 ">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"
                style="background-image: url('home-box5.jpg'); background-position: center;  background-size: cover;"></svg>
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">TemPizza</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col my-3 mt-3">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"
                style="background-image: url('hqdefault.jpg'); background-position: center;  background-size: cover;"></svg>
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
              </svg>

              <div class="card-body">
                <p class="card-text">
                  <pre>
  <strong>burger without cheese is like a hug without a squeeze.
  now THAT is a tasty burger.</strong>
                  </pre>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">TemPizza</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col my-3 mt-3">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"
                style="background-image: url('story-front.jpg'); background-position: center;  background-size: cover;"></svg>
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">TemPizza</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ------------------------------------------footer--------------------------------------- -->
    <div class="container" id="contact">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">?? 2021 Company, Inc</p>

        <a href="/"
          class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="https://www.instagram.com/_.nishant_.sharma_/"
              class="nav-link px-2 text-muted">Instagram</a></li>
          <li class="nav-item"><a href="http://api.whatsapp.com/send?phone=+919013216904"
              class="nav-link px-2 text-muted">Whatsapp</a></li>
          <li class="nav-item"><a href="https://www.facebook.com/profile.php?id=100024810953295"
              class="nav-link px-2 text-muted">Facebook</a></li>
          <li class="nav-item"><a href="https://twitter.com/getbootstrap" class="nav-link px-2 text-muted">Twitter</a>
          </li>

        </ul>
      </footer>
    </div>




</body>

</html>