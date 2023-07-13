<div id="kt_app_toolbar" class="app-toolbar pt-lg-9 pt-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap">
        <!--begin::Toolbar wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column gap-3 me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">My Website</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="/profil" class="text-gray-500">
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
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Projects</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-500">My Website</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar wrapper-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
<!--begin::Content-->
<div id="kt_app_content" class="app-content pb-0">
    <!--begin::Stats-->
    <div class="row g-6 g-xl-9">
        <div class="col-lg-6 col-xxl-4">
            <!--begin::Budget-->
            <div class="card h-100">
                <div class="card-body p-9">
                    <div class="fs-2hx fw-bold"><?= $subscribers ?></div>
                    <div class="fs-4 fw-semibold text-gray-400 mb-7">Subscribers</div>
                </div>
            </div>
            <!--end::Budget-->
        </div>
        <div class="col-lg-6 col-xxl-4">
            <!--begin::Clients-->
            <div class="card h-100">
                <div class="card-body p-9">
                    <!--begin::Heading-->
                    <div class="fs-2hx fw-bold"><?= $team ?></div>
                    <div class="fs-4 fw-semibold text-gray-400 mb-7">Our Team</div>
                    <!--end::Heading-->
                    <!--begin::Users group-->
                    <div class="symbol-group symbol-hover mb-9">

                        <?php   foreach ($users as $pics) :
                                if ($pics['role']==1 ||$pics['role']==2||$pics['role']==0) :?>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="<?= $pics['firstname'] ?>">
                                        <img alt="Pic" src="<?= $pics['logo'] ?>" />
                                    </div>
                         <?php endif;
                        endforeach;?>
                    </div>
                    <!--end::Users group-->
                </div>
            </div>
            <!--end::Clients-->
        </div>
    </div>
    <!--end::Stats-->
    <!--begin::Toolbar-->
    <div class="d-flex flex-wrap flex-stack my-5">
        <!--begin::Heading-->
        <h2 class="fs-2 fw-semibold my-2">Pages
            <span class="fs-6 text-gray-400 ms-1">by Admin</span></h2>
        <!--end::Heading-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Row-->
    <div class="row g-6 g-xl-9">
        <?php
          foreach($page as $infos) :?>
        <!--begin::Col-->
        <div class="col-md-6 col-xl-4">
            <!--begin::Card-->
            <a href="/showpage?id=<?= $infos["id"]?>" class="card border-hover-primary">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-9">
                    <!--begin::Card Title-->
                    <div class="card-title m-0">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px w-50px bg-light">
                            <img src="assets/media/svg/brand-logos/plurk.svg" alt="image" class="p-3" />
                        </div>
                        <!--end::Avatar-->
                    </div>
                    <!--end::Car Title-->
                    <!--begin::Status-->
                    <div class="card-toolbar">
                        <?php if($infos["status"] == "1") : ?>
                            <div class="badge badge-light-success fw-bold me-auto px-4 py-3">Published</div>
                        <?php else :?>
                            <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
                        <?php endif;?>
                    </div>
                    <!--end::Card Status-->
                </div>
                <!--end:: Card header-->
                <!--begin:: Card body-->
                <div class="card-body p-9">
                    <!--begin::Name-->
                    <div class="fs-3 fw-bold text-dark"><?=$infos["title"] ?></div>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7"><?=$infos["description"] ?></p>
                    <!--end::Description-->
                    <!--begin::Info-->
                    <div class="d-flex flex-wrap mb-5">
                        <!--begin::Due-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                            <div class="fs-6 text-gray-800 fw-bold"><?php
                                try {
                                    $date = new DateTime($infos["updated_at"]);
                                } catch (Exception $e) {
                                    echo 'Une erreur est survenue, contacter le : 0652144169';
                                }
                                $formattedDate = $date->format('M d, Y');
                                echo $formattedDate;  ?>
                            </div>
                            <div class="fw-semibold text-gray-400">Last Update</div>
                        </div>
                        <!--end::Due-->
                        <!--begin::Budget-->
                        <div class="border border-gray-300 border-dashed rounded min-w-120px py-3 px-2 mb-2">
                            <button href="/pagebuilder" type="button"  class="btn btn-primary btn-sm me-3">  Edit Page</button>

                        </div>
                        <!--end::Budget-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end:: Card body-->
            </a>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <?php endforeach; ?>
    </div>
    <!--end::Row-->