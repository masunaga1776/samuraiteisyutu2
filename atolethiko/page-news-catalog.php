<?php
/*
Template Name: アトレティコニュース一覧
*/
?>

<?php
get_template_part('header-2');
?>

<head>
<style>

.haikei1
    {
  background-image:  url('https://p4.wallpaperbetter.com/wallpaper/393/1015/689/sports-atletico-madrid-emblem-logo-wallpaper-preview.jpg');
  background-attachment: fixed;
  background-repeat:no-repeat;
  background-size:1376px 860px;
  background-position: 0 -100px;  /*背景画像の上の部分を切り取る。*/
}


 .center1{
 position:relative;
 top:50px;  
background: rgba(250,255,255,0.5);
width:100%;
}

.news-top{
text-align:center;
font-size:35px;
font-weight: bold ;
position:relative;
top:30px;
}

.news-title a:hover{
color:#77FFFF;
}

.news-p{
text-align: center;
}

.news-title{
text-align:center;
}


.news-page-title{
text-align: center ;
font-size:35px;
font-weight: bold ;
position:relative;
top:30px;
}

.news-content{
position:relative;
top:30px;

}



.news-footer{
position:relative;
top:160px;
pointer-events: none; /*divが重なり合っているところのスイッチを有効化する*/
}


.news-title a{
text-decoration: none;
}


body{
  height:2320px;
}


/*タブレット用タブレット用タブレット用タブレット用タブレット用タブレット用タブレット用タブレット用タブレット用タブレット用タブレット*/
@media screen and (max-width:1000px){

.haikei1{
width:1000px;
background-size:1000px 625px;
background-position: 0 0px;
} 

body{
  height:2320px;
}

.news-footer{
width:1000px;
}

}


/*スマフォ用*/ 
@media screen and (max-width:670px){

  .haikei1{
width:670px;
background-size:770px 460px;
background-position: -50px 100px;
} 

.center1{
 position:relative;
 top:10px;  
}


body{
  height:1995px;
}

.news-footer{
width:670px;
}

}






</style>

<title>ニュース一覧</title>

</head>

<body>

<div class="haikei1">
<div class="center1">
<div class="news-top">
<?php 
if(have_posts()):
  while (have_posts()) : the_post(); 
    the_title();
  endwhile;
 endif;
//上記の役割は固定ページのデータを取り出すものである
?>
</div>

<div class="news-content">
<?php
get_template_part('news-content');
?>

<?php
get_template_part('news-content1');
?>
</div>



</div>
</div>




<div class="news-footer">
<?php 
get_footer();
?>
</div>

</body>