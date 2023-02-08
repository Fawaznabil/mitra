<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mitra</title>
    <link rel="icon" href="assets/mitra-logo-white.png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cssku.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/Book.css') }}"> --}}
    {{-- https://colorhunt.co/palette/432c7a80489cff8fb1fce2db --}}
</head>
<body style="font-family:poppins; background-image: linear-gradient(to bottom right, rgb(245, 245, 245), #e8e8e8)">
    <nav>
        <div class="container-fluid fixed-bottom p-2">
            <div class="container mb-2 d-flex align-items-center justify-content-center shadow" style="background-image: linear-gradient(to bottom right, #432C7A, #80489C); height:75px; border-radius:750px; border: solid #FCE2DB 5px">
                <div class="row">

                    {{-- <div class="col mx-3">
                        <a href="/pesan"><img src="{{ asset('assets/literature-512.png') }}" alt="" style="height: 50px"></a>
                    </div> --}}
                    <div class="col mx-3">
                        <a href="" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat" ><img src="{{ asset('assets/mail-icon-pink.png') }}"  alt=""  id="chat" style="height: 50px"></a>
                        {{-- <a href="#"><img src="{{ asset('assets/mail-icon-pink.png') }}" alt="" style="height: 50px" ></a> --}}
                    </div>

                    <div class="col mx-3">
                        <a href="/"><img src="{{ asset('assets/home-icon-pink.png') }}" alt="" style="height: 50px"></a>
                    </div>
                    <div class="col mx-3">
                        <a href="" @auth data-bs-toggle="modal" data-bs-target="#profile" @else data-bs-toggle="modal" data-bs-target="#pesan" @endauth><img src="{{ asset('assets/ava-icon-pink.png') }}" alt="" style="height: 50px"></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid d-flex align-items-center justify-content-center p-2" style="background-image: linear-gradient(to bottom right, #432C7A, #80489C); border-bottom: solid #FCE2DB 5px">
        <img class="mb-2" src="{{ asset('assets/mitra-pink.png') }}" alt="" style="height: 50px">
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="container-fluid text-center mt-5 p-5" style="background-color: #80489C; height:250px; color:#FCE2DB">
        <img src="{{ asset('assets/mitra-pink.png') }}" alt="" style="height: 50px">
        <div class="d-flex justify-content-center align-items-center mt-2">
            <img class="me-1" src="{{ asset('assets/c.png') }}" style="height: 15px">
            BemVokasi 2023. All Rights Reserved
        </div>
    </footer>

        {{-- modal profil--}}
        <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="color: #432C7A;">
                @auth
                <div class="modal-header" style="background:#80489C; border-bottom: solid #FCE2DB 5px; color:#FCE2DB">
                <h5 class="modal-title" id="exampleModalLabel">Halo, {{ Auth::user()->name }} !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-1">
                    <a style="color: #432C7A" class="dropdown-item" href="/pemesanan">Pesanan</a>
                    <a style="color: #432C7A" class="dropdown-item" href="/profile">Profil</a>
                    <a style="color: #432C7A" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
                @endauth
            </div>
            </div>
        </div>

        <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" style="height:520px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
            <!--begin::Messenger-->
            <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
                <!--begin::Card header-->
                <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                    <!--begin::Title-->
                    <div class="card-title">
                        <!--begin::User-->
                        <div class="d-flex justify-content-center flex-column me-3">
                            <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Admin</a>
                            <!--begin::Info-->
                            <div class="mb-0 lh-1">
                                <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                <span class="fs-7 fw-semibold text-muted">Active</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">

                        <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body" id="kt_drawer_chat_messenger_body">
                    <!--begin::Messages-->
                    <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">

                        <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-end">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                                    <div class="me-3">
                                        <span class="text-muted fs-7 mb-1">Just now</span>
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                </div>
                                <!--end::User-->
                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(template for out)-->
                        <!--begin::Message(template for in)-->
                        <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src={{ asset('assets/300-3.jpg') }} />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Admin</a>
                                        <span class="text-muted fs-7 mb-1">Just now</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(template for in)-->
                    </div>
                    <!--end::Messages-->
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                    <!--begin::Input-->
                    <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
                    <!--end::Input-->
                    <!--begin:Toolbar-->
                    <div class="d-flex flex-stack">
                        <!--begin::Actions-->
                        {{-- <div class="d-flex align-items-center me-2">
                            <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                                <i class="bi bi-paperclip fs-3"></i>
                            </button>
                            <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                                <i class="bi bi-upload fs-3"></i>
                            </button>
                        </div> --}}
                        <!--end::Actions-->
                        <!--begin::Send-->
                        <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                        <!--end::Send-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card footer-->
            </div>
            <!--end::Messenger-->
        </div>

            {{-- modal pesan--}}
    <div class="modal fade" id="pesan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            @auth
            <div class="modal-header" style="background:#80489C; border-bottom: solid #FCE2DB 5px; color:#FCE2DB">
            <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div  class="modal-body p-4">
            <form method="post" class="row g-3" action="/create_pesan">
                @csrf
                <div class="mb-3" hidden>
                    <input name="id_user" type="text" class="form-control" value="{{ Auth::user()->id }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Pemesanan</label>
                    <input name="nama_pemesanan" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Asal Instansi</label>
                    <input name="asal_instansi" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input name="judul" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Media</label>
                    <select name="media" class="form-select" aria-label="Default select example">
                        <option value="instagram">Instagram</option>
                        <option value="youtube">Youtube</option>
                        <option value="tiktok">Tiktok</option>
                        <option value="spotify">Spotify</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Konten</label>
                    <select name="jenis_konten" class="form-select" aria-label="Default select example">
                        <option value="gambar">Gambar</option>
                        <option value="video">Video</option>
                        <option value="audio">Audio</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Upload</label>
                    <input name="tgl_upload" type="date" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                      <textarea name="deskripsi" type="text" class="form-control" cols="30" rows="10" required></textarea>
                      <div class="form-text">Deskripsi konten</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Link Poster (Jika ada)</label>
                    <input name="link_poster" type="text" class="form-control">
                </div>
                <button type="submit" class="btn shadow" style="border-radius: 50px; background-color:#80489C; color:#FCE2DB; border:solid #FCE2DB 2px">Submit</button>
            </form>
            </div>
            @else
            <div class="modal-header" style="background:#80489C; border-bottom: solid #FCE2DB 5px">
            <h5 class="modal-title" id="exampleModalLabel" style="color:#FCE2DB">Login untuk melanjutkan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="centering p-4">
            <a href="{{ route('login') }}"><button type="submit" class="btn" style="background-color: #80489C; color:#FCE2DB;">Login</button></a>
            </div>
            @endauth
        </div>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jsku.js') }}"></script>
    {{-- <script src="js/fontawesome.min.js"></script> --}}
    <script src="{{ asset('https://code.iconify.design/2/2.2.1/iconify.min.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/58c595958e.js') }}" crossorigin="anonymous"></script>

    <!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('js/plugins.bundle.js') }}"></script>
		<script src="{{ asset('js/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{ asset('js/datatables1.bundle.js') }}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('js/js/custom/pages/user-profile/general.js') }}"></script>
		<script src="{{ asset('js/js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('js/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('js/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('js/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset('js/js/custom/utilities/modals/create-campaign.js') }}"></script>
		<script src="{{ asset('js/js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
		<script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
		<script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
		<script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
		<script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
		<script src="{{ asset('js/js/js/custom/utilities/modals/users-search.js') }}"></script>


</body>
</html>
