<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Cup Fantasy - Simulator</title>
    <link rel="stylesheet" href="gs.css">
    <style>
        .group-table {
            width: 100%;
            border-collapse: separate;
            margin-top: 30px;
            margin-bottom: 1px;
            /* Add margin between groups */
            border: 2px solid black;
            /* Add bold border */
            border-radius: 10px;
            /* Make edges curved with a radius of 10px */
        }

        .group-table th,
        .group-table td {
            padding: 8px;
            text-align: left;
            padding-left: 30px;
        }

        .group-table th {
            background-color: #f2f2f2;
        }

        .flag {
            width: 20px;
            /* Adjust the size of the flag images */
            height: 20px;
            margin-right: 5px;
        }

        .group-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1px;
        }

        .group-column {
            flex: 1;
            margin-right: 5px;
        }

        /* Style for clickable buttons */
        .country-button {
            display: inline-block;
            padding: 10px;
            /* Adjusted padding */
            background-color: #ffffffcc;
            color: #840622cc;
            text-decoration: none;
            border-radius: 100px;
            margin-bottom: 5px;
        }

        .country-button:hover {
            background-color: rgb(86, 4, 44);
        }

        /* Style for simulate button */
        .simulate-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #840622cc;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            margin-top: 10px;
            text-align: center;
        }

        .simulate-btn:hover {
            background-color: #56042c;
        }
        .prob{
            width: 50%;
            border-collapse: separate;
            margin-top: 30px;
            margin-bottom: 1px;
            border: 2px solid black;
            border-radius: 10px;
            font-weight: bold;
            color: red;
        }
        .prob2{
            width: 95%;
            border-collapse: separate;
            margin-top: 30px;
            margin-bottom: 1px;
            border: 2px solid black;
            border-radius: 10px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>World Cup Fantasy</h1>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="fix.php">Fixtures</a></li>
                <li><a href="gs.html">Group Stages</a></li>
                <li><a href="simulator.php" class="active">Simulator</a></li>
            </ul>
        </nav>
    </div>
    <div class="container" id="simulator">
        <main class="main-content">
            <!-- First row of groups -->
            <div class="group-row">
                <d class="group-column">
                    <!-- Table for Group A -->
                    <?php if (!isset($sort1)) { ?>
                        <table class="group-table">
                            <thead>
                                <tr>
                                    <th colspan="2">Group A</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="Teams info/qatar.html" class="country-button"><img class="flag" src="qatar.jpeg" alt="Qatar Flag"> <b>Qatar</b></a><?php
                                                                                                                                                                    if (isset($qa_points)) {
                                                                                                                                                                        echo $qa_points;
                                                                                                                                                                    }
                                                                                                                                                                    ?> </td>
                                </tr>


                                <tr>
                                    <td><a href="Teams info/ecuador.html" class="country-button"><img class="flag" src="ecuador.jpeg" alt="Ecuador Flag"> <b>Ecuador</b></a>
                                        <?php
                                        if (isset($ec_points)) {
                                            echo $ec_points;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Teams info/senegal.html" class="country-button"><img class="flag" src="senegal.jpeg" alt="Senegal Flag"> <b>Senegal</b></a>
                                        <?php
                                        if (isset($se_points)) {
                                            echo $se_points;
                                        }
                                        ?></td>
                                </tr>
                                <tr>
                                    <td><a href="Teams info/netherlands.html" class="country-button"><img class="flag" src="netherlands.jpeg" alt="Netherlands Flag"> <b>Netherlands</b></a>
                                        <?php
                                        if (isset($ne_points)) {
                                            echo $ne_points;
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <?php
                    } else {
                    ?>
                        <table class="group-table">
                            <thead>
                                <tr>
                                    <th colspan="2">Group A</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="Teams info/netherlands.html" class="country-button"><img class="flag" src="netherlands.jpeg" alt="Netherlands Flag"> <b>Netherlands</b></a>
                                        <?php
                                        if (isset($ne_points)) {
                                            echo $ne_points;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="Teams info/ecuador.html" class="country-button"><img class="flag" src="ecuador.jpeg" alt="Ecuador Flag"> <b>Ecuador</b></a>
                                        <?php
                                        if (isset($ec_points)) {
                                            echo $ec_points;
                                        }
                                        ?>
                                    </td>
                                <tr>
                                    <td><a href="Teams info/senegal.html" class="country-button"><img class="flag" src="senegal.jpeg" alt="Senegal Flag"> <b>Senegal</b></a>
                                        <?php
                                        if (isset($se_points)) {
                                            echo $se_points;
                                        }
                                        ?></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td><a href="Teams info/qatar.html" class="country-button"><img class="flag" src="qatar.jpeg" alt="Qatar Flag"> <b>Qatar</b></a><?php
                                                                                                                                                                    if (isset($qa_points)) {
                                                                                                                                                                        echo $qa_points;
                                                                                                                                                                    }
                                                                                                                                                                    ?> </td>
                                </tr>


                            </tbody>
                        </table>
                    <?php
                    }
                    ?>
                    <form action="s1.php" method="POST">
                        <button class="simulate-btn" name="submit" onclick="startSimulating('Group A')">Start Simulating</button>
                    </form>
                    <p class="prob">
                        <?php
                        if (isset($prob1)) {
                            echo $prob1;
                        }
                        ?>
                    </p>
            </div>
            <div class="group-column">
                <!-- Table for Group B -->
                <?php if (!isset($sort2)) { ?>
                    <table class="group-table">
                        <thead>
                            <tr>
                                <th colspan="2">Group B</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="Teams info/england.html" class="country-button"><img class="flag" src="england.jpeg" alt="England Flag"> <b>England</b></a>
                                    <?php
                                    if (isset($en_points)) {
                                        echo $en_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/iran.html" class="country-button"><img class="flag" src="IR Iran.jpeg" alt="IR Iran Flag"> <b>IR Iran</b></a>
                                    <?php
                                    if (isset($ir_points)) {
                                        echo $ir_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/usa.html" class="country-button"><img class="flag" src="usa.jpeg" alt="USA Flag"> <b>USA</b></a>
                                    <?php
                                    if (isset($us_points)) {
                                        echo $us_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/wales.html" class="country-button"><img class="flag" src="wales.jpeg" alt="Wales Flag"> <b>Wales</b></a>
                                    <?php
                                    if (isset($wa_points)) {
                                        echo $wa_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php
                } else {
                ?>
                    <table class="group-table">
                        <thead>
                            <tr>
                                <th colspan="2">Group B</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="Teams info/england.html" class="country-button"><img class="flag" src="england.jpeg" alt="England Flag"> <b>England</b></a>
                                    <?php
                                    if (isset($en_points)) {
                                        echo $en_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/usa.html" class="country-button"><img class="flag" src="usa.jpeg" alt="USA Flag"> <b>USA</b></a>
                                    <?php
                                    if (isset($us_points)) {
                                        echo $us_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/wales.html" class="country-button"><img class="flag" src="wales.jpeg" alt="Wales Flag"> <b>Wales</b></a>
                                    <?php
                                    if (isset($wa_points)) {
                                        echo $wa_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/iran.html" class="country-button"><img class="flag" src="IR Iran.jpeg" alt="IR Iran Flag"> <b>IR Iran</b></a>
                                    <?php
                                    if (isset($ir_points)) {
                                        echo $ir_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php
                }
                ?>

                <form action="s2.php" method="POST">
                    <button class="simulate-btn" name="submit2" onclick="startSimulating('Group B')">Start Simulating</button>
                </form>
                <p class="prob">
                    <?php
                    if (isset($prob2)) {
                        echo $prob2;
                    }
                    ?>
                </p>
            </div>
            <div class="group-column">
                <!-- Table for Group C -->
                <?php if (!isset($sort3)) { ?>
                    <table class="group-table">
                        <thead>
                            <tr>
                                <th colspan="2">Group C</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="Teams info/argentina.html" class="country-button"><img class="flag" src="argentina.jpeg" alt="Argentina Flag"> <b>Argentina</b></a>
                                    <?php
                                    if (isset($arg_points)) {
                                        echo $arg_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/saudi arabia.html" class="country-button"><img class="flag" src="saudi arabia.jpeg" alt="Saudi Arabia Flag"> <b>Saudi Arabia</b></a>
                                    <?php
                                    if (isset($sau_points)) {
                                        echo $sau_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/mexico.html" class="country-button"><img class="flag" src="mexico.jpeg" alt="Mexico Flag"> <b>Mexico</b></a>
                                    <?php
                                    if (isset($mex_points)) {
                                        echo $mex_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/poland.html" class="country-button"><img class="flag" src="poland.jpeg" alt="Poland Flag"> <b>Poland</b></a>
                                    <?php
                                    if (isset($pol_points)) {
                                        echo $pol_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php
                } else {
                ?>
                    <table class="group-table">
                        <thead>
                            <tr>
                                <th colspan="2">Group C</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="Teams info/argentina.html" class="country-button"><img class="flag" src="argentina.jpeg" alt="Argentina Flag"> <b>Argentina</b></a>
                                    <?php
                                    if (isset($arg_points)) {
                                        echo $arg_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/poland.html" class="country-button"><img class="flag" src="poland.jpeg" alt="Poland Flag"> <b>Poland</b></a>
                                    <?php
                                    if (isset($pol_points)) {
                                        echo $pol_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/mexico.html" class="country-button"><img class="flag" src="mexico.jpeg" alt="Mexico Flag"> <b>Mexico</b></a>
                                    <?php
                                    if (isset($mex_points)) {
                                        echo $mex_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/saudi arabia.html" class="country-button"><img class="flag" src="saudi arabia.jpeg" alt="Saudi Arabia Flag"> <b>Saudi Arabia</b></a>
                                    <?php
                                    if (isset($sau_points)) {
                                        echo $sau_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php
                }
                ?>
                <form action="s3.php" method="POST">
                    <button class="simulate-btn" name="submit3" onclick="startSimulating('Group C')">Start Simulating</button>
                </form>
                <p class="prob">
                    <?php
                    if (isset($prob3)) {
                        echo $prob3;
                    }
                    ?>
                </p>
            </div>
            <div class="group-column">
                <!-- Table for Group D -->
                <?php if (!isset($sort4)) { ?>
                    <table class="group-table">
                        <thead>
                            <tr>
                                <th colspan="2">Group D</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="Teams info/france.html" class="country-button"><img class="flag" src="france.jpeg" alt="France Flag"> <b>France</b></a></td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/australia.html" class="country-button"><img class="flag" src="australia.jpeg" alt="Australia Flag"> <b>Australia</b></a></td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/denmark.html" class="country-button"><img class="flag" src="denmark.jpeg" alt="Denmark Flag"> <b>Denmark</b></a></td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/tunisia.html" class="country-button"><img class="flag" src="tunisia.jpeg" alt="Tunisia Flag"> <b>Tunisia</b></a></td>
                            </tr>
                        </tbody>
                    </table>
                <?php
                } else {
                ?>
                    <table class="group-table">
                        <thead>
                            <tr>
                                <th colspan="2">Group D</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="Teams info/france.html" class="country-button"><img class="flag" src="france.jpeg" alt="Argentina Flag"> <b>France</b></a>
                                    <?php
                                    if (isset($fra_points)) {
                                        echo $fra_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/denmark.html" class="country-button"><img class="flag" src="denmark.jpeg" alt="Mexico Flag"> <b>Denmark</b></a>
                                    <?php
                                    if (isset($den_points)) {
                                        echo $den_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/tunisia.html" class="country-button"><img class="flag" src="tunisia.jpeg" alt="Saudi Arabia Flag"> <b>Tunisia</b></a>
                                    <?php
                                    if (isset($tun_points)) {
                                        echo $tun_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="Teams info/australia.html" class="country-button"><img class="flag" src="australia.jpeg" alt="Poland Flag"> <b>Australia</b></a>
                                    <?php
                                    if (isset($aus_points)) {
                                        echo $aus_points;
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php
                }
                ?>
                <form action="s4.php" method="POST">
                    <button class="simulate-btn" name="submit4" onclick="startSimulating('Group D')">Start Simulating</button>
                </form>
                <p class="prob">
                    <?php
                    if (isset($prob4)) {
                        echo $prob4;
                    }
                    ?>
                </p>
            </div>
    </div>
    <!-- Second row of groups -->
    <div class="group-row">
        <div class="group-column">
            <!-- Table for Group E -->
            <?php if (!isset($sort4)) { ?>
                <table class="group-table">
                    <thead>
                        <tr>
                            <th colspan="2">Group E</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="Teams info/spain.html" class="country-button"><img class="flag" src="spain.jpeg" alt="Spain Flag"> <b>Spain</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/costarica.html" class="country-button"><img class="flag" src="costa rica.jpeg" alt="Costa Rica Flag"> <b>Costa Rica</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/germany.html" class="country-button"><img class="flag" src="germany.jpeg" alt="Germany Flag"> <b>Germany</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/japan.html" class="country-button"><img class="flag" src="japan.jpeg" alt="Japan Flag"> <b>Japan</b></a></td>
                        </tr>
                    </tbody>
                </table>
            <?php
            } else {
            ?>
                <table class="group-table">
                    <thead>
                        <tr>
                            <th colspan="2">Group D</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="Teams info/spain.html" class="country-button"><img class="flag" src="spain.jpeg" alt="Spain Flag"> <b>Spain</b></a>
                                <?php
                                if (isset($spa_points)) {
                                    echo $spa_points;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/germany.html" class="country-button"><img class="flag" src="germany.jpeg" alt="Germany Flag"> <b>Germany</b></a></a>
                                <?php
                                if (isset($ger_points)) {
                                    echo $ger_points;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/japan.html" class="country-button"><img class="flag" src="japan.jpeg" alt="Japan Flag"> <b>Japan</b></a>
                                <?php
                                if (isset($jap_points)) {
                                    echo $jap_points;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/costarica.html" class="country-button"><img class="flag" src="costa rica.jpeg" alt="Costa Rica Flag"> <b>Costa Rica</b></a></a>
                                <?php
                                if (isset($cos_points)) {
                                    echo $cos_points;
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php
            }
            ?>
            <form action="s5.php" method="POST">
                <button class="simulate-btn" name="submit5" onclick="startSimulating('Group E')">Start Simulating</button>
            </form>
            <p class="prob2">
                <?php
                if (isset($prob5)) {
                    echo $prob5;
                }
                ?>
            </p>
        </div>
        <div class="group-column">
            <!-- Table for Group F -->
            <?php if (!isset($sort6)) { ?>
                <table class="group-table">
                    <thead>
                        <tr>
                            <th colspan="2">Group F</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="Teams info/belgium.html" class="country-button"><img class="flag" src="belgium.jpeg" alt="Belgium Flag"> <b>Belgium</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/canada.html" class="country-button"><img class="flag" src="canada.jpeg" alt="Canada Flag"> <b>Canada</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/morocco.html" class="country-button"><img class="flag" src="morocco.jpeg" alt="Morocco Flag"> <b>Morocco</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/croatia.html" class="country-button"><img class="flag" src="croatia.jpeg" alt="Croatia Flag"> <b>Croatia</b></a></td>
                        </tr>
                    </tbody>
                </table>
            <?php
            } else {
            ?>
                <table class="group-table">
                    <thead>
                        <tr>
                            <th colspan="2">Group D</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="Teams info/belgium.html" class="country-button"><img class="flag" src="belgium.jpeg" alt="Belgium Flag"> <b>Belgium</b></a>
                                <?php
                                if (isset($bel_points)) {
                                    echo $bel_points;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/croatia.html" class="country-button"><img class="flag" src="croatia.jpeg" alt="Croatia Flag"> <b>Croatia</b></a>
                                <?php
                                if (isset($cro_points)) {
                                    echo $cro_points;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/morocco.html" class="country-button"><img class="flag" src="morocco.jpeg" alt="Morocco Flag"> <b>Morocco</b></a>
                                <?php
                                if (isset($mor_points)) {
                                    echo $mor_points;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/canada.html" class="country-button"><img class="flag" src="canada.jpeg" alt="Canada Flag"> <b>Canada</b></a>
                                <?php
                                if (isset($can_points)) {
                                    echo $can_points;
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php
            }
            ?>
            <form action="s6.php" method="POST">
                <button class="simulate-btn" name="submit6" onclick="startSimulating('Group F')">Start Simulating</button>
            </form>
            <p class="prob2">
                <?php
                if (isset($prob6)) {
                    echo $prob6;
                }
                ?>
            </p>
        </div>
        <div class="group-column">
            <!-- Table for Group G -->
            <?php if (!isset($sort7)) { ?>
                <table class="group-table">
                    <thead>
                        <tr>
                            <th colspan="2">Group G</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="Teams info/brazil.html" class="country-button"><img class="flag" src="brazil.jpeg" alt="Brazil Flag"> <b>Brazil</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/serbia.html" class="country-button"><img class="flag" src="serbia.jpeg" alt="Serbia Flag"> <b>Serbia</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/switzerland.html" class="country-button"><img class="flag" src="switzerland.jpeg" alt="Switzerland Flag"> <b>Switzerland</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/cameroon.html" class="country-button"><img class="flag" src="cameroon.jpeg" alt="Cameroon Flag"> <b>Cameroon</b></a></td>
                        </tr>
                    </tbody>
                </table>
            <?php
            } else {
            ?>
                <table class="group-table">
                    <thead>
                        <tr>
                            <th colspan="2">Group G</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="Teams info/brazil.html" class="country-button"><img class="flag" src="brazil.jpeg" alt="Brazil Flag"> <b>Brazil</b></a>
                                <?php
                                if (isset($bra_points)) {
                                    echo $bra_points;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/switzerland.html" class="country-button"><img class="flag" src="switzerland.jpeg" alt="Switzerland Flag"> <b>Switzerland</b></a>
                                <?php
                                if (isset($swi_points)) {
                                    echo $swi_points;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/serbia.html" class="country-button"><img class="flag" src="serbia.jpeg" alt="Serbia Flag"> <b>Serbia</b></a>
                                <?php
                                if (isset($ser_points)) {
                                    echo $ser_points;
                                }
                                ?></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/cameroon.html" class="country-button"><img class="flag" src="cameroon.jpeg" alt="Cameroon Flag"> <b>Cameroon</b></a>
                                <?php
                                if (isset($cam_points)) {
                                    echo $cam_points;
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php
            }
            ?>
            <form action="s7.php" method="POST">
                <button class="simulate-btn" name="submit7" onclick="startSimulating('Group G')">Start Simulating</button>
            </form>
            <p class="prob2">
                <?php
                if (isset($prob7)) {
                    echo $prob7;
                }
                ?>
            </p>
        </div>
        <div class="group-column">
            <!-- Table for Group H -->
            <?php if (!isset($sort8)) { ?>
                <table class="group-table">
                    <thead>
                        <tr>
                            <th colspan="2">Group H</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="Teams info/portugal.html" class="country-button"><img class="flag" src="portugal.jpeg" alt="Portugal Flag"> <b>Portugal</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/ghana.html" class="country-button"><img class="flag" src="ghana.jpeg" alt="Ghana Flag"> <b>Ghana</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/uruguay.html" class="country-button"><img class="flag" src="uruguay.jpeg" alt="Uruguay Flag"> <b>Uruguay</b></a></td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/korea.html" class="country-button"><img class="flag" src="Korea Republic.jpeg" alt="Korea Republic Flag"> <b>Korea Republic</b></a></td>
                        </tr>
                    </tbody>
                </table>
            <?php
            } else {
            ?>
                <table class="group-table">
                    <thead>
                        <tr>
                            <th colspan="2">Group H</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="Teams info/portugal.html" class="country-button"><img class="flag" src="portugal.jpeg" alt="Portugal Flag"> <b>Portugal</b></a>
                                <?php
                                if (isset($por_points)) {
                                    echo $por_points;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/uruguay.html" class="country-button"><img class="flag" src="uruguay.jpeg" alt="Uruguay Flag"> <b>Uruguay</b></a>
                                <?php
                                if (isset($uru_points)) {
                                    echo $uru_points;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/korea.html" class="country-button"><img class="flag" src="Korea Republic.jpeg" alt="Korea Republic Flag"> <b>Korea Republic</b></a>
                                <?php
                                if (isset($kor_points)) {
                                    echo $kor_points;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="Teams info/ghana.html" class="country-button"><img class="flag" src="ghana.jpeg" alt="Ghana Flag"> <b>Ghana</b></a>
                                <?php
                                if (isset($gha_points)) {
                                    echo $gha_points;
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php
            }
            ?>
            <form action="s8.php" method="POST">
                <button class="simulate-btn" name="submit8" onclick="startSimulating('Group H')">Start Simulating</button>
            </form>
            <p class="prob2">
                <?php
                if (isset($prob8)) {
                    echo $prob8;
                }
                ?>
            </p>
        </div>
    </div>
    <div class="group-column">
        <div class="group-table">
            <table class="group-table">
                <thead>
                    <tr>
                        <th colspan="2">Go to the Round 16 </th>
                    </tr>
                </thead>
                <tr>
                    <form action="fs.php" method="POST">
                        <button class="simulate-btn" name="submit" onclick="startSimulating('Starting simulation of Round of 16')">Start Simulating</button>
                    </form>
                    </tr>
            </table>
        </div>
    </div>
    </main>
    </div>
    <script>
        function startSimulating(group) {
            alert("Simulating matches for " + group);
            // Add your simulation logic here
        }
    </script>
</body>

</html>