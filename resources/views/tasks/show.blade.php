<style>
    h1 {
        text-align: center;
        padding: 30px;
    }
    .container {
        width: 60%;
        margin: 0 auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
    }
  
    table th,table td {
        padding: 10px 0;
        text-align: center;
    }
  
    table tr:nth-child(odd){
        background-color: #eee
    }
    .link {
        display: flex;
        justify-content: space-between;
    }
</style>

<h1>タスク詳細</h1>
<div class="container">
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク名</th>
            <td>{{ $task->name }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>作成日時</th>
            <td>{{ $task->created_at->format('Y-m-d H:i:s') }}</td>
        </tr>
        <tr>
            <th>更新日時</th>
            <td>{{ $task->updated_at->format('Y-m-d H:i:s') }}</td>
        </tr>
    </table>
    <div class="link">
        <div class="link__back">
            <a href="{{ route('tasks.index') }}">戻る</a>
        </div>
        <div class="link__edit">
            <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">編集</a>
        </div>
        <div class="link__delete">
            <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST">
                @csrf
                    <button type="submit">削除</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container -->
