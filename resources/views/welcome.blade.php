<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đánh giá chất lượng ảnh</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex justify-center items-center">
<div class="items-center justify-center max-w-xl py-12 px-12 block border border-gray-200 rounded-lg shadow-md bg-gray-50">
    <div class="space-y-8">
        <div>
            <img class="mx-auto h-12 w-auto" src="{{ asset('HUST.png') }}" alt="Logo">
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Đánh giá chất lượng ảnh</h2>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('home.login') }}" method="GET">
            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                    <label for="mssv" class="sr-only">MSSV</label>
                    <input id="mssv" name="mssv" type="text" class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="MSSV">
                </div>
            </div>
            @error('mssv')
                <div class="text-red-600 italic">{{ $message }}</div>
            @enderror

            <div>
                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Tiếp tục
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
