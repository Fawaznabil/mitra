@extends('layoutuser')
@section('content')
@auth

<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{ asset('css/datables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <div class="container mt-3">
        <div class="row p-3">
            <div class="col" style="max-width: 85px">
                <img src= alt={{ Auth::user()->photo }}style="border-radius:75px; height:75px; width:75px; border: solid #FCE2DB 2px;">
            </div>
            <div class="col">
                <h2 class="mt-3 mb-0" style="color: #432C7A; font-size:25px">{{ Auth::user()->name }}</h2>
                <h3 style="color: #80489C; font-size:15px; font-weight:light    ;">{{ Auth::user()->email }}</h3>
            </div>
        </div>
    </div>

    <div class="container p-4">
        <h1 style="font-weight:bold; color:#432C7A">Selamat Datang !</h1>
        <a href="" data-bs-toggle="modal" data-bs-target="#pesan" style="text-decoration: none;">
            <div class="hvr-grow shadow mt-3 d-flex align-items-center" style="height: 250px; border-radius:25px; background-image: linear-gradient(to right, rgb(68, 45, 124), rgba(255, 255, 255, 0.5)), url('assets/bg3.png'); background-size: cover;">
                <div class="p-4" style="max-width:80%">
                    <h1 style="font-weight: inherit; color:#FCE2DB; font-size:35px;">Buat Pesanan Baru</h1>
                </div>
            </div>
        </a>
    </div>


    <div class="container px-4 py-2 mt-2">
        <h1 style="font-weight:inherit; color:#432C7A; font-size:x-large">Pesanan Terbaru</h1>

        <div class="row g-6 g-xl-9">
            @foreach ($pesan as $isi)
            <!--begin::Col-->
            <div class="col-md-6 col-xl-4">
                <!--begin::Card-->
                <a href="detail-pemesanan/{{ $isi->id }}" class="card border-hover-primary">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-9">
                        <!--begin::Card Title-->
                        <div class="card-title m-0">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px w-50px bg-light">
                                @if ($isi->MEDIA === 'youtube')
                                <img src="{{ asset('assets/youtube.png') }}" alt="image" class="p-3" />

                                @elseif ($isi->MEDIA === 'instagram')
                                <img src="{{ asset('assets/instagram.png') }}" alt="image" class="p-3" />

                                @elseif ($isi->MEDIA === 'tiktok')
                                <img src="{{ asset('assets/tiktok.png') }}" alt="image" class="p-3" />

                                @elseif ($isi->MEDIA === 'spotify')
                                <img src="{{ asset('assets/spotify.png') }}" alt="image" class="p-3" />

                                @endif
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::Car Title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">{{ $isi->STATUS }}</span>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end:: Card header-->
                    <!--begin:: Card body-->
                    <div class="card-body p-9">
                        <!--begin::Name-->
                        <div class="fs-3 fw-bold text-dark">Asal Instansi</div>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">{{ $isi->ASAL_INSTANSI }}</p>
                        <!--end::Description-->
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap mb-5">
                            <!--begin::Due-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bold">{{ $isi->TGL_UPLOAD }}</div>
                                <div class="fw-semibold text-gray-400">Due Date</div>
                            </div>
                            <!--end::Due-->
                            <!--begin::Budget-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bold">{{ $isi->JUDUL }}</div>
                                <div class="fw-semibold text-gray-400">Judul</div>
                            </div>
                            <!--end::Budget-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Progress-->

                        <div class="card-body">
                            @if($isi->STATUS = 'Dalam Antrian')
                        <div class="progress" style="border-radius: 40px;">
                            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        @elseif($isi->STATUS = 'proses pengerjaan')
                        <div class="progress" style="border-radius: 20px;">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 50%; background-color: #432C7A; color:#FCE2DB;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        @elseif($isi->STATUS = 'proses qc')
                        <div class="progress" style="border-radius: 20px;">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 75%; background-color: #432C7A; color:#FCE2DB;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        @elseif($isi->STATUS = 'selesai')
                        <div class="progress" style="border-radius: 20px;">
                            <div class="progress-bar bg-success" role="progressbar" aria-label="Example with label" style="width: 100%; color:#FCE2DB;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        @endif
                        </div>

                        {{-- <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 50% completed">
                            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}

                        <!--end::Progress-->
                        <!--begin::Users-->
                        <div class="symbol-group symbol-hover">
                            <!--begin::User-->
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
                                @if ($isi->JENIS_KONTEN === 'gambar')
                                <img src="{{ asset('assets/images.png') }}" alt="image" class="p-3" />

                                @elseif ($isi->JENIS_KONTEN === 'video')
                                <img src="{{ asset('assets/camera-video.png') }}" alt="image" class="p-3" />

                                @elseif ($isi->JENIS_KONTEN === 'audio')
                                <img src="{{ asset('assets/volume-up.png') }}" alt="image" class="p-3" />

                                @endif
                                {{-- <img alt="Pic" src={{ Auth::user()->photo }} /> --}}
                            </div>

                        </div>
                        <!--end::Users-->
                    </div>
                    <!--end:: Card body-->
                </a>
                <!--end::Card-->
            </div>
            @endforeach
        </div>

        {{-- <div class="row mt-4 px-2">
            @foreach ($pesan as $isi)
            <div class="hvr-grow col p-1">
                <div class="card shadow rounded p-2 text-center" style="height: 150px; border:none">
                    <div class="card-body p-1" style="min-height: 55px">
                        <h1 style="font-size: small">{{ $isi->JUDUL }}</h1>
                    </div>
                    <div class="card-body">
                        @if($isi->STATUS = 'dalam antrian')
                    <div class="progress" style="border-radius: 20px;">
                        <div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @elseif($isi->STATUS = 'proses pengerjaan')
                    <div class="progress" style="border-radius: 20px;">
                        <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 50%; background-color: #432C7A; color:#FCE2DB;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @elseif($isi->STATUS = 'proses qc')
                    <div class="progress" style="border-radius: 20px;">
                        <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 75%; background-color: #432C7A; color:#FCE2DB;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @elseif($isi->STATUS = 'selesai')
                    <div class="progress" style="border-radius: 20px;">
                        <div class="progress-bar bg-success" role="progressbar" aria-label="Example with label" style="width: 100%; color:#FCE2DB;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @endif
                    </div>
                    <span style="font-size:x-small;">Status : {{ $isi->STATUS }}</span>
                </div>
            </div>
            @endforeach
        </div> --}}

        <div class="d-flex justify-content-center mt-4">
            <a href="/pemesanan" style="color: #80489C"><p>selengkapnya ></p></a>
        </div>
    </div>

    @else

    <div class="container-fluid d-flex align-items-center justify-content-center" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/bg.jpg'); min-height:50vh; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container text-center" style="color:#fff">
            <h1>Selamat Datang di Mitra</h1>
            <p>Mitra adalah sistem pemesanan konten, dengan Mitra pemesanan dan pelacakan konten menjadi lebih mudah</p>
            <a data-bs-toggle="modal" data-bs-target="#pesan" class="btn shadow hvr-grow" style="border-radius: 50px; background-color:#80489C; color:#FCE2DB; border:solid #FCE2DB 2px">Buat Pesanan</a>
        </div>
    </div>

    <div class="container text-center mt-5">
        <h1 style="font-weight:bolder; background: -webkit-linear-gradient(#432C7A, #80489C);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent;">BerMitra Dengan Kami Dalam 3 Langkah</h1>
        <div class="row mt-5" style="font-size:medium">
            <div class="col hvr-grow">
                <img src="assets/step-1.png" alt="" style="height: 50px">
                <p>Membuka web/aplikasi Mitra</p>
            </div>
            <div class="col hvr-grow">
                <img src="assets/step-2.png" alt="" style="height: 50px">
                <p>Membuat pemesanan konten</p>
            </div>
            <div class="col hvr-grow">
                <img src="assets/step-3.png" alt="" style="height: 50px">
                <p>Pemesanan segera diproses</p>
            </div>
        </div>
    </div>

    <div class="container mt-3 text-center">
        <a href="/login" class="btn shadow hvr-grow" style="border-radius: 50px; background-color:#80489C; color:#FCE2DB; border:solid #FCE2DB 2px">Daftar Sekarang</a>
    </div>
    @endauth
@endsection
