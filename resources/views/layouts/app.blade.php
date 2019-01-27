<!DOCTYPE html>
@php $shareUrl = Request::fullUrl(); @endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-4051259731437503",
            enable_page_level_ads: true
          });
        </script>
        <title>@yield('title')</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128595058-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-128595058-1');
        </script>

        <script>
            window.fbAsyncInit = function() {
                FB.AppEvents.logPageView();
                (function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = 'https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v3.2&appId=2136989686622565&autoLogAppEvents=1';
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            };
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" property="og:description" content="@yield('description')">
        {{-- stiri fotbal, liga a 4-a, campionat, cupa, divizia, rezultate, clasament, dambovita, targoviste --}}

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- facebook --}}
        <meta property="og:url"   content="{{$shareUrl}}" />
        <meta property="og:type"  content="website" />
        <meta property="og:title" content="@yield('title')" />
        {{-- <meta name="description"  property="og:description" content="@yield('description')" /> --}}
        <meta property="og:image" content="@yield('image')" />
        
        
        <link rel="stylesheet" href="{{ asset('css/app.css?v=4.2') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css?v=6.1') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-social.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

        <script src="{{ asset('js/solid.js') }}"></script>
        <script src="{{ asset('js/fontawesome.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/custom.js?v=1.1') }}"></script>
        <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('js/mask.js') }}"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    </head>

    <body>
        <div class="overlay"></div>
        <div id="app">
            @include('navbar')
            @include('sidebar')
            @section("description", "Clasamente detaliate si statistici din fotbalul dambovitean, plus multe alte facilitati. Oferim clasamentele detaliate pentru Liga 2, Liga 3, Liga 4, Liga 5, seriile Sud, Nord, Vest si Liga 6, seriile Nord si Sud plus informatii si avancronici la zi din fotbalul dambovitean.");
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#sidebar").mCustomScrollbar({
                        theme: "minimal"
                    });

                    $('#dismiss, .overlay').on('click', function () {
                        $('#sidebar').removeClass('active');
                        $('.overlay').removeClass('active');
                    });

                    $('#sidebarCollapse').on('click', function () {
                        $('#sidebar').addClass('active');
                        $('.overlay').addClass('active');
                        $('.collapse.in').toggleClass('in');
                        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                    });
                });

                $('[data-toggle="tooltip"]').tooltip({
                   container: 'body'
                });
            </script>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        @include('footer')
        @include('cookie')
        {{-- share functionality --}}
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5be61ed0fc326e98"></script>
    </body>
</html>