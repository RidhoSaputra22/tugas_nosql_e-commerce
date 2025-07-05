<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show">
    <div id="toast"
        class="fixed flex items-center w-full max-w-xs p-4 space-x-4 bg-white
        border border-gray-500 shadow-xl
        divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow-sm {{ $position ?? 'top-20 right-10' }} animate-toast-in"
        role="alert">
        <div class="border-b-3 border-primary pb-[3px] w-full  ">
            <div class="text-sm font-normal ">{{ $slot }}</div>
        </div>
    </div>
</div>
