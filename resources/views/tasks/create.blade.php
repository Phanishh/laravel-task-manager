<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
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
            background: #28a745;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
        }
        a { text-decoration:none; }
    </style>
</head>
<body>

<div class="container">
    <h2>Add New Task</h2>

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <label>Title</label>
        <input type="text" name="title" required>

        <label>Description</label>
        <textarea name="description"></textarea>

        <label>Priority</label>
        <select name="priority" required>
            <option>Low</option>
            <option>Medium</option>
            <option>High</option>
        </select>

        <button type="submit">Save Task</button>
    </form>

    <br>
    <a href="{{ route('tasks.index') }}">⬅ Back</a>
</div>

</body>
</html>
