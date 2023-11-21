@extends('master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card card text-center card bg-info text-white">
                    <div class="card-header">Session Details </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped table-bordered table table-success">
                            <tr>
                                <th>sl</th>
                                <th>name</th>


                                <th>action</th>
                            </tr>
                            @foreach ($sessions as $session )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $session->name }}</td>



                                <td>
                                    <a href="{{ route('sessions.edit', $session->id) }}" class="btn btn-primary btn-sm">Edit</a>


                                    <form action="{{ route('sessions.destroy', $session->id) }}" method="post">
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

