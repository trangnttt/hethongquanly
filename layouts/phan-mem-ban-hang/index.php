<?php include "../../auth.php" ?>
<?php include "../../includes/header.php" ?>
  <main class="app app-ban-hang">
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="../../layouts/dashboard"><i class="bx-icon bx bx-first-page"></i><b>DASHBOARD</b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="tile">
          <h3 class="tile-title">Phần mềm bán hàng</h3>
          <input type="text" id="myInput" onkeyup="myFunction()"
          placeholder="Nhập mã sản phẩm hoặc tên sản phẩm để tìm kiếm...">
        <div class="du--lieu-san-pham">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
               
                <th class="so--luong">Mã hàng</th>
                <th class="so--luong">Tên sản phẩm</th>
                <th class="so--luong">Ảnh</th>
                <th class="so--luong" width="10">Số lượng</th>
                <th class="so--luong">Giá bán</th>
                <th class="so--luong text-center" style="text-align: center; vertical-align: middle;"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
            
                <td>71309005</td>
                <td>Hazelnut Macchiato</td>
                <td><img src="../../images/img-sanpham/reno.jpg" alt="" width="50px;"></td>
                <td><input class="so--luong1" type="number" value="2"></td>
                <td >50.000 </td>

                <td style="text-align: center; vertical-align: middle;">
                  <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                </td>
              </tr>
              <tr>
           
                <td>62304003</td>
                <td>Ristretto Bianco</td>
                <td><img src="../../images/img-sanpham/matda.jpg" alt="" width="50px;"></td>
                <td><input class="so--luong1" type="number" value="3"></td>
                <td >50.000 </td>

                <td style="text-align: center; vertical-align: middle;">
                  <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                </td>
              </tr>
              <tr>
               
                <td>71304032</td>
                <td>Asian Dolce Latte </td>
                <td><img src="../../images/img-sanpham/ghethera.jpg" alt="" width="50px;"></td>
                <td><input class="so--luong1" type="number" width="30" value="1"></td>
                <td >50.000 </td>

                <td style="text-align: center; vertical-align: middle;">
                  <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                </td>
              </tr>
              <tr>
             
                <td>71338008</td>
                <td>Caffè Americano</td>
                <td><img src="../../images/img-sanpham/zuno.jpg" alt="" width="50px;"></td>
                <td><input class="so--luong1" type="number" width="30" value="5"></td>
                <td >50.000 </td>
                <td style="text-align: center; vertical-align: middle;">
                  <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                </td>
              </tr>
              <tr>
          
            </tbody>
          </table>
        </div>
        <div class="alert">

          <i class="fas fa-exclamation-triangle"></i> Gõ mã hoặc tên sản phẩm vào thanh tìm kiếm để thêm hàng vào đơn hàng
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="tile">
          <h3 class="tile-title">Thông tin thanh toán</h3>
          <div class="row">
            <div class="form-group  col-md-9">
              <label class="control-label">Họ tên khách hàng</label>
              <input class="form-control" type="text" placeholder="Tìm kiếm khách hàng">
            </div>
            <div class="form-group  col-md-3">
              <label style="text-align: center;" class="control-label">Tạo mới</label>
              <button class="btn btn-primary btn-them" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-user-plus"></i>
              </button>
            </div>
            <div class="form-group  col-md-12">
              <label class="control-label">Nhân viên bán hàng</label>
              <select class="form-control" id="exampleSelect1">
                <option>--- Chọn nhân viên bán hàng ---</option>
                <option>Võ Trường</option>
                <option>Nhật Kim Anh</option>
                <option>Đào Thanh Tuấn</option>
                <option>Phạm Phong Phú</option>
              </select>
            </div>
            <div class="form-group  col-md-12">
              <label class="control-label">Ghi chú đơn hàng</label>
              <textarea class="form-control" rows="4" placeholder="Ghi chú thêm đơn hàng"></textarea>
            </div>
  
          </div>
          <div class="row">
           
            <div class="form-group  col-md-12">
              <label class="control-label">Hình thức thanh toán</label>
              <select class="form-control" id="exampleSelect2" required>
                <option>Thanh toán chuyển khoản</option>
                <option>Trả tiền mặt tại quầy</option>
              </select>
            </div>
            <div class="form-group  col-md-6">
              <label class="control-label">Tạm tính tiền hàng: </label>
              <p class="control-all-money-tamtinh">= 129.397.213 VNĐ</p>
            </div>
            <div class="form-group  col-md-6">
              <label class="control-label">Giảm giá (F7): </label>
              <input class="form-control" type="number" value="0">
            </div>
            <div class="form-group  col-md-6">
              <label class="control-label">Tổng cộng thanh toán: </label>
              <p class="control-all-money-total">= 129.397.213 VNĐ</p>
            </div>
            <div class="form-group  col-md-6">
              <label class="control-label">Khách hàng đưa tiền (F8): </label>
              <input class="form-control" type="number" value="290000">
            </div>
            <div class="form-group  col-md-12">
              <label class="control-label">Khách hàng còn nợ: </label>
              <p class="control-all-money"> - 129.397.213 VNĐ</p>
            </div>
            <div class="tile-footer col-md-12">
              <button class="btn btn-primary luu-san-pham" type="button"> Lưu đơn hàng</button>
              <button class="btn btn-primary luu-va-in" type="button">Lưu và in hóa đơn </button>
  
              <a class="btn btn-secondary luu-va-in" href="index.html">Quay về</a>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </main>

  <!--
  MODAL
-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">

    <div class="modal-body">
      <div class="row">
        <div class="form-group  col-md-12">
          <span class="thong-tin-thanh-toan">
            <h5>Tạo mới khách hàng</h5>
          </span>
        </div>
        <div class="form-group col-md-12">
          <label class="control-label">Họ và tên</label>
          <input class="form-control" type="text" required>
        </div>
        <div class="form-group col-md-6">
          <label class="control-label">Địa chỉ</label>
          <input class="form-control" type="text" required>
        </div>
        <div class="form-group col-md-6">
          <label class="control-label">Email</label>
          <input class="form-control" type="text" required>
        </div>
        <div class="form-group col-md-6">
          <label class="control-label">Ngày sinh</label>
          <input class="form-control" type="date" required>
        </div>
        <div class="form-group col-md-6">
          <label class="control-label">Số điện thoại</label>
          <input class="form-control" type="number" required>
        </div>
      </div>
      <BR>
      <button class="btn btn-save" type="button">Lưu lại</button>
      <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
      <BR>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>
<!--
MODAL
-->


  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">X</span>
      </div>
    
     
    </div>

  </div>
  <?php include "../../includes/footer.php" ?>