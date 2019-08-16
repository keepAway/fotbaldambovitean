@php
	$current_sezon = substr($current_url, strpos($current_url, "sezon/") + 6);
	$current_sezon = substr($current_sezon, 0, 9);
@endphp
<div class="col-sm-12 font-weight-bold" style="height: 40px; margin-top: 20px; margin-bottom: 5px;font-size: 20px;">
    <div class="row">
        <div class="col-sm-12">
            <select class="form-control radius-0" name="sezons" id="sezons">
                @if( $liga == 1 || $liga == 2 || $liga == 4 || $liga == 5 || $liga == 6 )
                <option value="2019-2020">Sezon 2019-2020</option>
                @endif
                @if($liga != 1)
                <option value="2018-2019">Sezon 2018-2019</option>
                @endif
            </select>
        </div>
        {{-- <div class="col-sm-2">
            <input type="hidden" value="{{$liga}}" name="liga">
            <input type="hidden" value="{{$seria}}" name="serie">
            <input type="number" min="0" class="form-control radius-0" name="puncte" required>
        </div>
        <div class="col-sm-4">
            <button type="submit" class="btn btn-success float-right" style="margin-right: -8px"> Adauga Penalizare </button>
        </div> --}}
    </div>
</div>
<script type="text/javascript">
	let current_sezon = '{{$current_sezon}}';
    let current_liga = '{{$liga}}';
    let current_serie = '{{$seria}}';
	$("#sezons option").each(function() {
		if(current_sezon == $(this).val()) {
			$(this).attr("selected","selected");
		}
	});

	$(document).ready(function($){
        $('#sezons').on('change', function() {
		  	let sezon = this.value;
            if(current_serie) {
                window.location.href = '/clasament/liga/'+current_liga+'/sezon/'+sezon+'?seria='+current_serie;
            } else {
		  	   window.location.href = '/clasament/liga/'+current_liga+'/sezon/'+sezon;
            }
		});
    });
</script>