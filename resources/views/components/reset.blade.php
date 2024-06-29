<div class="h-auto md:h-auto md:mt-14 w-96 hidden my-6" id="resetFormContainer">
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        
        <form class="space-y-6" action="{{ route('adminreset') }}" method="POST">
            @csrf
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Reset Password</h5>
            @include('components.alerts')
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@telkom.com" required>
            </div>
            <button name="submit" type="submit" class=" w-full text-white bg-merah hover:bg-abu-abu focus:ring-4 focus:outline-none focus:ring-merah font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>
</div>