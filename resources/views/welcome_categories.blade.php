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

</head>
<body>
    <div class="container">
        <i class="fa fa-chevron-circle-left p-4" style="font-size: 32px;" onclick="history.back()"  aria-hidden="true"></i>
    </div>
    <div class="container mt-4">
        <div class="row px-4">
            @foreach ($categories as $category)
            <div class="col-6 mb-4 p-2">
                <div class="mx-auto my-auto p-4 bg-light rounded d-flex flex-column">
                    <a class="text-center mb-2" style="color:black;" href="{{ route('interests.app',['category' => $category->id]) }}"><i class="fa fa-clock-o " style="font-size: 60px;" aria-hidden="true" ></i></a>
                    <span class="text-center mx-auto" style="padding-bottom: 5px; font-size:18px;">{{ $category->title }}</span>
                </div>
            </div>
            @endforeach
        </div>
     </div>
     <div class="d-flex justify-content-center my-4">
        <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>