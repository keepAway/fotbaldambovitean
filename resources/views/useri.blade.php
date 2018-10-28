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
                    <div class="col-sm-12 alert alert-success text-center" role="alert">
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
        <div class="col-sm-2"><p>teeeeeeeeeeest</p>
            <p>teeeeeeeeeeest clasament</p>
            <p>teeeeeeeeeeest clasament</p>
        </div>
        <div class="col-sm-7" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-sm-12 font-weight-bold" style="height: 40px; margin-top: 20px; margin-bottom: 5px; font-size: 20px;">
                    <label style="font-size: 16px; margin-left: 5px;"> Useri</label>
                </div>
                <div class="col-sm-12">
                    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                        <table class="table text-left">
                            <tr style="font-weight: bold;">
                                <td>#</td>
                                <td>Pro.</td>
                                <td>User</td>
                                <td>
                                    <span class="float-right">Actiuni</span>
                                </td>
                            </tr>
                            <tbody>
                                @foreach($useri as $key => $user)
                                    <tr>
                                        <td>
                                            <span style="font-weight: bold;">
                                                {{(Input::get('page', 1) - 1) * $useri->perPage() + $key + 1 }}
                                            </span>
                                        </td>
                                        @if($user->provider == 'facebook')
                                            <td class="font-italic">
                                                <i class="fab fa-facebook fa-2x" style="color: #3b5998;"></i>
                                            </td>
                                        @elseif($user->provider == 'google')
                                            <td class="font-italic">
                                                <i class="fab fa-google-plus-square fa-2x" style="color: #d85040;"></i>
                                            </td>
                                        @else
                                            <td class="font-italic">
                                                <i class="far fa-futbol fa-2x" style="color: #085f00;"></i>
                                            </td>
                                        @endif
                                        <td class="font-weight-bold">{{$user->name}}</td>
                                        <td>
                                            <span class="float-right">
                                                <a href="{{route('disable', ['id' => $user->id])}}" class="btn btn-{{($user->disabled) ? 'danger' : 'info'}} btn-sm">
                                                    <i class="fas fa-ban"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 text-center" style="text-align: center !important;">
                    {{ $useri->appends(\Request::except('page'))->links() }}
                </div>
            </div>
        </div>
        <div class="col-sm-3"><p>teeeeeeeeeeest</p>
            <p>teeeeeeeeeeest clasament</p>
            <p>teeeeeeeeeeest clasament</p>
        </div>
    </div>
</div>
@endsection
  