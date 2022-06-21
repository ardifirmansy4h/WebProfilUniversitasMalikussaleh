<style type="text/css">
#artikel {
	background-color:#00008B;
	border:1px solid black;
	
}
#artikel ul li a{
	color:white;
}
#artikel h2 {
	color:black;
}
#sidebar {
	background-color:#00008B;
	border:1px solid black;
}
#login{
	background-color:#00008B;
	border:1px solid black;
}

</style>
<div id="artikel">
	<h2>Agenda</h2>
	<ul>
	<li><a href="#">2018</a></li>
	<li><a href="#">2019</a></li>
	<li><a href="#">2020</a></li>
    <li><a href="#">2021</a></li>
	<li><a href="#">2022</a></li>
	</ul>
    </div>   
    <div id="sidebar">
	<h2>News</h2>
	<article>
					<figure>
						<img src="virus.jpg" alt="" />
						<figcaption></figcaption>
					</figure>
					<hgroup>
						<h3>Tech</h3>
					</hgroup>
					<p>Apa itu malware dan bagaimana cara mengatasinya?</p>
				</article>    
    </div>   
    <div id="login"><h2>Admin</h2>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		
 
		<form action="cek_login.php" method="post">
			
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
         	<input type="submit" class="tombol_login" value="LOGIN">
 
			
		</form>
		
	</div>
    </div>  
    <div id="footer">
	<div class="alamat">
	<h3>Alamat</h3>
	<p class="tempat">Universitas Malikussaleh ACEH Kampus Utama Cot Tengku Nie Reuleut Muara Batu, Aceh Utara, Provinsi Aceh, Indonesia</p>
	<h4>Contact Us</h4>
	<p> ardifirman9999@gmail.com</p>
	</div>
	<div class="halaman"> 
	<h3>Halaman</h3>
		<ul>
	    	<li><a href="index.php?page=sejarah">Profil</a></li>
			<li><a href="index.php?page=unimal">Unimal</a></li>
			<li><a href="index.php?page=kegiatan">Kegiatan Mahasiswa</a>
			</li>
			<li><a href="index.php?page=news">News Tech</a></li>
			<li><a href="index.php?page=beasiswa">Beasiswa</a></li>
            <li><a href="index.php?page=admin">Admin</a></li>
		</ul>

		</ul>
	</div>
	<div class="news">
	<h3>News</h3>
	<ul>
	<li><a href="#">Apa itu malware dan bagamaina cara mengatasinya?</a></li>
	<li><a href="#">Unimal</a></li>
	<li ><a href="#">Kegiatan Mahasiswa</a></li>
	</ul>      
    </div>
	</div>