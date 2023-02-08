@extends('layoutuser')
@section('content')

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


<div class="container" style="min-height: 60vh">
    <div class="row d-flex justify-content-center p-4">

        {{-- <div class=""> --}}
            <div class="d-flex flex-wrap flex-stack my-5">

                <!--begin::Heading-->
                <h2 class="fs-2 fw-semibold my-2">Projects
                <span class="fs-6 text-gray-400 ms-1">by Status</span></h2>
                <!--end::Heading-->
                <!--begin::Controls-->
                <div class="d-flex flex-wrap my-1">
                    <!--begin::Select wrapper-->
                    <div class="m-0">
                        <!--begin::Select-->
                        <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm form-select-solid fw-bold w-125px">
                            <option value="dalam antrian" selected="selected">dalam antrian</option>
                            <option value="proses pengerjaan">Proses Pengerjaan</option>
                            <option value="proses qc">Proses qc</option>
                            <option value="selesai">selesai</option>
                        </select>
                        <!--end::Select-->
                    </div>
                    <!--end::Select wrapper-->
                </div>
                <!--end::Controls-->
            </div>

            <div class="row g-6 g-xl-9">
                @foreach($pesan->where('id_user', auth::user()->id) as $isi)
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

                            @if ($isi->JENIS_KONTEN === 'gambar')
                            <img src="{{ asset('assets/images.png') }}" alt="image" class="p-3" />

                            @elseif ($isi->JENIS_KONTEN === 'video')
                            <img src="{{ asset('assets/camera-video.png') }}" alt="image" class="p-3" />

                            @elseif ($isi->JENIS_KONTEN === 'audio')
                            <img src="{{ asset('assets/volume-up.png') }}" alt="image" class="p-3" />

                            @endif

                            <div class="symbol-group symbol-hover">
                                @if($isi->LINK_POSTER = "berhasil" )
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="File">
                                    {{-- <img alt="Pic" src="assets/ava-icon-dark.png" /> --}}

                                </div>
                                @elseif($isi->LINK_POSTER ='test' )
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="File">


                                </div>
                                @endif
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            

            {{-- <div class="card m-2 shadow rounded hvr-grow p-2 text-center rounded" style="border: none; height:200px; width:200px">
                <div class="card-head p-1">
                    <h1 style="font-size: small">{{ $isi->JUDUL }}</h1>
                </div>
                <div class="card-body">
                    @if($isi->STATUS = 'dalam antrian')
                    <div class="progress" style="border-radius: 20px;">
                        <div class="progress-bar bg-warning" role="progressbar" aria-label="Example with label" style="width: 25%; color:#FCE2DB;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <span style="font-size:x-small;">Status : {{ $isi->STATUS }}</span>
                </div>
                <div class="card-body">
                    <a href="detail/{{ $isi->id }}"><button class="btn shadow hvr-grow" style="border-radius: 50px; background-color:#80489C; color:#FCE2DB; border:solid #FCE2DB 2px;">Detail</button></a>
                </div>
            </div> --}}
        {{-- </div> --}}

    </div>
</div>
@endsection
