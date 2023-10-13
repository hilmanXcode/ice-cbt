@props(['header' => 'Headernya woi', 'body' => 'Bodynya woi'])

<div class="w-full max-w-lg border shadow-lg rounded-md bg-white fixed animate-in slide-in-from-bottom hidden top-[35%] left-[40%] duration-200"
    id="modal">
    <div class="p-5">
        <h1 class="font-semibold text-xl">{{ $header }}</h1>
        <h1 class="font-light mt-2">{{ $body }}</h1>
        <div class="flex gap-2 justify-end mt-2 flex-wrap">
            <button class="px-5 py-2 bg-black text-white rounded-md" id="yes-clicked">Yes</button>
            <button class="px-5 py-2 border rounded-md" id="no-clicked">No</button>
        </div>
    </div>
</div>
