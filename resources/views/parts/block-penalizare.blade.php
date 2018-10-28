 @if(Auth::check() && Auth::user()->role == 'admin')
    <div class="col-sm-12 d-none d-lg-block font-weight-bold" style="height: 40px; margin-top: 20px; margin-bottom: 5px;font-size: 20px;">
        <form action="{{route('adauga-penalizare')}}" method="POST" class="prevent-resubmit" style="display: inline-block !important;">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-6 pr-0">
                    <select class="form-control radius-0 pr-0" name="echipa_id" required>
                        <option value=""> Alege echipa </option>
                        @foreach($echipe as $echipa)
                            <option value="{{$echipa->id}}">{{$echipa->echipa}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <input type="hidden" value="{{$liga}}" name="liga">
                    <input type="hidden" value="{{$seria}}" name="serie">
                    <input type="number" min="0" class="form-control radius-0" name="puncte" required>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success float-right" style="margin-right: -8px"> Adauga Penalizare </button>
                </div>
            </div>
        </form>
    </div>
@endif