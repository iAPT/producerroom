<?php
/**
 * The template for displaying  video page.
 *
 * @package _tk
 */
get_header('video');
?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'content', 'page' ); ?>

		

	<?php endwhile; // end of the loop. ?>
  <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Like</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Comment</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Views</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Share</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Following</div>
            </button>
        </div>
    </div>
<section class="video">
<div class="well well-lg" id="biodata">
<h3 class="text-center">Recommended for you</h3>

  <div class="jcarousel-wrapper">
<div class="jcarousel">
    <ul class="thumbnails">
    
<li>

        
        <article class="thumbnail hovereffect">
            
          <img src="http://localhost/producerroom/wp-content/uploads/2016/04/2.jpg" alt="homepge-crop">
         <div class="overlay">
                <h2>Effect 14</h2>
                <p>
                    <a href="#">LINK HERE</a>
                </p> 
            </div> 
          
           <h3>Test</h4>
          
        </article>
    
  </li> <!--end thumb -->
  <li>

         
        <article class="thumbnail hovereffect">
            
          <img src="http://localhost/producerroom/wp-content/uploads/2016/04/2.jpg" alt="homepge-crop">
         <div class="overlay">
                <h2>Effect 14</h2>
                <p>
                    <a href="#">LINK HERE</a>
                </p> 
            </div> 
          
           <h3>Test</h4>
          
        </article>
    
  </li> <!--end thumb -->
  <li>

         
        <article class="thumbnail hovereffect">
            
          <img src="http://localhost/producerroom/wp-content/uploads/2016/04/2.jpg" alt="homepge-crop">
         <div class="overlay">
                <h2>Effect 14</h2>
                <p>
                    <a href="#">LINK HERE</a>
                </p> 
            </div> 
          
           <h3>Test</h4>
          
        </article>
    
  </li> <!--end thumb -->
  <li>

         
        <article class="thumbnail hovereffect">
            
          <img src="http://localhost/producerroom/wp-content/uploads/2016/04/2.jpg" alt="homepge-crop">
         <div class="overlay">
                <h2>Effect 14</h2>
                <p>
                    <a href="#">LINK HERE</a>
                </p> 
            </div> 
          
           <h3>Test</h4>
          
        </article>
    
  </li> <!--end thumb -->
  <li>

         
        <article class="thumbnail hovereffect">
            
          <img src="http://localhost/producerroom/wp-content/uploads/2016/04/2.jpg" alt="homepge-crop">
         <div class="overlay">
                <h2>Effect 14</h2>
                <p>
                    <a href="#">LINK HERE</a>
                </p> 
            </div> 
          
           <h3>Test</h4>
          
        </article>
    
  </li> <!--end thumb -->
   <li>

         
        <article class="thumbnail hovereffect">
            
          <img src="http://localhost/producerroom/wp-content/uploads/2016/04/2.jpg" alt="homepge-crop">
         <div class="overlay">
                <h2>Effect 14</h2>
                <p>
                    <a href="#">LINK HERE</a>
                </p> 
            </div> 
          
           <h3>Test</h4>
          
        </article>
    
  </li> <!--end thumb -->
   <li>

         
        <article class="thumbnail hovereffect">
            
          <img src="http://localhost/producerroom/wp-content/uploads/2016/04/2.jpg" alt="homepge-crop">
         <div class="overlay">
                <h2>Effect 14</h2>
                <p>
                    <a href="#">LINK HERE</a>
                </p> 
            </div> 
          
           <h3>Test</h4>
          
        </article>
    
  </li> <!--end thumb -->
   <li>

         
        <article class="thumbnail hovereffect">
            
          <img src="http://localhost/producerroom/wp-content/uploads/2016/04/2.jpg" alt="homepge-crop">
         <div class="overlay">
                <h2>Effect 14</h2>
                <p>
                    <a href="#">LINK HERE</a>
                </p> 
            </div> 
          
           <h3>Test</h4>
          
        </article>
    
  </li> <!--end thumb -->



    </ul>


</div>
<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>

           </div>


</div>
</section>


	
<?php get_sidebar('video'); ?>
<?php get_footer(); ?>
