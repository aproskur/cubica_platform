<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center h-8 px-4 m-2 dark:bg-bgrdark border-themegrey text-themegrey border border-gray-500 hover:border hover:border-themeYellow dark:hover:text-white border border-txtDark border rounded-md font-normal text-sm tracking-normal hover:bg-gray-700 dark:active:bg-gray-900 active:bg-bgrdark focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
