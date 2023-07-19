<form
        method="<?= $config["config"]["method"]??"GET" ?>"
        action="<?= $config["config"]["action"] ?>"
        class="form w-100" >

    <?php foreach ($config["inputs"] as $name=>$input):?>
    <label class="form-label fs-6 fw-bold text-dark"><?= $name?></label>
        
            <input
                    name="<?= $name;?>"
                    type="<?= $input["type"]?>"
                    placeholder=" <?= $input["placeholder"]?>"
                    class="form-control form-control-lg my-3 form-control-solid"

            >

    <?php endforeach; ?>



    <input type="submit" class="btn btn-lg btn-primary w-100 mb-5 my-3" name="submit" value="<?= $config["config"]["submit"] ?>">
<!--    <input type="reset"  value="--><?php //= $config["config"]["cancel"] ?><!--">-->
</form>