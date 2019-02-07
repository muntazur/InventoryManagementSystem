@extends('layout.user')

@section('login')
  
   {!! Form::open(['action'=>'UserController@login','class'=>'form-horizontal']) !!}
      
      
       {!! Form:: text('email',$value=null,$attribute=['class'=>'form-control','style'=>'width:90%','placeholder'=>'Enter email ...','required'=>'required']) !!}

       {!! Form:: password('password',['class'=>'form-control','style'=>'width:90%','placeholder'=>'Enter password ...','required'=>'required']) !!}
       
       <br>
       {!! Form::submit('Login',['class'=>'btn btn-primary']) !!}
   
   {!! Form::close() !!}

@endsection


@section('register')

{!! Form::open(['action'=>'UserController@register','class'=>'form-horizontal']) !!}
      
      
      {!! Form:: text('name',$value=null,$attribute=['class'=>'form-control','style'=>'width:90%','placeholder'=>'Enter full-name ...','required'=>'required']) !!}
      
      {!! Form:: text('email',$value=null,$attribute=['class'=>'form-control','style'=>'width:90%','placeholder'=>'Enter email ...','required'=>'required']) !!}

      {!! Form:: password('password',['class'=>'form-control','style'=>'width:90%','placeholder'=>'Enter password ...','required'=>'required']) !!}

      {!! Form:: password('repeat_password',['class'=>'form-control','style'=>'width:90%','placeholder'=>'Repeat-password ...','required'=>'required']) !!}
      
      <br>
      {!! Form::submit('Signup',['class'=>'btn btn-primary']) !!}
  
  {!! Form::close() !!}
   

@endsection