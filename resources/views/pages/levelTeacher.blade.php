@extends ('layouts.navbar')
@section('content')
    <div class="container">

            <div class="row py-2 justify-content-center align-items-center">
                <div class="card" style="width: 80%;">
                    <div class="card-header">
                        Activity
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">Basic Programming</h4>

                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione soluta harum, deserunt impedit consectetur odio praesentium ea delectus pariatur? Veritatis modi ut obcaecati voluptatem, natus illum consectetur nostrum voluptate consequuntur!</p>
                        
                        <p class="card-text">Maximum Marks: </p>
                        
                        <p class="card-text">Passing Marks: </p>
                        
                        
                        <p class="card-text">Level:</p>

                        <a class="btn btn-secondary" data-toggle="collapse" href="#collapseLearn1" aria-expanded="false" aria-controls="collapseExample">
                            Learning Paths
                        </a>

                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseCreate1" aria-expanded="false" aria-controls="collapseExample">
                            Conduct Activity
                        </a>


                    </div>

                    <div class="collapse" id="collapseLearn1">
                        <div class="card card-block">
                            <ol>
                                <li>Link 1</li>
                            </ol>
                        </div>
                    </div>

                    <div class="collapse" id="collapseCreate1">
                        <div class="card card-block">
                        <p class="lead">
                            Conduct the activity in a classroom/ lab at a given time. 
                        </p>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Classroom</label>
                            <div class="col-10">
                                <input class="form-control" type="text" placeholder="D15" id="example-text-input">
                            </div>
                            </div>
                            
                            <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">No. of Students <br>(out of 42)</label>
                            <div class="col-10">
                                <input class="form-control" type="number" placeholder="30" id="example-number-input">
                            </div>
                            </div>

                            <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Date</label>
                            <div class="col-10">
                                <input class="form-control" type="date" placeholder="2011-08-19" id="example-date-input">
                            </div>
                            </div>

                            <div class="form-group row">
                            <label for="example-time-input" class="col-2 col-form-label">Time</label>
                            <div class="col-10">
                                <input class="form-control" type="time" placeholder="13:45:00" id="example-time-input">
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div>
                        
                    </div>
                    <div class="card-footer bg-success text-muted">
                    </div>
                </div>
            </div>


    </div>
@endsection