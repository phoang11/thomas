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

                    @foreach ($students as $student)
                        <div>{{ $student->firstname }} {{ $student->lastname }}</div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('layouts.errors')
