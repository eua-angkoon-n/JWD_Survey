    <?php 
    require_once __DIR__ . "/component/style.php";
    ?>
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1 class="m-0"><strong>ประเมินความพึงพอใจ</strong></h1>
            <h2><small><?php echo $SiteName." ".$LocationName ?></small></h2>
            https://codepen.io/bewley/pen/pyBgaq
            https://codepen.io/Borsti26/pen/WXmoja

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><h2><strong>ปรับปรุง</strong></h2></td>
                                <td><h2><strong>พอใจ</strong></h2></td>
                                <td><h2><strong>ปานกลาง</strong></h2></td>
                                <td><h2><strong>ดีมาก</strong></h2></td>
                                <td><h2><strong>ดีเยี่ยม</strong></h2></td>
                            </tr>
                            <tr>
                                <td>
                                    <ul class="feedback">
                                        <li class="angry">

                                            <div>
                                                <svg class="eye left">
                                                    <use xlink:href="#eye">
                                                </svg>
                                                <svg class="eye right">
                                                    <use xlink:href="#eye">
                                                </svg>
                                                <svg class="mouth">
                                                    <use xlink:href="#mouth">
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="feedback">
                                        <li class="sad">
                                            <div>
                                                <svg class="eye left">
                                                    <use xlink:href="#eye">
                                                </svg>
                                                <svg class="eye right">
                                                    <use xlink:href="#eye">
                                                </svg>
                                                <svg class="mouth">
                                                    <use xlink:href="#mouth">
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="feedback">
                                        <li class="ok">
                                            <div></div>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="feedback">
                                        <li class="good active">
                                            <div>
                                                <svg class="eye left">
                                                    <use xlink:href="#eye">
                                                </svg>
                                                <svg class="eye right">
                                                    <use xlink:href="#eye">
                                                </svg>
                                                <svg class="mouth">
                                                    <use xlink:href="#mouth">
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="feedback">
                                        <li class="happy">
                                            <div>
                                                <svg class="eye left">
                                                    <use xlink:href="#eye">
                                                </svg>
                                                <svg class="eye right">
                                                    <use xlink:href="#eye">
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
          
        
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 4" id="eye">
        <path d="M1,1 C1.83333333,2.16666667 2.66666667,2.75 3.5,2.75 C4.33333333,2.75 5.16666667,2.16666667 6,1"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 7" id="mouth">
        <path d="M1,5.5 C3.66666667,2.5 6.33333333,1 9,1 C11.6666667,1 14.3333333,2.5 17,5.5"></path>
    </symbol>
          </div>
    
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    </svg>

    <script>
        $('.feedback li').click(function(e) {
    if (!$(this).hasClass('active')) {
        $('.feedback li.active').removeClass('active');
        $(this).addClass('active');
    }
    e.preventDefault();
});

    </script>