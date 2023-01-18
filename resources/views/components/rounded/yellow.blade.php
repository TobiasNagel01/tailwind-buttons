<a {{ $attributes }} href="{{ ($route ?? false) ? route($route) : ($link ?? '#') }}" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">
    {{ $text }}
</a>
