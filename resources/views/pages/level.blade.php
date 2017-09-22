@extends ('layouts.navbar')
@section('content')
    <div class="container">
        <div class="row py-2 justify-content-center align-items-center">
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

        <div class="row py-2 justify-content-center align-items-center">
            <div class="card" style="width: 80%;">
                <div class="card-header">
                    Activity 2
                </div>
                <div class="card-block">
                    <h4 class="card-title">Course completion Certificates</h4>
                    <p class="card-text">Basic knowledge of variables, operations, loops, conditions, etc.</p>
                    <a class="btn btn-secondary" data-toggle="collapse" href="#collapseLearn1" aria-expanded="false" aria-controls="collapseExample">
                        Learning Paths
                    </a>
                </div>

                <div class="collapse" id="collapseLearn1">
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

        <div class="row py-2 justify-content-center align-items-center">
            <div class="card" style="width: 80%;">
                <div class="card-header">
                    Activity 3
                </div>
                <div class="card-block">
                    <h4 class="card-title">MCQ Test</h4>
                    <p class="card-text">Basic knowledge of variables, operations, loops, conditions, etc.</p>
                    <a class="btn btn-secondary" data-toggle="collapse" href="#collapseLearn2" aria-expanded="false" aria-controls="collapseExample">
                        Learning Paths
                    </a>
                </div>

                <div class="collapse" id="collapseLearn2">
                    <div class="card card-block">
                        <ol>
                            <li>Study link 1</li>
                            <li>Study link 2</li>
                        </ol>
                    </div>
                </div>
                <div class="card-footer bg-danger text-muted">
                </div>
            </div>
        </div>    

    </div>
@endsection