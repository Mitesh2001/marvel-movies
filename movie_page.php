<?php
include("connection_file.php");
if (isset($_POST["submit"])) {
    $movie_id = $_POST["movie_id"];
    $getting_details = mysqli_query($con, "select * from movies_list where movie_id = $movie_id");
    if (mysqli_num_rows($getting_details) > 0) {
        $movies_details = mysqli_fetch_array($getting_details);
    } else {
        header("location:index.php") ;
    }
} elseif (isset($_GET['movie_id'])) {
    $movie_id = $_GET['movie_id'];
    $getting_details = mysqli_query($con, "select * from movies_list where movie_id = $movie_id");
    if (mysqli_num_rows($getting_details)) {
        $movies_details = mysqli_fetch_array($getting_details);
    } else {
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

?>
<html>
<head>
    <style type="text/css">
            #heading-part{
                height:auto;
                width: 95%;
                border:2px solid #000;
                border-radius:10px;
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
            .movie-details{
                border: 2px solid black;
                color:black;
                border-radius: 5px;
                margin-top: 30px;
            }
            .movie-details-2{
                border: 0px solid blue;
                color:black;
                border-radius: 5px;
                margin-top: 30px;
            }
            .screenshot{
                height: 142px;
                border-radius: 5px;
                box-shadow: 0px 0px 5px 0px;
                margin-bottom: 2px;
            }
            .iframe{
                height: 350px;
                margin-top:5px;
                margin-bottom: 15px;
                border-radius: 20px;
                box-shadow: 0px 0px 10px 10px gray;

            }
            .poster{
                margin: 20px;
                border-top: 1px solid black;
                border-bottom: 1px solid black;
                border-radius: 20px;
            }
            .paragraph{
                font-family: Palatino, "Palatino LT STD", "Palatino Linotype", "Book Antiqua", Georgia, serif;
                font-style: inherit;
                font-weight: bold;
                background: -webkit-linear-gradient(#eee, #333);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .download-button button{
                margin-top: 20px;
                margin-bottom: 20px;
                width: 25%;
            }
            .footer{
                height:auto;
                margin-top:10px;
                margin-bottom:30px;
                background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
                border:springgreen solid 1px;
                padding:15px;
                color:skyblue;
                border-radius: 10px;
            }
            .footer a {
                color: #3FFF33 ;
                margin-left:15px;

            }
            .footer a:hover {
                text-decoration:none;
                color:lightgreen;
            }
            body{
                /* background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%); */
                background: #34e89e;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #0f3443, #34e89e);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #0f3443, #34e89e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            }
            .bckbutton{
                height: 50px;
                width: 300px;
            }
    </style>
    <title>Download <?php echo $movies_details['movie_name'].' ('.$movies_details['release_year'].')'; ?></title>
	<link rel="shortcut icon" href="heading_logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <center><?php include("top_part.php") ?></center>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                    <div class="movie-details">

                        <center>
                        <h2 style="font-family:Goudy Old Style;">
                            <b><?php echo $movies_details["movie_name"] ?><br>
                            (<?php echo $movies_details["release_year"] ?>) dual audio 720p </b>
                        </h2>

                        <hr width="75%">


                        <img class="poster col-md-5 col-5" src="<?php echo "posters/".$movies_details['poster'] ?>">


                        <h5 class="paragraph">
                        Download <?php echo $movies_details["movie_name"] ?> which is released at year
                        <?php echo $movies_details["release_year"]; ?>.This is now available in english & hindi
                        audio, also. <br><br>
                        This is The Best Website/Platform For Marvel cinematic universe all Movies. We Provide Direct Google Drive Download Links For Fast And Secure Downloading. Just Click On Download Button.
                        </h5>
                        <br>
                        </center>

                    </div>

            </div>
            <div class="col-lg-7 justify-content-center">
                <div class="movie-details-2">
                    <center>
                    <div class="trailer-window">
                        <iframe class="col-md-12 iframe"
                        src="https://www.youtube.com/embed/<?php echo $movies_details['hindi_trailer'] ?>"
                        allow="accelerometer; picture-in-picture"
                        allowfullscreen>
                        </iframe>
                    </div>
                    </center>
                    <h3 style="font-family:Comic Sans;font-size:20;font-weight:bold;">
                    &ensp; Movie Info :
                    </h3>
                    <ul>
                        <li>Full Name : <?php echo $movies_details['movie_name'] ?></li>
                        <li>Languages : Dual audio [Hindi-English]</li>
                        <li>Released Year : <?php echo $movies_details['release_year'] ?></li>
                        <li>Size : <?php echo $movies_details['movie_size'] ?></li>
                        <li>Formate : <?php echo "Mkv" ?></li>
                    </ul>
                    <h3 style="font-family:Goudy Old Style;font-weight:bold;">&nbsp; Screenshots :</h3>
                    <div class="row">
                        <?php
                             for ($i=1;$i<=4;$i++) {
                                 $s_id = $movies_details["movie_id"]; ?>
                        <img class="screenshot col-md-6 " src="screenshots/<?php echo $s_id."(".$i.").png" ?>">
                        <?php
                             } ?>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <div class="download-button">
                <a
                style="text-decoration: none"
                href="https://drive.google.com/uc?export=download&id=<?php echo $movies_details['drive_id'] ?>"
                >
                    <button class="btn btn-primary btn-block">
                        <i class="fa fa-cloud-download"></i>   Download Full Movie
                    </button>
                </a>
                <a
                    style="text-decoration: none;"
                    href="https://drive.google.com/open?id=<?php echo $movies_details['drive_id'] ?>">
                    <button class="mt-3 btn btn-secondary btn-block">
                        <i class="fa fa-eye"></i>  Watch Online
                    </button>
                </a>
            </div>
        </center>
        <div class="alert alert-secondary" role="alert">
             <table>
                    <tr>
                        <td>Ctrl+M :</td><td>To Download this Movie</td>
                    </tr>
                     <tr>
                        <td>Alt+W:</td><td>To watch online</td>
                    </tr>
            </table>
        </div>
        <div class="alert alert-danger">
        Please Do Not Use VPN for Downloading Movies From this Site.
        </div>
        <div class="alert alert-success">
        Click On The Above <strong>Download Button</strong> To Download File.
        </div>
        <div align="right">
            <button class="btn bckbutton btn-outline-primary" onclick="goBack()">
                <i class="fa fa-backward"></i>  Go Back
            </button>
        </div>


    </div>
    <center>
    <div class="footer">
        <div>
            If You Find Any Broken Link Then What's app your <strong>Report</strong> To me.
        </div>
        <p>Please send your Feedback and suggestion , also</p>
        <a href="https://wa.me/917567130895" target=" _blank"><i class="fa fa-whatsapp">  +91 7567130895</i></a>
    </div>

    </center>
    <script src="//cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>
    <script type="text/javascript">
        function goBack() {
          window.history.back()
        }
        Mousetrap.bind('ctrl+m', function(e) {
            window.location.href="https://drive.google.com/uc?export=download&id=<?php echo $movies_details['drive_id'] ?>";
        });
        Mousetrap.bind('alt+w', function(e) {
            window.location.href="https://drive.google.com/open?id=<?php echo $movies_details['drive_id'] ?>";
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous">
    </script>
</body>
</html>