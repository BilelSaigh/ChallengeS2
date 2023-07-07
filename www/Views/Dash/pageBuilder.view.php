
<div class='container-fluid bg-light'>
    <div class='row'>
        <div id='palette' class='col-sm-3 border p-4'>
        <label>Title</label>
        <input class="input-group" value="<?= $page["name"]?? ""?>">
            <div class='row'>
                <div class='col'>
                    <div class="card card-shadow" data-value='image'>
                        <div class="card-body">
                            Image
                        </div>
                    </div>
                </div>
                <div class='col'>
                    <div class="card card-shadow" data-value='form'>
                        <div class="card-body">
                            Form
                        </div>
                    </div>
                </div>
                <div class='col'>
                    <div class="card card-shadow" data-value='button'>
                        <div class="card-body">
                            Button
                        </div>
                    </div>
                </div>
                <div class='col'>
                    <div class="card card-shadow" data-value='column'>
                        <div class="card-body">
                            Column
                        </div>
                    </div>
                </div>
                <div class='col'>
                    <div class="card card-shadow" data-value='row'>
                        <div class="card-body">
                            Row
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-sm-9 bg-dark pt-4 pb-4'>
            <div class='container bg-light p-2'>
                <div class="row">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><?= $page["websiteName"]?? "Nom du site " ?></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    <a class="nav-link" href="#">Contact</a>
                                    <a class="nav-link" href="#">Présentation</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--begin::Card-->
                <div class="card card-bordered mb-10">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Container A</h3>
                        </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="row row-cols-lg-3 g-10 min-h-200px container-fluid">
                            <!--begin::Col-->
                            <div class="col draggable">
                                <!--begin::Card-->
                                <div class="card bg-light-primary">
                                    ...
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--begin::Col-->

                            <!--end::Col-->
                            <div class="col draggable">
                                <!--begin::Card-->
                                <div class="card bg-light-primary">
                                    ...
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--begin::Col-->

                            <!--end::Col-->
                            <div class="col draggable">
                                <!--begin::Card-->
                                <div class="card bg-light-primary">
                                    ...
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->

                <!--begin::Row-->
                <div class="row row-cols-lg-2 g-10">
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Card-->
                        <div class="card card-bordered">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Container B</h3>
                                </div>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Row-->
                                <div class="row row-cols-1 g-10 min-h-200px container-fluid">
                                    <!--begin::Col-->
                                    <div class="col draggable dropzone">
                                        <!--begin::Card-->
                                        <div class="card bg-light-success">
                                            ...
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col draggable dropzone">
                                        <!--begin::Card-->
                                        <div class="card bg-light-success">
                                            ...
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col draggable dropzone">
                                        <!--begin::Card-->
                                        <div class="card bg-light-success">
                                            ...
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Card-->
                        <div class="card card-bordered">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Container C</h3>
                                </div>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Row-->
                                <div class="row row-cols-1 g-10 min-h-200px container-fluid">
                                    <!--begin::Col-->
                                    <div class="col draggable dropzone">
                                        <!--begin::Card-->
                                        <div class="card bg-light-danger">
                                            ...
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col draggable dropzone">
                                        <!--begin::Card-->
                                        <div class="card bg-light-danger">
                                            ...
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <div class='row'>
                    <div class='col'>
                        <div class='email-body container-fluid p-0'>
                            <div class='dropzone pb-3'></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <footer class="page-footer font-small blue ">
                        <div class="footer-copyright text-center py-3">© 2023 Copyright:
                            <a class="" href=""> <?= $page["websiteName"]?? " URI tu site" ?></a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="submit" class="btn btn-primary my-2" id="save" name="page" value="Save changes">
        </div>

    </div>
</div>
