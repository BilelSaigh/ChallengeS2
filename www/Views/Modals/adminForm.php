<form
    method="<?= $config["config"]["method"]??"GET" ?>"
    action="<?= $config["config"]["action"] ?>"
    id="<?= $config["config"]["id"] ?>">

    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

         <?php foreach ($config["inputs"] as $name=>$input):?>
        <?php if($input["type"] == "select"):?>
                     <label class="required fw-semibold fs-6 mb-2"><?= $name;?></label>
            <select name="<?= $name;?>" class="<?= $input["class"];?>">
                <?php foreach ($input["options"] as $option):?>
                    <option><?= $option;?></option>
                <?php endforeach;?>
            </select>
        <?php elseif($input["type"] == "radio"): ?>
                 <?php foreach ($input["value"] as $value=>$role):?>
                        <div class="d-flex fv-row">
                            <div class="form-check form-check-solid">
                                    <input
                                        class="<?= $input["class"];?>"
                                        type="<?= $input["type"]?>"
                                        value="<?= $value ?>"
                                        id="<?= $role ?>"
                                        name="<?= $value ?>"
                                    >
                                    <label class="form-check-label" for="<?= $role ?>" >
                                        <div class="fw-bold text-gray-800"><?= $role ?></div>
                                    </label>
                            </div>
                        </div>
                        <div class='separator separator-dashed my-5'></div>
                 <?php endforeach;?>

        <?php else: ?>
            <div class="fv-row mb-7">
                <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2"><?= $name;?></label>
                    <!--end::Label-->
                    <input
                        name="<?= $name;?>"
                        class="<?= $input["class"];?>"
                        type="<?= $input["type"]?>"
                        placeholder=" <?= $input["placeholder"]?>"
                        value=" <?= $input["value"]?? ""?>"
                    >
            </div>
        <?php endif;?>
    <?php endforeach; ?>
    </div>
        <div class="text-center pt-15">
            <input type="submit" id="submitForm" class="btn btn-primary" data-kt-users-modal-action="submit" name="submit" value="<?= $config["config"]["submit"] ?>">
<!--            <span class="indicator-label">--><?php //= $config["config"]["submit"] ?><!--</span>-->
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            <input  type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" value="<?= $config["config"]["cancel"] ?>">
        </div>
</form>