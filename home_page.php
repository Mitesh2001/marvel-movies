<div class="second-part">
    <h3 class="phase-title">
    	<marquee direction="left"><i class="fa fa-angle-double-right ml-3"></i> Marvel Cinematic Universe</marquee>
    </h3>
    <div class="row mt-3 d-flex justify-content-center">
        <?php
            while ($movies = mysqli_fetch_array($query)) {
                ?>  
        <div class="movie-box col-lg-3 col-sm-6">
        	<form method="post" action="movie_page.php">
        	<input type="hidden" name="movie_id" value="<?php echo $movies['movie_id'] ?>">
            <a style="text-decoration: none;" href="movie_page.php?movie_id=<?php echo $movies['movie_id'] ?>">
            <div class="movie-name-box">
                <h5 class="m-3">
                    <?php echo ucfirst($movies['movie_name'])."<br>(".$movies['release_year'].") dual audio 720p"; ?>
                </h5>
            </div>
            <img src="posters\<?php echo $movies["poster"] ?>" class="rounded" height="200px" width="150px"><br>
            </a>
            <?php echo $movies["movie_type"] ?>
            <button type="submit" name="submit" id="submit-button" class="btn btn-block btn-info m-2"><i class="fa fa-download"></i> Free Download</button>
            <a style="text-decoration: none;" href="https://www.youtube.com/watch?v=<?php echo $movies['trailer_id'] ?>" target="_blank">
            	<button class="btn btn-block btn-outline-danger m-2" type="button"><i class="fa fa-youtube"></i> Watch Trailer</button>
            </a>
            <h5 class="movie-size">Size : <?php echo $movies["movie_size"] ?></h5>
            </form>
        </div>
        <?php
            } ?>
    </div>
</div>