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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('dashbord.store')}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputAddress">name</label>
                            <input type="text" class="form-control" name='name' id="inputAddress" placeholder="">
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputAddress">price</label>
                            <input type="text" class="form-control" name='price' id="inputAddress" placeholder="">
                        </div>
                        
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">image</label>
                        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputAddress">made in</label>
                            <input type="text" class="form-control" name='made_in' id="inputAddress" placeholder="">
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputAddress">count</label>
                            <input type="text" class="form-control" name="count" id="inputAddress" placeholder="">
                        </div>
                        
                    </div>
                    {{-- <div class="form-row">
                        <div class="form-group">
                            <label for="inputAddress">offer</label>
                            <input type="text" class="form-control" name="offer" id="inputAddress" placeholder="">
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

                    <br>
                    <br>
                    <button type="submit" class="btn" style="background-color: rgb(141, 141, 185);">insert</button>
                </form>
            </div>
        </div>
   </div>
</body>
</html>