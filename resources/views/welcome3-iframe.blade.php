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
            margin-top: 15px; 
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
                <img id="avatar" src="{{ asset('assets/images/avatar.png') }}" class="rounded-circle mt-4" style="width:150px; height:150px; object-fit : fill;" alt="Avatar" />
            </div>
            {{-- end avatar application  --}}


            {{-- start title application  --}}
            <div class="d-flex justify-content-center">
                <p class="title-application mt-4 text-center">Titre</p>
            </div>
            {{-- end title application  --}}

             {{-- start description application  --}}
             <div class="d-flex justify-content-center">
                <p class="description-application text-center">Description</p>
            </div>
            {{-- end description application  --}}

            <div class="container">
                <div class="row">
                    <div class="wifi_module col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon">
                            <img class="icon_wifi" src="{{ url('assets/images/wifi.png') }}" class="icon d-block center-block"  alt="">
                            <p id="icon-title" class="icon-title text-center d-block">Wifi</p>
                        </div>
                    </div>
                    
                    <div class="digicode_module col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon">
                            <img class="icon_digicode" src="{{ url('assets/images/wifi.png') }}" class="icon d-block center-block" style="" alt="">
                            <p id="icon-title" class="icon-title text-center d-block">Digicode</p>
                        </div>
                    </div>

                    <div class="livre_module col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon">
                            <img class="icon_livre" src="{{ url('assets/images/wifi.png') }}" class="icon d-block center-block" style="" alt="">
                            <p id="icon-title" class="icon-title text-center d-block">Livre D'Or</p>
                        </div>
                    </div>

                    <div class="infos_module col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon">
                            <img class="icon_info" src="{{ url('assets/images/wifi.png') }}" class="icon d-block center-block" style="" alt="">
                            <p id="icon-title" class="icon-title text-center d-block">Infos</p>
                        </div>
                    </div>

                    <div class="alentour_module col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon">
                            <img class="icon_arround" class="icon_arround" src="{{ url('assets/images/wifi.png') }}" class="icon d-block center-block" style="" alt="">
                            <p id="icon-title" class="icon-title text-center d-block">Alentours</p>
                        </div>
                    </div>

                    <div class="nums_module col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon">
                            <img class="icon_nums" src="{{ url('assets/images/wifi.png') }}" class="icon d-block center-block" style="" alt="">
                            <p id="icon-title" class="icon-title text-center d-block">Numeros</p>
                        </div>
                    </div>      

                </div>

                <div class="d-flex justify-content-center mt-4">
                    <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
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

                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
        </div>

      </div>
    {{-- end side bar right section --}}

    

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
    </script>
</body>
</html>