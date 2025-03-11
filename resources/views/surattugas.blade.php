<!doctype html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #watermark {
            position: fixed;
            top: 13%;
            width: 100%;
            text-align: center;
            opacity: .1;
            /* transform: rotate(10deg); */
            transform-origin: 50% 50%;
            z-index: -1000;
        }
    </style>
    <meta charset="UTF-8">
    <title>Users Report</title>
</head>

<body>
    <div id="watermark">
        <img src="{{ public_path('images/watermark-setjen-dpr-ri.png') }}" alt="Watermark"
            style="width: 500px; opacity: 0.6;">
    </div>
</body>

</html>
