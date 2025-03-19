<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <x-validation-errors class="mb-4" />

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div>
            <x-label for="password" value="{{ __('Password') }}" class="block text-sm font-medium text-gray-700" />
            <x-input id="password" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password" required autocomplete="current-password" autofocus />
        </div>

        <div class="flex justify-end mt-4">
            <x-button class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                {{ __('Confirm') }}
            </x-button>
        </div>
    </form>
</div>