  <script src="../../styles/js/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="../../styles/js/popper.min.js"></script>
  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <!--===============================================================================================-->
  <script src="../../styles/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="../../styles/js/main.js"></script>
  <!--===============================================================================================-->
  <script src="../../styles/js/plugins/pace.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="../../styles/js/plugins/chart.js"></script>
  <!--===============================================================================================-->
  <script src="../../styles/js/date.js" type="text/javascript"></script>
  <!--===============================================================================================-->
  <script src="../../styles/js/menu-active.js"></script>
  <!--===============================================================================================-->
  <script src="../../styles/js/form-add-nv.js"></script>
  <!--===============================================================================================-->
  <script src="../../styles/js/jquery.table2excel.min.js"></script>
  <!--===============================================================================================-->
  <script src="../../styles/js/pagination.min.js"></script>
  <!--========alert===================================================================================-->
  <script>
$("#alert-validate").fadeTo(2000, 500).slideUp(500, function() {
    $("#alert-validate").slideUp(100);
});
  </script>
  <!--===============================================================================================-->
  <script>
// <!-------show - hide mật khẩu------------------------------------------------------------------------->
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text"
    } else {
        x.type = "password";
    }
}
$(".click-eye").click(function() {
    $(this).toggleClass("bx-show bx-hide");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
// <!---------button Reset form----------------------------------------------------------------------->
function reSet() {
    console.log('reset');
    $('.modal').modal('hide');
}
// <!---------printTable----------------------------------------------------------------------->
function printTable() {
    var divToPrint = document.getElementById('sampleTable');
    var htmlToPrint = '' +
        '<style type="text/css">' +
        'table {' +
        'table-layout: auto;' +
        'width: 100%;' +
        '}' +
        'table th, table td {' +
        'border:1px solid #000;' +
        'padding:0.5em;' +
        'text-align: center;' +
        'vertical-align: middle;' +
        '}' +
        'table td img{' +
        'width: 100px;' +
        'height: 100px;' +
        '}' +
        'table th:last-child, table td:last-child {' +
        'display: none;' +
        '}' +
        '</style>';
    htmlToPrint += divToPrint.outerHTML;
    newWin = window.open("");
    newWin.document.write(htmlToPrint);
    newWin.print();
    newWin.close();
}
// <!---------excelTable----------------------------------------------------------------------->
function excelTable(name) {
    $("#sampleTable").table2excel({
        // exclude CSS class
        exclude: ".noExl",
        name: "Worksheet Name",
        filename: "data-" + name, //do not include extension
    });
};
// <!---------searchTable----------------------------------------------------------------------->
$(document).ready(function() {
    $("#searchTable").on("keyup", function() {
        // var value = $(this).val().toLowerCase();
        // $("#table-tbody tr").filter(function() {
        //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        // })

        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchTable");
        filter = input.value.toUpperCase();
        table = document.getElementById("table-tbody");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                $("#table-notify").text("");
            } else {
                tr[i].style.display = "none";
                $("#table-notify").text("Không có dữ liệu!!!");
            }
            }       
        }
    });
});

// <!---------check All input----------------------------------------------------------------------->
$("#checkAll").click(function() {
    $('input:checkbox').not(this).prop('checked', this.checked);
});
// <!---------check form xóa chức vụ đã chọn checkbox chưa----------------------------------------------------------------------->
$(document).ready(function() {
    $('#formDeleteChucVu').submit(function(e) {
        var checkedValue = $('.messageCheckbox:checked').val();
        // console.log(checkedValue);
        if (typeof checkedValue === "undefined") {
            alert('Vui lòng chọn chức vụ cần xóa!!!');
            return false;
        }

    });
});
// <!---------pagination----------------------------------------------------------------------->
let rows = []
$('table tbody tr').each(function(i, row) {
    var count_elements = $('table tbody tr').length;
    if (count_elements <= 10) {
        $("#pagination").css("display", "none");
    }
    return rows.push(row);
});

$('#pagination').pagination({
    dataSource: rows,
    pageSize: 10,
    callback: function(data, pagination) {
        $('tbody').html(data);
    }
})
  </script>
  </body>

  </html>