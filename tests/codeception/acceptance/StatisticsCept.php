<?php 

/**
*  This test is desnged to test the impressions/conversions systems of landing pages.
*  Systems tested:
*   -  Dmummy landing page creation
*   -  Impression/Conversion UI display on landing page edit screen
*   -  Cear individual landing page stats buttons.
*   -  Manually setting impressions/conversions
*   -  Makes sure landing page does not 404
*   -  Frontend impression ajax systems
*   -  Variation rotation systems
*   -  Conversion tracking system for inbount form
*   -  Conversion tracking system for tracked link
*/

/* create test landing page 

$I = new AcceptanceTester($scenario);

$I->wantTo('Navigate to landing pages list');
$I->amOnPage( admin_url( 'edit.php?post_type=landing-page') );
$I->see( 'Landing Pages');

$I->wantTo('Open example landing page');
$I->amOnPage( admin_url( 'edit.php?post_type=landing-page') );
$I->click( [ 'link' => 'A/B Testing Landing Page Example']);

$I->wantTo('check if impressions are correct for variation a');
$imp = $I->grabTextFrom('#lp-variation-A .bab-stat-span-impressions');
$I->assertContains( '30' , $imp );

$I->wantTo('check check impressions for variation b');
$imp = $I->grabTextFrom('#lp-variation-B .bab-stat-span-impressions');
$I->assertContains( '35' , $imp , ''  );

$I->wantTo('check conversions for variation a');
$con = $I->grabTextFrom('#lp-variation-A .bab-stat-span-conversions');
$I->assertContains( '10' , $con , '' );

$I->wantTo('check conversions for variation b');
$con = $I->grabTextFrom('#lp-variation-B .bab-stat-span-conversions');
$I->assertContains( '15' , $con  );

$I->wantTo('check the conversion rate of variation a');
$per = $I->grabTextFrom('#lp-variation-A .bab-stat-span-conversion_rate');
$I->assertContains( '33' , $per  );

$I->wantTo('check the conversion rate of variation b');
$per = $I->grabTextFrom('#lp-variation-B .bab-stat-span-conversion_rate');
$I->assertContains( '43' , $per  );



*/