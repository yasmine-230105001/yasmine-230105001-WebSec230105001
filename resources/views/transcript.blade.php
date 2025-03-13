<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Transcript</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f8f9fa;
            text-align: center;
        }
        h2, h3 {
            color: #343a40;
        }
        .container {
            width: 60%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            background: white;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Transcript</h2>
        <p><strong>Name:</strong> {{ $student['name'] }}</p>
        <p><strong>ID:</strong> {{ $student['id'] }}</p>
        <p><strong>Department:</strong> {{ $student['department'] }}</p>

        <h3>Courses</h3>
        <table>
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student['courses'] as $course)
                    <tr>
                        <td>{{ $course['name'] }}</td>
                        <td>{{ $course['grade'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
