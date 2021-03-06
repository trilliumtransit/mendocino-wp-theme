<?php

/*
Template Name: fares
*/


get_header(); ?>

<div id="page-overlay">

    <?php the_post(); ?>
        <header>
            <h1 class="entry-title main"><?php the_title(); ?></h1>
        </header>
            <?php //if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
		<br/>
        <hr />
		<br/>
        <main>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div id="page-title">

                <form id="fare_zones" class="hidden" method="POST" action="https://applications.trilliumtransit.com/clients/mendocino/calculate_fare_result.php">
                    <fieldset class="calculator-title">
                        <legend>Fare Calculator</legend>
                        <label for="start_zone">Start:</label>
                        <select name="start_zone" id="start_zone" onChange="update_end_zones(this);clear_fare_result();">
                            <option value="0">Select start zone first</option>
                        </select>
                        <label for="end_zone">End:</label>
                        <select name="end_zone" id="end_zone" onChange="clear_fare_result();">
                            <option value="0"></option>
                        </select>
                        <input type="submit" value="Calculate fare">

                        <div id="fare_result"></div>
                    </fieldset>
                </form>

                    <?php the_content(); ?>
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div> <!--page title-->
        </main>   
</div> <!-- page-overlay -->
<?php get_footer(); ?>
