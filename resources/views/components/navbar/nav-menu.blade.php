
<ul
    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
    @foreach ($menuItems as $route => $label)
        <li>
            <a href="{{ url($route) }}"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{ request()->is(trim($route, '/')) ? 'bg-blue-700 text-white md:bg-transparent md:text-blue-700 dark:text-white md:dark:text-blue-500' : '' }}">
                {{ $label }}
            </a>
        </li>
    @endforeach
</ul>
