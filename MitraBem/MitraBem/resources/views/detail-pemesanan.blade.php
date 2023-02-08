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

					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->

						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Navbar-->
								<div class="card mb-9">
									<div class="card-body pt-9 pb-0">
										<!--begin::Details-->
										<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
											<!--begin::Image-->
											<div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">

                                                @if ($pesan->MEDIA === 'youtube')
                                                <img src="{{ asset('assets/youtube.png') }}" alt="image" class="mw-50px mw-lg-75px" />

                                                @elseif ($pesan->MEDIA === 'instagram')
                                                <img src="{{ asset('assets/instagram.png') }}" alt="image" class="mw-50px mw-lg-75px" />

                                                @elseif ($pesan->MEDIA === 'tiktok')
                                                <img src="{{ asset('assets/tiktok.png') }}" alt="image" class="mw-50px mw-lg-75px" />

                                                @elseif ($pesan->MEDIA === 'spotify')
                                                <img src="{{ asset('assets/spotify.png') }}" alt="image" class="mw-50px mw-lg-75px" />

                                                @endif

												{{-- <img class="mw-50px mw-lg-75px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="image" /> --}}
											</div>
											<!--end::Image-->
											<!--begin::Wrapper-->
											<div class="flex-grow-1">
												<!--begin::Head-->
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<!--begin::Details-->
													<div class="d-flex flex-column">
														<!--begin::Status-->

														<div class="d-flex align-items-center mb-1">
															<a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">{{ $pesan->JUDUL }}</a>
															<span class="badge badge-light-success me-auto">{{ $pesan->STATUS }}</span>
														</div>


														<!--end::Status-->
														<!--begin::Description-->
														{{-- <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400">#1 Tool to get started with Web Apps any Kind & size</div>
														<!--end::Description--> --}}
													</div>

													<!--end::Details-->
													<!--begin::Actions-->
													<div class="d-flex mb-4">
														<!--begin::Menu-->
														<div class="me-0">

															<!--begin::Menu 3-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
																<!--begin::Heading-->
																<div class="menu-item px-3">
																	<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
																</div>
																<!--end::Heading-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Create Invoice</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link flex-stack px-3">Create Payment
																	<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Generate Bill</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">Subscription</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Plans</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Billing</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Statements</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu separator-->
																		<div class="separator my-2"></div>
																		<!--end::Menu separator-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<div class="menu-content px-3">
																				<!--begin::Switch-->
																				<label class="form-check form-switch form-check-custom form-check-solid">
																					<!--begin::Input-->
																					<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																					<!--end::Input-->
																					<!--end::Label-->
																					<span class="form-check-label text-muted fs-6">Recuring</span>
																					<!--end::Label-->
																				</label>
																				<!--end::Switch-->
																			</div>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3 my-1">
																	<a href="#" class="menu-link px-3">Settings</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 3-->
														</div>
														<!--end::Menu-->
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Head-->
												<!--begin::Info-->
												<div class="d-flex flex-wrap justify-content-start">
													<!--begin::Stats-->
													<div class="d-flex flex-wrap">
														<!--begin::Stat-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<div class="fs-4 fw-bold">{{ $pesan->TGL_UPLOAD }}</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-semibold fs-6 text-gray-400">Due Date</div>
															<!--end::Label-->
														</div>
														<!--end::Stat-->
														<!--begin::Stat-->

														<!--end::Stat-->
														<!--begin::Stat-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
															<!--begin::Number-->
															<div class="d-flex align-items-center">
																<!--end::Svg Icon-->
																<div class="fs-4 fw-bold" data-kt-countup="true"  data-kt-countup-prefix="">{{ $pesan->JUDUL }}</div>
															</div>
															<!--end::Number-->
															<!--begin::Label-->
															<div class="fw-semibold fs-6 text-gray-400">Judul</div>
															<!--end::Label-->
														</div>
													</div>
												</div>
                                                        {{-- <div class="symbol-group symbol-hover mb-3">
                                                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                                <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View more users">+42</span>
                                                            </a>
                                                            </div> --}}

                                                            <div class="symbol-group symbol-hover mb-3<div class="symbol-group symbol-hover mb-3>
                                                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                                    <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View more users">File</span>
                                                                </a>
                                                                <!--end::All users-->
                                                            </div>
                                                            <!--end::Users-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Details-->



                <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-xl">
                        <!--begin::Modal content-->
                        <div class="modal-content rounded">
                            <!--begin::Modal header-->
                            <div class="modal-header justify-content-end border-0 pb-0">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                                <!--begin::Heading-->
                                <div class="mb-13 text-center">
                                    <h1 class="mb-3">Upgrade a Plan</h1>
                                    <div class="text-muted fw-semibold fs-5">If you need more info, please check
                                    <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Plans-->
                                <div class="d-flex flex-column">
                                    <!--begin::Nav group-->
                                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
                                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
                                    </div>
                                    <!--end::Nav group-->
                                    <!--begin::Row-->
                                    <div class="row mt-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-6 mb-10 mb-lg-0">
                                            <!--begin::Tabs-->
                                            <div class="nav flex-column">
                                                <!--begin::Tab link-->
                                                <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                    <!--end::Description-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                            <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                                                        </div>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
                                                            <div class="fw-semibold opacity-75">Best for startups</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Description-->
                                                    <!--begin::Price-->
                                                    <div class="ms-5">
                                                        <span class="mb-2">$</span>
                                                        <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                                                        <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span></span>
                                                    </div>
                                                    <!--end::Price-->
                                                </label>
                                                <!--end::Tab link-->
                                                <!--begin::Tab link-->
                                                <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                                    <!--end::Description-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                            <input class="form-check-input" type="radio" name="plan" value="advanced" />
                                                        </div>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
                                                            <div class="fw-semibold opacity-75">Best for 100+ team size</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Description-->
                                                    <!--begin::Price-->
                                                    <div class="ms-5">
                                                        <span class="mb-2">$</span>
                                                        <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                                                        <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span></span>
                                                    </div>
                                                    <!--end::Price-->
                                                </label>
                                                <!--end::Tab link-->
                                                <!--begin::Tab link-->
                                                <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                                    <!--end::Description-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                            <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                                                        </div>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
                                                            <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
                                                            <div class="fw-semibold opacity-75">Best value for 1000+ team</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Description-->
                                                    <!--begin::Price-->
                                                    <div class="ms-5">
                                                        <span class="mb-2">$</span>
                                                        <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                                                        <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span></span>
                                                    </div>
                                                    <!--end::Price-->
                                                </label>
                                                <!--end::Tab link-->
                                                <!--begin::Tab link-->
                                                <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                                                    <!--end::Description-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                            <input class="form-check-input" type="radio" name="plan" value="custom" />
                                                        </div>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
                                                            <div class="fw-semibold opacity-75">Requet a custom license</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Description-->
                                                    <!--begin::Price-->
                                                    <div class="ms-5">
                                                        <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                                    </div>
                                                    <!--end::Price-->
                                                </label>
                                                <!--end::Tab link-->
                                            </div>
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Tab content-->
                                            <div class="tab-content rounded h-100 bg-light p-10">
                                                <!--begin::Tab Pane-->
                                                <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                                    <!--begin::Heading-->
                                                    <div class="pb-5">
                                                        <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                                        <div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Body-->
                                                    <div class="pt-1">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center">
                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Tab Pane-->
                                                <!--begin::Tab Pane-->
                                                <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                                    <!--begin::Heading-->
                                                    <div class="pb-5">
                                                        <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                                        <div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Body-->
                                                    <div class="pt-1">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center">
                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Tab Pane-->
                                                <!--begin::Tab Pane-->
                                                <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                                    <!--begin::Heading-->
                                                    <div class="pb-5">
                                                        <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                                        <div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Body-->
                                                    <div class="pt-1">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Tab Pane-->
                                                <!--begin::Tab Pane-->
                                                <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                                                    <!--begin::Heading-->
                                                    <div class="pb-5">
                                                        <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                                        <div class="text-muted fw-semibold">Optimal for corporations</div>
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Body-->
                                                    <div class="pt-1">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center">
                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Tab Pane-->
                                            </div>
                                            <!--end::Tab content-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Plans-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-center flex-row-fluid pt-12">
                                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Upgrade Plan</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Upgrade plan-->
                <!--begin::Modal - Create Campaign-->
                <div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-fullscreen p-9">
                        <!--begin::Modal content-->
                        <div class="modal-content modal-rounded">
                            <!--begin::Modal header-->
                            <div class="modal-header py-7 d-flex justify-content-between">
                                <!--begin::Modal title-->
                                <h2>Create Campaign</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--begin::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y m-5">
                                <!--begin::Stepper-->
                                <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
                                    <!--begin::Nav-->
                                    <div class="stepper-nav justify-content-center py-2">
                                        <!--begin::Step 1-->
                                        <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                            <h3 class="stepper-title">Campaign Details</h3>
                                        </div>
                                        <!--end::Step 1-->
                                        <!--begin::Step 2-->
                                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                            <h3 class="stepper-title">Creative Uploads</h3>
                                        </div>
                                        <!--end::Step 2-->
                                        <!--begin::Step 3-->
                                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                            <h3 class="stepper-title">Audiences</h3>
                                        </div>
                                        <!--end::Step 3-->
                                        <!--begin::Step 4-->
                                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                            <h3 class="stepper-title">Budget Estimates</h3>
                                        </div>
                                        <!--end::Step 4-->
                                        <!--begin::Step 5-->
                                        <div class="stepper-item" data-kt-stepper-element="nav">
                                            <h3 class="stepper-title">Completed</h3>
                                        </div>
                                        <!--end::Step 5-->
                                    </div>
                                    <!--end::Nav-->
                                    <!--begin::Form-->
                                    <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-15">
                                                    <!--begin::Title-->
                                                    <h2 class="fw-bold d-flex align-items-center text-dark">Setup Campaign Details
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Campaign name will be used as reference within your campaign reports"></i></h2>
                                                    <!--end::Title-->
                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                                                    <a href="#" class="link-primary fw-bold">Help Page</a>.</div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required form-label mb-3">Campaign Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="d-block fw-semibold fs-6 mb-5">
                                                        <span class="required">Company Logo</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="E.g. Select a logo to represent the company that's running the campaign."></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Image input placeholder-->
                                                    <style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                                                    <!--end::Image input placeholder-->
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder" data-kt-image-input="true">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-5">Campaign Goal</label>
                                                    <!--end::Label-->
                                                    <!--begin::Roles-->
                                                    <!--begin::Input row-->
                                                    <div class="d-flex fv-row">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                                <div class="fw-bold text-gray-800">Get more visitors</div>
                                                                <div class="text-gray-600">Increase impression traffic onto the platform</div>
                                                            </label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Radio-->
                                                    </div>
                                                    <!--end::Input row-->
                                                    <div class='separator separator-dashed my-5'></div>
                                                    <!--begin::Input row-->
                                                    <div class="d-flex fv-row">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                                <div class="fw-bold text-gray-800">Get more messages on chat</div>
                                                                <div class="text-gray-600">Increase community interaction and communication</div>
                                                            </label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Radio-->
                                                    </div>
                                                    <!--end::Input row-->
                                                    <div class='separator separator-dashed my-5'></div>
                                                    <!--begin::Input row-->
                                                    <div class="d-flex fv-row">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                                <div class="fw-bold text-gray-800">Get more calls</div>
                                                                <div class="text-gray-600">Boost telecommunication feedback to provide precise and accurate information</div>
                                                            </label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Radio-->
                                                    </div>
                                                    <!--end::Input row-->
                                                    <div class='separator separator-dashed my-5'></div>
                                                    <!--begin::Input row-->
                                                    <div class="d-flex fv-row">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                                <div class="fw-bold text-gray-800">Get more likes</div>
                                                                <div class="text-gray-600">Increase positive interactivity on social media platforms</div>
                                                            </label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Radio-->
                                                    </div>
                                                    <!--end::Input row-->
                                                    <div class='separator separator-dashed my-5'></div>
                                                    <!--begin::Input row-->
                                                    <div class="d-flex fv-row">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                                <div class="fw-bold text-gray-800">Lead generation</div>
                                                                <div class="text-gray-600">Collect contact information for potential customers</div>
                                                            </label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Radio-->
                                                    </div>
                                                    <!--end::Input row-->
                                                    <!--end::Roles-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 1-->
                                        <!--begin::Step 2-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-12">
                                                    <!--begin::Title-->
                                                    <h1 class="fw-bold text-dark">Upload Files</h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                                    <a href="#" class="link-primary">Campaign Guidelines</a></div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Dropzone-->
                                                    <div class="dropzone" id="kt_modal_create_campaign_files_upload">
                                                        <!--begin::Message-->
                                                        <div class="dz-message needsclick">
                                                            <!--begin::Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
                                                            <span class="svg-icon svg-icon-3hx svg-icon-primary">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z" fill="currentColor" />
                                                                    <path d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z" fill="currentColor" />
                                                                    <path d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z" fill="currentColor" />
                                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-4">
                                                                <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files here or click to upload.</h3>
                                                                <span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                    </div>
                                                    <!--end::Dropzone-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
                                                    <!--End::Label-->
                                                    <!--begin::Files-->
                                                    <div class="mh-300px scroll-y me-n7 pe-7">
                                                        <!--begin::File-->
                                                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px">
                                                                    <img src="assets/media/svg/files/pdf.svg" alt="icon" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product Specifications</a>
                                                                    <div class="fw-semibold text-muted">230kb</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--begin::Menu-->
                                                            <div class="min-w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                                    <option></option>
                                                                    <option value="1">Remove</option>
                                                                    <option value="2">Modify</option>
                                                                    <option value="3">Select</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::File-->
                                                        <!--begin::File-->
                                                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px">
                                                                    <img src="assets/media/svg/files/tif.svg" alt="icon" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Creative Poster</a>
                                                                    <div class="fw-semibold text-muted">2.4mb</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--begin::Menu-->
                                                            <div class="min-w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                                    <option></option>
                                                                    <option value="1">Remove</option>
                                                                    <option value="2">Modify</option>
                                                                    <option value="3">Select</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::File-->
                                                        <!--begin::File-->
                                                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px">
                                                                    <img src="assets/media/svg/files/folder-document.svg" alt="icon" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Landing Page Source</a>
                                                                    <div class="fw-semibold text-muted">1.12mb</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--begin::Menu-->
                                                            <div class="min-w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                                    <option></option>
                                                                    <option value="1">Remove</option>
                                                                    <option value="2">Modify</option>
                                                                    <option value="3">Select</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::File-->
                                                        <!--begin::File-->
                                                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px">
                                                                    <img src="assets/media/svg/files/css.svg" alt="icon" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing Page Styling</a>
                                                                    <div class="fw-semibold text-muted">85kb</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--begin::Menu-->
                                                            <div class="min-w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                                    <option></option>
                                                                    <option value="1">Remove</option>
                                                                    <option value="2">Modify</option>
                                                                    <option value="3">Select</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::File-->
                                                        <!--begin::File-->
                                                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px">
                                                                    <img src="assets/media/svg/files/ai.svg" alt="icon" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design Source Files</a>
                                                                    <div class="fw-semibold text-muted">48mb</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--begin::Menu-->
                                                            <div class="min-w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                                    <option></option>
                                                                    <option value="1">Remove</option>
                                                                    <option value="2">Modify</option>
                                                                    <option value="3">Select</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::File-->
                                                        <!--begin::File-->
                                                        <div class="d-flex flex-stack py-4">
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px">
                                                                    <img src="assets/media/svg/files/doc.svg" alt="icon" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Plan Document</a>
                                                                    <div class="fw-semibold text-muted">27kb</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--begin::Menu-->
                                                            <div class="min-w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                                    <option></option>
                                                                    <option value="1">Remove</option>
                                                                    <option value="2">Modify</option>
                                                                    <option value="3">Select</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::File-->
                                                    </div>
                                                    <!--end::Files-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 2-->
                                        <!--begin::Step 3-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-12">
                                                    <!--begin::Title-->
                                                    <h1 class="fw-bold text-dark">Configure Audiences</h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                                    <a href="#" class="link-primary">Campaign Guidelines</a></div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold mb-2">Gender
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Show your ads to either men or women, or select 'All' for both"></i></label>
                                                    <!--End::Label-->
                                                    <!--begin::Row-->
                                                    <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio" name="campaign_gender" value="1" checked="checked" />
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span class="fs-4 fw-bold text-gray-800 d-block">All</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio" name="campaign_gender" value="2" />
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio" name="campaign_gender" value="3" />
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold mb-2">Age
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select the minimum and maximum age of the people who will find your ad relevant."></i></label>
                                                    <!--End::Label-->
                                                    <!--begin::Slider-->
                                                    <div class="d-flex flex-stack">
                                                        <div id="kt_modal_create_campaign_age_min" class="fs-7 fw-semibold text-muted"></div>
                                                        <div id="kt_modal_create_campaign_age_slider" class="noUi-sm w-100 ms-5 me-8"></div>
                                                        <div id="kt_modal_create_campaign_age_max" class="fs-7 fw-semibold text-muted"></div>
                                                    </div>
                                                    <!--end::Slider-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold mb-2">Location
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter one or more location points for more specific targeting."></i></label>
                                                    <!--End::Label-->
                                                    <!--begin::Tagify-->
                                                    <input class="form-control d-flex align-items-center" value="" id="kt_modal_create_campaign_location" data-kt-flags-path="assets/media/flags/" />
                                                    <!--end::Tagify-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 3-->
                                        <!--begin::Step 4-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-12">
                                                    <!--begin::Title-->
                                                    <h1 class="fw-bold text-dark">Budget Estimates</h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                                    <a href="#" class="link-primary">Campaign Guidelines</a></div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold mb-2">Campaign Duration
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Choose how long you want your ad to run for"></i></label>
                                                    <!--end::Label-->
                                                    <!--begin::Duration option-->
                                                    <div class="d-flex gap-9 mb-7">
                                                        <!--begin::Button-->
                                                        <button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary active" id="kt_modal_create_campaign_duration_all">Continuous duration
                                                        <br />
                                                        <span class="fs-7">Your ad will run continuously for a daily budget.</span></button>
                                                        <!--end::Button-->
                                                        <!--begin::Button-->
                                                        <button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default" id="kt_modal_create_campaign_duration_fixed">Fixed duration
                                                        <br />
                                                        <span class="fs-7">Your ad will run on the specified dates only.</span></button>
                                                        <!--end::Button-->
                                                    </div>
                                                    <!--end::Duration option-->
                                                    <!--begin::Datepicker-->
                                                    <input class="form-control form-control-solid d-none" placeholder="Pick date & time" id="kt_modal_create_campaign_datepicker" />
                                                    <!--end::Datepicker-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold mb-2">Daily Budget
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Choose the budget allocated for each day. Higher budget will generate better results"></i></label>
                                                    <!--end::Label-->
                                                    <!--begin::Slider-->
                                                    <div class="d-flex flex-column text-center">
                                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                                            <span class="fw-bold fs-4 mt-1 me-2">$</span>
                                                            <span class="fw-bold fs-3x" id="kt_modal_create_campaign_budget_label"></span>
                                                            <span class="fw-bold fs-3x">.00</span>
                                                        </div>
                                                        <div id="kt_modal_create_campaign_budget_slider" class="noUi-sm"></div>
                                                    </div>
                                                    <!--end::Slider-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 4-->
                                        <!--begin::Step 5-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-12 text-center">
                                                    <!--begin::Title-->
                                                    <h1 class="fw-bold text-dark">Campaign Created!</h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="fw-semibold text-muted fs-4">You will receive an email with with the summary of your newly created campaign!</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Actions-->
                                                <div class="d-flex flex-center pb-20">
                                                    <button id="kt_modal_create_campaign_create_new" type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Campaign</button>
                                                    <a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Campaign</a>
                                                </div>
                                                <!--end::Actions-->
                                                <!--begin::Illustration-->
                                                <div class="text-center px-4">
                                                    <img src="assets/media/illustrations/sigma-1/9.png" alt="" class="mww-100 mh-350px" />
                                                </div>
                                                <!--end::Illustration-->
                                            </div>
                                        </div>
                                        <!--end::Step 5-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack pt-10">
                                            <!--begin::Wrapper-->
                                            <div class="me-2">
                                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                                <span class="svg-icon svg-icon-3 me-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                                                        <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Back</button>
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Wrapper-->
                                            <div>
                                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                                    <span class="indicator-label">Submit
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon--></span>
                                                    <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-1 me-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--></button>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Stepper-->
                            </div>
                            <!--begin::Modal body-->
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header pb-0 border-0 justify-content-end">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--begin::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                <!--begin::Heading-->
                                <div class="text-center mb-13">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">File Users</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5">If you need more info, please check out our
                                    <a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Users-->
                                <div class="mb-15">
                                    <!--begin::List-->
                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->

                                                <!--end::Avatar-->
                                                <!--begin::Details-->





                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/files/fil003.svg-->
                                                    <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="currentColor" />
                                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <div class="card card-bordered">
                                                        <div class="card-body">
                                                            <!--begin::Row-->
                                                            <div class="d-flex align-items-center flex-wrap">
                                                                <!--begin::Input-->
                                                                <div id="kt_clipboard_4" class="me-5">This is a sample static text string to copy!</div>
                                                                <!--end::Input-->

                                                                <!--begin::Button-->
                                                                <button class="btn btn-icon btn-sm btn-light" data-clipboard-target="#kt_clipboard_4">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                                                </button>
                                                                <!--end::Button-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                        {{-- <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <!--begin::Svg Icon | path: icons/duotune/coding/cod007.svg-->
                                                            <span class="svg-icon svg-icon-5 m-0">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z" fill="currentColor" />
                                                                    <path d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button> --}}
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
                                                            <!--begin::Card-->
                                                            <div class="card card-flush">
                                                                <div class="card-body p-5">
                                                                    <!--begin::Loader-->
                                                                    <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                                                                        <!--begin::Spinner-->
                                                                        <div class="me-5" data-kt-indicator="on">
                                                                            <span class="indicator-progress">
                                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Spinner-->
                                                                        <!--begin::Label-->
                                                                        <div class="fs-6 text-dark">Generating Share Link...</div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Loader-->
                                                                    <!--begin::Link-->
                                                                    <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                                                                        <div class="d-flex mb-3">
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
                                                                            <span class="svg-icon svg-icon-2 svg-icon-success me-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <div class="fs-6 text-dark">Share Link Generated</div>
                                                                        </div>
                                                                        <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                                                                        <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
                                                                        <a href="../../demo10/dist/apps/file-manager/settings/.html" class="ms-2">Change permissions</a></div>
                                                                    </div>
                                                                    <!--end::Link-->
                                                                </div>
                                                            </div>
                                                            <!--end::Card-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                    </div>
                                    <!--end::List-->
                                </div>
                                <!--end::Users-->
                                <!--begin::Notice-->

                            </div>

											</div>
										</div>

										<!--begin::Nav-->
										{{-- <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold"> --}}
											<!--begin::Nav item-->
											{{-- <li class="nav-item">
												<a class="nav-link text-active-primary py-5 me-6 active" href="../../demo10/dist/apps/projects/project.html">Overview</a>
											</li> --}}
											<!--end::Nav item-->
											<!--begin::Nav item-->
											{{-- <li class="nav-item">
												<a class="nav-link text-active-primary py-5 me-6" href="../../demo10/dist/apps/projects/targets.html">Targets</a>
											</li> --}}
											<!--end::Nav item-->
											<!--begin::Nav item-->
											{{-- <li class="nav-item">
												<a class="nav-link text-active-primary py-5 me-6" href="../../demo10/dist/apps/projects/budget.html">Budget</a>
											</li> --}}
											<!--end::Nav item-->
											<!--begin::Nav item-->
											{{-- <li class="nav-item">
												<a class="nav-link text-active-primary py-5 me-6" href="../../demo10/dist/apps/projects/users.html">Users</a>
											</li> --}}
											<!--end::Nav item-->
											<!--begin::Nav item-->
											{{-- <li class="nav-item">
												<a class="nav-link text-active-primary py-5 me-6" href="../../demo10/dist/apps/projects/files.html">Files</a>
											</li> --}}
											<!--end::Nav item-->
											<!--begin::Nav item-->
											{{-- <li class="nav-item">
												<a class="nav-link text-active-primary py-5 me-6" href="../../demo10/dist/apps/projects/activity.html">Activity</a>
											</li> --}}
											<!--end::Nav item-->
											<!--begin::Nav item-->
											{{-- <li class="nav-item">
												<a class="nav-link text-active-primary py-5 me-6 active" href="../../demo10/dist/apps/projects/settings.html">Settings</a>
											</li> --}}
											<!--end::Nav item-->
										{{-- </ul> --}}
										<!--end::Nav-->
									</div>
								</div>
								<!--end::Navbar-->
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header">
										<!--begin::Card title-->
										<div class="card-title fs-3 fw-bold">Detail Pesanan</div>
										<!--end::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Form-->
									<form id="kt_project_settings_form" class="form">
										<!--begin::Card body-->
										<div class="card-body p-9">
											<!--begin::Row-->
											<div class="row mb-5">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-semibold mt-2 mb-3">Media</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->

													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url{{ asset('assets/300-3.jpg') }}">
														<!--begin::Preview existing avatar-->
                                                        @if ($pesan->MEDIA === 'youtube')
                                                        <img src="{{ asset('assets/youtube.png') }}" alt="image" class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%;"/>

                                                        @elseif ($pesan->MEDIA === 'instagram')
                                                        <img src="{{ asset('assets/instagram.png') }}" alt="image" class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%;" />

                                                        @elseif ($pesan->MEDIA === 'tiktok')
                                                        <img src="{{ asset('assets/tiktok.png') }}" alt="image"  class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%;" />

                                                        @elseif ($pesan->MEDIA === 'spotify')
                                                        <img src="{{ asset('assets/spotify.png') }}" alt="image"  class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%;" />

                                                        @endif
														{{-- <div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url{{ asset('assets/300-3.jpg') }}"></div> --}}

														<!--end::Preview existing avatar-->
														<!--begin::Label-->
														{{-- <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
															<i class="bi bi-pencil-fill fs-7"></i>
															<!--begin::Inputs-->
															<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="avatar_remove" />
															<!--end::Inputs-->
														</label> --}}
														<!--end::Label-->
														<!--begin::Cancel-->
														{{-- <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
															<i class="bi bi-x fs-2"></i>
														</span> --}}
														<!--end::Cancel-->
														<!--begin::Remove-->
														{{-- <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
															<i class="bi bi-x fs-2"></i>
														</span> --}}
														<!--end::Remove-->
													</div>
													<!--end::Image input-->
													<!--begin::Hint-->
													{{-- <div class="form-text">Allowed file types: png, jpg, jpeg.</div> --}}
													<!--end::Hint-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-semibold mt-2 mb-3">Asal Instansi</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9 fv-row">
													<input disabled type="text" class="form-control form-control-solid" name="name" value="{{ $pesan->ASAL_INSTANSI }}" />
												</div>
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-semibold mt-2 mb-3">Jenis Konten</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9 fv-row">
													<input disabled type="text" class="form-control form-control-solid" name="type" value="{{ $pesan->JENIS_KONTEN }}" />
												</div>
											</div>
											<!--end::Row-->
                                            <div class="row mb-8">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-semibold mt-2 mb-3">Tanggal Pelaksanaan</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9 fv-row">

														<!--end::Svg Icon-->
														<input disabled class="form-control form-control-solid ps-12" name="date" placeholder="{{ $pesan->TGL_UPLOAD }}" id="kt_datepicker_1" />

												</div>
												<!--begin::Col-->
											</div>
											<!--begin::Row-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-semibold mt-2 mb-3">Description</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9 fv-row">
													<textarea disabled name="description" class="form-control form-control-solid h-100px">{{ $pesan->DESKRIPSI }}</textarea>
												</div>
												<!--begin::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
                                            <div class="row mb-8">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-semibold mt-2 mb-3">Link Poster</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9 fv-row">
													<input disabled type="text" class="form-control form-control-solid" name="type" value="{{ $pesan->LINK_POSTER }}" />
												</div>
											</div>

											{{-- <div class="row mb-8">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-semibold mt-2 mb-3">Notifications</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9">
													<div class="d-flex fw-semibold h-100">
														<div class="form-check form-check-custom form-check-solid me-9">
															<input class="form-check-input" type="checkbox" value="" id="email" />
															<label class="form-check-label ms-3" for="email">Email</label>
														</div>
														<div class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" id="phone" checked="checked" />
															<label class="form-check-label ms-3" for="phone">Phone</label>
														</div>
													</div>
												</div>
												<!--end::Col-->
											</div> --}}
											<!--end::Row-->
											<!--begin::Row-->
											{{-- <div class="row">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-semibold mt-2 mb-3">Status</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9">
													<div class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="" id="status" name="status" checked="checked" />
														<label class="form-check-label fw-semibold text-gray-400 ms-3" for="status">Active</label>
													</div>
												</div>
												<!--end::Col-->
											</div> --}}
											<!--end::Row-->
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->

										<!--end::Card footer-->
									</form>
									<!--end:Form-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>

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
		<!--end::Javascript-->
        <script>


// Select elements
const target = document.getElementById('kt_clipboard_4');
const button = target.nextElementSibling;

// Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
clipboard = new ClipboardJS(button, {
    target: target,
    text: function () {
        return target.innerHTML;
    }
});

// Success action handler
clipboard.on('success', function (e) {
    var checkIcon = button.querySelector('.bi.bi-check');
    var svgIcon = button.querySelector('.svg-icon');

    // Exit check icon when already showing
    if (checkIcon) {
        return;
    }

    // Create check icon
    checkIcon = document.createElement('i');
    checkIcon.classList.add('bi');
    checkIcon.classList.add('bi-check');
    checkIcon.classList.add('fs-2x');

    // Append check icon
    button.appendChild(checkIcon);

    // Highlight target
    const classes = ['text-success', 'fw-boldest'];
    target.classList.add(...classes);

    // Highlight button
    button.classList.add('btn-success');

    // Hide copy icon
    svgIcon.classList.add('d-none');

    // Revert button label after 3 seconds
    setTimeout(function () {
        // Remove check icon
        svgIcon.classList.remove('d-none');

        // Revert icon
        button.removeChild(checkIcon);

        // Remove target highlight
        target.classList.remove(...classes);

        // Remove button highlight
        button.classList.remove('btn-success');
    }, 3000)
});

</script>

	</body>
	<!--end::Body-->
</html>
@endsection
