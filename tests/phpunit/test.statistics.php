<?php

/**
 * Tests to test that that testing framework is testing tests. Meta, huh?
 *
 * @package wordpress-plugins-tests
 */
class Tests_Statistics extends WP_UnitTestCase {

    var $lp_id;
    var $variations;

    /**
     * setup
     */
    function setUp() {
        global $wp_rewrite;

        /* includes */
        include_once LANDINGPAGES_PATH . 'modules/module.install.php';
        include_once LANDINGPAGES_PATH . 'classes/class.statistics.php';

        $this->lp_id = inbound_create_default_post_type();

        /*  clear the stats */
        $this->variations = Landing_Pages_Statistics::get_variations($this->lp_id );
        foreach ($this->variations as $vid) {
            Landing_Pages_Statistics::set_impression_count( $this->lp_id , $vid, 0 );
            Landing_Pages_Statistics::set_conversion_count( $this->lp_id , $vid, 0 );
        }

        /* padding for the travis-ci console */
        echo "\r\n\r\n";

    }





    /**
     * Test is Landing_Pages_Statistics::read_statistics works
     */
    function test_read_statistics() {
        /* includes */
        include_once LANDINGPAGES_PATH . 'classes/class.statistics.php';

        $stats = Landing_Pages_Statistics::read_statistics( $this->lp_id );
        $this->assertEquals( count($stats) , 3 );
        $this->assertEquals( $stats['impressions'][0] , 0 );
        $this->assertEquals( $stats['conversions'][0] , 0 );
        $this->assertEquals( $stats['impressions'][1] , 0 );
        $this->assertEquals( $stats['conversions'][1] , 0 );
    }

    /**
     * launch a landing page
     */
    function test_landing_page_read() {
        /* includes */
        include_once LANDINGPAGES_PATH . 'classes/class.statistics.php';
		
		echo "http://inboundsoon.dev/\r\n";
        print_r(wp_remote_get( 'http://inboundsoon.dev/' ));   
        $permalink = get_post_permalink( $this->lp_id , true );
 
		echo $permalink."\r\n";
	
        print_r(wp_remote_get( $permalink ));   

        $response = wp_remote_get( $permalink );
        $response = wp_remote_get( $permalink );
        $response = wp_remote_get( $permalink );
        $response = wp_remote_get( add_query_arg( array('lp-variation-id'=> 0  ) , $permalink) );
        $response = wp_remote_get( add_query_arg( array('lp-variation-id'=> 1  ) , $permalink) );
        $stats = Landing_Pages_Statistics::read_statistics( $this->lp_id );
        print_r($stats);
        $this->assertEquals( $stats['impressions'][0] , 3 );
        $this->assertEquals( $stats['conversions'][0] , 0 );
        $this->assertEquals( $stats['impressions'][1] , 3 );
        $this->assertEquals( $stats['conversions'][1] , 0 );
    }
}


