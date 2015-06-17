<div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-lightred">
            <span class="widget-caption">Data Sekolah Form</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form class="form-horizontal" role="form" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Nama Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Sekolah" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="alamat" placeholder="Alamat Sekolah" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telp" placeholder="Telepon" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Visi</label>
                        <div class="col-sm-10">
                            <div >
                                <div class="widget-main no-padding">
                                    <textarea type="text" id="editor1" class="form-control" style="height: 300px;" name="visi"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Misi</label>
                        <div class="col-sm-10">
                            <div >
                                <div class="widget-main no-padding">
                                    <textarea type="text" id="editor2" class="form-control" style="height: 300px;" name="misi"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="create-sekolah">Create</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>