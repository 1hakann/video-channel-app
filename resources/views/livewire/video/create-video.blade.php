<div class="container">
    <div class="justify-center mt-4">
        <div class="card max-w-2xl" x-data="{ isUploading: false, progress: 0 }"
            x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false , $wire.fileCompleted()"
            x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress"
            >
            <div class="mt-8 space-y-6">
                <div class="bg-gray-200 rounded-full" x-show="isUploading">
                    <div class="bg-blue-500 rounded-full h-2" role="progressbar" :style="`width: ${progress}%`"></div>
                </div>
                <form wire:submit="fileCompleted" x-show="!isUploading" method="POST" class="max-w-md mx-auto">
                    @csrf
                    <div class="mb-5">
                        <label for="videoFile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your video</label>
                        <input type="file" id="videoFile" accept="video/*" wire:model='videoFile' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                    </div>
                    <button type="submit" class="mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
                @error('videoFile')
                    <div class="mb-4 rounded-lg bg-[#D6FAE4] px-6 py-5 text-base text-[#147B6F]">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
