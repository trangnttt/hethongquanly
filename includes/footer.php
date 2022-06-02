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
  </script>
  </body>

  </html>