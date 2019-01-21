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
                                        <img src="{{URL::asset('images/'.$stire->imagine)}}" class="news-img" alt="Fotbal Arena">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                        <div class="news-title">{{(strlen($stire->titlu) > 100) ? substr($stire->titlu,0,97).'...' : $stire->titlu}}</div>
                                    </a>
                                </div>
                                <div class="col-12"> 
                                    <div style="float: right;"> 
                                        @if(Auth::check() && Auth::user()->role == 'admin')
                                            <strong>{{($stire->pin == 1) ? 'Pined,' : ''}} &nbsp;<i> {{$stire->views}} views</i></strong>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row display-large">
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
                                        <img src="{{URL::asset('images/'.$stire->imagine)}}" class="news-img" alt="Fotbal Arena">
                                    </a>
                                </div>
                                <div class="col-12" style="padding-left:  0px; padding-right: 0px; padding-top: 5px; height: 75px !important;">
                                    <a href="{{ route('stire-detaliu', ['id' => $stire->id]) }}">
                                        <div class="news-title">{{(strlen($stire->titlu) > 100) ? substr($stire->titlu,0,97).'...' : $stire->titlu}}</div>
                                    </a>
                                </div>
                                <div class="col-12"> 
                                    <div style="float: right;"> 
                                        @if(Auth::check() && Auth::user()->role == 'admin')
                                            <strong>{{($stire->pin == 1) ? 'Pined,' : ''}} &nbsp;<i> {{$stire->views}} views</i></strong>
                                        @endif
                                    </div>
                                </div>
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