<div>
    @if (session()->has('message'))
    <div class="mb-4 rounded-lg bg-[#D6FAE4] px-6 py-5 text-base text-[#147B6F]" role="alert">
        {{ session('message') }}
    </div>
    @endif
    <form wire:submit.prevent="update">
        <div class="mt-8 space-y-6">
            <div>
                <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Adı</label>
                <input type="text" id="name" wire:model="channel.name" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Enter your channel name" />
            </div>
            @error('channel.name')
            <div class="mb-4 rounded-lg bg-[#FAE5E9] px-6 py-5 text-base text-[#C12C3A]" role="alert">
                {{ $message }}
            </div>
            @enderror
            <div>
                <label for="slug" class="text-sm text-gray-700 block mb-1 font-medium">Url</label>
                <input type="text" id="slug" wire:model="channel.slug" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Enter your channel name" />
            </div>
            @error('channel.slug')
            <div class="mb-4 rounded-lg bg-[#FAE5E9] px-6 py-5 text-base text-[#C12C3A]" role="alert">
                {{ $message }}
            </div>
            @enderror
            <div>
                <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Açıklama</label>
                <textarea id="description" wire:model="channel.description" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Enter your channel name" cols="30" rows="4"></textarea>
            </div>
            @error('channel.description')
            <div class="mb-4 rounded-lg bg-[#FAE5E9] px-6 py-5 text-base text-[#C12C3A]" role="alert">
                {{ $message }}
            </div>
            @enderror
            <div class="space-x-4 mt-8">
                <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Kaydet</button>
                <button class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Geri Dön</button>
              </div>
        </div>
    </form>
</div>
