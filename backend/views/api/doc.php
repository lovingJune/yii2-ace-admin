<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>API</title>
  <link rel="stylesheet" type="text/css" href="/public/swg/swagger-ui.css" >
  <link rel="icon" type="image/png" href="/public/swg/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/public/swg/favicon-16x16.png" sizes="16x16" />
  <style>
    html
    {
      box-sizing: border-box;
      overflow: -moz-scrollbars-vertical;
      overflow-y: scroll;
    }
    *,
    *:before,
    *:after
    {
      box-sizing: inherit;
    }

    body {
      margin:0;
      background: #fafafa;
    }
  </style>
</head>

<body>

<div id="swagger-ui"></div>

<script src="/public/swg/swagger-ui-bundle.js"> </script>
<script src="/public/swg/swagger-ui-standalone-preset.js"> </script>
<script>
window.onload = function() {
  
  // Build a system
  const ui = SwaggerUIBundle({
    url: "/api/swagger",
    dom_id: '#swagger-ui',
    deepLinking: true,
    validatorUrl : null,
    presets: [
      SwaggerUIBundle.presets.apis,
      SwaggerUIStandalonePreset
    ],
    plugins: [
      SwaggerUIBundle.plugins.DownloadUrl
    ],
    layout: "StandaloneLayout"
  })

  window.ui = ui
}
</script>
</body>

</html>