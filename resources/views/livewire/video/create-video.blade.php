<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <form enctype="multipart/form-data">
        <div class="mt-8 space-y-6">
            <div>
                <label for="videoFile" class="text-sm text-gray-700 block mb-1 font-medium">Adı</label>
                <input type="file" id="videoFile" wire:model="videoFile" wire:change="uploadVideo" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Enter your channel name" />
            </div>
            <div class="space-x-4 mt-8">
                <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Kaydet</button>
                <button class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Geri Dön</button>
              </div>
        </div>
    </form>
</div>
