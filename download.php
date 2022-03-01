<?php include "include/title.php"; include "include/gd.php"; include "include/b2.php"; include "include/icon.php"; include "include/720.php";?>
<style>td img {width:25px;}</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Download</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="purple darken-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo"><img id="clap" src="https://i.imgur.com/jrrmofO.png"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        <li><a href="/vods">VODs</a></li>
        <li class="active"><a href="/download">Download</a></li>
        <li><a href="/info">Info</a></li>
        <li><a class="waves-effect waves-light btn purple" target="_blank" href="https://www.twitch.tv/KalathrasLolweapon">TWITCH</a></li>
        <li><a class="waves-effect waves-light btn deep-purple accent-3" target="_blank" href="https://discord.gg/7zdxkGcdZu">DISCORD</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav purple darken-5">
        <li><a class="white-text" href="/">Home</a></li>
        <li><a class="white-text" href="/vods">VODs</a></li>
        <li><a class="white-text" href="/download">Download</a></li>
        <li><a class="white-text" href="/info">Info</a></li>
        <li><a class="waves-effect waves-light btn purple" target="_blank" href="https://www.twitch.tv/KalathrasLolweapon">TWITCH</a></li>
        <li><a class="waves-effect waves-light btn deep-purple accent-3" target="_blank" href="https://discord.gg/7zdxkGcdZu">DISCORD</a></li>
      </ul>
      <a href="" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container center">
      
      <h2 class="header center purple-text">Download</h2>
      <div class="row center">
        <h5 class="header col s12 light grey-text"></h5>
      </div>
    </div>
    <div class="container buscador">
        
       
        <input class="white-text" type="text" id="myInput" onkeyup="myFunction()"  placeholder="Search for name or date">

        <table id="myTable" class="highlight responsive white-text">
          <thead>
            <tr>
                <th style="width: 86%;">Date | Name</th>
                <th style="width: 7%;">Download | 1080p</th>
                <th style="width: 7%;">Download | 720p</th>
            </tr>
          </thead>
  
          <tbody>
            <tr>
              <td>2022-02-28_<?php echo $title[20220228];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220228];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220228];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-26_<?php echo $title[20220226];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220226];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220226];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-25_<?php echo $title[20220225];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220225];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220225];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-24_<?php echo $title[20220224];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220224];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220224];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-23_<?php echo $title[20220223];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220223];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220223];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-22_<?php echo $title[20220222];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220222];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220222];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-21_<?php echo $title[20220221];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220221];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220221];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-18_<?php echo $title[20220218];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220218];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220218];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
              <tr>
              <td>2022-02-17_<?php echo $title[20220217];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220217];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220217];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-16_<?php echo $title[20220216];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220216];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220216];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-15_<?php echo $title[20220215];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220215];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220215];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>  
            <tr>
              <td>2022-02-14_<?php echo $title[20220214];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220214];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220214];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-12_<?php echo $title[20220212];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220212];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220212];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-11_<?php echo $title[20220211];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220211];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220211];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-10_<?php echo $title[20220210];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202202101];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202202102];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202202101];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202202102];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-08_<?php echo $title[20220208];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220208];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220208];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-07_<?php echo $title[20220207];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220207];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220207];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-05_<?php echo $title[20220205];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220205];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220205];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-03_<?php echo $title[20220203];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220203];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220203];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-02_<?php echo $title[20220202];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202202021];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202202022];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202202021];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202202022];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-02-01_<?php echo $title[20220201];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220201];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220201];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-31_<?php echo $title[20220131];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220131];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220131];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-28_<?php echo $title[20220128];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220128];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220128];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-27_<?php echo $title[20220127];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220127];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220127];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-26_<?php echo $title[20220126];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220126];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220126];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-25_<?php echo $title[20220125];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220125];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220125];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-24_<?php echo $title[20220124];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220124];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220124];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-22_<?php echo $title[20220122];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220122];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220122];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-20_<?php echo $title[20220120];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220120];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220120];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-19_<?php echo $title[20220119];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220119];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220119];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-18_<?php echo $title[20220118];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220118];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220118];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-17_<?php echo $title[20220117];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220117];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220117];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-14_<?php echo $title[20220114];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202201141];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202201142];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202201141];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202201142];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[202201141];?>"><img src="<?php echo $mg["mg"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $yl[202201142];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-13_<?php echo $title[20220113];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220113];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220113];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20220113];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-12_<?php echo $title[20220112];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220112];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220112];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20220112];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-11_<?php echo $title[20220111];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220111];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220111];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20220111];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-10_<?php echo $title[20220110];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202201101];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202201102];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202201101];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202201102];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[202201101];?>"><img src="<?php echo $mg["mg"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $yl[202201101];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-07_<?php echo $title[20220107];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220107];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220107];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20220107];?>"><img src="<?php echo $md["md"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-06_<?php echo $title[20220106];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220106];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220106];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20220106];?>"><img src="<?php echo $md["md"];?>"></a></td>
            </tr>
            <tr>
              <td>2022-01-04_<?php echo $title[20220104];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20220104];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20220104];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20220104];?>"><img src="<?php echo $md["md"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-29_<?php echo $title[20211229];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211229];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211229];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20220104];?>"><img src="<?php echo $md["md"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-28_<?php echo $title[20211228];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211228];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211228];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211228];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-24_<?php echo $title[20211224];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211224];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211224];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211224];?>"><img src="<?php echo $md["md"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-21_<?php echo $title[20211221];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211221];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211221];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211221];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-17_<?php echo $title[20211217];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211217];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211217];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211217];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-16_<?php echo $title[20211216];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202112161];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202112162];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202112161];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202112162];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[202112161];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-15_<?php echo $title[20211215];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202112151];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202112152];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202112151];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202112152];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[202112151];?>"><img src="<?php echo $md["md"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $yl[202112152];?>"><img src="<?php echo $md["md"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-14_<?php echo $title[20211214];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202112141];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202112142];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202112141];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202112162];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[202112161];?>"><img src="<?php echo $od["od"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $yl[202112162];?>"><img src="<?php echo $od["od"];?>"></a></td> 
            </tr>
            <tr>
              <td>2021-12-13_<?php echo $title[20211213];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211213];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211213];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211213];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-11_<?php echo $title[20211211];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211211];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211211];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211211];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-10_<?php echo $title[20211210];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211210];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211210];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211210];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-09_<?php echo $title[20211209];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211209];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211209];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211209];?>"><img src="<?php echo $od["od"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-08_<?php echo $title[20211208];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202112081];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202112082];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202112081];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202112082];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[202112081];?>"><img src="<?php echo $md["md"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $yl[202112082];?>"><img src="<?php echo $md["md"];?>"></a></td>      
            </tr>
            <tr>
              <td>2021-12-07_<?php echo $title[20211207];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211207];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211207];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211207];?>"><img src="<?php echo $md["md"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-12-06_<?php echo $title[20211206];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211206];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211206];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211206];?>"><img src="<?php echo $md["md"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-29_<?php echo $title[20211129];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211129];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211129];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-27_<?php echo $title[20211127];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211127];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211127];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211127];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-26_<?php echo $title[20211126];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211126];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211126];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211126];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-25_<?php echo $title[20211125];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211125];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211125];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211125];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-24_<?php echo $title[20211124];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202111241];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202111242];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202111241];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202111242];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[202111241];?>"><img src="<?php echo $mg["mg"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $yl[202111242];?>"><img src="<?php echo $mg["mg"];?>"></a></td>      
            </tr>
            <tr>
              <td>2021-11-23_<?php echo $title[20211123];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211123];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211123];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211123];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-22_<?php echo $title[20211122];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211122];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211122];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211122];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-19_<?php echo $title[20211119];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211119];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211119];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211119];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-18_<?php echo $title[20211118];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211118];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211118];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211118];?>"><img src="<?php echo $od["od"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-17_<?php echo $title[20211117];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211117];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211117];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211117];?>"><img src="<?php echo $od["od"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-16_<?php echo $title[20211116];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211116];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211116];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211116];?>"><img src="<?php echo $od["od"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-15_<?php echo $title[20211115];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211115];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211115];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211115];?>"><img src="<?php echo $od["od"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-11_<?php echo $title[20211111];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211111];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211111];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211111];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-09_<?php echo $title[20211109];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211109];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211109];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211109];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-08_<?php echo $title[20211108];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211108];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211108];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211108];?>"><img src="<?php echo $md["md"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-05_<?php echo $title[20211105];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211105];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211105];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211105];?>"><img src="<?php echo $gd["gd"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-04_<?php echo $title[20211104];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211104];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211104];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211104];?>"><img src="<?php echo $gd["gd"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-02_<?php echo $title[20211102];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211102];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211102];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211102];?>"><img src="<?php echo $gd["gd"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-11-01_<?php echo $title[20211101];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211101];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211101];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211101];?>"><img src="<?php echo $gd["gd"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-26_<?php echo $title[20211026];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211026];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211026];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211026];?>"><img src="<?php echo $gd["gd"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-25_<?php echo $title[20211025];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211025];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211025];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211025];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-22_<?php echo $title[20211022];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211022];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211022];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211025];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-21_<?php echo $title[20211021];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211021];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211021];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-20_<?php echo $title[20211020];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202110201];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202110202];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202110201];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202110202];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[202110201];?>"><img src="<?php echo $od["od"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $yl[202110202];?>"><img src="<?php echo $od["od"];?>"></a></td>      
            </tr>
            <tr>
              <td>2021-10-19_<?php echo $title[20211019];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211019];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211019];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-18_<?php echo $title[20211018];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211018];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211018];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211018];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-15_<?php echo $title[20211015];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211015];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211015];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211015];?>"><img src="<?php echo $md["md"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-13_<?php echo $title[20211013];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211013];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211013];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-12_<?php echo $title[20211012];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211012];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211012];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-11_<?php echo $title[20211011];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211011];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211011];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211011];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-09_<?php echo $title[20211009];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211009];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211009];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211009];?>"><img src="<?php echo $gd["gd"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-08_<?php echo $title[20211008];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211008];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211008];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211008];?>"><img src="<?php echo $md["md"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-07_<?php echo $title[20211007];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202110071];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202110072];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202110071];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202110072];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-06_<?php echo $title[20211006];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211006];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211006];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-05_<?php echo $title[20211005];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211005];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211005];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-04_<?php echo $title[20211004];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20211004];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20211004];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20211004];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-10-02_<?php echo $title[20211002];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202110021];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202110022];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202110021];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202110021];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[202110021];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $yl[202110021];?>"><img src="<?php echo $gd["gd"];?>"></a></td>      
            </tr>
            <tr>
              <td>2021-10-01_<?php echo $title[20211001];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202110011];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202110012];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 3" target="_blank" href="<?php echo $gd[202110013];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 4" target="_blank" href="<?php echo $gd[202110014];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 5" target="_blank" href="<?php echo $gd[202110015];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202110011];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202110012];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 3" target="_blank" href="<?php echo $b2[202110013];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 4" target="_blank" href="<?php echo $b2[202110014];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 5" target="_blank" href="<?php echo $b2[202110015];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[202110011];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $yl[202110012];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 3" target="_blank" href="<?php echo $yl[202110013];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 4" target="_blank" href="<?php echo $yl[202110014];?>"><img src="<?php echo $gd["gd"];?>"></a></td>  
            </tr>
            <tr>
              <td>2021-09-30_<?php echo $title[20210930];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202109301];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202109302];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202109301];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202109302];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-29_<?php echo $title[20210929];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210929];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210929];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-28_<?php echo $title[20210928];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210928];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210928];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-27_<?php echo $title[20210927];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210927];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210927];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20210927];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-25_<?php echo $title[20210925];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210925];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210925];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-24_<?php echo $title[20210924];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210924];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210924];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-23_<?php echo $title[20210923];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210923];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210923];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-22_<?php echo $title[20210922];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202109221];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202109222];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 3" target="_blank" href="<?php echo $gd[202109223];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202109221];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202109222];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 3" target="_blank" href="<?php echo $b2[202109223];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-21_<?php echo $title[20210921];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210921];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210921];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-20_<?php echo $title[20210920];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210920];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210920];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20210920];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-18_<?php echo $title[20210918];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210918];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210918];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-17_<?php echo $title[20210917];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210917];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210917];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-16_<?php echo $title[20210916];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210916];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210916];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-15_<?php echo $title[20210915];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210915];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210915];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-14_<?php echo $title[20210914];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210914];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210914];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-13_<?php echo $title[20210913];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210913];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210913];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $yl[20210913];?>"><img src="<?php echo $mg["mg"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-11_<?php echo $title[20210911];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210911];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210911];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-10_<?php echo $title[20210910];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210910];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210910];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-09_<?php echo $title[20210909];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202109091];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202109092];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202109091];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202109092];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-08_<?php echo $title[20210908];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202109081];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202109082];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202109081];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202109082];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-07_<?php echo $title[20210907];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210907];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210907];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-06_<?php echo $title[20210906];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210906];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210906];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-03_<?php echo $title[20210903];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210903];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210903];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-02_<?php echo $title[20210902];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210902];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210902];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-09-01_<?php echo $title[20210901];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202109011];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202109012];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202109011];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202109012];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-31_<?php echo $title[20210831];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210831];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210831];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-27_<?php echo $title[20210827];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210827];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210827];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-26_<?php echo $title[20210826];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210826];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210826];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-25_<?php echo $title[20210825];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202108251];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202108252];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202108251];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202108252];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-24_<?php echo $title[20210824];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210824];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210824];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-23_<?php echo $title[20210823];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210823];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210823];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-20_<?php echo $title[20210820];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210820];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210820];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-19_<?php echo $title[20210819];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210819];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210819];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-17_<?php echo $title[20210817];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210817];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210817];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-16_<?php echo $title[20210816];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210816];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210816];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-14_<?php echo $title[20210814];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210814];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210814];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-13_<?php echo $title[20210813];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[202108131];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $gd[202108132];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[202108131];?>"><img src="<?php echo $b2["b2"];?>"></a>&nbsp&nbsp
                  <a title="parte 2" target="_blank" href="<?php echo $b2[202108132];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-12_<?php echo $title[20210812];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210812];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210812];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-10_<?php echo $title[20210810];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210810];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210810];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-06_<?php echo $title[20210806];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210806];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210806];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-05_<?php echo $title[20210805];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210805];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210805];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-04_<?php echo $title[20210804];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210804];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210804];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-03_<?php echo $title[20210803];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210803];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210803];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            <tr>
              <td>2021-08-02_<?php echo $title[20210802];?></td>
              <td><a title="parte 1" target="_blank" href="<?php echo $gd[20210802];?>"><img src="<?php echo $gd["gd"];?>"></a>&nbsp&nbsp
                  <a title="parte 1" target="_blank" href="<?php echo $b2[20210802];?>"><img src="<?php echo $b2["b2"];?>"></a></td>
            </tr>
            
            
          </tbody>
        </table>
    </div>  

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
