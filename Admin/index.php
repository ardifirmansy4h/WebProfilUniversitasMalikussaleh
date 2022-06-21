<!DOCTYPE html>
<html>
<head>
<title>Sistem Informasi</title>
<!-- Start : Style -->
<style type="text/css">

#boxsatu{
    position:absolute;
    width: 1333px;
    height:300px;
    top: 89px;
    background-image: url(ard.jpg);
    background-size: cover;
}
#boxdua{
    position:absolute;
    width: 1000px;
    height:400px;
    left: 180px;;
    top: 150px;
    overflow:hidden;
    z-index: 2;
}
#boxtiga{
    width:100%;
    height:40px;
    padding-top:0px; 
    background-image:url(image.png);
    background-repeat:no-repeat;
    background-size:250px 40px;
     
}

#artikel{
    position:absolute;
    width:20%;
    height:200px;
    top:550px;
    left:120px;
    background-color:#00008B;
	border:2px solid black;
	font-family:sans-serif;
	
}

#artikel ul li a{
	text-decoration:none;
	color:white;
	font-size:20px;
}
h2{
	margin-top:10px;
	margin-left:20px;
	border-bottom:5px solid black;
}
#artikel ul li a:hover{
	border-bottom:2px solid black;
	color:black;
}
#sidebar{
    position:absolute;
    width:40%;
    height:200px;
    top:550px;
    left:399px;
    background-color:#00008B;
	border:2px solid black;
	font-family:sans-serif;

}
#login{
    position:absolute;
    width:20%;
    height:200px;
    top:550px;
    left:950px;
    background-color:#00008B;
	border:2px solid black;
	font-family:sans-serif;

}
#footer{
    width:1333px;
    height:200px;
    top:760px;
    background-color:#00008B;
	position:absolute;
	border:2px solid black;
	font-family:sans-serif;
}

	.menu{
		background-color: #00008B;
		
	}
	.menu ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}

	.menu > ul > li {
		float: left;
	}

	
	.menu li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.menu li a:hover{
		background-color: blue;
	}

	li.dropdown {
		display: inline-block;
	}

	.dropdown:hover .isi-dropdown {
		display: block;
	}

	.isi-dropdown a:hover {
		color: #fff !important;
	}

	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 3;
		background-color: #f9f9f9;
	}

	.isi-dropdown a {
		color: #3c3c3c !important;
	}

	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}
    form {
        float:right;
    }
    .ukuran {
        height:30px;
        margin-top:42px;
        color:black;  
        border-color:solid blue;  
    }
    .ukuran::-webkit-input-placeholder{
	color: black;
}
.slider { 
	
	position: relative; 
	overflow: hidden; 
	background: #efefef;
}
 
.slider { 
	
	width: 1000px;
	height: 400px; 
    
}
 
.isi-slider img { 
    width:1000px;
    height:400px;
	float: left;
}
 
.isi-slider { 
    top:0px;
	position: absolute; 
	width:3000px;  
 
	/*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
	-webkit-animation-name:slider;
	-webkit-animation-duration:10s;
	-webkit-animation-timing-function: ease-in-out;
	-webkit-animation-iteration-count:infinite;
	
}
 
 
/*saat gambar di hover oleh cursor mouse maka berhenti slide*/
.isi-slider:hover { 
	-webkit-animation-play-state:paused; 
	 }
}
 
.isi-slider img { 
	float: right; 
}
 
.slider:after { 
	font-size: 150px; 
	position: absolute; 
	z-index: 12; 
	color: rgba(255,255,255, 0); 
	left: 300px; top: 80px; 
	-webkit-transition: 1s all ease-in-out; 
	transition: 1s all ease-in-out; 
}
 
.slider:hover:after { 
	color: rgba(255,255,255, 0.6);  
}
 
 
 
@-webkit-keyframes slider {     
	0% {
		left: 0; opacity: 0; 
	}     
	2% {
		opacity: 1; 
	}     
	20% {
		left: 0; opacity: 1; 
	}     
	21% {
		opacity: 0; 
	}     
	24% {
		opacity: 0; 
	}     
	25% {
		left: -1000px; opacity: 1; 
	}       
	45% {
		left: -1000px; opacity: 1; 
	}     
	46% {
		opacity: 0; 
	}     
	48% {
		opacity: 0; 
	}     
	50% {
		left: -2000px; opacity: 1; 
	}     
	70% {
		left: -2000px; opacity: 1; 
	}     
	72% {
		opacity: 0; 
	}     
	74% {
		opacity: 0; 
	}    
	75% {
		left: -3000px; opacity: 1; 
	}   	
	95% {
		left: -3000px; opacity: 1; 
	}   	
	97% { 
		left: -3000px; opacity: 0;
	}   	
	100% {
		left: 0; opacity: 0; 
	}
} 
article {
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 5px;
				margin-bottom:0;}
			figure {
				float: left;
				width: 250px;
				height: 100px;
				border: 1px solid black;}
			figcaption {
				font-size: 90%;
				text-align: left;
				}
				article p {
					color:white;
				}
	.form_login{
	
	box-sizing : border-box;
	width: 80%;
	padding: 5px;
	font-size: 11pt;
	margin-bottom: 10px;
	margin-left:30px;
	
}

.tombol_login{
	background: #000035;
	color: white;
	font-size: 11px;
	width: 40%;
	border: none;
	border-radius: 3px;
	padding: 10px 10px;
	margin-left:80px;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}

.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}
#footer {
	font-family:sans-serif;
	color:white;
}
#footer a {
	text-decoration:none;
	color:white
}
#footer a:hover{
	color:blue;
}
#footer .alamat{
	width:25%;
	height:150px;
	float:left;
	margin-left:230px;
}
#footer .halaman{
	width:20%;
	height:200px;
	margin-left:30px;
	float:left;

}
#footer .news {
	width:20%;
	height:150px;
	float:left;
	margin-left:30px;
	
}


    
</style>
<!-- End : Style -->
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
			<li><a href="#">Home</a></li>
			<li class="dropdown"><a href="#">Profil</a>
            <ul class="isi-dropdown">
					<li><a href="#">Sejarah</a></li>
					<li><a href="#">Visi Misi</a></li>
					<li><a href="#">Struktur Organisasi</a></li>
					<li><a href="#">Kurikulum</a></li>
                    <li><a href="#">Dosen</a></li>
				</ul></li>
			<li><a href="#">Unimal</a></li>
			<li class="dropdown"><a href="#">Kegiatan Mahasiswa</a>
			</li>
			<li><a href="#">News Tech</a></li>
			<li><a href="#">Beasiswa</a></li>
            <li><a href="#">Admin</a></li>
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
			<li><a href="#">Profil</a></li>
			<li><a href="#">Unimal</a></li>
			<li ><a href="#">Kegiatan Mahasiswa</a></li>
			<li><a href="#">News Tech</a></li>
			<li><a href="#">Beasiswa</a></li>
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
</html>