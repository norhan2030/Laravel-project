

{{-- <!DOCTYPE html>
<html lang="en">
<head>
@include('links')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
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
      <td>{{$prod->name}}</td>
      <td><a href="{{route('update',$prod->id)}}">update</a></td>
      <form action="{{route('dashbord',$prod->id)}}" method='post'>
       @method('DELETE')
       @csrf
       <button>delete</button>
       </form>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html> --}}

{{-- @foreach ($posts as $post)
       {{$post->id}}<br>
       {{$post->title}}<br>
       {{$post->body}}<br>
       <a href="{{route('posts.edit',$post->id)}}">edit</a>
       <form action="{{route('posts.destroy',$post->id)}}" method='post'>
       @method('DELETE')
       @csrf
       <button>delete</button>
       </form>
   @endforeach --}}