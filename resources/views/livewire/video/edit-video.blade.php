<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Video Channel') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="justify-center mt-4">
            <div class="card max-w-2xl">
                    <form wire:submit.prevent="update">
                        <div class="mb-4">
                            <label class="text-sm text-gray-700 block mb-1 font-medium" for="title">Title</label>
                            <input type="text" wire:model="video.title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        @error('video.title')
                        <div class="mb-4 rounded-lg bg-[#D6FAE4] px-6 py-5 text-base text-[#147B6F]">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="mb-4">
                            <label class="text-sm text-gray-700 block mb-1 font-medium" for="description">Description</label>
                            <textarea cols="30" rows="4" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" wire:model="video.description"></textarea>
                        </div>
                        @error('video.description')
                        <div class="mb-4 rounded-lg bg-[#D6FAE4] px-6 py-5 text-base text-[#147B6F]">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="mb-4">
                            <label class="text-sm text-gray-700 block mb-1 font-medium" for="visibility">Visibility</label>
                            <select wire:model="video.visibility" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
                                <option value="private">private</option>
                                <option value="public">public</option>
                                <option value="unlisted">unlisted</option>
                            </select>
                        </div>

                        @error('video.visibility')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="space-x-4 mt-8">
                            <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Update</button>
                            <a href="{{ route('dashboard') }}" class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Geri Dön</a>
                        </div>

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message')}}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
