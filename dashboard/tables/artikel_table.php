                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Artikel
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th width="3%">#</th>
                                            <th>Judul</th>
                                            <th width="10%">Kategori</th>
                                            <th width="15%">Tanggal</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $no         =   1; 
                                            $artikel    =   mysql_query("SELECT *, kategori.kategori_nama 
                                                                            FROM artikel
                                                                            INNER JOIN kategori ON artikel.kategori_id=kategori.kategori_id 
                                                                            ORDER BY artikel_tgl DESC");

                                            while ($data=mysql_fetch_array($artikel)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['artikel_judul']; ?></td>
                                            <td><?php echo $data['kategori_nama']; ?></td>
                                            <td><?php echo $data['artikel_tgl']; ?></td>
                                            <td>
                                                <a href="?artikel-edit=<?php echo $data['artikel_id']; ?>" class="btn btn-success">Edit</a>
                                                <a href="?artikel-del=<?php echo $data['artikel_id']; ?>" class="btn btn-danger">Delete</a>  
                                            </td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <a href="?artikel=artikel-create" class="btn btn-primary">Create</a>
                                </div>
                            </div>
                        </div>