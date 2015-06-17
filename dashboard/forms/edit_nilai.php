<div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-lightred">
            <span class="widget-caption">Edit Nilai Form</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form class="form-horizontal" role="form" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Nilai KKM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kkm" value="<?php echo $row['nilai_kkm']; ?>" placeholder="Nilai KKM" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Nilai Poin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="poin" value="<?php echo $row['nilai_poin']; ?>" placeholder="Nilai Poin" required>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="nilai-update">Update</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>