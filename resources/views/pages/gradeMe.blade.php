@extends ('layouts.navbar')
@section('content')
<div class="container">
    {{ Form::open(['route' => 'teacher.addMarks', 'method'=>'post']) }}
    <h2 class="py-3">Enter marks for {{$activity->name}}</h2>
    <div class=row>
        
        @foreach($students as $student)
            <div class="col-sm-3 p-2">
            <div class="card text-white">
                <div class="card-block bg-success text-center">
                    <p class="card-title">{{$student->first_name}} {{$student->last_name}}</p>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-4 col-form-label">Marks </label>
                        <div class="col-7">
                            <input class="form-control" type="number" placeholder="Max = {{$activity->max}}" id="example-number-input"
                                name="marks[]" value="">
                            <input type="hidden" name="uid[]" value="{{$student->uid}}">
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
        <input type="hidden" name="activity_id" value="{{$activity->id}}">
        @if($sea)
            <input type="hidden" name="sea_id" value="{{$sea->sea_id}}">
        @elseif($online)
            <input type="hidden" name="ol_id" value="{{$online->sea_id}}">
        @endif
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit Marks</button>
    {{ Form::close() }}

    <br><br><br>
</div>
@endsection