<!DOCTYPE html>
<html>
<head>
    <title>Template Front-end</title>
</head>
<body>
    <div class='container-fluid bg-light'>
        <div class='row'>
            <div id='palette' class='col-sm-3 border p-4'>
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
                    <div class='row'>
                        <div class='col'>
                            <div class='email-body container-fluid p-0'>
                                <div class='dropzone pb-3'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='container-fluid bg-light'>
        <div class='row'>
            <div class='col-sm-3 border p-4'>
                <h4>Options de personnalisation :</h4>
                <div class="form-group">
                    <label for="colorPicker">Couleur du texte :</label>
                    <input type="color" id="colorPicker" class="form-control">
                </div>
                <div class="form-group">
                    <label for="fontSelector">Police :</label>
                    <select class="font form-control" id="fontSelector">
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
                    <select class="fontSize form-control" id="fontSizeSelector">
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
                    <input type="color" id="buttonColorPicker" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-primary my-2" id="save" name="page" value="Save changes ">
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

        // Ajouter un gestionnaire d'événements au sélecteur de police pour changer la police des éléments en temps réel
        fontSelector.addEventListener('change', () => {
            const selectedFont = fontSelector.value;

            // Changer la police des éléments ayant la classe "fontSelector"
            for (let i = 0; i < elementsWithFontSelector.length; i++) {
                elementsWithFontSelector[i].style.fontFamily = selectedFont;
            }
        });

        // Ajouter un gestionnaire d'événements au sélecteur de taille de police pour changer la taille de la police des éléments en temps réel
        fontSizeSelector.addEventListener('change', () => {
            const selectedFontSize = fontSizeSelector.value;

            // Changer la taille de la police des éléments ayant la classe "fontSelector"
            for (let i = 0; i < elementsWithFontSelector.length; i++) {
                elementsWithFontSelector[i].style.fontSize = selectedFontSize;
            }
        });

        // Ajouter un gestionnaire d'événements au color picker pour changer toutes les couleurs de textes en temps réel
        colorPicker.addEventListener('input', () => {
            // Récupérer la couleur sélectionnée dans le color picker
            const selectedColor = colorPicker.value;

            // Changer toutes les couleurs de textes avec la couleur sélectionnée
            for (let i = 0; i < colorTexts.length; i++) {
                colorTexts[i].style.color = selectedColor;
            }
        });

        // Ajouter un gestionnaire d'événements au color picker pour changer la couleur des boutons en temps réel
        buttonColorPicker.addEventListener('input', () => {
            // Récupérer la couleur sélectionnée dans le color picker pour les boutons
            const selectedButtonColor = buttonColorPicker.value;

            // Changer la couleur des boutons avec la couleur sélectionnée
            for (let i = 0; i < buttons.length; i++) {
                buttons[i].style.backgroundColor = selectedButtonColor;
            }
        });
    </script>
</body>
</html>
