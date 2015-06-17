<?php 
    if (isset($_POST['input-nilai'])) {
        include('tables/input_nilai_table.php');
    }else{
?>
<div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-lightred">
            <span class="widget-caption">Input Nilai Form</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form class="form-horizontal" role="form" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Kelas</label>
                        <div class="col-sm-10">
                            <select id="e1" style="width:100%;" name="kelas" required>
                                <?php 
                                    $kelas  =   mysql_query("SELECT * FROM kelas");

                                    while ($data=mysql_fetch_array($kelas)) {
                                ?>
                                <option value="<?php echo $data['kelas_id']; ?>"><?php echo $data['kelas_nama']; ?></option>
                                <?php
                                    }
                                ?>                                                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Mata Pelajaran</label>
                        <div class="col-sm-10">
                            <select id="e2" style="width:100%;" name="pelajaran" required>
                                <?php 
                                    $pelajaran  =   mysql_query("SELECT * FROM pelajaran");

                                    while ($data=mysql_fetch_array($pelajaran)) {
                                ?>
                                <option value="<?php echo $data['pelajaran_id']; ?>"><?php echo $data['pelajaran_nama']; ?></option>
                                <?php
                                    }
                                ?>                                                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Semester</label>
                        <div class="col-sm-10">
                            <select id="e4" style="width:100%;" name="semester" required>
                                <?php 
                                    $semester  =   mysql_query("SELECT * FROM semester");

                                    while ($data=mysql_fetch_array($semester)) {
                                ?>
                                <option value="<?php echo $data['semester_id']; ?>"><?php echo $data['semester_nama']; ?></option>
                                <?php
                                    }
                                ?>                                                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Tahun Ajaran</label>
                        <div class="col-sm-10">
                            <select id="e5" style="width:100%;" name="tahun" required>
                                <?php 
                                    $tahun  =   mysql_query("SELECT * FROM tahun");

                                    while ($data=mysql_fetch_array($tahun)) {
                                ?>
                                <option value="<?php echo $data['tahun_id']; ?>"><?php echo $data['tahun_nama']; ?></option>
                                <?php
                                    }
                                ?>                                                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Nilai KKM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kkm" placeholder="Nilai KKM" required>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="input-nilai">Cari</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>
