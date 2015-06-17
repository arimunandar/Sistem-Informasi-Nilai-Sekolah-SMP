                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Data Sekolah
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Sekolah</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $no     =   1; 
                                            $sekolah  =   mysql_query("SELECT * FROM sekolah ORDER BY sekolah_nama ASC");

                                            while ($data=mysql_fetch_array($sekolah)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['sekolah_nama']; ?></td>
                                            <td><?php echo $data['sekolah_alamat']; ?></td>
                                            <td><?php echo $data['sekolah_telp']; ?></td>
                                            <td>
                                                <a href="?sekolah-edit=<?php echo $data['sekolah_id']; ?>" class="btn btn-success">Edit</a>
                                                <a href="?sekolah-del=<?php echo $data['sekolah_id']; ?>" class="btn btn-danger">Delete</a>  
                                            </td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <a href="?akademik=sekolah-create" class="btn btn-primary">Create</a>
                                </div>
                            </div>
                        </div>