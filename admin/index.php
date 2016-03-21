<?php
require_once '_main.php';
$ssmin = new \Ss\Etc\Ana();
$mt = $ssmin->getMonthTraffic();
$mt = $mt/$togb;
$mt = round($mt,3);
$active_user = $ssmin->activedUserCount();
$all_user = $ssmin->allUserCount();
$node_count = $ssmin->nodeCount();
$invite_count = $ssmin->inviteCount();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户中心
                <small>User Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>
                                <?php  echo $node_count; ?>
                            </h3>
                            <p>
                                节点
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cloud"></i>
                        </div>
                        <a href="/cpanel/node" class="small-box-footer">
                            管理 <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>
                                <?php  echo $all_user; ?>
                            </h3>
                            <p>
                                用户
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="/cpanel/userlist" class="small-box-footer">
                            查看 <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div><!-- ./col -->
                
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>
                                <?php  echo $invite_count; ?>
                            </h3>
                            <p>
                                邀请码
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="/cpanel/code" class="small-box-footer">
                            管理 <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div><!-- ./col -->
            </div><!-- /.row -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>


