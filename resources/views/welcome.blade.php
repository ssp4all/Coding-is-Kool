@extends('layouts.navbar')

@section('content')
<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-5">Kaushal Bhogale</h1>
          <p class="lead">Curent Level : 1</p>
          <p>Current Rank : 42</p>
        </div>
      </div>

    <div class="container">

    <div class="row py-2">
            
        <div class="col-sm-3 py-1">
            <div class="card">
            <div class="card-block">
                <h3 class="card-title">Level 0</h3>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="/level" class="btn btn-primary">View Rules</a>
            </div>
            </div>
        </div>

            <div class="col-sm-3 py-1">
                <div class="card text-center">
                        <div class="card-header">
                            Current
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">Level 1</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go to Test</a>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
            </div>

            
            <div class="col-sm-3 py-1">
              <div class="card">
                <div class="card-block">
                  <h3 class="card-title">Level 2</h3>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">View Rules</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3 py-1">
              <div class="card">
                <div class="card-block">
                  <h3 class="card-title">Level 3</h3>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">View Rules</a>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection