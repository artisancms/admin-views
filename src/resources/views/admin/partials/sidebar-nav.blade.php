<ul class="sidebar-menu">
    @include('admin::partials.custom-menu', array('items' => Menu::get('admin-sidebar')->roots()))
</ul>

