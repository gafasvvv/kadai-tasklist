@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        Task Detail
                    </div>
                    <div class="card-body text-center mb-2">
                                <p>{{ $task->content }}</p>
                        <div class="text-center mb-2">
                            {!! link_to_route('tasks.edit', 'Edit', ['id' => $task->id], ['class' => 'btn btn-light btn-edit']) !!}
                            <style>
                            .btn-edit:before {
                            content: '\f044';
                            font-family: "Font Awesome 5 Free";
                            padding-right: 20px;
                            font-weight: 900;
                            }
                            </style>
                        </div>
                        <div class="text-center ">
                            {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                                {!! Form::button('Delete', ['type'=>'submit', 'class'=> 'btn btn-danger btn-delete']) !!}
                                <style>
                                .btn-delete:before {
                                content: '\f2ed';
                                font-family: "Font Awesome 5 Free";
                                padding-right: 20px;
                                font-weight: 900;
                                }
                                </style>
                            {!! Form::close() !!}
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
    
@endsection