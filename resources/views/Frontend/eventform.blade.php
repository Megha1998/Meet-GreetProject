@extends('base')
@section('title','About Us')
@section('content')

    <section class="hero" >
        <div class="background-img gradient-overlay ">
            <img src="{{asset('assets/img/global-slider.png')}}" alt="" >
        </div>
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-10 col-lg-10">
                    <h1 class=" mb-3 text-white">About Us</h1>
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
    <section class="bg-azure spacer-double-sm">
        <!--Container-->
        <h2>Text input fields</h2>

        <form action="{{route('event')}}" method="post">
            @csrf
            <label for="fname">Event:</label><br>
            <input type="text" id="fname" name="event"><br>
            <label for="lname">Destination:</label><br>
            <input type="text" id="lname" name="eventsdd">

            <button  type="submit" class="btn btn-primary transition-3d-hover">We Wanna Join</button>

        </form>

        <p>Note that the form itself is not visible.</p>

        <p>Also note that the default width of text input fields is 20 characters.</p>
    </section>

@endsection
