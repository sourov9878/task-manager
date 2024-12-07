<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
        }

        main {
            max-width: 800px;
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        a.button {
            display: inline-block;
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        a.button:hover {
            background-color: #45a049;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f9f9f9;
            padding: 1rem;
            margin-bottom: 0.5rem;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        ul li form {
            margin: 0;
        }

        button {
            padding: 0.5rem 1rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .completed {
            color: #6c757d;
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <header>
        <h1>Task Manager</h1>
    </header>
    <main>
        <a href="{{ route('tasks.create') }}" class="button">Create a New Task</a>

        <ul>
            @foreach ($tasks as $task)
                <li>
                    <span class="{{ $task->completed ? 'completed' : '' }}">{{ $task->title }}</span>
                    @if ($task->completed)
                        <span>✔️ Completed</span>
                    @else
                        <form action="{{ route('tasks.complete', $task) }}" method="POST" style="margin: 0;">
                            @csrf
                            <button type="submit">Mark as Completed</button>
                        </form>
                    @endif
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>
