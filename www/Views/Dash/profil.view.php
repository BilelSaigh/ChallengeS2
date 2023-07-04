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
                                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Account Overview</h1>
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
                                            <li class="breadcrumb-item text-gray-500">Overview</li>
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
                                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?= $user["firstname"]." ". $user["lastname"] ?></a>
                                                        <a href="#">
                                                            <i class="ki-duotone ki-verify fs-1 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </div>
                                                    <!--end::Name-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                            <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i><?= "cc"  ?></a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                            <i class="ki-duotone ki-sms fs-4 me-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i><?= $user["email"] ?></a>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Navs-->
                                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                        <!--begin::Nav item-->
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="../dist/account/overview.html">Overview</a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="../dist/account/settings.html">Settings</a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Security</a>
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
                            <!--begin::details View-->
                            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                <!--begin::Card header-->
                                <div class="card-header cursor-pointer">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Profile Details</h3>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Action-->
                                    <a href="../dist/account/settings.html" class="btn btn-sm btn-primary align-self-center">Edit Profile</a>
                                    <!--end::Action-->
                                </div>
                                <!--begin::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body p-9">
                                    <!--begin::Row-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800"><?= $user["firstname"] ." ". $user["lastname"] ?></span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Website Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <span class="fw-semibold text-gray-800 fs-6"><?= $website->name?></span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted"> Email
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
													<i class="ki-duotone ki-information fs-7">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span></label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <span class="fw-bold fs-6 text-gray-800 me-2"><?= $user["email"] ?></span>
                                            <?php if ($user["status"]): ?>
                                                <span class="badge badge-success">Verified</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">Unverified</span>
                                            <?php endif; ?>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <?php if (!$user["status"] ): ?>
                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
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
                                                <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                                                <div class="fs-6 text-gray-700">Your Account is not verified.
                                                    <a class="fw-bold">Confirm your email</a>.</div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                    <?php endif;?>

                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::details View-->
                            <!--begin::Row-->
                            <div class="row gy-5 g-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <!--begin::List widget 5-->
                                    <div class="card card-flush h-xl-100">
                                        <!--begin::Header-->
                                        <div class="card-header pt-7">
                                            <!--begin::Title-->
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-dark">Product Delivery</span>
                                                <span class="text-gray-400 mt-1 fw-semibold fs-6">1M Products Shipped so far</span>
                                            </h3>
                                            <!--end::Title-->
                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar">
                                                <a href="#" class="btn btn-sm btn-light">Order Details</a>
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Scroll-->
                                            <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                                                <!--begin::Item-->
                                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-3">
                                                            <!--begin::Icon-->
                                                            <img src="assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="" />
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Action-->
                                                        <div class="m-0">
                                                            <!--begin::Menu-->
                                                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                                <i class="ki-duotone ki-dots-square fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </button>
                                                            <!--begin::Menu 2-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mb-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                    <!--begin::Menu item-->
                                                                    <a href="#" class="menu-link px-3">
                                                                        <span class="menu-title">New Group</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </a>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu sub-->
                                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu sub-->
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mt-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3 py-3">
                                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu 2-->
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Customer-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Name-->
                                                        <span class="text-gray-400 fw-bold">To:
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Jason Bourne</a></span>
                                                        <!--end::Name-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success">Delivered</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Customer-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-3">
                                                            <!--begin::Icon-->
                                                            <img src="assets/media/stock/ecommerce/209.gif" class="w-50px ms-n1 me-1" alt="" />
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Action-->
                                                        <div class="m-0">
                                                            <!--begin::Menu-->
                                                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                                <i class="ki-duotone ki-dots-square fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </button>
                                                            <!--begin::Menu 2-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mb-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                    <!--begin::Menu item-->
                                                                    <a href="#" class="menu-link px-3">
                                                                        <span class="menu-title">New Group</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </a>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu sub-->
                                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu sub-->
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mt-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3 py-3">
                                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu 2-->
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Customer-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Name-->
                                                        <span class="text-gray-400 fw-bold">To:
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Marie Durant</a></span>
                                                        <!--end::Name-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-primary">Shipping</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Customer-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-3">
                                                            <!--begin::Icon-->
                                                            <img src="assets/media/stock/ecommerce/214.gif" class="w-50px ms-n1 me-1" alt="" />
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Action-->
                                                        <div class="m-0">
                                                            <!--begin::Menu-->
                                                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                                <i class="ki-duotone ki-dots-square fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </button>
                                                            <!--begin::Menu 2-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mb-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                    <!--begin::Menu item-->
                                                                    <a href="#" class="menu-link px-3">
                                                                        <span class="menu-title">New Group</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </a>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu sub-->
                                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu sub-->
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mt-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3 py-3">
                                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu 2-->
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Customer-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Name-->
                                                        <span class="text-gray-400 fw-bold">To:
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Dan Wilson</a></span>
                                                        <!--end::Name-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-danger">Confirmed</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Customer-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-3">
                                                            <!--begin::Icon-->
                                                            <img src="assets/media/stock/ecommerce/211.gif" class="w-50px ms-n1 me-1" alt="" />
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Action-->
                                                        <div class="m-0">
                                                            <!--begin::Menu-->
                                                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                                <i class="ki-duotone ki-dots-square fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </button>
                                                            <!--begin::Menu 2-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mb-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                    <!--begin::Menu item-->
                                                                    <a href="#" class="menu-link px-3">
                                                                        <span class="menu-title">New Group</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </a>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu sub-->
                                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu sub-->
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mt-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3 py-3">
                                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu 2-->
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Customer-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Name-->
                                                        <span class="text-gray-400 fw-bold">To:
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Lebron Wayde</a></span>
                                                        <!--end::Name-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success">Delivered</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Customer-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-3">
                                                            <!--begin::Icon-->
                                                            <img src="assets/media/stock/ecommerce/215.gif" class="w-50px ms-n1 me-1" alt="" />
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Action-->
                                                        <div class="m-0">
                                                            <!--begin::Menu-->
                                                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                                <i class="ki-duotone ki-dots-square fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </button>
                                                            <!--begin::Menu 2-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mb-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                    <!--begin::Menu item-->
                                                                    <a href="#" class="menu-link px-3">
                                                                        <span class="menu-title">New Group</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </a>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu sub-->
                                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu sub-->
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mt-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3 py-3">
                                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu 2-->
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Customer-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Name-->
                                                        <span class="text-gray-400 fw-bold">To:
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Ana Simmons</a></span>
                                                        <!--end::Name-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-primary">Shipping</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Customer-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="border border-dashed border-gray-300 rounded px-7 py-3">
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-3">
                                                            <!--begin::Icon-->
                                                            <img src="assets/media/stock/ecommerce/192.gif" class="w-50px ms-n1 me-1" alt="" />
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Action-->
                                                        <div class="m-0">
                                                            <!--begin::Menu-->
                                                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                                <i class="ki-duotone ki-dots-square fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </button>
                                                            <!--begin::Menu 2-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mb-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                    <!--begin::Menu item-->
                                                                    <a href="#" class="menu-link px-3">
                                                                        <span class="menu-title">New Group</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </a>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu sub-->
                                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu sub-->
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator mt-3 opacity-75"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3 py-3">
                                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu 2-->
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Customer-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Name-->
                                                        <span class="text-gray-400 fw-bold">To:
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Kevin Leonard</a></span>
                                                        <!--end::Name-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-danger">Confirmed</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Customer-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Scroll-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::List widget 5-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-8">
                                    <!--begin::Table Widget 5-->
                                    <div class="card card-flush h-xl-100">
                                        <!--begin::Card header-->
                                        <div class="card-header pt-7">
                                            <!--begin::Title-->
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-dark">Stock Report</span>
                                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Total 2,356 Items in the Stock</span>
                                            </h3>
                                            <!--end::Title-->
                                            <!--begin::Actions-->
                                            <div class="card-toolbar">
                                                <!--begin::Filters-->
                                                <div class="d-flex flex-stack flex-wrap gap-4">
                                                    <!--begin::Destination-->
                                                    <div class="d-flex align-items-center fw-bold">
                                                        <!--begin::Label-->
                                                        <div class="text-muted fs-7 me-2">Cateogry</div>
                                                        <!--end::Label-->
                                                        <!--begin::Select-->
                                                        <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                            <option></option>
                                                            <option value="Show All" selected="selected">Show All</option>
                                                            <option value="a">Category A</option>
                                                            <option value="b">Category B</option>
                                                        </select>
                                                        <!--end::Select-->
                                                    </div>
                                                    <!--end::Destination-->
                                                    <!--begin::Status-->
                                                    <div class="d-flex align-items-center fw-bold">
                                                        <!--begin::Label-->
                                                        <div class="text-muted fs-7 me-2">Status</div>
                                                        <!--end::Label-->
                                                        <!--begin::Select-->
                                                        <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                                            <option></option>
                                                            <option value="Show All" selected="selected">Show All</option>
                                                            <option value="In Stock">In Stock</option>
                                                            <option value="Out of Stock">Out of Stock</option>
                                                            <option value="Low Stock">Low Stock</option>
                                                        </select>
                                                        <!--end::Select-->
                                                    </div>
                                                    <!--end::Status-->
                                                    <!--begin::Search-->
                                                    <a href="../dist/apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View Stock</a>
                                                    <!--end::Search-->
                                                </div>
                                                <!--begin::Filters-->
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                                <!--begin::Table head-->
                                                <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-150px">Item</th>
                                                    <th class="text-end pe-3 min-w-100px">Product ID</th>
                                                    <th class="text-end pe-3 min-w-150px">Date Added</th>
                                                    <th class="text-end pe-3 min-w-100px">Price</th>
                                                    <th class="text-end pe-3 min-w-100px">Status</th>
                                                    <th class="text-end pe-0 min-w-75px">Qty</th>
                                                </tr>
                                                <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-bold text-gray-600">
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="#" class="text-dark text-hover-primary">Macbook Air M1</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#XGY-356</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">02 Apr, 2023</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,230</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="58">
                                                        <span class="text-dark fw-bold">58 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="#" class="text-dark text-hover-primary">Surface Laptop 4</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#YHD-047</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">01 Apr, 2023</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="0">
                                                        <span class="text-dark fw-bold">0 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="#" class="text-dark text-hover-primary">Logitech MX 250</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#SRR-678</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">24 Mar, 2023</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$64</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="290">
                                                        <span class="text-dark fw-bold">290 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="#" class="text-dark text-hover-primary">AudioEngine HD3</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#PXF-578</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">24 Mar, 2023</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="46">
                                                        <span class="text-dark fw-bold">46 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="#" class="text-dark text-hover-primary">HP Hyper LTR</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#PXF-778</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">16 Jan, 2023</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$4500</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="78">
                                                        <span class="text-dark fw-bold">78 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="#" class="text-dark text-hover-primary">Dell 32 UltraSharp</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#XGY-356</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">22 Dec, 2023</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="8">
                                                        <span class="text-dark fw-bold">8 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="#" class="text-dark text-hover-primary">Google Pixel 6 Pro</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#XVR-425</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">27 Dec, 2023</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="124">
                                                        <span class="text-dark fw-bold">124 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Table Widget 5-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Content-->
                    </div>

                </div>
                <!--end:::Main-->
