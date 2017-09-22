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
                        
                        <p class="card-text">Maximum Marks: {{$act->max}}</p>
                        
                        <p class="card-text">Minimum Marks: {{$act->min}}</p>
                        
                        @if($act->isonline == 1)
                            <p class="card-text">Exam Type: Online</p>   
                        @else
                            <p class="card-text">Exam Type: Offline</p>
                        @endif
                        
                        <p class="card-text">Level: {{$act->level}}</p>

                        <a class="btn btn-secondary" data-toggle="collapse" href="#collapseLearn{{$act->id}}" aria-expanded="false" aria-controls="collapseExample">
                            Learning Paths
                        </a>

                    </div>

                    <div class="collapse" id="collapseLearn{{$act->id}}">
                        <div class="card card-block">
                            <ol>
                                <li>{{$act->learning_path}}</li>
                            </ol>
                        </div>
                    </div>
                    <div>
                        
                    </div>
                    <div class="card-footer bg-success text-muted">
                    </div>
                </div>
            </div>

        @endforeach

    </div>
@endsection