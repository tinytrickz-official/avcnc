
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="{{ route('teamlead.dashboard') }}">
                <i class="bi bi-stack"></i>
                <span style="font-size: 11pt; margin-top: 2px">Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Menu -->

        <li class="nav-heading">Team Management</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ asset('nice-admin') }}/pages-blank.html">
                <i class="bi bi-chat-right-dots"></i>
                <span style="font-size: 11pt;">Reminder Notes</span>
            </a>
        </li><!-- End Blank Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-activity"></i></i><span style="font-size: 11pt; margin-top: 2px">Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ asset('nice-admin') }}/components-alerts.html">
                    <span>Alerts</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('nice-admin') }}/components-accordion.html">
                    <span>Accordion</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('nice-admin') }}/components-badges.html">
                    <span>Badges</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('nice-admin') }}/components-breadcrumbs.html">
                    <span>Breadcrumbs</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('nice-admin') }}/components-buttons.html">
                    <span>Buttons</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('nice-admin') }}/components-cards.html">
                    <span>Cards</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('nice-admin') }}/components-carousel.html">
                    <span>Carousel</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('nice-admin') }}/components-list-group.html">
                    <span>List group</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('nice-admin') }}/components-modal.html">
                    <span>Modal</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('nice-admin') }}/components-tabs.html">
                    <span>Tabs</span>
                </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/components-pagination.html">
                <span>Pagination</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/components-progress.html">
                <span>Progress</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/components-spinners.html">
                <span>Spinners</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/components-tooltips.html">
                <span>Tooltips</span>
            </a>
            </li>
        </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-archive"></i><span style="font-size: 11pt; margin-top: 2px">Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="{{ asset('nice-admin') }}/forms-elements.html">
                <span>Form Elements</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/forms-layouts.html">
                <span>Form Layouts</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/forms-editors.html">
                <span>Form Editors</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/forms-validation.html">
                <span>Form Validation</span>
            </a>
            </li>
        </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bezier"></i><span style="font-size: 11pt; margin-top: 2px">Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="{{ asset('nice-admin') }}/tables-general.html">
                <span>General Tables</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/tables-data.html">
                <span>Data Tables</span>
            </a>
            </li>
        </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-box-seam"></i><span style="font-size: 10.8pt; margin-top: 2px">Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="{{ asset('nice-admin') }}/charts-chartjs.html">
                <span>Chart.js</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/charts-apexcharts.html">
                <span>ApexCharts</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/charts-echarts.html">
                <span>ECharts</span>
            </a>
            </li>
        </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-heading">Monitoring & Stability</li>

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bug"></i><span style="font-size: 12pt; margin-top: 2px">Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="{{ asset('nice-admin') }}/icons-bootstrap.html">
                <span>Bootstrap Icons</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/icons-remix.html">
                <span>Remix Icons</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/icons-boxicons.html">
                <span>Boxicons</span>
            </a>
            </li>
        </ul>
        </li><!-- End Icons Nav -->

        <li class="nav-heading">General Settings</li>

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#team-member-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people"></i><span style="font-size: 12pt; margin-top: 2px">Team Member</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="team-member-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="{{ asset('nice-admin') }}/icons-bootstrap.html">
                <span>Engineer</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/icons-remix.html">
                <span>Quality Assurance</span>
            </a>
            </li>
            <li>
            <a href="{{ asset('nice-admin') }}/icons-boxicons.html">
                <span>Team Leader</span>
            </a>
            </li>
        </ul>
        </li><!-- End Icons Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ asset('nice-admin') }}/users-profile.html">
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ asset('nice-admin') }}/pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>F.A.Q</span>
        </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ asset('nice-admin') }}/pages-contact.html">
            <i class="bi bi-envelope"></i>
            <span>Contact</span>
        </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ asset('nice-admin') }}/pages-register.html">
            <i class="bi bi-card-list"></i>
            <span>Register</span>
        </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ asset('nice-admin') }}/pages-login.html">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
        </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ asset('nice-admin') }}/pages-error-404.html">
            <i class="bi bi-dash-circle"></i>
            <span>Error 404</span>
        </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ asset('nice-admin') }}/pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside>