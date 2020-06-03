
@extends('base')
@section('title','About Us')
@section('content')
    <!--Hero section-->
    <section class="hero bg-azure bg-pattern" >
        <!--Container-->
        <div class="container height-30vh">
            <!--Row-->
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-10 col-lg-10">
                    <h1 class="mb-3 text-white">Careers</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0  justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Careers</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>
    <!--End hero section-->
    <section id="content" role="main" class="content-wrapper">
        <div class="col-lg-12" id="life_wrap3"> </div>
        <section class="our-team">
            <div class="container">

                <div>&nbsp;</div> <div>&nbsp;</div> <div>&nbsp;</div> <div>&nbsp;</div><div>&nbsp;</div> <div>&nbsp;</div>

                <header class="wrapper">
                    <h1 style="font-size:40px;text-align:center;">Want to <span class="crowd-identified">Join Us</span></h1>
                </header>
                <div>&nbsp;</div>
                <div class="span7">
                    <div class="widget stacked widget-table action-table">
                        <div class="widget-content">
                            <div class="table-responsive">
                                <?php $number = 1 ?>
                                <table class="table table-striped table-bordered table-hover" onchange="getSelectValue();">

                                    <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th id="sel" name="jobname">Job Designation</th>
                                        <th>Vacancies</th>
                                        <th class="td-actions"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($vacancies as $vacancy )
                                        <tr>
                                            <td>{{$number}}</td>
                                            <td>{{$vacancy->designation}}</td>
                                            <td>{{$vacancy->vacancies}}</td>
                                            <td class="td-actions"><a href="" target="_blank" class="btn btn-small btn-primary" type="button" id="">Apply Now<a href=""></a>
                                                </a></td>
                                        </tr>
                                        <?php $number++ ?>
                                    @endforeach
                                    {{--                                    <tr><td>2</td>--}}
                                    {{--                                        <td>Asst sales manager</td>--}}
                                    {{--                                        <td>1</td>--}}
                                    {{--                                        <td class="td-actions"><a href="{{route('pages.apply')}}" target="_blank" class="btn btn-small btn-primary " id="">Apply Now</a></td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                    <tr><td>3</td>--}}
                                    {{--                                        <td>Sales Executive</td>--}}
                                    {{--                                        <td>2</td>--}}
                                    {{--                                        <td class="td-actions"><a href="{{route('pages.apply')}}" target="_blank" class="btn btn-small btn-primary" id="">Apply Now</a></td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                    <tr><td>4</td>--}}
                                    {{--                                        <td>Senior Web Designer </td>--}}
                                    {{--                                        <td>1</td>--}}

                                    {{--                                        <td class="td-actions"><a href="{{route('pages.apply')}}" target="_blank" class="btn btn-small btn-primary" id="">Apply Now</a></td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                    <tr><td>5</td>--}}
                                    {{--                                        <td>Junior Web Designer </td>--}}
                                    {{--                                        <td>2</td>--}}
                                    {{--                                        <td class="td-actions"><a href="{{route('pages.apply')}}" target="_blank" class="btn btn-small btn-primary" id="">Apply Now</a></td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                    <tr><td>6</td>--}}
                                    {{--                                        <td>Senior Web Developer </td>--}}
                                    {{--                                        <td>1</td>--}}
                                    {{--                                        <td class="td-actions"><a href="{{route('pages.apply')}}" target="_blank" class="btn btn-small btn-primary" id="">Apply Now</a></td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                    <tr><td>7</td>--}}
                                    {{--                                        <td>Junior Web Developer </td>--}}
                                    {{--                                        <td>3</td>--}}
                                    {{--                                        <td class="td-actions"><a href="{{route('pages.apply')}}" target="_blank" class="btn btn-small btn-primary" id="">Apply Now</a></td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                    <tr><td>8</td>--}}
                                    {{--                                        <td>Junior Web Cum Graphic Designer</td>--}}
                                    {{--                                        <td>2</td>--}}
                                    {{--                                        <td class="td-actions"><a href="{{route('pages.apply')}}" target="_blank" class="btn btn-small btn-primary" id="j">Apply Now</a></td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                    <tr><td>9</td>--}}
                                    {{--                                        <td>Senior PPC Cum SEO Specialist</td>--}}
                                    {{--                                        <td>1</td>--}}
                                    {{--                                        <td class="td-actions"><a href="{{route('pages.apply')}}" target="_blank" class="btn btn-small btn-primary" id="">Apply Now</a></td>--}}
                                    {{--                                    </tr>--}}

                                    </tbody>
                                </table></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("button").click(function(){
                    $("#box").load("text");
                });
            });
        </script>
    </section>
@endsection

