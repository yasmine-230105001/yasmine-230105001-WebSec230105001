@extends('layouts.master')

@section('title', 'GPA Simulator')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">GPA Simulator</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Select Courses & Enter Grades</h5>
            
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credit Hours</th>
                        <th>Grade (A-F)</th>
                    </tr>
                </thead>
                <tbody id="courseTable">
                    @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course['code'] }}</td>
                        <td>{{ $course['title'] }}</td>
                        <td class="credit">{{ $course['credit'] }}</td>
                        <td>
                            <select class="form-select grade">
                                <option value="">Select</option>
                                <option value="4.0">A (4.0)</option>
                                <option value="3.7">A- (3.7)</option>
                                <option value="3.3">B+ (3.3)</option>
                                <option value="3.0">B (3.0)</option>
                                <option value="2.7">B- (2.7)</option>
                                <option value="2.3">C+ (2.3)</option>
                                <option value="2.0">C (2.0)</option>
                                <option value="1.7">C- (1.7)</option>
                                <option value="1.3">D+ (1.3)</option>
                                <option value="1.0">D (1.0)</option>
                                <option value="0.0">F (0.0)</option>
                            </select>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <button class="btn btn-primary w-100" onclick="calculateGPA()">Calculate GPA</button>

            <div class="mt-4">
                <h4>GPA: <span id="gpaResult" class="text-success">-</span></h4>
            </div>
        </div>
    </div>
</div>

<script>
    function calculateGPA() {
        let totalCredits = 0;
        let totalPoints = 0;

        document.querySelectorAll("#courseTable tr").forEach(row => {
            let credit = parseFloat(row.querySelector(".credit").textContent);
            let grade = parseFloat(row.querySelector(".grade").value);

            if (!isNaN(grade)) {
                totalCredits += credit;
                totalPoints += credit * grade;
            }
        });

        let gpa = totalCredits > 0 ? (totalPoints / totalCredits).toFixed(2) : "N/A";
        document.getElementById("gpaResult").textContent = gpa;
    }
</script>
@endsection
