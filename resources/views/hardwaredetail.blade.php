@extends('layouts.layouthardwaredetail')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body text-center text-dark">
            <h3>NERACA AIR</h3>
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
                        <img src="{{ asset('images/'.$records->foto_pos) }}" class="card-img-top" alt="..."
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
                                <h1>POS {{$records->pos_name}}</h1>
                            </div>
                        </div>
                        <div></div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Nomor Pos</b></div>
                            <div class="col-6 col-sm-3">: {{$records->nomor_pos}}</div>
                            <div class="col-6 col-sm-3"><b>ID Hardware </b></div>
                            <div class="col-6 col-sm-3">: {{$records->kd_hardware}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Desa </b></div>
                            <div class="col-6 col-sm-3">: {{$records->kd_desa}}</div>
                            <div class="col-6 col-sm-3"><b>Tahun Dibangun</b></div>
                            <div class="col-6 col-sm-3">: {{$records->thn_dibangun}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Kecamatan </b></div>
                            <div class="col-6 col-sm-3">: {{$records->kd_kecamatan}}</div>
                            <div class="col-6 col-sm-3"><b>Didirikan Oleh </b></div>
                            <div class="col-6 col-sm-3">: {{$records->pendiri}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Kabupaten </b></div>
                            <div class="col-6 col-sm-3">: {{$records->kd_kabupaten}}</div>
                            <div class="col-6 col-sm-3"><b>Wilayah Sungai </b></div>
                            <div class="col-6 col-sm-3">: {{$records->wilayah_sungai}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Provinsi </b></div>
                            <div class="col-6 col-sm-3">: {{$records->kd_provinsi}}</div>
                            <div class="col-6 col-sm-3"><b>Elevasi </b></div>
                            <div class="col-6 col-sm-3">: {{$records->elevasi}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Koordinat </b></div>
                            <div class="col-6 col-sm-3">: LS {{$records->latitude}}</div>
                            <div class="col-6 col-sm-3"></div>
                            <div class="col-6 col-sm-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"></div>
                            <div class="col-6 col-sm-3">: BT {{$records->longitude}}</div>
                            <div class="col-6 col-sm-3"></div>
                            <div class="col-6 col-sm-3">
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

                <!-- <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="" role="tab" aria-controls="tab2"
                        aria-selected="false">Data Telemetry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="" role="tab" aria-controls="tab3"
                        aria-selected="false">Grafik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="" role="tab" aria-controls=""
                        aria-selected="false">CCTV</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link active" id="tab1-tab" data-toggle="" href="#tab4" role="" aria-controls="tab4"
                        aria-selected="true">Ilustarasi Grafik Neraca Air dan Tinggi Muka Air</a>
                </li> -->
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <div class="container mt-3">
                        <div>
                            <!-- SEARCH FORM -->
                            <!-- BATAS AKHIR SEARCH FORM -->

                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body justify-content-center text-center">
                                    <div class="container">
                                        <!-- <a href="#">kentang !</a> -->
                                        <div class="" style="height:500px;">
                                            <div class="d-flex mb-1">
                                                <button class="btn btn-primary mb-1" onclick="yolo()">Kurang</button>
                                                <button class="btn btn-success mb-1" onclick="molo()">Tambah</button>
                                                <input type="number" step="0.01" id="volo" class="mb-1 form-control">
                                                <button class="btn btn-outline-dark" onclick="kentang()">Submit</button>
                                                <!-- <h1>example</h1> -->
                                            </div>
                                            <div class="text-center text-dark">
                                                <h5>Tinggi Muka Air Hari Ini =
                                                    {{number_format(($records->value)-($records->k_tma),2)}} m</h5>
                                            </div>
                                            <!-- <div id="kl" class="water">
                                            </div> -->
                                            <img src="{{ asset('images/'.$records->pos_img) }}" alt=""
                                                style="max-width:50%;position: absolute;top:300px;left:75%;transform: translate(-50%, -50%); z-index:21;">
                                            <img id="kl" src="{{ asset('images/waters.png') }}" alt=""
                                                style="max-width:30%;position: absolute;top:300px;left:75%;transform: translate(-50%, -50%); z-index:20;">
                                            <img src="{{ asset('images/'.$records->plant) }}" alt=""
                                                style="max-width:50%;position: absolute;top:300px;left:25%;transform: translate(-50%, -50%); z-index:21;">
                                            <!-- <img id="kl" src="{{ asset('images/waters.png') }}" alt=""
                                                style="max-width:25%;position: absolute;top:300px;left:25%;transform: translate(-50%, -50%); z-index:20;"> -->
                                            <!-- <div class="water"></div> -->
                                            <div
                                                style="border-style:solid;position: absolute;top:200px;left:75%;transform: translate(-50%, -50%); z-index:22;height:35px;width:200px;background:wheat;">
                                                TMA Grafik : 0.72m
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:none;width:1800px;top:55%;" class="card-bar" id="uhuy">
                                <!-- <span class="close-button" onclick="tutungclose()"> X </span> -->

                                <img id="imgbox" src="" alt="">
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
    function kentang() {
        var userInput = parseFloat(document.getElementById("volo").value).toFixed(2);
        console.log(userInput)
        if (userInput > 3 || userInput < 0) return alert("nilai tidak bisa dibawah 0 / diatas 3 m")
        var length = userInput / 3 * 40;
        const kentang = document.getElementById("kl");
        const topValue = "330px";
        const currentTop = parseInt(topValue, 10);
        kentang.style.top = currentTop - length + "px";
        console.log(kentang.style.top)
    }

    function yolo() {
        console.log("yolo");
        console.log("kentang.style.top")
        const kentang = document.getElementById("kl");
        const topValue = kentang.style.top || "300px";
        // const topValue = kentang.style.top;
        const currentTop = parseInt(topValue, 10);
        kentang.style.top = currentTop + 1 + "px";
        console.log(kentang.style.top)
    }

    function molo() {
        console.log("molo");
        console.log("kentang.style.top")
        const kentang = document.getElementById("kl");
        const topValue = kentang.style.top || "300px";
        // const topValue = kentang.style.top;
        const currentTop = parseInt(topValue, 10);
        kentang.style.top = currentTop - 1 + "px";
        console.log(kentang.style.top)
    }
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