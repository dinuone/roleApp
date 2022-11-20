<x-app-layout>
    <x-slot name="header">
       
       
      @if (auth()->user()->is_admin == 1)
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
      @else
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('User Dashboard') }}
      </h2>
      @endif
    </x-slot>


    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (auth()->user()->is_admin == 1)
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Hello! <small>{{ auth()->user()->name }}</small> 
                    </h2>
                    @else
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Hello! <small>{{ auth()->user()->name }}</small> 
                    </h2>
                    <form action="{{ route('user.create.task') }}" method="POST">
                        @csrf
                      
                        <x-label for="name" :value="__('Task Name')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>
                    @endif
                   
                  
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
