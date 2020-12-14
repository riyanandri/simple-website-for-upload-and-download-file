<div class="page">
	<p>Upload file Anda dengan melengkapi form di bawah ini. 
	File yang bisa di Upload hanya file dengan ekstensi <b>.jpg, .jpeg, .png, .gif, .mp3, .mp4, .mkv</b> 
	dan besar file maksimal 10 MB.
	</p>
	<form action="" method="post" enctype="multipart/form-data">
        <table align="center" border="0" cellpadding="2" cellspacing="0">
            <tr>
                <td align="right"><b>Nama File</b></td><td><b>:</b></td><td align="left"><input type="text" name="nama" size="30" /></td>
            </tr>
            <tr>
				<td align="right"><b>Pilih File</b></td><td><b>:</b></td><td align="left"><input type="file" name="file" required /></td>
			</tr>
			<tr>
				<td></td><td></td><td align="left"><input type="submit" name="upload" value="Upload"/></td>
			</tr>
		</table>
	</form>
	<?php
	include('config.php');
	if($_POST) {
		$allowed_ext	= array('jpg', 'jpeg', 'png', 'gif', 'mp3', 'mp4', 'mkv');
		$file_name		= $_FILES['file']['name'];
		$x				= explode('.', $file_name);
		$file_ext		= strtolower(end($x));
		$file_size		= $_FILES['file']['size'];
		$file_tmp		= $_FILES['file']['tmp_name'];		
		$nama			= $_POST['nama'];
		$tgl			= date("Ymd");
				
		if(in_array($file_ext, $allowed_ext) === true) {
			if($file_size < 10000000) {
				$lokasi = 'uploaded/'.$nama.'.'.$file_ext;
				move_uploaded_file($file_tmp, $lokasi);
				$php = "INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')";
				$in = mysqli_query($connect,$php);
				if($in) {
					echo '<br>SUCCESS: File berhasil di Upload!';
				}else {
					echo '<br>ERROR: Gagal upload file!';
				}
			}else {
				echo '<br>ERROR: Besar ukuran file maksimal 10 Mb!';
			}
		}else {
			echo '<br>ERROR: Ekstensi file tidak di izinkan!';
		}
	}else {

	}
	?>
</div>