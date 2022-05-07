<?php
    include 'header.php';
    include '../../config.php';
?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Trang chủ</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-product-hunt" style="font-size: 70px;"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">

                                            <?php 
                                            $prodCount = $prod->count_product();
                                            $resultCount = $prodCount->fetch_assoc();
                                            echo $resultCount['soluongprod']; 

                                            ?>      
                                            </div>
                                            
                                            <div>Sản phẩm!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Xem chi tiết</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-area-chart" style="font-size: 70px;"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                            <?php 
                                                $DHCount = $donhang->count_donhangdagiao();
                                                $resultCount = $DHCount->fetch_assoc();
                                                echo $resultCount['soluongDHdagiao'];  

                                            ?> 

                                            </div>
                                            <div>Đơn hàng đã giao!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Xem chi tiết</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart" style="font-size: 70px;"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                <?php 
                                                $DHCount = $donhang->count_donhangchuagiao();
                                                $resultCount = $DHCount->fetch_assoc();
                                                echo $resultCount['soluongDHchuagiao']; 

                                            ?> 
                                            </div>
                                            <div>Đơn hàng chưa giao!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Xem chi tiết</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users" style="font-size: 70px;"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <?php
                                                
                                                
                                            ?>
                                            <div class="huge">
                                            <?php 
                                                $userCount = $user->count_user();
                                                $resultCountUser = $userCount->fetch_assoc();

                                                echo $resultCountUser['total_rows'] ; 
                                            ?>        
                                            </div>
                                            
                                            <div>Người dùng!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Xem chi tiết</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Thống kê sản phẩm
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div id="morris-area-chart">
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Thống kê đơn hàng
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover table-striped">
                                                    <thead>

                                                    <tr>
                                                        <th>#</th>
                                                        <th>Ngày</th>
                                                        <th>Số lượng</th>
                                                        <th>Tổng</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                        if (isset($_GET['ngaytruoc']) && !empty($_GET['ngaytruoc']) && isset($_GET['ngaysau']) && !empty($_GET['ngaysau']) ){
                                                            $ngaytruoc = $_GET['ngaytruoc'];
                                                            $ngaysau = $_GET['ngaysau'];

                                                            $queryDT = mysqli_query($conn, "SELECT *, MONTH(ngayDat), YEAR(ngayDat), COUNT(maHoaDon), SUM(giaTriHD) FROM tbl_hoadon WHERE MONTH(ngayDat) BETWEEN MONTH('$ngaytruoc') AND MONTH('$ngaysau') AND YEAR(ngayDat) BETWEEN YEAR('$ngaytruoc') AND YEAR('$ngaysau') GROUP BY MONTH(ngayDat)");


                                                            
                                                        }else{
                                                            $queryDT = mysqli_query($conn, "SELECT *, MONTH(ngayDat), YEAR(ngayDat), COUNT(maHoaDon), SUM(giaTriHD) FROM `tbl_hoadon` GROUP BY MONTH(ngayDat)");
                                                        }

                                                        $i = 0;

                                                        if ($queryDT){ 
                                                            while ($dataDoanhThu = mysqli_fetch_array($queryDT) ){
                                                            $i++;

                                                        

                                                    ?>
                                                    <tr>
                                                        <?php 
                                                            $thang = $dataDoanhThu['MONTH(ngayDat)'];
                                                            $nam = $dataDoanhThu['YEAR(ngayDat)'];
                                                        ?>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $thang.'/'.$nam; ?></td>
                                                        <td><?php echo $dataDoanhThu['COUNT(maHoaDon)']; ?> </td>
                                                        <td><?php echo number_format($dataDoanhThu['SUM(giaTriHD)']); ?> VNĐ</td>
                                                    </tr>
                                                    <?php 
                                                        }
                                                        }else{
                                                            echo "Không tìm thấy dữ liệu!";
                                                        }
                                                    ?>
                                                   
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.col-lg-4 (nested) -->
                                        <div class="col-lg-8">
                                            <div id="morris-bar-chart"></div>
                                        </div>
                                        <!-- /.col-lg-8 (nested) -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bell fa-fw"></i> Bẳng thông báo
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <i class="fa fa-comment fa-fw"></i>1 Bình luận mới
                                                <span class="pull-right text-muted small"><em>4 phút trước</em>
                                                </span>
                                        </a>
                                        
                                        <a href="#" class="list-group-item">
                                            <i class="fa fa-shopping-cart fa-fw"></i>3 Đơn hàng mới
                                                <span class="pull-right text-muted small"><em>22 phút trước</em>
                                                </span>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="fa fa-money fa-fw"></i> Thanh toán đã nhận
                                                <span class="pull-right text-muted small"><em>Hôm qua</em>
                                                </span>
                                        </a>
                                    </div>
                                    <!-- /.list-group -->
                                    <a href="#" class="btn btn-default btn-block">Xem tất cả thông báo</a>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Thống kê người dùng
                                </div>
                                <div class="panel-body">
                                    <div id="morris-donut-chart"></div>
                                    <a href="#" class="btn btn-default btn-block">Xem chi tiết</a>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            
                                <!-- /.panel-heading -->
                                
                            <!-- /.panel .chat-panel -->
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <!-- <script src="../js/morris-data.js"></script> -->
        <?php
            include "../js/morris-data.php";
        ?>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>