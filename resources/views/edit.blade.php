@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Form</div>
                    <div class="card-body">
                        <form action="{{ route('update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $student->id }}" name="id">
                            <div class="mb-3">
                              <label  class="form-label">Name</label>
                              <input type="text" name="name" value="{{ $student->name }}" class="form-control"  aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label  class="form-label">Email</label>
                              <input type="email" name="email" value="{{ $student->email }}" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Phone</label>
                                <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" >
                              </div>
                              <div class="mb-3">
                                <label  class="form-label">Address</label>
                                 <textarea class="form-control" name="address" id="" cols="30" rows="10">{{ $student->address }}</textarea>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                <img src="{{ asset($student->image) }}" alt="image not found" style="height:50px; width:50px">
                              </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

