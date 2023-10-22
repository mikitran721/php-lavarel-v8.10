
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a
                    class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                    href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a
                    class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                    href="about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a 
                    class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}"
                    href="portfolio" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a
                    class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                    href="contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>