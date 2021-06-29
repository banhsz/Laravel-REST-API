<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Emloyees</title>
    </head>
    <body>
        <h1>List of employees</h1>
        @foreach ($employees as $employee)
            <p>ID: {{ $employee['id'] }}</p>
            <p>Name: {{ $employee['name'] }}</p>
            <p>Team: {{ $employee['team'] }}</p>
            <p>Salary: {{ $employee['salary'] }}</p>
            <br/>
        @endforeach
    </body0>
</html>