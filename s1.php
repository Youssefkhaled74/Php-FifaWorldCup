<?php
    if(isset($_POST['submit'])){    
        $sort1 ="Sort the data by point";
        $qa_points = "0 Point";
        $ec_points = "6 Point";
        $se_points = "3 Point";
        $ne_points = "9 Point";
        $prob1 = "
        ---------- Starting Analysis for Group A ----------
Group A - Qatar vs. Ecuador: Winner Ecuador with 0.60 probability.<br>.
Group A - Senegal vs. Netherlands: Winner Netherlands with 0.59 probability.<br>.
Group A - Qatar vs. Senegal: Winner Senegal with 0.58 probability.<br>.
Group A - Netherlands vs. Ecuador: Winner Netherlands with 0.66 probability.<br>.
Group A - Ecuador vs. Senegal: Winner Ecuador with 0.53 probability.<br>.
Group A - Netherlands vs. Qatar: Winner Netherlands with 0.69 probability.<br>.";
        include("simulator.php");
    }
    else
    {
        $qa_points = Null;
        $ec_points = Null;
        $se_points = Null;
        $ne_points = Null;
    }
?>