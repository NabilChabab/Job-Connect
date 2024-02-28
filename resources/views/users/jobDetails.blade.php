@extends('layouts.app')

@section('content')
<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" style="background-image: url('{{ asset('assets/img2/hero/about.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Apply to this job</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
    
            
        
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="{{ $joboffer->getFirstMediaUrl('media/offres') }}" alt="" style="width: 50px; height: 50px;"></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{$joboffer->title}}</h4>
                                </a>
                                <ul>
                                    <li>Domain : {{$joboffer->company->domaine}}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{$joboffer->company->location}}</li>
                                    <li>$ {{$joboffer->salary}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->
                   
                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{{$joboffer->content}}</p>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Required Knowledge, Skills, and Abilities</h4>
                            </div>
                           <ul>
                                 @foreach ($joboffer->skill as $skill)
                                   <li>{{ $skill->name }}</li>
                                 @endforeach
                           </ul>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Education + Experience</h4>
                            </div>
                           <ul>
                               <li>years of experience : {{$joboffer->n_experiences}}</li>
                           </ul>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Job Overview</h4>
                       </div>
                      <ul>
                          <li>Posted date : <span>{{$joboffer->created_at}}</span></li>
                          <li>Location : <span>{{$joboffer->company->location}}</span></li>
                          <li>Job nature : <span>{{$joboffer->company->domaine}}</span></li>
                          <li>Salary :  <span>$ {{$joboffer->salary}} monthly</span></li>
                      </ul>
                      <div class="apply-btn2">
                        <form action="{{ route('apply', $joboffer->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn">Apply Now</button>
                        </form>
                    </div>
                   </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Company Information</h4>
                       </div>
                          <span>company description</span>
                          <p>{{$joboffer->company->description}}</p>
                        <ul>
                            <li>Name: <span>{{$joboffer->company->company_name}} </span></li>
                            <li>founded date : <span>{{$joboffer->company->founded_date}}</span></li>
                            <li>Email: <span>{{$joboffer->company->company_email}}</span></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>

    </div>
    <!-- job post company End -->

</main>
@endsection