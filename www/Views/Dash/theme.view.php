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
                    <select class="form-select" aria-label="Default select example">
                        <option value="Arial, sans-serif">Arial</option>
                        <option value="Verdana, sans-serif">Verdana</option>
                        <option value="Courier New, monospace">Courier New</option>
                        <option value="Times New Roman, serif">Times New Roman</option>
                        <option value="Georgia, serif">Georgia</option>
                        <option value="Roboto, sans-serif">Roboto</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fontSizeSelector">Taille de la police :</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="12px">12</option>
                        <option value="14px">14</option>
                        <option value="16px">16</option>
                        <option value="18px">18</option>
                        <option value="20px">20</option>
                        <option value="24px">24</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="buttonColorPicker">Couleur des boutons :</label>
                    <input type="color" id="buttonColorPicker" class="form-control" value="#fff">
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

<script>
    // Récupérer les éléments DOM pertinents
    const fontSelector = document.querySelector('.font');
    const fontSizeSelector = document.querySelector('.fontSize');
    const elementsWithFontSelector = document.getElementsByClassName('fontSelector');
    const colorPicker = document.getElementById('colorPicker');
    const buttonColorPicker = document.getElementById('buttonColorPicker');
    const colorTexts = document.getElementsByClassName('color-pb');
    const buttons = document.getElementsByClassName('btn-pb');
    const save = document.getElementById('save')
    save.addEventListener('click', () => {
        const selectedFont          = fontSelector.value;
        const selectedFontSize      = fontSizeSelector.value;
        const selectedColor         = colorPicker.value;
        const selectedButtonColor   = buttonColorPicker.value;
        $.ajax({
            type:'post',
            url:'/admin/front',
            data: { action: 'front', font: selectedFont, color: selectedColor,btnColor: selectedButtonColor,fontSize:selectedFontSize},
            success:function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Successful new theme',
                    text: 'Your new changes are ok',
                    showConfirmButton: false,
                    timer: 1500
                });
            },
            error:function (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'A problem has been encountered',
                    text: 'Call the 0652144163',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        })
    })
</script>