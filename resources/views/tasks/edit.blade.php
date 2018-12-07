@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    
    <h1>Task Edit</h1>
    
    <div class='row'>
        <div class="col-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
            
            <div class="form-group">
                {!! Form::label('status', 'Status:') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('content', 'Task:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            
            {!! Form::button('Update', ['type'=>'submit','class' => 'btn btn-light btn-task']) !!}
            <style>
                .btn-task:before {
                content: '\f0ad';
                font-family: "Font Awesome 5 Free";
                padding-right: 20px;
                font-weight: 900;
                }
            </style>
                
            {!! Form::close() !!}
        </div>
    </div>

@endsection