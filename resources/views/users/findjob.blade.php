@extends('layouts.app')

@section('content')

<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"  style="background-image: url('{{ asset('assets/img2/hero/about.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Get your job</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                                <div class="small-section-tittle2 mb-45">
                                <div class="ion"> <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="20px" height="12px">
                                <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                    d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                </svg>
                                </div>
                                <h4>Filter Jobs</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="job-category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                           <div class="small-section-tittle2">
                                 <h4>Job Domaine</h4>
                           </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="select" id="domaineSelect" onchange="search()">
                                    <option value="">All Domaines</option>
                                    @foreach($jobOffres as $joboffer)
                                        <option value="{{ $joboffer->company->domaine }}">{{ $joboffer->company->domaine }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- single two -->
                        <div class="single-listing">
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Experience</h4>
                                </div>
                                <label class="container" data-experience="1-2 Years">
                                    <input name="filter_radio" onclick="filter('1-2')" type="radio" class="experience-checkbox">
                                    <span class="checkmark"></span> 1-2 Years
                                </label>
                                <label class="container" data-experience="2-3 Years">
                                    <input name="filter_radio" onclick="filter('3-4')" type="radio" class="experience-checkbox" checked>
                                    <span class="checkmark"></span> 3-4 Years
                                </label>
                                <label class="container" data-experience="3-6 Years">
                                    <input name="filter_radio" onclick="filter('5')" type="radio" class="experience-checkbox">
                                    <span class="checkmark"></span> 5 Years
                                </label>
                                <label class="container" data-experience="6-more..">
                                    <input name="filter_radio" onclick="filter('6')" type="radio" class="experience-checkbox">
                                    <span class="checkmark"></span> 6-more..
                                </label>
                            </div>
                           
                        </div>
                        
                        <!-- single three -->
                        <div class="single-listing">
                            <!-- Range Slider Start -->
                            <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                                <div class="small-section-tittle2">
                                    <h4>Filter Jobs</h4>
                                </div>
                                <div class="widgets_inner">
                                    <div class="range_item">
                                        <!-- <div id="slider-range"></div> -->
                                        <input type="text" class="js-range-slider" value="" />
                                        <div class="d-flex align-items-center">
                                            <div class="price_text">
                                                <p>Price :</p>
                                            </div>
                                            <div class="price_value d-flex justify-content-center">
                                                <input type="text" class="js-input-from" id="amount" readonly />
                                                <span>to</span>
                                                <input type="text" class="js-input-to" id="amount" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                          <!-- Range Slider End -->
                        </div>
                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="count-job mb-35">
                                        <span>39, 782 Jobs found</span>
                                        <!-- Select job items start -->
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="search">Search by location</label>
                                            <input oninput="filterJobItems()" type="text" class="form-control" id="search" name="search" placeholder="Search by location...">
                                        </div>                                      
                                        <!--  Select job items End-->
                                    </div>
                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            <!-- single-job-content -->
                            <div id="allOffersJob">
                                @foreach($jobOffres as $jobOffre)
                                <div class="single-job-items mb-30" data-experience="{{ $jobOffre->n_experiences }}">
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="#"><img width="40" src="{{ $jobOffre->getFirstMediaUrl('media/offres') }}" alt=""></a>
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>{{$jobOffre->title}} </h4>
                                            </a>
                                            <ul>
                                            
                                                <li>{{ optional($jobOffre->company)->domaine }}</li>
                                                <li><i class="fas fa-map-marker-alt"></i>{{ optional($jobOffre->company)->location}}</li>
                                                <li> ${{$jobOffre->salary}} </li>
                                                <li> experience : {{$jobOffre->n_experiences}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="{{ route('jobDetails', $jobOffre->id) }}">details</a>
                                        <span>{{$jobOffre->company->founded_date}}</span>
                                    </div>
                                </div>  
                                </div>
                                @endforeach
                            </div>                          
                        </div>
                        
                         <!-- single-job-content end-->
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->
    <!--Pagination Start  -->
    <div class="pagination-area pb-115 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Pagination End  -->
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var searchInput = document.getElementById('search');
            var jobItems = document.querySelectorAll('.single-job-items');
    
            searchInput.addEventListener('input', function() {
                var searchValue = searchInput.value.toLowerCase();
    
                jobItems.forEach(function(jobItem) {
                    var locationText = jobItem.querySelector('.job-tittle ul li:nth-child(2)').textContent.toLowerCase();
                    if (locationText.includes(searchValue)) {
                        jobItem.style.display = 'block';
                    } else {
                        jobItem.style.display = 'none';
                    }
                });
            });
        });
    </script>

<script>
   function filter(data){
    var xhttp = new XMLHttpRequest();
    var url = "/FiltreProduct/"+data;
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(xhttp.responseText);
            document.getElementById("allOffersJob").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET",url, true);
        xhttp.send();
   }
</script>

<script>
    function search() {
        var selectedDomaine = document.getElementById('domaineSelect').value;
        var xhttp = new XMLHttpRequest();
        var url = "/getJobOffers/" + selectedDomaine;

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("allOffersJob").innerHTML = xhttp.responseText;
            }
        };

        xhttp.open("GET", url, true);
        xhttp.send();
    }
</script>






    
</main>

@endsection