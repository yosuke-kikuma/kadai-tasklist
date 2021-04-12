@extends('layouts.app')

@section('content')
    @if (Auth::check())
       <h1>タスクリスト一覧</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>メッセージ</th>
                    <th>状況</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                 </tr>
                @endforeach
            </tbody>
        </table>
            
     {{-- メッセージ作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規リストの投稿', [], ['class' => 'btn btn-primary']) !!}
    
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the tasks</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
    
@endsection
