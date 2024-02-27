{{-- @dd(Auth::user()->representative->company->company_name) --}}
{{-- @dd($company->company_name) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Job Offers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        .job-offer {
            margin-bottom: 30px;
        }
        .job-offer .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
        }
        .job-offer .card-body {
            padding: 20px;
        }
        .job-offer .card-title {
            font-weight: bold;
        }
        .job-offer .card-text {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h2 class="mb-4">Job Offres</h2>

    <div class="row">
        @foreach($jobOffres as $jobOffre)
        <div class="col-md-6">
            <div class="card job-offer">
                <div class="card-header">
                    <h5 class="card-title">{{ $jobOffre->title }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>Published Date:</strong> {{ $jobOffre->updated_at->format('Y-m-d') }}</p>
                    <p class="card-text"><strong>Content:</strong> {{ $jobOffre->content }}</p>
                    <p class="card-text"><strong>Contract:</strong> {{ $jobOffre->contract }}</p>
                    <p class="card-text"><strong>Salary:</strong> {{ $jobOffre->salary }}</p>
                    <p class="card-text"><strong>Number of Experiences:</strong> {{ $jobOffre->num_experiences }}</p>
                    <p class="card-text"><strong>Skills:</strong> {{ $jobOffre->skills }}</p>

                    @if($jobOffre->image)
                        <img src="{{ asset('images/' . $jobOffre->image) }}" alt="Job Image" class="img-fluid mt-3">
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
