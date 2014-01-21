<?php
/*
Template Name: route-95
*/
?>

<?php get_header(); ?>
<div id="page-overlay">

<div id="route-header">
	<div id="route-circle-icon-95" class="route-circle-icon">
	</div>
	<div id="route-title">
	ROUTE 95 - South Coast / Santa Rosa
	</div>
<?php do_action('route_select'); ?>
	
</div><!-- #route-header -->


<div id="route-breadcrumb" class="breadcrumb">
		<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
	</div><!-- end #route-breadcrumb -->

<?php do_action('mendo_route_alert', '95'); ?>


<div id="route-two-col-wrap">
	<div id="route-col-left">
		<div id="route-desc">
Route 95 connects the South Coast with Santa Rosa, 7-days per week. Serves coastal communities from Point Arena south to Bodega Bay.		</div> <!-- end #route-desc -->
		<div id="route-schedule-box" class="route-box">
			<div id="route-schedule-box-title" class="route-title-box">
			 	<div id="route-schedule-box-title-text" class="route-title-box-text">
			 		Schedule
			 	</div> <!-- end #route-schedule-box-title-text -->
			 	<div id="route-schedule-popup-info-text">
			 	 (Click to pop-up a schedule for each route)
			 	</div> <!-- end#route-schedule-popup-info-text -->
			 	<br style="clear: both;" />
			</div> <!-- end #route-schedule-box-title -->
			<div id="route-days-of-week">
				7 Days a week
			</div> <!-- end #days-of-week -->
			<div id="schedule-buttons">
			<a href="http://www.mendocinotransit.org/routes/route-95/northbound"  >
				<div id="schedule-northbound-65" class="route-popup-button route-button-left route-button-first route-button-odd">
					<div class="popup-button-title">
					Northbound
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc" >
					Santa Rosa -> South Coast
					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-northbound-65 -->
				</a>
				<a href="http://www.mendocinotransit.org/routes/route-95/southbound"  >
				<div id="schedule-southbound-65" class="route-popup-button route-button-right route-button-last route-button-even"">
				<div class="popup-button-title">
					Southbound
					</div> <!-- end #popup-button-title -->
					<div class="popup-button-desc">
					South Coast-> Santa Rosa 
					</div> <!-- end popup-button-desc -->
				</div> <!-- end #schedule-southbound-65-->
				</a>
				<br style="clear: both;" />
			</div> <!-- end #schedule-buttons -->
			
			<div id="fare-table-link">
				<a href="/fares/#95">See fare table for this route</a> >>
			</div> <!-- end #fare-table-link -->
		</div> <!-- end #route-schedule-box -->
		
		
<div id="route-connections-box" class="route-box">
		<div id="route-connections-box-title" class="route-title-box">
			<div id="route-connections-box-title-text" class="route-title-box-text">
				Connections in Santa Rosa
			</div> <!-- end #route-connections-box-title-text -->
			<br style="clear: both;" />
		</div> <!-- end #route-connections-box-title -->
		<div id="route-connections-container">
			<div class="route-connection">
				<div class="route-connection-title">
					<?php echo(types_render_field("con-title-1", array("raw"=>"true","output"=>"html","show_name"=>"false"))); ?>
				</div> <!-- end .route-connection-title -->
				<div class="route-connection-desc">
					<?php echo(types_render_field("con-desc-1", array("raw"=>"true","output"=>"html","show_name"=>"false"))); ?>	
				</div> <!-- end .route-connection-desc -->
			</div> <!-- end .route-conneciton -->
			<div class="route-connection">
				<div class="route-connection-title">
					<?php echo(types_render_field("con-title-2", array("raw"=>"true","output"=>"html","show_name"=>"false"))); ?>
				</div> <!-- end .route-connection-title -->
				<div class="route-connection-desc">
<?php echo(types_render_field("con-desc-2", array("raw"=>"true","output"=>"html","show_name"=>"false"))); ?>
</div> <!-- end .route-connection-desc -->
			</div><!-- end .route-conneciton -->
			<div class="route-connection">
				<div class="route-connection-title">
<?php echo(types_render_field("con-title-3", array("raw"=>"true","output"=>"html","show_name"=>"false"))); ?>
				</div> <!-- end .route-connection-title -->
				<div class="route-connection-desc">
<?php echo(types_render_field("con-desc-3", array("raw"=>"true","output"=>"html","show_name"=>"false"))); ?>
</div> <!-- end .route-connection-desc -->
			</div><!-- end .route-conneciton -->
			<div class="route-connection">
				<div class="route-connection-title">
<?php echo(types_render_field("con-title-4", array("raw"=>"true","output"=>"html","show_name"=>"false"))); ?>
				</div> <!-- end .route-connection-title -->
				<div class="route-connection-desc">
<?php echo(types_render_field("con-desc-4", array("raw"=>"true","output"=>"html","show_name"=>"false"))); ?>
</div> <!-- end .route-connection-desc -->
			</div><!-- end .route-conneciton -->
			<div class="route-connection" class="route-connection-last">
				<div class="route-connection-title">
<?php echo(types_render_field("con-title-5", array("raw"=>"true","output"=>"html","show_name"=>"false"))); ?>
				</div> <!-- end .route-connection-title -->
				<div class="route-connection-desc">
<?php echo(types_render_field("con-desc-5", array("raw"=>"true","output"=>"html","show_name"=>"false"))); ?>
</div> <!-- end .route-connection-desc -->
			</div><!-- end .route-conneciton -->
		</div> <!-- end #route-connections-container -->
	</div> <!-- end #route-connections-box -->
	

	<div id="route-connections-box" class="route-box">
		<div id="route-connections-box-title" class="route-title-box">
			<div id="route-connections-box-title-text" class="route-title-box-text">
				PDF Timetable
			</div> <!-- end #route-connections-box-title-text -->
			<br style="clear: both;" />
		</div> <!-- end #route-connections-box-title -->

			<div class="route-inner-box">
				<div id="route-pdf-icon"></div><div id="route-pdf-link"><a href="/files/final/MTA%20schedule%20Rt%2095.pdf">Download PDF version of Route 95 timetable.</a></div> <!-- end #route-pdf-link -->
				<br style="clear: both;" />
			</div> <!-- end #route-inner-box" -->

	</div> <!-- end #route-connections-box -->
		
	</div> <!-- #end route col left -->
	
	
	<div id="route-col-right">

		<div id="route-connections-box-title" class="route-title-box">
			<div id="route-connections-box-title-text" class="route-title-box-text">
				Detail and Overview maps
			</div> <!-- end #route-connections-box-title-text -->
			<br style="clear: both;" />
		</div> <!-- end #route-connections-box-title -->



			<div id="route-map-image-col-wrap">
			<div id="route-map-col-left">
			
		
			
				<div class="route-detail-map-image-wrap">
					<div class="map-detail-title-bar">
						<div class="map-detail-title-text">
							Santa Rosa Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->
					
					<a href="/wp-content/images/detail_maps/Santa_Rosa_Detail-big.jpg" rel="lightbox"><img src="/wp-content/images/detail_maps/Santa_Rosa_Detail-sml.jpg" /></a>
				</div> <!-- end .route-detail-map-image-wrap -->
				
				
			</div> <!-- end #map-col-left -->
			<div id="route-map-col-right">
			<div class="route-detail-map-image-wrap">
					<div class="map-detail-title-bar">
						<div class="map-detail-title-text">
							Coastal Map Detail
						</div> <!-- end map-detail-title-text -->
						<div class="map-detail-zoom-icon">
						</div><!-- end .map-detail-zoom-icon -->
						<br style="clear: both;" />
					</div><!-- end map-detail-title-bar -->
					
					<a href="/wp-content/images/detail_maps/Coastal_Map_Detail_08-big.jpg" rel="lightbox"><img src="/wp-content/images/detail_maps/Coastal_Map_Detail_08-sml.jpg" /></a>
				</div> <!-- end .route-detail-map-image-wrap -->
				
				
			</div> <!-- end #map-col-right -->
		</div> <!-- end #route-map-image-col-wrap -->
		<br style="clear: both;" />

	</div> <!-- end #route-col-right -->
	<br style="clear: both;" />
</div> <!-- end #route-two-col-wrap -->


 


<?php the_post(); ?>
 
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>
      <h1 class="entry-title"><?php //the_title(); ?></h1>
 
 
</div> <!-- post -->



 
</div> <!-- page-overlay -->
                
<?php get_footer(); ?>