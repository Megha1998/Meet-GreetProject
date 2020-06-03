<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="#" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{{asset('vegetable.png')}}}">
    <title>Greet & Eat | @yield('title')</title>

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap-dropdownhover.min.css')}}">
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" type="text/css"  media="all" />
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css"  media="all" />
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet" type="text/css"  media="all" />
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
</head>
<body>

@include('components.header')


@yield('content')




{{--@include('components.footer')--}}

<!-- Modal -->
<div class="modal login fade" id="login" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="p-5">
                <form>
                    <div id="signin">
                        <header class="text-center mb-5">
                            <h2 class="h4 mb-0">Login to Your Account</h2>
                        </header>
                        <div class="mb-3">
                            <div class=" input-group form">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text form-icon">
                                    <span class="fa fa-user form-icon-inner"></span>
                                    </span>
                                </div>
                                <input class="form-control " name="email"  placeholder="Email" type="email">
                            </div>
                        </div>
                        <div class=" mb-3">
                            <div class=" input-group form">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text form-icon">
                                    <span class="fa fa-lock form-icon-inner"></span>
                                    </span>
                                </div>
                                <input class="form-control " name="password"  placeholder="Password" type="password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-block btn-primary">Login to your account</button>
                        </div>
                        <div class="text-center mb-3">
                            <p class="text-muted small mb-0">
                                Dont have an account yet?
                                <a href="#"   >Create an account
                                </a>
                            </p>
                            <p class="text-muted small">
                                Forgot your username or password?
                                <a href="#">  Recover account
                                </a>
                            </p>
                        </div>
                        <div class="text-center divider-holder my-3">
                            <span class="divider">OR</span>
                        </div>
                        <div class="row mx-gutters-2 mb-4">
                            <div class="col-sm-6 mb-2 mb-sm-0">
                                <button type="button" class="btn  btn-block btn-facebook">
                                    <span class="fab fa-facebook-f mr-2"></span>
                                    Login with Facebook
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-block btn-twitter">
                                    <span class="fab fa-twitter mr-2"></span>
                                    Login with Twitter
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End modal -->
<!--To the top-->
<a class="scroll-to-top scroll" href="{{asset('#wrapper')}}"><span class=" fa fa-angle-up top-icon "></span></a>
<!-- End to the top -->


<!--Javascript-->
<script src="{{asset('js/jquery-1.12.4.min.js')}}" ></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-dropdownhover.min.js')}}"></script>
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/smooth-scroll.js')}}" ></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}" ></script>
<script src="{{asset('js/jquery.countdown.min.js')}}" ></script>
<script src="{{asset('js/typed.min.js')}}"></script>
<script src="{{asset('js/typeanimation.js')}}"></script>
<script src="{{asset('js/placeholders.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>



<!-- Google analytics -->
<!-- End google analytics -->
</body>
</html>
