@extends('layout.layout')

@section('title') Edit @stop

@section('body')
<h1> EDIT </h1>

{!! Form::model($resume, [
    'method' => 'PATCH',
    'route' => ['resume.update', $resume->id]
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
		    {!! Form::label('Your Resume:') !!}
		    {!! Form::text('resume', null, 
		        array('required', 
		              'class'=>'form-control'
		             )) !!}
		</div>

		<br><br>
		{{ Form::submit('Update!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop