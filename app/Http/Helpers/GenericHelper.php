<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Carbon\Carbon;
use App\EtapaCurenta;

class GenericHelper
{
    public static function etapaCurenta($liga, $serie) {
        $etapaCurenta = EtapaCurenta::where('liga', $liga)->where('serie', $serie)->first();
        return empty($etapaCurenta) ? 1 : $etapaCurenta->etapa_curenta;
    }
}