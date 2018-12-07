@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-dark text-white">Current Tasks</div>
                    @if (count($tasks) > 0)
                        <div class="panel-body">
                            <table class="table table-striped task-table ">
                                <thead>
                                    <th>&nbsp;</th>
                                    <th>Status</th>
                                    <th>Task</th>
                                </thead>
                                <tbody>
                                @foreach ($tasks as $task)
                                <tr>
                                    <td class="table-text">{!! link_to_route('tasks.show','Edit', ['id'=> $task->id],['class'=>'task-edit']) !!}</td>
                                    <td>{{ $task->status }}</td>
                                    <td>{{ $task->content }}</td>
                                    <style>
                                    .task-edit:before {
                                    content: '\f044';
                                    font-family: "Font Awesome 5 Free";
                                    padding-right: 20px;
                                    font-weight: 900;
                                    }
                                    </style>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>    
                    @endif
                <div class="form-group row　justify-content-md-center">
                    <div class="col-lg-6 offset-lg-4 mt-3">
                        {!! link_to_route('tasks.create', 'Add Task', null, ['class' => 'btn btn-primary btn-add ']) !!}
                        <style>
                        .btn-add:before {
                        content: '\f067';
                        font-family: "Font Awesome 5 Free";
                        padding-right: 20px;
                        font-weight: 900;
                        }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection