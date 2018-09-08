<?php 
    $seria = Request::get('seria') ? Request::get('seria') :  NULL;
    $current_url = Request::fullUrl();
?>
<!-- Page Content  -->
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
<div id="content">
    @include('navbar')
    <div class="row">
        <div class="col-sm-2">
        </div>
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
        <div class="col-sm-3">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-7" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-sm-12" style="margin-top: 20px; margin-bottom: 5px; font-size: 20px; font-weight: bold;">OFICIAL A rezistat doar un anotimp! Încă un jucător s-a despărțit azi de FCSB » EXCLUSIV Prima reacție a clubului la care se transferă
                </div>
            </div>
            <div class="col-sm-12">
                <div>
                    <img src="https://images.gsp.ro/usr/thumbs/thumb_924_x_600/2018/09/01/930958-919067-rkr1611.jpg">
                </div>
                <div>
                    FCSB s-a despărțit oficial azi de albanezul Kamer Qaka, 23 de ani, acesta urmând să revină la Poli Iași, clubul de la care roș-albaștrii îl transferaseră la începutul verii.
                    Clubul stelist a oficializat despărțirea pe site-ul oficial, anunțând că cele două cluburi au ajuns la un acord definitiv de transfer.
                </div>
                <div>
                    În scurta sa aventură la vicecampioana României, Qaka a evoluat în 7 meciuri pentru FCSB în toate competițiile, fără să înscrie vreun gol.

                    Qaka ar fi putut ajunge inclusiv la Dinamo, albanezul fiind parte din deal-ul pe care Becali i l-a propus lui Negoiță pentru transferul lui Dan Nistor. Mutarea nu s-a mai realizat în cele din urmă. 
                </div>

                <div>
                    REACȚIA MOLDOVENILOR
                    Contactat de GSP.ro, președintele lui Poli Iași, Adrian Ambrosie, a confirmat că Qaka va ajunge cel mai probabil în Moldova: "Îl așteptăm mâine să semneze, dar am încă o mică umbră de îndoială. Nu pot confirma transferul până când băiatul nu-și pune semnătura pe contract.  Nu știu mai multe detalii despre tranzacție, Horia Sabo fiind cel care s-a ocupat de transfer", a declarat Ambrosie. 

                    Conform surselor GSP.ro, ieșenii vor achita celor de la FCSB aproximativ 200.000 de euro pentru transferul definitiv al lui Qaka. Roș-albaștrii plătiseră moldovenilor 400.000 de euro pentru achiziționarea albanezului. 

                    Tot azi, FCSB a oficiliazat despărțirea de fundașul dreapta Marian Pleașcă (detalii, aici)
                </div>
            </div>
        </div>
    </div>
</div>
