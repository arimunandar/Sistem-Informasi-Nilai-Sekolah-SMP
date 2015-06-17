                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-lightred">
                                            <span class="widget-caption">Siswa Form</span>
                                        </div>
                                        <div class="widget-body">
                                            <div id="horizontal-form">
                                                <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">NIS</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="nis" value="<?php echo $row['nomor_induk']; ?>" placeholder="NIP" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Username</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" placeholder="Username" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Nama</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" placeholder="Nama" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Status</label>
                                                        <div class="col-sm-10">
                                                            <select id="e1" style="width:100%;" name="status" required>
                                                                <option><?php echo $row['status']; ?></option>
                                                                <option>Honorer</option>
                                                                <option>PNS</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Kelas</label>
                                                        <div class="col-sm-10">
                                                            <select id="e5" style="width:100%;" name="kelas" required>
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
                                                        <label class="col-sm-2 control-label no-padding-right">Telepon</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="telp" value="<?php echo $row['telp']; ?>" placeholder="Telepon" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Kelamin</label>
                                                        <div class="col-sm-10">
                                                            <select id="e2" style="width:100%;" name="jenis_kelamin" required>
                                                                <option><?php echo $row['jenis_kelamin']; ?></option>
                                                                <option>Laki-laki</option>
                                                                <option>Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Alamat</label>
                                                        <div class="col-sm-10">
                                                            <textarea type="text" class="form-control" name="alamat" required><?php echo $row['alamat']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <hr/>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-primary" name="siswa-update">Update</button>
                                                            <button type="reset" class="btn btn-warning">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>