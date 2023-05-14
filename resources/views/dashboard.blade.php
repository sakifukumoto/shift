<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-50">
                <div class="p-6 text-gray-900">
                  {{ Auth::user()->name }}さん、こんにちは
                  {{-- コンポーネントの使用:primary-button.blade.php --}}
                </div>
                <div class="p-6 text-gray-900">
                  <x-primary-button>希望休の入力</x-primary-button>
                </div>
                <div id='calendar'></div>
                  @vite(['resources/css/app.css', 'resources/js/calender.js'])
              </div>
            </div>
          </div>
        </x-app-layout>
