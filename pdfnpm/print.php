<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <? include_once '../admin/head.php'; ?>
</head>

<body>
    <button class="btn btn-primary btn1 m-3" onclick="window.location.href='../'">Bosh sahifa</button>
    <div id="myContainer" style="height: auto"></div>
    <script src="node_modules/@accusoft/pdf-viewer/bundle.js"></script>
    <script type="text/javascript">
    var url_string = window.location.href; // www.test.com?filename=test
    var url = new URL(url_string);
    var paramValue = "../" + url.searchParams.get("name");
    //alert(paramValue)
    </script>
    <script>
    (async () => {
        window.myViewer = await window.Accusoft.PdfViewerControl.create({
            container: document.getElementById('myContainer'),

            // URL or Uint8Array for a PDF
            sourceDocument: paramValue,

            // Evaluate Professional features (page contents will be watermarked)
            licenseKey: 'eval',

            // Configure the UI:
            allowedControls: {
                // Enable or disable annotation tools (all false by default):
                ellipseTool: true,
                freehandDrawingTool: true,
                freehandSignatureTool: true,
                lineTool: true,
                rectangleTool: true,
                textHighlightTool: true,

                // Enable or disable other parts of the UI (all true by default):
                fullScreenToggle: true,
                nextAndPreviousPageButtons: true,
                pageNumberAndCount: true,
                printing: true,
                search: true,
                thumbnails: true,
                zoomInAndOutButtons: true
            }
        });
    })();
    </script>
</body>

</html>