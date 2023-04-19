<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website with php & MySQL</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet"  type="text/css" href="style.css">
</head>
<body>

<!-- navbar -->
<div class="conrainer-fluid">

<!-- first child -->
<nav class="navbar navbar-expand-lg navbar-light bg-info p-0">
  <div class="container-fluid">
   <img src="./images/cart2.png" alt="" class="logo" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:</a>
      </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
 
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
</ul>
</nav>

<!-- third child -->
<div class="bg-light">
 <h3 class="text-center">Hidden Store</h3>
 <p class="text-center">Communication is at the heart of e-coomerce and community</p>
</div>
 



<!-- fourth child -->

<div class="row">
 
  <div class="col-md-10" >
   <!-- show product -->
   <div class="row">
    <div class="col-md-4 mb-2">
        <div class="card">
      <img src="./images/dairy3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-info">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>
      </div>
    </div>
        </div>
    <div class="col-md-4 mb-2">
        <div class="card">
      <img src="./images/apple.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-info">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>
      </div>
    </div>
        </div>
  <div class="col-md-4 mb-2">
        <div class="card">
      <img src="./images/capsicum.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-info">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>
    </div>
        </div>
  </div>
  <div class="col-md-4 mb-2">
        <div class="card">
      <img src="./images/milk1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-info">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>
      </div>
    </div>
        </div>
  <div class="col-md-4 mb-2">
        <div class="card">
      <img src="./images/milk1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-info">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>      
    </div>
        </div>
  </div>
  <div class="col-md-4 mb-2">
        <div class="card">
      <img src="./images/milk1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-info">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>      
    </div>
        </div></div>
  <div class="col-md-4 mb-2">
        <div class="card">
      <img src="./images/milk1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-info">Add to cart</a>
        <a href="#" class="btn btn-secondary">View More</a>      
    </div>
        </div>
</div>


</div>
</div>

<!-- ************************** sidnav ******************** -->

 
<div class="col-md-2 bg-secondary p-0">
 <!-- sidnav -->
 <ul class="navbar-nav me-auto text-center">
  <!-- brands to be displayed -->
        <li class="nav-item bg-info">
          <a class="nav-link active text-light" aria-current="page" href="/"><h4>Delivery Brands</h4></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="/">Brand1</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="/">Brand2</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="/">Brand3</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="/">Brand4</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="/">Brand5</a>
        </li>
</ul>
<ul class="navbar-nav me-auto text-center">
  <!-- categories to be displayed -->
        <li class="nav-item bg-info">
          <a class="nav-link active text-light" aria-current="page" href="/"><h4>Categorie1</h4></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="/">Categorie2</a>
        </li>  
         <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="/">Categorie3</a>
        </li> 
          <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="/">Categorie4</a>
        </li>
           <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="/">Categorie5</a>
        </li>
</ul>






  </div>
 
 





<!-- last child -->
</div>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>