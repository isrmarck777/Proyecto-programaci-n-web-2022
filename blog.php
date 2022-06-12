<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Player - Live 🔴</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
   

    <link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">
    <script src='https://vjs.zencdn.net/7.5.4/video.js'></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">IPTV</div>
    <div class="address-bar">CANALES NACIONALES | BOLIVIA | 123.456.7890</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
				<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
				
                    <hr>
                    <h2 class="intro-text text-center">IPTV BOLIVA
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <header>
                  <center><h3 class="titulo"> Canales Nacionales IPTV</h3></center>
                
                </header>
                            <br>
                            <br>
                            <main>
                                <div class="contenedor">   
                                  <br>
                                      <h1>DEPARTAMENTO DE LA PAZ</h1>
                            <p>RTP(LA PAZ)</p>
                                <video id="play1" class="fm-video video-js" width="500" controls id= "fm-video" preload="none">
                                <source src="http://136.243.3.70:1935/RtpBolivia/RtpBolivia/chunklist_w1475570092.m3u8" type="application/x-mpegURL" />
                            </video>  
                            <br>
                            <hr>
                            <p>TL ESTRELLA(LA PAZ)</p>
                                <video id="play2" class="fm-video video-js" width="500" controls id= "fm-video" preload="none">
                                <source src="http://hd.istbolivia.com:1935/Teleestrella/Teleestrella/playlist.m3u8" type="application/x-mpegURL" />
                            </video>  
                            <br>
                            <hr>
                                <p>SEO TV KIDS(LA PAZ)</p>
                                <video id="play3" class="fm-video video-js" width="500" controls id= "fm-video" preload="none">
                                <source src="https://panel.seo.tv.bo:3182/live/franzleonellive.m3u8" type="application/x-mpegURL" />
                            </video>  
                            <br>
                            <hr>
                                <p>SEO TV(LA PAZ)</p>
                                <video id="play4" class="fm-video video-js" width="500" controls id= "fm-video" preload="none">
                                <source src="https://panel.seo.tv.bo:3645/live/franzleonel0live.m3u8" type="application/x-mpegURL" />
                            </video>  
                            <br>
                            <hr> 

                            <p>AYNI TV(LA PAZ)</p>
                                <video id="play5" class="fm-video video-js" width="500" controls id= "fm-video" preload="none">
                                <source src="http://hd.istbolivia.com:1935/aynitv/aynitv/playlist.m3u8" type="application/x-mpegURL" />
                            </video>  
                            <br>
                            <hr>
                            <br>
                            <H1>DEPARTAMENTO DE COCHABAMBA</H1>
                            <p>Canal CCTV-19(Sacaba)</p>
                                <video width="500" class="fm-video video-js" width="500" controls id= "fm-video" preload="none">
                                <source src="https://solo.disfrutaenlared.com:1936/redcctv/redcctv/chunklist_w837816253.m3u8" type="application/x-mpegURL" />
                            </video>  
                            <br>
                            <hr>
                            
                            <p>Canal RTVE (Punata)</p>
                            <video id="pl" class="video-js vjs-default-skin" width="500" controls preload="none">
                                <source src="https://stmv.panel.grupolimalive.com:443/encuentro/encuentro/chunklist_w1349543316.m3u8" type="application/x-mpegURL" />
                            </video> 
                            <br>
                            <hr>
                            <br>
                            <h1> DEPARTAMENTO DE SANTA CRUZ</h1>
                            <p>Canal UNITELHD (SC)</p>
                            <video id="play6" class="video-js vjs-default-skin" width="500" controls preload="none">
                                <source src="https://cdn.digital.com.bo/__cl/cg:sworigin2/__c/UNITEL/__op/hls-default/__f/index.m3u8" type="application/x-mpegURL" />
                            </video> 
                            <br>
                            <hr>

                            <p>Canal MEGAHD (SC)</p>
                            <video id="play7" class="video-js vjs-default-skin" width="500" controls preload="none">
                                <source src="https://livefocamundo.com:8081/megavisiontv/index.m3u8" type="application/x-mpegURL" />
                            </video> 
                            <br>
                            <hr>
                            <p>Canal TVLATINA (SC)</p>
                            <video id="play8" class="video-js vjs-default-skin" width="500" controls preload="none">
                                <source src="https://master.tucableip.com/live/tvlatinamontero/tracks-v1a1/mono.m3u8" type="application/x-mpegURL" />
                            </video> 
                            <br>
                            <hr>
                            <p>Canal NEOTV (SC)</p>
                            <video id="play9" class="video-js vjs-default-skin" width="500" controls preload="none">
                                <source src="https://master.tucableip.com/neotv/index.m3u8" type="application/x-mpegURL" />
                            </video> 
                            <br>
                            <hr>
                            <br>
                              <h1>DEPARTAMENTO DE ORURO</h1>
                            
                            <p>Canal CEACOM (Oruro)</p>
                            <video id="played" class="video-js vjs-default-skin" width="500" controls preload="none">
                                <source src="https://cloud2.streaminglivehd.com:1936/ceacom/ceacom/playlist.m3u8" type="application/x-mpegURL" />
                            </video> 
                            <br>
                            <hr>
                            <br>
                            <h1>DEPARTAMENTO DE POTOSI</h1>
                            <p>Canal IMPERIALTV (POTOSI)</p>
                            <video id="play10" class="video-js vjs-default-skin" width="500" controls preload="none">
                                <source src="https://stmv.panel.grupolimalive.com:443/imperial/imperial/chunklist_w1244777004.m3u8" type="application/x-mpegURL" />
                            </video> 
                            <br>
                            <hr>
                            <p>Canal MARVISION (POTOSI)</p>
                            <video id="play11" class="video-js vjs-default-skin" width="500" controls preload="none">
                                <source src="https://stmv.panel.grupolimalive.com:443/marvision/marvision/chunklist_w802342154.m3u8" type="application/x-mpegURL" />
                            </video> 
                            <br>
                            <hr>

                            <script>
                                var reproductor = videojs('fm-video',{

                                })
                            </script>

                            <script>
                                var player = videojs('#play1')
                            </script>
                            <script>
                                var player = videojs('#play2')
                            </script>
                            <script>
                                var player = videojs('#play3')
                            </script>
                            <script>
                                var player = videojs('#play4')
                            </script>
                            <script>
                                var player = videojs('#play5')
                            </script>
                            <script>
                                var player = videojs('#play6')
                            </script>
                            <script>
                                var player = videojs('#play7')
                            </script>
                            <script>
                                var player = videojs('#play8')
                            </script>
                            <script>
                                var player = videojs('#play9')
                            </script>
                            <script>
                                var player = videojs('#play10')
                            </script>
                            <script>
                                var player = videojs('#play11')
                            </script>
                            <script>
                                var player = videojs('#play')
                            </script>

                            <script>
                                var player = videojs('#pl')
                            </script>

                            <script>
                                var player = videojs('#played')
                            </script>

                        </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

	<!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Coconut Oil Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Sample Text.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Irish Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Sample Text.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Frozen Caramel Latte</h4>
		  </div>
		  <div class="modal-body">
			<p>Sample Text.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>
