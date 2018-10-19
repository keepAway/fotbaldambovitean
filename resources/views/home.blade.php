@extends('layouts.app')
@section('content')
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
        <div class="col-sm-7" id="news-wrapper" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row mt-5">
                @foreach ($stiri as $stire)
                    <div class="col-lg-6">
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
                                        <a href="{{url()->current().'/?categorie='.$stire->categorie_id}}">
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
            <div class="col-sm-12 text-center">
                {{ $stiri->appends(\Request::except('page'))->links() }}
            </div>
        </div>
        <div class="col-sm-3">reclama dreapta</div>
    </div>
</div>
@endsection