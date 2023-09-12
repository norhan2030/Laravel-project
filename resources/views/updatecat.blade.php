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
        <form action="{{route('dashbord.updateCategory',$cats->id)}}" method="post">
            @csrf
            @method('PUT')
            {{-- @method('PUT') --}}
            <div class="form-row">
                <div class="form-group">
                    <label for="inputAddress">name</label>
                    <input type="text" class="form-control" name='name' value="{{$cats->name}}" id="inputAddress" placeholder="">
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary">update</button>
       </form>
    </div>
</body>
</html>