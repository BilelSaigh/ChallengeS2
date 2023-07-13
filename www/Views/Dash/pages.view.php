<div class="card">
    <div class="card-header border-0 pt-6">
        <!--begin::Card header-->
        <!--    <div class="card-header border-0 pt-6">-->
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <input type="text" data-kt-page-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search page" />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-page-table-toolbar="base">
                <!--begin::Filter-->
                <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>Filter</button>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Content-->
                    <div class="px-7 py-5" data-kt-page-table-filter="form">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-semibold">Role:</label>
                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-page-table-filter="role" data-hide-search="true">
                                <option></option>
                                <option value="Brouillon">Brouillon</option>
                                <option value="Publish">Publish</option>
                            </select>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-semibold">Status:</label>
                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-page-table-filter="two-step" data-hide-search="true">
                                <option></option>
                                <option value="Brouillon">Brouillon</option>
                                <option value="Publish">Publish</option>
                            </select>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-page-table-filter="reset">Reset</button>
                            <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-page-table-filter="filter">Apply</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Menu 1-->
                <!--begin::Add page-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_page">
                    <i class="ki-duotone ki-plus fs-2"></i>Add Page</button>
                <!--end::Add page-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-page-table-toolbar="selected">
                <div class="fw-bold me-5">
                    <span class="me-2" data-kt-page-table-select="selected_count"></span>Selected</div>
                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
            </div>
            <!--end::Group actions-->
            <!--begin::Modal - Add task-->
            <div class="modal fade" id="kt_modal_add_page" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_page_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add page</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-page-modal-action="close">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <?php print_r($errors??null);?>
                            <?php $this->modal("adminForm", $form );?>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Add task-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body py-4">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_page">
            <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_page .form-check-input" value="1" />
                    </div>
                </th>
                <th class="min-w-125px">Page</th>
                <th class="min-w-125px">Title</th>
                <th class="min-w-125px">Last edit</th>
                <th class="min-w-125px">Status</th>
                <th class="text-end min-w-100px">Actions</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
            <?php foreach($page as $infos) :?>
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="#">
                                <div class="symbol-label fs-3 bg-light-danger text-danger"><?=$infos["id"]?></div>
                            </a>
                        </div>
                        <!--end::Avatar-->
                    </td>
                    <td>
                        <div class="badge badge-light fw-bold"><?=$infos["title"]?></div>
                    </td>
                    <td>
                        <div class="badge badge-light fw-bold"><?=$infos["updated_at"]?></div>
                    </td>
                    <td>
                        <?php if($infos["status"] == "1") : ?>
                            <div class="badge badge-light-success fw-bold">Publish</div>
                        <?php else :?>
                            <div class="badge badge-light-warning fw-bold">Brouillon</div>
                        <?php endif;?>

                    </td>
                    <td class="text-end">
                        <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-page-table-filter="delete_row">Delete</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        <!--end::Table-->
        <!--end::Card body-->
    </div>
</div>
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