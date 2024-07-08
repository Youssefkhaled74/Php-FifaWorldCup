<?php
    if(isset($_POST['submit2'])){
        $sort1 ="Sort the data by point";
        $sort2 ="Sort the data by point";
        $sort3 ="Sort the data by point";
        $sort4 ="Sort the data by point";
        $sort5 ="Sort the data by point";
        $sort6 ="Sort the data by point";
        $sort7 ="Sort the data by point";
        $sort8 ="Sort the data by point";
        $en_points = "<b>9 Point</b>";
        $us_points = "<b>4 Point</b>";
        $wa_points = "<b>4 Point</b>";
        $ir_points = "<b>0 Point</b>";
        $prob2 = "
            Group B - England vs. Iran: Winner England with 0.60 probability.<br>.
            Group B - United States vs. Wales: Draw.<br>.
            Group B - Wales vs. Iran: Winner Wales with 0.54 probability.<br>.
            Group B - England vs. United States: Winner England with 0.58 probability.<br>.
            Group B - Wales vs. England: Winner England with 0.60 probability.<br>.
            Group B - Iran vs. United States: Winner United States with 0.57 probability.<br>.";
        $qa_points = "<b>0 Point</b>";
        $ec_points = "<b>6 Point</b>";
        $se_points = "<b>3 Point</b>";
        $ne_points = "<b>9 Point</b>";
        $prob1 = "
            Group A - Qatar vs. Ecuador: Winner Ecuador with 0.60 probability.<br>.
            Group A - Senegal vs. Netherlands: Winner Netherlands with 0.59 probability.<br>.
            Group A - Qatar vs. Senegal: Winner Senegal with 0.58 probability.<br>.
            Group A - Netherlands vs. Ecuador: Winner Netherlands with 0.66 probability.<br>.
            Group A - Ecuador vs. Senegal: Winner Ecuador with 0.53 probability.<br>.
            Group A - Netherlands vs. Qatar: Winner Netherlands with 0.69 probability.<br>.";
    
    
    
        $arg_points = "<b>9 Point</b>";
        $pol_points = "<b>4 Point</b>";
        $mex_points = "<b>4 Point</b>";
        $sau_points = "<b>0 Point</b>";
        $prob3 = "
    Group C - Argentina vs. Saudi Arabia: Winner Argentina with 0.70 probability.<br>.
    Group C - Mexico vs. Poland: Draw.<br>.
    Group C - Poland vs. Saudi Arabia: Winner Poland with 0.64 probability.<br>.
    Group C - Argentina vs. Mexico: Winner Argentina with 0.62 probability.<br>.
    Group C - Poland vs. Argentina: Winner Argentina with 0.64 probability.<br>.
    Group C - Saudi Arabia vs. Mexico: Winner Mexico with 0.64 probability.<br>.
    
    ";
    $fra_points ="<b>7 point</b>";
    $aus_points ="<b>1 point</b>";
    $den_points ="<b>7 point</b>";
    $tun_points ="<b>1 point</b>";
    $prob4 ="Group D - Denmark vs. Tunisia: Winner Denmark with 0.63 probability.<br>.
    Group D - France vs. Australia: Winner France with 0.65 probability.<br>.
    Group D - Tunisia vs. Australia: Draw.<br>.
    Group D - France vs. Denmark: Draw.<br>.
    Group D - Australia vs. Denmark: Winner Denmark with 0.65 probability.<br>.
    Group D - Tunisia vs. France: Winner France with 0.63 probability.<br>.";
    
    
    
    $spa_points ="<b>7 point</b>";
    $cos_points ="<b>1 point</b>";
    $ger_points ="<b>7 point</b>";
    $jap_points ="<b>1 point</b>";
    
    $prob5 ="Group E - Germany vs. Japan: Winner Germany with 0.59 probability.<br>.
    Group E - Spain vs. Costa Rica: Winner Spain with 0.68 probability.<br>.
    Group E - Japan vs. Costa Rica: Draw.<br>.
    Group E - Spain vs. Germany: Draw.<br>.
    Group E - Japan vs. Spain: Winner Spain with 0.62 probability.<br>.
    Group E - Costa Rica vs. Germany: Winner Germany with 0.60 probability.<br>.";
    
    
    $bel_points ="<b>9 point</b>";
    $can_points ="<b>1 point</b>";
    $mor_points ="<b>1 point</b>";
    $cro_points ="<b>6 point</b>";
    
    $prob6 ="Group F - Morocco vs. Croatia: Winner Croatia with 0.58 probability.<br>.
    Group F - Belgium vs. Canada: Winner Belgium with 0.67 probability.<br>.
    Group F - Belgium vs. Morocco: Winner Belgium with 0.63 probability.<br>.
    Group F - Croatia vs. Canada: Winner Croatia with 0.62 probability.<br>.
    Group F - Croatia vs. Belgium: Winner Belgium with 0.60 probability.<br>.
    Group F - Canada vs. Morocco: Draw.<br>.
    ";
    
    $bra_points ="<b>7 point</b>";
    $swi_points ="<b>7 point</b>";
    $ser_points ="<b>3 point</b>";
    $cam_points ="<b>0 point</b>";
    $prob7 ="Group G - Switzerland vs. Cameroon: Winner Switzerland with 0.62 probability.<br>.
    Group G - Brazil vs. Serbia: Winner Brazil with 0.63 probability.<br>.
    Group G - Cameroon vs. Serbia: Winner Serbia with 0.61 probability.<br>.
    Group G - Brazil vs. Switzerland: Draw.<br>.
    Group G - Serbia vs. Switzerland: Winner Switzerland with 0.56 probability.<br>.
    Group G - Cameroon vs. Brazil: Winner Brazil with 0.71 probability.<br>.";
    
    $por_points ="<b>7 point</b>";
    $gha_points ="<b>0 point</b>";
    $uru_points ="<b>7 point</b>";
    $kor_points ="<b>3 point</b>";
    $prob8 ="Group H - Uruguay vs. South Korea: Winner Uruguay with 0.60 probability.<br>.
    Group H - Portugal vs. Ghana: Winner Portugal with 0.71 probability.<br>.
    Group H - South Korea vs. Ghana: Winner South Korea with 0.69 probability.<br>.
    Group H - Portugal vs. Uruguay: Draw.<br>.
    Group H - Ghana vs. Uruguay: Winner Uruguay with 0.69 probability.<br>.
    Group H - South Korea vs. Portugal: Winner Portugal with 0.63 probability.<br>.";

    // $m_16_1="Netherlands vs. United States";
    setcookie ( "m_16_1" , "Netherlands vs. United States" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    setcookie ( "m_16_2" , "Argentina vs. Denmark" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    setcookie ( "m_16_3" , "Spain vs. Croatia" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    setcookie ( "m_16_4" , "Brazil vs. Uruguay" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    setcookie ( "m_16_5" , "Ecuador vs. England" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    setcookie ( "m_16_6" , "Poland vs. France" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    setcookie ( "m_16_7" , "Germany vs. Belgium" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    setcookie ( "m_16_8" , "Switzerland vs. Portugal" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day


    setcookie ( "m_8_1" , "Netherlands vs. Argentina" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    setcookie ( "m_8_2" , "Spain vs. Brazil" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    setcookie ( "m_8_3" , "England vs. France" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    setcookie ( "m_8_4" , "Belgium vs. Portugal" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day

    setcookie ( "m_4_1" , "Netherlands vs. Brazil" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    setcookie ( "m_4_2" , "France vs. Portugal" , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
    
    setcookie ( "m_2_1" , Null , time() + (86400 * 30) ,  "/" ); // 86400 = 1 day
// $m_16_2="Argentina vs. Denmark";
// $m_16_3="Spain vs. Croatia";
// $m_16_4="Brazil vs. Uruguay";
// $m_16_5="Ecuador vs. England";
// $m_16_6="Poland vs. France";
// $m_16_7="Germany vs. Belgium";
// $m_16_8="Switzerland vs. Portugal";

        $probability_16_1 = "Netherlands vs. United States: Netherlands advances with prob 0.55.<br>";
        $probability_16_2 = "Argentina vs. Denmark: Argentina advances with prob 0.59.<br>";
        $probability_16_3 = "Spain vs. Croatia: Spain advances with prob 0.57.<br>";
        $probability_16_4 = "Brazil vs. Uruguay: Brazil advances with prob 0.60.<br>";
        $probability_16_5 = "Ecuador vs. England: England advances with prob 0.65.<br>";
        $probability_16_6 = "Poland vs. France: France advances with prob 0.60.<br>";
        $probability_16_7 = "Germany vs. Belgium: Belgium advances with prob 0.50.<br>";
        $probability_16_8 = "Switzerland vs. Portugal: Portugal advances with prob 0.52.<br>";
        $probability_8_1 = "Netherlands vs. Argentina: Netherlands advances with prob 0.52.<br>";
        $probability_8_2 = "Spain vs. Brazil: Brazil advances with prob 0.51.<br>";
        $probability_8_3 = "England vs. France: France advances with prob 0.51.<br>";
        $probability_8_4 = "Belgium vs. Portugal: Portugal advances with prob 0.52.<br>";
        // $probability_4_1 = "Netherlands vs. Brazil: Brazil advances with prob 0.52";
        // $probability_4_2 = "France vs. Portugal: Portugal advances with prob 0.52";
        // $probability_2_1 = "Brazil vs. Portugal: Brazil advances with prob 0.52";
        // include("fix.php");   
        include("simulator.php");       
        // header("location:http://localhost/fifa%20world%20cup/fix.php");
    }
    else
    {

    }
?>