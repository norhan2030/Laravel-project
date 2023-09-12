
<!DOCTYPE html>
<html lang="en">
    <head>
    @include('links')
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <title>Document</title>
    </head>
    <body>
                          
      {{-- #5fc9bf --}}
        <nav class="navbar navbar-expand-lg nave " style="background-color: #5fc9bf !important;" >
            <div class="container-fluid nave">
              <a class="navbar-brand text-warning nave" href="#"><img class="logo" src="../assets/imgs/co.jpg" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 naav">
                
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('allproducts')}}">Home</a>
                  </li>
                  @foreach ($cats as $cat)
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('cats.prods',$cat->id)}}">{{$cat->name}}</a>
                  </li>
                  @endforeach

                  <nav class="navbar bg-body-tertiary searchh">
                    <div class="container-fluid">
                      <form class="d-flex" role="search" method="get" action="{{route('allproducts')}}">
                      @csrf
                       @method('POST')
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        {{-- <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search"> --}}
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
                    <li>
                    <a class="nav-link" href="{{route('cards.prods')}}">cart</a>
                    
                    </li>
                   <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                              
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            
                        @else
                            <li class="nav-item dropdown">
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}  
                                </a>
                                @if(Auth::user()->type != 'user')
                                 <a href="{{url('dashbord')}}">Dashboard</a> 
                                                  
                                @endif
                                <div class="dropdown-menu dropdown-menu-end show" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
      

                  {{-- <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-outline-danger bttttn">logout</button>
                    
                  </div> --}}
                </ul>
              </div>
            </div>
          </nav>




          {{-- <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action active">
              Cras justo odio
            </button>
            <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
            <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
            <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
            <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
          </div> --}}

        
        <div class="container">
            <div class="text-center m-5">
                <h3>Products</h3>
            </div>
            <div class="row">
            @foreach ($prods as $prod)
            <div class="col-lg-4 p-1">
              <div class="card" style="width: 18rem;">
                  <img src="../assets/imgs/{{$prod->image}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$prod->name}}</h5>
                          <p class="card-text">prise : {{$prod->price}}</p>
                          <a href="{{route('add.catd',$prod->id)}}" class="btn btn-primary" style="background-color: #5fc9bf !important;">Go To Card</a>
                  </div>
                </div>
          </div>
          @endforeach
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
                                <button type="submit" class="btn btn-primary bg-primary">submit</button>
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="col">
                        <img src="../assets/imgs//1.jfif" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
                </div>
                
            
        </div>
        <footer>
          <span>create by nour</span>
          <a href=""> <img class="immmg" src="../assets/imgs//31VQjtZZqlL.png" alt=""></a>
          <a href=""><img class="immmg" src="../assets/imgs//images.jfif" alt=""></a>
          <a href=""><img class="immmg" src="../assets/imgs//brand-download-img-1.jpg.twimg.1920.jpg" alt=""></a>
        </footer>
        


        <script src="js/jquery-3.6.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        
    </body>
</html>