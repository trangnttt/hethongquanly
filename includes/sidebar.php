<!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../../images/img-anhthe/<?php echo $_SESSION['avatar']; ?>" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b><?php echo $_SESSION['username']; ?></b></p>
        <p class="app-sidebar__user-designation">Have a good day!</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu" id="menu-test">
      <?php  
      $menu = [
        ['Bán Hàng', 'phan-mem-ban-hang', 'bx-cart-alt'],
        ['Bảng điều khiển', 'dashboard', 'bx-tachometer'],
        ['Quản lý nhân viên', 'quan-ly-nhan-vien', 'bx-id-card'],
        ['Quản lý khách hàng', '#', 'bx-user-voice'],
        ['Quản lý sản phẩm', 'quan-ly-san-pham', 'bx-purchase-tag-alt'],
        ['Quản lý đơn hàng', 'quan-ly-don-hang', 'bx-task'],
        ['Quản lý nội bộ', 'quan-ly-noi-bo', 'bx-run'],
        ['Bảng kê lương', 'quan-ly-luong', 'bx-dollar'],
        ['Báo cáo doanh thu', 'quan-ly-bao-cao', 'bx-pie-chart-alt-2'],
      ];

      foreach ($menu as [$name, $url, $icon]) {
          if($name == "Bán Hàng") {
            echo "<li>
            <a class='app-menu__item haha' href='../../layouts/$url'>
            <i class='app-menu__icon bx $icon'></i>
            <span class='app-menu__label'>$name</span></a></li>";
          }
          else {
            echo "<li>
            <a class='app-menu__item' href='../../layouts/$url'>
            <i class='app-menu__icon bx $icon'></i>
            <span class='app-menu__label'>$name</span></a></li>";
          }
        }
      ?>  
     
    </ul>
  </aside>