<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><style> table th:last-child, table td:last-child { display: none; } </style><body>
<table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0" id="tableNV" width="100%">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>ID nhân viên</th>
                                <th>Họ và tên</th>
                                <th>Ảnh thẻ</th>
                                <th>Ngày sinh</th>
                                <th>SĐT</th>
                                <th>Chức vụ</th>
                                <th>Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                                <td>1</td>
                                <td>1111</td>
                                <td>Trần Kiến Phong</td>
                                <td><img class="img-card-person" src="../images/avatar-Phong.jpg" alt="">
                                </td>
                                <td>23/07/1993                                </td>
                                <td>774819557</td>
                                <td>Chức vụ A</td>
                                <td>
                                    <a href="view-nhan-vien.php?id=1111" class="btn btn-info btn-sm edit"><i class="far fa-eye"></i></a>
                                    <button class="btn btn-save btn-sm edit" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalEDit1111"><i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-md trash" title="Xóa" data-toggle="modal" data-target="#ModalDel1111"><i class="fas fa-trash-alt"></i>
                                    </button>

                                    <!--MODAL EDIT-->
                                    <div class="modal fade" id="ModalEDit1111" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group  col-md-12">
                                                            <span class="thong-tin-thanh-toan">
                                                                <h5>Chỉnh sửa thông tin nhân viên cơ bản</h5>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <form id="formUpdate" action="" name="form" method="post">
                                                        <input name="id" type="hidden" value="1111">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">ID nhân viên</label>
                                                                <input class="form-control" type="text" required="" value="1111" disabled="">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Họ và tên</label>
                                                                <input class="form-control" type="text" name="name" required="" value="Trần Kiến Phong">
                                                            </div>
                                                            <div class="form-group  col-md-6">
                                                                <label class="control-label">Số điện thoại</label>
                                                                <input class="form-control" type="number" name="sdt" required="" value="774819557">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Địa chỉ email</label>
                                                                <input class="form-control" type="text" name="email" required="" value="phongtrankien@gmail.com">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label class="control-label">Địa chỉ</label>
                                                                <input class="form-control" type="text" name="diachi" value="2B Nguyễn Chánh Sắt, phường 13, quận Tân Bình, TPHCM">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Ngày sinh</label>
                                                                <input class="form-control" type="date" name="ngaysinh" value="1993-07-23">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="exampleSelect1" class="control-label">Chức
                                                                    vụ</label>

                                                                <select class="form-control" name="chucvu" id="exampleSelect1">
                                                                    <option value="Chức vụ A">
                                                                        Chức vụ A</option>
                                                                                                                                        <option value="Chức vụ B">
                                                                        Chức vụ B</option>
                                                                                                                                        <option value="Chức vụ C">
                                                                        Chức vụ C</option>
                                                                                                                                        <option value="Chức vụ D">
                                                                        Chức vụ D</option>
                                                                                                                                        <option value="Chức vụ E">
                                                                        Chức vụ E</option>
                                                                                                                                        <option value="Chức vụ F">
                                                                        Chức vụ F</option>
                                                                                                                                    </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Tình trạng hôn
                                                                    nhân</label>
                                                                <input class="form-control" type="text" name="honnhan" value="Đã kết hôn">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Bằng Cấp</label>
                                                                <input class="form-control" type="text" name="bangcap" value="Tốt nghiệp Đại học">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Account</label>
                                                                <input class="form-control" type="text" name="account" value="admin">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Password</label>
                                                                <input class="form-control" type="text" name="password" value="1234">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">CCCD</label>
                                                                <input class="form-control" type="text" name="cccd" value="185193002005">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Ngày cấp</label>
                                                                <input class="form-control" type="date" name="ngaycap" value="2020-05-06">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Nơi cấp</label>
                                                                <input class="form-control" type="text" name="noicap" value="Quận 7, TPHCM">
                                                            </div>
                                                            <div class="modal-footer col-md-12">
                                                                <button class="btn btn-save" name="update" type="submit">Lưu lại</button>
                                                                <button type="reset" class="btn btn-cancel" id="btnReset" onclick="reSet()">Hủy bỏ</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL EDIT-->

                                    <!--MODAL DELETE-->
                                    <div class="modal fade" id="ModalDel1111" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group  col-md-12">
                                                            <span class="thong-tin-thanh-toan">
                                                                <h5>Xóa nhân viên</h5>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="txt-delete">
                                                        <p>Bạn có chắc chắn muốn xóa nhân viên <br>
                                                            <b>Trần Kiến Phong</b> mã số
                                                            <b>1111</b> ???
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-delete" href="delete.php?id=1111&amp;table=NhanVien">Xóa</a>
                                                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy
                                                        bỏ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL DELETE-->

                                </td>
                            </tr>
                                                        <tr>
                                <td>2</td>
                                <td>NV3728</td>
                                <td>Huỳnh Thi</td>
                                <td><img class="img-card-person" src="../images/hethong.jpg" alt="">
                                </td>
                                <td>10/05/1995                                </td>
                                <td>996424988</td>
                                <td>Chức vụ B</td>
                                <td>
                                    <a href="view-nhan-vien.php?id=NV3728" class="btn btn-info btn-sm edit"><i class="far fa-eye"></i></a>
                                    <button class="btn btn-save btn-sm edit" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalEDitNV3728"><i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-md trash" title="Xóa" data-toggle="modal" data-target="#ModalDelNV3728"><i class="fas fa-trash-alt"></i>
                                    </button>

                                    <!--MODAL EDIT-->
                                    <div class="modal fade" id="ModalEDitNV3728" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group  col-md-12">
                                                            <span class="thong-tin-thanh-toan">
                                                                <h5>Chỉnh sửa thông tin nhân viên cơ bản</h5>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <form id="formUpdate" action="" name="form" method="post">
                                                        <input name="id" type="hidden" value="NV3728">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">ID nhân viên</label>
                                                                <input class="form-control" type="text" required="" value="NV3728" disabled="">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Họ và tên</label>
                                                                <input class="form-control" type="text" name="name" required="" value="Huỳnh Thi">
                                                            </div>
                                                            <div class="form-group  col-md-6">
                                                                <label class="control-label">Số điện thoại</label>
                                                                <input class="form-control" type="number" name="sdt" required="" value="996424988">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Địa chỉ email</label>
                                                                <input class="form-control" type="text" name="email" required="" value="huynhthi0503@gmail.com">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label class="control-label">Địa chỉ</label>
                                                                <input class="form-control" type="text" name="diachi" value="Địa chỉ thường trú">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Ngày sinh</label>
                                                                <input class="form-control" type="date" name="ngaysinh" value="1995-05-10">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="exampleSelect1" class="control-label">Chức
                                                                    vụ</label>

                                                                <select class="form-control" name="chucvu" id="exampleSelect1">
                                                                    <option value="Chức vụ B">
                                                                        Chức vụ B</option>
                                                                                                                                        <option value="Chức vụ A">
                                                                        Chức vụ A</option>
                                                                                                                                        <option value="Chức vụ C">
                                                                        Chức vụ C</option>
                                                                                                                                        <option value="Chức vụ D">
                                                                        Chức vụ D</option>
                                                                                                                                        <option value="Chức vụ E">
                                                                        Chức vụ E</option>
                                                                                                                                        <option value="Chức vụ F">
                                                                        Chức vụ F</option>
                                                                                                                                    </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Tình trạng hôn
                                                                    nhân</label>
                                                                <input class="form-control" type="text" name="honnhan" value="Đã kết hôn">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Bằng Cấp</label>
                                                                <input class="form-control" type="text" name="bangcap" value="Đại Học">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Account</label>
                                                                <input class="form-control" type="text" name="account" value="thi">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Password</label>
                                                                <input class="form-control" type="text" name="password" value="1234">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">CCCD</label>
                                                                <input class="form-control" type="text" name="cccd" value="123456789012">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Ngày cấp</label>
                                                                <input class="form-control" type="date" name="ngaycap" value="2022-05-04">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Nơi cấp</label>
                                                                <input class="form-control" type="text" name="noicap" value="Bến Tre">
                                                            </div>
                                                            <div class="modal-footer col-md-12">
                                                                <button class="btn btn-save" name="update" type="submit">Lưu lại</button>
                                                                <button type="reset" class="btn btn-cancel" id="btnReset" onclick="reSet()">Hủy bỏ</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL EDIT-->

                                    <!--MODAL DELETE-->
                                    <div class="modal fade" id="ModalDelNV3728" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group  col-md-12">
                                                            <span class="thong-tin-thanh-toan">
                                                                <h5>Xóa nhân viên</h5>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="txt-delete">
                                                        <p>Bạn có chắc chắn muốn xóa nhân viên <br>
                                                            <b>Huỳnh Thi</b> mã số
                                                            <b>NV3728</b> ???
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-delete" href="delete.php?id=NV3728&amp;table=NhanVien">Xóa</a>
                                                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy
                                                        bỏ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL DELETE-->

                                </td>
                            </tr>
                                                    </tbody>
                    </table>
</body></html>