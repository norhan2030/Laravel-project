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
      <a href="{{url('home')}}" class="btn btn-primary">home</a>

      <div class="text-center m-5">
        <h3>Products in Card</h3>
      </div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID Product</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">avalible count</th>
            <th scope="col">Count</th>
            <th scope="col">sum</th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
        @foreach ($cart as $carts)
          <tr>
            <th scope="row">{{$carts->id}}</th>
            <td>{{$carts->name}}</td>
            <td>{{$carts->price}}</td>
            <td>{{$carts->count}}</td>
            <td> <a href="{{route('del.one',$carts->id)}}">-</a> {{$carts->quantity}} <a href="{{route('add.one',$carts->id)}}">+</a></td>
            {{-- <td><form action="{{route('upa.count')}}" method="post">
            @csrf
            <input value="{{$carts->quantity}}" name="quantity" style="width:40px;">
            <input type="hidden" name="cart_id" value="{{ $carts['id'] }}">
              <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-down-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M9.636 2.5a.5.5 0 0 0-.5-.5H2.5A1.5 1.5 0 0 0 1 3.5v10A1.5 1.5 0 0 0 2.5 15h10a1.5 1.5 0 0 0 1.5-1.5V6.864a.5.5 0 0 0-1 0V13.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                  <path fill-rule="evenodd" d="M5 10.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1H6.707l8.147-8.146a.5.5 0 0 0-.708-.708L6 9.293V5.5a.5.5 0 0 0-1 0v5z"/>
                </svg></button>

            </form></td> --}}
            <td>{{$carts->quantity * $carts->price}}</td>
            <td><a href="{{route('del.item',$carts->id)}}">X</a></td>
          </tr>
          @endforeach
        </tbody>
        <tr>
        <td>total</td>
        <td>
            {{$gettotal}}
        $</td>
        </tr>
     </table>
     <br>
     <br>
     <div class="row justify-content-end">
        <div class="col-md-9">
          <a href="{{route('card.Payment')}}" class="btn btn-primary">purchase</a>
        </div>
      </div>
    </div>

    

    

   
</body>
</html>

