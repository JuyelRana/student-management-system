@extends('master')

@section('title')
    Edit Student | Student Management
@endsection

@section('content')
    <form class="form-horizontal" action="{{route('update', $student->id)}}" method="post">
        {{csrf_field()}}  {{--        for genarating hidden token  --}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$student->name}}" name="name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="registration_id">Registration No:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" value="{{$student->registration_id}}" name="registration_id">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="department">Department:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$student->department}}" name="department">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="info">Info:</label>
            <div class="col-sm-10">
                <textarea rows="10" class="form-control" name="info" id="info">{{$student->info}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-outline-primary">Register Student</button>
            </div>
        </div>
    </form>
@endsection
