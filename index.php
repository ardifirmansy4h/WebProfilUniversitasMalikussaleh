<!DOCTYPE html>
<html>
<head>
<title>Sistem Informasi</title>

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <div id="allbox">
        
        <div id="boxtiga"> 
        <form>
        <input type="text" placeholder="Cari Informasi" class="ukuran" />
        </form></div>
     <header class="header">
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">Home</a></li>
			<li class="dropdown"><a href="index.php?page=sejarah">Profil </a>
            <ul class="isi-dropdown">
					<li><a href="index.php?page=sejarah">Sejarah</a></li>
					<li><a href="index.php?page=visi">Visi Misi</a></li>
					<li><a href="index.php?page=struktur">Struktur Organisasi</a></li>
					<li><a href="index.php?page=kurikulum">Kurikulum</a></li>
                    <li><a href="index.php?page=dosen">Dosen</a></li>
				</ul></li>
			<li><a href="index.php?page=unimal">Unimal</a></li>
			<li class="dropdown"><a href="index.php?page=kegiatan">Kegiatan Mahasiswa</a>
			</li>
			<li><a href="index.php?page=news">News Tech</a></li>
			<li><a href="index.php?page=beasiswa">Beasiswa</a></li>
            <li><a href="index.php?page=admin">Admin</a></li>
		</ul>

	</div>
</header></div>
        <div id="boxsatu">
        </div>
        <div id="boxdua">
        <div class=slider>
		<div class=isi-slider>
			<img src="unimaldua.jpg" alt="Gambar 1">
			<img src="unimalsatu.png" alt="Gambar 2">
			<img src="unimal2.jpg" alt="Gambar 3">
		</div>
	</div>
   </div>
	
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "user/home.php";
				break;
			case 'sejarah':
				include "user/sejarah.php";
				break;
			case 'visi':
				include "user/visi.php";
				break;	
			case 'kurikulum':
				include "user/kurikulum.php";
				break;	
			case 'struktur':
				include "user/struktur.php";
				break;	
			case 'dosen':
				include "user/dosen.php";
				break;
			case 'unimal':
				include "user/unimal.php";
				break;
			case 'kegiatan':
				include "user/kegiatan.php";
				break;
			case 'beasiswa':
				include "user/beasiswa.php";
				break;
			case 'news':
				include "user/news.php";
				break;		
				case 'admin':
					include "user/admin.php";
					break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "user/home.php";
	}
 
	 ?>

    
</body>
</html>
 
