<div class="container">
    <div class="row mt-5">
        <?php if(!empty($content)) :echo $content ;  endif ?>
    </div>
</div>

<section style="background-color: #eee;">
    <div class="container mt-5 my-5 py-5">
        <div class="row d-flex justify-content-center">

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
            }?>

            <section style="background-color: #eee;">
                <div class="container my-5 py-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-10 col-xl-8">
                            <div class="card">
        <?php foreach ($comments as $comment) : ?>
                                <div class="card-body">
                                    <div class="d-flex flex-start align-items-center">

                                        <div>
                                            <p class="text-muted small mb-0">
                                                Shared publicly - <?= $comment["created_date"]?>

                                            </p>
                                        </div>
                                    </div>

                                    <p class="mt-3 mb-4 pb-2">
                                        <?= $comment["content"]?>
                                    </p>

                                    <div class="small d-flex justify-content-start">
                                        <a href="" class=" link-danger d-flex align-items-center me-3">
                                            Report
                                        </a>
                                    </div>
                                </div>

        <?php endforeach; ?>
                                <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                                    <div class="d-flex flex-start w-100">
                                        <?php  if (isset($_SESSION["user"])){ $this->modal("form", $form );} ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>



