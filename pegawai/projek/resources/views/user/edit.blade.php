@extends('template')

@section('main')
    <div id="user">
    <h2>Edit Data User</h2>
    
    {!! Form::model($user, ['method' => 'PATCH', 'files' => true, 'action' => ['UserController@update', $user->id]]) !!}
        @include('user/form', ['submitButtonText'=>'Update'])
    {!! Form::close() !!}
</div>
@stop
