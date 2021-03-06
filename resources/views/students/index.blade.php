@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Student Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- New Student Form -->
                    <form action="{{ url('student') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Student FirstName -->
                        <div class="form-group">
                            <label for="student-firstname" class="col-sm-3 control-label">First name</label>

                            <div class="col-sm-6">
                                <input type="text" name="first_name" id="student-firstname" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="student-lastname" class="col-sm-3 control-label">Last name</label>

                            <div class="col-sm-6">
                                <input type="text" name="last_name" id="student-lastname" class="form-control">
                            </div>
                        </div>

                        <!-- Add Student Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> Add Student
                                </button>
                            </div>
                        </div>
                    </form>

                    <ul class="list-group">
                        @foreach ($students as $student)
                            <li class="list-group-item">
                                {{ $student->first_name . ' ' . $student->last_name }} - {{ $student->user_id }}
                                <span>


                                <form action="{{url('student/' . $student->id)}}">

                                    <button type="submit" id="view-student-{{ $student->id }}" class="btn btn-primary">
                                        <i class="fa fa-btn fa-trash"></i>View
                                    </button>
                                </form>

                                </span>
                            </li>
                        @endforeach
                    <ul>

                </div>
            </div>
        </div>
    </div>

    @include('layouts.errors')

</div>
@endsection
