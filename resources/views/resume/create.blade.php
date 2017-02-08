@extends('layout.layout')

@section('title') 
	Create
@stop

@section('body')
	
	{!! Form::open([
    'method' => 'POST',
    'route' => ['resume.store'],
    'files'=> true
	]) !!}

		<br><br>
		<div class="form-group">
		    {!! Form::label('Your Name:') !!}
		    {!! Form::text('name', null, 
		        array('required', 
		              'class'=>'form-control'
		             )) !!}
		</div>

		<br><br>
		<div class="form-group">
		    {!! Form::label('Your Company:') !!}
		    {!! Form::text('company', null, 
		        array('required', 
		              'class'=>'form-control'
		             )) !!}
		</div>

		<br><br>
		<div class="form-group">
		    {!! Form::label('Your Email:') !!}
		    {!! Form::email('email', null, 
		        array('required', 
		              'class'=>'form-control'
		             )) !!}
		</div>

		<br><br>
		<div class="form-group">
		    {!! Form::label('Your Qualification:') !!} 
		  	{{ Form::radio('qualification', 'Graduate', true) }} Graduate 
			{{ Form::radio('qualification', 'PostGraduate') }} Post Graduate
		</div>

		<br><br>
		<div class="form-group">
		    {!! Form::label('Your Hobbies:') !!}
		    {!! Form::text('hobbies', null, 
		        array('required', 
		              'class'=>'form-control'
		             )) !!}
		</div>

		<br><br>
		<div class="form-group">
			{!! Form::open(array('url'=>'upload_file','method'=>'POST', 'files'=>true)) !!}
			Upload your resume: 
			{!! Form::file('resume', array('multiple'=> false)) !!}
		</div>

		<br><br>
		{{ Form::submit('Submit!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}

@stop