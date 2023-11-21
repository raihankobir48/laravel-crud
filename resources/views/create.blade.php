@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Create Form</div>
                    <div class="card-body">
                        <form action="{{ route('create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Department</label>
                                <select name="department_id" id="" class="form-control">
                                    <option value="">please select A Department</option>
                                    @foreach ($departments as $department )
                                   <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Session</label>
                                <select name="session_id" id="" class="form-control">
                                    <option value="">please select A Session</option>
                                    @foreach ($sessions as $session )
                                   <option value="{{ $session->id }}">{{ $session->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                              <label  class="form-label">Name</label>
                              <input type="text" name="name" class="form-control"  aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label  class="form-label">Email</label>
                              <input type="email" name="email" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" >
                              </div>
                              <div class="mb-3">
                                <label  class="form-label">Address</label>
                                 <textarea class="form-control" name="address" id="" cols="30" rows="10"></textarea>
                              </div>
                              <div>
                                <label  class="form-label">Image</label>
                              <input type="file" name="image" class="form-control" accept="image/*">
                             </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

