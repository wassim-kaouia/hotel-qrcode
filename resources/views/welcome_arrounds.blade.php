<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les Categories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mycircle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            font-size: 24px;
            line-height: 60px;
            text-align: center;    
            background: #808080;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <i class="fa fa-chevron-circle-left p-4" style="font-size: 32px;" onclick="history.back()"  aria-hidden="true"></i>
    </div>
    <div class="container mt-4">
            <div class="d-flex justify-content-center align-items-center mb-5 rounded py-2" style="background-color:#E7F2F8;">
                <i class="fa fa-clock-o text-center mb-2" style="font-size: 60px;" aria-hidden="true" ></i>
                <p class="mx-4">{{ $interest->title }}</p>
            </div>
            <?php $count=0; ?>
            @foreach ($arrounds as $arround)
            <?php $count++; ?>

            <div class="d-flex justify-start align-items-center">
                <div class="d-flex justify-start align-items-center pt-4">
                    <div class="mycircle mx-2">
                        {{ $count }}
                    </div>  
                    <div>
                        <p class="" style="font-weight: bold;">{{ $arround->site_name }}</p>
                        <span class="text-muted">France</span>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <span>Distance :</span>
            </div>
            <div class="d-flex justify-content-center rounded mt-4" style="background-color:#F8FAFD;">
                <div class="d-flex justify-center align-items-center">
                    <i class="fa fa-map-marker" style="font-size: 32px;" aria-hidden="true"></i>
                    <span class="m-3">{{ $arround->distance }}km</span>
                </div>
            </div>

            <div class="d-flex justify-content-center rounded mt-4" style="background-color:#6DECE0;">
                <div class="d-flex justify-center align-items-center">
                    <img src="{{ url('/assets/images/maps.png') }}" width="40px;" alt="">
                    <a class="text-primary text-decoration-none" href="https://www.google.com/maps/place/{{ $arround->address }}"><span class="m-3">Ouvrir sur Google Maps</span></a>
                </div>
            </div>
            @endforeach
     </div>
     <div class="d-flex justify-content-center my-4">
        <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>