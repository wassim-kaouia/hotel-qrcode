<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mydigihouse</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            color: red;
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

        /* .social-icon {
            width: 24px;
        } */

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

        .splash{
            cursor : pointer;
            position : fixed;
            top : 50%;
            left : 50%;
            height : 95%;
            width : 95%;
            transform : translate(-50%,-50%);    
            background-color: #F7F7F2;
            transition : all ease-in-out 600ms;
        }
        .hidden{
            transition : 0.5s;
            display : none;
        }
        .splash-header {
            height : 90%;
            color : white;
            font-family : consolas;
            font-size : 30px;
            display : flex;
            justify-content: center;
            align-items : center;
        }

        .box-emergency {
            width: 70px;
            
            /* margin-top: auto;
            margin-bottom: auto; */
            margin-right: auto;
            margin-left: auto;
        }

    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper-container" style="background-image: url('{{ url('imagesApp/images/'.$app->user_id.'/'.$app->setting->background_image) }}')">
        <span class="hamburger" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

        <div class="container">

            {{-- start avatar application  --}}
            <div class="d-flex justify-content-center mt-4">
                <img src="{{ url('imagesApp/images/'.$app->user_id.'/'.$app->avatar) }}" class="rounded-circle mt-4 p-2" style="width:125px; height:125px; object-fit : fill;" alt="Avatar" />
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
                            <img src="{{ url('imagesApp/images/icons/'.$setting->setting->wifi_path) }}" class="icon icon d-block center-block" alt="" onclick="openWifi()">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}" onclick="openWifi()">{{ $setting->setting->wifi_text }}</p>
                        </div>
                    </div>
                    @endif
                    
                    @if ($app->setting->modules_state['digicode'] == 'on')
                    <div class="col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon " style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                            <img src="{{ url('imagesApp/images/icons/'.$setting->setting->digicode_path) }}" class="icon icon d-block center-block" alt="" onclick="openDigicode()">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}" onclick="openDigicode()">{{ $setting->setting->digicode_text }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($app->setting->modules_state['livre'] == 'on')
                    <div class="col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon " style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                            <img src="{{ url('imagesApp/images/icons/'.$setting->setting->livre_path) }}" class="icon icon d-block center-block" alt="" onclick="openLivre()">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}" onclick="openLivre()">{{ $setting->setting->livre_text }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($app->setting->modules_state['info'] == 'on')
                    <div class="col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon " style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                            <img src="{{ url('imagesApp/images/icons/'.$setting->setting->info_path) }}" class="icon icon d-block center-block" alt="" onclick="openInfosArrival()">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}" onclick="openInfosArrival()">{{ $setting->setting->info_text }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($app->setting->modules_state['nums'] == 'on')
                    <div class="col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon " style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                            <img src="{{ url('imagesApp/images/icons/'.$setting->setting->numero_path) }}" class="icon icon d-block center-block" alt="" onclick="openNumero()">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}" onclick="openNumero()">{{ $setting->setting->numero_text }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($app->setting->modules_state['arround'] == 'on')
                    <div class="col-sm-6 col-6 d-flex justify-content-center mt-3">
                        <div class="square-icon " style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                            <img src="{{ url('imagesApp/images/icons/'.$setting->setting->arround_path) }}" class="icon icon d-block center-block" alt="">
                            <p class="icon-title d-block text-center" style="color :{{ $app->setting->app_theme['title_color'] }}">{{ $setting->setting->arround_text }}</p>
                        </div>
                    </div>
                    @endif
  
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <img src="{{ url('assets/images/logo-mydigihouse.png') }}" class="w-25 mb-4 mt-2" alt="">
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
                <img src="{{ url('imagesApp/images/'.$app->user_id.'/'.$app->avatar) }}" class="rounded-circle mt-4" style="width: 150px; height:150px; object-fit : cover;" alt="Avatar" />
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
                <a href="#" onclick="openWifi()">Wifi</a>
                <a href="#" onclick="openDigicode()">Digicode</a>
                <a href="#" >Alentours</a>
                <a href="#" onclick="openNumero()">Numeros Utiles</a>
                <a href="#" onclick="openLivre()">Livre D'Or</a>
                <a href="#">Infos Pratiques</a>
                <a href="#" onclick="openInfosArrival()">Infos Arrivé</a>
                <a href="#">Infos Départ</a>
            </div>
        </div>
        {{-- end sidemenu --}}

        <div class="d-flex justify-content-center">
                <p class="text-muted mt-4 d-flex justify-content-center">Connecter Avec l'Hôte</p>
        </div>

        <div class="d-flex">
            <a href="#" class="mb-2">
                {{-- image size in photoshop 145x145 px --}}
                <img src="{{ url('assets/images/facebook.png') }}"  class="social-icon" style="width: 30px;" alt="facebook">
            </a>

            <a href="#" class="mb-2">
                {{-- image size in photoshop 145x145 px --}}
                <img src="{{ url('assets/images/instagram.png') }}"  class="social-icon" style="width: 30px;" alt="instagram">
            </a>

            <a href="#" class="mb-2">
                {{-- image size in photoshop 145x145 px --}}
                <img src="{{ url('assets/images/youtube.png') }}"  class="social-icon" style="width: 30px;" alt="youtube">
            </a>

        </div>

        <div class="d-flex justify-content-center mt-4">
            <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
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
                        <div id="copier_btn" class="d-flex justify-content-center bg-danger rounded hover:bg-primary">
                            <p id="btn-element" class="text-white pt-2 mt-2" onclick="CopyToClipboard('wifiCode-'+{{ $wifi->id }})">Copier</p>
                        </div>
                      </div>
                   </div>
                </div>

                @if (count($app->wifis) > 1)
                <hr class="dashed">    
                @endif

                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
            </div>
        </div>
    </div>
    {{-- end wifi overlay  --}} 

    {{-- start digicode overlay  --}}
    <div id="myDigicode" class="overlay">
        <a href="javascript:void(0)" class="closebtn-icon"  onclick="closeDigicode()">x</a>
        <div class="overlay-content">
            <p class="pt-4 text-muted">Vous trouvez les differents Digicodes</p>
            <div class="flex column">
                @foreach ($app->digicodes as $digicode)
                <div class="d-flex justify-content-start px-4 pt-4">
                    <p>Nom :</p>
                </div>
                <div class="d-flex justify-content-start p-4 ">
                   <div class="wifi-box bg-white shadow-lg rounded">
                      <div class="bg-light py-2 rounded">
                         <p class="mt-2">{{ $digicode->title }}</p>
                      </div>
                   </div>
                </div>

                <div class="d-flex justify-content-start px-4 pt-4">
                    <p>Digicode:</p>
                </div>
                <div class="d-flex justify-content-start p-4 ">
                   <div class="wifi-box bg-white shadow-lg rounded">
                      <div class="bg-light py-2 rounded">
                         <p id="digicodeCode-{{ $digicode->id }}" class="mt-2">{{ $digicode->access_code }}</p>
                      </div>
                   </div>
                </div>

                @if (count($app->digicodes) > 1)
                <hr class="dashed">    
                @endif

                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
            </div>
        </div>
    </div>
    {{-- end digicode overlay  --}} 
    
    {{-- start numero utiles overlay  --}}
    <div id="myNumero" class="overlay">
        <a href="javascript:void(0)" class="closebtn-icon"  onclick="closeNumero()">x</a>
        <div class="overlay-content">
            <p class="pt-4 text-muted">Vous trouvez ici des numeros utiles</p>
            <div class="d-flex justify-content-center my-4">
                @foreach ($app->emergencies as $emergency)
                <div class="d-flex flex-column mx-4">
                    <div class="box-emergency  mx-auto bg-light text-secondary rounded">
                    {{-- add icons here  --}}
                        <a class="text-dark" href="tel:{{ $emergency->emergency_numero }}"><span class="">{{ $emergency->emergency_numero }}</span></a>
                    </div>
                    {{-- <br> --}}
                    <span class="text-center mt-2">{{ $emergency->title }}</span>
                </div>
                @endforeach
            </div>
            <div class="flex column">
                @foreach ($app->numeros as $numero)
                <div class="d-flex justify-content-start px-4 pt-4">
                    <p>Nom :</p>
                </div>
                <div class="d-flex justify-content-start p-4 ">
                   <div class="wifi-box bg-white shadow-lg rounded">
                      <div class="bg-light py-2 rounded">
                         <p class="mt-2">{{ $numero->title }}</p>
                      </div>
                   </div>
                </div>

                <div class="d-flex justify-content-start px-4 pt-4">
                    <p>Numero:</p>
                </div>
                <div class="d-flex justify-content-start p-4 ">
                   <div class="wifi-box bg-white shadow-lg rounded">
                      <div class="bg-light py-2 rounded">
                         <a class="text-dark" style="font-size: 18px;" href="tel:{{ $numero->numero }}"><p id="numeroCode-{{ $numero->id }}" class="mt-2">{{ $numero->numero }}</p></a>
                      </div>
                   </div>
                </div>

                @if (count($app->numeros) > 1)
                <hr class="dashed">    
                @endif
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">
                <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
            </div>

        </div>
    </div>
    {{-- end numero utiles overlay  --}} 

     {{-- start Livre d'Or overlay  --}}
     <div id="myLivre" class="overlay">
        <a href="javascript:void(0)" class="closebtn-icon"  onclick="closeLivre()">x</a>
        <div class="overlay-content">
            <p class="pt-4 text-muted">Écrivez nous un petit mot ... </p>
            <div class="flex column">
                <form action="{{ route('livre.create',['profile' => \Route::current()->parameter('profile_name')]) }}" method="POST">
                    @csrf
                    <div class="mb-4 px-4">
                      {{-- <label for="name" class="3">Nom de Vistieur</label> --}}
                      <input type="text" id="name" name="visitor_name" class="form-control" placeholder="votre nom..." >
                    </div>
                    <div class="mb-4 px-4">
                      {{-- <label for="country" class="3">Pays</label> --}}
                      <select id="country" name="country" class="form-control">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Åland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>

                    </div>

                
                    <div class="mb-6 px-4">
                        {{-- <label for="message" class="">Commentaire</label> --}}
                        <textarea id="message" name="message" class="form-control" placeholder="un bon commentaire va nous aider ennormement ! "></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Envoyer votre commentaire</button>
                  </form>
            </div>
            <div class="flex column">
                @foreach ($app->livres as $livre)
                <div class="d-flex justify-content-start px-4 pt-4">
                    <p>Infos de Visiteur:</p>
                </div>
                <div class="d-flex justify-content-start p-4 ">
                   <div class="wifi-box bg-white shadow-lg rounded">
                      <div class="bg-light py-2 rounded">
                         <p class="mt-2">Nom: {{ $livre->visitor_name }}</p>
                         <br>
                         <p id="digicodeCode-{{ $livre->id }}" class="mt-2">Pays: {{ $livre->country }}</p>
                        <br>
                        <p id="digicodeCode-{{ $livre->id }}" class="mt-2">Message: <br>{{ $livre->message }}</p>
                      </div>
                   </div>
                </div>

                @if (count($app->livres) > 1)
                <hr class="dashed">    
                @endif

                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
            </div>
        </div>
    </div>
    {{-- end livre d'Or overlay  --}} 

        {{-- start infos pratiques overlay  --}}
        <div id="myInfosArrival" class="overlay" style="overflow-y: scroll;">
            <a href="javascript:void(0)" class="closebtn-icon"  onclick="closeInfosArrival()">x</a>
            <div class="overlay-content">
                <p class="pt-4 mx-4 text-muted">Vous trouvez ici toutes les informations de votre arrivée</p>
                     <div class="container mt-4">
                        <div class="row px-4">
                            <div class="col-6 mb-4">
                                <div class="bg-light rounded d-flex flex-column">
                                    <i class="fa fa-clock-o p-4" style="font-size: 60px;" aria-hidden="true" onclick="openInfosArrivalTime()"></i>
                                    <span class="" style="padding-bottom: 10px; font-size:24px;" onclick="openInfosArrivalTime()">Temps d'arrivée</span>
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="bg-light rounded d-flex flex-column">
                                    <i class="fa fa-book p-4" style="font-size: 60px;" aria-hidden="true" onclick="openInfosArrivalReg()"></i>
                                    <span class="" style="padding-bottom: 10px; font-size:24px;" onclick="openInfosArrivalReg3()">Réglement Interne</span>
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="bg-light rounded d-flex flex-column">
                                    <i class="fa fa-bell p-4" style="font-size: 60px;" aria-hidden="true" onclick="openInfosArrivalRappel()"></i>
                                    <span class="" style="padding-bottom: 10px; font-size:24px;" onclick="openInfosArrivalRappel()">Rappel</span>
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="bg-light rounded d-flex flex-column">
                                    <i class="fa fa-key p-4" style="font-size: 60px;" aria-hidden="true" onclick="openInfosArrivalKey()"></i>
                                    <span class="" style="padding-bottom: 10px; font-size:24px;" onclick="openInfosArrivalKey()" >Clés</span>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-center my-4">
                        <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
                    </div>
            </div>
        </div>
        {{-- end infos pratiques overlay  --}} 

        {{-- temps d'arrivé overlay  --}}
         <div id="myInfosArrivalTime" class="overlay" style="overflow-y: scroll;">
            <a href="javascript:void(0)" class="closebtn-icon"  onclick="closeInfosArrivalTime()">x</a>
            <div class="overlay-content">
                <p class="pt-4 mx-4 text-muted">Vous trouvez ici toutes les informations de votre arrivée</p>
                <div class="d-flex flex-column px-4">
                    
                    @foreach ($app->arrivalInfo as $info)
                    <div class="mt-4">
                        <div class="d-flex justify-content-start">
                            <p>{{ $info->title }}</p>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="rounded bg-light" style="width: 100%; text-align: left;">
                                <p class="p-3">{{ $info->arrival_message }}</p>
                            </div>  
                        </div>
                    </div>
                    @endforeach
                    
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
                </div>

            </div>
        </div>
        {{-- end temps d'arrivé overlay --}}

        {{-- rappel overlay  --}}
        <div id="myInfosArrivalRappel" class="overlay" style="overflow-y: scroll;">
            <a href="javascript:void(0)" class="closebtn-icon"  onclick="closeInfosArrivalRappel()">x</a>
            <div class="overlay-content">
                <p class="pt-4 mx-4 text-muted">Vous trouvez ici toutes les informations de votre arrivée</p>
                <div class="d-flex flex-column px-4">
                    <div class="d-flex justify-content-start">
                        <p>Rappels</p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="rounded bg-light" style="width: 100%; text-align: left;">
                            <p class="p-3">test test</p>
                        </div>  
                    </div>
                    
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
                </div>

            </div>
        </div>
        {{-- rappel overlay --}}

        {{-- clé overlay  --}}
        <div id="myInfosArrivalKey" class="overlay" style="overflow-y: scroll;">
            <a href="javascript:void(0)" class="closebtn-icon"  onclick="closeInfosArrivalKey()">x</a>
            <div class="overlay-content">
                <p class="pt-4 mx-4 text-muted">Vous trouvez ici toutes les informations de votre arrivée</p>
                <div class="d-flex flex-column px-4">
                    <div class="d-flex justify-content-start">
                        <p>Clés</p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="rounded bg-light" style="width: 100%; text-align: left;">
                            <p class="p-3">test test</p>
                        </div>  
                    </div>
                    
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
                </div>

            </div>
        </div>
        {{-- clé overlay --}}

        {{-- reglement overlay  --}}
        <div id="myInfosArrivalReg" class="overlay" style="overflow-y: scroll;">
            <a href="javascript:void(0)" class="closebtn-icon"  onclick="closeInfosArrivalReg()">x</a>
            <div class="overlay-content">
                <p class="pt-4 mx-4 text-muted">Vous trouvez ici toutes les informations de votre arrivée</p>
                <div class="d-flex flex-column px-4">
                    @foreach ($app->reglements as $reglement)
                    <div class="mt-4">
                        <div class="d-flex justify-content-start">
                            <p>{{ $reglement->title }}</p>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="rounded bg-light" style="width: 100%; text-align: left;">
                                <p class="p-3">{{ $reglement->reglement }}</p>
                            </div>  
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <img src="{{ url('assets/images/LOGO-MYDIGIHOUSE_new.png') }}" class="w-25 mb-4 mt-2" alt="">
                </div>

            </div>
        </div>
        {{-- reglement overlay --}}

    <div class="splash rounded">
        <div class="container">
            <h1 class="text-center py-5">Message de bienvenue</h1>
            <div>
                <p class="text-muted px-4 text-justify">
                    {{ $app->setting->welcome_text }}
                </p>
            </div>

            <div class="d-flex justify-content-center">
                {{-- start avatar application  --}}
                <div class="d-flex justify-content-center">
                    <img src="{{ url('imagesApp/images/'.$app->user_id.'/'.$app->avatar) }}" class="rounded-circle mt-4" style="width: 150px; height:150px; object-fit : cover;" alt="Avatar" />
                </div>
                {{-- end avatar application  --}}
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div class="text-center">
                    <span class="font-weight-bold">{{ $app->user->name }}</span>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="text-center text-muted">
                    Votre hôte
                </div>
            </div>
        </div>
    </div>
    <!-- Splash Screen code ends here  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        console.log('{{ $app->setting->app_theme['icons_color'] }}');
        $('.title-application').css('color','{{ $app->setting->app_theme['icons_color'] }}');

    });

        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
</script>

<script>
    //wifi 
    function openWifi() {
        document.getElementById("myWifi").style.width = "100%";
    }
    
    function closeWifi() {
        document.getElementById("myWifi").style.width = "0%";
    }

    //digicode
    function openDigicode() {
        document.getElementById("myDigicode").style.width = "100%";
    }
    
    function closeDigicode() {
        document.getElementById("myDigicode").style.width = "0%";
    }

    //numero
    function openNumero() {
        document.getElementById("myNumero").style.width = "100%";
    }
    
    function closeNumero() {
        document.getElementById("myNumero").style.width = "0%";
    }

    //livre
    function openLivre() {
        document.getElementById("myLivre").style.width = "100%";
    }
    
    function closeLivre() {
        document.getElementById("myLivre").style.width = "0%";
    }

     //arrival infoss
     function openInfosArrival() {
        document.getElementById("myInfosArrival").style.width = "100%";
    }
    
    function closeInfosArrival() {
        document.getElementById("myInfosArrival").style.width = "0%";
    }

    //arrival infos - time
      function openInfosArrivalTime() {
        document.getElementById("myInfosArrivalTime").style.width = "100%";
    }
    
    function closeInfosArrivalTime() {
        document.getElementById("myInfosArrivalTime").style.width = "0%";
    }

    //arrival infos - rappel 
    function openInfosArrivalRappel() {
        document.getElementById("myInfosArrivalRappel").style.width = "100%";
    }
    
    function closeInfosArrivalRappel() {
        document.getElementById("myInfosArrivalRappel").style.width = "0%";
    }

    //arrival infos - key 
    function openInfosArrivalKey() {
        document.getElementById("myInfosArrivalKey").style.width = "100%";
    }
    
    function closeInfosArrivalKey() {
        document.getElementById("myInfosArrivalKey").style.width = "0%";
    }

    //arrival infos - reglement
    function openInfosArrivalReg() {
        document.getElementById("myInfosArrivalReg").style.width = "100%";
    }
    
    function closeInfosArrivalReg() {
        document.getElementById("myInfosArrivalReg").style.width = "0%";
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

    var splashScreen = document.querySelector('.splash');
    splashScreen.addEventListener('click',()=>{
    splashScreen.style.opacity = 0;
    setTimeout(()=>{
        splashScreen.classList.add('hidden')
        },610)  
    })

    $('#copier_btn').on('click',function(){
        $('#copier_btn').removeClass('bg-danger');
        $('#copier_btn').addClass('bg-success');
        $('#btn-element').html('Copié');
        setTimeout(function(){
            $('#copier_btn').removeClass('bg-success');
            $('#copier_btn').addClass('bg-danger');
            $('#btn-element').html('Copier');
        },3000);

    });

    </script>

</body>
</html>