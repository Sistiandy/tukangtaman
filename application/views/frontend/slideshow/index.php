<br>
<br>
<div class="section">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php 
            $i = 1;
            foreach ($slideshow as $slide): ?>
            <div class="item <?php echo $i == 1? 'active' : '' ?>">
                <img src="<?php echo upload_url($slide['slideshow_image']) ?>">
                <div class="carousel-caption">
                    <h3><?php echo $slide['slideshow_title'] ?></h3>
                    <p><?php echo $slide['slideshow_desc'] ?></p>
                </div>
            </div>
            <?php $i++; endforeach ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    </div>
</div>