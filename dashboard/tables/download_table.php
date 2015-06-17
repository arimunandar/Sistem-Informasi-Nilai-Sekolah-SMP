                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Download Modul Pelajaran
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th width="3%">#</th>
                                            <th>Judul</th>
                                            <th>Tanggal</th>
                                            <th>Type Files</th>
                                            <th>Ukuran Files</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $sql = mysql_query("SELECT * FROM download ORDER BY tanggal_upload DESC");
                                            if(mysql_num_rows($sql) > 0){
                                                $no = 1;
                                                while($data = mysql_fetch_assoc($sql)){
                                        ?>
                                                    <tr bgcolor="#fff">
                                                        <td><?php echo $no; ?></td>                                                        
                                                        <td><?php echo $data['nama_file']; ?></td>
                                                        <td><?php echo $data['tanggal_upload']; ?></td>
                                                        <td><?php echo $data['tipe_file']; ?></td>
                                                        <td><?php echo formatBytes($data['ukuran_file']); ?></td>
                                                        <td>
                                                        <?php 
                                                            if (isset($_SESSION['access'])) {
                                                                if ($_SESSION['access'] == 'admin') {
                                                        ?>
                                                                <a href="<?php echo $data['file']; ?>" class="btn btn-success">Download</a>
                                                                <a href="?modul-del=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                                                        <?php
                                                                }elseif ($_SESSION['access'] == 'guru') {
                                                        ?>
                                                                <a href="<?php echo $data['file']; ?>" class="btn btn-success">Download</a>
                                                                <a href="?modul-del=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                                                        <?php
                                                                }elseif ($_SESSION['access'] == 'siswa') {
                                                        ?>
                                                                <a href="<?php echo $data['file']; ?>" class="btn btn-success">Download</a>
                                                        <?php
                                                                }
                                                            }
                                                        ?>                                                            
                                                        </td>
                                                    </tr>
                                        <?php
                                                    $no++;
                                                }
                                            }else{
                                                echo '
                                                <tr bgcolor="#fff">
                                                    <td align="center" colspan="4" align="center">Tidak ada data!</td>
                                                </tr>
                                                ';
                                            }
                                        ?>                                                                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
