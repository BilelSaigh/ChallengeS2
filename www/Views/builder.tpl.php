<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--    <head>-->
<!--        <meta charset="UTF-8" />-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1" />-->
<!--        <title>Edit Page</title>-->
<!--        <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/plugins/custom/bootstrap-3.4.1/css/bootstrap.min.css" data-type="keditor-style" />-->
<!--        <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/plugins/custom/font-awesome-4.7.0/css/font-awesome.min.css" data-type="keditor-style" />-->
<!--        <!-- Start of KEditor styles -->-->
<!--        <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/css/keditor.css" data-type="keditor-style" />-->
<!--        <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/css/keditor-components.css" data-type="keditor-style" />-->
<!--        <!-- End of KEditor styles -->-->
<!--        <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/plugins/custom/code-prettify/src/prettify.css" />-->
<!--        <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/css/examples.css" />-->
<!--        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">-->
<!---->
<!--    </head>-->
<!--    <body>-->
<!---->
<!--        <main>-->

        <h1>Template de front</h1>

        <?php include $this->view; ?>

<!--        </main>-->
<!---->
<!---->
<!---->
<!---->
<!--    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/jquery-1.11.3/jquery-1.11.3.min.js"></script>-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/bootstrap-3.4.1/js/bootstrap.min.js"></script>-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/ckeditor-4.11.4/ckeditor.js"></script>-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/formBuilder-2.5.3/form-builder.min.js"></script>-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/formBuilder-2.5.3/form-render.min.js"></script>-->
<!--    <!-- Start of KEditor scripts -->-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/js/keditor.js"></script>-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/js/keditor-components.js"></script>-->
<!--    <!-- End of KEditor scripts -->-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/code-prettify/src/prettify.js"></script>-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/js-beautify-1.7.5/js/lib/beautify.js"></script>-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/js-beautify-1.7.5/js/lib/beautify-html.js"></script>-->
<!--    <script type="text/javascript" src="Views/Dash/theme/dist/assets/js/examples.js"></script>-->
<!--    <script type="text/javascript" data-keditor="script">-->
<!--        $(function () {-->
<!--            $('#content-area').keditor();-->
<!--            $('.fa-save').click(function (){-->
<!--                $.ajax({-->
<!--                    type: 'post',-->
<!--                    url:'/updatePage',-->
<!--                    data: { action: 'send-content',-->
<!--                        content: $('#content-area').keditor('getContent', true)-->
<!--                    },-->
<!--                    success: function (data){-->
<!--                        console.log(data)-->
<!--                        $('#content-area').html($('#content-area').keditor('getContent', true));-->
<!--                        Swal.fire({-->
<!--                            icon: 'success',-->
<!--                            title: 'Sauvegarde réussie',-->
<!--                            text: 'Les modifications ont été enregistrées avec succès!',-->
<!--                            showConfirmButton: false,-->
<!--                            timer: 1500-->
<!--                        });-->
<!---->
<!---->
<!--                    },-->
<!--                    error: function (error) {-->
<!--                        console.log(error)-->
<!---->
<!--                    }-->
<!--                })-->
<!--                // console.log("Content to save "+ $('#content-area').keditor('getContent', true))-->
<!--            })-->
<!--            $('#restoreButton').click(function (){-->
<!--                $.ajax({-->
<!--                    type: 'post',-->
<!--                    url:'/updatePage',-->
<!--                    data: { action: 'undo',-->
<!--                    },-->
<!--                    success: function (data){-->
<!--                        Swal.fire({-->
<!--                            icon: 'success',-->
<!--                            title: 'Restauration réussie',-->
<!--                            text: 'La version précédente a été restaurée avec succès!',-->
<!--                            showConfirmButton: false,-->
<!--                            timer: 1500-->
<!--                        });-->
<!--                    },-->
<!--                    error: function (error) {-->
<!--                        console.log(error)-->
<!---->
<!--                    }-->
<!--                })-->
<!---->
<!--                // console.log("Content to save "+ $('#content-area').keditor('getContent', true))-->
<!--            })-->
<!--            $('#deletePage').click(function () {-->
<!--                $.ajax({-->
<!--                    type: 'post',-->
<!--                    url: '/deletePage',-->
<!--                    data: {-->
<!--                        action: 'delete',-->
<!--                    },-->
<!--                    success: function (data) {-->
<!--                        location.assign('pages')-->
<!--                    },-->
<!--                    error: function (error) {-->
<!--                        console.log(error)-->
<!---->
<!--                    }-->
<!--                })-->
<!--            })-->
<!--        });-->
<!--    </script>-->
<!--    </body>-->
<!--</html>-->