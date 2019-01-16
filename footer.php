<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sticky footer &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Arief" >

    <!-- CSS -->
    <style type="text/css">
    		   

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 50px;
      }
      #footer {
        background-color: #1411dg;
        padding-top: 10px;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -10px;
          margin-right: -10px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 30px;
      }
      .container .credit {
        margin: 10px 0;
      }

      code {
        font-size: 80%;
      }

    </style>
  </head>



    <!-- Part 1: Wrap all page content here -->

    <div id="footer" class="navbar navbar-inverse navbar-fixed-bottom" style="background:black;">
      <div class="" style="text-align:center;">
        <p class="muted credit">Project <font color='white'><b>Responsi Praktikum Teknologi Cloud Computing</b></font>. <br> 
		
    <?php
			// Menghitung total memori yang digunakan
    function memory_usage()  {
        return ( ! function_exists('memory_get_usage')) ? '0' : round(memory_get_usage()/1024/1024, 2).'MB';;
    }
	
		?>Memori yang digunakan : <font color="yellow"><?php echo memory_usage();?></font>
			
      	
              
            </p>
      </div>
    </div>


