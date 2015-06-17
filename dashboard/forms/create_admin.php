                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-lightred">
                                            <span class="widget-caption">Admin Form</span>
                                        </div>
                                        <div class="widget-body">
                                            <div id="horizontal-form">
                                                <form class="form-horizontal" role="form" method="POST">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Username</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Nama</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="name" placeholder="Nama" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Status</label>
                                                        <div class="col-sm-10">
                                                            <select id="e1" style="width:100%;" name="status" required>
                                                                <option>Honorer</option>
                                                                <option>PNS</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Telepon</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="telp" placeholder="Telepon" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Kelamin</label>
                                                        <div class="col-sm-10">
                                                            <select id="e2" style="width:100%;" name="jenis_kelamin" required>
                                                                <option>Laki-laki</option>
                                                                <option>Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">Alamat</label>
                                                        <div class="col-sm-10">
                                                            <textarea type="text" class="form-control" name="alamat" required></textarea>
                                                        </div>
                                                    </div><hr/>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-primary" name="create-admin">Create</button>
                                                            <button type="reset" class="btn btn-warning">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>