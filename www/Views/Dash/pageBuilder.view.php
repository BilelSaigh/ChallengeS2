<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>KEditor - Kademi Content Editor</title>
    <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/plugins/custom/bootstrap-3.4.1/css/bootstrap.min.css" data-type="keditor-style" />
    <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/plugins/custom/font-awesome-4.7.0/css/font-awesome.min.css" data-type="keditor-style" />
    <!-- Start of KEditor styles -->
    <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/css/keditor.css" data-type="keditor-style" />
    <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/css/keditor-components.css" data-type="keditor-style" />
    <!-- End of KEditor styles -->
    <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/plugins/custom/code-prettify/src/prettify.css" />
    <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/css/examples.css" />
</head>

<body>
<div data-keditor="html">
    <div id="content-area"></div>
</div>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/jquery-1.11.3/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/bootstrap-3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/ckeditor-4.11.4/ckeditor.js"></script>
<script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/formBuilder-2.5.3/form-builder.min.js"></script>
<script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/formBuilder-2.5.3/form-render.min.js"></script>
<!-- Start of KEditor scripts -->
<script type="text/javascript" src="Views/Dash/theme/dist/assets/js/keditor.js"></script>
<script type="text/javascript" src="Views/Dash/theme/dist/assets/js/keditor-components.js"></script>
<!-- End of KEditor scripts -->
<script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/code-prettify/src/prettify.js"></script>
<script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/js-beautify-1.7.5/js/lib/beautify.js"></script>
<script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/js-beautify-1.7.5/js/lib/beautify-html.js"></script>
<script type="text/javascript" src="Views/Dash/theme/dist/assets/js/examples.js"></script>
<script type="text/javascript" data-keditor="script">
    $(function () {
        $('#content-area').keditor();
        $('.fa-save').click(function (){
            console.log("ok")
            console.log("Content to save "+ $('#content-area').keditor('getContent', true))
        })
    });
</script>
</body>
</html>