                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Nilai
                                </div>
                                <div class="col-lg-12" style="padding-bottom: 20px;">
                                    <div class="col-md-6 pull-left">
                                    <?php 
                                        $pelajaran  =   $_POST['pelajaran'];
                                        $kelas      =   $_POST['kelas'];
                                        $semester   =   $_POST['semester'];
                                        $tahun      =   $_POST['tahun'];
                                        $nilai      =   mysql_query("SELECT kelas.kelas_nama, pelajaran.pelajaran_nama, semester.semester_nama, tahun.tahun_nama, nilai.nilai_poin 
                                                                FROM nilai 
                                                                INNER JOIN users ON nilai.id=users.id 
                                                                INNER JOIN kelas ON users.kelas_id=kelas.kelas_id 
                                                                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                                                                INNER JOIN semester ON nilai.semester_id=semester.semester_id 
                                                                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                                                                WHERE pelajaran.pelajaran_id='$pelajaran' AND kelas.kelas_id='$kelas' AND semester.semester_id='$semester' AND tahun.tahun_id='$tahun'
                                                                ORDER BY pelajaran.pelajaran_nama ASC");
                                        $row    =   mysql_fetch_array($nilai);
                                    ?>
                                        <table width="100%">
                                            <tr>
                                                <td width="30%">Pelajaran</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['pelajaran_nama']; ?> </td>                                              
                                            </tr>
                                            <tr>
                                                <td width="30%">Kelas</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['kelas_nama']; ?> </td>                                              
                                            </tr>                                            
                                        </table>
                                    </div>
                                    <div class="col-md-6 pull-right">
                                        <table width="100%">
                                            <tr>
                                                <td width="30%">Semester</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['semester_nama']; ?> </td>                                              
                                            </tr>
                                            <tr>
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
                                            <th width="35%">Nama</th>
                                            <th width="10%">KKM</th>
                                            <th width="10%">Poin</th>
                                            <th width="20%">Keterangan</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $pelajaran  =   $_POST['pelajaran'];
                                            $kelas      =   $_POST['kelas'];
                                            $semester   =   $_POST['semester'];
                                            $tahun      =   $_POST['tahun'];
                                            $no     =   1; 
                                            $nilai1  =   mysql_query("SELECT nilai.nilai_id, nilai.nilai_kkm, users.name, kelas.kelas_nama, pelajaran.pelajaran_nama, semester.semester_nama, tahun.tahun_nama, nilai.nilai_poin 
                                                                FROM nilai 
                                                                INNER JOIN users ON nilai.id=users.id 
                                                                INNER JOIN kelas ON users.kelas_id=kelas.kelas_id 
                                                                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                                                                INNER JOIN semester ON nilai.semester_id=semester.semester_id 
                                                                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                                                                WHERE pelajaran.pelajaran_id='$pelajaran' AND kelas.kelas_id='$kelas' AND semester.semester_id='$semester' AND tahun.tahun_id='$tahun'
                                                                ORDER BY users.name ASC");

                                            while ($data=mysql_fetch_array($nilai1)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['nilai_kkm']; ?></td>
                                            <td><?php echo $data['nilai_poin']; ?></td>
                                            <?php
                                                if ($data['nilai_kkm'] <= $data['nilai_poin']) {
                                            ?>
                                            <td>Tuntas</td>
                                            <?php
                                                 }else{
                                            ?>
                                            <td>Tidak Tuntas</td>
                                            <?php
                                                 } 
                                            ?>
                                            <td>
                                                <a href="?nilai-edit=<?php echo $data['nilai_id']; ?>" class="btn btn-warning">Edit</a>
                                                <a href="?nilai-del=<?php echo $data['nilai_id']; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div style="padding-top: 20px;">
                                    <div style="padding-top: 20px;margin-bottom: -30px;"><a href="?nilai=tampil" class="btn btn-purple">Kembali</a></div>                                   
                                </div>
                            </div>
                        </div>