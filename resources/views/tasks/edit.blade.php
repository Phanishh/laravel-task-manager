<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <style>
        body { font-family: Arial; background:#f4f6f8; }
        .container {
            width: 40%;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 6px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        button {
            background: #007bff;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Task</h2>

    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PUT')

        <label>Title</label>
        <input type="text" name="title" value="{{ $task->title }}" required>

        <label>Description</label>
        <textarea name="description">{{ $task->description }}</textarea>

        <label>Priority</label>
        <select name="priority">
            <option {{ $task->priority=='Low'?'selected':'' }}>Low</option>
            <option {{ $task->priority=='Medium'?'selected':'' }}>Medium</option>
            <option {{ $task->priority=='High'?'selected':'' }}>High</option>
        </select>

        <button type="submit">Update Task</button>
    </form>
</div>

</body>
</html>
