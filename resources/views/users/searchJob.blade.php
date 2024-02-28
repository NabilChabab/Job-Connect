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