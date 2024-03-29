@extends('layouts.app')

@section('content')

    <h1>新規のタスク</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($task,['route'=>'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('status','ステータス:') !!}
                    {!! Form::text('status',null,['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content','タスク') !!}
                    {!! Form::text('content',null,['class'=>'form-control','placeholder'=>'タスクを入力してください。']) !!}
                </div>
                
                {!! FOrm::submit('投稿',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}    
        </div>
    </div>

@endsection