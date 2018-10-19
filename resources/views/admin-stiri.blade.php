@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
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
        <div class="col-sm-3"></div>
    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="container contact-form">
                <div class="contact-image">
                    <img src="{{URL::asset('/img/rocket.png')}}" alt="rocket_contact"/>
                </div>
                <form action="{{route('admin-save-stire')}}" method="POST" class="prevent-resubmit" id="stiri-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>Scrie O Stire</h3>
                    <div class="form-group">
                        <input type="checkbox" id="stire-featured" name="stire_featured" value="featured">
                        <label for="stire-featured">Stire principala?</label>
                    </div>
                    <div class="form-group">
                        <select name="stire_categorie" id="stire-categorie" class="form-control" required>
                            <option value="0" disabled selected>Selecteaza o categorie</option>
                            @foreach ($categorii as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->nume}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="stire-titlu">Titlu *</label>
                        <input type="text" name="stire_titlu" id="stire-titlu" class="form-control" placeholder="Titlu" required/>
                    </div>
                    <div class="form-group">
                        <label for="stire-introducere">Introducere (Maxim 100 de caractere)</label>
                        <textarea name="stire_introducere" id="stire-introducere" class="form-control" placeholder="Introducere" maxlength="100"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="stire-continut">Continut</label>
                        <textarea name="stire_continut" id="stire-continut" class="form-control stire-continut" placeholder="Continut"></textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#stire-continut' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="stire-imagine">Imagine (Dimensiune recomandata: 1600x1200 px)*</label>
                        <input type="file" name="stire_imagine" id="stire-imagine" class="form-control" accept="image/png, image/jpeg" required style="border: 0; padding-left: 0;" />
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" name="submit" class="btn btn-dark" value="Adauga stire" />
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection