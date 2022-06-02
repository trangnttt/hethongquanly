<!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../images/avatar-Phong.jpg" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b><?php echo $_SESSION['username']; ?></b></p>
        <p class="app-sidebar__user-designation">Have a good day!</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <?php  
      $menu = [
            ['Bảng điều khiển', 'dashboard.php', 'bx-tachometer'],
            ['Bán Hàng', 'phan-mem-ban-hang.php', 'bx-cart-alt'],
            ['Quản lý nhân viên', 'quan-ly-nhan-vien.php', 'bx-id-card'],
            ['Quản lý khách hàng', '#', 'bx-user-voice'],
            ['Quản lý sản phẩm', 'quan-ly-san-pham.php', 'bx-purchase-tag-alt'],
            ['Quản lý đơn hàng', 'quan-ly-don-hang.php', 'bx-task'],
            ['Quản lý nội bộ', 'quan-ly-noi-bo.php', 'bx-run'],
            ['Bảng kê lương', 'quan-ly-luong.php', 'bx-dollar'],
            ['Báo cáo doanh thu', 'quan-ly-bao-cao.php', 'bx-pie-chart-alt-2'],
      ];

      foreach ($menu as [$name, $url, $icon]) {
          if($name == "Bán Hàng") {
            echo "<li>
            <a class='app-menu__item haha' href='$url'>
            <i class='app-menu__icon bx $icon'></i>
            <span class='app-menu__label'>$name</span></a></li>";
          }
          else {
            echo "<li>
            <a class='app-menu__item' href='$url'>
            <i class='app-menu__icon bx $icon'></i>
            <span class='app-menu__label'>$name</span></a></li>";
          }
        }
      ?>  
     
    </ul>
  </aside>