<?php
    include("connection_file.php");
    if (isset($_GET["phasewise"])) {
        $file = "phase_wise.php";
        $phase_query = mysqli_query($con, "select * from phases");
    } elseif (isset($_GET["seriesewise"])) {
        $file = "seriese_wise.php";
        $seriese_query = mysqli_query($con, "select * from serieses");
    } elseif (isset($_POST["search"])) {
        $search_word = $_POST["search"];
        $query = mysqli_query($con, "SELECT * FROM `movies_list` WHERE movie_name LIKE '%$search_word%' ");
        $file = "home_page.php";
    } else {
        $file = "home_page.php";
        $query = mysqli_query($con, "select * from movies_list ORDER BY movie_id DESC");
    }
?>
<html>
	<head>
		<style>
			.navbar {
				background-color: transparent;
            }
			/* .navbar {
				width: 100%;
				height:auto;
				background: linear-gradient(90deg, #1CB5E0 0%, #000851 100%);
				overflow: auto;
				color: white;
				margin-top:15px;
				border:springgreen solid 1px;
				border-radius:25px;
        	}
			.navbar a {
				background-color:transparent;
				float: left;
				text-align: center;
				padding: 6px;
				color:#000;
				border: 1px solid transparent;
				font-family: Goudy Old Style;
				font-style: inherit;
				text-decoration: none;
				font-size: 20px;
				border-radius:15px;
			}
        	.navbar a:hover {
				background-color:#006;
				border:1px solid #0F0;
				color: white;
				text-decoration: none;
			} */
            #heading-part{
                height:auto;
                width: 95%;
                border:2px solid #000;
                border-radius:10px;
			}
            .movie-box{
				border:gray inherit 3px;
				border-radius:0px;
				box-shadow: 0px 0px 10px 0px black;
				margin-bottom: 10px;
				margin-top: 10px;
				background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);
				padding:15px;
			}
			.movie-box img {
				margin:10px;
				border:#000 solid 1px;
				transition: transform .2s;
			}
			.movie-box img:hover{
				transform: scale(0.95);
				box-shadow:0px 0px 0px 2px #000000
			}
			.movie-name-box{
				padding:0px;
				border:0.5px solid #000;
				border-radius:10px;
				font-family: "Times New Roman", Times, serif;
				background: linear-gradient(90deg, #00d2ff 0%, #3a47d5 100%);
				color:#FFF;
			}
			.movie-name-box:hover{
				background: linear-gradient(90deg, #efd5ff 0%, #515ada 100%);
				color:#000;
				cursor:pointer;;
			}
			.movie-size{
				font-family: "Times New Roman", Times, serif;
				color:#000;
				font-weight:200;
			}
			.alert-text{
				border:1px solid #666;
				border-radius:10px;
				padding:7px;
				text-align:center;
				margin:5px;
				margin-right:0px;
				background-color:#036;
				color:#FFF;
			}
			.footer{
	            height:auto;
	            margin-top:10px;
	            margin-bottom:30px;
	            background-color:skyblue;
	            border:springgreen solid 1px;
	            padding:15px;
	            color: white ;
	            border-radius: 10px;
	            color:darkolivegreen;
	        }
	        .footer a {
	            color: black;
	            margin-left:15px;

	        }
	        .footer a:hover {
	            text-decoration:none;
	            color:blue;
	        }
			#bottom-part{
				height:120px;
				border:2px solid #000;
				margin:20px;
				border-radius:15px;
			}
			.second-part{
				width: 94%;
			}
			body{
				background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
			}
			.phase-title{
				text-align: left;
				margin: 10px;
				padding: 10px;
				border: 1px solid black;
				font-family:georgia;
				border-radius: 10px;
				color:white;
				background: rgb(2,0,36);
				background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,212,255,0.4290091036414566) 100%);
			}
        </style>
        <link rel="shortcut icon" href="heading_logo.png">
        <title>Home Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body>
    	<center><?php include("top_part.php") ?></center>
    	<center>
			<?php include($file) ?>
	    </center>
        <center>
	        	<center>
	        		<p>E-mail Id </p>
		            <p>
		            	<a href="https://mail.google.com//#compose" target="_blank">
		            		ladvamitesh.dgrs@gmail.com <i class="fa fa-envelope"></i>
		            	</a>
		            </p>
	            </center>
    		</div>
		</center>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
			crossorigin="anonymous">
		</script>
	</body>
</html>
