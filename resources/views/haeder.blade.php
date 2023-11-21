<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li>
                <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>
            <li>
                <a href="{{route('home')}}" class="nav-link">Student Add</a>
            </li>
            <li>
                <a href="{{route('student.manage')}}" class="nav-link">Student Manage</a>
            </li>
            <li class="dropdown">


            </li>
            <li>
                <a href="{{ route('departments.create') }}" class="nav-link">Department Add</a>
            </li>
            <li>
                <a href="{{ route('departments.index') }}" class="nav-link">Department Manage</a>
            </li>

            <li>
                <a href="{{ route('sessions.create') }}" class="nav-link">Session Add</a>
            </li>
            <li>
                <a href="{{ route('sessions.index') }}" class="nav-link">Session Manage</a>
            </li>
            <li>
                <a href="{{ route('session-wise-student') }}" class="nav-link">Session Wise Student</a>
            </li>
        </ul>
    </div>
</nav>
