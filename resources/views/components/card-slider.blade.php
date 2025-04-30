<div x-data="{ scrolling: false }" @mouseenter="scrolling = true" @mouseleave="scrolling = false"
    class="w-full overflow-x-auto py-6 relative transition-all duration-300">

    <div class="grid grid-flow-col gap-x-4 gap-y-8 {{ $rowclass }}">
        {{ $slot }}
    </div>

    <style>
        .hide-scrollbar::-webkit-scrollbar {
            width: 10px;
            height: 10px;
            background: rgba(0, 0, 0, 0);
        }

        .hide-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0);
            transition: 0.3s ease, opacity 0.3s ease;
        }

        .show-scrollbar::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        .show-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(180, 180, 180, 0.78);
            border-radius: 10px;
            transition: 0.3s ease, opacity 0.3s ease;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
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
