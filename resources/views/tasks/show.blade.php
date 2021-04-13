@extends('layouts.app')
@section('content')

    <h1>id = {{ $task->id }} のタスクリスト詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>タスク</th>
            <th>状況</th>
        </tr>
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->content }}</td>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'このリストを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}

@endsection
