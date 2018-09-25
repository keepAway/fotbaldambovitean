@php 
    $seria       = Request::get('seria') ? Request::get('seria') :  NULL;
    $tab         = Request::get('tab') ? Request::get('tab') :  NULL;
    $current_url = Request::fullUrl();
@endphp

@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-7">
            @if ( count( $errors ) > 0 )
                @foreach ($errors->all() as $error)
                    <div class="row">
                        <div class="col-sm-12 alert alert-danger text-center">{{ $error }}</div>
                    </div>
                @endforeach
            @endif

            @if (session('status'))
                <div class="row">
                    <div class="col-sm-12 alert alert-success text-center mb-5" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{session('status')}}
                    </div>
                </div>
            @endif
        </div>
        <div class="col-sm-3">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="container contact-form">
                <div class="contact-image">
                    <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
                </div>
                <form action="{{route('contact-us')}}" method="POST" class="prevent-resubmit" id="contact-form">
                    {{ csrf_field() }}
                    <h3>Lasă-ne Un Mesaj!</h3>
                   <div class="row">
                        <div class="col-md-6">
                            <label>Nume *</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="nume" class="form-control" placeholder="Nume" required/>
                                </div>
                            </div>
                            <label>Email *</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-at"></i>
                                        </span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required/>
                                </div>
                            </div>
                            <label>Telefon *</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="telefon" id="telefon" class="form-control" placeholder="(0720) 000-000" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Trimite" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mesaj *</label>
                                <textarea name="mesaj" class="form-control" placeholder="Mesajul tau" style="width: 100%; height: 200px;" required></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>
<script>
    $( document ).ready(function(){
        $(function(){
          $("#telefon").mask("(9999) 999-999");
          $("#telefon").on("blur", function() {
              var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

                if( last.length == 5 ) {
                    var move = $(this).val().substr( $(this).val().indexOf("-") + 1, 1 );
                    var lastfour = last.substr(1,4);
                    var first = $(this).val().substr( 0, 9 );
                    $(this).val( first + move + '-' + lastfour );
                }
            });
        }); 
    });
</script>
@endsection
