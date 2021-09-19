<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
  <style type="text/css">

body {
  background-image:url('https://www.hotelarts.ca/wp-content/uploads/2021/06/pool1-scaled-e1624884950428.jpg');
  background-position:center;
  background-size:cover;
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>


    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">


                    @if(session()->has('message'))
                <span class="alert alert-danger">{{session()->get('message')}}</span>
                     @endif


                        <form action="{{route('guest.do.login')}}" method="post">

                          @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Username:</label><br>
                                <input name="email" type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control"placeholder="Password" >
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
			
      <div class="text-dark">Don't have any account? <a href="{{route('user.signup')}}">Signup</a>
    </div>
                               
                            </div>
                            
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
