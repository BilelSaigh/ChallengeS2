
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
                                <?php if ($_SESSION['user']['role']===0):  ?>
                                <div id="kt_account_settings_profile_details" class="collapse show">
                                        <!--begin::Card body-->
                                        <div class="card-body border-top p-9">
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Website Name</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <input type="text" name="company" class="form-control form-control-lg form-control-solid"  id="title" placeholder="Website name" value="<?= $websiteTitle?>" />
                                                </div>
                                                <!--end::Col-->
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
                                </div>
                                <?php endif; ?>

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
                                <?php
                               if (!empty($errors)){
                                   foreach ($errors as $error){
                                        echo '
                                                <div class="alert alert-danger d-flex align-items-center p-5">
                                                    <i class="ki-duotone ki-shield-tick fs-2hx text-danger me-4"><span class="path1"></span><span class="path2"></span></i>
                                                    <div class="d-flex flex-column">
                                                        <h4 class="mb-1 text-dark">Something went wrong ! </h4>
                                                        <span>'.$error.'</span>
                                                    </div>
                                                </div>';
                                    }

                               }
                                ?>
                                <!--begin::Content-->
                                <div id="kt_account_settings_signin_method" class="collapse show">
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <!--begin::Email Address-->
                                        <div class="d-flex flex-wrap align-items-center">
                                            <!--begin::Label-->
                                            <div id="kt_signin_email">
                                                <div class="fs-6 fw-bold mb-1">Email Address</div>
                                                <div class="fw-semibold text-gray-600"><?= $user["email"] ?></div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Edit-->
                                            <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                                <!--begin::Form-->
                                                <form id="kt_signin_change_email" class="form" method="post" action="editUser" novalidate="novalidate">
                                                    <div class="row mb-6">
                                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                                            <div class="fv-row mb-0">
                                                                <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                                                <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="newEmail" value="<?= $user["email"] ?>" />
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
                                                <form id="kt_signin_change_password" method="post" action="editUser" class="form" novalidate="novalidate">
                                                    <div class="row mb-1">
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-0">
                                                                <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword"  value="<?= $user["pwd"] ?>"/>
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

                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Sign-in Method-->

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
                </div>
            </div>