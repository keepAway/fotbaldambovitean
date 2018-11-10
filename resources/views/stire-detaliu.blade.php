@php
    $current_url = Request::fullUrl();
@endphp

@extends('layouts.app')
@section('content')
@section('title', $stire->titlu)

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
        <div class="col-sm-2"></div>
        <div class="col-sm-7" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="news-detail-wrapper mt-2">
                <div class="container">
                    <div class="news-detail-header">
                        <div class="news-details mb-0">
                            <div class="row">
                                 <div class="col-6 news-date">
                                    {{date('M d, Y, H:s', strtotime($stire->created_at))}}
                                </div>
                                <div class="col-6">
                                    <a href="{{'/?categorie='.$stire->categorie_id}}">
                                        <div class="news-cat float-right"># {{$stire->nume_categorie}}</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="mb-4 mt-3">{{$stire->titlu}}</h3>
                    </div>
                    <div class="news-detail-img mb-4 text-center">
                        <div class="news-hr">
                            <div class="float-right" style="font-weight: bold; font-style: italic; color: #888;">
                                <span style="font-weight: normal;">by </span>{{$stire->autor}}
                            </div>
                        </div>
                        <img src="{{URL::asset('images/'.$stire->imagine)}}" alt="Fotbal Arena">
                    </div>
                    <div class="news-detail-content">{!!html_entity_decode($stire->continut)!!}</div>
                    <div class="news-detail-share pt-5 pb-5 text-center">
                        <div class="addthis_inline_share_toolbox_igh9"></div>
                    </div>
                </div>
                @if ( count($alte_stiri) > 0 )
                    <div class="news-hr"></div>
                    <h4 class="text-center mb-4 mt-5">Ştiri din aceeaşi categorie</h4>
                    <div class="news-detail-related row mt-5">
                        @foreach ($alte_stiri as $stire)
                            <div class="col-lg-6">
                                <div class="news-block">
                                    <div class="news-details">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="news-date">
                                                    {{date('M d, Y, H:s', strtotime($stire->created_at))}}
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <a href="{{url()->current().'/?categorie='.$stire->categorie_id}}">
                                                    <div class="news-cat float-right">
                                                        # {{$stire->nume_categorie}}
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                        <div class="news-title">{{substr($stire->titlu, 0, 100)}}</div>
                                    </a>
                                    <div class="news-img-block">
                                        <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                            <img src="{{URL::asset('images/'.$stire->imagine)}}" class="news-img" alt="Fotbal Arena">
                                        </a>
                                        @if ($stire->pin == 1)
                                        <div class="news-top"><b>TOP</b></div>
                                        @endif
                                        <div class="news-views">
                                            <i class="fas fa-eye fa-lg"></i>
                                            <span style="font-style: normal; font-weight: bold;">{{$stire->views}}</span>
                                        </div>
                                    </div>
                                    {{-- <p>{{$stire->introducere}}...</p> --}}
                                    <div class="row pt-3">
                                        <div class="col-6">
                                            <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                                <div class="news-link">Citeşte mai mult</div>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <div class="float-right" style="font-weight: bold; font-style: italic;">
                                                <span style="font-weight: normal;">by </span>{{$stire->autor}}
                                            </div>
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
        <div class="col-sm-3"></div>
    </div>
    <div class="line"></div>
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
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function($){
        $.ajax({
            type : "get",
            url: "{{ route('save-view', ['id' => $id]) }}",
            data: {},
            success: function(data) {

            }
        });
    });

    var popupMeta = {
        width: 400,
        height: 400
    }
    $(document).on('click', '.social-share', function(event){
        event.preventDefault();

        var vPosition = ($(window).width() - popupMeta.width) / 2,
            hPosition = ($(window).height() - popupMeta.height) / 2;

        var url = $(this).attr('href');
        var popup = window.open(url, 'Social Share',
            'width='+popupMeta.width+',height='+popupMeta.height+
            ',left='+vPosition+',top='+hPosition+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            return false;
        }
    });
</script>