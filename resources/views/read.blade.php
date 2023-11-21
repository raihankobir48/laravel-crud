@extends('master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card text-center card bg-info text-white"  style="width: 58rem;">
                    <div class="card-header">Students Details</div>
                    <div class="card-body">
                        <table class="table table-hover table-striped table-bordered table table-success">
                            <tr>
                                <th>sl</th>
                                <th>name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>address</th>
                                <th>dept name</th>
                                <th>session</th>
                                <th>image</th>
                                <th>action</th>
                            </tr>
                            @foreach ($students as $student )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->department->name}}</td>
                                <td>{{ $student->session->name }}</td>


                                <td><img src="{{ asset($student->image) }}" alt="image not found" style="height:100px; width:100%"></td>
                                <td>
                                    <a href="{{ route('edit', ['id'=>$student->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                    {{-- <a href="{{ route('delete', ['id'=>$student->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('you want to delete this?')">Delete</a> --}}

                                    <form action="{{ route('delete') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $student->id }}">
                                        <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('delete this?')"> Delete

                                        </button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

