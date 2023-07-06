<form
    method="<?= $config["config"]["method"]??"GET" ?>"
    action="<?= $config["config"]["action"] ?>">
    <div class="row mb-6">
        <?php foreach ($config["inputs"] as $name=>$input):?>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="fv-row mb-0">
                <label for="<?= $name;?>" class="form-label fs-6 fw-bold mb-3"><?= $input["label"]?></label>
                <input
                    name="<?= $name;?>"
                    type="<?= $input["type"]?>"
                    placeholder=" <?= $input["placeholder"] ?? ""?>"
                    id="<?= $input["id"] ?? ""?>"
                    class="<?= $input["class"] ?? ""?>"
                    value="<?= $input["value"] ?? ""?>"
                >
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="d-flex">
        <input type="submit" class="<?= $config["config"]["submit"]["class"] ?>" id="<?= $config["config"]["submit"]["id"] ?>"  name="submit" value="<?= $config["config"]["submit"]["value"] ?>">
        <input type="reset"  class="<?= $config["config"]["cancel"]["class"] ?>" id="<?= $config["config"]["cancel"]["id"] ?>" value="<?= $config["config"]["cancel"]["value"] ?>">
    </div>

</form>