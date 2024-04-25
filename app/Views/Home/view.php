    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Navigation</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <?php print_r($html);?>

          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary">
              <div class="card-header">
                <h6>รายงาน</h6>
              </div>

              <div class="card-body">
                <div class="row">

                  <div class="col-sm-12 col-md-4 col-xs-2">
                    <div class="form-group">
                      <label>ไซต์งาน:</label>
                      <div class="input-group">
                        <select class="custom-select custom-select-md rounded-3" id="site" name="site" required>
                          <?php echo $Site;?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-4 col-xs-2">
                    <div class="form-group">
                      <label>อาคาร:</label>
                      <div class="input-group">
                        <select class="custom-select custom-select-md rounded-3" id="location" name="location" required>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-4 col-xs-5">
                    <div class="form-group">
                      <label>วันที่:</label>
                      <div class="input-group">
                        <button type="button" class="btn btn-default float-right" id="daterange-btn">
                          <i class="far fa-calendar-alt"></i>
                          <div class="d-inline ml-2" id="dateText">วันนี้</div>
                          <i class="fas fa-caret-down"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                      <div class="card-body box-profile">
                        <div class="text-center mt-2" id="avg-icon">
                        
                        </div>
                        <h3 class="profile-username text-center mt-3">คะแนนเฉลี่ย: <b class="d-inline" id="avg">ดี</b>
                        </h3>
                        <h5 class="text-muted text-center mt-3" id="avg-point">0.00</h5>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                      <div class="card-body box-profile pt-0 pb-0">

                        <ul class="list-group list-group-unbordered">
                          <li class="list-group-item">
                            <b>ดีเยี่ยม</b><a class="float-right" id="score-5">0</a>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-success" id="bar-5" role="progressbar">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <b>ดีมาก</b> <a class="float-right" id="score-4">0</a>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-success" id="bar-4" role="progressbar">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <b>ปานกลาง</b> <a class="float-right" id="score-3">0</a>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-warning" id="bar-3" role="progressbar">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <b>พอใจ</b> <a class="float-right" id="score-2">0</a>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-warning" id="bar-2" role="progressbar">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <b>ปรับปรุง</b> <a class="float-right" id="score-1">0</a>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-danger" id="bar-1" role="progressbar">
                              </div>
                            </div>
                          </li>
                        </ul>

                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card card-primary card-outline">
                      <table id="report_table"
                        class="table table-bordered table-hover dataTable dtr-inline nowrap p-0 m-0">
                        <thead>
                          <tr class="bg-light text-center">
                            <th style="width:50%">เวลา</th>
                            <th style="width:50%">คะแนน</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <script>
var selectedStartDate = moment().startOf('day');
var selectedEndDate = moment().endOf('day');
$('#daterange-btn').daterangepicker({
    ranges: {
      'วันนี้': [moment(), moment()],
      'เมื่อวาน': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      '7 วันล่าสุด': [moment().subtract(6, 'days'), moment()],
      '30 วันล่าสุด': [moment().subtract(29, 'days'), moment()],
      'เดือนนี้': [moment().startOf('month'), moment().endOf('month')],
      'เดือนที่แล้ว': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment(),
    endDate: moment(),
    maxDate: moment()
  },
  function (start, end, label) {
    selectedStartDate = start;
    selectedEndDate = end;
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    if (label === "Custom Range") {
      $('#dateText').html(start.format('D/M/YYYY') + ' - ' + end.format('D/M/YYYY'));
    } else {
      $('#dateText').html(label);
    }
  })

$(document).ready(function () {

  $('li[data-range-key="Custom Range"]').text("กำหนดเอง");
  LocationList();
  var start = moment().startOf('day');
  var end = moment().endOf('day');
  SendAjax(start.format('YYYY-MM-DD HH:mm:ss'), end.format('YYYY-MM-DD HH:mm:ss'));

  $('#report_table').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [0, 'asc'], //ถ้าโหลดครั้งแรกจะให้เรียงตามคอลัมน์ไหนก็ใส่เลขคอลัมน์ 0,'desc'
            "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": []
                }, //คอลัมน์ที่จะไม่ให้ฟังก์ชั่นเรียง
                {
                    "bSearchable": false,
                    "aTargets": [0, 1]
                }, //คอลัมน์ที่จะไม่ให้เสิร์ช
                // {
                //     "visible": false, // ซ่อนคอลัมน์ที่มี index > 22 (คอลัมน์ที่ 23 และต่อไป)
                //     "targets": [11]
                // }
            ],
            ajax: {
                beforeSend: function () {},
                url: 'app/Controllers/DataTable.php',
                type: 'POST',
                data: function (data) {
                    data.site = $('#site').val();
                    data.location = $('#location').val();
                    data.startdate = selectedStartDate.format('YYYY-MM-DD HH:mm:ss');
                    data.enddate = selectedEndDate.format('YYYY-MM-DD HH:mm:ss');
                    data.action = "Report";
                },
                async: false,
                cache: false,
                error: function (xhr, error, code) {
                    console.log(xhr, code);
                },
            },
            "paging": true,
            "lengthChange": false, //ออฟชั่นแสดงผลต่อหน้า
            "lengthMenu": [
                [15, 25, 50, 100, -1],
                [15, 25, 50, 100, "ทั้งหมด"]
            ],
            "pagingType": "simple_numbers",
            "pageLength": 5,
            "searching": false,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "scrollX": true,
            "buttons": [{
                    extend: 'excel',
                    exportOptions: {
                        columns: ':not(.no-export)' // ไม่รวม Column แรก
                    }
                }, 'colvis'

            ]
            // "responsive": true,
        }).buttons().container().appendTo('#reservation_table_wrapper .col-md-6:eq(0)');

});

$('#site').change(function () {
  LocationList();
});

$('#site, #location').change(function () {
  // console.log(selectedStartDate);
  SendAjax(selectedStartDate.format('YYYY-MM-DD HH:mm:ss'), selectedEndDate.format('YYYY-MM-DD HH:mm:ss'));
});

$('#daterange-btn').on('apply.daterangepicker', function (event, picker) {
  SendAjax(selectedStartDate.format('YYYY-MM-DD HH:mm:ss'), selectedEndDate.format('YYYY-MM-DD HH:mm:ss'))
});

function LocationList() {
  var site = $('#site').val();
  $.ajax({
    url: "app/Controllers/AjaxController.php",
    type: "POST",
    data: {
      "site": site,
      "action": "LocationList"
    },
    beforeSend: function () {},
    success: function (data) {
      $('#location').html(data);
      // console.log(data);
      return;
    },
    error: function (textStatus, errorThrown) {
      console.log(data);
      // alert(errorThrown);
      // sweetAlert("ผิดพลาด!", "ไม่สามารถบันทึกข้อมูลได้", "error");
    }
  });
}

function SendAjax(start, end) {
  var site = $('#site').val();
  var loca = $('#location').val();
  // console.log(start + " " + end + " " + site + " " + loca);

  $.ajax({
    url: "app/Controllers/AjaxController.php",
    type: "POST",
    data: {
      "site": site,
      "location":loca,
      "start": start,
      "end": end,
      "action": "Report"
    },
    beforeSend: function () {},
    success: function (data) {
      var json = JSON.parse(data);
      AVGReport(json.avg);
      ScoreReport(json.score);
      $('#report_table').DataTable().ajax.reload();
      // console.log(data);
      return;
    },
    error: function (textStatus, errorThrown) {
      console.log(data);
      // alert(errorThrown);
      // sweetAlert("ผิดพลาด!", "ไม่สามารถบันทึกข้อมูลได้", "error");
    }
  });
  
}

function AVGReport(avg){
  var ico;
  var txt;
  if (avg >= 4){
    ico = '<i class="far fa-grin fa-10x text-success"></i>';
    txt = "ดีเยี่ยม";
  } else if (avg > 3){
    ico = '<i class="far fa-smile fa-10x text-success"></i>';
    txt = "ดี";
  } else if (avg > 2){
    ico = '<i class="far fa-meh fa-10x text-warning"></i>';
    txt = "ปานกลาง";
  } else if (avg > 1){
    ico = '<i class="far fa-frown fa-10x text-warning"></i>';
    txt = "พอใช้";
  } else if(avg > 0){
    ico = '<i class="far fa-angry fa-10x text-danger"></i>';
    txt = "ปรับปรุง";
  } else {
    ico = '<i class="far fa-kiss fa-10x text-secondary"></i>';
    txt = "ไม่มีข้อมูล";
    avg = '0.00';
  }
  $('#avg-icon').html(ico);
  $('#avg').html(txt);
  $('#avg-point').html(avg);

}

function ScoreReport(score) {
  if (score) {
    for (var i = 1; i <= 5; i++) {
      if (score[i]) {
        var scoreValue = score[i].score;
        var percentValue = score[i].percent;
      } else {
        var scoreValue = 0;
        var percentValue = 0;
      }
      $('#score-' + i).html(Commas(scoreValue));
      $('#bar-' + i).css('width', percentValue + "%");
    }

  } else {
    for (var i = 1; i <= 5; i++) {
      $('#score-' + i).html(0);
      $('#bar-' + i).css('width', '0%');
    }
  }
}

function Commas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
</script>