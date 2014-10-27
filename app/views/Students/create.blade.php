@extends('layouts.scaffold')
@section('main')
	<h1>Create Student</h1>
	<!-- <small>{{ link_to_route('students.index', 'Home') }}</small> -->

	{{ Form::open(array('route' => 'students.store')) }}
		<ul>
	        <li>
	            {{ Form::label('email', 'Email:') }}
	            {{ Form::text('email') }}
	        </li>

	        <li>
	            {{ Form::label('password', 'Password:') }}
	            {{ Form::text('password') }}
	        </li>

	        <li>
	            {{ Form::label('first_name', 'First Name:') }}
	            {{ Form::text('first_name') }}
	        </li>

	        <li>
	            {{ Form::label('last_name', 'Last Name:') }}
	            {{ Form::text('last_name') }}
	        </li>

			<li>
				{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
			</li>
		</ul>
	{{ Form::close() }}

	@include('common.student_errors')
@endsection