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
        <form action="{{route('dashbord.updateSuppler',$supps->id)}}" method="post">
            @csrf
            @method('PUT')
            {{-- @method('PUT') --}}
            <div class="form-row">
                <div class="form-group">
                    <label for="inputAddress">name</label>
                    <input type="text" class="form-control" name='name' value="{{$supps->name}}" id="inputAddress" placeholder="">
                </div>
                
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">category</label>
                <select id="inputState" class="form-control" name="categories_id">
                    @foreach ($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    
                    @endforeach
                </select>
            </div>
            {{-- <div class="form-group col-md-4">
                <label for="inputState">category</label>
                <select id="inputState" class="form-control"  value="" name="categories_id">
                    <option selected>{{$supps->categories_id}}</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div> --}}
            <button type="submit" class="btn btn-primary">update</button>
       </form>
    </div>
</body>
</html>