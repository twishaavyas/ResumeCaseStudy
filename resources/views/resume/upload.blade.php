<div>Upload form</div>
{!! Form::open(array('url'=>'upload_file','method'=>'POST', 'files'=>true)) !!}
Upload your resume: 
{!! Form::file('resume', array('multiple'=> false)) !!}
{!! Form::submit('Submit') !!}
{!! Form::close() !!}
