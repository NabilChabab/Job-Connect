@extends('layouts.app')

@section('content')
<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url('{{ asset('assets/img2/hero/h1_hero.jpg') }}');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1>Find the most exciting startup jobs</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- form -->
                            
                            <form action="#" class="search-box d-flex align-items-center ">
                                <div class="input-form">
                                    <input type="text" placeholder="Job Title or keyword">
                                </div>
                                <div class="select-form">
                                    <div class="select-itms d-flex align-items-center" >
                                        <select name="select" id="select1" class="form-select" style="height: 70px">
                                            <option value="">Location BD</option>
                                            <option value="">Location PK</option>
                                            <option value="">Location US</option>
                                            <option value="">Location UK</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form">
                                    <a href="{{route('jobsearch.index')}}">Find job</a>
                                </div>	
                            </form>	
                         
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services section-pad-t30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>FEATURED TOURS Packages</span>
                        <h2>Browse Top Categories </h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-contnet-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                        <svg fill="#2089b6" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 496 496" xml:space="preserve" stroke="#2089b6"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M400,3.192l-40,50V128H168h-56c-30.872,0-56,25.128-56,56v104c0,17.648,14.352,32,32,32c5.856,0,11.272-1.696,16-4.448 V496h128V192h128v264c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40V53.192L400,3.192z M183.352,144L168,163.192 L152.648,144H183.352z M104,288c0,8.824-7.176,16-16,16s-16-7.176-16-16v-80h32V288z M160,480h-40v-16h40V480z M216,480h-40v-16 h40V480z M216,448h-40V312h-16v136h-40V327.192c18.232-3.72,32-19.872,32-39.192v-8h32v8c0,19.312,13.768,35.472,32,39.192V448z M120,310.528V288v-8h16v8C136,298.416,129.288,307.216,120,310.528z M216,310.528c-9.288-3.312-16-12.112-16-22.528v-8h16 V310.528z M248,176h-16h-8h-8v88h-96v-88h-16v16H72v-8c0-22.056,17.944-40,40-40h20.152L168,188.808L203.848,144H248V176z M360,176h-96v-32h96V176z M400,28.808L421.76,56h-43.52L400,28.808z M376,72h16v328h-16V72z M424,456c0,13.232-10.768,24-24,24 s-24-10.768-24-24v-8h48V456z M424,432h-48v-16h48V432z M424,400h-16V72h16V400z"></path> <path d="M232,64c0-35.288-28.712-64-64-64c-35.288,0-64,28.712-64,64s28.712,64,64,64C203.288,128,232,99.288,232,64z M168,112 c-26.472,0-48-21.528-48-48s21.528-48,48-48s48,21.528,48,48S194.472,112,168,112z"></path> </g> </g> </g> </g></svg>
                        </div>
                        <div class="services-cap">
                           <h5><a href="">Design & Creative</a></h5>
                            <span>(653)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <svg viewBox="0 0 24 24" height="200px" width="200px" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#2089b6"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 8L3 11.6923L7 16M17 8L21 11.6923L17 16M14 4L10 20" stroke="#2089b6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                        <div class="services-cap">
                           <h5><a href="">Design & Development</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <svg fill="#2089b6" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 31.294 31.294" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <circle cx="24.724" cy="3.235" r="3.235"></circle> <path d="M27.434,7.715l-2.71,3.74l-2.678-3.488L18.84,11.91l-2.572-2.285c-0.54-0.481-1.367-0.432-1.852,0.108 c-0.478,0.541-0.432,1.369,0.109,1.851l3.595,3.194c0.239,0.214,0.548,0.332,0.867,0.332c0.032,0,0.062-0.001,0.098-0.006 c0.354-0.028,0.686-0.201,0.913-0.478l1.423-1.769v4.872c0,0.61,0,1.181,0.325,1.668v10.617c0,0.727,0.66,1.28,1.385,1.28 s1.387-0.499,1.387-1.335h0.35c0,0.836,0.596,1.335,1.319,1.335c0.723,0,1.322-0.555,1.322-1.28V19.396 c0.325-0.49,0.325-1.058,0.325-1.668v-4.23c0.558,1.169,0.579,2.706,0.573,4.665c-0.001,0.726,0.667,1.341,1.394,1.341h0.001 c0.722,0,1.309-0.607,1.312-1.334C31.13,11.448,28.95,8.757,27.434,7.715z"></path> <path d="M26.232,6.808l-0.768,0.33C25.306,6.87,25.02,6.69,24.684,6.69c-0.337,0-0.624,0.183-0.778,0.454l-0.768-0.323 c-0.111-0.048-0.268-0.035-0.366,0.031c-0.103,0.068-0.188,0.181-0.188,0.304v0.96c0,0.115,0.078,0.224,0.17,0.292 c0.095,0.068,0.226,0.089,0.338,0.057c0.306-0.094,0.693-0.207,0.908-0.273c0.167,0.191,0.416,0.312,0.685,0.312 c0.284,0,0.534-0.13,0.703-0.33c0.213,0.065,0.586,0.179,0.888,0.271c0.11,0.032,0.19,0.012,0.284-0.056s0.114-0.176,0.114-0.292 V7.142c0-0.122-0.028-0.233-0.13-0.301C26.44,6.772,26.346,6.762,26.232,6.808z"></path> <path d="M11.773,12.094c-0.133-0.132-0.311-0.207-0.498-0.207c-0.186,0-0.366,0.075-0.497,0.207l-2.231,2.232 c-0.298,0.297-0.777,0.297-1.074,0L4.01,10.868c-0.106-0.108-0.167-0.254-0.167-0.405c0-0.151,0.061-0.297,0.167-0.404 l0.684-0.681c0.071-0.07,0.094-0.177,0.054-0.269C4.709,9.015,4.62,8.954,4.52,8.954H0.982c-0.216,0-0.421,0.087-0.571,0.24 C0.261,9.347,0.178,9.554,0.181,9.77l0.053,3.473c0.001,0.099,0.062,0.188,0.153,0.226c0.092,0.037,0.197,0.016,0.268-0.055 l0.805-0.806c0.105-0.108,0.253-0.167,0.402-0.167c0.153-0.001,0.299,0.06,0.407,0.167l5.205,5.205 c0.142,0.143,0.336,0.223,0.536,0.223c0.201,0,0.395-0.08,0.538-0.223l2.192-2.193c0.142-0.143,0.336-0.222,0.536-0.222 c0.202,0,0.394,0.08,0.537,0.222l4.023,4.021c0.275,0.275,0.723,0.275,0.997,0l0.748-0.746c0.132-0.133,0.207-0.312,0.207-0.498 c0-0.187-0.075-0.365-0.207-0.498L11.773,12.094z"></path> </g> </g> </g></svg>
                        </div>
                        <div class="services-cap">
                           <h5><a href="">Sales & Marketing</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <svg fill="#2089b6" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 420 420" xml:space="preserve" stroke="#2089b6"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M330,0h-240c-17.722,0-32.14,14.418-32.14,32.139v355.722C57.86,405.583,72.278,420,90,420h240 c17.722,0,32.14-14.417,32.14-32.139V32.139C362.139,14.418,347.721,0,330,0z M210,396.944c-7.544,0-13.659-6.115-13.659-13.659 c0-7.543,6.115-13.659,13.659-13.659c7.542,0,13.659,6.116,13.659,13.659C223.659,390.829,217.543,396.944,210,396.944z M340.713,354.392H79.287V65.608h261.426L340.713,354.392L340.713,354.392z"></path> <path d="M265.444,180.958c0.602,0.602,1.439,0.857,2.299,0.788c0.863-0.072,1.75-0.473,2.467-1.187l18.597-18.598 c1.422-1.423,1.602-3.556,0.393-4.761l-26.397-26.4c-1.205-1.207-3.338-1.029-4.763,0.393l-18.599,18.596 c-1.425,1.426-1.604,3.562-0.397,4.767L265.444,180.958z"></path> <path d="M133.1,289.989c0.284-0.026,0.576-0.085,0.865-0.186l37.638-12.709c1.193-0.403,2.186-1.388,2.594-2.578 c0.414-1.188,0.185-2.407-0.596-3.188l-24.931-24.93c-0.781-0.781-1.998-1.009-3.189-0.6c-1.191,0.411-2.175,1.4-2.58,2.596 l-12.706,37.639c-0.403,1.186-0.169,2.388,0.608,3.162C131.388,289.785,132.22,290.061,133.1,289.989z"></path> <path d="M180.498,208.731l-26.286,26.287c-1.426,1.427-1.604,3.558-0.395,4.763l26.402,26.399 c0.601,0.607,1.434,0.862,2.298,0.791c0.859-0.071,1.752-0.474,2.464-1.184l26.796-26.797c2.339,2.067,4.658,4.082,6.947,6.021 c1.06,0.899,2.396,1.382,3.767,1.382c0.312,0,0.62-0.024,0.932-0.073c1.683-0.273,3.16-1.27,4.046-2.726 c1.563-2.567,3.604-5.117,6.06-7.572c3.081-3.082,6.513-5.495,10.192-7.172c1.657-0.757,2.866-2.246,3.268-4.021 c0.398-1.776-0.053-3.641-1.225-5.034c-2.193-2.609-4.489-5.261-6.854-7.934l20.66-20.659c0.682-0.682,1.11-1.571,1.182-2.466 c0.076-0.891-0.209-1.72-0.789-2.297l-26.4-26.4c-1.205-1.209-3.338-1.032-4.764,0.393l-20.147,20.152 c-13.514-12.811-27.084-24.239-39.046-32.838c-8.422-6.052-23.828-16.227-32.405-16.357c-1.566-0.028-3.081,0.585-4.193,1.688 c-1.115,1.104-1.734,2.613-1.723,4.181c0.045,5.845,5.176,16.39,14.444,29.688C154.549,179.603,166.67,194.147,180.498,208.731z"></path> <path d="M258.334,233.729c-6.786,0-13.266,2.894-18.736,8.365c-6.57,6.569-9.438,13.461-8.292,19.929 c1.135,6.407,6.225,12.146,13.963,15.737c6.661,3.094,12.729,4.054,18.084,4.899c5.635,0.891,10.953,1.729,15.684,4.941 c0.984,0.671,2.129,1.009,3.277,1.009c0.807,0,1.617-0.166,2.377-0.509c1.842-0.819,3.131-2.541,3.396-4.543 c2.031-15.134-0.87-28.724-8.174-38.26C274.28,237.945,266.415,233.729,258.334,233.729z"></path> </g> </g> </g> </g></svg>
                        </div>
                        <div class="services-cap">
                           <h5><a href="">Mobile Application</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <svg viewBox="0 0 24 24" height="200px" width="200px" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#2089b6"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;stroke:#2089b6;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><rect class="cls-1" x="6.6" y="9.98" width="10.8" height="4.05" transform="translate(-4.97 12) rotate(-45)"></rect><circle class="cls-1" cx="18.68" cy="5.32" r="3.82"></circle><circle class="cls-1" cx="5.32" cy="18.68" r="3.82"></circle><path class="cls-1" d="M12,9.14,9.14,12,6.27,9.14H4.36A2.87,2.87,0,0,1,1.5,6.27V4.36l.4.4A2.1,2.1,0,0,0,4.69,5a2,2,0,0,0,.15-3L4.36,1.5H6.27A2.87,2.87,0,0,1,9.14,4.36V6.27Z"></path><path class="cls-1" d="M19.64,14.86a2.87,2.87,0,0,1,2.86,2.87v1.91l-.4-.4A2.1,2.1,0,0,0,19.31,19a2,2,0,0,0-.15,3l.48.48H17.73a2.87,2.87,0,0,1-2.87-2.86V17.73L12,14.86,14.86,12l2.87,2.86Z"></path></g></svg>
                        </div>
                        <div class="services-cap">
                           <h5><a href="">Construction</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <svg viewBox="0 0 60.601004 60.601004" height="200px" width="200px" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#2089b6"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs></defs> <metadata> <rdf:rdf> <cc:work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type> <dc:title>情報コーナー; Information</dc:title> <dc:source>http://www.ecomo.or.jp/barrierfree/pictogram/data/zukigo_panfu_jis110.pdf</dc:source> </cc:work> </rdf:rdf> </metadata> <path d="m 0,0 c 0,12.079 -9.793,21.872 -21.872,21.872 -12.079,0 -21.871,-9.793 -21.871,-21.872 0,-12.079 9.792,-21.872 21.871,-21.872 C -9.793,-21.872 0,-12.079 0,0 Z" style="stroke-linejoin:miter;stroke-opacity:1;fill-opacity:1;stroke:#2089b6;stroke-linecap:butt;stroke-miterlimit:4;stroke-dasharray:none;stroke-width:0.48500001;fill:#ffffff" transform="matrix(0.000000,1.250000,1.250000,0.000000,30.300503,57.639880)"></path> <path d="m 34.961753,47.76613 0,-23.573752 -13.182501,0 0,2.575 3.85875,0 0,20.998752 -3.85875,0 0,2.57375 17.041251,0 0,-2.57375 -3.85875,0" style="fill:#2089b6;fill-opacity:1;fill-rule:nonzero;stroke:none"></path> <path d="m 30.299253,21.526128 c 3.1975,0 5.78875,-2.59125 5.78875,-5.78875 0,-3.197501 -2.59125,-5.7900009 -5.78875,-5.7900009 -3.19875,0 -5.79,2.5924999 -5.79,5.7900009 0,3.1975 2.59125,5.78875 5.79,5.78875" style="fill:#2089b6;fill-opacity:1;fill-rule:nonzero;stroke:none"></path> </g></svg>
                        </div>
                        <div class="services-cap">
                           <h5><a href="">Information Technology</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <svg viewBox="0 0 60.601004 60.601004" height="200px" width="200px" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#2089b6"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs></defs> <metadata> <rdf:rdf> <cc:work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type> <dc:title>情報コーナー; Information</dc:title> <dc:source>http://www.ecomo.or.jp/barrierfree/pictogram/data/zukigo_panfu_jis110.pdf</dc:source> </cc:work> </rdf:rdf> </metadata> <path d="m 0,0 c 0,12.079 -9.793,21.872 -21.872,21.872 -12.079,0 -21.871,-9.793 -21.871,-21.872 0,-12.079 9.792,-21.872 21.871,-21.872 C -9.793,-21.872 0,-12.079 0,0 Z" style="stroke-linejoin:miter;stroke-opacity:1;fill-opacity:1;stroke:#2089b6;stroke-linecap:butt;stroke-miterlimit:4;stroke-dasharray:none;stroke-width:0.48500001;fill:#ffffff" transform="matrix(0.000000,1.250000,1.250000,0.000000,30.300503,57.639880)"></path> <path d="m 34.961753,47.76613 0,-23.573752 -13.182501,0 0,2.575 3.85875,0 0,20.998752 -3.85875,0 0,2.57375 17.041251,0 0,-2.57375 -3.85875,0" style="fill:#2089b6;fill-opacity:1;fill-rule:nonzero;stroke:none"></path> <path d="m 30.299253,21.526128 c 3.1975,0 5.78875,-2.59125 5.78875,-5.78875 0,-3.197501 -2.59125,-5.7900009 -5.78875,-5.7900009 -3.19875,0 -5.79,2.5924999 -5.79,5.7900009 0,3.1975 2.59125,5.78875 5.79,5.78875" style="fill:#2089b6;fill-opacity:1;fill-rule:nonzero;stroke:none"></path> </g></svg>
                        </div>
                        <div class="services-cap">
                           <h5><a href="">Real Estate</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <svg viewBox="0 0 60.601004 60.601004" height="200px" width="200px" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#2089b6"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs></defs> <metadata> <rdf:rdf> <cc:work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type> <dc:title>情報コーナー; Information</dc:title> <dc:source>http://www.ecomo.or.jp/barrierfree/pictogram/data/zukigo_panfu_jis110.pdf</dc:source> </cc:work> </rdf:rdf> </metadata> <path d="m 0,0 c 0,12.079 -9.793,21.872 -21.872,21.872 -12.079,0 -21.871,-9.793 -21.871,-21.872 0,-12.079 9.792,-21.872 21.871,-21.872 C -9.793,-21.872 0,-12.079 0,0 Z" style="stroke-linejoin:miter;stroke-opacity:1;fill-opacity:1;stroke:#2089b6;stroke-linecap:butt;stroke-miterlimit:4;stroke-dasharray:none;stroke-width:0.48500001;fill:#ffffff" transform="matrix(0.000000,1.250000,1.250000,0.000000,30.300503,57.639880)"></path> <path d="m 34.961753,47.76613 0,-23.573752 -13.182501,0 0,2.575 3.85875,0 0,20.998752 -3.85875,0 0,2.57375 17.041251,0 0,-2.57375 -3.85875,0" style="fill:#2089b6;fill-opacity:1;fill-rule:nonzero;stroke:none"></path> <path d="m 30.299253,21.526128 c 3.1975,0 5.78875,-2.59125 5.78875,-5.78875 0,-3.197501 -2.59125,-5.7900009 -5.78875,-5.7900009 -3.19875,0 -5.79,2.5924999 -5.79,5.7900009 0,3.1975 2.59125,5.78875 5.79,5.78875" style="fill:#2089b6;fill-opacity:1;fill-rule:nonzero;stroke:none"></path> </g></svg>
                        </div>
                        <div class="services-cap">
                           <h5><a href="">Content Writer</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- More Btn -->
            <!-- Section Button -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-50">
                        <a href="" class="border-btn2">Browse All Sectors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
    <!-- Online CV Area Start -->
     <div class="online-cv cv-bg section-overly pt-90 pb-120"  style="background-image: url('{{ asset('assets/img2/gallery/cv_bg.jpg') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="cv-caption text-center">
                        <p class="pera1">FEATURED TOURS Packages</p>
                        <p class="pera2"> Make a Difference with Your Online Resume!</p>
                        <a href="#" class="border-btn2 border-btn4">Upload your cv</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Online CV Area End-->
    <!-- Featured_job_start -->
    <section class="featured-job-area feature-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Recent Job</span>
                        <h2>Featured Jobs</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    @foreach ($lastjoboffers as $joboffer)
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job_details.html"><img src="{{ $joboffer->getFirstMediaUrl('media/offres') }}" alt="" style="width: 90px ; height: 80px"></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job_details.html"><h4>{{$joboffer->title}}</h4></a>
                                <ul>
                                    <li>{{$joboffer->company->domaine}}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{$joboffer->company->location}}</li>
                                    <li>{{$joboffer->salary}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job_details.html">Full Time</a>
                            <span> posted at  :{{$joboffer->created_at}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->
    <!-- How  Apply Process Start-->
    <div class="apply-process-area apply-bg pt-150 pb-150" style="background-image: url('{{ asset('assets/img2/gallery/how-applybg.png') }}');">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <span>Apply process</span>
                        <h2> How it works</h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#FFAD61;" cx="345.726" cy="165.132" r="154.932"></circle> <g> <path style="fill:#D35B38;" d="M213.098,345.502L66.188,492.411c-12.547,12.547-32.889,12.547-45.436,0l0,0 c-12.547-12.547-12.547-32.889,0-45.436l146.91-146.909L213.098,345.502z"></path> <path style="fill:#D35B38;" d="M356.715,74.115c0,0-2.402,4.644,7.206,9.608c3.912,2.021,11.088,3.989,18.223,5.612l0.686-10.523 c0.945-14.508-10.567-26.794-25.104-26.794h-23.158c-14.539,0-26.05,12.286-25.103,26.794l1.029,15.782 C346.98,92.565,356.715,74.115,356.715,74.115z"></path> </g> <path style="fill:#FFE6B8;" d="M363.919,83.722c-9.608-4.964-7.206-9.608-7.206-9.608s-9.734,18.45-46.222,20.479l2.403,36.854 c0.741,11.353,7.223,21.545,17.192,27.028l0,0c9.999,5.5,22.117,5.5,32.116,0l0,0c9.969-5.483,16.452-15.674,17.192-27.028 l2.747-42.114C375.008,87.712,367.832,85.744,363.919,83.722z"></path> <path style="fill:#BCC987;" d="M437.905,233.602c-4.113-22.707-21.838-40.027-43.84-44.169c-3.311-0.623-6.717-0.952-10.189-0.952 h-11.551l-26.179,26.179l-26.179-26.179h-11.55c-3.473,0-6.88,0.328-10.189,0.952c-22.002,4.143-39.726,21.462-43.84,44.169l0,0 c-1.997,11.026,6.475,21.17,17.68,21.17h148.159C431.431,254.773,439.903,244.628,437.905,233.602L437.905,233.602z"></path> <path id="SVGCleanerId_0" style="fill:#4D3D36;" d="M345.731,0c-91.052,0-165.128,74.077-165.128,165.128 c0,42.225,15.939,80.794,42.108,110.023l-32.769,32.769l-15.067-15.067c-3.983-3.982-10.441-3.982-14.425,0L13.541,439.762 c-7.994,7.994-12.398,18.624-12.398,29.931c0,11.305,4.403,21.935,12.398,29.931c8.251,8.251,19.091,12.377,29.93,12.377 s21.678-4.126,29.931-12.377L220.31,352.715c3.983-3.983,3.983-10.441,0-14.425l-15.944-15.944l32.854-32.854 c29.04,25.372,67.01,40.765,108.511,40.765c91.052,0,165.128-74.077,165.128-165.128S436.782,0,345.731,0z M58.977,485.198 c-8.549,8.55-22.462,8.55-31.012,0c-4.142-4.142-6.423-9.649-6.423-15.505c0-5.858,2.281-11.364,6.423-15.505l139.697-139.697 l31.012,31.011L58.977,485.198z M345.731,309.857c-79.804,0-144.728-64.925-144.728-144.728S265.927,20.399,345.731,20.399 s144.728,64.925,144.728,144.728S425.535,309.857,345.731,309.857z"></path> <path id="SVGCleanerId_1" style="fill:#4D3D36;" d="M300.315,95.258l2.403,36.854c0.972,14.906,9.366,28.103,22.455,35.302 c6.566,3.611,13.769,5.417,20.973,5.417s14.407-1.806,20.973-5.418c13.088-7.199,21.482-20.395,22.455-35.301l2.746-42.113 l0.686-10.522c0.633-9.718-2.822-19.367-9.48-26.475c-6.66-7.108-16.064-11.184-25.803-11.184h-23.158 c-9.739,0-19.143,4.076-25.801,11.183c-6.658,7.107-10.115,16.757-9.481,26.474L300.315,95.258z M357.289,149.538 c-6.978,3.839-15.309,3.838-22.285,0.001c-6.953-3.825-11.413-10.836-11.929-18.755l-1.765-27.049 c16.326-2.418,27.119-8.008,33.97-13.308c1.203,0.829,2.522,1.615,3.957,2.356c2.839,1.467,6.858,2.915,12.172,4.385l-2.192,33.617 C368.701,138.703,364.242,145.715,357.289,149.538z M372.658,76.251c-2.29-0.755-3.488-1.296-4.056-1.591 c-0.385-0.199-0.703-0.379-0.991-0.551l2.166-5.778C371.49,70.653,372.488,73.374,372.658,76.251z M323.651,66.948 c2.859-3.051,6.735-4.731,10.916-4.731h15.717l-2.756,7.351c-1.445,2.048-8.456,10.502-27.549,13.74l-0.337-5.16 C319.37,73.977,320.794,69.999,323.651,66.948z"></path> <path id="SVGCleanerId_2" style="fill:#4D3D36;" d="M447.942,231.784c-4.777-26.37-25.669-47.419-51.991-52.377 c-3.976-0.747-8.038-1.126-12.074-1.126h-11.551c-2.705,0-5.3,1.075-7.212,2.987l-18.967,18.967l-18.966-18.967 c-1.912-1.912-4.507-2.987-7.212-2.987h-11.551c-4.036,0-8.097,0.379-12.077,1.127c-26.318,4.956-47.211,26.004-51.988,52.376 c-1.492,8.239,0.73,16.65,6.097,23.077c5.367,6.427,13.246,10.112,21.619,10.112h148.159c8.373,0,16.253-3.685,21.62-10.112 C447.213,248.434,449.434,240.022,447.942,231.784z M426.188,241.785c-0.87,1.041-2.801,2.789-5.963,2.789H272.067 c-3.162,0-5.093-1.747-5.963-2.789c-0.87-1.041-2.245-3.253-1.682-6.364c3.281-18.109,17.624-32.563,35.688-35.965 c2.738-0.515,5.531-0.776,8.306-0.776h7.326l23.191,23.192c1.912,1.912,4.507,2.987,7.212,2.987c2.705,0,5.3-1.075,7.212-2.987 l23.192-23.192h7.326c2.774,0,5.568,0.261,8.302,0.775c18.068,3.403,32.41,17.856,35.691,35.965 C428.433,238.531,427.058,240.742,426.188,241.785z"></path> <path id="SVGCleanerId_3" style="fill:#4D3D36;" d="M116.703,378.333c-3.983,3.983-3.983,10.441,0,14.425 c1.992,1.991,4.602,2.987,7.212,2.987s5.221-0.996,7.212-2.987l44.368-44.368c3.983-3.983,3.983-10.441,0-14.425 c-3.983-3.982-10.441-3.982-14.425,0L116.703,378.333z"></path> <path id="SVGCleanerId_4" style="fill:#4D3D36;" d="M94.774,399.943l-4.909,4.909c-3.983,3.983-3.983,10.441,0,14.425 c1.992,1.991,4.602,2.987,7.212,2.987s5.221-0.996,7.212-2.987l4.909-4.909c3.983-3.983,3.983-10.441,0-14.425 C105.216,395.961,98.757,395.961,94.774,399.943z"></path> <g> <path id="SVGCleanerId_0_1_" style="fill:#4D3D36;" d="M345.731,0c-91.052,0-165.128,74.077-165.128,165.128 c0,42.225,15.939,80.794,42.108,110.023l-32.769,32.769l-15.067-15.067c-3.983-3.982-10.441-3.982-14.425,0L13.541,439.762 c-7.994,7.994-12.398,18.624-12.398,29.931c0,11.305,4.403,21.935,12.398,29.931c8.251,8.251,19.091,12.377,29.93,12.377 s21.678-4.126,29.931-12.377L220.31,352.715c3.983-3.983,3.983-10.441,0-14.425l-15.944-15.944l32.854-32.854 c29.04,25.372,67.01,40.765,108.511,40.765c91.052,0,165.128-74.077,165.128-165.128S436.782,0,345.731,0z M58.977,485.198 c-8.549,8.55-22.462,8.55-31.012,0c-4.142-4.142-6.423-9.649-6.423-15.505c0-5.858,2.281-11.364,6.423-15.505l139.697-139.697 l31.012,31.011L58.977,485.198z M345.731,309.857c-79.804,0-144.728-64.925-144.728-144.728S265.927,20.399,345.731,20.399 s144.728,64.925,144.728,144.728S425.535,309.857,345.731,309.857z"></path> </g> <g> <path id="SVGCleanerId_1_1_" style="fill:#4D3D36;" d="M300.315,95.258l2.403,36.854c0.972,14.906,9.366,28.103,22.455,35.302 c6.566,3.611,13.769,5.417,20.973,5.417s14.407-1.806,20.973-5.418c13.088-7.199,21.482-20.395,22.455-35.301l2.746-42.113 l0.686-10.522c0.633-9.718-2.822-19.367-9.48-26.475c-6.66-7.108-16.064-11.184-25.803-11.184h-23.158 c-9.739,0-19.143,4.076-25.801,11.183c-6.658,7.107-10.115,16.757-9.481,26.474L300.315,95.258z M357.289,149.538 c-6.978,3.839-15.309,3.838-22.285,0.001c-6.953-3.825-11.413-10.836-11.929-18.755l-1.765-27.049 c16.326-2.418,27.119-8.008,33.97-13.308c1.203,0.829,2.522,1.615,3.957,2.356c2.839,1.467,6.858,2.915,12.172,4.385l-2.192,33.617 C368.701,138.703,364.242,145.715,357.289,149.538z M372.658,76.251c-2.29-0.755-3.488-1.296-4.056-1.591 c-0.385-0.199-0.703-0.379-0.991-0.551l2.166-5.778C371.49,70.653,372.488,73.374,372.658,76.251z M323.651,66.948 c2.859-3.051,6.735-4.731,10.916-4.731h15.717l-2.756,7.351c-1.445,2.048-8.456,10.502-27.549,13.74l-0.337-5.16 C319.37,73.977,320.794,69.999,323.651,66.948z"></path> </g> <g> <path id="SVGCleanerId_2_1_" style="fill:#4D3D36;" d="M447.942,231.784c-4.777-26.37-25.669-47.419-51.991-52.377 c-3.976-0.747-8.038-1.126-12.074-1.126h-11.551c-2.705,0-5.3,1.075-7.212,2.987l-18.967,18.967l-18.966-18.967 c-1.912-1.912-4.507-2.987-7.212-2.987h-11.551c-4.036,0-8.097,0.379-12.077,1.127c-26.318,4.956-47.211,26.004-51.988,52.376 c-1.492,8.239,0.73,16.65,6.097,23.077c5.367,6.427,13.246,10.112,21.619,10.112h148.159c8.373,0,16.253-3.685,21.62-10.112 C447.213,248.434,449.434,240.022,447.942,231.784z M426.188,241.785c-0.87,1.041-2.801,2.789-5.963,2.789H272.067 c-3.162,0-5.093-1.747-5.963-2.789c-0.87-1.041-2.245-3.253-1.682-6.364c3.281-18.109,17.624-32.563,35.688-35.965 c2.738-0.515,5.531-0.776,8.306-0.776h7.326l23.191,23.192c1.912,1.912,4.507,2.987,7.212,2.987c2.705,0,5.3-1.075,7.212-2.987 l23.192-23.192h7.326c2.774,0,5.568,0.261,8.302,0.775c18.068,3.403,32.41,17.856,35.691,35.965 C428.433,238.531,427.058,240.742,426.188,241.785z"></path> </g> <g> <path id="SVGCleanerId_3_1_" style="fill:#4D3D36;" d="M116.703,378.333c-3.983,3.983-3.983,10.441,0,14.425 c1.992,1.991,4.602,2.987,7.212,2.987s5.221-0.996,7.212-2.987l44.368-44.368c3.983-3.983,3.983-10.441,0-14.425 c-3.983-3.982-10.441-3.982-14.425,0L116.703,378.333z"></path> </g> <g> <path id="SVGCleanerId_4_1_" style="fill:#4D3D36;" d="M94.774,399.943l-4.909,4.909c-3.983,3.983-3.983,10.441,0,14.425 c1.992,1.991,4.602,2.987,7.212,2.987s5.221-0.996,7.212-2.987l4.909-4.909c3.983-3.983,3.983-10.441,0-14.425 C105.216,395.961,98.757,395.961,94.774,399.943z"></path> </g> </g></svg>
                        </div>
                        <div class="process-cap">
                           <h5>1. Search a job</h5>
                           <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <svg viewBox="0 0 100 100" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#09EE09;stroke:#007300;stroke-width:3;" d="M 4,36 C 8,42 26,73 31,93 38,82 44,63 98,12 78,22 51,44 33,60 26,55 18,44 4,36 z"></path> </g></svg>
                        </div>
                        <div class="process-cap">
                           <h5>2. Apply for job</h5>
                           <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <svg viewBox="0 0 32 32" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:#77acf1;}.cls-2{fill:#04009a;}</style> </defs> <g data-name="23. Job" id="_23._Job"> <path class="cls-1" d="M22,18H10a1,1,0,0,1-1-1V13a1,1,0,0,1,1-1H22a1,1,0,0,1,1,1v4A1,1,0,0,1,22,18ZM11,16H21V14H11Z"></path> <path class="cls-1" d="M19,23H13a3,3,0,0,1-3-3V17a1,1,0,0,1,1-1H21a1,1,0,0,1,1,1v3A3,3,0,0,1,19,23Zm-7-5v2a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V18Z"></path> <path class="cls-1" d="M19,14H13a1,1,0,0,1-1-1V11a3,3,0,0,1,3-3h2a3,3,0,0,1,3,3v2A1,1,0,0,1,19,14Zm-5-2h4V11a1,1,0,0,0-1-1H15a1,1,0,0,0-1,1Z"></path> <path class="cls-2" d="M30.86,15H26.82a1,1,0,0,1-.983-.82,10.031,10.031,0,0,0-8.018-8.016A1,1,0,0,1,17,5.18V1.14A1,1,0,0,1,18.131.149,16.045,16.045,0,0,1,28.8,6.4a1,1,0,0,1-1.6,1.2A14.063,14.063,0,0,0,19,2.329V4.377A12.057,12.057,0,0,1,27.623,13h2.049a13.71,13.71,0,0,0-.473-1.667,1,1,0,0,1,1.887-.666,16.009,16.009,0,0,1,.766,3.2A1,1,0,0,1,30.86,15Z"></path> <path class="cls-2" d="M27.92,26.09a1,1,0,0,1-.707-.293l-2.85-2.85a1,1,0,0,1-.117-1.273,9.84,9.84,0,0,0,1.59-3.852A1,1,0,0,1,26.82,17h4.04a1,1,0,0,1,.992,1.132A15.892,15.892,0,0,1,28.713,25.7a1,1,0,0,1-.728.389ZM26.345,22.1l1.441,1.441A13.889,13.889,0,0,0,29.671,19H27.626A11.783,11.783,0,0,1,26.345,22.1Z"></path> <path class="cls-2" d="M16,32A15.968,15.968,0,0,1,5.333,27.922a1,1,0,1,1,1.334-1.49A13.97,13.97,0,0,0,16,30a13.82,13.82,0,0,0,7.543-2.213l-1.45-1.45A11.877,11.877,0,0,1,16,28,12,12,0,0,1,13,4.376V2.329A14,14,0,0,0,4.157,23.466a1,1,0,0,1-1.691,1.068A15.994,15.994,0,0,1,13.869.149,1,1,0,0,1,15,1.14V5.18a1,1,0,0,1-.819.984A10,10,0,0,0,16,26a9.872,9.872,0,0,0,5.66-1.761,1,1,0,0,1,1.277.114l2.86,2.86a1,1,0,0,1-.1,1.5A15.814,15.814,0,0,1,16,32Z"></path> </g> </g></svg>                        </div>
                        <div class="process-cap">
                           <h5>3. Get your job</h5>
                           <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
    <!-- How  Apply Process End-->
    <!-- Testimonial Start -->
    <div class="testimonial-area testimonial-padding">
        <div class="container">
            <!-- Testimonial contents -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img mb-30">
                                        <img src="{{asset('assets/img2/testmonial/testimonial-founder.png')}}" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img mb-30">
                                        <img src="{{asset('assets/img2/testmonial/testimonial-founder.png')}}" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img mb-30">
                                        <img src="{{asset('assets/img2/testmonial/testimonial-founder.png')}}" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
     <!-- Support Company Start-->
     <div class="support-company-area support-padding fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <span>What we are doing</span>
                            <h2>24k Talented people are getting Jobs</h2>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">Mollit anim laborum duis au dolor in voluptate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</p>
                            <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
                            <a href="about.html" class="btn post-btn">Post a job</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="{{asset('assets/img2/service/support-img.jpg')}}" alt="">
                        <div class="support-img-cap text-center">
                            <p>Since</p>
                            <span>1994</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Company End-->
    <!-- Blog Area Start -->
    <div class="home-blog-area blog-h-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Our latest blog</span>
                        <h2>Our recent news</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset('assets/img2/blog/home-blog1.jpg')}}" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|   Properties</p>
                                <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset('assets/img2/blog/home-blog2.jpg')}}" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|   Properties</p>
                                <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

</main>
@endsection