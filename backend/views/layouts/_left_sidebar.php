
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                    <span class="badge badge-primary">NEW</span>
                </a>
            </li>
            <li class="nav-title">Theme</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url_for('admin.users') }}">
                    <i class="nav-icon icon-user"></i> Пользователи</a>
            </li>
            <li class="nav-title">Components</li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-cursor"></i> Buttons</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="buttons/buttons.html">
                            <i class="nav-icon icon-cursor"></i> Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buttons/button-group.html">
                            <i class="nav-icon icon-cursor"></i> Buttons Group</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buttons/dropdowns.html">
                            <i class="nav-icon icon-cursor"></i> Dropdowns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buttons/brand-buttons.html">
                            <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
                    </li>
                </ul>
            </li>
            <li class="divider"></li>
            
            <li class="nav-item mt-auto">
                <a class="nav-link nav-link-success" href="" target="_top">
                    <i class="nav-icon icon-wrench"></i> Тестовая версия</a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
