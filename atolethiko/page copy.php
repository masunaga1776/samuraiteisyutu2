<body>
<?php
get_header();
?>

<head>
<style>

.title h1{
  position:relative;
  top:110px;
  left:150px;
}

img.picture{
height:500px;
width:400px;
 box-shadow: 0 10px 25px 0 rgba(0, 0, 0, .5);
object-fit:cover;
  object-position: 50% 0%;
}

.lead-inner{
 display:flex;
 position :relative;
left:150px;
top:100px;
}

.content-left{
  position:relative;
  left:60px;
}

table{
  font-size:18px;
}

.syoukai{
font-size:18px;
position:relative;
top:50px;
}

.omake{
  position:relative;
  top:140px;
}

.playerlist h1{
  position:relative;
  left:280px;
  top:25px;
}

.playerandcoach{
  border-top: solid;
  border-top-width:7px;
  border-color:red;
}

body{
  height:1965px;
}




/*スマフォ用 */
@media screen and (max-width:670px){
 
.title h1{
  font-size:24px;
}

.title{
  position:relative;
  right:30px;
  bottom:70px;
}

.lead-inner{
 display:flex;
 flex-direction:column;
 position :relative;
left:120px;
top:35px;
width:670px;
}

 img.picture{
   height:100px;
   width:80px;
   object-fit:cover;
   object-position: 50% 0%;
}

.plofile{
  position:relative;
  right:40px;
}

.syoukai p{
 position:relative;
 bottom:50px;
 right:40px;
}

.playerlist2{
position:relative;
bottom:130px;
}

.page-footer{
  width:670px;
  position:relative;
  bottom:130px;
}

.playerandcoach{
  width:670px;
  position:relative;
}

img.pic3{
 height:450px; 
width:20%;
}

.playerlist{
  position:relative;
  left:0px;
}

.playerlist ul li{
  font-size:14px;
}

body{
  height:1500px;
}


}



/*タブレット用 */


@media screen and (max-width:1000px){

img.picture{
position :relative;
right:80px;
bottom:10px;
height:400px;
width:320px;
box-shadow: 0 10px 25px 0 rgba(0, 0, 0, .5);
object-fit:cover;
object-position: 50% 0%;
}


.title h1{
position:relative;
left:70px;
top:110px;
}

.lead-inner{
  position:relative;
  right:400px;
}

table{
font-size:14px;
position:relative;
right:100px;
}

 p{
font-size:14px;  //
}

.syoukai{
  position:relative;
  right:100px;
}

img.pic3{
 height:535px; 
width:25%;
}

.omake{
  position:relative;
  top:120px;
}

.playerlist h1{
position:relative;
left:200px;
top:20px;
}

body{
  height:1790px;
}






}






</style>
</head>




<div class="title">
<h1>
<?php 
if(have_posts()):
  while (have_posts()) : the_post(); 
    the_title();
    
  endwhile;
 endif;
//上記の役割は固定ページのデータを取り出すものである
?>
</h1>
</div>


<div class="lead-inner">
<?php 
if(have_posts()):
  while (have_posts()) : the_post(); 
  
    the_content();
  endwhile;
 endif;
//上記の役割は固定ページのデータを取り出すものである
?>
</div>

<div class="omake">
<div class="playerlist2">
<?php
get_template_part('playerlist');
?>
</div>

<div class="page-footer">
<?php get_footer();?>
</div>
</div>

</body>