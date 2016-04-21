<?php
/**
 * The sidebar containing the main widget area
 *
 * @package _tk
 */
?>

	</div><!-- close coloumn-->
	<div class="sidebar col-sm-2" >

		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		
		<div class="sidebar-padder" >

			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget widget_archive">
					<h3 class="widget-title"><?php _e( 'Archives', '_tk' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget widget_meta">
					<h3 class="widget-title"><?php _e( 'Meta', '_tk' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; ?>

		</div><!-- close .sidebar-padder -->
        	<h3 class="text-center">Recommended for you</h3>
<a href="#" class="jcarousel-control-prev-vertical">&#9650;</a>
  <div class="jcarousel-wrapper-vertical">
    
<div class="jcarousel-vertical">
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

              

           </div>

  <a href="#" class="jcarousel-control-next-vertical">&#9660;</a>

</div><!-- end bootstrap user sidebar coloumn-->
</div><!--end row->