<?php
session_start();
include('data.php');
if (!$_SESSION['member']) header('Location: login.php');

if ($_POST){
  if (isset($_FILES['media_upload']) && !empty($_FILES['media_upload'])) {
    $media_upload = ($_FILES['media_upload']['name']);
    $extension = strtolower(substr($media_upload, strpos($media_upload,'.')+1));
    $size = ($_FILES['media_upload']['size']);
    $maxsize = 52428800;
    if ($size > $maxsize) {
      echo '<script type="text/javascript">
              alert("File size too large. Maximum size is 50MB");
            </script>';
    }
    else {
      if ($extension == 'mp4' || $extension == 'mpeg' || $extension == 'avi' || $extension == 'wmv') {
        $tbname = 'tb_videos_uploaded';
        $foldername = 'video.media';
        doThis($tbname, $media_upload, $foldername, $extension, $member);
      } else if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png') {
        $tbname = 'tb_pictures_uploaded';
        $foldername = 'picture.media';
        doThis($tbname, $media_upload, $foldername, $extension, $member);
      }
    }

  } else {
    echo '<script type="javascript">alert ("Nothing to Upload"); </script>';
  }
}
?>

<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="In Love In Prayer In Holiness, Royal Theatre Family, Ibadan Varsity Christian Union, RTF, IVCU">
    <meta name="description" content="Royal Theatre Family">
    <meta name="author" content="Royal Theatre Family">
    <meta name="author" content="Akintola Micheal Oluwafemi">
    <meta http-equiv="refresh" content="1000">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RTF - Member [<?php echo $rtfname; ?>]</title>
    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <link href="css/color.css" rel="stylesheet" type="text/css">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <link href="css/responsive.css" rel="stylesheet" type="text/css">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">

    <link href="css/iconmoon.css" rel="stylesheet" type="text/css">

    <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">

    <link href="css/yamm-menu.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="images/fav.ico" type="image/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
  </head>
  <body class="theme-style-1">
    <div id="wrapper">
      <header id="header">
        <section class="logo-row">
          <div class="sidebar-menu-box">
            <div class="cp-burger-nav">
              <div id="cp_side-menu-btn" class="cp_side-menu"><a href="#" class=""><span class="icon-icons-07"></span></a></div>
              <div id="cp_side-menu"> <a href="#" id="cp-close-btn" class="crose"><i class="fa fa-close"></i></a>
                <div class="cp-top-bar">
                  <div class="login-section">
                    <ul>
                      <li><a href="signout.php" title="Sign Out"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                    </ul>
                  </div>
                </div>
                <strong class="logo-2"><a href="index.php" title="Royal Theatre Family"><h2 style="color: #d94350;">Royal Theatre Family - IVCU</h2></a></strong>
                <form action="#">
                  <input type="text" placeholder="Search photos" required>
                  <button><span class="icon-icons-06"></span></button>
                  <em>... or choose a category on right.</em>
                </form>
                <div class="content mCustomScrollbar">
                  <div id="content-1" class="content">
                    <div class="cp_side-navigation">
                      <nav>
                        <ul class="navbar-nav">
                          <li class="active"><a href="index.php">Home</a></li>
                          <li><a href="error-page.html">Cover Photos</a></li>
                          <li><a href="error-page.html">Latest</a></li>
                          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li> <a href="error-page.html">Birthday</a> </li>
                              <li> <a href="error-page.html">Drama Night</a> </li>
                              <li> <a href="error-page.html">Fellowship after Fellowship</a> </li>
                              <li> <a href="error-page.html">Unit Meeting</a> </li>
                              <li> <a href="error-page.html">Revelation Night</a> </li>
                            </ul>
                          </li>
                          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Photo Speaks<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a tabindex="-1" href="error-page.html">Album One</a></li>
                              <li><a tabindex="-1" href="error-page.html">Album Two</a></li>
                              <li><a tabindex="-1" href="error-page.html">Album Three</a></li>
                              <li><a tabindex="-1" href="error-page.html">Members Profile</a></li>
                            </ul>
                          </li>
                          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li> <a href="error-page.html">Royal 7</a> </li>
                              <li> <a href="error-page.html">Alumni</a> </li>
                              <li> <a href="error-page.html">Events</a> </li>
                              <li> <a href="error-page.html">Join the Family</a> </li>
                              <li> <a href="error-page.html">About us</a> </li>
                              <li> <a href="error-page.html">Contact Us</a> </li>
                              <li> <a href="error-page.html">Contact 2</a> </li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="login-section">
            <ul>
              <li><a href="signout.php" title="Sign Out"><span class="fa fa-sign-out"></span> Sign Out</a></li>
            </ul>
        </div>
        <div class="container"> <strong class="logo"><a href="index.php" title="Royal Theatre Family"><h2 style="color: #d94350;">Royal Theatre Family - IVCU</h2></a></strong> </div>
      </section>
      <section class="cp-navigation-row">
        <div class="container">
          <div class="navbar yamm navbar-default">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="member.php">Profile</a></li>
                <li class="active"><a href="media-upload.php">Upload</a></li>
                <li>
                  <div class="cp-search-box"><a href="#" id="searchtoggl"><span class="icon-icons-06"></span></a></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </header>
    <div class="cp-search-outer">
      <div id="searchbar">
        <form id="searchform" action="#">
          <input placeholder="Type your text here" type="text" required>
          <button type="submit" value=""><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>

    <section class="cp-upload-form">
      <form action="media-upload.php" method="post" enctype="multipart/form-data">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="upload-box">
                <div class="holder">
                  <a class="upload-pic">
                    <span class="icon-icons-09"></span>
                  </a>
                  <strong>Choose a Picture or Video<b>- - Stay Close - -</b></strong>
                  <span class="btn-file">
                    <span class="icon-icons-08"></span>Click Here
                    <input type="file" name="media_upload" accept="image/jpeg, image/x-png, video/*" required />
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cp-fill-box">
                <h2>Share</h2>
                <ul>
                  <li>
                    <div class="fill-box-head"> <strong class="title">Who should see this</strong> </div>
                  </li>
                  <li>
                    <div class="cp-check-box">
                      <label for="id1">Public</label>
                      <input name="share" value="public" type="radio" checked />
                    </div>
                    Will be displayed on Homepage
                  </li>
                  <!--<li>
                    <div class="cp-check-box">
                      <label for="id2">Private</label>
                      <input name="share" value="private" type="radio" />
                    </div>
                    No one will see this
                  </li>-->
                  <li>
                    <div class="cp-check-box">
                      <label for="id3">Members</label>
                      <input name="share" value="membersalone" type="radio" />
                    </div>
                    Only Members Will See This
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="image-information">
                <h2>Image Information </h2>
                <input type="text" name="itstitle" placeholder="Title *" required />
                <input type="text" name="itsdescription" placeholder="Description" />
                <input type="text" name="itslocation" placeholder="Location" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="cp-select-fields">
                <h2>More</h2>
                <div class="cp-select">
                  <select name="eventtype">
                    <option value="Other <i><?php echo date('d:M:Y');?></i>">Other</option>
                    <option value="Birthday <i><?php echo date('d:M:Y'); ?></i>">Birthday</option>
                    <option value="Fellowship after Fellowship <i><?php echo date('d:M:Y'); ?></i>">Fellowship after Fellowship</option>
                    <option value="Rehearsal <i><?php echo date('d:M:Y');?></i>">Rehearsal</option>
                    <option value="Revelation Night <i><?php echo date('Y'); ?></i>">Revelation Night</option>
                  </select>
                </div>
                <div class="cp-select">
                  <select name="tagged">
                    <option value="">Tag Someone</option>
                    <?php
                      $sql = "SELECT * FROM `tb_membersinrtf`";
                      $result = $db->query($sql);
                      while($row = $result->fetch_assoc()) {
                        echo '<option type="checkbox" value="'.$row['col_rtfname'].'">'.strtoupper($row['col_rtfname']).'</option>';
                      }
                    ?>
                  </select>
                </div>
                <button type="submit" value=""><span class="icon-icons-08"></span>Upload Now</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>

    <section class="category-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="cp-box">
              <h2>Browse Images by Member Profiles</h2>
              <div class="row">
                <?php include('members.php'); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cp-box">
              <h2>Browse Images by Events</h2>
              <div class="row">
                <div class="col-md-4">
                  <ul>
                    <li><a href="#">Event 1</a></li>
                    <li><a href="#">Event 2</a></li>
                    <li><a href="#">Event 3</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul>
                    <li><a href="#">Event 4</a></li>
                    <li><a href="#">Event 5</a></li>
                    <li><a href="#">Event 6</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul>
                    <li><a href="#">Event 1</a></li>
                    <li><a href="#">Event 2</a></li>
                    <li><a href="#">Event 3</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <div class="footer-social">
        <div class="cp-sidebar-social"> <strong class="title">Connect us on</strong>
          <ul>
            <li><a href="#"><span class="icon-socialicons-01"></span></a></li>
            <li><a href="#"><span class="icon-socialicons-03"></span></a></li>
            <li><a href="#"><span class="icon-socialicons-04"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="copyrights"><strong class="copy"><a href="https://www.linkedin.com/in/michael-akinfemi-akintola-536432109/" target="_blank">Designed PoG<a/> &copy; 2017 All Rights Reserved </strong></div>
      </footer>
    </div>




    <script src="js/form.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src='js/bg-moving.js'></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="./vendor/canvas-to-blob.min.js"></script>
	</body>
</html>

<?php
  $db->close();
?>
