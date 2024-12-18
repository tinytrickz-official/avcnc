<div class="d-flex align-items-center justify-content-between">
    <a href="
    @if (\Auth::user()->role_access === 'teamlead')
        {{ route('teamlead.dashboard'); }}
    @elseif (\Auth::user()->role_access === 'engineer')
        {{ route('engineer.dashboard'); }}
    @endif
    " class="logo d-flex align-items-center">
    <img src="{{ asset('nice-admin') }}/assets/img/activity.png">
    <div class="d-flex flex-column">
        <div class="d-flex flex-row">
            <span class="d-none d-lg-block" style="font-size: 15pt">panel engineer </span>&nbsp;
            <span class="badge bg-primary" style="font-size: 6.1pt; color: #ffffff; height: 15px; margin-top: 5px">v1.0-beta</span>
        </div>
        
        <div style="font-size: 6.5pt; margin-bottom: 5px">make involved & collaborated</div>
    </div>
    </a>
    <i class="bi bi-list toggle-sidebar-btn" style="margin-left: 20px"></i>
</div>