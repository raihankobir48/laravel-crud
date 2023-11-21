@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Create Form</div>
                    <div class="card-body">
                        <form action="{{ route('departments.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label  class="form-label">Dept Name</label>
                              <input type="text" name="name" class="form-control"  aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label  class="form-label">Dept Code</label>
                              <input type="text" name="code" class="form-control" >
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

