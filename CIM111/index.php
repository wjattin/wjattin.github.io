<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEB LAB - CIM 111 - Welcome! </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/theme.css">
</head>

<body>
    <?php
    $page = 'home';
    include 'common/header.php'; ?>
        <div class="container theme-showcase" role="main">
            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>Welcome to Web Lab!</h1>
                <p><strong>CIM 111
<br>
Prof. William Jattin
<br>
Mon-Wed 12:20 – 1:35 PM
<br>

Spring Semester 2018
<br>
Class Site: </strong>https://wjattin.github.io/CIM111
                    <br>
                    <!-- <strong>Room: </strong> Wolfson 3035<br> -->
                    <strong>Office Location:</strong> Newman Alumni Center - 6200 San Amaro Dr Suite 400
                    <br>
                    <strong>Office Hours: </strong>By Appointment
                    <br>
                    <strong>Email:</strong> wjattin at miami dot edu</p>
            </div>
            <div class="page-header">
                <h1>Schedule</h1>
                <div class="progress">
                    <!-- Class Progress -->
                    <div class="progress-bar progress-bar-striped classProgress" role="progressbar" aria-valuenow="2" aria-valuemin="3" aria-valuemax="18" id=""><span class="sr-only">3% Complete</span></div>
                </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Week 1 - Introduction to Web (Jan 16th-18th)
        </a>
      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul>
                                <li><a href="slides/Intro to Web Design.pdf">Intro &amp; brief history of the internet</a></li>

                            </ul>
                                                </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Week 2 - Setting up your environment (Jan 22nd - 25th)
        </a>
      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <h3>Reading</h3>
                            <ul>
                                <li><a href="https://webdesign.tutsplus.com/articles/carrying-out-successful-research-for-a-web-project--cms-20828" target="_blank">Research (Look at Examples)</a></li>
                            </ul>
                            <h2>Homework</h2>
                            <h3>First Website (100 Points) - <span style="color: #F30105">Due Feb 7th</span></h3>
                            <h4>Create a simple 3 page Wordpress site.</h4>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Week 3 - Introduction to HTML (Jan 29th-Feb 1st)
        </a>
      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Week 4 - HTML Cont. (Feb 5th-8th)
        </a>
      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <!-- Week 5 -  -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
          Week 5 - CSS (Feb 12th- 15th)
        </a>
      </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <!-- Week 6 -  -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseFour">
          Week 6 - Media Formats and Responsiveness (Feb 19th-22nd)
        </a>
      </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <!-- Week 7 -  -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSeven">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseFour">
          Week 7 - Layouts and Grid (Feb 26th - Mar 1st)
        </a>
      </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <!-- Week 8 -  -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingEight">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseFour">
          Week 8 -  Responsive Website Workday (Mar 5th - 8th)
        </a>
      </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <!-- Week 9 -  -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingNine">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseFour">
          Week 9 - Spring Break (Mar 12th - 15th )
        </a>
      </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <!-- Week 10 -  -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTen">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseFour">
          Week 10 -  Intro to Javascript/jQuery (Mar 19st - 22nd)
        </a>
      </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                        <div class="panel-body">

                      </div>
                    </div>
                </div>
                <!-- Week 11 -  -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingEleven">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseFour">
          Week 11 - jQuery (Mar 26th - 29th)
        </a>
      </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <!-- Week 12 -  -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwelve">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseFour">
          Week 12 - jQuery plugin (Apr 2nd - 5th)
        </a>
      </h4>
                    </div>
                    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <!-- Week 13 -  -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThirteen">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseFour">
          Week 13 - Introduction to web platforms (Apr 9th - 12th)
        </a>
      </h4>
                    </div>
                    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
                <!-- Week 14 -  -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFourteen">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFour">
          Week 14 - Marketing Workshop (Apr 16th – 19th)
        </a>
      </h4>
                    </div>
                    <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <!-- Week 15 -  -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFifteen">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFour">
          Week 15 - Final Project Lab (Apr 23th – 26th)
        </a>
      </h4>
                    </div>
                    <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
                        <div class="panel-body">

							

                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <script type="text/javascript">
            Date.prototype.getWeek = function() {
                var onejan = new Date(this.getFullYear(), 0, 1);
                var today = new Date(this.getFullYear(), this.getMonth(), this.getDate());
                var dayOfYear = ((today - onejan + 1) / 86400000);
                return Math.ceil(dayOfYear / 7)
            };


            $(function() {
                var date = new Date();
                var weekNumber = (date).getWeek();
                var weeks = [0, 1, 2, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
                var pWidth = Math.floor(((weeks[weekNumber]) / 15) * 100) + '%; ';
                //console.log(pWidth);
                $('.classProgress').attr('style', 'width: ' + pWidth);
                $('.sr-only').html('width' + pWidth);

                /*
            div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
        <a role="button" data-toggle="collapse"
            */
                $('body').find('.panel-heading').each(function(index, value) {
                    if ((index + 1) == weeks[weekNumber]) {
                        $(this).find('h4').find('a').trigger('click');
                    }
                });
                $('body').find('.jumbotron').find('h1').html('Week  ' + weeks[weekNumber]);

            });
            </script>
        </div>
        <?php include('common/footer.php'); ?>
</body>

</html>
