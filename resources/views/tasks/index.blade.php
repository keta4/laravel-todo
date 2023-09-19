<style>
    h1 {
        text-align: center;
        padding: 30px;
    }
    .container {
        width: 80%;
        margin: 0 auto;
    }
    table {
        border-spacing: 0;
        border-collapse: collapse;
        border-bottom: 1px solid #aaa;
        color: #555;
        width: 100%;   
    }
    th {
        border-top: 1px solid #aaa;
        background-color: #f5f5f5;    
        padding: 10px 0 10px 6px;
        text-align: center;        
    }
    td {
        border-top: 1px solid #aaa;
        padding: 10px 0 10px 6px;
        text-align: center; 
    }
    a {
        margin-right: 20px;
    }
</style>

<head>
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('js/app.css') }}" rel="stylesheet"> -->
</head>

<h1>タスク一覧画面</h1>
<div class="container">
    <div class="task__add">
        <a href="{{ route('tasks.add') }}">＋タスクを追加する</a>
    </div>

    <table>
        <tr>
            <th>タスク名</th>
            <th>アクション</th>
        </tr>
        @foreach($tasks as $task)
            <tr>
                <td class="td1">{{ $task->name }}</td>
                <td class="td2">
                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}" class="btn btn-primary">詳細</a>
                    <a href="{{ route('tasks.edit', ['id' => $task->id]) }}" class="btn btn-primary">編集</a>

                    <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
<!-- /.container -->
