{{ $department->name }}
<br>

@foreach ($department->students as $student)

{{ $student->name }}<br>

@endforeach
