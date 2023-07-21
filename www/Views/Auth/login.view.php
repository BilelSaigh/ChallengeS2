<h2 class="text-center py-3">Se connecter</h2>

<?php if (!empty($errors)){
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

};?>
<?php

if (isset($form)) {
    $this->modal("form", $form);
} else {
    echo "Form not defined";
}

