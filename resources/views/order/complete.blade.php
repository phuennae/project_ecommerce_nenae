<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Order Complete') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8 text-center">
                
                <!-- Topbar -->
                <div class="flex flex-col items-center mb-8">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-20 h-20 rounded-full object-contain">
                        <div class="w-px h-12 bg-gray-200 dark:bg-gray-700"></div>
                        <span class="text-lg font-medium text-gray-700 dark:text-gray-200">Thank you</span>
                    </div>
                </div>

                <!-- Main Section -->
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">🍰 Thank you for your order!</h2>
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-40 h-40 mx-auto mb-6 object-contain">

                <p class="text-gray-700 dark:text-gray-300 mb-2">
                    Your order ID is <strong>xxxxxx</strong> 💌
                </p>
                <p class="text-gray-700 dark:text-gray-300 mb-2">
                    Please pick up your order during our business hours:
                </p>
                <p class="text-gray-800 dark:text-gray-200 font-medium">
                    10:00 AM – 6:00 PM 🕓
                </p>
                <p class="text-gray-500 dark:text-gray-400 mt-4">
                    We hope our treats make your day a little sweeter! 💖✨
                </p>

                <a href="{{ url('/') }}"
                   class="inline-block mt-8 bg-amber-700 hover:bg-amber-800 text-white px-6 py-2 rounded-md font-medium transition">
                    Back to Home Page
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
