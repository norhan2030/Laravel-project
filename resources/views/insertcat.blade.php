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
                <form action="{{route('dashbord.storeCategory')}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputAddress">name</label>
                            <input type="text" class="form-control" name='name' id="inputAddress" placeholder="">
                        </div>
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