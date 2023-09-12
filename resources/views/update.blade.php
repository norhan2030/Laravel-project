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
        <form action="{{route('dashbord.update',$prods->id)}}" method="post">
            @csrf
            @method('PUT')
            {{-- @method('PUT') --}}
            <div class="form-row">
                <div class="form-group">
                    <label for="inputAddress">name</label>
                    <input type="text" class="form-control" name='name' value="{{$prods->name}}" id="inputAddress" placeholder="">
                </div>
                
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="inputAddress">price</label>
                    <input type="text" class="form-control" name='price' value="{{$prods->price}}"  id="inputAddress" placeholder="">
                </div>
                
            </div>
        
            {{-- <div class="form-group">
                <label for="exampleFormControlFile1">image</label>
                <input type="file" class="form-control-file" value="{{$prods->image}}" id="exampleFormControlFile1">
            </div> --}}

            <div class="form-row">
                <div class="form-group">
                    <label for="inputAddress">image</label>
                    <input type="text" class="form-control" name='image' value="{{$prods->image}}" id="inputAddress" placeholder="">
                </div>
                
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="inputAddress">made in</label>
                    <input type="text" class="form-control" name='made_in'  value="{{$prods->made_in}}" id="inputAddress" placeholder="">
                </div>
                
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="inputAddress">count</label>
                    <input type="text" class="form-control" name="count"  value="{{$prods->count}}" id="inputAddress" placeholder="">
                </div>
                
            </div>
            {{-- <div class="form-row">
                <div class="form-group">
                    <label for="inputAddress">offer</label>
                    <input type="text" class="form-control" name="offer"  value="{{$prods->offer}}" id="inputAddress" placeholder="">
                </div>
                
            </div> --}}
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
                    <option selected>{{$prods->categories_id}}</option>
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