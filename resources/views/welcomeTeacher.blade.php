@extends('layouts.navbar')

@section('content')

<div class="container py-4">
    <h2>Current Activities</h2>
</div>

<div class="container">

    <div class="row py-2">
            
        <div class="card" style="width: 80%;">
            <div class="card-header">
                Activity 1
            </div>
            <div class="card-block">
                <h4 class="card-title">Basic Programming Knowledge</h4>
                <p class="card-text">Basic knowledge of variables, operations, loops, conditions, etc.</p>
                <a class="btn btn-secondary" data-toggle="collapse" href="#collapseLearn0" aria-expanded="false" aria-controls="collapseExample">
                    Learning Paths
                </a>
                <a href="#" class="btn btn-primary">
                    Grade It!
                </a>
            </div>

            <div class="collapse" id="collapseLearn0">
                <div class="card card-block">
                    <ol>
                        <li>Study link 1</li>
                        <li>Study link 2</li>
                    </ol>
                </div>
            </div>
            <div class="card-footer bg-success text-muted">
            </div>
     </div>
    </div>
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
                    <a href="/teacher/level" class="btn btn-primary">View Activites</a>
                </div>
                </div>
            </div>

            <div class="col-sm-3 py-1">
                <div class="card">
                <div class="card-block">
                    <h3 class="card-title">Level 1</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="teacher/level" class="btn btn-primary">View Activites</a>
                </div>
                </div>
            </div>
                
            <div class="col-sm-3 py-1">
                <div class="card">
                <div class="card-block">
                    <h3 class="card-title">Level 2</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">View Activites</a>
                </div>
                </div>
            </div>

            <div class="col-sm-3 py-1">
                <div class="card">
                <div class="card-block">
                    <h3 class="card-title">Level 3</h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">View Activites</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection