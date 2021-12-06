$(document).ready(function() {
    $("#datePicker").datepicker({  
        dateFormat: "yy-mm-dd",
        showOn: "both",
        buttonImage: "./images/date_icon.png",
        altField: "#alternate",
        altFormat: "yy-mm-dd"
    }); //end date picker
});




// $(document).ready(function() {
//     var allowedDates = new Object();

//     // function queryAllowedDates (year, month, id) {
//     //   $.ajax({
//     //     type: 'GET',
//     //     url: 'calendar_days.php',
//     //     dataType: 'json',
//     //     success: function(response) { 
//     //       allowedDates[id] = response.allowedDates;
//     //     },
//     //     data: {year:year,month:month},
//     //     async: false
//     //   });
//     // }
    
//     $("#datepicker").datepicker({
//       dateFormat: 'dd.mm.yy', 
//       changeMonth: true, 
//       changeYear: true ,
//       beforeShow: function (input) {
//         var currentDate = $(input).datepicker('getDate');
//         var id = $(input).attr('id');
//         queryAllowedDates(currentDate.getFullYear(), currentDate.getMonth()+1,id);
//       },
//       onChangeMonthYear: function (year, month, inst) {
//         queryAllowedDates(year, month, inst.input.attr('id'));
//       },
//       beforeShowDay: function (day) {
//         var id = $(this).attr('id');
    
//         var date_str = [
//           day.getFullYear(),
//           day.getMonth() + 1,
//           day.getDate()
//         ].join('-');
    
//         if (allowedDates[id] != undefined && allowedDates[id][date_str]) {
//           return [true, 'good_date', 'This date is selectable'];
//         } else {
//           return [false, 'bad_date', 'This date is NOT selectable'];
//         } 
//       }
//     });
// }
