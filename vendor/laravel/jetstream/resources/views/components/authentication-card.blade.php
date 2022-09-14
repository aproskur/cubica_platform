<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-bgr-dark bg-white-800">
    <div>
        {{ $logo }}
    </div>

    <div class="register-div w-full sm:max-w-md mt-6 px-6 py-6 bg-white dark:bg-bgr-dark border border-solid shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
