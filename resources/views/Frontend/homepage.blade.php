@extends('base')
@section('title','Welcome')
@section('content')
    <!--Hero section-->
    <section class="hero" >
        <div class="background-img gradient-overlay-dark">
            <img src="{{asset('assets/img/111.jpg')}}" alt="" >
        </div>
        <div class="container height-70vh">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-10 col-lg-10">
                    <h1 class="display-4 mb-3 text-white text-left">Come with us to explore the journey</h1>
                    <p class="lead mb-5 text-white text-left">I am going ,What about You?<br></p>
                    <a class="play-but text-center mt-3 popup-youtube" href="https://www.youtube.com/watch?v=zJTqefIt8hQ">
                     <span class="play-icon play-icon-md">
                     <span class="fa fa-play play-icon-inner"></span>
                     </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End hero section-->
    <section  class="spacer-double-lg">
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row justify-content-center">
                <div class="col ">
                    <div class="mb-5  text-center">
                        <h1>Start Your Choice Through Us </h1>
                        <p class="w-md-75 mb-0 mx-auto">Meet And Greet, is the first and only website which talks about the food places and information related to it, present across the city.
                        </p>
                    </div>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row justify-content-center text-center">
                <div class="col">
                    <a href="{{route('join')}}" class="btn btn-primary btn-wide mb-2 mb-md-0 mr-md-2" href="javascript:;">Register to Us</a>
                    <a href="{{route('/')}}" class="btn btn-blue-night btn-wide mb-2 mb-md-0" href="javascript:;">Learn More</a>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row">
                <div class="col">
                    <div class="mb-5 pb-5 mt-5 pt-5">
                        <hr>
                    </div>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row">
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="text-center px-3">
                        <img class="max-width-md mb-3" src="{{asset('assets/svg/project-management.svg')}}" alt="">
                        <h3 class="h5">Professional Design</h3>
                        <p class="mb-0">Unique Designs made to perfectly suit your brands vision.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="text-center px-3">
                        <img class="max-width-md mb-3" src="{{asset('assets/svg/diagram.svg')}}" alt="">
                        <h3 class="h5">Modern Workflow</h3>
                        <p class="mb-0 ">Ensured robust services with modern technologies and work process.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center px-3">
                        <img class="max-width-md mb-3" src="{{asset('assets/svg/analysis.svg')}}" alt="">
                        <h3 class="h5 ">Real-Time Results</h3>
                        <p class="mb-0  ">We value your time, so we provide the best results in the given time.</p>
                    </div>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->

    </section>
    <!--End section-->
    <!--Section-->
    <section class="spacer-double-lg bg-gray">
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-md-6 order-md-1 mb-5 mb-md-0">
                    <h2>Discover</h2>
                    <p class="text-justify">The development process starts with understanding your business, needs, objectives, & goal. We creatively plan and discover a site-map that perfectly suits your vision and expectations.</p>
                    <a class="btn btn-sm btn-primary " href="{{route('/')}}">
                        Learn More
                        <span class="fa fa-angle-right font-size-14 ml-2"></span>
                    </a>
                </div>
                <div class="col-lg-7 col-md-6 order-md-2">
                    <div class="text-left text-lg-right">
                        <img class="img-fluid w-lg-75 w-100" src="{{asset('assets/img/discover.png')}}" alt="">
                    </div>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>
    <!--End section-->
    <!--Section-->
    <section class="spacer-double-lg ">
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-md-6 order-md-2 mb-5 mb-md-0">
                    <h2>Design</h2>
                    <p class="text-justify">After discovering your vision, we work on the creative design of the site, which will reflect your business ethics and aims. We also make sure that the design aligns with the expectations of your user so that they see what they want.</p>
                    <a class="btn btn-sm btn-primary " href="{{route('/')}} ">
                        Learn More
                        <span class="fa fa-angle-right font-size-14 ml-2"></span>
                    </a>
                </div>
                <div class="col-lg-7 col-md-6 order-md-1 ">
                    <div class="text-left">
                        <img class="img-fluid w-lg-75 w-100" src="{{asset('assets/img/design.png')}}" alt="">
                    </div>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>
    <!--End section-->
    <!--Section-->
    <section class="spacer-double-lg bg-gray">
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-md-6 order-md-1 mb-5 mb-md-0">
                    <h2 >Develop</h2>
                    <p Class="text-justify">The process of development starts when you finalize the design. The transformation of the design into a fully functional site begins with implementing the key features, functionalities, & structure.</p>
                    <a class="btn btn-sm btn-primary " href="{{route('/')}}">
                        Learn More
                        <span class="fa fa-angle-right font-size-14 ml-2"></span>
                    </a>
                </div>
                <div class="col-lg-7 col-md-6 order-md-2 ">
                    <div class="text-left text-lg-right">
                        <img class="img-fluid w-lg-75 w-100" src="{{asset('assets/img/develop.png')}}" alt="">
                    </div>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>
    <!--End section-->
    <!--Section-->
    <section class="spacer-double-lg ">
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-md-6 order-md-2 mb-5 mb-md-0">
                    <h2>Deliver</h2>
                    <p class="text-justify">The last step is to test the customization, functionalities, contents and other factors of the site. After the proper quality analysis, we send you the site's preview link for your approval and introduce it to the world.</p>
                    <a class="btn btn-sm btn-primary " href="{{route('/')}}">
                        Learn More
                        <span class="fa fa-angle-right font-size-14 ml-2"></span>
                    </a>
                </div>
                <div class="col-lg-7 col-md-6 order-md-1 ">
                    <div class="text-left">
                        <img class="img-fluid w-lg-75 w-100" src="{{asset('assets/img/deliver.png')}}" alt="">
                    </div>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>
    <!--End section-->

    <!--Section-->
    <section class=" spacer-double-sm">
        <div class="background-img gradient-overlay gradient-overlay-azure" >
            <img src="{{asset('assets/img/7.jpg')}}" alt="">
        </div>
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row text-center text-sm-left">
                <div class="col-xl-12">
                    <div class="d-sm-flex justify-content-sm-center align-items-sm-center">
                        <div class="mb-4 mb-sm-0 mr-sm-5">
                            <h2 class="text-white mb-0">Ready to start a project ?</h2>
                        </div>
                        <a href="{{route('/')}}">  <button type="button" class="btn btn-outline-light btn-large">Get Started</button></a>
                    </div>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>
    <!--End section-->
    <!--Section-->
    <section class="spacer-double-lg"  style="padding-bottom: 100px;">
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row justify-content-center">
                <div class="col">
                    <div class="mb-5 pb-5 text-center">
                        <h2 class="h3">Digital solutions for your business</h2>
                        <p class="w-md-75 mb-0 mx-auto">Build your online presence & drive excellence in your business</p>
                    </div>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="media pr-lg-4">
                        <img class="max-width-sm  mr-4" src="{{asset('assets/svg/mobile-app.svg')}}" alt="">
                        <div class="media-body">
                            <h4 class="h6">Mobile Apps</h4>
                            <p class="mb-0 text-justify">Mobile apps are software created to function on mobile device.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="media pl-lg-4">
                        <img class="max-width-sm  mr-4" src="{{asset('assets/svg/speed.svg')}}" alt="">
                        <div class="media-body">
                            <h4 class="h6">Optimization</h4>
                            <p class="mb-0 text-justify">Optimization is the process of placing your site on the top of SERPs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="media pr-lg-4">
                        <img class="max-width-sm  mr-4" src="{{asset('assets/svg/value.svg')}}" alt="">
                        <div class="media-body">
                            <h4 class="h6">Marketing</h4>
                            <p class="mb-0 text-justify">Marketing is all about developing a relationship between customer and brand. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="media pl-lg-4">
                        <img class="max-width-sm  mr-4" src="{{asset('assets/svg/web-design.svg')}}" alt="">
                        <div class="media-body">
                            <h4 class="h6">Web Design</h4>
                            <p class="mb-0 text-justify">Web design is the visual appearance of your website on the internet. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="media pr-lg-4">
                        <img class="max-width-sm  mr-4" src="{{asset('assets/svg/data.svg')}}" alt="">
                        <div class="media-body">
                            <h4 class="h6">Web Development</h4>
                            <p class="mb-0 text-justify">Web development is the process of making the site function as per your requirement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="media pl-lg-4">
                        <img class="max-width-sm  mr-4" src="{{asset('assets/svg/email.svg')}}" alt="">
                        <div class="media-body">
                            <h4 class="h6">Emailing</h4>
                            <p class="mb-0 text-justify">Emailing is a way of being connected with potential and existing costumers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>
    <!--End section-->

    <!--Section-->
    <section class="spacer-double-xxs text-center bg-azure">
        <!--Container-->
        <div class="container">
            <!--row-->
            <div class="row">
                <div class="col">
                    <span class="mr-2 text-white"></span>
                    <a href="javascript:;" class="text-white font-size-15 font-weight-500"></a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--End section-->
    <!--Section-->
    <section class=" spacer-lg">
        <div class="background-img" style="height:100%;width:100%;">
            <img src="{{asset('assets/img/global-blog-slider.png')}}" alt="">
        </div>
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row text-center">
                <div class="col-xl-12">
                    <a class="play-but text-center popup-youtube" href="https://www.youtube.com/watch?v=Gc2en3nHxA4">
                        <span class="play-icon play-icon-lg">
                        <span class="fa fa-play play-icon-inner"></span>
                        </span>
                    </a>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>
    <!--End section-->


    <!--Section-->
    <section class="spacer-double-xxs text-center bg-azure">
        <!--Container-->
        <div class="container">
            <!--row-->
            <div class="row">
                <div class="col">
                    <span class="mr-2 text-white"></span>
                    <a href="javascript:;" class="text-white font-size-15 font-weight-500"></a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--End section-->





    <!--Container-->
    <div class="container " style="padding-top: 100px;">
        <!--Row-->
        <div class="row justify-content-center">
            <div class="col-lg-9">
                {{--                    <form action="{{route('')}}" method="POST">--}}


                {{--                        @csrf--}}

                {{--                        <div class=" mb-5">--}}
                {{--                            <label class="form-label">--}}
                {{--                                Your Name--}}
                {{--                                <span class="text-danger">*</span>--}}
                {{--                            </label>--}}
                {{--                            <input type="text" class="form-control" name="name" placeholder="Your full name" >--}}
                {{--                        </div>--}}

                {{--                        <div class=" mb-5">--}}
                {{--                            <label class="form-label">--}}
                {{--                                Your last name--}}
                {{--                                <span class="text-danger">*</span>--}}
                {{--                            </label>--}}
                {{--                            <input type="text" class="form-control" name="lname" placeholder="Your full name" >--}}
                {{--                        </div>--}}
                {{--                        <div class=" mb-5">--}}
                {{--                            <label class="form-label">--}}
                {{--                                Phone--}}
                {{--                                <span class="text-danger">*</span>--}}
                {{--                            </label>--}}
                {{--                            <input type="text" class="form-control" name="phone" placeholder="Your number" >--}}
                {{--                        </div>--}}

                {{--                        <div class=" mb-5">--}}
                {{--                            <label class="form-label">--}}
                {{--                                Your email address--}}
                {{--                                <span class="text-danger">*</span>--}}
                {{--                            </label>--}}
                {{--                            <input type="email" class="form-control" name="email" placeholder="Your email" >--}}
                {{--                        </div>--}}

                {{--                        <div class=" mb-5">--}}
                {{--                            <label class="form-label">--}}
                {{--                                Project timeline--}}
                {{--                                <span class="text-danger">*</span>--}}
                {{--                            </label>--}}
                {{--                            <input type="text" class="form-control" name="timeline" placeholder=" Your timeline">--}}
                {{--                        </div>--}}
                {{--                        <div class=" mb-5">--}}
                {{--                            <label class="form-label">Your company</label>--}}
                {{--                            <input type="text" class="form-control" name="company" placeholder="Your company name" >--}}
                {{--                        </div>--}}
                {{--                        <div class=" mb-5">--}}
                {{--                            <label class="form-label">Your website</label>--}}
                {{--                            <input type="text" class="form-control" name="web" placeholder="Your website url" >--}}
                {{--                        </div>--}}
                {{--                        <div class=" mb-5">--}}
                {{--                            <label class="form-label">Subject</label>--}}
                {{--                            <input type="text" class="form-control" name="web" placeholder="Your Subject" >--}}
                {{--                        </div>--}}

                {{--                        <div class=" mb-5" id="the-basics">--}}
                {{--                            <label class="form-label">Your country</label>--}}
                {{--                            <input type="text" name="country" class="form-control typeahead dropdown" placeholder="Country" >--}}
                {{--                        </div>--}}
                {{--                        <div class="mb-5">--}}
                {{--                            <label class="form-label">--}}
                {{--                                What is your budget--}}
                {{--                                <span class="text-danger">*</span>--}}
                {{--                            </label>--}}
                {{--                            <div class="js-focus-state">--}}
                {{--                                <select class="custom-select" name="budget">--}}
                {{--                                    <option selected="">500 - 2.000 $</option>--}}
                {{--                                    <option value="budget">3000 - 6.000 $</option>--}}
                {{--                                    <option value="budget">6000 - 10.000 $</option>--}}
                {{--                                </select>--}}
                {{--                            </div>--}}
                {{--                            <div class=" mb-5">--}}
                {{--                                <label class="form-label">--}}
                {{--                                    Describe your project--}}
                {{--                                    <span class="text-danger">*</span>--}}
                {{--                                </label>--}}
                {{--                                <textarea class="form-control" rows="4" name="description" placeholder="Hi, i have a project ..." ></textarea>--}}
                {{--                            </div>--}}

                {{--                <div class="mb-5">--}}
                {{--                    <label class="form-label">--}}
                {{--                        What is your budget--}}
                {{--                        <span class="text-danger">*</span>--}}
                {{--                    </label>--}}
                {{--                    <div class="js-focus-state">--}}
                {{--                        <select class="custom-select" name="budget">--}}
                {{--                            <option selected="">500 - 2.000 $</option>--}}
                {{--                            <option value="budget">3000 - 6.000 $</option>--}}
                {{--                            <option value="budget">6000 - 10.000 $</option>--}}
                {{--                        </select>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <form method="POST" action="{{route('/')}}">

                    @csrf
                    <div class=" mb-5">
                        <label class="form-label">
                            Your Full name
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name="name" placeholder="Your full name" >
                    </div>

                    {{--                        <div class=" mb-5">--}}
                    {{--                            <label class="form-label">--}}
                    {{--                                Your last name--}}
                    {{--                                <span class="text-danger">*</span>--}}
                    {{--                            </label>--}}
                    {{--                            <input type="text" class="form-control" name="lname" placeholder="Your full name" >--}}
                    {{--                        </div>--}}
                    <div class=" mb-5">
                        <label class="form-label">
                            Phone
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name="phone" placeholder="Your number" >
                    </div>

                    <div class=" mb-5">
                        <label class="form-label">
                            Your email address
                            <span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control" name="email" placeholder="Your email" >
                    </div>

{{--                    <div class=" mb-5">--}}
{{--                        <label class="form-label">--}}
{{--                            Project timeline--}}
{{--                            <span class="text-danger">*</span>--}}
{{--                        </label>--}}
{{--                        <input type="text" class="form-control" name="timeline" placeholder=" Your timeline">--}}
{{--                    </div>--}}
                    <div class=" mb-5">
                        <label class="form-label">Your company</label>
                        <input type="text" class="form-control" name="company" placeholder="Your company name" >
                    </div>
                    <div class=" mb-5">
                        <label class="form-label">Your website</label>
                        <input type="text" class="form-control" name="web" placeholder="Your website url" >
                    </div>
                    <div class=" mb-5">
                        <label class="form-label">Your subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Your subject " >
                    </div>

{{--                    <div class=" mb-5" id="the-basics">--}}
{{--                        <label class="form-label">Your country</label>--}}
{{--                        <input type="text" name="country" class="form-control typeahead dropdown" placeholder="Country" >--}}
{{--                    </div>--}}


                    <div class=" mb-5">
                        <label class="form-label">
                            Describe your Food Buisness
                            <span class="text-danger">*</span>
                        </label>
                        <textarea class="form-control" rows="4" name="description" placeholder="Hi, i have a project ..." ></textarea>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">
                            What is your budget
                            <span class="text-danger">*</span>
                        </label>
                        <div class="js-focus-state">
                            <select class="custom-select" name="budget">
                                <option value="500 - 2.000 $" selected="">Rs.500 - Rs.2000 </option>
                                <option value="3000 - 6.000 $">Rs.3000 - Rs.6000 </option>
                                <option value="6000 - 10.000 $">Rs.6000 - Rs.10000 </option>
                            </select>
                        </div>
                    </div>

                    <div class="text-center">

                        <div class="mb-2">


                            <button  type="submit" class="btn btn-primary transition-3d-hover">We Wanna Join</button>

                        </div>

                        <p class="small text-muted">Response time can be up to 24hrs. </p>
                    </div>
                </form>
            </div>
        </div>
        <!--end of row-->
        {{--</div>--}}
        {{--                        <div class="text-center">--}}

        {{--                            <div class="mb-2">--}}


        {{--                                <button  type="submit"   class="btn btn-primary transition-3d-hover">Start your project</button>--}}

        {{--                            </div>--}}

        {{--                            <p class="small text-muted">Response time can be up to 24hrs. </p>--}}
        {{--                        </div>--}}
        {{--                    </form>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--    <!--end of row-->--}}
    </div>
    <!--end of container-->
    <!--Container-->
    <div class="container">
        <!--row-->
        <div class="row justify-content-center">
            <div class="w-lg-75 w-100  top-1">
                <img src="{{asset('assets/svg/house.svg')}}" alt="">
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
    </section>




@endsection
