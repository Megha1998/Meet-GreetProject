@extends('base')
@section('title','About Us')
@section('content')
    <!--Hero section-->
    <section class="hero" >
        <div class="background-img gradient-overlay ">
            <img src="{{asset('assets/img/global-slider.png')}}" alt="" >
        </div>
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-10 col-lg-10">
                    <h1 class=" mb-3 text-white"> {{$addroom->resname}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0  justify-content-center">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>
    <!--End hero section-->
    <!--Section-->
{{--    <section class="bg-azure spacer-double-sm">--}}
{{--        <!--Container-->--}}
{{--        <div class="container">--}}
{{--            <!--Row-->--}}
{{--            <div class="row justify-content-sm-center align-items-sm-center">--}}
{{--                <div class="col-lg-4 d-lg-flex mb-4 mb-lg-0 text-lg-left text-center">--}}
{{--                    <div class="card bg-transparent border-0">--}}
{{--                        <div class="card-body p-0">--}}
{{--                            <span class="h1 mb-0 display-3  text-white">1000+</span>--}}

{{--                            <h1>--}}
{{--                                {{$addvaancies->designation}}--}}
{{--                            </h1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 text-center mb-4 mb-lg-0">--}}
{{--                    <div class="card bg-transparent border-0">--}}
{{--                        <div class="card-body p-0">--}}
{{--                            <img class="max-width-lg" src="{{asset('assets/svg/network.svg')}}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 d-lg-flex text-lg-left text-center">--}}
{{--                    <div class="card bg-transparent border-0">--}}
{{--                        <div class="card-body p-0">--}}
{{--                            <p class="text-white lead mb-0">Memories created by fulfilling  digital desires.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--End row-->--}}
{{--        </div>--}}
        <!--End container-->
{{--    </section>--}}
    <!--End section-->
    <!--Section-->
{{--    <section class="spacer-double-lg">--}}
{{--        <!--Container-->--}}
{{--        <div class="container">--}}
{{--            <!--Row-->--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col">--}}
{{--                    <div class="mb-5 pb-5 text-center">--}}
{{--                        <h2 class="h3">Digital solutions for your business</h2>--}}
{{--                        <p class="w-md-75 mb-0 mx-auto">Build your online presence & drive excellence in your business.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--End row-->--}}
{{--        </div>--}}
        <!--End container-->
        <!--Container-->
{{--        <div class="container">--}}
{{--            <!--Row-->--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-xl-9 col-lg-10">--}}
{{--                    <div class="mb-5 pb-5">--}}
{{--                        <div class="video-cover rounded shadow-lg">--}}
{{--                            <div class="background-img">--}}
{{--                                <img alt="" src="{{asset('assets/img/brief.jpg')}}">--}}
{{--                            </div>--}}
{{--                            <a class="play-but text-center" href="javascript:;">--}}
{{--                           <span class="play-icon play-icon-md">--}}
{{--                           <span class="fa fa-play play-icon-inner"></span>--}}
{{--                           </span>--}}
{{--                            </a>--}}
{{--                            <div class="embed-responsive embed-responsive-16by9">--}}
{{--                                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/PBb6a3Ub16c?rel=0&amp;showinfo=0&amp;autoplay=1" allowfullscreen="" allow="autoplay; encrypted-media"></iframe>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--End row-->--}}
{{--        </div>--}}
        <!--End container-->
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="mb-5 pb-4">
                        <p class="mb-0 text-justify">
                            {{$addroom->restext}} </p>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
        </div>
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row justify-content-center text-center">
                <div class="col">
                    <a class="btn  btn-facebook btn-wide mb-2 mb-md-0 mr-md-2" href="javascript:;"><span class="fab fa-facebook-f mr-2"></span>
                        Follow on Facebook</a>
                    <a class="btn  btn-twitter btn-wide mb-2 mb-md-0 " href="javascript:;"><span class="fab fa-facebook-f mr-2"></span>
                        Follow on Twitter</a>
                </div>
            </div>
            <!--End row-->
        </div>


    {{--    </section>--}}
    <!--End section-->
{{--        <div class="container">--}}
{{--            <!--Section-->--}}
{{--            <section class="spacer-double-lg" style="padding-bottom: 100px;">--}}
{{--                <!--Container-->--}}
{{--                <div class="container">--}}
{{--                    <!--Row-->--}}
{{--                    <div class="row justify-content-center">--}}
{{--                        <div class="col">--}}
{{--                            <div class="mb-5 pb-5 text-center">--}}
{{--                                <h2 class="h3">Our Workflow Process</h2>--}}
{{--                                <p class="w-md-75 mb-0 mx-auto">We don't just help you to be different, we make you memorable.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--End row-->--}}
{{--                </div>--}}
{{--                <!--End container-->--}}
{{--                <!--Container-->--}}
{{--                <div class="container">--}}
{{--                    <!--Row-->--}}
{{--                    --}}{{--            <div class="row justify-content-around align-items-center">--}}
{{--                    --}}{{--                <div class="col-md-5 col-7 mb-5 mb-lg-0 ">--}}
{{--                    --}}{{--                    <div class="tab-content">--}}
{{--                    --}}{{--                        <div class="tab-pane fade active show" id="tab-one" role="tabpanel">--}}
{{--                    --}}{{--                            <img class="img-fluid " src="{{asset('assets/img/brainstorming.png')}}" alt="">--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                        <div class="tab-pane fade" id="tab-two" role="tabpanel" >--}}
{{--                    --}}{{--                            <img src="{{asset('assets/svg/workp.svg')}}" alt="" class="img-fluid">--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                        <div class="tab-pane fade" id="tab-three" role="tabpanel">--}}
{{--                    --}}{{--                            <img class="img-fluid " src="{{asset('assets/svg/deliver.svg')}}" alt="">--}}
{{--                    --}}{{--                        </div>--}}
{{--                    --}}{{--                    </div>--}}
{{--                    --}}{{--                </div>--}}
{{--                    <div class="col-lg-5 col-md-8">--}}
{{--                        <ul class="nav nav-cards" role="tablist">--}}
{{--                            <li>--}}
{{--                                <a class="card active show border-0 mb-4 text-blue-alt" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">--}}
{{--                                    <div class="card-body p-4">--}}
{{--                                        <div class="media align-items-center">--}}
{{--                                            <div class="media-body">--}}
{{--                                                <h3 class="h6">Brainstorming</h3>--}}
{{--                                                <p class="text-justify"> We generate strategies and techniques as per the analysis of your need & assure to provide you what to want.--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="card border-0 mb-4 text-blue-alt" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">--}}
{{--                                    <div class="card-body p-4">--}}
{{--                                        <div class="media align-items-center">--}}
{{--                                            <div class="media-body">--}}
{{--                                                <h3 class="h6">Work process</h3>--}}
{{--                                                <p class="text-justify">--}}
{{--                                                    We design and develop every project with the same passion and determination using the best technologies so that you get the best you can get.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="card border-0 text-blue-alt" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">--}}
{{--                                    <div class="card-body p-4">--}}
{{--                                        <div class="media align-items-center">--}}
{{--                                            <div class="media-body">--}}
{{--                                                <h3 class="h6">Deliver and deploy</h3>--}}
{{--                                                <p class="text-justify">--}}
{{--                                                    Continuous delivery is a series of practices designed to ensure that code can be rapidly and safely deployed to production by delivering.--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--End row-->--}}
{{--        </div>--}}
{{--        <!--End container-->--}}
{{--    </section>--}}
{{--    <!--End section-->--}}
{{--    <!--Section-->--}}
{{--    <section class=" spacer-double-lg">--}}
{{--        <div class="background-img gradient-overlay gradient-overlay-azure-light">--}}
{{--            <img src="{{asset('assets/img/abc.jpg')}}" alt="">--}}
{{--        </div>--}}
{{--        <!--Container-->--}}
{{--        <div class="container">--}}
{{--            <!--Row-->--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-lg-5" style="padding-bottom: 100px; ">--}}
{{--                     <span class="h2 text-white d-block">--}}

{{--                     Start your Business today with Greet & Meet.--}}
{{--                     </span>--}}
{{--                    <p class="lead text-white text-justify">--}}
{{--                        We offer various services focused on reating an all together as per your business--}}
{{--                        requirement within your budget.--}}
{{--                    </p>--}}
{{--                    <a class="d-block mt-5 font-weight-500 font-size-15 text-white" href="javascript:;">--}}
{{--                        Learn More--}}
{{--                        <span class="fa fa-angle-right font-size-14 ml-2"></span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--End row-->--}}
{{--        </div>--}}
{{--        <!--End container-->--}}
{{--    </section>--}}
{{--    <!--End section-->--}}
{{--    <!--Section-->--}}
{{--    <section class="spacer-one-top-lg">--}}
{{--        <!--Section-->--}}
{{--        <section class="spacer-double-lg bg-gray">--}}
{{--            <!--Container-->--}}
{{--            <div class="container ">--}}
{{--                <!--Row-->--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col">--}}
{{--                        <div class="mb-5 pb-5 text-center">--}}
{{--                            <h2 class="h3">Get in touch with us</h2>--}}
{{--                            <p class="w-md-50 mb-0 mx-auto">For more info about our project, please feel free to get in touch with us.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--End row-->--}}
{{--            </div>--}}
{{--            <!--End container-->--}}
{{--            <!--Container-->--}}
{{--            <div class="container ">--}}
{{--                <!--Row-->--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-lg-9">--}}
{{--                        <form action="{{route('/')}}" method="post">--}}


{{--                            @csrf--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-sm-6 mb-5">--}}
{{--                                    <label class="form-label">--}}
{{--                                        Your name--}}
{{--                                        <span class="text-danger">*</span>--}}
{{--                                    </label>--}}
{{--                                    <div class=" input-group form">--}}
{{--                                        <input class="form-control " type="text" name="fname"  placeholder="Your full name" >--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 mb-5">--}}
{{--                                    <label class="form-label">--}}
{{--                                        Company Name--}}
{{--                                        <span class="text-danger">*</span>--}}
{{--                                    </label>--}}
{{--                                    <div class=" input-group form">--}}
{{--                                        <input class="form-control " type="text" name="company" placeholder="Company Name" >--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-sm-6 mb-5">--}}
{{--                                    <label class="form-label">--}}
{{--                                        Your email--}}
{{--                                        <span class="text-danger">*</span>--}}
{{--                                    </label>--}}
{{--                                    <div class=" input-group form">--}}
{{--                                        <input class="form-control " type="email" name="email" placeholder="Your email" >--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 mb-5">--}}
{{--                                    <label class="form-label">--}}
{{--                                        Your subject--}}
{{--                                    </label>--}}
{{--                                    <div class=" input-group form">--}}
{{--                                        <input class="form-control " type="text" name="subject"  placeholder="Subject" >--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 mb-5">--}}
{{--                                    <label class="form-label">--}}
{{--                                        Your phone--}}
{{--                                    </label>--}}
{{--                                    <div class="input-group form">--}}
{{--                                        <input class="form-control " type="text" name="phone"  placeholder="Phone" >--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <label class="form-label">--}}
{{--                                        Your budget--}}
{{--                                    </label>--}}
{{--                                    <div class=" input-group form mb-5">--}}
{{--                                        <select class="custom-select" name="budget">--}}
{{--                                            <option selected="">500 - 2.000 $</option>--}}
{{--                                            <option value="budget">3000 - 6.000 $</option>--}}
{{--                                            <option value="budget">6000 - 10.000 $</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <label class="form-label">--}}
{{--                                        Your message--}}
{{--                                        <span class="text-danger">*</span>--}}
{{--                                    </label>--}}
{{--                                    <div class=" input-group form mb-5">--}}
{{--                                    <textarea class="form-control " rows="6"--}}
{{--                                              name="message"  placeholder="Type your message" ></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}


{{--                                    <div class="text-center">   <button  type="submit"    class="btn btn-primary transition-3d-hover">Start your project</button>--}}


{{--                                        <p class="small text-muted mb-0">Response time can be up to 24hrs.</p>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                        </form>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--End row-->--}}
{{--            </div>--}}
{{--            <!--End container-->--}}
{{--        </section>--}}

{{--        <!--Container-->--}}
{{--        <div class="container">--}}
{{--            <!--Row-->--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="w-sm-75  w-100 top-1">--}}
{{--                    <img src="{{asset('assets/img/about-last.png')}}" alt="" width="715" height="476">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--End row-->--}}
{{--        </div>--}}
{{--        <!--End container-->--}}
{{--    </section>--}}
    <!--End section-->
@endsection
