<!DOCTYPE html>
<html lang="en">
<head>
    <title>UNITED COMMUNITY BANK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="welcome to umited community bank" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">   <!-- font-awesome icons -->
    <!-- //Custom Theme files -->
    <!-- js -->
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- //web-fonts -->
</head>
<body>

<div class="headerw3-agile">
    <div class="header-w3mdl"><!-- header-two -->
        <div class="container">
            <div class="agileits-logo navbar-left">
                <h1>UNITED COMMUNITY BANK</h1>
            </div>
            <div class="agileits-hdright nav navbar-nav">
                <div class="header-w3top"><!-- header-top -->
                    <ul class="w3l-nav-top">

                        <li><a href="mailto:support@u-communityb.com"><i class="fa fa-envelope-o"></i><span>support@u-communityb.com</span></a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="header-w3top">
                    <a href="#">Login</a>
                    <button class="btn btn-primary">Sign Up</button>
                </div>
                <div class="agile_social_banner">
                    <ul class="agileits_social_list">
                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>

<div class="banner inner-banner">
    <div class="header-nav"><!-- header-three -->
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu
                </button>
            </div>
            <!-- top-nav -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}" @if(Request::url() === url('/')) class="active" @else class="scroll" @endif>Home</a></li>
                    <li><a href="{{route('about')}}" @if(Request::url() === url('/about')) class="active" @else class="scroll" @endif>About</a></li>
                    <li><a href="{{route('services')}}" @if(Request::url() === url('/services')) class="active" @else class="scroll" @endif>services</a></li>
                    <li><a href="{{route('gallery')}}" @if(Request::url() === url('/gallery')) class="active" @else class="scroll" @endif>Gallery</a></li>
                    <li><a href="{{route('contact')}}" @if(Request::url() === url('/contact')) class="active" @else class="scroll" @endif>Contact Us</a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
        </nav>
    </div>
</div>
@yield('content')

<!--//footer-->

    <div class="agile-footer w3ls-section">
        <div class="container">
            <div class="col-md-7 list-footer">
                <ul class="footer-nav">
                    <li><a  href="{{route('home')}}">Home</a></li>
                    <li><a  href="{{route('about')}}">About</a></li>
                    <li><a  href="{{route('services')}}">Services</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
                <p></p>
            </div>
            <div class="col-md-5 agileinfo-sub">
                <h6>Click the link below to start the subscription service</h6>
                <a href="#" data-toggle="modal" data-target="#myModal1">subscribe</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="w3_agile-copyright text-center">

    </div>

    <!-- modal-sign -->
    <div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <img src="{{asset('images/logo.png')}}" alt="logo"/>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('images/modal.jpg')}}" class="img-responsive" alt="image">
                        <p>A clean, modern banking experience. We've simplified things. Made navigation quicker. Tracking your money and staying in control of your finances should now be easier.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- modal-sign -->
    <div class="modal bnr-modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="{{asset('images/logo.png')}}" alt="logo"/>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <p>E-Banking's email newsletter provides subscribers with helpful articles on important issues in the banking industry, as well as news about events and more! To sign up for the newsletter, fill the below form.</p>
                    <form class=" wthree-subsribe" action="#" method="post">
                        <input type="text" name="name" placeholder="Your Name" required="">
                        <input type="email" name="email" placeholder="your Email" required="">
                        <input type="submit" value="SignUp">
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 3
        $("#slider3").responsiveSlides({
            auto:true,
            pager:false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
