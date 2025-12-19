<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        .container {
            width: 80%;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #333;
            color: white;
        }
        a, button {
            padding: 6px 10px;
            margin: 2px;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .add {
            background-color: #28a745;
            color: white;
        }
        .edit {
            background-color: #ffc107;
        }
        .delete {
            background-color: #dc3545;
            color: white;
        }
        .complete {
            background-color: #007bff;
            color: white;
        }

        /* ✅ Completed task styles */
        .completed {
            background-color: #e6ffe6;
        }
        .completed-text {
            text-decoration: line-through;
            color: gray;
        }
        .tick {
            color: green;
            font-weight: bold;
            font-size: 18px;
            margin-left: 6px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Task Management System</h2>

    <a class="add" href="{{ route('tasks.create') }}">➕ Add Task</a>
    <br><br>

    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>

        @forelse($tasks as $task)
            <tr class="{{ $task->status === 'Completed' ? 'completed' : '' }}">
                <td>
                    @if($task->status === 'Completed')
                        <span class="completed-text">{{ $task->title }}</span>
                        <span class="tick">✔</span>
                    @else
                        {{ $task->title }}
                    @endif
                </td>

                <td>{{ $task->description }}</td>

                <td>{{ $task->priority }}</td>

                <td>
                    @if($task->status === 'Completed')
                        <span class="tick">✔ Completed</span>
                    @else
                        {{ $task->status }}
                    @endif
                </td>

                <td>
                    <a class="edit" href="{{ route('tasks.edit', $task->id) }}">Edit</a>

                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="delete">Delete</button>
                    </form>

                    @if($task->status === 'Pending')
                        <form action="{{ route('tasks.complete', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PATCH')
                            <button class="complete">Complete</button>
                        </form>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No tasks available</td>
            </tr>
        @endforelse
    </table>
</div>

</body>
</html>
