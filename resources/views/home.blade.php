@php
    $route = \Request::route()->getName();
    $search = isset($_GET['search']) ? $_GET['search'] : NULL;
@endphp
@extends('layouts.app')
@section('content')
@section('title', '.:: Fotbal Arena ::.')
@section("description", 'Ai o informatie, un scor, sau vrei doar sa vorbim, lasa-ne un mesaj si te vom contacta in cel mai scurt timp posibil. Facem tot ce ne sta in putere sa dezvoltam fotbalul dambovitean asa ca orice informatie este binevenita.')
<style type="text/css">
    .forma {
        width: 20px;
        height: 20px;
        margin-left: 2px;
        text-align: center;
        font-size: 13px;
        color: #fff;
        font-weight: bold;
        border-radius: 20%;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
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
        <div class="col-sm-3">
            @include('parts/page-reporter')
        </div>
        <div class="col-sm-6" id="news-wrapper">
            <div class="row display-small">
                @php
                    if($search) {
                        @endphp
                            <div class="col-lg-12 text-center">
                                <h4>{!!count($stiri) > 0 ? '<div class="text-center mb-3">
                                    <a href="/" class="btn btn-secondary btn-sm" role="button" aria-pressed="true" style="border-radius: 0;">Toate ştirile</a>
                                </div>Rezultatele căutării: '.'"'.$search.'"' : '<br><br>Nu a fost găsit nici un rezultat<br><br><div class="text-center mb-5">
                                    <a href="/" class="btn btn-secondary btn-sm" role="button" aria-pressed="true" style="border-radius: 0;">Toate ştirile</a>
                                </div>'!!}</h4>
                            </div>
                        @php
                    }
                @endphp
                @foreach ($stiri as $stire)
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
                            <div class="row">
                                <div class="col-4">
                                    <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                        <img src="{{URL::asset('images/'.$stire->imagine)}}" class="news-img" alt="{{(mb_strlen($stire->titlu, 'utf8') > 100) ? mb_substr($stire->titlu,0,97,'UTF-8').'...' : $stire->titlu}}" title="{{(mb_strlen($stire->titlu, 'utf8') > 100) ? mb_substr($stire->titlu,0,97,'UTF-8').'...' : $stire->titlu}}">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                        <div class="news-title">{{(mb_strlen($stire->titlu, 'utf8') > 100) ? mb_substr($stire->titlu,0,97,'UTF-8').'...' : $stire->titlu}}</div>
                                    </a>
                                </div>
                                @if(Auth::check())
                                <div class="col-12"> 
                                    <div style="float: right;">
                                        <strong>{{($stire->pin == 1) ? 'Pined,' : ''}} &nbsp;<i class="fas fa-eye"></i> {{$stire->views}}</strong>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row display-large">
                @php
                    if($search) {
                        @endphp
                            <div class="col-lg-12 text-center">
                                <h4>{!!count($stiri) > 0 ? '<div class="text-center mb-3">
                                    <a href="/" class="btn btn-secondary btn-sm" role="button" aria-pressed="true" style="border-radius: 0;">Toate ştirile</a>
                                </div>Rezultatele căutării: '.'"'.$search.'"' : 'Nu a fost găsit nici un rezultat<br><br><div class="text-center mb-5">
                                    <a href="/" class="btn btn-secondary btn-sm" role="button" aria-pressed="true" style="border-radius: 0;">Toate ştirile</a>
                                </div>'!!}</h4>
                            </div>
                        @php
                    }
                @endphp
                @foreach ($stiri as $stire)
                    <div class="col-lg-6">
                        <div class="news-block">
                            <div class="news-details">
                                <div class="row" style="margin-left: 0px !important; margin-right: 0px !important;">
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
                            <div class="row" style="margin-left: 0px !important; margin-right: 0px !important;">
                                <div class="col-12 thumb">
                                    <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                        <img src="{{URL::asset('images/'.$stire->imagine)}}" class="news-img" alt="{{(mb_strlen($stire->titlu, 'utf8') > 100) ? mb_substr($stire->titlu,0,97,'UTF-8').'...' : $stire->titlu}}" title="{{(mb_strlen($stire->titlu, 'utf8') > 100) ? mb_substr($stire->titlu,0,97,'UTF-8').'...' : $stire->titlu}}">
                                    </a>
                                </div>
                                <div class="col-12" style="padding-left:  0px; padding-right: 0px; padding-top: 5px; height: 75px !important;">
                                    <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                        <div class="news-title">{{(mb_strlen($stire->titlu, 'utf8') > 100) ? mb_substr($stire->titlu,0,97,'UTF-8').'...' : $stire->titlu}}</div>
                                    </a>
                                </div>
                                @if(Auth::check())
                                <div class="col-12"> 
                                    <div style="float: right;">
                                        <strong>{{($stire->pin == 1) ? 'Pined,' : ''}} &nbsp;<i class="fas fa-eye"></i> {{$stire->views}}</strong>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-12 text-center">
                {{ $stiri->appends(\Request::except('page'))->links() }}
            </div>
        </div>
        <div class="col-sm-3">
            @include('parts/page-plugin')
        </div>
    </div>
</div>
@endsection