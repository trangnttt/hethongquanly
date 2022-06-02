  <script src="js/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="js/popper.min.js"></script>
  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <!--===============================================================================================-->
  <script src="js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!--===============================================================================================-->
  <script src="js/plugins/pace.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="js/plugins/chart.js"></script>
  <!--===============================================================================================-->
  <script src="js/date.js"></script>
  <!--===============================================================================================-->
  <script src="js/menu-active.js"></script>
  <!--===============================================================================================-->
  <script src="js/form-add-nv.js"></script>
  <!--===============================================================================================-->
  <script>
$("#alert-validate").fadeTo(2000, 500).slideUp(500, function() {
    $("#alert-validate").slideUp(100);
});
  </script>
  <!--===============================================================================================-->
  <script>
// $("#show-emp").click(function(){
//   var fUpdate = document.getElementById("formUpdate");
//   var fAddChucVu = document.getElementById("formAddChucVu");
//   console.log('click');
//   if(fUpdate || fAddChucVu){
//     console.log('fAddChucVu');
//     $("#btnSave").addClass("disabled");
//     $("input").on("change paste keyup", function() {
//       $( "#btnSave" ).removeClass( "disabled" );
//     });
//     $("select").on("change paste keyup", function() {
//       $( "#btnSave" ).removeClass( "disabled" );
//     });
//   }
// });
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

    var divToPrint = document.getElementById('tableNV');
    if (divToPrint) {
        var htmlToPrint = '' +
            '<style type="text/css">' +
            'table {' +
            'table-layout: auto;' +
            'width: 100%;' +
            '}' +
            'table th, table td {' +
            'border:1px solid #000;' +
            'padding;0.5em;' +
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
    } else {
        var divToPrint = document.getElementById("sampleTable");
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }
}
// <!---------excelTable----------------------------------------------------------------------->

var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    console.log(table)
    // window.location.href = uri + base64(format(template, ctx))
  }
})()
  </script>
  </body>

  </html>