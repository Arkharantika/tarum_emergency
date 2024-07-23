@extends('layouts.layouthardwaredetail')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body text-center text-dark">
            <h3>DATA POS HARDWARE</h3>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6 col-md-2">
                    <div class=" card shadow mt-4" style=" height:250px;">
                        <div class="card-header" style="background:silver;">
                            <p class="card-text"></p>
                        </div>
                        <img src="{{asset('images/'.$recorddetail->foto_pos)}}" class="card-img-top" alt="..."
                            style="width: 100%;height: 100%;object-fit:cover;">
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-10">
                    <div class="container mt-1 text-dark">
                        <div>
                            <hr>INFORMASI POS
                        </div>
                        <div style="">
                            <div>
                                <h1>POS {{$recorddetail->pos_name}}</h1>
                            </div>
                        </div>
                        <div></div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Nomor Pos</b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->nomor_pos}}</div>
                            <div class="col-6 col-sm-3"><b>ID Hardware </b></div>
                            <div class="col-6 col-sm-3">: {{$chance}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Desa </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->kd_desa}}</div>
                            <div class="col-6 col-sm-3"><b>Tahun Dibangun</b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->thn_dibangun}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Kecamatan </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->kd_kecamatan}}</div>
                            <div class="col-6 col-sm-3"><b>Didirikan Oleh </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->pendiri}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Kabupaten </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->kd_kabupaten}}</div>
                            <div class="col-6 col-sm-3"><b>Wilayah Sungai </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->wilayah_sungai}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Provinsi </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->kd_provinsi}}</div>
                            <div class="col-6 col-sm-3"><b>Elevasi </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->elevasi}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Koordinat </b></div>
                            <div class="col-6 col-sm-3">: LS {{$recorddetail->latitude}}</div>
                            <div class="col-6 col-sm-3"></div>
                            <div class="col-6 col-sm-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"></div>
                            <div class="col-6 col-sm-3">: BT {{$recorddetail->longitude}}</div>
                            <div class="col-6 col-sm-3"></div>
                            <div class="col-6 col-sm-3">
                                <a href="{{url('/editpos/'.$chance)}}" class="btn btn-primary btn-sm">Edit Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <!--<li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardware/'.$chance)}}" role="tab"
                        aria-controls="tab1" aria-selected="false">Informasi</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwaretable/'.$chance)}}" role="tab"
                        aria-controls="tab2" aria-selected="false">Data Telemetry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwaregraph/'.$chance)}}" role="tab"
                        aria-controls="tab3" aria-selected="false">Grafik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwarecctv/'.$chance)}}" role="tab"
                        aria-controls="" aria-selected="false">CCTV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="tab1-tab" data-toggle="" href="#tab4" role="" aria-controls="tab4"
                        aria-selected="true">Cross Section</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <div class="container mt-3">
                        <div>
                            <!-- SEARCH FORM -->
                            <!-- BATAS AKHIR SEARCH FORM -->

                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body d-flex justify-content-center text-center">
                                    <div class="container">
                                        <div class="table-responsive">
                                            @if($recorddetail->foto_cross == null)
                                            tidak ada foto cross section
                                            @else
                                            <img onclick="tutungopen(this.src)" src="{{ asset('images/'.$recorddetail->foto_cross) }}" alt=""
                                            class="rounded border border-dark" style="width:1000px;cursor:pointer;height:auto;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:none;width:1280px;top:55%;" class="card-bar" id="uhuy">
                                <!-- <span class="close-button" onclick="tutungclose()"> X </span> -->
                                
                                <img id="imgbox" src=""
                                    alt="">
                                <button onclick="tutungclose()" class="btn btn-sm btn-secondary">tutup X</button>
                                    
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('CustomScripts')
<script>
    n = new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("nowdate").innerHTML = m + "/" + d + "/" + y;

    window.onload = function () {
        // Calculate the vertical position that is 75% lower than the top
        const position = (document.documentElement.scrollHeight - window.innerHeight) * 0.55;

        // Scroll to the calculated position
        window.scrollTo(0, position);
    };

    function tutungopen(content) {
        // alert(""+content);
        console.log(content)
        var tutungan = document.getElementById("uhuy")
        tutungan.style.display = "flex";

        var gambar = document.getElementById("imgbox")
        var imageUrl = content;
        gambar.src = imageUrl;

    }

    function tutungclose() {
        var tutungan = document.getElementById("uhuy")
        tutungan.style.display = "none";
    }

    function lightboxopen(content) {
        var tutungan = document.getElementById("uhuy")
        tutungan.style.display = "flex";

        console.log(content)

        var gambar = document.getElementById("imgbox")
        var imageUrl = "../../../contoh_pindahan/" + content;
        gambar.src = imageUrl;
        console.log(gambar.src);
    }
</script>
@endsection