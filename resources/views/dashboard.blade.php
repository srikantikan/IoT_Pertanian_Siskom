<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanian</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1 style="font-size: 45">Pertanian</h1>
        <div class="status-container">
            <div class="status-item">
                <h2>Kelembaban Udara <br> (%)</h2>
                <div class="gauge2">
                    <div class="gauge__body2">
                        <div class="gauge__fill2"></div>
                        <div class="gauge__cover2">
                            <span>{{ $latest_pertanian_data->kelembaban_udara }}</span><span>%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <h2>Pompa</h2>
                <div class="pump-status" id="pump-status">ON</div>
            </div>
            <div class="moisture-container">
                <h2>Kelembaban Tanah <br> (%)</h2>
                <div class="gauge">
                    <div class="gauge__body">
                        <div class="gauge__fill"></div>
                        <div class="gauge__cover">
                            <span>{{ $latest_pertanian_data->kelembaban_tanah }}</span><span>%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/sikat.js') }}"></script>
</body>
</html>
