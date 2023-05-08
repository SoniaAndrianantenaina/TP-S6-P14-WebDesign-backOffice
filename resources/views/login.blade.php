<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{secure_asset('assets_login/css/login.css')}}">
    <link rel="stylesheet" href="{{secure_asset('assets_login/css/bootstrap.min.css')}}">
    <title>Login</title>
</head>

<body style="background-color: #2e3141;">
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #fbfbfb;"></i>
                        <span class="h1 fw-bold mb-0 text-white">Welcome</span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form method="GET" action="{{route('verifyLogin')}}" style="width: 23rem;">

                            <h3 class="fw-normal mb-3 pb-3 text-white" style="letter-spacing: 1px;">Log in</h3>
                            <input type="hidden" name="page" value="login">

                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" placeholder="sonia@gmail.com" value="sonia@gmail.com" />
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example28" class="form-control form-control-lg" name="mdp" placeholder="sonia" value="sonia"/>
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-info w-100  text-white">LOGIN</button>
                            </div>

                            @if ($errors->has('email'))
                            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                            @endif
                            
                            <p style="color: white;">Don't have an account? <a href="#!" class="link-info">Register here</a></p>

                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="https://cdn.futura-sciences.com/sources/images/IA-technologie.jpeg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>
</body>

</html>