<!doctype html>

<html>

<head>

	<title>Ultah Holycow</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="img/holy_logo.png">

	<script type="application/x-javascript"> 

		addEventListener("load", function() { 

			setTimeout(hideURLbar, 0); }, false); 

		function hideURLbar(){ 

			window.scrollTo(0,1); 

		} 

	</script>

	<!-- Custom Theme files -->

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- //Custom Theme files -->

	<!-- web font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- //web font -->

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>

	<style>

		/* CSS comes here */

		#video {

			width: 230px;

			height: auto;

			margin-left: auto;

			margin-right: auto;

		}



		/*#results {

			width: 230px;

			height: auto;

			margin-left: auto;

			margin-right: auto;

			color: #ffffff;

			}*/



			body { font-family: Helvetica, sans-serif; }

			h2, h3 { margin-top:0; }

			form { margin-top: 15px; }

			form > input { margin-right: 15px; }

			#results {

				/*float:right;*/

				margin:10px;

				padding:10px;

				border:1px solid;

				background:#bf0103;

				color: #ffffff;

				width: 250px;

				display: inline-block;

			}



		/*#canvas {

			display: none;

			}*/



		/*.camera {

			width: 230px;

			display: inline-block;

			}*/



		/*.output {

			width: 230px;

			display: inline-block;

			}*/



		/*#startbutton {

			display: block;

			position: relative;

			margin-left: auto;

			margin-right: auto;

			bottom: 36px;

			padding: 5px;

			cursor: pointer;

			}*/



			.contentarea {

				font-size: 16px;

				font-family: Arial;

				text-align: center;

			}

			.dropbtn {
			  background-color: #4CAF50;
			  color: white;
			  padding: 16px;
			  font-size: 16px;
			  border: none;
			  cursor: pointer;
			}

			.dropbtn:hover, .dropbtn:focus {
			  background-color: #3e8e41;
			}

			#myInput {
			  box-sizing: border-box;
			  background-image: url('searchicon.png');
			  background-position: 14px 12px;
			  background-repeat: no-repeat;
			  font-size: 16px;
			  padding: 14px 20px 12px 45px;
			  border: none;
			  border-bottom: 1px solid #ddd;
			}

			#myInput:focus {outline: 3px solid #ddd;}

			.dropdown {
			  position: relative;
			  display: inline-block;
			}

			.dropdown-content {
			  display: none;
			  position: absolute;
			  background-color: #f6f6f6;
			  min-width: 230px;
			  overflow: auto;
			  border: 1px solid #ddd;
			  z-index: 1;
			}

			.dropdown-content a {
			  color: black;
			  padding: 12px 16px;
			  text-decoration: none;
			  display: block;
			}

			.dropdown a:hover {background-color: #ddd;}

			.show {display: block;}

	</style>

</head>

<body>

	<!-- main -->

	<div class="main-w3layouts wrapper">
	
	<center style="margin-top: 0 !important; padding: 1rem;"><img src="img/11years2.jpg"></center>

		<b><h3>Dapatkan Kesempatan Makan Steak Gratis! <br><br>  Isi Data Kamu Segera</h3></b>

		<div class="main-agileinfo">

			<div class="agileits-top">

				<form>

					<input class="text" type="text" id="name" placeholder="Nama" required="Nama wajib di isi">

					<input class="text email" type="email" id="email" placeholder="Email" required="Email wajib di isi">

					<input class="text" type="text" id="sosmed" placeholder="IG/Tiktok/FB" required="Sosmed wajib di isi">

					<input class="text w3lpass" type="text" id="telp" placeholder="Handphone" required="Telp wajib di isi">

					<div class="row">

						<div class="col-md-12 contentarea">

							<center><div id="my_camera"></div></center>

						</div>

						<center>

							<button type="button" class="btn btn-info" onClick="take_snapshot()">Foto Struk Pembelian Kamu</button>

						</center>

					</div>

					<div class="row">

						<div class="col-md-12 contentarea">

							<!-- <canvas id="canvas"></canvas> -->

							<!-- <div class="output"> -->

								<!-- <br> -->

								<div id="results">Foto akan muncul disini.</div>

								<!-- <img id="photo" alt="The screen capture will appear in this box."> -->

								<!-- </div> -->

							</div>

						</div>

						<input class="uang" type="text" id="bill" placeholder="Nominal Belanja" required="Nominal belanja wajib di isi">

						<input class="text w3lpass" type="text" id="is_order" placeholder="DineIn/Gojek/Take Away/Tokopedia/Shopee/Blibli/dll" required="Jenis order wajib di isi">
						
						<div class="form-group">
						  <select id="tkp" name="tkp" required="harus di isi">
						  	<option value="OUTLET RADAL">OUTLET RADAL</option>
						    <option value="OUTLET KEMANG">OUTLET KEMANG</option>
						    <option value="OUTLET SABANG">OUTLET SABANG</option>
						    <option value="OUTLET BSD">OUTLET BSD</option>
						    <option value="OUTLET BENHIL">OUTLET BENHIL</option>
						    <option value="OUTLET BANDUNG">OUTLET BANDUNG</option>
						    <option value="OUTLET SEMARANG">OUTLET SEMARANG</option>
						    <option value="OUTLET KOKAS">OUTLET KOKAS</option>
						    <option value="OUTLET BINTARO">OUTLET BINTARO</option>
						    <option value="OUTLET GANCIT">OUTLET GANCIT</option>
						    <option value="OUTLET HALIM">OUTLET HALIM</option>
						    <option value="OUTLET KARAWACI">OUTLET KARAWACI</option>
						    <option value="OUTLET ST MORITZ">OUTLET ST MORITZ</option>
						    <option value="OUTLET DEPOK">OUTLET DEPOK</option>
						  </select>
						</div>

						<div class="wthree-text">

							<!-- <label class="anim"><input type="checkbox" class="checkbox" required=""><span>I Agree To The Terms & Conditions</span></label> -->

							<div class="clear"></div>

						</div>

						<input type="button" style="font-size: .9em;

						  color: #fff;

						  background: #bf0103;

						  outline: none;

						  border: 1px solid #bf0103;

						  cursor: pointer;

						  padding: 0.9em;

						  -webkit-appearance: none;

						  width: 100%;

						  margin: 2em 0;

						  letter-spacing: 4px;" onClick="saveSnap()" value="SUBMIT">

						<!-- <input type="button" value="simpan foto"> -->

					</form>

					<!-- <p>Don't have an Account? <a href="#"> Login Now!</a></p> -->

				</div>

			</div>


			<a href="https://holycowsteak.com"><h6>www.holycowsteak.com</h6></a>

			<!-- copyright -->

			<div class="colorlibcopy-agile">

				<p>© 2021 Holycow 

					<a href="#" target="_blank">Bhadranaya Group</a>

				</p>

			</div>

		</div>

	</body>

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	
	<!--<script type="text/javascript" src="css/jquery-3.5.1.js"></script>-->

	<!-- First, include the Webcam.js JavaScript Library -->

	<script type="text/javascript" src="webcam.min.js"></script>

	<!-- Configure a few settings and attach camera -->

	<script language="JavaScript">

		Webcam.set({

			width: 300,

			height: 240,

			margin_right: 'auto',

			margin_left: 'auto',

			image_format: 'jpeg',

			jpeg_quality: 90,

			constraints: {
			video: true,
			facingMode: 'environment'
			},

// 			flip_horiz: true,
			

		});

		Webcam.attach( '#my_camera' );

	</script>

	<script language="JavaScript">
	

		function take_snapshot() {

			// preload shutter audio clip
	var shutter = new Audio();
	shutter.autoplay = true;
	shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

			shutter.play();

	// take snapshot and get image data

	Webcam.snap( function(data_uri) {

		document.getElementById('results').innerHTML = '<h2>Hasil Foto :</h2>' + '<img id="imageprev" src="'+data_uri+'"/>';

	} );



}

function saveSnap(){
    
    if ($("#name").val() == '') {
		alert('Nama harus di isi');
	}
	else if ($("#email").val() == '') {
		alert('Email harus di isi');
	}
	else if ($("#sosmed").val() == '') {
		alert('Sosmed harus di isi');
	}
	else if ($("#telp").val() == '') {
		alert('Telp harus di isi');
	}
	else if ($("#bill").val() == '') {
		alert('Nominal Belanja harus di isi');
	}
	else if ($("#is_order").val() == '') {
		alert('Jenis Order harus di isi');
	}
	else if ($("#tkp").val() == '') {
		alert('TKP harus di isi');
	}

	 // Get base64 value from <img id='imageprev'> source

	 var base64image = document.getElementById("imageprev").src;



	 upload = Webcam.upload( base64image, 'upload.php', function(code, text) {

	 	if (code == 200) {

	 		console.log('Sukses Upload Foto');

	 		console.log('gambar : '+ text);

	 		$.ajax({

	 			url: 'action.php',

	 			type: 'POST',

	 			data: {

	 				name: $("#name").val(),

	 				email: $("#email").val(),

	 				sosmed: $("#sosmed").val(),

	 				telp: $("#telp").val(),

	 				bill: $("#bill").val(),

	 				is_order: $("#is_order").val(),
	 				
	 				tkp: $("#tkp").val(),

	 				foto: text

	 			},

	 			success: function (result) {

	 				// console.log(result);

	 				alert("Success");

	 				window.location.href = 'index.php';

	 			}

	 		});

	 	}else{

	 		alert('error');

	 	}

	 });

	}

</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            // Format mata uang.

            $( '.uang' ).mask('000.000.000', {reverse: true});

        })

    </script>
</html>