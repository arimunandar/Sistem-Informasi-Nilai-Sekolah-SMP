                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Mata Pelajaran
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>#</th>
                                            <th>Mata Pelajaran</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $no     =   1; 
                                            $pelajaran  =   mysql_query("SELECT * FROM pelajaran ORDER BY pelajaran_id ASC");

                                            while ($data=mysql_fetch_array($pelajaran)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['pelajaran_nama']; ?></td>
                                            <td>
                                                <a href="?pelajaran-edit=<?php echo $data['pelajaran_id']; ?>" class="btn btn-success">Edit</a>
                                                <a href="?pelajaran-del=<?php echo $data['pelajaran_id']; ?>" class="btn btn-danger">Delete</a>  
                                            </td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <a href="?akademik=pelajaran-create" class="btn btn-primary">Create</a>
                                </div>
                            </div>
                        </div>