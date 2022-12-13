<div class="w-full flex justify-center relative">
    <div class="absolute top-0 right-0 mt-5 mr-5 flex flex-col items-end">
        <h1>MSSV <span class="font-bold">{{ $mssv }}</span> </h1>
        <h1>Đã đánh giá <span class="font-bold">{{ $vote_count }} </span>lần</h1>
        <a href="{{ route('welcome') }}" class="w-11"><span class="underline italic">Thoát</span></a>
    </div>

    <h1 class="font-bold text-4xl mt-5">Đánh giá chất lượng ảnh</h1>
</div>

<div class="w-full grid grid-cols-3 px-10 gap-5">
    <div class="flex justify-center items-end">
        <h1 class="text-2xl font-bold">
            Ví dụ
        </h1>
    </div>
    <div class="col-span-2 flex flex-col items-center space-y-2">
        <h1 class="text-2xl font-bold">
            Lựa chọn chất lượng ảnh
        </h1>
        <div class="flex space-x-5">
            <form action="{{ route('vote') }}" method="POST">
                @csrf

                <input name="mssv" type="hidden" value="{{ $mssv }}">
                <input name="image_id" type="hidden" value="{{ $image_id }}">
                <input name="vote" type="hidden" value="1">

                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-bold rounded-lg text-sm px-5 py-2.5">1</button>
            </form>
            <form action="{{ route('vote') }}" method="POST">
                @csrf
                <input name="mssv" type="hidden" value="{{ $mssv }}">
                <input name="image_id" type="hidden" value="{{ $image_id }}">
                <input name="vote" type="hidden" value="2">

                <button type="submit" class="focus:outline-none text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:ring-orange-200 font-bold rounded-lg text-sm px-5 py-2.5">2</button>
            </form>
            <form action="{{ route('vote') }}" method="POST">
                @csrf

                <input name="mssv" type="hidden" value="{{ $mssv }}">
                <input name="image_id" type="hidden" value="{{ $image_id }}">
                <input name="vote" type="hidden" value="3">

                <button type="submit" class="focus:outline-none text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-400 font-bold rounded-lg text-sm px-5 py-2.5">3</button>
            </form>
            <form action="{{ route('vote') }}" method="POST">
                @csrf

                <input name="mssv" type="hidden" value="{{ $mssv }}">
                <input name="image_id" type="hidden" value="{{ $image_id }}">
                <input name="vote" type="hidden" value="4">

                <button type="submit" class="text-white bg-lime-500 hover:bg-lime-600 focus:ring-4 focus:ring-lime-100 font-bold rounded-lg text-sm px-5 py-2.5">4</button>
            </form>
            <form action="{{ route('vote') }}" method="POST">
                @csrf

                <input name="mssv" type="hidden" value="{{ $mssv }}">
                <input name="image_id" type="hidden" value="{{ $image_id }}">
                <input name="vote" type="hidden" value="5">

                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-bold rounded-lg text-sm px-5 py-2.5">5</button>
            </form>
        </div>
    </div>

{{--    Sample--}}
    <div class="order-3 grid gap-2 grid-cols-2 items-center w-auto">
        <div class="space-y-1 relative w-auto">
            <span class="absolute bottom-0 right-0 bg-red-700 text-white text-sm font-bold px-3 py-0.5 rounded">1</span>
            <img class="object-contain object-right-bottom h-[200px]" src="{{ asset('storage/sample/1.jpg') }}" alt="image">
        </div>
        <div class="space-y-1 relative w-auto">
            <span class="absolute bottom-0 right-0 bg-orange-600 text-white text-sm font-bold px-3 py-0.5 rounded">2</span>
            <img class=" object-contain object-right-bottom h-[200px]" src="{{ asset('storage/sample/2.jpg') }}" alt="image">
        </div>
        <div class="space-y-1 relative w-auto">
            <span class="absolute bottom-0 right-0 bg-yellow-500 text-white text-sm font-bold px-3 py-0.5 rounded">3</span>
            <img class=" object-contain object-right-bottom h-[200px]" src="{{ asset('storage/sample/3.jpg') }}" alt="image">
        </div>
        <div class="space-y-1 relative w-auto">
            <span class="absolute bottom-0 right-0 bg-lime-500 text-white text-sm font-bold px-3 py-0.5 rounded">4</span>
            <img class=" object-contain object-right-bottom h-[200px]" src="{{ asset('storage/sample/4.jpg') }}" alt="image">
        </div>
        <div class="space-y-1 relative w-auto">
            <span class="absolute bottom-0 right-0 bg-green-700 text-white text-sm font-bold px-3 py-0.5 rounded">5</span>
            <img class=" object-contain object-right-bottom h-[200px]" src="{{ asset('storage/sample/5.jpg') }}" alt="image">
        </div>
    </div>

    <div class="col-span-2 order-4 flex flex-col items-center">
        <img class="object-contain object-top h-[632px] " src="{{ asset('storage/' . \App\Models\Image::find($image_id)->name) }}" alt="image">
    </div>
</div>
