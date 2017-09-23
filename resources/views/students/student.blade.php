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

                    <div>
                        {{ $student->first_name . ' ' . $student->last_name }} - {{ $student->user_id }}
                    </div>

                    <form action="{{url('student/' . $student->id . '/edit')}}">
                        {{ csrf_field() }}
                        <button type="submit" id="change-student-{{ $student->id }}" class="btn btn-primary">
                            <i class="fa fa-btn fa-trash"></i>Edit
                        </button>
                    </form>

                    <form action="{{url('student/' . $student->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" id="delete-student-{{ $student->id }}" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                    </form>
                    <a href="{{url('students/')}}">Back</a>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.errors')

</div>
@endsection
