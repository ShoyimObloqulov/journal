# Accusoft PDF Viewer

[Accusoft PDF Viewer](https://www.accusoft.com/products/pdf-collection/accusoft-pdf-viewer/) is a client-only JavaScript library which allows you to easily embed PDF viewing and annotation functionality to your website or web application.

![Accusoft PDF Viewer Illustration](https://resource.accusoft.com/r01/wp-content/uploads/APDFV_Professional-Version-turq-730-banner.png)

## Live Demo

[Click here](https://accusoft.github.io/hello-accusoft-pdf-viewer-via-cdn/) for a live demo.

## Pricing and Editions

The Standard edition includes basic viewing features and is free-to-use. The Professional edition includes paid functionality like annotations, white labeling, and eSignatures. [Contact us](https://www.accusoft.com/contact-us/) for more information on pricing and editions.

## Quick Start

### Install `@accusoft/pdf-viewer`

```bash
npm install @accusoft/pdf-viewer
```

### Create a container div

Define a container DOM element on your page where you want the viewer to exist:

```html
<!-- NOTE: The viewer will only fill the size of your container.
       Make sure your container has a defined width and height! -->
<div id="myContainer" style="height: 800px;"></div>
```

### For mobile, define a viewport meta tag

For mobile, define a viewport `meta` tag in the `head` of your HTML which ensures the viewport is kept the same size as the device screen:

```html
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
```

### Import and create a viewer

Import `PdfViewerControl` and create a viewer:

```js
import { PdfViewerControl } from '@accusoft/pdf-viewer';

(async () => {
  window.myViewer = await PdfViewerControl.create({
    container: document.getElementById('myContainer'),

    // URL or Uint8Array for a PDF
    sourceDocument: 'https://yourdomain.com/documents/example.pdf'
  });
})();
```

Optionally, use a `licenseKey` of `'eval'` to evaluate Professional features, enabling the `allowedControls` you want, such as annotation tools:

```js
(async () => {
  // Create a viewer
  window.myViewer = await PdfViewerControl.create({
    container: document.getElementById('myContainer'),

    // URL or Uint8Array for a PDF
    sourceDocument: 'https://yourdomain.com/documents/example.pdf',

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
```

### Use a Script Tag Instead

As an alternative to `import`, you can also use `PdfViewerControl` via a
`script` tag.

To do this, either:

- Host the `bundle.js` included in the `@accusoft/pdf-viewer` npm package and
  load it in your page with a `script` tag:

  ```html
  <script src="path/to/bundle.js"></script>
  ```

- Reference the `bundle.js` file using a popular npm CDN, like jsdelivr.net:

  ```html
  <script src="https://cdn.jsdelivr.net/npm/@accusoft/pdf-viewer@3/bundle.js"></script>
  ```

This will attach the viewer creation API to `window` so you can use it (`window.Accusoft.PdfViewerControl`).

Then, create the viewer:

```html
<script>
  (async () => {
    // Create a viewer
    window.myViewer = await window.Accusoft.PdfViewerControl.create({
      container: document.getElementById('myContainer'),

      // URL or Uint8Array for a PDF
      sourceDocument: 'https://yourdomain.com/documents/example.pdf'
    });
  })();
</script>
```

Optionally, use a `licenseKey` of `'eval'` to evaluate Professional features, enabling the `allowedControls` you want, such as annotation tools:

```html
<script>
  (async () => {
    // Create a viewer
    window.myViewer = await window.Accusoft.PdfViewerControl.create({
      container: document.getElementById('myContainer'),

      // URL or Uint8Array for a PDF
      sourceDocument: 'https://yourdomain.com/documents/example.pdf',

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
```

## Samples

- [Using in a React app](https://github.com/Accusoft/hello-accusoft-pdf-viewer-with-react)
- [Using in plain HTML via CDN](https://github.com/Accusoft/hello-accusoft-pdf-viewer-via-cdn)

## Documentation

For complete documentation, [click here](https://help.accusoft.com/accusoft-pdf-viewer/latest/).

## Feedback

Submit suggestions and feature requests to [https://ideas.accusoft.com/](https://ideas.accusoft.com/?project=PDFV)

Report issues or bugs to [https://issues.accusoft.com](https://issues.accusoft.com)

## Support Plans

Paid support is available:

- For the free Standard edition, basic support is available for a charge.
- For the paid Professional edition, support is included with an annual license. Additional levels of support are also available as an upgrade.

[Contact us](https://www.accusoft.com/contact-us/) for more information about our support packages.

## Questions

Email [info@accusoft.com](mailto:info@accusoft.com) or call 1-800-875-7009.
