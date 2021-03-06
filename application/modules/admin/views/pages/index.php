<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title"></div>
        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- Different data widgets -->
        <!-- ============================================================== -->
        <!--/.row -->
        <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="row">

                    <?php if (isset($_GET['newpage'])) { ?>
                        <div class="alert alert-info"> Your new Page URL is: <b><a href="<?= base_url('pages/').$_GET['newpage']; ?>"><?= base_url('pages/').$_GET['newpage']; ?></a></b> </div>
                    <?php } ?>

                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <center>
                                    <a href="<?= base_url('admin/mpages'); ?>" title="<?= $this->lang->line('adm_managePages'); ?>">
                                        <h3 class="box-title"><?= $this->lang->line('adm_managePages'); ?></h3>
                                        <ul class="list-inline m-t-30 p-t-10 two-part">
                                            <li><i class="fa fa-cogs"></i></li>
                                        </ul>
                                    </a>
                                </center>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <center>
                                    <a href="<?= base_url('admin/cpage'); ?>" title="<?= $this->lang->line('adm_createPages'); ?>">
                                        <h3 class="box-title"><?= $this->lang->line('adm_createPages'); ?></h3>
                                        <ul class="list-inline m-t-30 p-t-10 two-part">
                                            <li><i class="fa fa-plus-circle"></i></li>
                                        </ul>
                                    </a>
                                </center>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <!--/.row -->
    </div>
    <!-- /.container-fluid -->