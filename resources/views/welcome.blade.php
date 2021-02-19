<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="Content-Language" content="en-us">

    <title>{{ __('Welcome | Community Bank') }}</title>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css')  }}>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400" rel="stylesheet">
    <script type="text/javascript" {{ asset('js/jquery.js') }}></script>
    <script type="text/javascript" {{ asset('js/easySlider1.5.js') }}></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#slider").easySlider();
        });
    </script>
    <style>

        h1{
            font-size:180%;
            font-weight:normal;
        }
        h2{
            font-size:160%;
            font-weight:normal;
        }
        h3{
            font-size:140%;
            font-weight:normal;
        }
        img{border:none;}
        pre{
            display:block;
            font:12px "Courier New", Courier, monospace;
            padding:10px;
            border:1px solid #bae2f0;
            background:#e3f4f9;
            margin:.5em 0;
            width:500px;
        }

        /* Easy Slider */

        #slider ul, #slider li{
            margin:0;
            padding:0;
            list-style:none;
        }
        #slider li{
            /*
                define width and height of list item (slide)
                entire slider area will adjust according to the parameters provided here
            */
            width:1350px;
            height:238px;
            overflow:hidden;
        }
        span#prevBtn{}
        span#nextBtn{}

        /* // Easy Slider */

    </style>


    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            font-weight: 300px;
        }
    </style>
</head>
<body>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
    <tr>
        <td style="padding:8px" bgcolor="#000000">
            <div align="center">
                <table border="0" width="1150" cellspacing="1">
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td width="307">				<p align="right"><font face="Verdana" size="2"><a href="{{ route('login') }}">
                                        <font color="#FFFFFF">{{ __('Apply Online') }}</font></a><font color="#FFFFFF"></font></font></td>
                        <td width="102" align="right">
                            <a href="{{ route('login') }}">
                                <img border="0" src="{{ asset('img/pensio2.gif') }}"></a></td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div align="center">
                <table border="0" width="1150" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <table border="0" width="100%" cellspacing="1">
                                <tr>
                                    <td width="281" style="padding:15px">
                                        <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td width="40">
                                                    <img border="0" src="{{ asset('img/og.jpg') }}" width="63" height="49"></td>
                                                <td width="10">&nbsp;</td>
                                                <td>
                                                    <p style="margin-top: 0; margin-bottom: 0"><b>
                                                            <font face="Arial" size="6" color="#333333">
                                                                {{ __('United') }}</font><font face="Arial" size="6" color="#333333">{{ __('Community') }}</font><font face="Arial" size="6" color="#EE0831">{{ __('Bank') }}</font></b></p>
                                                    <p style="margin-top: 0; margin-bottom: 0">
                                                        <font face="Arial" size="4" color="#333333">
                                                            &nbsp;</font></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <p align="right">&nbsp; <a href="index-2.html">{{ __('Home') }}</a>&nbsp; |&nbsp;
                                            <a href="savings.html">{{ __('Savings') }}</a>&nbsp; |&nbsp;
                                            <a href="cards.html">{{ __('Cards') }}</a>&nbsp; |&nbsp;
                                            <a href="investments.html">{{ __('Investment') }}s</a>&nbsp; |&nbsp;
                                            <a href="loans.html">{{ __('Loans') }}</a>&nbsp;
                                            |&nbsp; <a href="pensions.html">{{ __('Pensions &amp; Retirement') }}</a>&nbsp; |&nbsp;
                                            <a href="contactus.html">{{ __('Contact Us') }}</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div id="slider">
                <ul>
                    <li><a href="#"><img src="{{ asset('img/index.20a.jpg') }}" /></a></li>
                    <li><a href="#"><img src="{{ asset('img/index.21a.jpg') }}" /></a></li>
                    <li><a href="#"><img src="{{ asset('img/01.jpg') }}" /></a></li>
                    <li><a href="#"><img src="{{ asset('img/03.jpg') }}" /></a></li>
                    <li><a href="#"><img src="{{ asset('img/02.jpg') }}" /></a></li>
                </ul>
        </td>
    </tr>
    <tr>
        <td>
            <img border="0" src="{{ asset('img/index.1.gif') }}"></td>
    </tr>
    <tr>
        <td bgcolor="#F5F5F5">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#F5F5F5" style="padding:20px">
            <div align="center">
                <table border="0" width="1130" cellspacing="1">
                    <tr>
                        <td width="255" valign=top>
                            <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td valign=top>
                                        <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border:1px solid #EBEBEB">
                                            <tr>
                                                <td bgcolor="#FFFFFF">
                                                    <a href="{{ route('login') }}">
                                                        <img border="0" src="{{ asset('img/index.9.jpg') }}"></a></td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#FFFFFF" style="padding:15px; border-bottom:4px solid #D0D0D0">
                                                    <div ng-if="content.heading || content.showLoanBanner" class="panel-heading l-pb-0 ng-scope l-mb-1" ng-class="{  'l-mb-05': content.subheading, 'l-mb-1': !content.subheading,       }">
                                                        <h2 class="panel-title panel-title-primary ng-binding" ng-class="textClass" ng-bind="content.heading">
                                                            <font color="#FF6200">{{ __('Mobile Banking') }}</font></h2>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div ng-class="{'row': hasMedia &amp;&amp; mediaPosition === 'left' &amp;&amp; showMediaLeft}">
                                                            <div ng-class="{'col-xxs-12 col-xs-7 col-sm-8 col-md-9 col-lg-8 col-xl-8': hasMedia &amp;&amp; mediaPosition === 'left' &amp;&amp; showMediaLeft}">
                                                                <p ng-if="content.introText" ng-bind-html="content.introText" class="ng-binding ng-scope">{{ __('Make transactions easy and fast
                                                                    with our Mobile Banking App. Whether your
                                                                    device is a tablet, or a smartphone,
                                                                    you can bank with us anywhere.') }}

                                                                    </div>
                                                        </div>
                                                    </div>
                                                    &nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border:1px solid #EBEBEB">
                                            <tr>
                                                <td bgcolor="#FFFFFF" style="padding:15px; border-bottom:4px solid #D0D0D0">
                                                    <div ng-if="content.heading || content.showLoanBanner" class="panel-heading l-pb-0 ng-scope l-mb-1" ng-class="{         'l-mb-05': content.subheading,         'l-mb-1': !content.subheading,       }">
                                                        <h2 class="panel-title panel-title-primary ng-binding" ng-class="textClass" ng-bind="content.heading">
                                                            <font color="#FF6200">{{ __('Contact Us') }}</font></h2>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div ng-class="{'row': hasMedia &amp;&amp; mediaPosition === 'left' &amp;&amp; showMediaLeft}">
                                                            <div ng-class="{'col-xxs-12 col-xs-7 col-sm-8 col-md-9 col-lg-8 col-xl-8': hasMedia &amp;&amp; mediaPosition === 'left' &amp;&amp; showMediaLeft}">
                                                                <p ng-if="content.introText" ng-bind-html="content.introText" class="ng-binding ng-scope">{{ __('If you need information or help with
                                                                    your banking affairs, feel free to
                                                                    call us on our customer care lines,
                                                                    available
                                                                    Monday to Friday from 8.00 - 21.00
                                                                    and Saturday from 9.00 to 17.00.') }}
                                                                    </div>
                                                        </div>
                                                    </div>
                                                    &nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>&nbsp;</td>
                        <td valign=top width="360">
                            <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td valign=top>
                                        <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border:1px solid #EBEBEB">
                                            <tr>
                                                <td bgcolor="#FFFFFF" style="padding:15px">
                                                    <div ng-if="content.heading || content.showLoanBanner" class="panel-heading l-pb-0 ng-scope l-mb-1" ng-class="{         'l-mb-05': content.subheading,         'l-mb-1': !content.subheading,       }">
                                                        <h2 class="panel-title panel-title-primary ng-binding" ng-class="textClass" ng-bind="content.heading" style="margin-top: 0; margin-bottom: 0">
                                                            <font color="#FF6200">{{ __('Experience online
                                                                banking') }}</font></h2>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#FFFFFF" style="padding:15px" align="center">
                                                    <a href="{{ route('login') }}">
                                                        <img border="0" src="{{ asset('img/index.10.jpg') }}"></a></td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#FFFFFF" style="padding:15px; border-bottom:4px solid #D0D0D0">
                                                    <p style="margin-top: 0; margin-bottom: 0">{{ __('Our
                                                        online banking services is now also available in
                                                        several languages. However, we have provided a manual in
                                                        English and 5 other languages, to help you get
                                                        started.') }}</p>
                                                    <p style="margin-top: 0; margin-bottom: 0">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border:1px solid #EBEBEB">
                                            <tr>
                                                <td bgcolor="#FFFFFF">
                                                    <a href="{{ route('login') }}">
                                                        <img border="0" src="{{ asset('img/index.11.jpg') }}"></a></td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#FFFFFF" style="padding:15px; border-bottom:4px solid #D0D0D0">
                                                    <div ng-if="content.heading || content.showLoanBanner" class="panel-heading l-pb-0 ng-scope l-mb-1" ng-class="{         'l-mb-05': content.subheading,         'l-mb-1': !content.subheading,       }">
                                                        <h2 class="panel-title panel-title-primary ng-binding" ng-class="textClass" ng-bind="content.heading">
                                                            <font color="#FF6200">{{ __('united Community Bank for businesses') }}</font></h2>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div ng-class="{'row': hasMedia &amp;&amp; mediaPosition === 'left' &amp;&amp; showMediaLeft}">
                                                            <div ng-class="{'col-xxs-12 col-xs-7 col-sm-8 col-md-9 col-lg-8 col-xl-8': hasMedia &amp;&amp; mediaPosition === 'left' &amp;&amp; showMediaLeft}">
                                                                <p ng-if="content.introText" ng-bind-html="content.introText" class="ng-binding ng-scope">{{ __('Looking for a partner in
                                                                    (international) business?') }}
                                                                    </p>
                                                                <div ng-if="content.moreLinks" class="l-mb-2 ng-scope">
                                                                    <uic-link-list content="content.moreLinks" invert="" class="ng-isolate-scope">
                                                                        <uic-link content="link" invert="" class="ng-isolate-scope">
												<span class="ng-binding ng-scope">
												<a ng-transclude ng-if="!isVideo &amp;&amp; !isOverlay" class="link-hover-inverse h-text-i" ng-click="openPopup($event);" target="_self" ng-href="https://www.ing.nl/de-ing/over-de-ing/de-ing-wie-zijn-wij/welcome-to-ing-for-businesses/index.html" href="{{ route('register') }}">{{ __('Join us today') }}</a></span></uic-link></uic-link-list></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    &nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>&nbsp;</td>
                        <td valign=top width="360">
                            <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td valign=top>
                                        <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border:1px solid #EBEBEB">
                                            <tr>
                                                <td bgcolor="#FFFFFF">
                                                    <a href="login/login.php">
                                                        <img border="0" src="{{ asset('img/index.12.jpg') }}"></a></td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#FFFFFF" style="padding:15px; border-bottom:4px solid #D0D0D0">
                                                    <div ng-if="content.heading || content.showLoanBanner" class="panel-heading l-pb-0 ng-scope l-mb-1" ng-class="{         'l-mb-05': content.subheading,         'l-mb-1': !content.subheading,       }">
                                                        <h2 class="panel-title panel-title-primary ng-binding" ng-class="textClass" ng-bind="content.heading">
                                                            <font color="#FF6200">{{ __('Open an account at
                                                                united Community Bank') }}</font></h2>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div ng-class="{'row': hasMedia &amp;&amp; mediaPosition === 'left' &amp;&amp; showMediaLeft}">
                                                            <div ng-class="{'col-xxs-12 col-xs-7 col-sm-8 col-md-9 col-lg-8 col-xl-8': hasMedia &amp;&amp; mediaPosition === 'left' &amp;&amp; showMediaLeft}">
                                                                <p ng-if="content.introText" ng-bind-html="content.introText" class="ng-binding ng-scope">{{ __('If you would like to become aunited Community Bank
                                                                    customer, we are happy to help you
                                                                    at one of our branches. In just
                                                                    20 minutes, we can give you an
                                                                    account and Internet Banking access.
                                                                    An appointment is not required.') }}
                                                                    </div>
                                                        </div>
                                                    </div>
                                                    &nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border:1px solid #EBEBEB">
                                            <tr>
                                                <td bgcolor="#FFFFFF" style="padding:15px; border-bottom:4px solid #D0D0D0">
                                                    <div ng-if="content.heading || content.showLoanBanner" class="panel-heading l-pb-0 ng-scope l-mb-1" ng-class="{         'l-mb-05': content.subheading,         'l-mb-1': !content.subheading,       }">
                                                        <h2 class="panel-title panel-title-primary ng-binding" ng-class="textClass" ng-bind="content.heading">
                                                            <font color="#FF6200">About united Community Bank</font></h2>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div ng-class="{'row': hasMedia &amp;&amp; mediaPosition === 'left' &amp;&amp; showMediaLeft}">
                                                            <div ng-class="{'col-xxs-12 col-xs-7 col-sm-8 col-md-9 col-lg-8 col-xl-8': hasMedia &amp;&amp; mediaPosition === 'left' &amp;&amp; showMediaLeft}">
                                                                <p class="MsoNormal">{{ __('Community Bank
                                                                    Retail Banking at its finest. Most of our online
                                                                    content and services are available') }}
                                                                <p class="MsoNormal">{{ __('community of canada serves nearly half of Canada with a broad range of products,
                                                                    we are continuously striving to improve the online experience for our international customers.') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    &nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td bgcolor="#F5F5F5">&nbsp;</td>
    </tr>
</table>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
    <tr>
        <td bgcolor="#FF4500" style="padding:20px">
            <div align="center">
                <table border="0" width="1150" cellspacing="1">
                    <tr>
                        <td width="807">
                            <div class="container">
                                <b>
                                    <font color="#FFFFFF" face="Verdana" size="2">{{ __('All rights reserved&nbsp;|&nbsp;&copy Copyright 2019
                                        united	community Bank ') }}</font></b></div>
                        </td>
                        <td>&nbsp;</td>
                        <td width="238">
                            <a href="contactus.html">
                    </tr>
                    <tr>
                        <td width="807">
                            &nbsp;</td>
                        <td>&nbsp;</td>
                        <td width="238">
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <font face="Verdana" size="2"><font color="#FFFFFF">{{ __('Your
                                    eligible deposits with united Community Bank  are protected
                                    up to a total of $850,000 by the Financial Services Compensation
                                    Scheme, the US deposit guarantee scheme. Any deposits you hold
                                    above the limit are unlikely to be covered.') }}<br>
                                    <br> {{ __('community Bank . Registered in Canada.
                                    We are authorised by the Prudential Regulation Authority and
                                    regulated by the Financial Conduct Authority and Prudential
                                    Regulation Authority. community Bank is an independent Canadian Bank - it is not affiliated with any other
                                    bank or organisation anywhere in the world. &quot;Premiumboc National&quot; is
                                    the registered trademark of community Bank.') }}
                                    </font><br>
                                &nbsp;</font></td>
                    </tr>
                    <tr>
                        <td width="807">
                            &nbsp;</td>
                        <td>&nbsp;</td>
                        <td width="238">
                            &nbsp;</td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
<!--End of Tawk.to Script-->
<script src="//code.tidio.co/rykjp38tvjknntcobu5twunpex6c5qx1.js" async></script>
</body>


<!-- Mirrored from www.premiumboc.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 07:33:38 GMT -->
</html>
