@extends('base')
@section('content')
    <section class="hero" >
        <div class="background-img gradient-overlay-dark">
            <img src="{{asset('assets/img/456.png')}}" alt="" >
        </div>
        <div class="container height-70vh">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-10 col-lg-10">
                    <h1 class="display-4 mb-3 text-white text-left">Start Registering <span class="typed font-weight-600"></span></h1>
                    <p class="lead mb-5 text-white text-left"><br></p>
{{--                    <a class="play-but text-center mt-3 popup-youtube" href="https://www.youtube.com/watch?v=Gc2en3nHxA4">--}}
{{--                     <span class="play-icon play-icon-md">--}}
{{--                     <span class="fa fa-play play-icon-inner"></span>--}}
{{--                     </span>--}}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Hero section-->
    <div class="container " style="padding-top: 100px;">
        <!--Row-->
        <div class="row justify-content-center">
            <div class="col-lg-9">
                {{--                    <form action="{{route('addprojectdata')}}" method="POST">--}}


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

                    <div class=" mb-5">
                        <label class="form-label">
                            Project timeline
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name="timeline" placeholder=" Your timeline">
                    </div>
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

                    <div class=" mb-5" id="the-basics">
                        <label class="form-label">Your country</label>
                        <input type="text" name="country" class="form-control typeahead dropdown" placeholder="Country" >
                    </div>


                    <div class=" mb-5">
                        <label class="form-label">
                            Describe your project
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
                                <option value="500 - 2.000 $" selected="">500 - 2.000 $</option>
                                <option value="3000 - 6.000 $">3000 - 6.000 $</option>
                                <option value="6000 - 10.000 $">6000 - 10.000 $</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-center">

                        <div class="mb-2">


                            <button  type="submit" class="btn btn-primary transition-3d-hover">Start your project</button>

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
