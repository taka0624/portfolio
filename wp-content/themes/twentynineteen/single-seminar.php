<?php get_header(); ?>

  <main>
	

		<section class="content-area">
		
					<time style="display:none;">
						<span class="koukai">公開日:<?php the_time('Y/m/d');?></span>
						<?php if(get_the_time('Y/m/d') != get_the_modified_date('Y/m/d')):?>
						<span class="kousin">最終更新日:<?php the_modified_date('Y/m/d') ?></span>
						<?php endif;?>
					</time>

          <?php if(have_posts()): while(have_posts()):the_post(); ?>
          
		  <div class="section_seminar" id="seminar_mv">
			  
			 
						  <?php if( has_post_thumbnail() ): ?>
						  <div class="seminar_thumbnail">
						    <?php the_post_thumbnail('large'); ?>
						  </div>
						  <?php endif; ?>
						  
						
						
						<h1 id="seminar_title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
					  

<?php

    foreach($meta_arr as $meta => $meta_val) {
        $true = ( $meta_val[1] == 'single' )? true: false;
        $val = $meta.'Val';
        $nam = $meta.'Nam';
        $$nam = $meta_val[0];
        $$val = get_post_meta( $post->ID, $meta, $true );
    }
	
?>


<div class="section_seminar" id="seminar_check">
<?php foreach ($meta_arr['esArea'][2] as $optn): ?>
<?php if ( is_array($esAreaVal[0]) ) {
	if ( in_array($optn, $esAreaVal[0]) ) {
	if($optn =="WEBセミナー"){
?>

	<h2>こんなお悩みありませんか？</h2>
<?php
	}
	}
	} 
?>
<?php endforeach ?>

	
	
	<div><?php echo $esCatchcopyVal ?></div>
</div>

<div class="section_seminar" id="seminar_sumally">
	<h2>セミナー概要</h2>
	<p><?php echo $esProfeelVal ?></p>
<table class="table table-bordered">
	<tr><th>セミナーでお伝えすること</th><td><?php echo $table_1Val ?></td></tr>
	<tr><th>対象者</th><td><?php echo $table_2Val ?></td></tr>
	<tr><th>日程</th><td><?php echo $table_3Val ?></td></tr>
	<tr><th>参加費</th><td><?php echo $table_4Val ?></td></tr>
	<tr><th>主催</th><td><?php echo $table_5Val ?></td></tr>
	
</table>
</div>



<?php foreach ($meta_arr['esArea'][2] as $optn): ?>
<?php if ( is_array($esAreaVal[0]) ) {
	if ( in_array($optn, $esAreaVal[0]) ) {
	if($optn =="WEBセミナー"){
?>

<div class="section_seminar" id="seminar_voice">
<h2>参加者からの声</h2>

<div>
<div class="voice cf l"><figure class="icon"><img src="https://saichat.jp/wp-content/themes/saichat_themes/img/user-icon.png"><figcaption class="name"></figcaption></figure><div class="voicecomment"><?php echo $esRental_1Val ?></div></div>
<div class="voice cf l"><figure class="icon"><img src="https://saichat.jp/wp-content/themes/saichat_themes/img/user-icon.png"><figcaption class="name"></figcaption></figure><div class="voicecomment"><?php echo $esRental_2Val ?></div></div>
<div class="voice cf l"><figure class="icon"><img src="https://saichat.jp/wp-content/themes/saichat_themes/img/user-icon.png"><figcaption class="name"></figcaption></figure><div class="voicecomment"><?php echo $esRental_3Val ?></div></div>

</div>
</div>
<?php
	}
	}
	} 
?>
<?php endforeach ?>


<div class="section_seminar" id="seminar_bottom">
<h2>参加方法/アクセス</h2>
<div><?php echo $esNotesVal ?></div>
</div>					

<style>
.crp_related{
	display:none;
}
.seminar_thumbnail{
	margin:0 auto 20px auto;
	overflow:hidden;
	max-width:850px;
}
#seminar_mv{
background:#05244a;
text-align:center;
color:#fff;
}
#seminar_mv p{
max-width:80%;
	width:980px;
	margin:0 auto;
	text-align:left;
	line-height:1.5;
}
#seminar_title{
font-size:40px;
margin:0;
padding:0;
font-weight:bold;
}

#seminar_sumally p{
max-width:80%;
	width:980px;
	margin:0 auto;
	text-align:left;
	line-height:1.5;
}
#seminar_sumally table{
background:#ccc;
border-spacing: 1px;
max-width:80%;
	width:980px;
	margin:0 auto;
	text-align:left;
	line-height:1.5;
}
#seminar_sumally td,
#seminar_sumally th{
	background:#fff;
	padding:20px;
}
#seminar_sumally th{width:15%;
	background:#05244a;
	color:#fff;
}
#seminar_check{
	font-size:24px;
	font-weight:bold;
	text-align:center;
	background:#f1f1f1;
}
#seminar_voice div{
	background:#fff;
	color:#333;
	max-width:80%;
	width:980px;
	margin:20px auto 0px auto;
}

#seminar_check div{
	max-width:80%;
	width:780px;
	padding:40px;
	margin:0px auto;
}
#seminar_check li{
	padding:10px 0;
	text-align:left;
}
#seminar_check li::before {
  content: "！";
  color: #fff;
background: #b3174e;
border-radius: 50%;
text-align: center;
float: left;
width: 30px;
height: 30px;
display: block;
margin-right: 10px;
}
.section_seminar{
	padding:40px 0;
	text-align:center;
}
.section_seminar h2{font-size:24px;}

#seminar_bottom{
background:#05244a;
-webkit-background-size: cover;
background-size: cover;
text-align:center;
margin-bottom:-20px;
color:#fff;
}
#seminar_sumally div,
#seminar_bottom div{
	background:#fff;
	color:#333;
	max-width:80%;
	width:980px;
	padding:40px;
	margin:20px auto;
}
#seminar_bottom a{color:#1a00ff;}

/* sp */
@media screen and (max-width: 767px){
#seminar_mv{
	padding:0px;
}
#seminar_check div{
	padding:0;
	font-size:18px;
}
	#seminar_title{font-size:24px;}
	#seminar_check div,
	#seminar_sumally p,
	#seminar_mv p,
	#seminar_bottom div,
	#seminar_sumally table{
		max-width:92% !important;
		width:92%;	
	}

	#seminar_voice div{
		max-width:98% !important;
		margin:20px 0 0 0 !important;

	}
	#seminar_voice div .voice{
		max-width:98% !important;
		margin:0 !important;
	}	
	#seminar_voice div .voice{
		max-width:98% !important;
		margin:0 !important;
	}
	.voice.big .icon, .voice .icon{
	width:180px;
	}
}
</style>       
            
          <?php endwhile; endif; ?>
        
  	</section><!-- #primary -->
  
    

</main><!-- #main -->
<?php get_footer(); ?>
