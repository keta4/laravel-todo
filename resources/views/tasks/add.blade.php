<style>
    h1 {
        text-align: center;
        padding: 30px;
    }
    .form {
        width: 80%;
        margin: 0 auto;
        text-align: center;
    }
    .form-group {
        padding-bottom: 50px;
    }
    span {
        color: red;
    }
    input {
        width: 60%;
        height: 30px;
    }
    textarea {
        width: 60%;
    }
</style>

<h1>タスク追加</h1>
<form action="{{ route('tasks.store') }}" method="POST" class="form">
    @csrf
    <div class="form-group">
        <label for="name">タスク名<span>(必須)</span></label>
        <input type="text" name="name" maxlength="30" placeholder="タスク名を入力">
    </div>
    <div class="form-group">
        <label for="content">タスク内容<span>(必須)</span></label>
        <textarea name="content" rows="5" placeholder="タスク内容を入力"></textarea>
    </div>
    <button type="submit">タスクを追加</button>
</form>
