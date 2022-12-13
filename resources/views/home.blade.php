<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đánh giá chất lượng ảnh</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col items-center space-y-10">
    <x-vote mssv="{{ $mssv }}" vote-count="{{ $vote_count }}"/>
</body>
</html>
