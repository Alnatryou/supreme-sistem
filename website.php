<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="website.css">
	<title></title>
</head>
<body bgcolor="aqua">
	<center>
	<h1> WEBSITE SMKN 1 BINTAN TIMUR <br>	
	Tutorial belajar membuat layout website sederhana</h1>
	</center>	
	<table cellpadding="10" cellspacing="0" bgcolor="green">
		<tr>
			<td><a href="www.google.com">Home</a></td>
			<td><a href="www.google.com">HTML</a></td>
			<td><a href="www.google.com">CSS</a></td>
			<td><a href="www.google.com">JavaScript</a></td>
		</tr>
	</table>
	<li><a href="www.google.com">.Tutorial HTML dasar</a></li> <br>
	<li><a href="www.google.com">.Tutorial CSS dasar</a></li> <br>
	<li><a href="www.google.com">.Tutorial Javascript dasar</a></li> <br>
	<li><a href="www.google.com">.Tutorial JQuery dasar</a></li> <br>
	<center><h3>Data Mahasiswa
	<table cellpadding="10" cellspacing="0" border="1" bgcolor="green">
	<tr>
		<td>no</td>
		<td><center>nama</center></td>
		<td><center>nim</center></td>
		<td><center>alamat</center></td>
		<td>opsi</td>
	</tr>
	<tr>
		<td>1</td>
		<td>mamank supri</td>
		<td>0873628475</td>
		<td>dimana saja yang penting bisa ditinggal</td>
		<td>???</td>
	</tr>
		<tr>
		<td>2</td>
		<td>mamank kiki</td>
		<td>0828927198</td>
		<td>di rumah nya lah gk mungkin rumah orang</td>
		<td>????</td>
	</tr>
		<tr>
		<td>3</td>
		<td>mamank budi</td>
		<td>0872547483</td>
		<td>di bawah langit di atas tanah dah itu aja</td>
		<td>???</td>
	</tr>
		<tr>
		<td>4</td>
		<td>mamank fikri</td>
		<td>0897473978</td>
		<td>dimana pun dan kapan pun ada disitu dia</td>
		<td>??</td>
	</tr>
	</table>
	</h3>
	<center>
	<h1> Jam Digital Dengan Javascript <br>
<center>
	<script>
  function jam(){
        var waktu=new Date();
        var jamku = document.getElementById('jam');
        jamku.innerHTML =waktu.getHours();
    }
    </script>
<body onload="jam()">
    <div id="jamku" class="lingkaranLuar borderBiru">
        <div id="detik">34</div>
       <span id="jam">7</span>&nbsp;<span id="tik">:</span>&nbsp;<span id="menit">30</span>
    </div>
</body>
<script>
function jam(){
        var waktu=new Date();
        var jamku = document.getElementById('jam');
        jamku.innerHTML =waktu.getHours();
        var menit=document.getElementById("menit");
        var detik=document.getElementById('detik');
        
        menit.innerHTML=waktu.getMinutes();
        detik.innerHTML=waktu.getSeconds();
     
        var bingkai=document.getElementById('jamku');
        var titikdua=document.getElementById('tik');
        
    }
</script>
<script>
    function luv(){
        var myJam = setTimeout(jam,1000);
    }
    function jam(){
        var waktu=new Date();
        var jam=document.getElementById("jam");
        var menit=document.getElementById("menit");
        var detik=document.getElementById('detik');
        jam.innerHTML=waktu.getHours();
        menit.innerHTML=waktu.getMinutes();
        detik.innerHTML=waktu.getSeconds();
        luv();
        var bingkai=document.getElementById('jamku');
        var titikdua=document.getElementById('tik');
        if(waktu.getSeconds()%2==0){
            bingkai.className="lingkaranLuar borderMerah";
            titikdua.innerHTML=" ";
             
        }else{
            bingkai.className="lingkaranLuar borderBiru";
            titikdua.innerHTML=":";
             
        }
    }
    </script>	
    </center>
</center>
</h1>
	</center>
</body>
</html>