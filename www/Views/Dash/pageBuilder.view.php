<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?= $title ?></title>
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/plugins/custom/bootstrap-3.4.1/css/bootstrap.min.css" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/plugins/custom/font-awesome-4.7.0/css/font-awesome.min.css" data-type="keditor-style" />
        <!-- Start of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/css/keditor.css" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/css/keditor-components.css" data-type="keditor-style" />
        <!-- End of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/plugins/custom/code-prettify/src/prettify.css" />
        <link rel="stylesheet" type="text/css" href="../Views/Dash/theme/dist/assets/css/examples.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/admin/pages">
                        <svg width="100" height="30" viewBox="0 0 269 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.376 84.192C13.088 84.192 9.632 82.112 7.008 77.952C4.448 73.728 2.944 68.032 2.496 60.864C2.432 59.84 2.4 58.336 2.4 56.352C2.4 48.608 3.68 41.76 6.24 35.808C8.8 29.792 12.416 25.152 17.088 21.888C21.824 18.56 27.328 16.896 33.6 16.896C39.872 16.896 45.344 18.56 50.016 21.888C54.752 25.152 58.368 29.76 60.864 35.712C63.424 41.664 64.704 48.544 64.704 56.352C64.704 58.336 64.672 59.84 64.608 60.864C64.16 68.16 62.656 73.856 60.096 77.952C57.536 82.048 54.08 84.096 49.728 84.096C46.208 84.096 43.744 83.136 42.336 81.216C40.992 79.296 40.32 76.96 40.32 74.208C40.32 72.928 40.416 71.808 40.608 70.848C37.28 70.976 34.336 71.04 31.776 71.04C30.176 71.04 28.416 70.976 26.496 70.848C26.688 71.808 26.784 72.928 26.784 74.208C26.784 77.024 26.08 79.392 24.672 81.312C23.328 83.232 20.896 84.192 17.376 84.192ZM25.824 53.76C29.28 53.632 31.808 53.568 33.408 53.568C35.136 53.568 37.664 53.632 40.992 53.76C41.12 53.056 41.184 52 41.184 50.592C41.184 47.584 40.544 45.152 39.264 43.296C37.984 41.376 36 40.416 33.312 40.416C30.688 40.416 28.736 41.344 27.456 43.2C26.176 45.056 25.536 47.456 25.536 50.4C25.536 51.488 25.632 52.608 25.824 53.76ZM92.373 84C87.829 84 83.797 82.912 80.277 80.736C76.821 78.496 74.165 75.616 72.309 72.096C70.453 68.512 69.525 64.704 69.525 60.672C69.525 55.936 70.485 51.936 72.405 48.672C74.389 45.344 76.917 42.88 79.989 41.28C83.125 39.68 86.485 38.88 90.069 38.88C93.653 38.88 96.853 39.648 99.669 41.184C99.541 39.84 99.285 38.4 98.901 36.864C98.581 35.328 98.357 34.368 98.229 33.984C97.717 32 97.333 30.336 97.077 28.992C96.821 27.648 96.693 26.304 96.693 24.96C96.693 22.272 97.493 20.224 99.093 18.816C100.693 17.408 102.613 16.704 104.853 16.704C108.437 16.704 111.349 18.496 113.589 22.08C115.829 25.664 117.429 30.112 118.389 35.424C119.413 40.736 119.925 46.112 119.925 51.552C119.925 58.912 118.229 66.176 114.837 73.344C111.509 80.448 104.021 84 92.373 84ZM92.949 68.832C94.677 68.832 96.181 68.192 97.461 66.912C98.741 65.568 99.381 64 99.381 62.208C99.381 60.416 98.741 58.848 97.461 57.504C96.181 56.16 94.677 55.488 92.949 55.488C91.221 55.488 89.685 56.16 88.341 57.504C87.061 58.848 86.421 60.416 86.421 62.208C86.421 64 87.061 65.568 88.341 66.912C89.685 68.192 91.221 68.832 92.949 68.832ZM146.965 84C142.229 84 138.037 83.072 134.389 81.216C130.741 79.36 127.893 76.768 125.845 73.44C123.861 70.048 122.869 66.24 122.869 62.016C122.869 57.856 123.861 54.016 125.845 50.496C127.893 46.976 130.709 44.16 134.293 42.048C137.877 39.936 141.941 38.88 146.485 38.88C150.581 38.88 154.197 39.712 157.333 41.376C160.469 43.04 162.869 45.248 164.533 48C166.197 50.688 167.029 53.504 167.029 56.448C167.029 61.248 165.205 64.768 161.557 67.008C157.973 69.184 153.685 70.272 148.693 70.272C145.365 70.272 142.549 69.856 140.245 69.024C142.165 72.16 145.333 73.728 149.749 73.728C151.541 73.728 153.461 73.504 155.509 73.056C156.277 72.864 157.013 72.768 157.717 72.768C159.125 72.768 160.245 73.12 161.077 73.824C161.973 74.528 162.421 75.488 162.421 76.704C162.421 78.688 161.205 80.416 158.773 81.888C156.341 83.296 152.405 84 146.965 84ZM140.533 57.312C141.109 58.208 141.877 58.88 142.837 59.328C143.861 59.712 144.981 59.904 146.197 59.904C147.605 59.904 148.821 59.584 149.845 58.944C150.933 58.304 151.477 57.472 151.477 56.448C151.477 55.296 150.997 54.304 150.037 53.472C149.141 52.64 147.829 52.224 146.101 52.224C144.373 52.224 142.997 52.768 141.973 53.856C141.013 54.88 140.533 56.032 140.533 57.312ZM197.483 84C185.835 84 178.315 80.448 174.923 73.344C171.595 66.176 169.931 58.912 169.931 51.552C169.931 46.112 170.411 40.736 171.371 35.424C172.395 30.112 174.027 25.664 176.267 22.08C178.507 18.496 181.419 16.704 185.003 16.704C187.243 16.704 189.163 17.408 190.763 18.816C192.363 20.224 193.163 22.272 193.163 24.96C193.163 26.304 193.035 27.648 192.779 28.992C192.523 30.336 192.139 32 191.627 33.984C191.499 34.368 191.243 35.328 190.859 36.864C190.539 38.4 190.315 39.84 190.187 41.184C193.003 39.648 196.203 38.88 199.787 38.88C203.371 38.88 206.699 39.68 209.771 41.28C212.907 42.88 215.435 45.344 217.355 48.672C219.339 51.936 220.331 55.936 220.331 60.672C220.331 64.704 219.403 68.512 217.547 72.096C215.691 75.616 213.003 78.496 209.483 80.736C206.027 82.912 202.027 84 197.483 84ZM196.907 68.832C198.635 68.832 200.139 68.192 201.419 66.912C202.763 65.568 203.435 64 203.435 62.208C203.435 60.416 202.763 58.848 201.419 57.504C200.139 56.16 198.635 55.488 196.907 55.488C195.179 55.488 193.675 56.16 192.395 57.504C191.115 58.848 190.475 60.416 190.475 62.208C190.475 64 191.115 65.568 192.395 66.912C193.675 68.192 195.179 68.832 196.907 68.832ZM240.798 31.584C245.342 31.584 249.31 32.48 252.702 34.272C256.094 36 258.75 38.752 260.67 42.528C262.59 46.304 263.55 51.232 263.55 57.312C263.55 63.648 262.462 68.864 260.286 72.96C258.174 77.056 255.294 80.096 251.646 82.08C248.062 84 243.998 84.96 239.454 84.96C236.702 84.96 234.27 84.704 232.158 84.192C230.11 83.744 228.222 83.072 226.494 82.176V74.688C228.286 75.52 230.238 76.224 232.35 76.8C234.462 77.376 236.862 77.664 239.55 77.664C243.006 77.664 245.854 76.896 248.094 75.36C250.334 73.824 251.998 71.584 253.086 68.64C254.238 65.632 254.814 61.984 254.814 57.696C254.814 51.296 253.598 46.56 251.166 43.488C248.798 40.416 245.054 38.88 239.934 38.88C238.142 38.88 236.158 39.104 233.982 39.552C231.87 40 230.046 40.608 228.51 41.376L225.918 34.368C227.454 33.6 229.566 32.96 232.254 32.448C235.006 31.872 237.854 31.584 240.798 31.584Z" fill="black"/>
                        </svg>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <div class=" navbar-form navbar-left form-group">
                                <select id="versionDropdown" name="versionDropdown" class="form-select form-control">
                                   <option selected>Select the version you want </option>
                                    <?php foreach ($allVersion as $version) : ?>
                                        <option value="<?= $version["id"]?>"> <?= "Version du ".$version["updated_at"] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <button id="restoreButton" class="btn btn-default">Restore last version</button>
                            </div>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (!empty($page)):?>
                                <li>
                                        <?php if (!empty($status) == 0):?>
                                            <a  id="publish" href="/preview?id=<?= $_SESSION['page']?>" target="_blank">Publish</a>
                                        <?php elseif (!empty($status) == 1): ?>
                                            <a  id="backToDraft" >Back to draft </a>
                                        <?php  endif;?>
                                        <?php  endif;?>
                                </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <main>
        <div class="container my-3">
            <div class="row">
                <div class="col">
                        <div class="form-group">
                            <label for="inputPassword2" class="visually-hidden">Title : </label>
                            <input type="text" class="form-control"  id="saveTitle" placeholder="Title" value="<?= $title ?? "Title" ?>">
                        </div>
                            <button type="button" class="btn btn-primary mb-3" id="btnSaveTitle">Save Title</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <div class="form-group">
                            <input type="checkbox" name="comment" id="comment" <?= ($option)? "checked" : "" ?>> Add comment section
                        </div>
                </div>
            </div>
        </div>
        <div class="container-fluid ">
            <div data-keditor="html">
                <div id="content-area">
                    <?php if(!empty($page)) :echo $page->getContent() ;
                    endif ?>
                </div>
            </div>
        </div>
            <div class="container-fluid text-right  ">
                    <?php if($_SESSION['user']['role']===0 ): ?>
                        <button id="deletePage" class=" btn btn-danger mt-5 mb-2 py-3 px-3 my-2 mx-2">Delete page</button>
                    <?php endif; ?>
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
    <script type="text/javascript" src="../Views/Dash/theme/dist/assets/js/setStatus.js"></script>
    <script type="text/javascript" data-keditor="script">
        $(function () {
            $('#content-area').keditor();
            $('.fa-save').click(function (){
                if ($('#saveTitle').val() !=="Title"){
                    const content = $('#content-area').keditor('getContent', true)
                    $.ajax({
                        type: 'post',
                        url:' /updatePage',
                        data: { action: 'send-content',
                            content: content
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
                        location.assign('/admin/pages')
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
                if (newTitle !== "Title"){
                    $.ajax({
                        type: 'post',
                        url: '/updatepage',
                        data: {
                            action: 'editTitle',
                            title : newTitle
                        },
                        success: function (data) {
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
                            icon: 'success',
                            title: 'The change of status was a success',
                            text: 'Your page is a draft again',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        location.reload()
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
