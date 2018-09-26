<!doctype html>
<html lang="en">
  <head>
    <title>Wiltfolio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('form-handler.php'); ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/wilt_sheet.css">
  </head>
  <body>
   <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
           <div class="container-fluid">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
           </button>
           
           
           <div class="collapse navbar-collapse justify-content-md-center" id="navbarCollapse">
               <ul class="navbar-nav">
                   <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                   <li class="nav-item"><a class="nav-link" href="#portfolio">View My Work</a></li>
                   <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
               </ul>
           </div><!-- /.navbar-collapse -->
           </div><!-- /.container-fluid -->
       </nav>
     </header>
     
    <div class="main">
      <section id="home" >
      <div class="jumbotron" align="center">
       <p>Welcome To</p>
       <h1>wiltfolio</h1>
       <!--<img class="d-block w-50" src="graphics/vSample.png"/>-->
       <div class="vSpacer">&nbsp;</div>
       </div>
        </section>
        
        <section id="about">
        <div class="jumbotron">
          <h2>About Me</h2>
           <article>
               <p>Originating from the south, moved to Chicago about 9 years ago for a job as a market executive for a real estate company in downtown Chicago. Ended up migrating to production design and IT within that company. Working here I learned how to deal with clients, create and manage time sensitive products, and critical problem solving skills. This is where I got my first taste of design. After the 2008 crash, the real estate industry took a huge hit, so using my new found skills I decided to go back to school for Web design and development. I've been developing for about 7 years now and it never gets old. What I love about web developing is bringing the client's idea into existence. Breathing life into pure thought and molding it into a peace of digital art.</p>
           </article>
        </div>
        </section>
        
        <section id="portfolio">
        <div class="jumbotron">
           <h2>View My Work</h2>
            <div class="row">
                <div class="col-md-4">
                  <div class="me">
                    <h5 class="card-title">St. Benedict Technology Consortium </h5>
                    <a href="http://www.sbtcsupport.org/" target="_blank"><img class="card-img" src="graphics/sbtc_snap.png"></a>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="me">
                    <h5 class="card-title">W. Howard and Sons Construction</h5>
                    <a href="https://howardandsonsconstruction.squarespace.com" target="_blank"><img class="card-img" src="graphics/hsc_snap.png"></a>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="me">
                    <h5 class="card-title">Pope Francis Global Academy</h5>
                    <a href="http://www.pfgacademy.org/" target="_blank"><img class="card-img" src="graphics/pfga_snap.png"></a>
                  </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                  <div class="me">
                    <h5 class="card-title">St. Mary Buffalo Grove</h5>
                    <a href="https://stmarybg.squarespace.com" target="_blank"><img class="card-img" src="graphics/smbg_snap.png"></a>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="me">
                    <h5 class="card-title">St. Francis de Sales</h5>
                    <a href="http://www.stfrancislzparish.org/" target="_blank"><img class="card-img" src="graphics/sflz_snap.png"></a>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="me">
                    <h5 class="card-title">St. Cajetan</h5>
                    <a href="https://www.stcajetan.org/" target="_blank"><img class="card-img" src="graphics/caj_snap.png"></a>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                  <div class="me">
                    <h5 class="card-title">St. Patrick Wadsworth</h5>
                    <a href="https://www.stpatrickwadsworth.org/" target="_blank"><img class="card-img" src="graphics/spw_snap.png"></a>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="me">
                    <h5 class="card-title">St. Benedict</h5>
                    <a href="http://parish.stbenedict.com/" target="_blank"><img class="card-img" src="graphics/stbens_snap.png"></a>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="me">
                    <h5 class="card-title">St. Ita</h5>
                    <a href="http://www.saintita.org/" target="_blank"><img class="card-img" src="graphics/ita_snap.png"></a>
                  </div>
                </div>
            </div>
        </div>
        </section> 
        
        <section id="contact">
        <div class="jumbotron">
           <h2>Request a Quote</h2>
            <div class="col-md-12">
            <form class="form-style" role="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                
              <div class="form-row form-group">
                <div class="col">
                  <input type="text" class="form-control form-control-lg" placeholder="First name" value="<?= $fname ?>">
                  <span class="error"><?= $fname_error ?></span>
                </div>
                <div class="col">
                  <input type="text" class="form-control form-control-lg" placeholder="Last name" value="<?= $lname ?>">
                  <span class="error"><?= $lname_error ?></span>
                </div>
              </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" placeholder="@" value="<?= $email ?>">
                  <span class="error"><?= $email_error ?></span>
                </div>
                
                <div class="form-group">
                   <select id="inputState" class="form-control form-control-lg" value="<?= $reason ?>">
                    <option selected>Reason for contact?</option>
                    <option>Website</option>
                    <option>Social Media</option>
                    <option>Other...</option>
                  </select>
                  </div>
                <div class="form-row ">
                <div class="col-10">
                  <textarea rows="3" placeholder="Add comment..." class="form-control form-control-lg" value="<?= $message ?>"></textarea>
                </div>
                <div class="col-2"><button  type="button" class="btn btn-primary btn-lg btn-block">SEND</button></div>
                </div>
                <div class="success"><?= $success; ?></div>
            </form>
        </div>
        </div>
        </section>
        
        <div id="footer">
            <div class="jumbotron">
                <p>&copy;2018 Wiltfolio. All Rights Reserved.</p>
            </div>
        </div>
    </div> <!-- end mainContainer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script/popper.min.js" type="text/javascript"></script>
    <script src="script/bootstrap.min.js" type="text/javascript"></script>
    <script src="script/wilt_script.js" type="text/javascript"></script>
  </body>
</html>