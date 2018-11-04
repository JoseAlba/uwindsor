<?php
    require_once("../php/common.php");
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 2018-11-02
 * Time: 7:34 PM
 */
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <title>Windsor | Coop</title>
</head>
<body>
<!--<header class="cd-header">-->
<!--<h1>Content Filters</h1>-->
<!--</header>-->

<main class="cd-main-content">
    <div class="cd-tab-filter-wrapper">
        <div class="cd-tab-filter">
            <ul class="cd-filters">
                <li class="placeholder">
                    <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                </li>
                <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
                <li class="filter" data-filter=".coop1"><a href="#0" data-type="coop1">COOP 1</a></li>
                <li class="filter" data-filter=".coop2"><a href="#0" data-type="coop2">COOP 2</a></li>
                <li class="filter" data-filter=".coop3"><a href="#0" data-type="coop3">COOP 3</a></li>
                <li class="filter" data-filter=".coop4"><a href="#0" data-type="coop4">COOP 4</a></li>
                <li class="filter" data-filter=".intern1"><a href="#0" data-type="intern1">Internship 1</a></li>
                <li class="filter" data-filter=".intern2"><a href="#0" data-type="intern2">Internship 2</a></li>
                <li class="filter" data-filter=".intern3"><a href="#0" data-type="intern3">Internship 3</a></li>
            </ul> <!-- cd-filters -->
        </div> <!-- cd-tab-filter -->
    </div> <!-- cd-tab-filter-wrapper -->

    <section class="cd-gallery">
        <ul>
            <?php
            echo <<<ZZEOF

            <li class="mix color-1 check1 radio2 option3 google" style="background: #FFFFFF;">
                <div class="container">

                    <img src="img/img-red.jpg" alt="Image 1" >
                    <div class="text-block">
                        <h1 class="center">
                            Google
                            <br><br>
                            Country: USA
                            <br><br>
                            Experience: Extremely Happy
                            <br><br>
                            Salary: $7000
                            <br><br>
                            Relocation Pay: $2000
                            <br><br>
                            Housing Expenses: $1000
                            <br><br>
<!--                            Bonus: They paid for my trip to Disney World-->
                        </h1>

                    </div>
                </div>
            </li>
ZZEOF;
?>
            <li class="mix color-2 check2 radio2 option2"><img src="img/img-orange.jpg" alt="Image 2"></li>
            <li class="mix color-1 check3 radio3 option1"><img src="img/img-yellow.jpg" alt="Image 3"></li>
            <li class="mix color-1 check3 radio2 option4"><img src="img/img-black.jpg" alt="Image 4"></li>
            <li class="mix color-1 check1 radio3 option2"><img src="img/img-blue.jpg" alt="Image 5"></li>
            <li class="mix color-2 check2 radio3 option3"><img src="img/img-brown.jpg" alt="Image 6"></li>

            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
        </ul>
        <div class="cd-fail-message">No results found</div>
    </section> <!-- cd-gallery -->

    <div class="cd-filter">
        <form>
            <div class="cd-filter-block">
                <h4>Search</h4>

                <div class="cd-filter-content">
                    <input type="search" placeholder="Try Google">
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Country</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter=".canada" type="checkbox" id="checkbox1">
                        <label class="checkbox-label" for="checkbox1">Canada</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".usa" type="checkbox" id="checkbox2">
                        <label class="checkbox-label" for="checkbox2">United States</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".europe" type="checkbox" id="checkbox3">
                        <label class="checkbox-label" for="checkbox3">Europe</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".online" type="checkbox" id="checkbox4">
                        <label class="checkbox-label" for="checkbox4">Online</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".else" type="checkbox" id="checkbox4">
                        <label class="checkbox-label" for="checkbox4">Elsewhere</label>
                    </li>
                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Amount Made</h4>

                <div class="cd-filter-content">
                    <div class="cd-select cd-filters">
                        <select class="filter" name="selectThis" id="selectThis">
                            <option value="">All</option>
                            <option value=".option1"> >= 1500</option>
                            <option value=".option2"> >= 2500</option>
                            <option value=".option3"> >= 4000</option>
                            <option value=".option4"> >= 7000</option>
                            <option value=".option4"> <= 7000</option>
                        </select>
                    </div> <!-- cd-select -->
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Overall Work Experience</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter="" type="radio" name="radioButton" id="rate0" checked>
                        <label class="radio-label" for="radio1">All</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                        <label class="radio-label" for="radio2">Bad Experience</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
                        <label class="radio-label" for="radio3">Meh</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                        <label class="radio-label" for="radio2">Satisfied</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
                        <label class="radio-label" for="radio3">Pleased</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                        <label class="radio-label" for="radio2">Extremely Happy</label>
                    </li>

                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->
        </form>

        <a href="#0" class="cd-close">Close</a>
    </div> <!-- cd-filter -->

    <a href="#0" class="cd-filter-trigger">Filters</a>
</main> <!-- cd-main-content -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
