<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Anak <span style="color: #fbbf24;">Mas</span></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">AM</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu Utama</li>

            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
              <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>

            <li>
              <a href="{{ route('wishlist') }}" class="nav-link"><i class="fas fa-heart"></i><span>Wishlist</span></a>
            </li>

            <li>
              <a href="{{ route('user') }}" class="nav-link"><i class="fas fa-users"></i><span>User</span></a>
            </li>

            <li class="menu-header">Akun</li>

            <li>
              <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                  <i class="fas fa-sign-out-alt"></i><span>Logout</span>
                </a>
              </form>
            </li>
          </ul>
        </aside>
      </div>