<ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
    <li class="me-2">
        <a href="{{ route('users') }}" aria-current="page" class=" {{ (Route::is('users'))? 'text-merah bg-gray-100' : '' }} inline-block p-4  rounded-t-lg dark:bg-gray-800 dark:text-blue-500">All</a>
    </li>
    <li class="me-2">
        <a href="{{ route('users', ['search' => 'MSO']) }}" class="{{ (Route::is('users', ['search' => 'MSO']))? 'text-merah bg-gray-100' : '' }} inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">MSO</a>
    </li>
    <li class="me-2">
        <a href="{{ route('users', ['search' => 'WITEL']) }}" class="{{ (Route::is('users', ['search' => 'WITEL']))? 'text-merah bg-gray-100' : '' }} inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">WITEL</a>
    </li>
</ul>
