@extends('master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card text-center card bg-info text-white">
                    <div class="card-header">Department Details</div>
                    <div class="card-body">
                        <table class="table table-hover table-striped table-bordered table table-success">
                            <tr>
                                <th>sl</th>
                                <th>name</th>
                                <th>code</th>
                                <th>status</th>

                                <th>action</th>
                            </tr>
                            @foreach ($departments as $department )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->code }}</td>
                                <td>{{ $department->status == 1 ? 'active': 'Inactive' }}</td>


                                <td>
                                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('department-wise-student', $department->id) }}" class="btn btn-primary btn-sm">Department Details</a>

                                    @if ($department->status == 1)

                                        <a href="{{ route('departments.show', $department->id) }}" class="btn btn-warning btn-sm">Inactive</a>
                                    @else
                                    <a href="{{ route('departments.show', $department->id) }}" class="btn btn-warning btn-sm">Active</a>
                                    @endif


                                    <form action="{{ route('departments.destroy', $department->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <input type="hidden" name="id" value="{{ $department->id }}"> --}}
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

