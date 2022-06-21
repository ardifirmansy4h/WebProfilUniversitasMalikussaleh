<style type="text/css">
.berita{
	height:550px;
	
}
article {
	height:200px;
	width:740px;
}
article p {
	color:black;
}
#new {
	position:absolute;
    width:20%;
    height:250px;
    top:780px;
    left:960px;
    background-color:#00008B;
	border:1px solid black;
	font-family:sans-serif;
}
#new ul li a{
	text-decoration:none;
	color:white;
	font-family:sans-serif;
}
#new ul li{
	margin-bottom:10px ;
	margin-right:5px;
}
#agenda{
	background-color:#00008B;
	border:1px solid black;
}
#agenda ul li a {
	color:white;
}
#foter{
	top:1110px;
}
.berita p{
	margin:5px;
}
.login {
    height:200px;
    width:300px;
    margin-right:230px;
    margin-top:150px;
}
</style>

<body>
<div class="berita">
	<h2> Admin</h2>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<form action="cek_login.php" method="post" class="login">
			
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
         	<input type="submit" class="tombol_login" value="LOGIN">
 
			
		</form>

	
</div>
<div id="new">
		<h2>News Tech</h2>
		<ul>
		<li><a href="#">Apa itu malware dan mengatasinya ?</a></li>
	<li><a href="#">Jaringan 5G hadir di Indonesia</a></li>
	<li><a href="#">Matahari Buatan Korea Melebihi Cina</a></li>
</ul>
</div>	

<div id="agenda">
	<h2>Agenda</h2>
	<ul>
	<li><a href="#">2018</a></li>
	<li><a href="#">2019</a></li>
	<li><a href="#">2020</a></li>
    <li><a href="#">2021</a></li>
	<li><a href="#">2022</a></li>
	</ul>
    </div>
    <div id="foter">
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
</body>