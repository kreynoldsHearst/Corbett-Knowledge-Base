<?php
/**
 * @package WordPress
 * @subpackage corbett
 template name:map
 */
get_header(); ?>
<body>

	<div class="body">
    
    	<div class="header"><?php include 'includes/header.php'; ?></div>
            
		<script type="text/javascript">
            var count = 0;
        </script>
        
        <div class="content" style="position:relative;">
            
            <div class="mapBox">
        	
                <div class="mapText" id="mapText">
                <?php
                    $content = get_post($post->ID);
                    echo $content->post_content;
                ?>
                </div>
                
            <?php
				$id = 150; $content = get_post($id); $americas = $content->post_content; $americasTitle = $content->post_title;
				//$id = 150; $content = get_post($id); $northamerica = $content->post_content;
				//$id = 152; $content = get_post($id); $southamerica = $content->post_content;
				$id = 146; $content = get_post($id); $europe = $content->post_content; $europeTitle = $content->post_title;
				$id = 148; $content = get_post($id); $africa = $content->post_content; $africaTitle = $content->post_title;
				$id = 144; $content = get_post($id); $asia = $content->post_content; $asiaTitle = $content->post_title;
				//$id = 154; $content = get_post($id); $australasia = $content->post_content;
			?>
            	<div class="mapInfo" id="info-americas"><div class="mapBoxHeader"><?php echo $americasTitle; ?></div><?php echo $americas; ?></div>
            	<!--div class="mapInfo" id="info-southamerica"><div class="mapBoxHeader">South America</div><?php //echo $southamerica; ?></div-->
            	<div class="mapInfo" id="info-europe"><div class="mapBoxHeader"><?php echo $europeTitle; ?></div><?php echo $europe; ?></div>
            	<div class="mapInfo" id="info-africa"><div class="mapBoxHeader"><?php echo $africaTitle; ?></div><?php echo $africa; ?></div>
            	<div class="mapInfo" id="info-asia"><div class="mapBoxHeader"><?php echo $asiaTitle; ?></div><?php echo $asia; ?></div>
            	<!--div class="mapInfo" id="info-australasia"><div class="mapBoxHeader">Australasia</div><?php //echo $australasia; ?></div-->
            </div>
            
            <div class="map">
                <img class="overlay" src="/wp-content/themes/corbett/images/map/overlay.gif" width="738" height="364" usemap="#maplinks" />
                <img class="continent" id="americas" src="/wp-content/themes/corbett/images/map/americas-off.png" width="322" height="364" alt="North America" />
                <!--img class="continent" id="southamerica" src="/wp-content/themes/corbett/images/map/southamerica-off.png" width="118" height="155" alt="South America" /-->
                <img class="continent" id="europe" src="/wp-content/themes/corbett/images/map/europe-off.png" width="132" height="145" alt="Europe" />
                <img class="continent" id="africa" src="/wp-content/themes/corbett/images/map/africa-off.png" width="140" height="156" alt="Africa" />
                <img class="continent" id="asia" src="/wp-content/themes/corbett/images/map/asia-off.png" width="339" height="331" alt="Asia" />
                <!--img class="continent" id="australasia" src="/wp-content/themes/corbett/images/map/australasia-off.png" width="139" height="108" alt="Australasia" /-->
            </div>
            
            <map class="maplinks" name="maplinks">
                <area id="area-americas" shape="poly" coords="0,55,87,55,87,28,108,28,108,16,147,16,147,0,323,0,323,29,308,29,308,65,282,65,282,94,239,94,239,132,221,132,221,145,198,145,198,159,213,159,213,201,186,201,182,228,146,228,146,201,102,201,102,164,90,164,90,134,71,134,71,114,0,114" />
                <area id="area2-americas" shape="poly" coords="186,207,246,207,246,232,275,232,275,289,247,289,247,322,215,322,215,363,189,363,189,274,178,274,178,228,186,228" />            
                <area id="area-europe" shape="poly" coords="295,69,368,69,368,53,410,53,410,91,402,91,402,104,412,104,412,115,425,115,425,129,408,129,408,145,394,145,394,156,323,156,323,109,295,109" />       			<area id="area2-europe" shape="poly" coords="367,15,402,15,402,35,367,35" />
                <area id="area-africa" shape="poly" coords="326,156,370,156,370,164,416,164,416,183,421,183,421,196,427,196,427,204,432,204,432,210,450,210,450,240,427,240,427,257,447,257,447,309,369,309,369,260,365,260,365,228,326,228,326,224,309,224,309,170,326,170" />
                <area id="area2-asia" shape="poly" coords="596,256,612,256,612,235,659,235,659,310,710,310,710,340,682,340,682,330,639,330,639,320,621,320,621,311,574,311,574,279,583,279,583,268,596,268" />
                <area id="area-asia" shape="poly" coords="438,11,569,11,569,25,615,25,615,35,737,35,737,120,645,120,645,168,594,168,594,177,606,177,606,256,596,256,596,262,539,262,539,224,482,224,482,183,468,183,468,210,432,210,432,203,428,203,428,196,428,191,423,191,423,182,416,182,416,156,419,156,400,156,400,143,419,143,419,129,425,129,425,115,412,115,412,104,402,104,402,91,410,91,410,53,449,63,449,28,438,28" />
            </map>
            
        </div>

     <?php get_footer(); ?>