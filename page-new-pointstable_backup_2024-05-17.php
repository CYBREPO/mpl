<?php
/*
 * Template Name: New pointstable
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>


<main class="bg-light">
    <?php include 'components/page-title-header.php';?>

    <!-- Banner -->
    <div class="points-table pb-5 page-pattern">
        <div class="container">
            <div class="dropdown py-4 py-md-5">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Season 2024
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="table-responsive mb-4">
                <table width="100%" class="ih-td-tab">
                    <tbody>
                        <tr class="ih-pt-tbl" style="display:revert;">
                            <th>POS</th>
                            <th style="text-align: left;">TEAM</th>
                            <th>P</th>
                            <th>W</th>
                            <th>L</th>
                            <th>NR</th>
                            <th>NRR</th>
                            <th>PTS</th>
                            <th class="text-white mob-hide text-start">RECENT FORM</th>
                        </tr>
                    </tbody>
                    <tbody id="pointsdata">
                        <tr class="team0 ">

                            <td class="table-qualified  ">1 </td>
                            <td class="ih-t-color">
                                <div class="ih-pt-ic ">
                                    <div class="ih-pt-img"> <img alt=""
                                            src="https://scores.iplt20.com/ipl/teamlogos/RR.png?v=2">
                                    </div>

                                    <h2 class="ih-pt-cont mb-0 ">RR</h2>
                                </div>
                            </td>
                            <td>9</td>
                            <td>8</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0.694</td>
                            <td class="bt ">16</td>
                            <td class="ih-pt-fb-w mob-hide ">
                                <div class="ih-pt-fb " style="justify-content: center">
                                    <span class="rf W ih-pt-g">W</span><span class="rf W ih-pt-g">W</span><span
                                        class="rf W ih-pt-g">W</span><span class="rf W ih-pt-g">W</span><span
                                        class="rf L ih-pt-r">L</span>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table width="100%" class="ih-td-tab">
                    <tbody>
                        <tr class="ih-pt-tbl" style="display:revert;">
                            <th>POS</th>
                            <th style="text-align: left;">TEAM</th>
                            <th>P</th>
                            <th>W</th>
                            <th>L</th>
                            <th>NR</th>
                            <th>NRR</th>
                            <th>PTS</th>
                            <th class="text-white mob-hide text-start">RECENT FORM</th>
                        </tr>
                    </tbody>
                    <tbody id="pointsdata">
                        <tr class="team0 ">

                            <td class="table-qualified  ">1 </td>
                            <td class="ih-t-color">
                                <div class="ih-pt-ic ">
                                    <div class="ih-pt-img"> <img alt=""
                                            src="https://scores.iplt20.com/ipl/teamlogos/RR.png?v=2">
                                    </div>

                                    <h2 class="ih-pt-cont mb-0 ">RR</h2>
                                </div>
                            </td>
                            <td>9</td>
                            <td>8</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0.694</td>
                            <td class="bt ">16</td>
                            <td class="ih-pt-fb-w mob-hide ">
                                <div class="ih-pt-fb " style="justify-content: center">
                                    <span class="rf W ih-pt-g">W</span><span class="rf W ih-pt-g">W</span><span
                                        class="rf W ih-pt-g">W</span><span class="rf W ih-pt-g">W</span><span
                                        class="rf L ih-pt-r">L</span>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php  get_footer("footer2"); ?>