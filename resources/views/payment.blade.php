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
                <div class="payment">
                    <form action="{{route('payment')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="inputAddress">name</label>
                                <input type="text" class="form-control" name='name' id="inputAddress" placeholder="">
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="inputAddress">address</label>
                                <input type="text" class="form-control" name='address' id="inputAddress" placeholder="">
                            </div>
                            
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="inputAddress">phone number</label>
                                <input type="text" class="form-control" name='phone' id="inputAddress" placeholder="">
                            </div>
                            
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">card id</label>
                            <input type="text" class="form-control-file" name="cart_id" id="exampleFormControlFile1" value="{{$user}}">
                        </div>
                        <br>
                        
                    
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary">submit</button>
                    </form>
               </div>
            </div>
        </div>
   </div>
</body>
</html>