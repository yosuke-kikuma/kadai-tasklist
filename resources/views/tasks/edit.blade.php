@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスクリスト編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('status', '状態:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>   

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    
    <div class="media-body">
        <div>
    　       @if (Auth::id() == $task->user_id)
    　　      {{-- 投稿削除ボタンのフォーム --}}
            {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!} 
            @endif
        </div>                    
    </div>
 
@endsection
