<div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-lightred">
            <span class="widget-caption">Data Upload</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" placeholder="Judul Modul" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Pilih Files</label>
                        <div class="col-sm-10">
                            <input type="file" name="file" required>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="upload">Upload</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>