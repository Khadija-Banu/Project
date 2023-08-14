<aside id="sidebar" class="sidebar w-25">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('index')}}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          <li>
            <a href="{{route('create')}}">
              <i class="bi bi-circle"></i><span>Create</span>
            </a>
          </li>
          
          
              
    </ul>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Colors</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('color_index')}}">
            <i class="bi bi-circle"></i><span>List</span>
          </a>
        </li>
        <li>
          <a href="{{route('color_create')}}">
            <i class="bi bi-circle"></i><span>Create</span>
          </a>
        </li>
  </aside>