<div x-data="{ scrolling: false }" @mouseenter="scrolling = true" @mouseleave="scrolling = false"
    class="w-full overflow-x-auto py-4 relative">

    <div class="grid grid-flow-col gap-x-[55px] gap-y-[40px] {{ $rowclass }}">
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
            background: rgba(57, 131, 221, 0.7);
            border-radius: 10px;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollContainers = document.querySelectorAll('[x-data]');

            scrollContainers.forEach(scrollContainer => {
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
        });
    </script>
</div>
