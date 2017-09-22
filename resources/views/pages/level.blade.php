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
                    <a class="btn btn-secondary" data-toggle="collapse" href="#collapseLearn" aria-expanded="false" aria-controls="collapseExample">
                        Link with href
                    </a>
                </div>

                <div class="collapse" id="collapseLearn">
                    <div class="card card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
        </div>    
    </div>
@endsection