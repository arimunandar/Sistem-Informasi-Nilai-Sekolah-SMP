<div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-lightred">
            <span class="widget-caption">Kategori Form</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form class="form-horizontal" role="form" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Nama Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?php echo $row['kategori_nama']; ?>" placeholder="Nama Kategori" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Kategori Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="deskripsi" value="<?php echo $row['kategori_deskripsi']; ?>" placeholder="Deskripsi" required>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="kategori-update">Update</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>