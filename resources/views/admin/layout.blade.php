<!DOCTYPE html>
<html lang="en">
@include('admin.header.head')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
    @include('admin.header.header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           
            <li class="nav-item">
              <a class="nav-link" href="{{route('dashboard.index')}}">
                <span class="menu-title">Tổng Quan</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="{{route('sanpham.index')}}">
                <span class="menu-title">Quản Lý Sản Phẩm</span>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
            </li> <li class="nav-item">
              <a class="nav-link" href="{{route('donhang.index')}}">
                <span class="menu-title">Quản Lý Hóa Đơn</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('chitietdonhang.index')}}">
                <span class="menu-title">Quản Lý Chi Tiết Hóa Đơn</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('nhacungcap.index')}}">
                <span class="menu-title">Quản Lý Nhà Cung Cấp</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('danhmuc.index')}}">
                <span class="menu-title">Quản Lý Danh Mục</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('kho.index')}}">
                <span class="menu-title">Quản Lý Kho</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('taikhoan.index')}}">
                <span class="menu-title">Quản Lý Người Dùng</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('binhluan.index')}}">
                <span class="menu-title">Quản Lý Bình Luận</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('khuyenmai.index')}}">
                <span class="menu-title">Quản Lý Khuyến Mãi</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('baohanh.index')}}">
                <span class="menu-title">Quản Lý Bảo Hành</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>

          </ul>
        </nav>
        <!-- partial -->
       @yield('content')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('admin.footer.footer')
    <!-- End custom js for this page -->
  </body>
</html>