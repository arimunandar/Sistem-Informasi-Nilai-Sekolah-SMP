                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Tahun
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>#</th>
                                            <th>Tahun Ajaran</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $no     =   1; 
                                            $tahun  =   mysql_query("SELECT * FROM tahun ORDER BY tahun_id ASC");

                                            while ($data=mysql_fetch_array($tahun)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['tahun_nama']; ?></td>
                                            <td>
                                                <a href="?tahun-edit=<?php echo $data['tahun_id']; ?>" class="btn btn-success">Edit</a>
                                                <a href="?tahun-del=<?php echo $data['tahun_id']; ?>" class="btn btn-danger">Delete</a>  
                                            </td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <a href="?akademik=tahun-create" class="btn btn-primary">Create</a>
                                </div>
                            </div>
                        </div>