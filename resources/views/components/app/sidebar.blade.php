<aside  :class="menu? 'active' : '' " id="sidebar" x-transition>
    <x-app.icons.close :action="__('menu')" :color="__('#fff')" />
    <div class="top">
        <x-app.logo-app />
        <x-app.ul-menu-sidebar />
        <x-app.ul-categores />
    </div>
    <div class="bottom-sidebar">
        <x-app.bottomsidebar />
    </div>
</aside>
