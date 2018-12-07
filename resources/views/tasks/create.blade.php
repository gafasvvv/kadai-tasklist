@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>New Task</h1>
    
    <div class="row">
        <div class="col-6">
            <!-- 'route' => ルーティング名はform タグの action 属性の設定 -->
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                
                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'Task:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::button('Add Task', ['type'=>'submit','class' => 'btn btn-primary btn-add']) !!}
                <style>
                    .btn-add:before {
                    content: '\f067';
                    font-family: "Font Awesome 5 Free";
                    padding-right: 20px;
                    font-weight: 900;
                    }
                </style>
                
             {!! Form::close() !!}   
        </div>
    </div>
    

@endsection