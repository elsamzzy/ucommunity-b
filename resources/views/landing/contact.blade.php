@extends('layouts.landing.app')
@section('content')
    <div class="w3ls-section contact">
        <div class="container">
            <div class="w3ls-title">
                <h2 class="h3-w3l">contact us</h2>
            </div>
            <div class="w3ls_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48306.05339877067!2d-74.245183970742!3d40.825144655510556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2555646a723a1%3A0x449f3366d017b214!2sMontclair%2C+NJ%2C+USA!5e0!3m2!1sen!2sin!4v1465991700675" style="border:0"></iframe>
            </div>
            <div class="contact_wthreerow agileits-w3layouts">
                <div class="col-md-5 agileits_w3layouts_contact_gridl">

                    <div class="agileits_mail_grid_right_grid">

                        <ul class="contact_info">
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>80 Lafayette St, New York, NY 10013, USA</li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="support@u-communityb.com">support@u-communityb.com</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-7 w3l_contact_form">
                    <h4>Contact Form</h4>
                    <form action="" method="post">
                        <input type="text" placeholder="Your Full Name" name="name" class="@error('name') is-invalid @enderror" value="{{old('name')}}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Full Name';}" required>
                        <input type="email" placeholder="Your Email" name="email" class="@error('email') is-invalid @enderror" value="{{old('email')}}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}" required>
                        <input type="text" placeholder="Your Mobile Number" name="mobile" class="@error('mobile') is-invalid @enderror" value="{{old('mobile')}}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Mobile Number';}" required>
                        <textarea name="message" placeholder="Your Message" class="@error('message') is-invalid @enderror" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Message';}" required>{{old('message')}}</textarea>
                        @if(session('error'))
                            <div class="mt-2 text-danger">
                                <h5>{{session('error')}}</h5>
                            </div>
                        @endif
                        @if(session('message'))
                            <div class="mt-2 text-success">
                                <h5>{{session('message')}}</h5>
                            </div>
                        @endif
                        <input type="submit" value="Submit">
                    </form>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
