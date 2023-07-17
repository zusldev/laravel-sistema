<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">
    <!-- Create Employee Presentation styled with Tailwind CSS -->
    <div class="container mx-auto py-10">
        <div class="text-center">
            <h1 class="text-3xl font-bold">Create Employee</h1>
            <a href="#" class="btn btn-primary">View all employees</a>
        </div>
    </div>

    <!-- Create Employee -->
    <form action="{{ url('/empleado') }}" method="POST" enctype="multipart/form-data"
        class="container mx-auto bg-white shadow-md rounded-lg p-8 max-w-2xl">
        @csrf
        @include('empleado.form')

        <!-- Content form -->
        
    </form>
    <!-- End Create Employee -->


</body>

</html>
