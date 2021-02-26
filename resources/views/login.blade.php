@extends('master')
@section('content')

 <div class="container custom-login">
    <div class="row">

      <div class="col-sm-4 offset-sm-4"> 
      <h2 class="text-center">Admin Login</h2>
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1"><p class="fw-bold">Email address</p></label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div> <br>
            <div class="form-group">
              <label for="exampleInputPassword1"><p class="fw-bold">Password</p></label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div><br>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

    </div>  
 </div>

@endsection