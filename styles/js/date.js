var data = {
    labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"],
    datasets: [{
      label: "Dữ liệu đầu tiên",
      fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
      strokeColor: "rgb(255, 212, 59)",
      pointColor: "rgb(255, 212, 59)",
      pointStrokeColor: "rgb(255, 212, 59)",
      pointHighlightFill: "rgb(255, 212, 59)",
      pointHighlightStroke: "rgb(255, 212, 59)",
      data: [20, 59, 90, 51, 56, 100]
    },
    {
      label: "Dữ liệu kế tiếp",
      fillColor: "rgba(9, 109, 239, 0.651)  ",
      pointColor: "rgb(9, 109, 239)",
      strokeColor: "rgb(9, 109, 239)",
      pointStrokeColor: "rgb(9, 109, 239)",
      pointHighlightFill: "rgb(9, 109, 239)",
      pointHighlightStroke: "rgb(9, 109, 239)",
      data: [48, 48, 49, 39, 86, 10]
    }
    ]
  };
  var ctxl = $("#lineChartDemo").get(0).getContext("2d");
  var lineChart = new Chart(ctxl).Line(data);

  var ctxb = $("#barChartDemo").get(0).getContext("2d");
  var barChart = new Chart(ctxb).Bar(data);

 //Thời Gian
 var myVar=setInterval(function(){time()},1000);
 function time() {
  var today = new Date();
  var week = new Array(7);

  week[0] = "Chủ Nhật";
  week[1] = "Thứ Hai";
  week[2] = "Thứ Ba";
  week[3] = "Thứ Tư";
  week[4] = "Thứ Năm";
  week[5] = "Thứ Sáu";
  week[6] = "Thứ Bảy";
  var weekday = week[today.getDay()];  //lấy thứ
  
  var day = today.getDate(); //lấy ngày
  if (day < 10) {
    day = '0' + day;
  }
  var month = today.getMonth()+1;  //lấy tháng
  if (month < 10) {
    month = '0' + month;
  }
  year = today.getFullYear();  //lấy năm
  var date = weekday +', '+ day +'/'+ month +'/'+ year +' - ';

  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  h = checkTime(h);
  m = checkTime(m);
  s = checkTime(s);

  var time = h + " giờ " + m + " phút " + s + " giây" ;

  var dateTime = date+' '+time;

  document.getElementById("clock").innerHTML = dateTime;
  function checkTime(i) {
    if (i < 10) {
      i = "0" + i;
    }
    return i;
  }
 }
  // Thứ Tư, 15/06/2022 - 9 giờ 43 phút 02 giây
  // function time() {
  //   var today = new Date();
  //   var weekday = new Array(7);
  //   weekday[0] = "Chủ Nhật";
  //   weekday[1] = "Thứ Hai";
  //   weekday[2] = "Thứ Ba";
  //   weekday[3] = "Thứ Tư";
  //   weekday[4] = "Thứ Năm";
  //   weekday[5] = "Thứ Sáu";
  //   weekday[6] = "Thứ Bảy";
  //   var day = weekday[today.getDay()];
  //   var dd = today.getDate();
  //   var mm = today.getMonth() + 1;
  //   var yyyy = today.getFullYear();
  //   var h = today.getHours();
  //   var m = today.getMinutes();
  //   var s = today.getSeconds();
  //   m = checkTime(m);
  //   s = checkTime(s);
  //   nowTime = h + " giờ " + m + " phút " + s + " giây";
  //   if (dd < 10) {
  //     dd = '0' + dd
  //   }
  //   if (mm < 10) {
  //     mm = '0' + mm
  //   }
  //   today = day + ', ' + dd + '/' + mm + '/' + yyyy;
  //   tmp = '<span class="date"> ' + today + ' - ' + nowTime +
  //     '</span>';
  //   document.getElementById("clock").innerHTML = tmp;
  //   clocktime = setTimeout("time()", "1000", "Javascript");

  //   function checkTime(i) {
  //     if (i < 10) {
  //       i = "0" + i;
  //     }
  //     return i;
  //   }
  // }