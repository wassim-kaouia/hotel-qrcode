@extends('layout.master')

@section('title')
    test
@endsection

@section('mycss')

@endsection

@section('content')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>


    <script defer>
        //listen if the dom get loaded 
        document.addEventListener("DOMContentLoaded", () => {
            console.log("DOM Content Loaded !");
            $('.swiper-pagination-bullet').css('background-color','{{ $app->setting->app_theme['notes_color'] }}');

        });
    </script>
    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>
    <div class="views">
        <div class="view view-main">
            <div class="pages">

                <div data-page="index" class="page" style="background-color : {{ $app->setting->app_theme['background_color'] }}">
                    <div class="page-content homepagecontent">

                        <div class="homenavbar flex justify-between">
                            <img class="p-2" src="{{ asset('assets/images/ovm_logo.png') }}" alt="" width="200"
                                class="btn btn-danger">
                            <a href="{{ $app->urlName }}" data-panel="left" class="open-panel">
                                <div class="navbar_right">
                                    <span class="fa fa-home text-4xl text-white" aria-hidden="true"></span>
                                </div>
                            </a>
                        </div>

                        <!-- Slider -->
                        <div class="swiper-container swiper-init" data-effect="slide" data-parallax="true"
                            data-pagination=".swiper-pagination" data-pagination-clickable="true">
                            <div class="swiper-wrapper">
                                @foreach ($app->images as $image)
                                <div class="swiper-slide">  
                                    <img class="w-screen h-full" src="/imagesApp/gallery/{{ $app->user_id}}/{{ $image->url }}" alt=""
                                    title="" />
                                <div class="slider-caption">
                                    <div class="">
                                        <div class="">
                                            <img id="avatar" class="rounded-full mx-auto p-4" style="width: 150px; height:150px;"
                                                src="{{ asset('assets/images/avatar.png') }}" alt="">
                                        </div>
                                        <div class="">
                                            <h2 data-swiper-parallax="-100%" id="app_title">{{ $app->title }}</h2>
                                        <p data-swiper-parallax="-30%" id="app_description">
                                            {{ $app->description }}
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>

                        <nav class="main-nav">
                            {{-- top of icons - start  --}}
                            <ul>
                                <li class="wifi_module"  style="display: {{ $app->setting->modules_state['wifi'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#" data-popup=".popup-wifi" class="open-popup">
                                        <i class="fa fa-wifi text-3xl" id="icon-color1" aria-hidden="true" style="color :{{ $app->setting->app_theme['icons_color'] }}" ></i>
                                        <span id="title-color1" style="color :{{ $app->setting->app_theme['title_color'] }}">Wifi</span>
                                    </a>
                                </li>
                                <li class="digicode_module" style="display: {{ $app->setting->modules_state['digicode'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#" data-popup=".popup-digicode" class="open-popup">
                                        <i class="fa fa-calculator text-3xl" id="icon-color2" aria-hidden="true" style="color :{{ $app->setting->app_theme['icons_color'] }}"></i>
                                        <span id="title-color2" style="color :{{ $app->setting->app_theme['title_color'] }}">Digicode</span>
                                    </a>
                                </li>
                                <li class="alentour_module" style="display: {{ $app->setting->modules_state['arround'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#" data-popup=".popup-alentour" class="open-popup">
                                        <i class="fa fa-street-view text-3xl" id="icon-color3" aria-hidden="true" style="color :{{ $app->setting->app_theme['icons_color'] }}"></i>
                                        <span id="title-color3" style="color :{{ $app->setting->app_theme['title_color'] }}">Alentours</span>
                                    </a>
                                </li>

                                <li class="infos_module" style="display: {{ $app->setting->modules_state['info'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#" data-popup=".popup-info" class="open-popup">
                                        <i class="fa fa-info text-3xl" id="icon-color4" aria-hidden="true" style="color :{{ $app->setting->app_theme['icons_color'] }}"></i>
                                        <span id="title-color4" style="color :{{ $app->setting->app_theme['title_color'] }}">Infos Pratiques</span>
                                        </a>
                                    </li>
                                <li class="livre_module" style="display: {{ $app->setting->modules_state['livre'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#" data-popup=".popup-livre" class="open-popup">
                                        <i class="fa fa-address-book text-3xl" id="icon-color5" aria-hidden="true" style="color :{{ $app->setting->app_theme['icons_color'] }}"></i>
                                        <span id="title-color5" style="color :{{ $app->setting->app_theme['title_color'] }}">Livre d'Or</span>
                                    </a>
                                </li>
                                <li class="nums_module" style="display: {{ $app->setting->modules_state['nums'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#" data-popup=".popup-numero" class="open-popup">
                                        <i class="fa fa-volume-control-phone text-3xl" id="icon-color6" aria-hidden="true" style="color :{{ $app->setting->app_theme['icons_color'] }}"></i>
                                        <span id="title-color6" style="color :{{ $app->setting->app_theme['title_color'] }}">Numéros utiles</span>
                                    </a>
                                </li>
                            </ul>
                            {{-- button of icons - end  --}}
                            <div class="p-10 flex justify-center bottom-0">
                                <img class="w-36" src="/frontend/assets/images/logo_ovm.png" width="50" alt="">
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of view write down --}}
    </div>

    <!-- wifi Popup -->
    <div class="popup popup-wifi bg-gray-100">
        <div class="content-block ">
            <h4>La List des Wifis</h4>
            @forelse ($app->wifis as $wifi)
            <div class="flex justify-center mb-4">
                <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <span class="fa fa-wifi text-4xl text-gray-500 dark:text-gray-400"></span>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $wifi->wifi_name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        {{ $wifi->type }}
                    </p>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        {{ $wifi->code }}
                    </p>
                </div>
            </div>
            @empty
                <p>Pas de wifi enregistré ! </p>
            @endforelse
            <div class="close_popup_button">
                <a href="#" class="close-popup fa fa-times-circle text-4xl" aria-hidden="true"></a>
            </div>
        </div>
    </div>
    <!-- digicode Popup -->
    <div class="popup popup-digicode bg-gray-100">
        <div class="content-block ">
            <h4>La List des digicodes</h4>
            @forelse ($app->digicodes as $digicode)
            <div class="flex justify-center mb-4">
                <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <span class="fa fa-calculator text-4xl text-gray-500 dark:text-gray-400"></span>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $digicode->title }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        {{ $digicode->access_code }}
                    </p>
                   
                </div>
            </div>
            @empty
                <p>Pas de Digicode enregistré ! </p>
            @endforelse
            <div class="close_popup_button">
                <a href="#" class="close-popup fa fa-times-circle text-4xl" aria-hidden="true"></a>
            </div>
        </div>
    </div>

     <!-- alentour Popup -->
     <div class="popup popup-alentour bg-gray-100">
        <div class="content-block ">
            <h4>La List des Alentours</h4>
            @forelse ($app->alentours as $alentour)
            <div class="flex justify-center mb-4">
                <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <span class="fa fa-street-view text-4xl text-gray-500 dark:text-gray-400"></span>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $alentour->site_name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        {{ $alentour->distance }} m
                    </p>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        {{ $alentour->link }}
                    </p>
                </div>
            </div>
            @empty
                <p>Pas d'Alentours enregistré !</p>
            @endforelse
            <div class="close_popup_button">
                <a href="#" class="close-popup fa fa-times-circle text-4xl" aria-hidden="true"></a>
            </div>
        </div>
    </div>

     <!-- livre Popup -->
     <div class="popup popup-livre bg-gray-100">
        <div class="content-block ">
            <h4>Livre d'Or</h4>
            <div class="mb-4">
                <form action="{{ route('livre.create',['profile' => \Route::current()->parameter('profile_name')]) }}" method="POST">
                    @csrf
                    <div class="mb-6">
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de Vistieur</label>
                      <input type="text" id="name" name="visitor_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="votre nom..." >
                    </div>
                    <div class="mb-6">
                      <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pays</label>
                      <select id="country" name="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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

                    <div class="mb-6">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Période</label>
                        <div date-rangepicker class="flex items-center">
                            <div class="relative">
                              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                              </div>
                              <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Date d'arrivé">
                            </div>
                            <span class="mx-4 text-gray-500">to</span>
                            <div class="relative">
                              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                              </div>
                              <input name="end" type="text"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Date de départ">
                          </div>
                          </div>
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Commentaire</label>
                        <textarea id="message" name="message" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="un bon commentaire va nous aider ennormement ! "></textarea>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Envoyer votre commentaire</button>
                  </form>
            </div>
            @forelse ($app->livres as $livre)
            <div class="flex justify-center mb-4">
                <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <span class="fa fa-address-book text-4xl text-gray-500 dark:text-gray-400"></span>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $livre->visitor_name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        {{ $livre->country }}
                    </p>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        {{ $livre->from }}  - à - {{ $livre->to }}
                    </p>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        " <b>{{ $livre->message }}</b> "
                    </p>
                </div>
            </div>
            {{-- <div>
                {{ $livres->links() }}
            </div> --}}
            @empty
                <p>Pas de Livre d'Or enregistré ! </p>
            @endforelse
            <div class="close_popup_button">
                <a href="#" class="close-popup fa fa-times-circle text-4xl" aria-hidden="true"></a>
            </div>
        </div>
    </div>

     <!-- numero Popup -->
     <div class="popup popup-numero bg-gray-100">
        <div class="content-block ">
            <h4>La List des Numéros Utiles</h4>
            @forelse ($app->numeros as $numero)
            <div class="flex justify-center mb-4">
                <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <span class="fa fa-volume-control-phone  text-4xl text-gray-500 dark:text-gray-400"></span>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $numero->title }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        {{ $numero->numero }}
                    </p>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        {{ $numero->description }}
                    </p>
                </div>
            </div>
            @empty
                <p>Pas de Numéro enregistré ! </p>
            @endforelse
            <div class="close_popup_button">
                <a href="#" class="close-popup fa fa-times-circle text-4xl" aria-hidden="true"></a>
            </div>
        </div>
    </div>

     <!-- info Popup -->
     <div class="popup popup-info bg-gray-100">
        <div class="content-block ">
            <h4>La List des Infos</h4>
            @forelse ($app->infos as $info)
            <div class="flex justify-center mb-4">
                <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <span class="fa fa-info text-4xl text-gray-500 dark:text-gray-400"></span>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $info->title }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                        {{ $info->description }}
                    </p>
                    
                </div>
            </div>
            @empty
                <p>Pas d'Information enregistrée ! </p>
            @endforelse
            <div class="close_popup_button">
                <a href="#" class="close-popup fa fa-times-circle text-4xl" aria-hidden="true"></a>
            </div>
        </div>
    </div>
    
@endsection

@section('js')

@endsection
