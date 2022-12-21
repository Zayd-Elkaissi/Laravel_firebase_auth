<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center ">
            <div class=" ">
                <form action="{{route('promotion.store')}}" class="" id="for" method="POST">
                    @csrf
                    <input name="name" type="text" class="rounded-md" placeholder="Add"  value="{{ old('name')}}" id="" name="input" >
                    <button type="submit" class="bg-gray-900 text-white rounded-md px-4 py-2 "><i class="material-icons">&#xE147;</i> <span> Ajouter</span></button>
                </form>	
            </div>
        </div>
        <p class="text-center pt-4">
        @error('name')
        <label class="pt-1" id="error">
             {{$message}}
        </label>
            
        @enderror
    </p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-sm mx-auto mt-4 sm:px-6 lg:px-8 sm:py-4 sm:items-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-between">
                    <h2 class="">Todo List</h2>
                    <a href="#" class="px-4 py-2 font-semibold text-sm bg-gray-900 text-white rounded-md">
                        Save Changes
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>












{{-- <div class="absolute right-0 z-10 mt-2 -mr-1 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button" tabindex="-1">
</div> --}}