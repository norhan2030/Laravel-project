<!DOCTYPE html>
<html lang="en">
<head>
@include('links')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
            <a href="{{url('home')}}" class="btn justify-content-center" style="background-color: rgb(141, 141, 185);">home</a>

            <div class="text-center m-5">
              <h3>Products</h3>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Count</th>
                  {{-- <th scope="col">Offer</th> --}}
                  <th scope="col"></th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
              @foreach ($prods as $prod)
                <tr>
                  <th scope="row">{{$prod->id}}</th>
                  <td>{{$prod->name}}</td>
                  <td>{{$prod->price}}</td>
                  <td>{{$prod->count}}</td>
                  {{-- <td>{{$prod->offer}}</td> --}}
                  <td><a href="{{route('dashbord.edit',$prod->id)}} " class="upd">update</a></td>
                  
                  <td>
                    <form action="{{route('dashbord.delete',$prod->id)}}" method='post'>
                    {{-- {{route('dashbord',$prod->id)}} --}}
                    @method('DELETE')
                    @csrf
                    <button class="del">delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <br>
            <br>
            <a href="{{route('dashbord.insert')}}" class="btn justify-content-center" style="background-color: rgb(141, 141, 185);">insert product</a>
          
    </div>

    <div class="text-center m-5">
      <h3>Categories</h3>
    </div>

    <div class="container">
    
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
                <th scope="col"></th>

              </tr>
            </thead>
            <tbody>
            @foreach ($cats as $cat)
              <tr>
                <th scope="row">{{$cat->id}}</th>
                <td>{{$cat->name}}</td>
                <td><a href="{{route('dashbord.editCategory',$cat->id)}}" class="upd">update</a></td>
                
                <td>
                  <form action="{{route('dashbord.deleteCategory',$cat->id)}}" method='post'>
                  {{-- {{route('dashbord',$prod->id)}} --}}
                  @method('DELETE')
                  @csrf
                  <button class="del">delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
            <br>
            <br>
              <a href="{{route('dashbord.insertCategory')}}" class="btn justify-content-center" style="background-color: rgb(141, 141, 185);">insert category</a>
          
    </div>
    <div class="text-center m-5">
      <h3>Supplers</h3>
    </div>

    <div class="container">
     
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Supple</th>
                <th scope="col"></th>
                <th scope="col"></th>

              </tr>
            </thead>
            <tbody>
            @foreach ($supps as $supp)
              <tr>
                <th scope="row">{{$supp->id}}</th>
                <td>{{$supp->name}}</td>
                <td>{{$supp->categories_id}}</td>
                

                <td><a href="{{route('dashbord.editSuppler',$supp->id)}}" class="upd">update</a></td>
                
                <td>
                  <form action="{{route('dashbord.deleteSuppler',$supp->id)}}" method='post'>
                  {{-- {{route('dashbord',$prod->id)}} --}}
                  @method('DELETE')
                  @csrf
                  <button class="del">delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <br>
          <br>
          <a href="{{route('dashbord.insertSuppler')}}" class="btn justify-content-center" style="background-color: rgb(141, 141, 185);">insert Supplers</a>

    </div>
</body>
</html>

