<?php /* Template: profile-custom */ ?>

<div class="um <?php echo $this->get_class( $mode ); ?> um-<?php echo $form_id; ?> um-role-<?php echo um_user('role'); ?> ">

	<div class="um-form">
	
		<?php do_action('um_profile_before_header', $args ); ?>

		
		<?php if ( um_is_on_edit_profile() ) { ?><form method="post" action=""><?php } ?>
		
			<?php do_action('um_profile_header_cover_area', $args ); ?>
			
				
			<?php do_action('um_profile_header', $args ); ?>
			
		
		
			<?php do_action('um_profile_navbar', $args ); ?>
            
	
	

            <div class="row">
	<div class="col-sm-9">
<!--custpm bootstrap two coloumn-->
        
		<!--ultimate member profile meta data-->



  <?php 
  $user_id = get_current_user_id();
  $single = true;
  $i=0;
  $key =array("cm_user_desc","cm_is_freelancer","cm_is_content_creator","cm_is_employer");//array to check  if these user meta is empty
  $key_freelancer_meta=array("cm_freelancer_desc,cm_freelancer_img,cm_freelancer_audio,cm_freelancer_video");//array to check if these freelancer meta are empty
  $key_content_meta=array("cm_content_creator_video,cm_content_creator_desc");//array to check if content creator meta are empty 
  $empty_meta=array();//array to hold the entire empty meta data set
  while($i<sizeof($key))
  {

    $meta=$key[$i];
    $value= get_user_meta( $user_id, $meta, $single );//query to check if user meta is empty
  if($value=="")
  {
    //store the empty meta data in  array
   array_push($empty_meta,$meta);


   
  }//end if
  else
  {

    
    //check if freelancer meta data is empty
    if($meta=="cm_is_freelancer")
    {

      $s_results= get_user_meta( $user_id,"cm_list_services", true );//get the list of services freelancr has chosen
      $s_results=explode(',',$s_results);
     $empty_service_freelancer_meta=array('type'=>'freelancer');//a string is added to identify that the array is for freelancr meta data
    
     foreach($s_results as $s_value)
     {
       $f=0;

      while($f<sizeof($key_freelancer_meta))
     {
     $meta_freelancer=$key_freelancer_meta[$f];
     global $wpdb;
     $f_result = $wpdb->get_results($wpdb->prepare("SELECT meta_value FROM wp_freelancers WHERE user_id =%d AND meta_type=%s AND meta_key=%s",$user_id,$s_value,$meta_freelancer));
     
     if(empty($f_result))
     {
    //store the empty meta data in an array
      
    array_push($empty_freelancer_meta,$meta_freelancer);

     } //end if
     $f++;
     }//end while


     
    if(!empty($empty_freelancer_meta))//check if empty freelancer meta exists for aservice
    {
      $empty_service_freelancer_meta[$s_value]=$empty_freelancer_meta;//assign empty freelancer meta data to each service key

    }//end if
     
    }//end foreach
    
   
     if(count($empty_service_freelancer_meta)!=1)
    {
    array_push($empty_meta,$empty_service_freelancer_meta);//add the empty freelancer service meta data into the main array
    }//end if


   }//end  freelancer related meta


  //check if content_creator meta data is empty
    
   /*
    if($meta=="cm_is_content_creator")
    {
    
    $empty_content_meta=array("content");//a string is added to identify that the array is for content creator meta data
    $c=0;
    while($c<sizeof($key_content_meta))
    {
     $meta_content=$key_content_meta[$c];
     global $wpdb;
     $c_result = $wpdb->get_results($wpdb->prepare("SELECT meta_value FROM wp_content_creator WHERE user_id =%d AND meta_key=%s",$user_id,$meta_content));
         
     if(empty($c_result))
     {
    //store the empty meta data in an array
      
    array_push($empty_content_meta,$meta_content);

     } //end if
     $c++;
    }//end while
    if(sizeof($empty_content_meta!=1))
    {
    array_push($empty_meta,$empty_content_meta);//add the empty content meta data into the main array
    }//end if
   }//end content creator related meta
   */
  }//end else
  $i++;

  }//end while 



  $j=1;
  
  //show pop up forms based on empty data
  foreach($empty_meta as $meta_value)
  {

    // show  user description questions
    if($meta_value=="cm_user_desc")
    {
    ?>
    <div id="popup<?php echo $j;?>" style="background-color: rgba(40, 123, 188, 0.44);<?php if($j!=1){?>display:none;<?php }?>">
    <h2>About</h2>
    <form  name="form_user_desc" action="" id="form_user_desc">
    <input type="hidden" name="id_user_desc" id="id_user_desc" value="<?php echo $j;?>"/>
    <div class="form-group">
    <label >Tell us something about yourself</label>
    <textarea name="text_user_desc" class="form-control" id="text_user_desc" placeholder="About"></textarea>
    </div>
    <button type="button" name="button_user_desc"  id="button_user_desc" class="btn btn-default">Save</button>
    </form>   
    </div>

    <?php
    $j++;
    }
  
     // show  freelancer  questions
    if($meta_value=="cm_is_freelancer")
    {

    ?>
     <div id="popup<?php echo $j;?>" style="background-color: rgba(40, 123, 188, 0.44);<?php if($j!=1){?>display:none;<?php }?>">

      <h2>Do you proide any services?</h2>
    <form  name="form_is_freelancer" action="" id="form_is_freelancer">
    <input type="hidden" name="id_is_freelancer" id="id_is_freelancer" value="<?php echo $j;?>"/>
    
    <div class="radio">
    <label>
    <input type="radio" name="radio_is_freelancer" id="radio_is_freelancer1" value="yes">
    Yes
    </label>
   </div>

   <div class="radio">
   <label>
    <input type="radio" name="radio_is_freelancer" id="radio_is_freelancer2" value="no">
    No
   </label>
  </div>
  <div style="display:none;" id="box_is_freelancer">
   What are your services?
  <select class="form-control" name="serviceslist_is_freelancer" id="serviceslist_is_freelancer">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  </select>   
  </div>
  <button type="button" name="button_is_freelancer"  id="button_is_freelancer" class="btn btn-default">Save</button>
  </form> 
   
   </div>

    <?php
    $j++;


     //freelancer desc,audio,video if freelancer meta  is not filled before

       global $wpdb;
     $s_result= get_user_meta( $user_id,"cm_list_services", true );//query to get lit of services freelancer has selected
     $k=1;
     foreach($s_result as $service_value)
     {

     ?> 
      <form id="popup_freelancer_related<?php echo $k;?>" style="display:none;">
      <input type="hidden" name="id_freelancer_related" value="<?php echo $k;?>">
      <?php if($k==sizeof($s_result)){
        ?>
        <input type="hidden" name="freelancer_related_last" value="<?php echo $j;?>">
        <?php
        }//end if
        ?>
      <button type="button" name="" id="button_freelancer_related<?php echo $k;?>">
      </form>
     <?php
     $k++;
     }//end foreach service list nd freelancer related questions



  }//end freelancer forms




    //show freelancer and content creator related questions
    if(is_array($meta_value))
    {
      ?>

      <div id="popup<?php echo $j;?>" style="background-color: rgba(40, 123, 188, 0.44);<?php if($j!=1){?>display:none;<?php }?>">
      <?php
       //show freelancer related questions
       if($meta_value["type"]=="freelancer")
       {
        $l=1;
        foreach($meta_value as $key_related=>$value_related)
        {
        
            if($key_related=="type")
           {
             //do nothing if the first key is type 
           }//end if

           else//do something
           {
             ?>
              <form id="form_freelancer_related<?php echo $l;?>" action="">
               


              <input type="hidden" name="id_freelancer_related"  value="<?php echo $l;?>"/>
               <?php if($l==count($meta_value)){
                ?>
              <input type="hidden" name="freelancer_related_last" value="<?php echo $j;?>">
              <?php
               }//end if
               ?>
              <?php
    
              foreach($value_selected as $freelancer_form_input)
              {
                //for each form show different inputs
                 switch($freelancer_form_input)
                {

                 case "cm_freelancer_desc":
                ?>

                   <div class="form-group">
                   <label for="">Write a description</label>
                    <textarea name="desc_freelancer"></textarea>
                   </div>
                <?php
                   break;
                 case "cm_freelancer_img":
                 ?>
                  <div class="form-group">
                  <label for="">Upload images</label>
                  <input type="file" class="form-control"  name="image_freelancer">
                  </div>
                <?php

                  break;
                case "cm_freelancer_audio":
                ?>

                  <div class="form-group">
                  <label for="">Upload audios</label>
                  <input type="file" class="form-control"  name="audio_freelancer">
                  </div>
                <?php
                   break;
                 case "cm_freelancer_video":
                ?>
                  <div class="form-group">
                  <label for="">Upload videos</label>
                  <input type="file" class="form-control"  name="video_freelancer">
                  </div>
                <?php
                  break;
                  default:

                }//end switch
      
              }//end foreach

            ?>  
    
             <button type="button" name="button_freelancer_related"  id="button_freelancer<?php echo $l;?>" class="btn btn-default">Save</button>
             </form>
              
              <?php

           }//end else
               
               $l++;
        }//end foreach


       }//end freelancer related questions
       ?>

      </div><!--end div popup-->
   <?php
   $j++;

    }
   
   
      // show  content creator questions
    if($meta_value=="cm_is_content_creator")
    {

    ?>
     <div id="popup<?php echo $j;?>" style="background-color: rgba(40, 123, 188, 0.44);<?php if($j!=1){?>display:none;<?php }?>">

      <h2>Content</h2>
    <form  name="form_is_content_creator" action="" id="form_is_content_creator">
    <input type="hidden" name="id_is_content_creator" id="id_is_content_creator" value="<?php echo $j;?>"/>
    <div class="radio">
    <label>
    <input type="radio" name="radio_is_content_creator" id="radio_is_content_creator1" value="yes">
    Yes
    </label>
   </div>

   <div class="radio">
   <label>
    <input type="radio" name="radio_is_content_creator" id="radio_is_content_creator2" value="no">
    No
   </label>
  </div>
  
  <button type="button" name="button_is_content_creator"  id="button_is_content_creator" class="btn btn-default">Save</button>
    
    </form> 
     </div>

    <?php
    $j++;
    }
     
     // show  employer questions
    if($meta_value=="cm_is_employer")
    {

    ?>
     <div id="popup<?php echo $j;?>" style="background-color: rgba(40, 123, 188, 0.44);<?php if($j!=1){?>display:none;<?php }?>">

      <h2>Employee</h2>
    <form  name="form_is_employer" action="" id="form_is_employer">
    <input type="hidden" name="id_is_employer" id="id_is_employer" value="<?php echo $j;?>"/>
    <div class="radio">
    <label>
    <input type="radio" name="radio_is_employer" id="radio_is_employer1" value="yes">
    Yes
    </label>
   </div>

   <div class="radio">
   <label>
    <input type="radio" name="radio_is_employer" id="radio_is_employer2" value="no">
    No
   </label>
  </div>
  
  <button type="button" name="button_is_employer"  id="button_is_employer" class="btn btn-default">Save</button>
    </form>
     </div>

    <?php
    $j++;
    } 
  }//end foreach loop



?>



















  <section class="biodata">
<div class="well well-lg" id="biodata">
<h2 class="text-center">About</h2>
p>Lorem ipsum dolor sit amet, ex mucius eligendi recusabo nam, an mei sumo theophrastus. Omnesque phaedrum temporibus no quo. Vocent senserit salutandi eam ut, eu zril verterem iracundia has. Te quo natum utamur alienum, usu veniam doctus vituperata cu, dicta minim definitiones ei mel. Per meliore suscipiantur ei, qui eu modo tation. Id duo natum eligendi.

</p>
</div>
</section>






<!-- frelancer-->
<section class="freelancer" >
<div class="well well-lg" style="background-color:#ffffff;">
<h2 class="text-center">Freelncer</h2>

<hr>


<section class="portfolio">
  <div class="container">
    <div class="row">
 
      <ul class="portfolio-sorting list-inline text-center">
        <li><a href="#" data-group="all" class="active">All</a></li>
        <li><a href="#" data-group="people">People</a></li>
        <li><a href="#" data-group="simpsons">Simpsons</a></li>
        <li><a href="#" data-group="futurama">Futurama</a></li>
      </ul> <!--end portfolio sorting -->
 
      <ul class="portfolio-items list-unstyled" id="grid">
 
        <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["people"]'>
          <figure class="portfolio-item">
            <a href="#">
              <img src="http://lorempixel.com/700/400/people/1" alt="Item 1" class="img-responsive">
            </a>
          </figure>
        </li>
 
        <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["people"]'>
            <figure class="portfolio-item">
                <a href="#">
                    <img src="http://lorempixel.com/700/400/people/7" alt="" class="img-responsive">
                </a>
            </figure>
        </li>
 
       <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["futurama"]'>
          <figure class="portfolio-item">
              <a href="#">
                  <img src="http://lorempicsum.com/futurama/700/400/1" alt="" class="img-responsive">
              </a>
          </figure>
        </li>
 
        <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["futurama"]'>
          <figure class="portfolio-item">
              <a href="#">
                  <img src="http://lorempicsum.com/futurama/700/400/2" alt="" class="img-responsive">
              </a>
          </figure>
        </li>
 
        <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["simpsons", "people"]'>
          <figure class="portfolio-item">
              <a href="#">
                  <img src="http://lorempicsum.com/simpsons/700/400/1" alt="" class="img-responsive">
              </a>
          </figure>
        </li>
 
        <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["simpsons"]'>
          <figure class="portfolio-item">
              <a href="#">
                  <img src="http://lorempicsum.com/simpsons/700/400/3" alt="" class="img-responsive">
              </a>
          </figure>
        </li>
 
        <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["people"]'>
            <figure class="portfolio-item">
                <a href="#">
                    <img src="http://lorempixel.com/700/400/people/9" alt="" class="img-responsive">
                </a>
            </figure>
        </li>
 
         <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["simpsons"]'>
          <figure class="portfolio-item">
              <a href="#">
                  <img src="http://lorempicsum.com/simpsons/700/400/4" alt="" class="img-responsive">
              </a>
          </figure>
        </li>
 
        <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["futurama"]'>
          <figure class="portfolio-item">
              <a href="#">
                  <img src="http://lorempicsum.com/futurama/700/400/5" alt="" class="img-responsive">
              </a>
          </figure>
        </li>
 
        <!-- sizer -->
        <li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>
        
      </ul> <!--end portfolio grid -->
 
      </div> <!--end row -->
    </div> <!-- end container-->
</section>



</div><!--end well-->

</section>
<!--end freelancer-->
<script>



var shuffleme = (function( $ ) {

  'use strict';

  var $grid = $('#grid'), //locate what we want to sort 

      $filterOptions = $('.portfolio-sorting li'),  //locate the filter categories
      $sizer = $grid.find('.shuffle_sizer'),    //sizer stores the size of the items
 
  init = function() {

 
    // None of these need to be executed synchronously
    setTimeout(function() {
      listen();
      setupFilters();
    }, 100);
 
    // instantiate the plugin
    $grid.shuffle({
      itemSelector: '[class*="col-"]',
      sizer: $sizer    
    });
  },      
 
  // Set up button clicks
  setupFilters = function() {
    var $btns = $filterOptions.children();
    $btns.on('click', function(e) {

      e.preventDefault();

      var $this = $(this),
          isActive = $this.hasClass( 'active' ),
          group = isActive ? 'all' : $this.data('group');
 
      // Hide current label, show current label in title
      if ( !isActive ) {
        $('.portfolio-sorting li a').removeClass('active');
      }
 
      $this.toggleClass('active');
      
      // Filter elements
      $grid.shuffle( 'shuffle', group );

    });
 
    $btns = null;
  },
 
  // Re layout shuffle when images load. This is only needed
  // below 768 pixels because the .picture-item height is auto and therefore
  // the height of the picture-item is dependent on the image
  // I recommend using imagesloaded to determine when an image is loaded
  // but that doesn't support IE7
  listen = function() {
    var debouncedLayout = $.throttle( 300, function() {
      $grid.shuffle('update');
    });
 
    // Get all images inside shuffle
    $grid.find('img').each(function() {
      var proxyImage;
 
      // Image already loaded
      if ( this.complete && this.naturalWidth !== undefined ) {
        return;
      }
 
      // If none of the checks above matched, simulate loading on detached element.
      proxyImage = new Image();
      $( proxyImage ).on('load', function() {
        $(this).off('load');
        debouncedLayout();
      });
 
      proxyImage.src = this.src;
    });
 
    // Because this method doesn't seem to be perfect.
    setTimeout(function() {
      debouncedLayout();
    }, 500);
  };      
 
  return {
    init: init
  };
}( jQuery ));
 
jQuery(document).ready(function()
{
  shuffleme.init(); //filter portfolio
});

</script>



  <section class="content_creator">
<div class="well well-lg" style="background-color: rgba(40, 123, 188, 0.44);">
<h2 class="text-center">Content creator</h2>

<?php echo do_shortcode("[huge_it_portfolio id='2']"); ?>


</div>

</section>




       <?php
				
			$nav = $ultimatemember->profile->active_tab;

			$subnav = ( get_query_var('subnav') ) ? get_query_var('subnav') : 'default';
			
				print "<div class='um-profile-body $nav $nav-$subnav'>";
				
				// Custom hook to display tabbed content
				do_action("um_profile_content_{$nav}", $args);
				do_action("um_profile_content_{$nav}_{$subnav}", $args);
				print "</div>";
			
				
		?>
		
<?php if ( um_is_on_edit_profile() ) { ?></form><?php } ?>
<!--end ultimate member profile meta data-->




		<h3 class="text-center">You might be interested in</h3>

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
<?php get_sidebar('user'); ?>
     <!--end bootstrap custom two coloumn code-->
			
		

		
</div>
	
</div>




       

