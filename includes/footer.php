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
  <script src="js/jquery.table2excel.min.js"></script>
  <!--========alert===================================================================================-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
  
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
    // <!---------pdfTable----------------------------------------------------------------------->

  </script>
  </body>

  </html>