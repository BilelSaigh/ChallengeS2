<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        <div id="kt_app_header" class="app-header">
            <!--begin::Header primary-->
            <div class="app-header-primary" data-kt-sticky="true" data-kt-sticky-name="app-header-primary-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}">
                <!--begin::Header primary container-->
                <div class="app-container container-xxl d-flex align-items-stretch justify-content-between">
                    <!--begin::Logo and search-->
                    <div class="d-flex flex-grow-1 flex-lg-grow-0">
                        <!--begin::Logo wrapper-->
                        <div class="d-flex align-items-center" id="kt_app_header_logo_wrapper">
                            <!--begin::Header toggle-->
                            <button class="d-lg-none btn btn-icon btn-color-white btn-active-color-primary ms-n4 me-sm-2" id="kt_app_header_menu_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                            <!--end::Header toggle-->
                            <!--begin::Logo-->
                            <a href="../dist/index.html" class="d-flex align-items-center mb-1 mb-lg-0 pt-lg-1">
                                <img alt="Logo" src="assets/media/logos/default-small.svg" class="d-block d-sm-none" />
                                <img alt="Logo" src="assets/media/logos/default.svg" class="d-none d-sm-block" />
                            </a>
                            <!--end::Logo-->
                        </div>
                        <!--end::Logo wrapper-->
                    </div>
                    <!--end::Logo and search-->
                    <!--begin::Navbar-->
                    <div class="app-navbar">
                        <!--begin::Notifications-->
                        <div class="app-navbar-item ms-1">
                            <!--begin::Menu- wrapper-->
                            <div class="btn btn-icon btn-color-white btn-active-color-primary" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-graph-3 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                                    <!--begin::Title-->
                                    <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                                        <span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
                                    <!--end::Title-->
                                    <!--begin::Tabs-->
                                    <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                        </li>
                                    </ul>
                                    <!--end::Tabs-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-325px my-5 px-8">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-duotone ki-abstract-28 fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                                                        <div class="text-gray-400 fs-7">Phase 1 development</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">1 hr</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-danger">
																	<i class="ki-duotone ki-information fs-2 text-danger">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                                                        <div class="text-gray-400 fs-7">Confidential staff documents</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-warning">
																	<i class="ki-duotone ki-briefcase fs-2 text-warning">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                                                        <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">5 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-success">
																	<i class="ki-duotone ki-abstract-12 fs-2 text-success">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                                                        <div class="text-gray-400 fs-7">New frontend admin theme</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 days</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-duotone ki-colors-square fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                                                        <div class="text-gray-400 fs-7">Product launch status update</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">21 Jan</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-info">
																	<i class="ki-duotone ki-picture fs-2 text-info"></i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
                                                        <div class="text-gray-400 fs-7">Collection of banner images</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">21 Jan</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-warning">
																	<i class="ki-duotone ki-color-swatch fs-2 text-warning">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																		<span class="path6"></span>
																		<span class="path7"></span>
																		<span class="path8"></span>
																		<span class="path9"></span>
																		<span class="path10"></span>
																		<span class="path11"></span>
																		<span class="path12"></span>
																		<span class="path13"></span>
																		<span class="path14"></span>
																		<span class="path15"></span>
																		<span class="path16"></span>
																		<span class="path17"></span>
																		<span class="path18"></span>
																		<span class="path19"></span>
																		<span class="path20"></span>
																		<span class="path21"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
                                                        <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">20 March</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                        <!--begin::View more-->
                                        <div class="py-3 text-center border-top">
                                            <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                <i class="ki-duotone ki-arrow-right fs-5">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i></a>
                                        </div>
                                        <!--end::View more-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column px-9">
                                            <!--begin::Section-->
                                            <div class="pt-10 pb-0">
                                                <!--begin::Title-->
                                                <h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
                                                <!--end::Text-->
                                                <!--begin::Action-->
                                                <div class="text-center mt-5 mb-9">
                                                    <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4">
                                                <img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/1.png" />
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-325px my-5 px-8">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Just now</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">5 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 days</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">1 week</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Mar 5</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">May 15</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Apr 3</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Jun 30</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Jul 10</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Sep 10</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Dec 10</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                        <!--begin::View more-->
                                        <div class="py-3 text-center border-top">
                                            <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                <i class="ki-duotone ki-arrow-right fs-5">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i></a>
                                        </div>
                                        <!--end::View more-->
                                    </div>
                                    <!--end::Tab panel-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Notifications-->
                        <!--begin::Quick links-->
                        <div class="app-navbar-item ms-1">
                            <!--begin::Menu- wrapper-->
                            <div class="btn btn-icon btn-color-white btn-active-color-primary" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-notification-status fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </div>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                                    <!--begin::Title-->
                                    <h3 class="text-white fw-semibold mb-3">Quick Links</h3>
                                    <!--end::Title-->
                                    <!--begin::Status-->
                                    <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
                                    <!--end::Status-->
                                </div>
                                <!--end::Heading-->
                                <!--begin:Nav-->
                                <div class="row g-0">
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                            <i class="ki-duotone ki-dollar fs-3x text-primary mb-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
                                            <span class="fs-7 text-gray-400">eCommerce</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                            <i class="ki-duotone ki-sms fs-3x text-primary mb-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
                                            <span class="fs-7 text-gray-400">Console</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../dist/apps/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                            <i class="ki-duotone ki-abstract-41 fs-3x text-primary mb-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
                                            <span class="fs-7 text-gray-400">Pending Tasks</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                            <i class="ki-duotone ki-briefcase fs-3x text-primary mb-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
                                            <span class="fs-7 text-gray-400">Latest cases</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                </div>
                                <!--end:Nav-->
                                <!--begin::View more-->
                                <div class="py-2 text-center border-top">
                                    <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                        <i class="ki-duotone ki-arrow-right fs-5">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i></a>
                                </div>
                                <!--end::View more-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Quick links-->
                        <!--begin::Chat-->
                        <div class="app-navbar-item ms-1">
                            <!--begin::Menu wrapper-->
                            <div class="btn btn-icon btn-color-white btn-active-color-primary" id="kt_drawer_chat_toggle">
                                <i class="ki-duotone ki-abstract-36 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Chat-->
                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-3 me-6" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <img class="symbol symbol-35px" src="assets/media/avatars/300-3.jpg" alt="user" />
                            </div>
                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="assets/media/avatars/300-3.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">Max Smith
                                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
                                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="../dist/account/overview.html" class="menu-link px-5">My Profile</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="../dist/apps/projects/list.html" class="menu-link px-5">
                                        <span class="menu-text">My Projects</span>
                                        <span class="menu-badge">
													<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
												</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title">My Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Referrals</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Billing</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Payments</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link d-flex flex-stack px-5">Statements
                                                <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
														<i class="ki-duotone ki-information-5 fs-5">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                    <span class="form-check-label text-muted fs-7">Notifications</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link px-5">My Statements</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Mode
												<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
													<i class="ki-duotone ki-night-day theme-light-show fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
													<i class="ki-duotone ki-moon theme-dark-show fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span></span>
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-night-day fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
																<span class="path7"></span>
																<span class="path8"></span>
																<span class="path9"></span>
																<span class="path10"></span>
															</i>
														</span>
                                                <span class="menu-title">Light</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-moon fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                                <span class="menu-title">Dark</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-screen fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
                                                <span class="menu-title">System</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Language
												<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
												<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../dist/account/settings.html" class="menu-link d-flex px-5 active">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
													</span>English</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
													</span>Spanish</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
													</span>German</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
													</span>Japanese</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
													</span>French</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5 my-1">
                                    <a href="../dist/account/settings.html" class="menu-link px-5">Account Settings</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="../dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-flex btn-center btn-success btn-sm align-self-center p-3 px-lg-4 h-35px" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                            <i class="ki-duotone ki-plus-square fs-2 p-0 m-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                            <span class="ms-2 d-none d-lg-block">Invite</span>
                        </a>
                        <!--end::Primary button-->
                        <!--begin::Header menu toggle-->
                        <!--end::Header menu toggle-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header primary container-->
            </div>
            <!--end::Header primary-->
            <!--begin::Header secondary-->
            <div class="app-header-secondary">
                <!--begin::Header secondary container-->
                <div class="app-container container-xxl d-flex align-items-stretch">
                    <!--begin::Menu wrapper-->
                    <div class="app-header-menu app-header-mobile-drawer align-items-stretch flex-grow-1" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                        <!--begin::Menu-->
                        <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">Dashboards</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-600px">
                                    <!--begin:Dashboards menu-->
                                    <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible py-6" data-kt-menu-dismiss="true">
                                        <!--begin:Row-->
                                        <div class="row px-5">
                                            <!--begin:Col-->
                                            <div class="col-lg-6 py-1">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../dist/index.html" class="menu-link">
																<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																	<i class="ki-duotone ki-basket text-primary fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
                                                        <span class="d-flex flex-column">
																	<span class="d-flex align-items-center fs-6 fw-semibold text-gray-800">Default</span>
																	<span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
																</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 py-1">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="#" class="menu-link">
																<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																	<i class="ki-duotone ki-abstract-44 text-info fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                        <span class="d-flex flex-column">
																	<span class="d-flex align-items-center fs-6 fw-semibold text-gray-800">Projects
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
																	<span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
																</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 py-1">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="#" class="menu-link">
																<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																	<i class="ki-duotone ki-element-11 text-danger fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
                                                        <span class="d-flex flex-column">
																	<span class="d-flex align-items-center fs-6 fw-semibold text-gray-800">eCommerce
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
																	<span class="fs-7 fw-semibold text-muted">Sales reports</span>
																</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 py-1">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="#" class="menu-link">
																<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																	<i class="ki-duotone ki-chart-simple text-dark fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
                                                        <span class="d-flex flex-column">
																	<span class="d-flex align-items-center fs-6 fw-semibold text-gray-800">Marketing
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
																	<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 py-1">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="#" class="menu-link">
																<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																	<i class="ki-duotone ki-abstract-39 text-success fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                        <span class="d-flex flex-column">
																	<span class="d-flex align-items-center fs-6 fw-semibold text-gray-800">Social
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
																	<span class="fs-7 fw-semibold text-muted">Feeds & Activities</span>
																</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 py-1">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="#" class="menu-link">
																<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																	<i class="ki-duotone ki-switch text-warning fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                        <span class="d-flex flex-column">
																	<span class="d-flex align-items-center fs-6 fw-semibold text-gray-800">Bidding
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
																	<span class="fs-7 fw-semibold text-muted">Deals & stock exchange</span>
																</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 py-1">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="#" class="menu-link">
																<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																	<i class="ki-duotone ki-color-swatch text-success fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																		<span class="path6"></span>
																		<span class="path7"></span>
																		<span class="path8"></span>
																		<span class="path9"></span>
																		<span class="path10"></span>
																		<span class="path11"></span>
																		<span class="path12"></span>
																		<span class="path13"></span>
																		<span class="path14"></span>
																		<span class="path15"></span>
																		<span class="path16"></span>
																		<span class="path17"></span>
																		<span class="path18"></span>
																		<span class="path19"></span>
																		<span class="path20"></span>
																		<span class="path21"></span>
																	</i>
																</span>
                                                        <span class="d-flex flex-column">
																	<span class="d-flex align-items-center fs-6 fw-semibold text-gray-800">Online Courses
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
																	<span class="fs-7 fw-semibold text-muted">Student progress</span>
																</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 py-1">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="#" class="menu-link">
																<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																	<i class="ki-duotone ki-truck text-info fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																	</i>
																</span>
                                                        <span class="d-flex flex-column">
																	<span class="d-flex align-items-center fs-6 fw-semibold text-gray-800">Logistics
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
																	<span class="fs-7 fw-semibold text-muted">Shipments and delivery</span>
																</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Dashboards menu-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">Account</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../dist/account/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Overview</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link active" href="../dist/account/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="#" data-kt-page="pro">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Security
													<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="#" data-kt-page="pro">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Activity
													<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="#" data-kt-page="pro">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Billing
													<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="#" data-kt-page="pro">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Statements
													<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="#" data-kt-page="pro">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Referrals
													<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="#" data-kt-page="pro">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">API Keys
													<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="#" data-kt-page="pro">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Logs
													<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">Pages</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../dist/pages/about.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">About</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../dist/pages/team.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Our Team</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../dist/pages/faq.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">FAQ</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../dist/pages/contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Contact Us</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../dist/pages/pricing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Pricing</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../dist/pages/licenses.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Licenses</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../dist/pages/sitemap.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">Sitemap</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">Authentication</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-lg-700px">
                                    <!--begin:Pages menu-->
                                    <div class="menu-state-bg p-4 p-lg-8">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                <!--begin:Menu section-->
                                                <div class="mb-0">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Login</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../dist/authentication/sign-in/basic.html" class="menu-link">
                                                            <span class="menu-title">Sign In Basic</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../dist/authentication/sign-up/basic.html" class="menu-link">
                                                            <span class="menu-title">Sign Up Basic</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Sign Up Multi-steps
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../dist/authentication/sign-in/password-reset.html" class="menu-link">
                                                            <span class="menu-title">Password Reset</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="../dist/authentication/sign-in/new-password.html" class="menu-link">
                                                            <span class="menu-title">New Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Free Trial
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                <!--begin:Menu section-->
                                                <div class="mb-0">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Coming Soon
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Welcome Message
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Verify Email
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Password&nbsp;Confirmation
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Account Deactivation
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Error 404
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Error 500
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                <!--begin:Menu section-->
                                                <div class="mb-0">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Verify Email
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Account Invitation
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Password Reset
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="#" class="menu-link">
																	<span class="menu-title">Password Changed
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Pages menu-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">Apps</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-rocket fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Projects</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../dist/apps/projects/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">My Projects</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">View Project
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Targets
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Budget
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Users
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Files
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Activity
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Settings
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-handcart fs-2"></i>
													</span>
													<span class="menu-title">eCommerce</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Catalog</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../dist/apps/ecommerce/catalog/products.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Products</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Categories
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Add Product
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Edit Product
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Add Category
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Edit Category
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sales</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Orders Listing
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Order Details
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Add Order
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Edit Order
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customers</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../dist/apps/ecommerce/customers/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Customers Listing</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Customers Details
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reports</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Products Viewed
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Sales
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Returns
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Customer Orders
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Shipping
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Settings
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-shield-tick fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">User Management</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../dist/apps/user-management/users/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Users List</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">View User
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Roles</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">Roles List
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="#" data-kt-page="pro">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">View Roles
																	<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Permissions
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-file-added fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">File Manager</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Folders
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Files
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Blank Directory
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Settings
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-message-text-2 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
													<span class="menu-title">Chat</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Private Chat
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Group Chat
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="#" data-kt-page="pro">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">Drawer Chat
															<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="#" data-kt-page="pro">
													<span class="menu-icon">
														<i class="ki-duotone ki-calendar-8 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
														</i>
													</span>
                                            <span class="menu-title">Calendar
													<span class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1" data-bs-toggle="tooltip" title="Upgrade to Pro to get this">Pro</span></span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">Help</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="https://preview.keenthemes.com/html/oswald-html-pro/docs/base/utilities" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-icon">
														<i class="ki-duotone ki-element-8 fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                            <span class="menu-title">Components</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="https://preview.keenthemes.com/html/oswald-html-pro/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-icon">
														<i class="ki-duotone ki-abstract-26 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                            <span class="menu-title">Documentation</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="https://preview.keenthemes.com/oswald-html-free/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-icon">
														<i class="ki-duotone ki-switch fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                            <span class="menu-title">Layout Builder</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="https://preview.keenthemes.com/html/oswald-html-pro/docs/getting-started/changelog" target="_blank">
													<span class="menu-icon">
														<i class="ki-duotone ki-code fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
                                            <span class="menu-title">Changelog</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                    <!--begin::Search-->
                    <div class="d-flex align-items-center w-100 w-lg-225px pt-5 pt-lg-0">
                        <!--begin::Search-->
                        <div id="kt_header_search" class="header-search d-flex align-items-center w-100 w-lg-225px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                            <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                            <form data-kt-search-element="form" class="w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                <!--begin::Hidden input(Added to disable form autocomplete)-->
                                <input type="hidden" />
                                <!--end::Hidden input-->
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Input-->
                                <input type="text" class="search-input form-control ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                <!--end::Input-->
                                <!--begin::Spinner-->
                                <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
											<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
										</span>
                                <!--end::Spinner-->
                                <!--begin::Reset-->
                                <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
											<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
                                <!--end::Reset-->
                            </form>
                            <!--end::Form-->
                            <!--begin::Menu-->
                            <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
                                <!--begin::Wrapper-->
                                <div data-kt-search-element="wrapper">
                                    <!--begin::Recently viewed-->
                                    <div data-kt-search-element="results" class="d-none">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-200px mh-lg-350px">
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-6.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Karina Clark</span>
                                                    <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-2.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                    <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-9.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Ana Clark</span>
                                                    <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-14.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                    <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-11.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                    <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                    <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                    <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                    <span class="fs-7 fw-semibold text-muted">Administration</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                    <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                    <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-duotone ki-notepad fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																	<span class="path5"></span>
																</i>
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                    <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-duotone ki-frame fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                    <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-duotone ki-message-text-2 fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                                                    <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-duotone ki-profile-circle fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                    <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Recently viewed-->
                                    <!--begin::Recently viewed-->
                                    <div class="" data-kt-search-element="main">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-stack fw-semibold mb-4">
                                            <!--begin::Label-->
                                            <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                            <!--end::Label-->
                                            <!--begin::Toolbar-->
                                            <div class="d-flex" data-kt-search-element="toolbar">
                                                <!--begin::Preferences toggle-->
                                                <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
                                                    <i class="ki-duotone ki-setting-2 fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Preferences toggle-->
                                                <!--begin::Advanced search toggle-->
                                                <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
                                                    <i class="ki-duotone ki-down fs-2"></i>
                                                </div>
                                                <!--end::Advanced search toggle-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-200px mh-lg-325px">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-duotone ki-laptop fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                                                    <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-duotone ki-chart-simple fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-duotone ki-chart fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                                                    <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-duotone ki-sms fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-duotone ki-bank fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                                                    <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                                                    <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Recently viewed-->
                                    <!--begin::Empty-->
                                    <div data-kt-search-element="empty" class="text-center d-none">
                                        <!--begin::Icon-->
                                        <div class="pt-10 pb-10">
                                            <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Message-->
                                        <div class="pb-15 fw-semibold">
                                            <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                            <div class="text-muted fs-7">Please try again with a different query</div>
                                        </div>
                                        <!--end::Message-->
                                    </div>
                                    <!--end::Empty-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Preferences-->
                                <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                    <!--begin::Heading-->
                                    <h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Radio group-->
                                        <div class="nav-group nav-group-fluid">
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="users" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="orders" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="projects" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Radio group-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Radio group-->
                                        <div class="nav-group nav-group-fluid">
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="attachment" value="any" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Radio group-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                            <option value="next">Within the next</option>
                                            <option value="last">Within the last</option>
                                            <option value="between">Between</option>
                                            <option value="on">On</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                                                <option value="days">Days</option>
                                                <option value="weeks">Weeks</option>
                                                <option value="months">Months</option>
                                                <option value="years">Years</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                        <a href="../dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Preferences-->
                                <!--begin::Preferences-->
                                <form data-kt-search-element="preferences" class="pt-1 d-none">
                                    <!--begin::Heading-->
                                    <h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="pb-4 border-bottom">
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end pt-7">
                                        <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
                                        <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Preferences-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Header secondary container-->
            </div>
            <!--end::Header secondary-->
        </div>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Wrapper container-->
            <div class="app-container container-xxl d-flex flex-row flex-column-fluid">
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar pt-lg-9 pt-6">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap">
                                <!--begin::Toolbar wrapper-->
                                <div class="d-flex flex-stack flex-wrap gap-4 w-100">
                                    <!--begin::Page title-->
                                    <div class="page-title d-flex flex-column gap-3 me-3">
                                        <!--begin::Title-->
                                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Account Settings</h1>
                                        <!--end::Title-->
                                        <!--begin::Breadcrumb-->
                                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                                <a href="../dist/index.html" class="text-gray-500">
                                                    <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Account</li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-500">Settings</li>
                                            <!--end::Item-->
                                        </ul>
                                        <!--end::Breadcrumb-->
                                    </div>
                                    <!--end::Page title-->
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center gap-3 gap-lg-5">
                                        <!--begin::Secondary button-->
                                        <div class="m-0">
                                            <a href="#" class="btn btn-flex btn-sm btn-color-gray-700 bg-body fw-bold px-4" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">New Project</a>
                                        </div>
                                        <!--end::Secondary button-->
                                        <!--begin::Primary button-->
                                        <a href="#" class="btn btn-flex btn-center btn-dark btn-sm px-4" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Reports</a>
                                        <!--end::Primary button-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content pb-0">
                            <!--begin::Navbar-->
                            <div class="card mb-5 mb-xl-10">
                                <div class="card-body pt-9 pb-0">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                                        <!--begin: Pic-->
                                        <div class="me-7 mb-4">
                                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                <img src="assets/media/avatars/300-1.jpg" alt="image" />
                                                <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <!--begin::Title-->
                                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                                <!--begin::User-->
                                                <div class="d-flex flex-column">
                                                    <!--begin::Name-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
                                                        <a href="#">
                                                            <i class="ki-duotone ki-verify fs-1 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-light-success fw-bold ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade to Pro</a>
                                                    </div>
                                                    <!--end::Name-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                            <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>Developer</a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                            <i class="ki-duotone ki-geolocation fs-4 me-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>SF, Bay Area</a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                            <i class="ki-duotone ki-sms fs-4 me-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>max@kt.com</a>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Actions-->
                                                <div class="d-flex my-4">
                                                    <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                                                        <i class="ki-duotone ki-check fs-3 d-none"></i>
                                                        <!--begin::Indicator label-->
                                                        <span class="indicator-label">Follow</span>
                                                        <!--end::Indicator label-->
                                                        <!--begin::Indicator progress-->
                                                        <span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        <!--end::Indicator progress-->
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
                                                    <!--begin::Menu-->
                                                    <div class="me-0">
                                                        <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                        </button>
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
                                                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-duotone ki-information fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span></a>
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
                                            <!--end::Title-->
                                            <!--begin::Stats-->
                                            <div class="d-flex flex-wrap flex-stack">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                                    <!--begin::Stats-->
                                                    <div class="d-flex flex-wrap">
                                                        <!--begin::Stat-->
                                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                            <!--begin::Number-->
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                                            </div>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="fw-semibold fs-6 text-gray-400">Earnings</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Stat-->
                                                        <!--begin::Stat-->
                                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                            <!--begin::Number-->
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                                            </div>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="fw-semibold fs-6 text-gray-400">Projects</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Stat-->
                                                        <!--begin::Stat-->
                                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                            <!--begin::Number-->
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                                            </div>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Stat-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Progress-->
                                                <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                        <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                                                        <span class="fw-bold fs-6">50%</span>
                                                    </div>
                                                    <div class="h-5px mx-3 w-100 bg-light mb-3">
                                                        <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Navs-->
                                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                        <!--begin::Nav item-->
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="../dist/account/overview.html">Overview</a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="../dist/account/settings.html">Settings</a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Security</a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Billing</a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Statements</a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Referrals</a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">API Keys</a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Logs</a>
                                        </li>
                                        <!--end::Nav item-->
                                    </ul>
                                    <!--begin::Navs-->
                                </div>
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Basic info-->
                            <div class="card mb-5 mb-xl-10">
                                <!--begin::Card header-->
                                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Profile Details</h3>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--begin::Card header-->
                                <!--begin::Content-->
                                <div id="kt_account_settings_profile_details" class="collapse show">
                                    <!--begin::Form-->
                                    <form id="kt_account_profile_details_form" class="form">
                                        <!--begin::Card body-->
                                        <div class="card-body border-top p-9">
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                            <i class="ki-duotone ki-pencil fs-7">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																	<i class="ki-duotone ki-cross fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																	<i class="ki-duotone ki-cross fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-6 fv-row">
                                                            <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Max" />
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-6 fv-row">
                                                            <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Smith" />
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Keenthemes" />
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                    <span class="required">Contact Phone</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
																<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935" />
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Site</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="keenthemes.com" />
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                    <span class="required">Country</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
																<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
                                                        <option value="">Select a Country...</option>
                                                        <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                                        <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                                        <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                                        <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                                        <option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
                                                        <option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
                                                        <option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
                                                        <option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
                                                        <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
                                                        <option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
                                                        <option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
                                                        <option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
                                                        <option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
                                                        <option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
                                                        <option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
                                                        <option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
                                                        <option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
                                                        <option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
                                                        <option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
                                                        <option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
                                                        <option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
                                                        <option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
                                                        <option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
                                                        <option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
                                                        <option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
                                                        <option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
                                                        <option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                        <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
                                                        <option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
                                                        <option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
                                                        <option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
                                                        <option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
                                                        <option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
                                                        <option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
                                                        <option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
                                                        <option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
                                                        <option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
                                                        <option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
                                                        <option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
                                                        <option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
                                                        <option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
                                                        <option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
                                                        <option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
                                                        <option data-kt-flag="flags/china.svg" value="CN">China</option>
                                                        <option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
                                                        <option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
                                                        <option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
                                                        <option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
                                                        <option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
                                                        <option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
                                                        <option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
                                                        <option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
                                                        <option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
                                                        <option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
                                                        <option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
                                                        <option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
                                                        <option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
                                                        <option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
                                                        <option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
                                                        <option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
                                                        <option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
                                                        <option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
                                                        <option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
                                                        <option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
                                                        <option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
                                                        <option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
                                                        <option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
                                                        <option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
                                                        <option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
                                                        <option data-kt-flag="flags/france.svg" value="FR">France</option>
                                                        <option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
                                                        <option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
                                                        <option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
                                                        <option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
                                                        <option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
                                                        <option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
                                                        <option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
                                                        <option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
                                                        <option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
                                                        <option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
                                                        <option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
                                                        <option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
                                                        <option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
                                                        <option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
                                                        <option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
                                                        <option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
                                                        <option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
                                                        <option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
                                                        <option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
                                                        <option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
                                                        <option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
                                                        <option data-kt-flag="flags/india.svg" value="IN">India</option>
                                                        <option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
                                                        <option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
                                                        <option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
                                                        <option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
                                                        <option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
                                                        <option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
                                                        <option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
                                                        <option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
                                                        <option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
                                                        <option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
                                                        <option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
                                                        <option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
                                                        <option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
                                                        <option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
                                                        <option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
                                                        <option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
                                                        <option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
                                                        <option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
                                                        <option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
                                                        <option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
                                                        <option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
                                                        <option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
                                                        <option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
                                                        <option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
                                                        <option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
                                                        <option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
                                                        <option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
                                                        <option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
                                                        <option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
                                                        <option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
                                                        <option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
                                                        <option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
                                                        <option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
                                                        <option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
                                                        <option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
                                                        <option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
                                                        <option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
                                                        <option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
                                                        <option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
                                                        <option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
                                                        <option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
                                                        <option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
                                                        <option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
                                                        <option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
                                                        <option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
                                                        <option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
                                                        <option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
                                                        <option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
                                                        <option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
                                                        <option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
                                                        <option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
                                                        <option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
                                                        <option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
                                                        <option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
                                                        <option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
                                                        <option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
                                                        <option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
                                                        <option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
                                                        <option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
                                                        <option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
                                                        <option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
                                                        <option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
                                                        <option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
                                                        <option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
                                                        <option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
                                                        <option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
                                                        <option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
                                                        <option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
                                                        <option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
                                                        <option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
                                                        <option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
                                                        <option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
                                                        <option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
                                                        <option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
                                                        <option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
                                                        <option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
                                                        <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
                                                        <option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
                                                        <option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
                                                        <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
                                                        <option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
                                                        <option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
                                                        <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
                                                        <option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
                                                        <option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
                                                        <option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
                                                        <option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
                                                        <option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
                                                        <option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
                                                        <option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
                                                        <option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
                                                        <option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
                                                        <option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
                                                        <option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
                                                        <option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
                                                        <option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
                                                        <option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
                                                        <option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
                                                        <option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
                                                        <option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
                                                        <option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
                                                        <option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
                                                        <option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
                                                        <option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
                                                        <option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
                                                        <option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
                                                        <option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
                                                        <option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
                                                        <option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
                                                        <option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
                                                        <option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
                                                        <option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
                                                        <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
                                                        <option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
                                                        <option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
                                                        <option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
                                                        <option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
                                                        <option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
                                                        <option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
                                                        <option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
                                                        <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
                                                        <option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
                                                        <option data-kt-flag="flags/united-states.svg" value="US">United States</option>
                                                        <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                                        <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
                                                        <option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
                                                        <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
                                                        <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                                        <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
                                                        <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                                        <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                                        <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Language</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <!--begin::Input-->
                                                    <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg">
                                                        <option value="">Select a Language...</option>
                                                        <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa Indonesia - Indonesian</option>
                                                        <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu - Malay</option>
                                                        <option data-kt-flag="flags/canada.svg" value="ca">Català - Catalan</option>
                                                        <option data-kt-flag="flags/czech-republic.svg" value="cs">Čeština - Czech</option>
                                                        <option data-kt-flag="flags/netherlands.svg" value="da">Dansk - Danish</option>
                                                        <option data-kt-flag="flags/germany.svg" value="de">Deutsch - German</option>
                                                        <option data-kt-flag="flags/united-kingdom.svg" value="en">English</option>
                                                        <option data-kt-flag="flags/united-kingdom.svg" value="en-gb">English UK - British English</option>
                                                        <option data-kt-flag="flags/spain.svg" value="es">Español - Spanish</option>
                                                        <option data-kt-flag="flags/philippines.svg" value="fil">Filipino</option>
                                                        <option data-kt-flag="flags/france.svg" value="fr">Français - French</option>
                                                        <option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge - Irish (beta)</option>
                                                        <option data-kt-flag="flags/greenland.svg" value="gl">Galego - Galician (beta)</option>
                                                        <option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski - Croatian</option>
                                                        <option data-kt-flag="flags/italy.svg" value="it">Italiano - Italian</option>
                                                        <option data-kt-flag="flags/hungary.svg" value="hu">Magyar - Hungarian</option>
                                                        <option data-kt-flag="flags/netherlands.svg" value="nl">Nederlands - Dutch</option>
                                                        <option data-kt-flag="flags/norway.svg" value="no">Norsk - Norwegian</option>
                                                        <option data-kt-flag="flags/poland.svg" value="pl">Polski - Polish</option>
                                                        <option data-kt-flag="flags/portugal.svg" value="pt">Português - Portuguese</option>
                                                        <option data-kt-flag="flags/romania.svg" value="ro">Română - Romanian</option>
                                                        <option data-kt-flag="flags/slovakia.svg" value="sk">Slovenčina - Slovak</option>
                                                        <option data-kt-flag="flags/finland.svg" value="fi">Suomi - Finnish</option>
                                                        <option data-kt-flag="flags/el-salvador.svg" value="sv">Svenska - Swedish</option>
                                                        <option data-kt-flag="flags/virgin-islands.svg" value="vi">Tiếng Việt - Vietnamese</option>
                                                        <option data-kt-flag="flags/turkey.svg" value="tr">Türkçe - Turkish</option>
                                                        <option data-kt-flag="flags/greece.svg" value="el">Ελληνικά - Greek</option>
                                                        <option data-kt-flag="flags/bulgaria.svg" value="bg">Български език - Bulgarian</option>
                                                        <option data-kt-flag="flags/russia.svg" value="ru">Русский - Russian</option>
                                                        <option data-kt-flag="flags/suriname.svg" value="sr">Српски - Serbian</option>
                                                        <option data-kt-flag="flags/ukraine.svg" value="uk">Українська мова - Ukrainian</option>
                                                        <option data-kt-flag="flags/israel.svg" value="he">עִבְרִית - Hebrew</option>
                                                        <option data-kt-flag="flags/pakistan.svg" value="ur">اردو - Urdu (beta)</option>
                                                        <option data-kt-flag="flags/argentina.svg" value="ar">العربية - Arabic</option>
                                                        <option data-kt-flag="flags/argentina.svg" value="fa">فارسی - Persian</option>
                                                        <option data-kt-flag="flags/mauritania.svg" value="mr">मराठी - Marathi</option>
                                                        <option data-kt-flag="flags/india.svg" value="hi">हिन्दी - Hindi</option>
                                                        <option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা - Bangla</option>
                                                        <option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી - Gujarati</option>
                                                        <option data-kt-flag="flags/india.svg" value="ta">தமிழ் - Tamil</option>
                                                        <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">ಕನ್ನಡ - Kannada</option>
                                                        <option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย - Thai</option>
                                                        <option data-kt-flag="flags/south-korea.svg" value="ko">한국어 - Korean</option>
                                                        <option data-kt-flag="flags/japan.svg" value="ja">日本語 - Japanese</option>
                                                        <option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 - Simplified Chinese</option>
                                                        <option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 - Traditional Chinese</option>
                                                    </select>
                                                    <!--end::Input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Please select a preferred language, including date, time, and number formatting.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Communication</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <!--begin::Options-->
                                                    <div class="d-flex align-items-center mt-3">
                                                        <!--begin::Option-->
                                                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                                            <input class="form-check-input" name="communication[]" type="checkbox" value="1" />
                                                            <span class="fw-semibold ps-2 fs-6">Email</span>
                                                        </label>
                                                        <!--end::Option-->
                                                        <!--begin::Option-->
                                                        <label class="form-check form-check-custom form-check-inline form-check-solid">
                                                            <input class="form-check-input" name="communication[]" type="checkbox" value="2" />
                                                            <span class="fw-semibold ps-2 fs-6">Phone</span>
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-0">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Allow Marketing</label>
                                                <!--begin::Label-->
                                                <!--begin::Label-->
                                                <div class="col-lg-8 d-flex align-items-center">
                                                    <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
                                                        <label class="form-check-label" for="allowmarketing"></label>
                                                    </div>
                                                </div>
                                                <!--begin::Label-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Actions-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Basic info-->
                            <!--begin::Sign-in Method-->
                            <div class="card mb-5 mb-xl-10">
                                <!--begin::Card header-->
                                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Sign-in Method</h3>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Content-->
                                <div id="kt_account_settings_signin_method" class="collapse show">
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <!--begin::Email Address-->
                                        <div class="d-flex flex-wrap align-items-center">
                                            <!--begin::Label-->
                                            <div id="kt_signin_email">
                                                <div class="fs-6 fw-bold mb-1">Email Address</div>
                                                <div class="fw-semibold text-gray-600">support@keenthemes.com</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Edit-->
                                            <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                                <!--begin::Form-->
                                                <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                                                    <div class="row mb-6">
                                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                                            <div class="fv-row mb-0">
                                                                <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                                                <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="fv-row mb-0">
                                                                <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
                                                        <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                                    </div>
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Edit-->
                                            <!--begin::Action-->
                                            <div id="kt_signin_email_button" class="ms-auto">
                                                <button class="btn btn-light btn-active-light-primary">Change Email</button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Email Address-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-6"></div>
                                        <!--end::Separator-->
                                        <!--begin::Password-->
                                        <div class="d-flex flex-wrap align-items-center mb-10">
                                            <!--begin::Label-->
                                            <div id="kt_signin_password">
                                                <div class="fs-6 fw-bold mb-1">Password</div>
                                                <div class="fw-semibold text-gray-600">************</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Edit-->
                                            <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                                                <!--begin::Form-->
                                                <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                                                    <div class="row mb-1">
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-0">
                                                                <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-0">
                                                                <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-0">
                                                                <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                                                    <div class="d-flex">
                                                        <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                                                        <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                                    </div>
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Edit-->
                                            <!--begin::Action-->
                                            <div id="kt_signin_password_button" class="ms-auto">
                                                <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Password-->
                                        <!--begin::Notice-->
                                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                <!--begin::Content-->
                                                <div class="mb-3 mb-md-0 fw-semibold">
                                                    <h4 class="text-gray-900 fw-bold">Secure Your Account</h4>
                                                    <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Action-->
                                                <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Sign-in Method-->
                            <!--begin::Connected Accounts-->
                            <div class="card mb-5 mb-xl-10">
                                <!--begin::Card header-->
                                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Connected Accounts</h3>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Content-->
                                <div id="kt_account_settings_connected_accounts" class="collapse show">
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <!--begin::Notice-->
                                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
                                            <!--end::Icon-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <!--begin::Content-->
                                                <div class="fw-semibold">
                                                    <div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing code.
                                                        <a href="#" class="fw-bold">Learn More</a></div>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                        <!--begin::Items-->
                                        <div class="py-2">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <div class="d-flex">
                                                    <img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Google</a>
                                                        <div class="fs-6 fw-semibold text-gray-400">Plan properly your workflow</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <div class="form-check form-check-solid form-check-custom form-switch">
                                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked" />
                                                        <label class="form-check-label" for="googleswitch"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Item-->
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <div class="d-flex">
                                                    <img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Github</a>
                                                        <div class="fs-6 fw-semibold text-gray-400">Keep eye on on your Repositories</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <div class="form-check form-check-solid form-check-custom form-switch">
                                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch" checked="checked" />
                                                        <label class="form-check-label" for="githubswitch"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Item-->
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <div class="d-flex">
                                                    <img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Slack</a>
                                                        <div class="fs-6 fw-semibold text-gray-400">Integrate Projects Discussions</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <div class="form-check form-check-solid form-check-custom form-switch">
                                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch" />
                                                        <label class="form-check-label" for="slackswitch"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Card footer-->
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                        <button class="btn btn-primary">Save Changes</button>
                                    </div>
                                    <!--end::Card footer-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Connected Accounts-->
                            <!--begin::Notifications-->
                            <div class="card mb-5 mb-xl-10">
                                <!--begin::Card header-->
                                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_email_preferences" aria-expanded="true" aria-controls="kt_account_email_preferences">
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Email Preferences</h3>
                                    </div>
                                </div>
                                <!--begin::Card header-->
                                <!--begin::Content-->
                                <div id="kt_account_settings_email_preferences" class="collapse show">
                                    <!--begin::Form-->
                                    <form class="form">
                                        <!--begin::Card body-->
                                        <div class="card-body border-top px-9 py-9">
                                            <!--begin::Option-->
                                            <label class="form-check form-check-custom form-check-solid align-items-start">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">Successful Payments</span>
															<span class="text-muted fs-6">Receive a notification for every successful payment.</span>
														</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <div class="separator separator-dashed my-6"></div>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-custom form-check-solid align-items-start">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">Payouts</span>
															<span class="text-muted fs-6">Receive a notification for every initiated payout.</span>
														</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <div class="separator separator-dashed my-6"></div>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-custom form-check-solid align-items-start">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">Fee Collection</span>
															<span class="text-muted fs-6">Receive a notification each time you collect a fee from sales</span>
														</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <div class="separator separator-dashed my-6"></div>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-custom form-check-solid align-items-start">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">Customer Payment Dispute</span>
															<span class="text-muted fs-6">Receive a notification if a payment is disputed by a customer and for dispute purposes.</span>
														</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <div class="separator separator-dashed my-6"></div>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-custom form-check-solid align-items-start">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">Refund Alerts</span>
															<span class="text-muted fs-6">Receive a notification if a payment is stated as risk by the Finance Department.</span>
														</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <div class="separator separator-dashed my-6"></div>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-custom form-check-solid align-items-start">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">Invoice Payments</span>
															<span class="text-muted fs-6">Receive a notification if a customer sends an incorrect amount to pay their invoice.</span>
														</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <div class="separator separator-dashed my-6"></div>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label class="form-check form-check-custom form-check-solid align-items-start">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="form-check-label d-flex flex-column align-items-start">
															<span class="fw-bold fs-5 mb-0">Webhook API Endpoints</span>
															<span class="text-muted fs-6">Receive notifications for consistently failing webhook API endpoints.</span>
														</span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Card footer-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                            <button class="btn btn-primary px-6">Save Changes</button>
                                        </div>
                                        <!--end::Card footer-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Notifications-->
                            <!--begin::Notifications-->
                            <div class="card mb-5 mb-xl-10">
                                <!--begin::Card header-->
                                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_notifications" aria-expanded="true" aria-controls="kt_account_notifications">
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Notifications</h3>
                                    </div>
                                </div>
                                <!--begin::Card header-->
                                <!--begin::Content-->
                                <div id="kt_account_settings_notifications" class="collapse show">
                                    <!--begin::Form-->
                                    <form class="form">
                                        <!--begin::Card body-->
                                        <div class="card-body border-top px-9 pt-3 pb-4">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-row-dashed border-gray-300 align-middle gy-6">
                                                    <tbody class="fs-6 fw-semibold">
                                                    <!--begin::Table row-->
                                                    <tr>
                                                        <td class="min-w-250px fs-4 fw-bold">Notifications</td>
                                                        <td class="w-125px">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                                                                <label class="form-check-label ps-2" for="kt_settings_notification_email">Email</label>
                                                            </div>
                                                        </td>
                                                        <td class="w-125px">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                                                                <label class="form-check-label ps-2" for="kt_settings_notification_phone">Phone</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--begin::Table row-->
                                                    <!--begin::Table row-->
                                                    <tr>
                                                        <td>Billing Updates</td>
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="1" id="billing1" checked="checked" data-kt-settings-notification="email" />
                                                                <label class="form-check-label ps-2" for="billing1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" id="billing2" checked="checked" data-kt-settings-notification="phone" />
                                                                <label class="form-check-label ps-2" for="billing2"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--begin::Table row-->
                                                    <!--begin::Table row-->
                                                    <tr>
                                                        <td>New Team Members</td>
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" id="team1" checked="checked" data-kt-settings-notification="email" />
                                                                <label class="form-check-label ps-2" for="team1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" id="team2" data-kt-settings-notification="phone" />
                                                                <label class="form-check-label ps-2" for="team2"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--begin::Table row-->
                                                    <!--begin::Table row-->
                                                    <tr>
                                                        <td>Completed Projects</td>
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" id="project1" data-kt-settings-notification="email" />
                                                                <label class="form-check-label ps-2" for="project1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" id="project2" checked="checked" data-kt-settings-notification="phone" />
                                                                <label class="form-check-label ps-2" for="project2"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--begin::Table row-->
                                                    <!--begin::Table row-->
                                                    <tr>
                                                        <td class="border-bottom-0">Newsletters</td>
                                                        <td class="border-bottom-0">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" id="newsletter1" data-kt-settings-notification="email" />
                                                                <label class="form-check-label ps-2" for="newsletter1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="border-bottom-0">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" id="newsletter2" data-kt-settings-notification="phone" />
                                                                <label class="form-check-label ps-2" for="newsletter2"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--begin::Table row-->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Card footer-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                            <button class="btn btn-primary px-6">Save Changes</button>
                                        </div>
                                        <!--end::Card footer-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Notifications-->
                            <!--begin::Deactivate Account-->
                            <div class="card">
                                <!--begin::Card header-->
                                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Deactivate Account</h3>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Content-->
                                <div id="kt_account_settings_deactivate" class="collapse show">
                                    <!--begin::Form-->
                                    <form id="kt_account_deactivate_form" class="form">
                                        <!--begin::Card body-->
                                        <div class="card-body border-top p-9">
                                            <!--begin::Notice-->
                                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1">
                                                    <!--begin::Content-->
                                                    <div class="fw-semibold">
                                                        <h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
                                                        <div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
                                                            <br />
                                                            <a class="fw-bold" href="#">Learn more</a></div>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Notice-->
                                            <!--begin::Form input row-->
                                            <div class="form-check form-check-solid fv-row">
                                                <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
                                                <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
                                            </div>
                                            <!--end::Form input row-->
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Card footer-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Deactivate Account</button>
                                        </div>
                                        <!--end::Card footer-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Deactivate Account-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
                    <div id="kt_app_footer" class="app-footer align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3 py-lg-6">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://keenthemes.com/products/oswald-html-pro" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
