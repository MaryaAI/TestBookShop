<ul class="sidebar navbar-nav pr-0">
    <li class="nav-item {{ Request::url() == route('admin.dashboard') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>لوحة الإدارة</span>
        </a>
    </li>
    
    <li class="nav-item {{ request()->is('books*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="#">
            <i class="fas fa-book-open"></i>
            <span>الكتب</span>
        </a>
    </li>
    
    <li class="nav-item {{ request()->is('admin/categories*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="#">
            <i class="fas fa-folder"></i>
            <span>التصنيفات</span>
        </a>
    </li>
    
    <li class="nav-item {{ request()->is('admin/authors*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="#">
            <i class="fas fa-pen-fancy"></i>
            <span>المؤلفون</span>
        </a>
    </li>
    
    <li class="nav-item {{ request()->is('admin/publishers*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="#">
            <i class="fas fa-table"></i>
            <span>الناشرون</span>
        </a>
    </li>
    
    @can('update-users')
    <li class="nav-item {{ Request::url() == route('admin.users.index') ? 'active' : '' }}">
        <a class="nav-link text-right" href="#">
            <i class="fas fa-users"></i>
            <span>المستخدمون</span>
        </a>
    </li>
    @endcan
</ul>