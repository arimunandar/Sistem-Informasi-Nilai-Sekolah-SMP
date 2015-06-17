                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Kategori
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Kategori</th>
                                            <th>Kategori Deskripsi</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $no          =   1; 
                                            $kategori    =   mysql_query("SELECT * FROM kategori ORDER BY kategori_id ASC");

                                            while ($data=mysql_fetch_array($kategori)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['kategori_nama']; ?></td>
                                            <td><?php echo $data['kategori_deskripsi']; ?></td>
                                            <td>
                                                <a href="?kategori-edit=<?php echo $data['kategori_id']; ?>" class="btn btn-success">Edit</a>
                                                <a href="?kategori-del=<?php echo $data['kategori_id']; ?>" class="btn btn-danger">Delete</a>  
                                            </td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <a href="?artikel=kategori-create" class="btn btn-primary">Create</a>
                                </div>
                            </div>
                        </div>