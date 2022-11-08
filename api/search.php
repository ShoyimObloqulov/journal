<?php
	include_once '../config.php';
	$tx = $_POST['name'];
	$yil = $_POST['yil'];
	$yil_sql = mysqli_query($link,"SELECT * FROM `yili` WHERE id='$yil'");
	$sqly = mysqli_fetch_assoc($yil_sql)['name'];
	$sql = mysqli_query($link,"SELECT * FROM `maqola` WHERE mavzu LIKE '%$tx' AND chop_qil='1' AND sana='$sqly'");
	$tx = "";
	while ($row = mysqli_fetch_assoc($sql)) {
		$tx .= '<div class="col-md-12 col-sm-12" id="ramka">
                    <div class="">
                        <div class="">
                            <div class="">
                                <a href="'.$row["file_name"].'" class="title">'.$row['mavzu'].'</a>
                                <div class="info">
                                    <div class="author item">Jurnal soni: '.$row['jurnal_soni'].'</div>
                                </div>       
                                <div class="description">
                                    <h4 class="center-title">Mualliflar: '.$row['mualliflar'].'</h4>
                                </div>
                            </div>
                        </div>
                   </div>      
                </div>';
	}

	echo $tx;