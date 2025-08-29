<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tiket {{ $grub->nama_grub ?? '-' }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; margin: 0; padding: 0; }
        .ticket {
            width: 300px;
            border: 2px solid #004aad;
            border-radius: 12px;
            overflow: hidden;
        }
        .header {
            background: #004aad;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        .header h2 { margin: 0; font-size: 16px; text-transform: uppercase; }
        .header p { margin: 3px 0 0; font-size: 11px; }
        .content { padding: 10px; }
        .row { margin-bottom: 8px; }
        .label { font-size: 10px; color: #666; }
        .value { font-size: 13px; font-weight: bold; color: #004aad; }
        .barcode { text-align: center; margin-top: 15px; }
        .barcode p { margin: 3px 0 0; font-size: 10px; }
        .barcode h3 { margin: 0; color: #004aad; font-size: 14px; }
    </style>
</head>
<body>
    <div class="ticket">
        <!-- Header -->
        <div class="header">
            <h2>EXIT TICKET</h2>
            <p>FROM {{ strtoupper($grub->lokasi_keberangkatan ?? '-') }}</p>
        </div>

        <!-- Konten -->
        <div class="content">
            <div class="row">
                <div class="label">NAME</div>
                <div class="value">{{ strtoupper($exitData->nama ?? '-') }}</div>
            </div>
            <div class="row">
                <div class="label">PASSPORT NO.</div>
                <div class="value">{{ $exitData->no_passport ?? '-' }}</div>
            </div>
            <div class="row">
                <div class="label">DEPARTURE DATE</div>
                <div class="value">
                    {{ $grub? \Carbon\Carbon::parse($grub->tanggal_keberangkatan)->format('d M Y') : '-' }}
                </div>
            </div>
          
            
            <!-- Barcode -->
            @if(!empty($exitData->kode_booking))
                <div class="barcode">
                    <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($exitData->kode_booking, 'C128',2,60) }}" alt="barcode"/>
                    <p>BOOKING CODE</p>
                    
                </div>
            @endif
        </div>
    </div>
</body>
</html>
