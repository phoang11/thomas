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
                    <form action="{{ url('student/' . $student->id . '/update') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Student FirstName -->
                        <div class="form-group">
                            <label for="student-firstname" class="col-sm-3 control-label">First name</label>

                            <div class="col-sm-6">
                                <input type="text" name="firstname" value="{{ $student->firstname}}" id="student-firstname" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="student-lastname" class="col-sm-3 control-label">Last name</label>

                            <div class="col-sm-6">
                                <input type="text" name="lastname" value="{{ $student->lastname}}" id="student-lastname" class="form-control">
                            </div>
                        </div>

                        <!-- Add Student Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> Update Student
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @include('layouts.errors')

</div>
@endsection


