                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Nilai
                                </div>
                                <div class="col-lg-12" style="padding-bottom: 20px;">
                                    <div class="col-md-6 pull-left">
                                        <table width="100%">
                                            <tr>
                                                <?php
                                                    $pelajaran  =   $_POST['pelajaran']; 
                                                    $sql  =   mysql_query("SELECT * FROM pelajaran WHERE pelajaran_id=$pelajaran");
                                                    $row        =   mysql_fetch_array($sql);
                                                ?>
                                                <td width="30%">Mata Pelajaran</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['pelajaran_nama']; ?> </td>                                              
                                            </tr>
                                            <tr>
                                                <?php
                                                    $kelas  =   $_POST['kelas']; 
                                                    $sql  =   mysql_query("SELECT * FROM kelas WHERE kelas_id=$kelas");
                                                    $row        =   mysql_fetch_array($sql);
                                                ?>
                                                <td width="30%">Kelas</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['kelas_nama']; ?> </td>                                              
                                            </tr>                                            
                                        </table>
                                    </div>
                                    <div class="col-md-6 pull-right">
                                        <table width="100%">
                                            <tr>
                                                <?php
                                                    $semester   =   $_POST['semester']; 
                                                    $sql        =   mysql_query("SELECT * FROM semester WHERE semester_id=$semester");
                                                    $row        =   mysql_fetch_array($sql);
                                                ?>
                                                <td width="30%">Semester</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['semester_nama']; ?> </td>                                              
                                            </tr>
                                            <tr>
                                                <?php
                                                    $tahun   =   $_POST['tahun']; 
                                                    $sql        =   mysql_query("SELECT * FROM tahun WHERE tahun_id=$tahun");
                                                    $row        =   mysql_fetch_array($sql);
                                                ?>
                                                <td width="30%">Tahun ajaran</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['tahun_nama']; ?> </td>                                              
                                            </tr>
                                        </table>
                                    </div>
                                </div>    
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="65%">Nama Siswa</th>
                                            <th width="15%">KKM</th>
                                            <th width="15%">Poin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form role="form" method="post">
                                            <?php
                                                
                                                if(isset($_POST['input-nilai'])) {
                                                    
                                                    $no = 1;
                                                    $kelas      =   $_POST['kelas'];
                                                    $pelajaran  =   $_POST['pelajaran'];
                                                    $semester   =   $_POST['semester'];
                                                    $tahun      =   $_POST['tahun'];
                                                    $access     =   'siswa'; 
                                                    $kkm        =   $_POST['kkm'];
                                                    $sql = mysql_query("SELECT users.id, users.name, users.access, kelas.kelas_id, kelas.kelas_nama 
                                                                        FROM users
                                                                        INNER JOIN kelas ON users.kelas_id=kelas.kelas_id
                                                                        WHERE kelas.kelas_id='$kelas' AND users.access='$access'
                                                                        ");
                                                    while ($data=mysql_fetch_array($sql)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td>
                                                    <input type="hidden" class="form-control" name="name[]" id="name[]" value="<?php echo $data['id']; ?>">
                                                    <?php 
                                                        echo $data['name'];
                                                    ?>
                                                    <input type="hidden" name="pelajaran[]" id="pelajaran[]" value="<?php echo "$pelajaran"; ?>">
                                                    <input type="hidden" name="semester[]" id="semester[]" value="<?php echo "$semester"; ?>">
                                                    <input type="hidden" name="jenis[]" id="jenis[]" value="<?php echo "$jenis"; ?>">
                                                    <input type="hidden" name="tahun[]" id="tahun[]" value="<?php echo "$tahun"; ?>">
                                                    <input type="hidden" name="kkm[]" id="kkm[]" value="<?php echo "$kkm"; ?>">
                                                </td>
                                                <td><?php echo $kkm; ?></td>
                                                <td>
                                                    <input type="text" class="form-control" name="nilai[]" id="nilai[]" />
                                                </td>
                                            </tr>
                                            <?php 
                                                $no++;  
                                                }
                                            ?>      
                                            <tr>
                                                <td colspan="4" align="right" valign="baseline"><button type="submit" class="btn btn-success" name="input-proses"><span class="fa fa-gear"></span> Proses</button></td>
                                            </tr>
                                        </form>
                                        <?php 
                                            }
                                        ?>                                                                           
                                    </tbody>
                                </table>
                                <div style="padding-top: 20px;">
                                    <div style="padding-top: 20px;margin-bottom: -30px;"><a href="?nilai=input" class="btn btn-purple">Kembali</a></div>                                   
                                </div>
                            </div>
                        </div>