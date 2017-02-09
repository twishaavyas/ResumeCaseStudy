@extends('layout.layout')

@section('title') 
  Twisha's List
@stop

@section('style')
  
  tr,th,td {
  padding: 5px;
  font-weight: bold
}
  
  th,td{
  width: 90px;
}

  th{
  font-size: 20px;
  color: #505050
}

  td{
  font-size: 15px;
  color: #7d7d7d
}

  .content {
      text-align: center;
      padding-top: 50px;
      padding-left: 450px;
  }

@stop

@section(@body)
  
  @if(Session::has('message')) 
    <div class="alert-success">
      {{ Session::get('message') }} 
    </div>
  @endif

  <div class= 'content'>
    <table>
      <tr>
        <th> Name </th>
        <th> Company </th>
        <th> Email </th>
        <th> Qualifications </th>
        <th> Hobbies </th>
        <th> Resume </th>
        <th></th>
        <th></th>
      </tr>
      @foreach($resumes as $key => $value)
        <tr>
          <td>{{ $value->name }}</td>
          <td>{{ $value->company }}</td>
          <td>{{ $value->email }}</td>
          <td>{{ $value->qualification}}</td>
          <td>{{ $value->hobbies }}</td>
          <!-- <td>{{ $value->resume }}</td> -->
          <td><a href = {{ URL::to('/') }}/uploads/{{$value->resume}}> {{$value->resume}} </a> </td>
          <td><a href="{{ route('resume.edit', $value->id) }}" class="btn btn-primary">Edit</a> </td>

          
          {{ Form::open(['route' => ['resume.destroy', $value->id], 'method' => 'delete']) }}
            <td><button type="submit">Delete</button></td>
          {{ Form::close() }}
        </tr>
      @endforeach
    </table>
  </div>
  <td><a href="{{ route('resume.create') }}" class="btn btn-primary">Create new entry</a> </td>


@stop 