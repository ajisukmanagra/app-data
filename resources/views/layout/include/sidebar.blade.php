<div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        @if(auth()->user()->role == 'admin')
                        <li><a href="/dasboard" class="nav-link {{ request()->is('dasboard') ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li><a href="/agenda" class="nav-link {{ request()->is('agenda') ? 'active' : '' }}"><i class="fa fa-calendar" aria-hidden="true"></i> <span>Agenda</span></a></li>
                        <li><a href="/sekeltaris" class="nav-link {{ request()->is('sekeltaris') ? 'active' : '' }}"><i class="fa fa-user" aria-hidden="true"></i><span>sekeltaris</span></a></li>
                        @endif
                        <li><a href="/siswa" class="nav-link {{ request()->is('siswa') ? 'active' : '' }}"><i class="fa fa-cog" aria-hidden="true"></i> <span>pengaturan</span></a></li>
                        <li><a href="/logout" class="nav-link {{ request()->is('logout') ? 'active' : '' }}"><i class="lnr lnr-exit" aria-hidden="true"></i> <span>Logout</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>