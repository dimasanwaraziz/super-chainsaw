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
            opacity: .2;
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
        <img src="{{ public_path('images/watermark-setjen-dpr-ri.png') }}" alt="Watermark" style="width: 500px; opacity: 0.6;">
    </div>
    <div style="display: flex; justify-content: space-between; flex-direction: row;">
        <div style="width: 48%;">
            <table border="1" cellpadding="5" cellspacing="0" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Left Header 1</th>
                        <th>Left Header 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Left Data 1</td>
                        <td>Left Data 2</td>
                    </tr>
                    <tr>
                        <td>Left Data 3</td>
                        <td>Left Data 4</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="width: 48%;">
            <table border="1" cellpadding="5" cellspacing="0" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Right Header 1</th>
                        <th>Right Header 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Right Data 1</td>
                        <td>Right Data 2</td>
                    </tr>
                    <tr>
                        <td>Right Data 3</td>
                        <td>Right Data 4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>