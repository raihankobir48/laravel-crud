
@extends('master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Create Form</div>
                    <div class="card-body">
                        <table class="table table-hover table-striped table-bordered">
                            <tr>
                                <th>sl</th>
                                <th>name</th>
                                <th>student name</th>
                            </tr>
                            @foreach ($sessions as $session )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $session->name }}</td>
                                <td>
                                    <ol>
                                        @foreach ($session->students as $student)
                                        <li>{{ $student->name }}</li>
                                        @endforeach
                                    </ol>
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


