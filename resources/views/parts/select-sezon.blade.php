@if($liga == 2)
<div class="col-sm-12 font-weight-bold" style="height: 40px; margin-top: 20px; margin-bottom: 5px;font-size: 20px;">
    <div class="row">
        <div class="col-sm-12">
            <select class="form-control radius-0" name="sezons" id="sezons">
                <option value="2019-2020">Sezon 2019-2020</option>
                <option value="2018-2019">Sezon 2018-2019</option>
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
@endif
<script type="text/javascript">
	$(document).ready(function($){
        $('#sezons').on('change', function() {
		  	let sezon = this.value;
		  	window.location.href = 'clasament/liga/2/sezon/'+sezon;
		});
    });
</script>