<div x-data="{ scrolling: false }" @mouseenter="scrolling = true" @mouseleave="scrolling = false"
    class="w-full overflow-x-auto py-4 relative">
    <div class="flex gap-[55px] whitespace-nowrap">
        {{ $slot }}
    </div>

    <style>
        .hide-scrollbar::-webkit-scrollbar {
            width: 0px;
            height: 0px;
        }

        .hide-scrollbar {
            scrollbar-width: none;
        }

        .show-scrollbar::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        .show-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollContainer = document.querySelector('[x-data]');

            scrollContainer.classList.add('hide-scrollbar');

            scrollContainer.addEventListener('mouseenter', () => {
                scrollContainer.classList.add('show-scrollbar');
                scrollContainer.classList.remove('hide-scrollbar');
            });

            scrollContainer.addEventListener('mouseleave', () => {
                scrollContainer.classList.add('hide-scrollbar');
                scrollContainer.classList.remove('show-scrollbar');
            });
        });
    </script>
</div>
