<?php

    if(isset($_GET['batch'])) {
        switch($_GET['batch']) {
            case "table":
                echo "Hello world!\n";

                include ("./header.php");

                $cities = array(
                    'name' => ['Tokyo', 'Berlin', 'Liverpool'],
                    'population' => [13929280, 9273000, 552267],
                    'area' => [2194.07, 891.8, 111.8]
                );

                ?>
                    <table>
                        <?php
                            foreach($cities as $city) {
                                ?>
                                    <tr>
                                        <td><?=$city[0]?></td>
                                        <td><?=$city[1]?></td>
                                        <td><?=$city[2]?></td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </table>
                <?php
                break;
            case "strings":
                ?>
                    <section style="position: relative; top: 5vh;">
                        <?php
                            include ("./strings.php");
                        ?>
                    </section>
                <?php
                break;
            case "arrays":
                ?>
                    <section style="position: relative; top: 5vh;">
                        <?php
                        include ("./arrays.php");
                        ?>
                    </section>
                <?php
                break;
            default:
                echo "Nothing to see here...";
        }
    }
?>