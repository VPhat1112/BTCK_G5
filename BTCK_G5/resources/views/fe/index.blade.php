<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2023 10:23:57 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Trang chủ</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('fe-asset')}}/assets/images/icons/favicon.png">


    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800', 'Playfair+Display:900', 'Shadows+Into+Light:400']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '{{asset('fe-asset')}}/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('fe-asset')}}/assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('fe-asset')}}/assets/css/demo1.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('fe-asset')}}/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('fe-asset')}}/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body>
    <div class="page-wrapper">
        

        <header class="header home">
            
            <!-- End .header-top -->

            <div class="header-middle text-dark sticky-header">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="{{route('index')}}" class="logo">
                            <img src="{{asset('fe-asset')}}/assets/images/logo.png" width="111" height="44" alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right w-lg-max pl-2">
                        <div class="header-search header-icon header-search-inline header-search-category w-lg-max">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    
                                    <!-- End .select-custom -->
                                    <button class="btn icon-magnifier" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-5 mr-xl-3 ml-5">
                            <a href="{{route('logout')}}">Logout</a>
                        </div>
                        <!-- End .header-contact -->

                        @if (Auth::check())
                            <a href="" class="header-icon header-icon-user"><i class="icon-user-2"></i>
                                {{ Auth::user()->name }}
                            </a>    
                        @else
                            <a href="{{route('login-user')}}" class="header-icon header-icon-user"><i class="icon-user-2"></i>
                                Login
                            </a>  
                        @endif
                        
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->
        </header>
        <!-- End .header -->

        @yield('main')
        <!-- End .main -->

       
    </div>
    <!-- End .page-wrapper -->

    

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('fe-asset')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('fe-asset')}}/assets/js/plugins.min.js"></script>
    <script src="{{asset('fe-asset')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('fe-asset')}}/assets/js/jquery.appear.min.js"></script>
    <script src="{{asset('fe-asset')}}/assets/js/jquery.plugin.min.js"></script>
    <script src="{{asset('fe-asset')}}/assets/js/jquery.countdown.min.js"></script>

    <!-- Main JS File -->
    <script src="{{asset('fe-asset')}}/assets/js/main.min.js"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'8287baeafe853f4f',t:'MTcwMDM4OTMyNy4wMjcwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/9914b343/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2023 10:24:22 GMT -->
</html>