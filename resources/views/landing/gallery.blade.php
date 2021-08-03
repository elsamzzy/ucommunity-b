@extends('layouts.landing.app')
@section('content')
    <div class="w3ls-section gallery">
        <div class="container">
            <div class="w3ls-title">
                <h2 class="h3-w3l">Gallery</h2>
            </div>
            <div class="gallery-grids-top">
                <div class="gallery-grids agileits-w3layouts">
                    <div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img">
                        <a class="example-image-link w3-agilepic" href="{{asset('images/g1.jpg')}}" data-lightbox="example-set" data-title="">
                            <img class="example-image img-responsive" src="{{asset('images/g1.jpg')}}" alt=""/>
                            <div class="w3ls-overlay">
                                <h4>Our Gallery</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
                        <a class="example-image-link w3-agilepic" href="{{asset('images/g2.jpg')}}" data-lightbox="example-set" data-title="">
                            <img class="example-image img-responsive" src="{{asset('images/g2.jpg')}}" alt=""/>
                            <div class="w3ls-overlay">
                                <h4>Our Gallery</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
                        <a class="example-image-link w3-agilepic" href="{{asset('images/g3.jpg')}}" data-lightbox="example-set" data-title="">
                            <img class="example-image img-responsive" src="{{asset('images/g3.jpg')}}" alt=""/>
                            <div class="w3ls-overlay">
                                <h4>Our Gallery</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img gallery-mdl hover ehover14">
                        <a class="example-image-link w3-agilepic" href="{{asset('images/g3.jpg')}}" data-lightbox="example-set" data-title="">
                            <img class="example-image img-responsive" src="{{asset('images/g3.jpg')}}" alt=""/>
                            <div class="w3ls-overlay">
                                <h4>Our Gallery</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img gallery-mdl hover ehover14">
                        <a class="example-image-link w3-agilepic" href="{{asset('images/g4.jpg')}}" data-lightbox="example-set" data-title="">
                            <img class="example-image img-responsive" src="{{asset('images/g4.jpg')}}" alt=""/>
                            <div class="w3ls-overlay">
                                <h4>Our Gallery</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
                        <a class="example-image-link w3-agilepic" href="{{asset('images/g5.jpg')}}" data-lightbox="example-set" data-title="">
                            <img class="example-image img-responsive" src="{{asset('images/g5.jpg')}}" alt=""/>
                            <div class="w3ls-overlay">
                                <h4>Our Gallery</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
                        <a class="example-image-link w3-agilepic" href="{{asset('images/g6.jpg')}}" data-lightbox="example-set" data-title="">
                            <img class="example-image img-responsive" src="{{asset('images/g6.jpg')}}" alt=""/>
                            <div class="w3ls-overlay">
                                <h4>Our Gallery</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
                        <a class="example-image-link w3-agilepic" href="{{asset('images/g2.jpg')}}" data-lightbox="example-set" data-title="">
                            <img class="example-image img-responsive" src="{{asset('images/g2.jpg')}}" alt=""/>
                            <div class="w3ls-overlay">
                                <h4>Our Gallery</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img gallery-mdl hover ehover14">
                        <a class="example-image-link w3-agilepic" href="{{asset('images/g1.jpg')}}" data-lightbox="example-set" data-title="">
                            <img class="example-image img-responsive" src="{{asset('images/g1.jpg')}}" alt=""/>
                            <div class="w3ls-overlay">
                                <h4>Our Gallery</h4>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                    <script src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
                </div>
            </div>
        </div>
    </div>
@endsection
