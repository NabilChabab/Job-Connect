<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Job Offer Form</title>
</head>
<body>

<div class="container mt-4">
    <h2>Create Job Offer</h2>

    <form action="{{ route('job_offres.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="content">Content (Image/File):</label>
            <input type="file" class="form-control-file" id="content" name="content">
        </div>

        <div class="form-group">
            <label for="contract">Contract:</label>
            <textarea class="form-control" id="contract" name="contracte" rows="3" required></textarea>
        </div>
{{-- 'title' => "required",
           'contracte' => "required",
            'salary' => "required",
            'n_experiences' => "required",
            'content' => "required", --}}
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="number" class="form-control" id="salary" name="salary" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="num_experiences">Number of Experiences:</label>
            <input type="number" class="form-control" id="n_experiences" name="n_experiences" required>
        </div>

        <div class="form-group">
            <label for="skills">Skills:</label>
            <select multiple class="form-control" id="skills" name="skills[]" required>
                <!-- Replace this with your skills array from the backend -->
                @foreach($skills as $skill)
                <option value="{{$skill->id}}">{{$skill->name}}</option>
                @endforeach
                <!-- Add more options based on your skills array -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
