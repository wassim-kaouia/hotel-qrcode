<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mydigihouse</title>
    <style>
        .wrapper-container{
            width: 100%;
            height: 100vh;
            background-size: 100% 100%;  
            background-repeat: no-repeat;
            overflow: auto;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: white;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            border-radius: 25px 0 0 25px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: black;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn-menu {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }

        .hamburger{
            position: absolute;
            right: 25px;
            top: 5px;
            color: white;
        }

        .square-icon{
            padding: 10px;
            width: 150px;
            border-radius: 8px;
            opacity: 0.7;
        }

        .title-application {
            color:white;
            font-weight: bold;
            font-size: 18px;
        }

        .description-application {
            color:white;
            font-size: 18px;
        }

        .icon-title {
            font-size: 24px;
            color: white;
        }

        .icon {
            width: 70px;
        }

        .social-icon {
            width: 24px;
        }

        .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            bottom: 0;
            top: 0;
            overflow-x: hidden;
            transition: 0.5s;
            
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            height: 100vh;
            text-align: center;
            margin-top: 30px;
            background-color: white;
            border-radius: 25px 25px 0 0;
            overflow: auto;

        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1; 
        }

        .closebtn-icon {
            position: absolute;
            top: 20px;
            left: 45px;
            font-size: 60px !important;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        @media screen and (max-height: 450px) {
        .overlay a {
            font-size: 20px; 
        }
        .closebtn-icon {
            font-size: 40px !important;
            top: 15px;
            right: 35px;
            color: white;
         }
        }

        .wifi-box {
            width: 100%;
            padding: 30px;
         }

         /* Dashed border */
        hr.dashed {
            border-top: 3px dashed #bbb;
        }

        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper-container" style="background-image: url('{{ url('assets/images/paris.jpeg') }}')">
        <span class="hamburger" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

        <div class="container">

            {{-- start avatar application  --}}
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-circle mt-4" style="width:150px; height:150px; object-fit : fill;" alt="Avatar" />
            </div>
            {{-- end avatar application  --}}


            {{-- start title application  --}}
            <div class="d-flex justify-content-center">
                <p class="title-application mt-4 text-center">{{ $app->title }}</p>
            </div>
            {{-- end title application  --}}

             {{-- start description application  --}}
             <div class="d-flex justify-content-center">
                <p class="description-application text-center">{{ $app->description }}</p>
            </div>
            {{-- end description application  --}}

            <div class="container">
                <div class="row">
                    @if ($app->setting->modules_state['wifi'] == 'on')
                    <div class="col-sm-6 col-6 d-flex justify-content-center mt-3 wifi_module" >
                        <div class="square-icon " style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                            <img src="{{ url('imagesApp/images/icons/'.$setting->wifi_path) }}" class="icon icon d-block center-block" alt="" onclick="openWifi()">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}" onclick="openWifi()">{{ $app->setting->wifi_text }}</p>
                        </div>
                    </div>
                    @endif
                    
                    @if ($app->setting->modules_state['digicode'] == 'on')
                    <div class="col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon " style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                            <img src="{{ url('imagesApp/images/icons/'.$setting->digicode_path) }}" class="icon icon d-block center-block" alt="">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}">{{ $app->setting->digicode_text }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($app->setting->modules_state['livre'] == 'on')
                    <div class="col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon " style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                            <img src="{{ url('imagesApp/images/icons/'.$setting->livre_path) }}" class="icon icon d-block center-block" alt="">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}">{{ $app->setting->livre_text }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($app->setting->modules_state['info'] == 'on')
                    <div class="col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon " style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                            <img src="{{ url('imagesApp/images/icons/'.$setting->info_path) }}" class="icon icon d-block center-block" alt="">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}">{{ $app->setting->info_text }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($app->setting->modules_state['nums'] == 'on')
                    <div class="col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon " style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                            <img src="{{ url('imagesApp/images/icons/'.$setting->numero_path) }}" class="icon icon d-block center-block" alt="">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}">{{ $app->setting->numero_text }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($app->setting->modules_state['arround'] == 'on')
                    <div class="col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon " style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                            <img src="{{ url('imagesApp/images/icons/'.$setting->arround_path) }}" class="icon icon d-block center-block" alt="">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}">{{ $app->setting->arround_text }}</p>
                        </div>
                    </div>
                    @endif
  
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <img src="{{ url('assets/images/logo_ovm.png') }}" class="w-25 mb-4 mt-2" alt="">
                </div>
                
            </div>
        </div>
    </div>

    {{-- start side bar right section  --}}
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn-menu" onclick="closeNav()">&times;</a>
        <div class="d-flex justify-content-center">
            {{-- start avatar application  --}}
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/images/avatar.png') }}" class="rounded-circle mt-4" style="width: 150px; height:150px; object-fit : cover;" alt="Avatar" />
            </div>
            {{-- end avatar application  --}}
        </div>

        <div class="d-flex justify-content-center">
            {{-- start username title   --}}
            <div class="d-flex justify-content-center">
                <p class="mt-3 text-lg">Wassim Kaouia</p>
            </div>
            {{-- end username title  --}}
        </div>

        <div class="d-flex justify-content-center">
            {{-- start position title   --}}
            <div class="d-flex justify-content-center">
                <p class="text-muted">Votre Hebergeur</p>
            </div>
            {{-- end position title  --}}
        </div>  

        {{-- start sidemenu  --}}
        <div class="d-flex justify-content-center">
            <div class="flex-column">
                <a href="#">Wifi</a>
                <a href="#">Digicode</a>
                <a href="#">Alentours</a>
                <a href="#">Numeros Utiles</a>
                <a href="#">Livre D'Or</a>
                <a href="#">Infos Pratiques</a>
                <a href="#">Infos Arrivé</a>
                <a href="#">Infos Départ</a>
            </div>
        </div>
        {{-- end sidemenu --}}

        <div class="d-flex justify-content-center">
            <div class="flex-column">
                <p class="text-muted mt-4 d-flex justify-content-center">Connecter Avec l'Hôte</p>
                <div class="d-flex justify-between">
                    <a href="#" class="mb-2">
                        {{-- image size in photoshop 145x145 px --}}
                        <img src="{{ url('assets/images/facebook.png') }}"  class="social-icon" alt="facebook">
                    </a>

                    <a href="#" class="mb-2">
                        {{-- image size in photoshop 145x145 px --}}
                        <img src="{{ url('assets/images/instagram.png') }}"  class="social-icon" alt="instagram">
                    </a>

                    <a href="#" class="mb-2">
                        {{-- image size in photoshop 145x145 px --}}
                        <img src="{{ url('assets/images/youtube.png') }}"  class="social-icon" alt="youtube">
                    </a>

                    <a href="#" class="mb-2">
                        {{-- image size in photoshop 145x145 px --}}
                        <img src="{{ url('assets/images/twitter.png') }}"  class="social-icon" alt="twitter">
                    </a>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <img src="{{ url('assets/images/logo_ovm.png') }}" class="w-25 mb-4 mt-2" alt="">
        </div>

      </div>
    {{-- end side bar right section --}}

    {{-- start wifi overlay  --}}
    <div id="myWifi" class="overlay">
        <a href="javascript:void(0)" class="closebtn-icon"  onclick="closeWifi()">x</a>
        <div class="overlay-content">
            <p class="pt-4 text-muted">Pour se connecter au wifi</p>
            <p class="text-muted">Rendez-vous dans :</p>
            <p class="font-weight-bold">Réglages > Wifi</p>
            <div class="flex column">
                @foreach ($app->wifis as $wifi)
                <div class="d-flex justify-content-start px-4 pt-4">
                    <p>Nom du Wifi :</p>
                </div>
                <div class="d-flex justify-content-start p-4 ">
                   <div class="wifi-box bg-white shadow-lg rounded">
                      <div class="bg-light py-2 rounded">
                         <p class="mt-2">{{ $wifi->wifi_name }}</p>
                      </div>
                   </div>
                </div>

                <div class="d-flex justify-content-start px-4 pt-4">
                    <p>Clé du Wifi :</p>
                </div>
                <div class="d-flex justify-content-start p-4 ">
                   <div class="wifi-box bg-white shadow-lg rounded">
                      <div class="bg-light py-2 rounded">
                         <p id="wifiCode-{{ $wifi->id }}" class="mt-2">{{ $wifi->code }}</p>
                      </div>
                      <div class="pt-4 px-5">
                        <div class="d-flex justify-content-center bg-danger rounded hover:bg-primary">
                            <p class="text-white pt-2 mt-2" onclick="CopyToClipboard('wifiCode-'+{{ $wifi->id }})">Copier</p>
                        </div>
                      </div>
                   </div>
                </div>

                @if (count($app->wifis) > 1)
                <hr class="dashed">    
                @endif

                @endforeach
            </div>
        </div>
    </div>
    {{-- end wifi overlay  --}} 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
</script>

<script>
    function openWifi() {
        document.getElementById("myWifi").style.width = "100%";
    }
    
    function closeWifi() {
        document.getElementById("myWifi").style.width = "0%";
    }


    function copyWifi() {
      // Get the text field
      var copyText = document.getElementById("wifiCode");

      // Select the text field
      copyText.select();
      copyText.setSelectionRange(0, 99999); // For mobile devices

      // Copy the text inside the text field
      navigator.clipboard.writeText(copyText.value);
    }

    function CopyToClipboard(id){
      var r = document.createRange();
      r.selectNode(document.getElementById(id));
      window.getSelection().removeAllRanges();
      window.getSelection().addRange(r);
      document.execCommand('copy');
      window.getSelection().removeAllRanges();
    } 
    </script>
</body>
</html>