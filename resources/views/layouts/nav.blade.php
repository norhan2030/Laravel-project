<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <title>@yield('title')</title>
    </head>
    <body>

      
      
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand text-warning" href="#"><img class="logo" src="image/co.jpg" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 naav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">HTML</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">PHP</a>
                  </li>
                  <nav class="navbar bg-body-tertiary searchh">
                    <div class="container-fluid">
                      <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
                  <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-outline-success bttttn">logout</button>
                    
                  </div>
                </ul>
              </div>
            </div>
          </nav>



        
      
         <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action active">
              Cras justo odio
            </button>
            <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
            <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
            <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
            <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
          </div>

        
        <div class="container">
            <div class="text-center m-5">
                <h3>Products</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 p-1">
                    <div class="card" style="width: 18rem;">
                        <img src="image/OIP_5.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">item 1</h5>
                          <p class="card-text">prise : 100</p>
                          <a href="#" class="btn btn-warning">Go To Card</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 p-1">
                    <div class="card" style="width: 18rem;">
                        <img src="image/OIP.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">item 2</h5>
                          <p class="card-text">prise : 200</p>
                          <a href="#" class="btn btn-warning">Go To Card</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 p-1">
                    <div class="card" style="width: 18rem;">
                        <img src="image/11.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">item 3</h5>
                          <p class="card-text">prise : 300</p>
                          <a href="#" class="btn btn-warning">Go To Card</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 p-1">
                    <div class="card" style="width: 18rem;">
                        <img src="image/R.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">item 4</h5>
                          <p class="card-text">prise : 400</p>
                          <a href="#" class="btn btn-warning">Go To Card</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 p-1">
                    <div class="card" style="width: 18rem;">
                        <img src="image/55.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">item 5</h5>
                          <p class="card-text">prise : 500</p>
                          <a href="#" class="btn btn-warning">Go To Card</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 p-1">
                    <div class="card" style="width: 18rem;">
                        <img src="image/66.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">item 6</h5>
                          <p class="card-text">prise : 600</p>
                          <a href="#" class="btn btn-warning">Go To Card</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 p-1">
                  <div class="card" style="width: 18rem;">
                      <img src="image/33.jfif" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">item 7</h5>
                          <p class="card-text">prise : 700</p>
                          <a href="#" class="btn btn-warning">Go To Card</a>
                      </div>
                    </div>
              </div>
              <div class="col-lg-4 p-1">
                <div class="card" style="width: 18rem;">
                    <img src="image/OIP_6.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">item 8</h5>
                          <p class="card-text">prise : 800</p>
                          <a href="#" class="btn btn-warning">Go To Card</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 p-1">
              <div class="card" style="width: 18rem;">
                  <img src="image/1YsmLRDgbam244xajuIBeAlwxqsThHD402BtsbsG.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">item 9</h5>
                          <p class="card-text">prise : 900</p>
                          <a href="#" class="btn btn-warning">Go To Card</a>
                  </div>
                </div>
          </div>
            </div>
        </div>
        
        <div class="container p-5">   
            <div class="card mb-3" >
                <div class="row g-0">
                    <div class="col">
                    <div class="card-body">
                        <h5 class="card-title">contact us</h5>
                        <form action="">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label"> textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary bg-warning">submit</button>
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="col">
                        <img src="image/1.jfif" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
                </div>
                
            
        </div>
        <footer>
          <span>create by nour</span>
          <a href=""> <img class="immmg" src="image/31VQjtZZqlL.png" alt=""></a>
          <a href=""><img class="immmg" src="image/images.jfif" alt=""></a>
          <a href=""><img class="immmg" src="image/brand-download-img-1.jpg.twimg.1920.jpg" alt=""></a>
        </footer>
        

    </body>
</html>