<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/logohospital3.png')}}" class="main-logo" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/logo_hospital.png')}}" class="logo-icon" alt="logo"></a>
    </div>

    @if(\Auth::guard('admin')->check())
    @include('Dashboard.layouts.main-sidebar.admin-sidebar-main')
    @endif

    @if(\Auth::guard('doctor')->check())
    @include('Dashboard.layouts.main-sidebar.doctor-sidebar-main')
    @endif

    @if(\Auth::guard('ray_employee')->check())
    @include('Dashboard.layouts.main-sidebar.ray_employee-sidebar-main')
    @endif

    @if(\Auth::guard('laboratorie_employee')->check())
    @include('Dashboard.layouts.main-sidebar.laboratorie_employee-sidebar-main')
    @endif

    @if(\Auth::guard('patient')->check())
    @include('Dashboard.layouts.main-sidebar.patient-sidebar-main')
    @endif

</aside>
<!-- main-sidebar -->