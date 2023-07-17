<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Edit Employee</title>
</head>

<body class="bg-gray-100">
    <!-- Edit Employee Presentation styled bootstrap -->
    <div class="container mx-auto py-10">
        <div class="text-center">
            <h1 class="text-3xl font-bold">Edit Employee</h1>
            <a href="{{ url('/empleado') }}" class="btn btn-primary">View all employees</a>
        </div>
    </div>

    <!-- Edit Employee -->
    <form action="{{ url('/empleado/'.$empleado->id) }}" method="POST" enctype="multipart/form-data"
        class="container mx-auto bg-white shadow-md rounded-lg p-8 max-w-2xl">
        @csrf
        {{ method_field('PUT') }}
        <!-- Content form -->
        @include('empleado.form')

        <!-- End content form -->

    </form>
    <!-- End Edit Employee -->
</body>

</html>
