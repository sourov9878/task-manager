<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
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
            max-width: 600px;
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            margin-bottom: 1rem;
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            width: 100%;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        button {
            padding: 0.8rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        @media (max-width: 600px) {
            main {
                margin: 1rem;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Create Task</h1>
    </header>
    <main>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter task title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" placeholder="Enter task description" rows="5"></textarea>

            <button type="submit">Save Task</button>
        </form>
    </main>
</body>
</html>
