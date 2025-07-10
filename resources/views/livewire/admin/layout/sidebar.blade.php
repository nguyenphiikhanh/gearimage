<div
    x-data="{ menuOpen: false }">
    <!-- start::Black overlay -->
    <div :class="menuOpen ? 'block' : 'hidden'" @click="menuOpen = false"
         class="fixed z-20 inset-0 bg-primary opacity-50 transition-opacity lg:hidden"></div>
    <!-- end::Black overlay -->

    <aside
        :class="menuOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
        class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 bg-white overflow-y-auto lg:translate-x-0 lg:inset-0 custom-scrollbar"
    >
        <!-- start::Logo -->
        <div class="flex items-center justify-center bg-white bg-opacity-30 h-16">
            <div class="mx-auto">
                <span
                    class="text-2xl font-semibold text-transparent bg-clip-text bg-linear-to-r to-teal-500 from-purple-500 sm:text-3xl">
                    RawFind
                </span>
            </div>
            <x-button icon="bars-3" class="cursor-pointer ml-0" gray flat circle/>
        </div>
        <!-- end::Logo -->

        <!-- start::Navigation -->
        <nav class="custom-scrollbar">
            <x-menu class="rounded-sm ring-0 shadow-none w-full">
                @for($i = 0; $i < 5; $i++)
                    <x-menu-item label="Edit" icon="pencil-square"
                                 class="hover:bg-primary/10 dark:hover:bg-primary/10 hover:text-primary dark:hover:text-primary py-3"
                                 class:icon="group-hover:text-primary dark:group-hover:text-primary" />
                    <x-menu-item label="Archive" icon="archive-box" badge="25" badge-end
                                 class="hover:bg-primary/10 dark:hover:bg-primary/10 hover:text-primary dark:hover:text-primary py-3"
                                 class:icon="group-hover:text-primary dark:group-hover:text-primary"
                                 class:badge="bg-primary dark:bg-primary text-white dark:text-white" />
                @endfor
            </x-menu>
        </nav>
        <!-- end::Navigation -->
    </aside>
</div>
