<!--Wrapper-->
<div class="wrapper">
    <div class="modal login fade" id="search" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="p-5">
                    <form class="d-flex">
                        <div class=" input-group form mr-2">
                            <div class="input-group-prepend ">
                              <span class="input-group-text form-icon">
                              <span class="fa fa-search form-icon-inner"></span>
                              </span>
                            </div>
                            <input class="form-control" name="search" placeholder="Search" type="text">
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Go
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Header-->
    <header class="header">
        <div class="container ">
            <div class="floating-nav mt-lg-5 ">
                <nav class="navbar navbar-expand-lg header-navbar ">
                    <div class="navbar-brand">
                        <a class=" navbar-brand navbar-logo" href="{{route('/')}}">
                            <img class="mb-0" src="{{asset('/')}}" alt="logo">
                        </a>
                    </div>
                    <button class="navbar-toggler btn-navbar-toggler" type="button" data-toggle="collapse" data-target=".nav-menu" aria-expanded="true" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="nav-menu collapse navbar-collapse navbar-collapse justify-content-end py-0 ">
                        <ul class=" navbar-nav  header-navbar-nav">
                            <li><a class=" nav-link" href="{{route('/')}}">Home</a></li>

{{--                            <li><a class=" nav-link" href="{{route('/')}}">About Us</a></li>--}}

                            <li class="dropdown">
                                <a href="javascript:;" class="nav-link dropdown-toggle"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Services<span class="dropdown-arrow ml-2">
                              <span class="fa fa-angle-down dropdown-arrow-inner"></span>
                              </span>
                                </a>
                                <ul class="dropdown-menu">

                                    @foreach($res as $vacancy )
                                        <li><a class="dropdown-item" href="{{route('resroom',$vacancy->id)}}">{{$vacancy->resname}}</a></li>
                                    @endforeach
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">All Services</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">For Your Dinner</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">For Your Lunch</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">For Your Date</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">For Your Birthday</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">For Your Wedding</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">Chill Outs</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">Search Engine Optimization</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">Digital Branding</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">Start Up Consulting</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">Identity Designing</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">Facebook Ads</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">Google Ads</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('/')}}">Online Reputation</a></li>--}}

                                </ul>
                            </li>
                            <li><a class="nav-link" href="{{route('vacancies')}}">Careers</a></li>
                            <li><a class="nav-link" href="{{route('eventshow')}}">Events</a></li>
                            <li><a class="nav-link" href="{{route('/')}}">Contact Us</a></li>
{{--                            <li><a class="nav-link" href="{{route('/')}}">Blog</a></li>--}}
{{--                            <li class="btn-nav mr-lg-3"><a class="btn btn-primary btn-sm " href="https://crm.tecions.com/authentication/login" target="_blank"><span class="fa fa-user-circle mr-1"></span>Signin</a></li>--}}
                            {{--<li>--}}
                            {{--<a class="btn btn-xs btn-icon btn-text-dark pb-3 pb-lg-0 pl-0 pt-0" href="#search" data-toggle="modal" data-target="#search">--}}
                            {{--<span class="fa fa-search "></span>--}}
                            {{--</a>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--End header-->


</div>
<!-- End wrapper-->
