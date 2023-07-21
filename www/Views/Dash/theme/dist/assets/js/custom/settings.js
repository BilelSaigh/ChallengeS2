    // Récupérer les éléments DOM pertinents
    const fontSelector = document.querySelector('.font');
    const fontSizeSelector = document.querySelector('.fontSize');
    const elementsWithFontSelector = document.getElementsByClassName('fontSelector');
    const colorPicker = document.getElementById('colorPicker');
    const buttonColorPicker = document.getElementById('buttonColorPicker');
    const colorTexts = document.getElementsByClassName('color-pb');
    const buttons = document.getElementsByClassName('btn-pb');
    const save = document.getElementById('save')

    if (save){
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
}

    const newWebsiteTitle = document.getElementById("kt_account_profile_details_submit")
    if (newWebsiteTitle){
        newWebsiteTitle.addEventListener('click', e => {
            const title = $('#title').val()
            $.ajax({
                type: "post",
                url:"/admin/front",
                data: {action:"title", title:title},
                success:function (response) {
                    console.log(response)
                    Swal.fire({
                        icon: 'success',
                        title: 'Successful new theme',
                        text: 'The name of the website is '+title,
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
    }


    /** Ajouter/ supprimer  du menu */

