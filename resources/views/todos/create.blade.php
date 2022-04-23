<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="text-center pt-10">
        <h1 class="text-2xl">What next you need To-Do</h1>
        <form action="/todo/create" method="post" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border"/>
            <input type="submit" value="Create" class="p-2 border rounded-lg" />
        </form>
    </div>
</body>
</html>