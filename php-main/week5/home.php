<?php
	session_start();
	if($_SESSION['isLogin'] != true || $_SESSION['jam_selesai']==date("Y-m-d H:i:s"))
	{
		header("Location: form_login.php?message=nologin");
	}
	echo "Selamat datang, ",strtoupper($_SESSION['uname'])," login pada: ",$_SESSION['jam_mulai'];
	echo "<br>";
?>
	<a href="logout.php">Logout</a>

	<!-- 
		tugas 2:
		tambahkan form yang method-nya post ke halaman simpandata.php
		nama lengkap: text
		username : ambil dari session
		alamat: textarea
		jenis kelamin: radio, walaupun pilihannya 2, name tetap 1
		hobi: checkbox -> diisi terserah minimal 3 pilihan, pilihannya 3, name juga 3
		pekerjaan: select -> diisi terserah minimal 3 pilihan, sama kayak radio

		tombol simpan


		kalo sudah klik simpan, tampilkan hasil inputannya
	-->
