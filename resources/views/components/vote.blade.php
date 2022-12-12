<div>
    <img class=" object-contain h-[632px] w-full" src="{{ asset('storage/' . \App\Models\Image::find($image_id)->name) }}" alt="image">
</div>

<form action="{{ route('vote') }}" method="POST">
    @csrf
    <h1 class="text-2xl">
        Lựa chọn chất lượng ảnh
    </h1>
    <input name="token" type="hidden" value="{{ $token }}">
    <input name="image_id" type="hidden" value="{{ $image_id }}">
    @if($errors->any())
        <span class="text-red-600">
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        </span>
    @endif
    <div class="space-x-10 my-5">
        <label>
            <input type="radio" value="1" name="vote" id="vote_1" class="w-5 h-5">
            <span class="text-2xl">1</span>
        </label>
        <label>
            <input type="radio" value="2" name="vote" id="vote_2" class="w-5 h-5">
            <span class="text-2xl">2</span>
        </label>
        <label>
            <input type="radio" value="3" name="vote" id="vote_3" class="w-5 h-5">
            <span class="text-2xl">3</span>
        </label>
        <label>
            <input type="radio" value="4" name="vote" id="vote_4" class="w-5 h-5">
            <span class="text-2xl">4</span>
        </label>
        <label>
            <input type="radio" value="5" name="vote" id="vote_5" class="w-5 h-5">
            <span class="text-2xl">5</span>
        </label>
    </div>

    <div class="flex justify-center">
        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Submit</button>
    </div>
</form>
