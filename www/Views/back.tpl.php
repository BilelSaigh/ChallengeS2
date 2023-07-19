
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ma super page</title>
    <meta name="description" content="Ceci est mon projet de fin d année ">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../Views/Dash/theme/dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../Views/Dash/theme/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../Views/Dash/theme/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />


    <!-- <link rel="shortcut icon" href="assets/media/logos/favicon.ico" /> -->
</head>
<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <style>
        .card-shadow {
            box-shadow: 4px 4px #ddd;
        }
        .opaque {
            opacity: 0.3;
        }
        #palette .card:hover {
            cursor: move;
        }
        #palette .card:active {
            transform: rotate(3deg);
            transform-origin: bottom right;
            background-color: #f2f2f2;
        }
        .dropzone {
            background-color: cornflowerblue;
            min-height: 100px;
            width: 100%;
        }
        .dropzone.draggable-over {
            background-color: blanchedalmond !important;
        }
    </style>
    <!--begin::Theme mode setup on page load-->
    <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
    <!--end::Theme mode setup on page load-->
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
                                <a href="/admin" class="d-flex align-items-center mb-1 mb-lg-0 pt-lg-1">
                                    <svg width="100" height="40" viewBox="0 0 269 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.376 84.192C13.088 84.192 9.632 82.112 7.008 77.952C4.448 73.728 2.944 68.032 2.496 60.864C2.432 59.84 2.4 58.336 2.4 56.352C2.4 48.608 3.68 41.76 6.24 35.808C8.8 29.792 12.416 25.152 17.088 21.888C21.824 18.56 27.328 16.896 33.6 16.896C39.872 16.896 45.344 18.56 50.016 21.888C54.752 25.152 58.368 29.76 60.864 35.712C63.424 41.664 64.704 48.544 64.704 56.352C64.704 58.336 64.672 59.84 64.608 60.864C64.16 68.16 62.656 73.856 60.096 77.952C57.536 82.048 54.08 84.096 49.728 84.096C46.208 84.096 43.744 83.136 42.336 81.216C40.992 79.296 40.32 76.96 40.32 74.208C40.32 72.928 40.416 71.808 40.608 70.848C37.28 70.976 34.336 71.04 31.776 71.04C30.176 71.04 28.416 70.976 26.496 70.848C26.688 71.808 26.784 72.928 26.784 74.208C26.784 77.024 26.08 79.392 24.672 81.312C23.328 83.232 20.896 84.192 17.376 84.192ZM25.824 53.76C29.28 53.632 31.808 53.568 33.408 53.568C35.136 53.568 37.664 53.632 40.992 53.76C41.12 53.056 41.184 52 41.184 50.592C41.184 47.584 40.544 45.152 39.264 43.296C37.984 41.376 36 40.416 33.312 40.416C30.688 40.416 28.736 41.344 27.456 43.2C26.176 45.056 25.536 47.456 25.536 50.4C25.536 51.488 25.632 52.608 25.824 53.76ZM92.373 84C87.829 84 83.797 82.912 80.277 80.736C76.821 78.496 74.165 75.616 72.309 72.096C70.453 68.512 69.525 64.704 69.525 60.672C69.525 55.936 70.485 51.936 72.405 48.672C74.389 45.344 76.917 42.88 79.989 41.28C83.125 39.68 86.485 38.88 90.069 38.88C93.653 38.88 96.853 39.648 99.669 41.184C99.541 39.84 99.285 38.4 98.901 36.864C98.581 35.328 98.357 34.368 98.229 33.984C97.717 32 97.333 30.336 97.077 28.992C96.821 27.648 96.693 26.304 96.693 24.96C96.693 22.272 97.493 20.224 99.093 18.816C100.693 17.408 102.613 16.704 104.853 16.704C108.437 16.704 111.349 18.496 113.589 22.08C115.829 25.664 117.429 30.112 118.389 35.424C119.413 40.736 119.925 46.112 119.925 51.552C119.925 58.912 118.229 66.176 114.837 73.344C111.509 80.448 104.021 84 92.373 84ZM92.949 68.832C94.677 68.832 96.181 68.192 97.461 66.912C98.741 65.568 99.381 64 99.381 62.208C99.381 60.416 98.741 58.848 97.461 57.504C96.181 56.16 94.677 55.488 92.949 55.488C91.221 55.488 89.685 56.16 88.341 57.504C87.061 58.848 86.421 60.416 86.421 62.208C86.421 64 87.061 65.568 88.341 66.912C89.685 68.192 91.221 68.832 92.949 68.832ZM146.965 84C142.229 84 138.037 83.072 134.389 81.216C130.741 79.36 127.893 76.768 125.845 73.44C123.861 70.048 122.869 66.24 122.869 62.016C122.869 57.856 123.861 54.016 125.845 50.496C127.893 46.976 130.709 44.16 134.293 42.048C137.877 39.936 141.941 38.88 146.485 38.88C150.581 38.88 154.197 39.712 157.333 41.376C160.469 43.04 162.869 45.248 164.533 48C166.197 50.688 167.029 53.504 167.029 56.448C167.029 61.248 165.205 64.768 161.557 67.008C157.973 69.184 153.685 70.272 148.693 70.272C145.365 70.272 142.549 69.856 140.245 69.024C142.165 72.16 145.333 73.728 149.749 73.728C151.541 73.728 153.461 73.504 155.509 73.056C156.277 72.864 157.013 72.768 157.717 72.768C159.125 72.768 160.245 73.12 161.077 73.824C161.973 74.528 162.421 75.488 162.421 76.704C162.421 78.688 161.205 80.416 158.773 81.888C156.341 83.296 152.405 84 146.965 84ZM140.533 57.312C141.109 58.208 141.877 58.88 142.837 59.328C143.861 59.712 144.981 59.904 146.197 59.904C147.605 59.904 148.821 59.584 149.845 58.944C150.933 58.304 151.477 57.472 151.477 56.448C151.477 55.296 150.997 54.304 150.037 53.472C149.141 52.64 147.829 52.224 146.101 52.224C144.373 52.224 142.997 52.768 141.973 53.856C141.013 54.88 140.533 56.032 140.533 57.312ZM197.483 84C185.835 84 178.315 80.448 174.923 73.344C171.595 66.176 169.931 58.912 169.931 51.552C169.931 46.112 170.411 40.736 171.371 35.424C172.395 30.112 174.027 25.664 176.267 22.08C178.507 18.496 181.419 16.704 185.003 16.704C187.243 16.704 189.163 17.408 190.763 18.816C192.363 20.224 193.163 22.272 193.163 24.96C193.163 26.304 193.035 27.648 192.779 28.992C192.523 30.336 192.139 32 191.627 33.984C191.499 34.368 191.243 35.328 190.859 36.864C190.539 38.4 190.315 39.84 190.187 41.184C193.003 39.648 196.203 38.88 199.787 38.88C203.371 38.88 206.699 39.68 209.771 41.28C212.907 42.88 215.435 45.344 217.355 48.672C219.339 51.936 220.331 55.936 220.331 60.672C220.331 64.704 219.403 68.512 217.547 72.096C215.691 75.616 213.003 78.496 209.483 80.736C206.027 82.912 202.027 84 197.483 84ZM196.907 68.832C198.635 68.832 200.139 68.192 201.419 66.912C202.763 65.568 203.435 64 203.435 62.208C203.435 60.416 202.763 58.848 201.419 57.504C200.139 56.16 198.635 55.488 196.907 55.488C195.179 55.488 193.675 56.16 192.395 57.504C191.115 58.848 190.475 60.416 190.475 62.208C190.475 64 191.115 65.568 192.395 66.912C193.675 68.192 195.179 68.832 196.907 68.832ZM240.798 31.584C245.342 31.584 249.31 32.48 252.702 34.272C256.094 36 258.75 38.752 260.67 42.528C262.59 46.304 263.55 51.232 263.55 57.312C263.55 63.648 262.462 68.864 260.286 72.96C258.174 77.056 255.294 80.096 251.646 82.08C248.062 84 243.998 84.96 239.454 84.96C236.702 84.96 234.27 84.704 232.158 84.192C230.11 83.744 228.222 83.072 226.494 82.176V74.688C228.286 75.52 230.238 76.224 232.35 76.8C234.462 77.376 236.862 77.664 239.55 77.664C243.006 77.664 245.854 76.896 248.094 75.36C250.334 73.824 251.998 71.584 253.086 68.64C254.238 65.632 254.814 61.984 254.814 57.696C254.814 51.296 253.598 46.56 251.166 43.488C248.798 40.416 245.054 38.88 239.934 38.88C238.142 38.88 236.158 39.104 233.982 39.552C231.87 40 230.046 40.608 228.51 41.376L225.918 34.368C227.454 33.6 229.566 32.96 232.254 32.448C235.006 31.872 237.854 31.584 240.798 31.584Z" fill="white"/>
                                    </svg>
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

                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-3 me-6" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img class="symbol symbol-35px" src="<?= $_SESSION["user"]["logo"] ?? "../Views/Dash/theme/dist/assets/media/avatars/blank.png"?>" alt="user" />
                                </div>
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="<?= $_SESSION["user"]["logo"] ?? "../Views/Dash/theme/dist/assets/media/avatars/blank.png"?>" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <?= $_SESSION["user"]["firstname"]." ".$_SESSION["user"]["lastname"]?>
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7"><?= $_SESSION["user"]["email"]?></a>
                                                </div>
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
                                        <a href="/admin/profil" class="menu-link px-5">My Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="/admin/pages" class="menu-link px-5">
                                            <span class="menu-text">My Pages</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="edituser" class="menu-link px-5">Account Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="signout" class="menu-link px-5">Sign Out</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->
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
                                                        <a href="/admin" class="menu-link">
                                                            <span class="d-flex flex-column">
																	<span class="d-flex align-items-center fs-6 fw-semibold text-gray-800">Home</span>
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
                                                        <a href="/pages" class="menu-link">
                                                            <span class="d-flex flex-column">
																	<span class="d-flex align-items-center fs-6 fw-semibold text-gray-800">Projects
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
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
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
                                            <a class="menu-link" href="/profil">
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
                                            <a class="menu-link" href="/edituser">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                                <span class="menu-title">Settings</span>
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
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
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
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content pb-0">
                                <?php include $this->view; ?>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                        <!--begin::Footer-->
                        <div id="kt_app_footer" class="app-footer align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3 py-lg-6">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Challenge S2</a>
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
    <script src="../Views/Dash/theme/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="../Views/Dash/theme/dist/assets/js/custom/apps/user-management/users/list/table.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/apps/user-management/users/list/export-users.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/apps/user-management/users/list/add.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/widgets.bundle.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/apps/chat/chat.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/type.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/budget.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/settings.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/team.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/targets.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/files.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/complete.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/main.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/users-search.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->

    <script src="../Views/Dash/theme/dist/assets/js/widgets.bundle.js"></script>
    <script src="../Views/Dash/theme/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="../Views/Dash/theme/dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="../Views/Dash/theme/dist/assets/js/custom/apps/user-management/users/list/table.js"></script>

    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="../Views/Dash/theme/dist/assets/js/custom/apps/projects/list/list.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/account/settings/signin-methods.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/account/settings/profile-details.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/account/settings/deactivate-account.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/pages/user-profile/general.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/type.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/budget.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/settings.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/team.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/targets.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/files.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/complete.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/create-project/main.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
    <script src="../Views/Dash/theme/dist/assets/js/custom/utilities/modals/two-factor-authentication.js"></script>

</body>
</html>