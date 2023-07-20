<div class='container-fluid bg-light'>
    <div class='row'>
        <div class='col border py-4'>
            <h2 class="text-center my-3">Options de personnalisation :</h2>
            <div class="col-sm-3 align-center">
                <div class="form-group">
                    <label for="colorPicker">Couleur du texte :</label>
                    <input type="color" id="colorPicker" class="form-control">
                </div>
                <div class="form-group">
                    <label for="fontSelector">Police :</label>
                    <select class="form-select font" aria-label="Default select example">
                        <option <?= (!empty($setting) && $setting['polices']=="Arial, sans-serif")?"selected": " "  ?> value="Arial, sans-serif">Arial</option>
                        <option  <?= (!empty($setting) && $setting['polices']== "Verdana, sans-serif")?"selected": " "  ?>    value="Verdana, sans-serif">Verdana</option>
                        <option <?= (!empty($setting) && $setting['polices']=="Courier New, monospace")?"selected": " "  ?>    value="Courier New, monospace">Courier New</option>
                        <option  <?= (!empty($setting) && $setting['polices']== "Times New Roman, serif")?"selected": " "  ?>   value="Times New Roman, serif">Times New Roman</option>
                        <option  <?= (!empty($setting) && $setting['polices']== "Georgia, serif")?"selected": " "  ?>   value="Georgia, serif">Georgia</option>
                        <option  <?= (!empty($setting) && $setting['polices']== "Roboto, sans-serif")?"selected": " "  ?>   value="Roboto, sans-serif">Roboto</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fontSizeSelector">Taille de la police :</label>
                    <select class="form-select fontSize" aria-label="Default select example">
                        <option <?= (!empty($setting) && $setting['text_size']== "12px")?"selected": " " ?>  value="12px">12</option>
                        <option  <?= (!empty($setting) && $setting['text_size']== "14px")?"selected": " " ?>  value="14px">14</option>
                        <option <?= (!empty($setting) && $setting['text_size']== "16px")?"selected": " " ?>  value="16px">16</option>
                        <option <?= (!empty($setting) && $setting['text_size']== "18px")?"selected": " " ?>  value="18px">18</option>
                        <option  <?= (!empty($setting) && $setting['text_size']== "20px")?"selected": " " ?> value="20px">20</option>
                        <option <?= (!empty($setting) && $setting['text_size']== "24px")?"selected": " " ?>  value="24px">24</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="buttonColorPicker">Couleur des boutons :</label>
                    <input type="color" id="buttonColorPicker" class="form-control" >
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="submit" class="btn btn-primary my-2 text-center" id="save" name="page" value="Save changes ">
        </div>
    </div>
</div>

