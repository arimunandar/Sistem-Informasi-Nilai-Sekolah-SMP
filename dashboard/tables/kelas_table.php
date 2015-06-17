                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Kelas
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Kelas</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $no     =   1; 
                                            $kelas  =   mysql_query("SELECT * FROM kelas ORDER BY kelas_id ASC");

                                            while ($data=mysql_fetch_array($kelas)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['kelas_nama']; ?></td>
                                            <td>
                                                <a href="?kelas-edit=<?php echo $data['kelas_id']; ?>" class="btn btn-success">Edit</a>
                                                <a href="?kelas-del=<?php echo $data['kelas_id']; ?>" class="btn btn-danger">Delete</a>  
                                            </td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <a href="?akademik=kelas-create" class="btn btn-primary">Create</a>
                                </div>
                            </div>
                        </div>