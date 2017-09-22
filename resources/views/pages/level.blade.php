@extends ('layouts.navbar')
@section('content')
    <div class="container">
        @foreach($activity as $act)
            <div class="row py-2 justify-content-center align-items-center">
                <div class="card" style="width: 80%;">
                    <div class="card-header">
                        Activity {{$act->id}}
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">{{$act->name}}</h4>
                        <p class="card-text">{{$act->description}}</p>
                        <div class="col-sm-6">
                            
                            
                            <p class="card-text">Maximum Marks: {{$act->max}}</p>
                            
                            <p class="card-text">Passing Marks: {{$act->passing}}</p>
                            
                            @if($act->isonline == 1)
                                <p class="card-text">Exam Type: Online</p>   
                            @else
                                <p class="card-text">Exam Type: Offline</p>
                            @endif
                            
                            <p class="card-text">Level: {{$act->level}}</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">   
                                <a class="btn btn-secondary" data-toggle="collapse" href="#collapseLearn{{$act->id}}" aria-expanded="false" aria-controls="collapseExample">
                                    Learning Paths
                                </a>
                            </div>

                            <div class="col-sm-6">   
                                <a class="btn btn-primary" href="/register/{{$act->id}}">
                                    Register
                                </a>
                            </div>
                        </div>
                        

                    </div>

                    <div class="collapse" id="collapseLearn{{$act->id}}">
                        <div class="card card-block">
                            <ol>
                                <a href="{{$act->learning_path}}">{{$act->learning_path}}</a>
                            </ol>
                        </div>
                    </div>
                    <div>
                        
                    </div>
                    <div class="card-footer bg-success">

                    </div>
                </div>
            </div>

        @endforeach

    </div>
@endsection

@if(Session::has('success'))
    <div class="alert alert-primary alert-dismissible text-center animated fadeInDown">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('failure'))
    <div class="alert alert-danger alert-dismissible text-center animated fadeInDown">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('failure') }}
    </div>
@endif