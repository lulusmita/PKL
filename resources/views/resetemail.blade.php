<section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <header class="flex items-center p-4">
        <a href="#" class="flex items-center space-x-2">
            <img class="w-auto h-7 sm:h-8" src="{{ asset('images/telkom_ind.png') }}" alt="Telkom Indonesia Logo">
            <p class="text-xl font-semibold">Telkom Indonesia</p>
        </a>
    </header>    

    <main class="mt-8">
        <h2 class="text-gray-700 dark:text-gray-200">Hi Admin MSO Tsel,</h2>

        <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
            This is your verification code:
        </p>

        <div class="flex items-center mt-4 gap-x-4">
            @foreach(str_split($token) as $char)
                <p class="flex items-center justify-center w-10 h-10 text-2xl font-medium text-red-500 border border-red-500 rounded-md dark:border-red-400 dark:text-red-400">
                    {{ $char }}
                </p>
            @endforeach
        </div>

        <p class="mt-4 leading-loose text-gray-600 dark:text-gray-300">
            This code will only be valid for the next 30 minutes. If the code does not work, you can request again the code.
        </p>
        <a href="{{ route('resetpass') }}" class="inline-block">
            <button class="px-6 py-2 mt-6 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-red-600 rounded-lg hover:bg-red-500 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-80">
                Reset Password
            </button>
        </a>
        
        <p class="mt-8 text-gray-600 dark:text-gray-300">
            Thanks, <br>
            Telkom Software Engineer Team
        </p>
    </main>
    

    <footer class="mt-8">
        <p class="text-gray-500 dark:text-gray-400">
            If you did not request a password reset, please ignore this email.
        </p>

        <p class="mt-3 text-gray-500 dark:text-gray-400">© 2024 Telkom Indonesia. All Rights Reserved.</p>
    </footer>
</section>