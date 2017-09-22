@extends ('layouts.navbar')
@section('content')
<div class="container">

    <h2 class="py-3">Enter marks for Basic programming Activity</h2>
    <div class=row>

        @for($i=0;$i<20;$i++)
        <div class="col-sm-3 p-2">
        <div class="card text-white">
            <div class="card-block bg-success text-center">
                <p class="card-title">Kaushal Bhogale</p>
                <div class="form-group row">
                    <label for="example-number-input" class="col-4 col-form-label">Marks </label>
                    <div class="col-7">
                        <input class="form-control" type="number" placeholder="30" id="example-number-input">
                    </div>
                </div>
            </div>
            </div>
        </div>
        @endfor
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit Marks</button>

    <br><br><br>
</div>
@endsection