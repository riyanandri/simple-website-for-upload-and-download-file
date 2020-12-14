<div class="page">
    <p>Silahkan download file yang sudah di Upload di website ini. 
    Untuk men-Download Anda bisa mengklik Judul file yang di inginkan.
    </p>
    <table class="table" align="center" width="50%" cellpadding="3" cellspacing="0">
        <tr>
            <th width="30">No.</th>
            <th width="80">Tgl. Upload</th>
            <th width="100">Nama File</th>
            <th width="70">Tipe</th>
            <th width="70">Ukuran</th>
        </tr>
        <?php
		include('config.php');
		$sql = mysqli_query($connect, "SELECT * FROM download ORDER BY id DESC");
		if(mysqli_num_rows($sql) > 0) {
			$no = 1;
			while($data = mysqli_fetch_assoc($sql)) {
				echo '
				    <tr bgcolor="#fff">
						<td align="center">'.$no.'</td>
						<td align="center">'.$data['tanggal_upload'].'</td>
						<td><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
						<td align="center">'.$data['tipe_file'].'</td>
						<td align="center">'.formatBytes($data['ukuran_file']).'</td>
					</tr>
				';
				$no++;
			}
		}else {
            echo '
                <tr bgcolor="#fff">
					<td align="center" colspan="5" align="center">ERROR: Tidak ada data!</td>
                </tr>
            ';
		}
		?>
    </table>
</div>