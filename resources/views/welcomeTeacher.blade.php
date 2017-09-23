@extends('layouts.navbar')

@section('content')

<div class="container py-4">
    <h2>Current Activities</h2>
</div>

<div class="container">

        @foreach($seas as $sea)
        <div class="row py-2">
                
            <div class="card" style="width: 80%;">
                <div class="card-header">
                    {{$sea->activity->name}}
                </div>
                <div class="card-block">
                    <h4 class="card-title">{{$sea->activity->name}}</h4>
                    <p class="card-text">{{$sea->activity->description}}</p>
                    <a class="btn btn-secondary" data-toggle="collapse" href="#collapseLearn{{$sea->sea_id}}" aria-expanded="false" aria-controls="collapseExample">
                        Learning Paths
                    </a>
                    <a href="teacher/grade/{{$sea->sea_id}}" class="btn btn-primary">
                        Grade It!
                    </a>
                </div>

                <div class="collapse" id="collapseLearn{{$sea->sea_id}}">
                    <div class="card card-block">
                        <ol>
                            {{$sea->activity->learning_path}}
                        </ol>
                    </div>
                </div>
                <div class="card-footer bg-success text-muted">
                </div>
            </div>
    
        </div>
        @endforeach
</div>

<hr>

<div class="container py-4">
    <h2>Take a new Activity</h2>
</div>

<div class="container">

    <div class="row py-2">
            
        <div class="col-sm-3 py-1">
            <div class="card">
                <div class="card-block">
                    <h3 class="card-title">Level 0</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="/teacher/level/0" class="btn btn-primary">View Activites</a>
                </div>
                </div>
            </div>

            <div class="col-sm-3 py-1">
                <div class="card">
                <div class="card-block">
                    <h3 class="card-title">Level 1</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="teacher/level/1" class="btn btn-primary">View Activites</a>
                </div>
                </div>
            </div>
                
            <div class="col-sm-3 py-1">
                <div class="card">
                <div class="card-block">
                    <h3 class="card-title">Level 2</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="teacher/level/2" class="btn btn-primary">View Activites</a>
                </div>
                </div>
            </div>

            <div class="col-sm-3 py-1">
                <div class="card">
                <div class="card-block">
                    <h3 class="card-title">Level 3</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="teacher/level/3" class="btn btn-primary">View Activites</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection