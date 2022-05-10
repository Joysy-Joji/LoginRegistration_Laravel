<html lang="en">
<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style href="{{ url('css/bootstrap.css') }}" rel="stylesheet"></style>
</head>
<body class="img js-fullheight" >
<section class="ftco-section">
    <div class="container">

        @if(!empty($status = session('status')))
            <span style="color: green;">{{ $status }}</span>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center"><b>Have an account?</b></h3>
                    <form class="signin-form" id="form1" name="form1" method="POST" action="{{ route('web.login')  }}">
                        @csrf
                        <div class="form-group">
                            <input type="email"  class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary">Remember Me
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">LOGIN</button>
                        </div>
                        <p class="w-100 text-center">&mdash; Or Sign up With &mdash;</p>
                        <div class="form-group">


                            {{--                            <a href="{{ route('web.register.show') }}" class="form-control btn btn-primary submit px-3">Sign up</a>--}}

                            <a href="{{ route('web.register.show') }}" style="color: black; background: deepskyblue; text-align: center; font-size: x-large; font-family: 'Bookman Old Style' " >Sign Up</a>
                        </div>




                        <div class="form-group d-md-flex">

                            {{--                            <div class="w-50 text-md-right">--}}
                            {{--                                <a href="#" style="color: #fff">Forgot Password</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </form>
                    {{--                    <p class="w-100 text-center">&mdash; Or Sign up With &mdash;</p>--}}
                    <div class="form-group">
                        <!--	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>-->
                        {{--                        <a href="/Storeregistration" class="form-control btn btn-primary submit px-3">Sign up</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

