@php
    $current_url = Request::fullUrl();
    $pinterestThumbnail = URL::asset('storage/images/'.$stire->imagine);
    // Construct sharing URL without using any script
    $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$current_url;
    $twitterURL = 'https://twitter.com/share?text='.$stire->titlu.'&amp;url='.$current_url.'&amp;';  
    $googleURL = 'https://plus.google.com/share?url='.$current_url;
    $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$current_url.'&amp;title='.$stire->titlu;
    $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$current_url.'&amp;media='.$pinterestThumbnail.'&amp;description='.$stire->titlu;
    $whatsappURL = 'whatsapp://send?text='.$stire->titlu . ' ' . $current_url;

    // Mail to
    $body = 'Iata linkul catre articol: '.$current_url;
    $mailURL = 'mailto:?Subject='.$stire->titlu.'&Body='.$body;
@endphp

@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
            @if ( count( $errors ) > 0 )
                @foreach ($errors->all() as $error)
                    <div class="row">
                        <div class="col-sm-12 alert alert-danger" style="text-align: center;">{{ $error }}</div>
                    </div>
                @endforeach
            @endif

            @if (session('status'))
                <div class="row">
                    <div class="col-sm-12 alert alert-success" role="alert" style="text-align: center;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{session('status')}}
                    </div>
                </div>
            @endif
        </div>
        <div class="col-sm-3"></div>
    </div>
    <div class="row">
        <div class="col-sm-2">reclama stanga</div>
        <div class="col-sm-7" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="news-detail-wrapper mt-5">
                <div class="news-detail-header">
                    <h3 class="text-center mb-4">{{$stire->titlu}}</h3>
                    <div class="news-details mb-0">
                        <div class="row">
                            <div class="col-6">
                                <div><i class="fas fa-calendar-alt"></i> {{date('M d, Y | G:i', strtotime($stire->created_at))}}</div>
                            </div>
                            <div class="col-6">
                                <a href="{{'/?categorie='.$stire->categorie_id}}">
                                    <div class="news-cat float-right"><i class="fas fa-tags"></i> {{$stire->nume_categorie}}</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-detail-img mb-4">
                    <img src="{{URL::asset('storage/images/'.$stire->imagine)}}" alt="Imagine Fotbal Dambovitean">
                </div>
                <div class="news-hr">
                    <div class="news-detail-views font-weight-bold"><i class="fas fa-eye"></i> {{$stire->views}}</div>
                    <div class="news-detail-author font-weight-bold"><i class="fas fa-user"></i> {{$stire->autor}}</div>
                </div>
                <div class="news-detail-content ">{!!html_entity_decode($stire->continut)!!}</div>
                <div class="news-detail-share mt-5 px-3 py-2 text-center bg-light">
                    <div class="font-weight-bold h5">Distribuie</div>
                    <div class="px-3 py-2">
                        <a href="{{$facebookURL}}" class="social-share m-1" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
                        <a href="{{$twitterURL}}" class="social-share m-1" target="_blank"><i class="fab fa-twitter-square fa-3x"></i></a>
                        <a href="{{$googleURL}}" class="social-share m-1" target="_blank"><i class="fab fa-google-plus-square fa-3x"></i></a>
                        <a href="{{$linkedInURL}}" class="social-share m-1" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
                        <a href="{{$pinterestURL}}" class="social-share m-1" target="_blank"><i class="fab fa-pinterest-square fa-3x"></i></a>
                        <a href="{{$mailURL}}" class="social-share m-1"><i class="fas fa-envelope-square fa-3x"></i></a>
                        <a href="{{$whatsappURL}}" class="social-share m-1 d-sm-none"><i class="fab fa-whatsapp-square fa-3x"></i></a>
                    </div>
                </div>
                @if ( count($alte_stiri) > 0 )
                    <div class="news-hr"></div>
                    <h4 class="text-center mb-4 mt-5">Ştiri din aceeaşi categorie</h4>
                    <div class="news-detail-related row mt-5">
                        @foreach ($alte_stiri as $stire)
                            <div class="col-md-6">
                                <div class="news-block">
                                    <div class="news-img">
                                        <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                            <img src="{{URL::asset('storage/images/'.$stire->imagine)}}" class="news-img" alt="Imagine Fotbal Dambovitean">
                                        </a>
                                        @if ($stire->pin == 1)
                                        <div class="news-top"><b>TOP</b></div>
                                        @endif
                                    </div>
                                    <div class="news-hr">
                                        <div class="news-views font-weight-bold"><i class="fas fa-eye"></i> {{$stire->views}}</div>
                                    </div>
                                    <div class="news-details">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="news-date"><i class="fas fa-calendar-alt"></i> {{date('M d, Y', strtotime($stire->created_at))}}</div>
                                            </div>
                                            <div class="col-6">
                                                <a href="{{'/?categorie='.$stire->categorie_id}}">
                                                    <div class="news-cat float-right"><i class="fas fa-tags"></i> {{$stire->nume_categorie}}</div>
                                                </a>
                                            </div>
                                        </div>                            
                                    </div>
                                    <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                        <div class="news-title">{{$stire->titlu}}</div>
                                    </a>
                                    <p>{{$stire->introducere}}...</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                                <div class="news-link">Citeşte mai mult</div>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <div class="float-right"><i class="fas fa-user"></i><em> {{$stire->autor}}</em></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center mb-5">
                        <a href="{{'/'}}" class="btn btn-success btn-sm" role="button" aria-pressed="true">Toate ştirile</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-sm-3">reclama dreapta</div>
    </div>
    {{-- <div class="line"></div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-sm-12 font-weight-bold" style="height: 40px; margin-top: 20px; margin-bottom: 5px; font-size: 20px;">
                    <label style="font-size: 16px; margin-left: 5px;"> Comenteaza stirea</label>
                </div>
                <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v3.1&appId=2136989686622565&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                <div class="col-sm-12">
                    <div class="fb-comments" data-href="{{$current_url}}" data-numposts="5" data-width="100%"></div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function($){
        $.ajax({
            type : "get",
            url: "{{ route('save-view') }}",
            data: {
                id: '{{ $stire->id }}'
            },
            success: function(data) {

            }
        });
    });
</script>