<?php
if (isset($_POST['submit6'])) {
    $sort1 ="Sort the data by point";
    $sort2 ="Sort the data by point";
    $sort3 ="Sort the data by point";
    $sort4 ="Sort the data by point";
    $sort5 ="Sort the data by point";
    $sort6 ="Sort the data by point";
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
$prob6 ="Group F - Morocco vs. Croatia: Winner Croatia with 0.58 probability
Group F - Belgium vs. Canada: Winner Belgium with 0.67 probability
Group F - Belgium vs. Morocco: Winner Belgium with 0.63 probability
Group F - Croatia vs. Canada: Winner Croatia with 0.62 probability
Group F - Croatia vs. Belgium: Winner Belgium with 0.60 probability
Group F - Canada vs. Morocco: Draw
";




    include("simulator.php");
} else {
    $qa_points = Null;
    $ec_points = Null;
    $se_points = Null;
    $ne_points = Null;
}
