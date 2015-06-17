<div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-lightred">
            <span class="widget-caption">My Profile</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form class="form-horizontal" role="form" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Nomor Induk</label>
                        <div class="col-sm-10">
                            <label class="col-sm-1 control-label ">:</label>
                            <label class="col-sm-1 control-label "><?php echo $row['nomor_induk']; ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Nama</label>
                        <div class="col-sm-10">
                            <label class="col-sm-1 control-label ">:</label>
                            <label class="col-sm-1 control-label "><?php echo $row['name']; ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Username</label>
                        <div class="col-sm-10">
                            <label class="col-sm-1 control-label ">:</label>
                            <label class="col-sm-1 control-label "><?php echo $row['username']; ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Status</label>
                        <div class="col-sm-10">
                            <label class="col-sm-1 control-label ">:</label>
                            <label class="col-sm-1 control-label "><?php echo $row['status']; ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <label class="col-sm-1 control-label ">:</label>
                            <label class="col-sm-1 control-label "><?php echo $row['jenis_kelamin']; ?></label>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="?change=<?php echo $row['id']; ?>" class="btn btn-info">Ganti Password</a>
                            <a href="index.php" class="btn btn-darkorange">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>