@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Create Form</div>
                    <div class="card-body">
                        <form action="{{ route('sessions.update', $session->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                              <label  class="form-label">Dept Name</label>
                              <input type="text" name="name" value="{{ $session->name }}" class="form-control"  aria-describedby="emailHelp">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

