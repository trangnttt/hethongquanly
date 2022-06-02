<?php include "../auth.php" ?>
<?php include "../includes/header.php" ?>
<?php include "../includes/sidebar.php" ?>
<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item active"><a href="#"><b>Bảng kê lương</b></a></li>
    </ul>
    <div id="clock"></div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">

              <a class="btn btn-add btn-sm" href="form-add-tien-luong.html" title="Thêm"><i class="fas fa-plus"></i>
                Tạo mới</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                  class="fas fa-file-upload"></i> Tải từ file</a>
            </div>

            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                  class="fas fa-print"></i> In dữ liệu</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                  class="fas fa-copy"></i> Sao chép</a>
            </div>

            <div class="col-sm-2">
              <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                  class="fas fa-file-pdf"></i> Xuất PDF</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
            </div>
          </div>
          <div style="overflow-x:auto;">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th>Tên nhân viên</th>
                  <th>Giới Tính</th>
                  <th>Chức vụ</th>
                  <th>Tiền lương</th>
                  <th>Trừ lương</th>
                  <th>Tiền thưởng</th>
                  <th>Tổng nhận</th>
                  <th>Trạng thái</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>Hồ Thị Thanh Ngân</td>
                  <td>Nữ</td>
                  <td>Bán hàng</td>
                  <td>7.500.000 đ</td>
                  <td>Không</td>
                  <td>Không</td>
                  <td>7.500.000 đ</td>
                  <td><span class="badge bg-success">Đã nhận tiền</span></td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                        class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>Trần Khả Ái</td>
                  <td>Nữ</td>
                  <td>Bán hàng</td>
                  <td>7.500.000 đ</td>
                  <td>Không</td>
                  <td>1.000.000 đ</td>
                  <td>8.500.000 đ</td>
                  <td><span class="badge bg-success">Đã nhận tiền</span></td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                        class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>Phạm Thu Cúc</td>
                  <td>Nữ</td>
                  <td>Thu ngân</td>
                  <td>7.000.000 đ</td>
                  <td>Không</td>
                  <td>Không</td>
                  <td>7.000.000 đ</td>
                  <td><span class="badge bg-success">Đã nhận tiền</span></td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                        class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>Trần Anh Khoa</td>
                  <td>Nam</td>
                  <td>Tư vấn</td>
                  <td>7.000.000 đ</td>
                  <td>Không</td>
                  <td>500.000 đ</td>
                  <td>7.500.000 đ</td>
                  <td><span class="badge bg-success">Đã nhận tiền</span></td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                        class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>Nguyễn Thành Nhân</td>
                  <td>Nam</td>
                  <td>Bảo trì</td>
                  <td>9.000.000 đ</td>
                  <td>Không</td>
                  <td>Không</td>
                  <td>9.000.000 đ</td>
                  <td><span class="badge bg-success">Đã nhận tiền</span></td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                        class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>Nguyễn Đặng Trọng Nhân</td>
                  <td>Nam</td>
                  <td>Dịch vụ</td>
                  <td>6.500.000 đ</td>
                  <td>Không</td>
                  <td>Không</td>
                  <td>6.500.000 đ</td>
                  <td><span class="badge bg-success">Đã nhận tiền</span></td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                        class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>Nguyễn Thị Mai</td>
                  <td>Nữ</td>
                  <td>Tư vấn</td>
                  <td>7.000.000 đ</td>
                  <td>Không</td>
                  <td>Không</td>
                  <td>7.000.000 đ</td>
                  <td><span class="badge bg-success">Đã nhận tiền</span></td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                        class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>Trương Nguyễn Trà My</td>
                  <td>Nữ</td>
                  <td>Thu ngân</td>
                  <td>7.500.000 đ</td>
                  <td>Không</td>
                  <td>500.000 đ</td>
                  <td>8.000.000 đ</td>
                  <td><span class="badge bg-success">Đã nhận tiền</span></td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                        class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>Nguyễn Nhật Tân</td>
                  <td>Nam</td>
                  <td>Quản kho</td>
                  <td>8.500.000 đ</td>
                  <td>Không</td>
                  <td>Không</td>
                  <td>8.500.000 đ</td>
                  <td><span class="badge bg-success">Đã nhận tiền</span></td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                        class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>Lâm Nguyễn Tuân</td>
                  <td>Nam</td>
                  <td>Quản kho</td>
                  <td>8.500.000 đ</td>
                  <td>Không</td>
                  <td>Không</td>
                  <td>8.500.000 đ</td>
                  <td><span class="badge bg-danger">Chưa nhận tiền</span></td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                        class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>Hồ Thanh Toàn</td>
                  <td>Nam</td>
                  <td>Quản kho</td>
                  <td>8.500.000 đ</td>
                  <td>Không</td>
                  <td>Không</td>
                  <td>8.500.000 đ</td>
                  <td><span class="badge bg-danger">Chưa nhận tiền</span></td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                        class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include "../includes/footer.php" ?>