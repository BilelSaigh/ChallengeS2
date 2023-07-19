<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>KEditor - Kademi Content Editor</title>
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/plugins/custom/bootstrap-3.4.1/css/bootstrap.min.css" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/plugins/custom/font-awesome-4.7.0/css/font-awesome.min.css" data-type="keditor-style" />
        <!-- Start of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/css/keditor.css" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/css/keditor-components.css" data-type="keditor-style" />
        <!-- End of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/plugins/custom/code-prettify/src/prettify.css" />
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/css/examples.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
    <main>
        <div class="mx-3">

            <div class="row my-3 align-center">
                <div class="col-6">
                    <label for="inputPassword2" class="visually-hidden"><?= $title ?? "Title" ?></label>
                    <input type="text" class="form-control"  id="saveTitle" placeholder="Title" value="<?= $title ?? "Title" ?>">
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary mb-3" id="btnSaveTitle">Save Title</button>
                </div>
            </div>
            <?php if (!empty($page)):?>
            <div class="col text-end">
                <?php if (!empty($status) == 0):?>
                    <a  id="publish" href="/preview?id=<?= $_SESSION['page']?>" class="btn btn-primary py-2 px-3 my-2" target="_blank">Publish</a>
                <?php elseif (!empty($status) == 1): ?>
                    <a  id="backToDraft"  class="btn btn-primary py-2 px-3 my-2">Back to draft </a>
                <?php  endif;?>
            </div>

            <div class="row">
                <div class="col-6">
                    <select id="versionDropdown" name="versionDropdown" class="form-select">
                        <?php foreach ($allVersion as $version) : ?>
                            <option value="<?= $version["id"]?>"> <?= "Version du ".$version["updated_at"] ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-6">
                    <button id="restoreButton" class="btn btn-primary my-2">Restore last version</button>
                </div>
            </div>
        </div>
        </div>
            <?php if($_SESSION['user']['role']===0 ): ?>
                <div class="row">
                    <div class="col text-end">
                        <button id="deletePage" class="btn btn-danger py-3 px-3 my-2 mx-2">Delete page</button>
                    </div>
                </div>
            <?php endif; ?>
            <?php endif; ?>

        <div class="container-fluid">
            <div data-keditor="html">
                <div id="content-area">
                    <?php if(!empty($page)) :echo $page->getContent() ;
                    endif ?>
                </div>
            </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/plugins/custom/jquery-1.11.3/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/plugins/custom/bootstrap-3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/plugins/custom/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/plugins/custom/ckeditor-4.11.4/ckeditor.js"></script>
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/plugins/custom/formBuilder-2.5.3/form-builder.min.js"></script>
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/plugins/custom/formBuilder-2.5.3/form-render.min.js"></script>
    <!-- Start of KEditor scripts -->
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/js/keditor.js"></script>
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/js/keditor-components.js"></script>
    <!-- End of KEditor scripts -->
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/plugins/custom/code-prettify/src/prettify.js"></script>
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/plugins/custom/js-beautify-1.7.5/js/lib/beautify.js"></script>
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/plugins/custom/js-beautify-1.7.5/js/lib/beautify-html.js"></script>
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/js/examples.js"></script>
    <script type="text/javascript" data-keditor="script">
        $(function () {
            $('#content-area').keditor();
            $('.fa-save').click(function (){
                if ($('#saveTitle').val() !=="Title"){
                    $.ajax({
                        type: 'post',
                        url:'/updatePage',
                        data: { action: 'send-content',
                            content: $('#content-area').keditor('getContent', true)
                        },
                        success: function (data){
                            $('#content-area').html($('#content-area').keditor('getContent', true));
                            Swal.fire({
                                icon: 'success',
                                title: 'Successful backup',
                                text: 'The changes have been saved successfully!',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        },
                        error: function (error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'A problem has been encountered',
                                text: 'Call the 0652144163',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    })
                }else {
                    Swal.fire({
                        icon: 'info',
                        title: 'OUPSs , something went wrong',
                        text: 'Frist you have to save the title of your page ! ',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }

            })
            $('#restoreButton').click(function (){
                var selectedVersionId = $("#versionDropdown").val();
                console.log(selectedVersionId)
                $.ajax({
                    type: 'post',
                    url:'/updatePage',
                    data: { action: 'undo', id: selectedVersionId},
                    success: function (data)
                    {
                        const datas = JSON.parse(data)
                        $('#content-area').keditor('setContent',datas.content)
                        Swal.fire({
                            icon: 'success',
                            title: 'Successful restoration',
                            text: 'The previous version has been restored successfully!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    error: function (error)
                    {
                        console.log("error"+error)
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
            $('#deletePage').click(function () {
                $.ajax({
                    type: 'post',
                    url: '/deletePage',
                    data: {
                        action: 'delete',
                    },
                    success: function (data) {
                         location.assign('pages')
                    },
                    error: function (error) {
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
            $('#btnSaveTitle').click(function () {
                const newTitle = $('#saveTitle').val();
                console.log(newTitle)
                if (newTitle !== "Title"){
                    $.ajax({
                        type: 'post',
                        url: '/updatepage',
                        data: {
                            action: 'editTitle',
                            title : newTitle
                        },
                        success: function (data) {
                            // console.log(data)
                            Swal.fire({
                                icon: 'success',
                                title: 'Your page is officialy created ',
                                text: 'You can start editing her!',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        },
                        error: function (error) {

                            const errorMessage = JSON.parse(error.responseText)
                            Swal.fire({
                                icon: 'error',
                                title: 'A problem has been encountered',
                                text: errorMessage.error,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    })

                }else {
                    Swal.fire({
                        icon: 'info',
                        title: 'OUPSS , something went wrong',
                        text: 'Frist you have to change your title page ! ',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            })
            $('#backToDraft').click(function () {
                $.ajax({
                    type: 'post',
                    url: '/updatePage',
                    data: {
                        action: 'backToDraft',
                    },
                    success: function (data) {
                        Swal.fire({
                            icon: 'succes',
                            title: 'The change of status was a success',
                            text: 'Your page is a draft again',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    error: function (error) {
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
        });
    </script>
    </body>
</html>