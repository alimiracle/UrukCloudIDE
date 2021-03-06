<?php
/*session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../Login/index.php");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


 <!-- Bootstrap Core CSS -->


    <link rel="stylesheet" href="/UrukCloudIDE/src/public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/UrukCloudIDE/src/public/css/font-awesome.min.css">
<link rel="stylesheet" href="/UrukCloudIDE/src/public/css/bootstrap/bootstrap-theme.min.css">
<link rel="stylesheet" href="/UrukCloudIDE/src/public/css/bootstrap/context.bootstrap.css">
<link rel="stylesheet" href="/UrukCloudIDE/src/public/css/bootstrap/context.standalone.css">
<!-- jquery  ui-->

<link href="/UrukCloudIDE/src/public/css/jquery-ui/jquery-ui.min.css" rel="stylesheet">
<link href="/UrukCloudIDE/src/public/css/jquery-ui/jquery-ui.structure.min.css" rel="stylesheet">
<link href="/UrukCloudIDE/src/public/css/jquery-ui/jquery-ui.theme.min.css" rel="stylesheet">

<!-- UrukCloudIDE -->

    <link href="/UrukCloudIDE/src/public/css/app.css" rel="stylesheet">
   <link href="/UrukCloudIDE/src/public/css/jqueryFileTree.css" rel="stylesheet" type="text/css" media="screen" />

  <title>UrukCloudIDE/src</title>
<style>#dialog{
display:none;
}
#dialogfile{
display:none;
}
</style>
</head>
<body>
<div id="dialog" title="Create Project">
	<label>Project Name</label>
              <input type="text" id="prname" size="20" name="name"  required /><br><br><button id="ok">OK</button>
            </div>
<div id="dialogfile" title="Create File">
	<label>File Name</label>
              <input type="text" id="name" size="20" name="filename"  required /><br><br><button id="okfile">OK</button>
            </div>
 <div id="term"></div>
<div id="rr"></div>
    <ul class="nav nav-pills">



        <li class="dropdown">

            <a href="#" data-toggle="dropdown" class="dropdown-toggle">File <b class="caret"></b></a>

            <ul class="dropdown-menu">

				<li><a href="#" id="np">New Project</a></li>
                <li><a href="#" id="nf">New File</a></li>

                <li><a href="#" id="ss">Save</a></li>
                <li><a href="https://localhost:4200/" id="shell" target="blank">Execute</a></li>

                <li class="divider"></li>

                <li><a href="triggers/logout.php">Logout</a></li>

            </ul>

        </li>

<li class="dropdown">

            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Edit<b class="caret"></b></a>

            <ul class="dropdown-menu">

                <li><a href="#" class="disabled">Undo</a></li>

                <li><a href="#" class="disabled">Redo</a></li>

                <li><a href="#" class="disabled">Cut</a></li>

                <li><a href="#" class="disabled">Copy</a></li>

                <li><a href="#" class="disabled">Paste</a></li>

            </ul>

        </li>
<li class="dropdown">

            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Help<b class="caret"></b></a>

            <ul class="dropdown-menu">

                <li><a href="../Contact/index.php" target="blank">Contact the app Admin</a></li>

                <li><a href="https://github.com/azzenovic/UrukCloudIDE/issues" target="blank">Github</a></li>

                <li><a href="https://github.com/azzenovic/UrukCloudIDE/issues" target="blank">Report a bug</a></li>

                <li><a href="#">About</a></li>

            </ul>

        </li>

<li class="dropdown">


            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Notifications<b class="caret"></b></a>

            <ul class="dropdown-menu">

              <?php

                              require_once(__DIR__.'/../../vendor/autoload.php');
use UrukCloudIDE\Controller\Notification_Controller;

$note= new Notification_Controller();

                              $result= $note->getlatestnotification_action();
                              while ($data=$result->fetch()) {
                                  echo "<li>on   ".$data['notification_time']."<br><br>  the admin wrote '   ".$data['notification_text']."'</li>";
                              }
               ?>



            </ul>

        </li>

    </ul>

<div id="fileexplorer"></div>
<pre id="editor"></pre>

<!-- JQUERY -->

<script src="/UrukCloudIDE/src/public/js/jquery.min.js"></script>
 <script src="/UrukCloudIDE/src/public/js/jquery.easing.js" type="text/javascript"></script>
 <script src="/UrukCloudIDE/src/public/js/jqueryFileTree.js" type="text/javascript"></script>

 <!-- JQUERY UI-->
<script src="/UrukCloudIDE/src/public/js/jquery-ui.min.js"></script>

	<!-- BOOTSTRAP -->

		<script src="/UrukCloudIDE/src/public/js/bootstrap/bootstrap.min.js"></script>
		<script src="/UrukCloudIDE/src/public/js/bootstrap/context.js"></script>

<!-- ACE UrukCloudIDE/src -->

<script src="/UrukCloudIDE/src/public/js/ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="/UrukCloudIDE/src/public/js/ace/ext-language_tools.js" type="text/javascript" charset="utf-8"></script>

<!-- UrukCloudIDE UI Interactions -->
<script src="/UrukCloudIDE/src/public/js/app.js"></script>




</body>
</html>
