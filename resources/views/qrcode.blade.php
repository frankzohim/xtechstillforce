<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 9</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('BUCA VOYAGES DOUALA::Douala::Yaoundé::21/12/2022::VIP::2::Aicha Noucti::DROLK145::+237 690 988 133::W269N-WFGZX-YVC9B-4J6C9-T8G5J') !!}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('BUCA VOYAGES DOUALA::Douala::Yaoundé::21/12/2022::VIP::3::Frank Zohim::AFT214::+237 675 824 349::W269N-WFGZX-YVC9B-4J6C9-T8G5J') !!}
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('BUCA VOYAGES DOUALA::Douala::Yaoundé::21/12/2022::VIP::4::Pierre Essame::AFT214::+237 695 814 359::W269N-WFGZX-YVC9B-4J6C9-T8G5J') !!}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('BUCA VOYAGES DOUALA::Douala::Yaoundé::21/12/2022::VIP::5::Alex Kenfack::ARA1402::+237 695 814 359::W269N-WFGZX-YVC9B-4J6C9-T8G5J') !!}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!}
            </div>
        </div>

        {{QrCode::generate('Make me into a QrCode!');}}

    </div>
</body>
</html>