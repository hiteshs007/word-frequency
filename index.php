<?php
function word_frequency($file)
        {
        	$file=strtolower($file);
        	$alphas=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
            $a_freq=array();
        	$prercent_freq=array();
                for ($i=0; $i < 26; $i++) 
                { 
                     $a_freq[$i]=substr_count($file, $alphas[$i]);
                }   
                $other_chars=substr_count($file," ");             
        	    $max= strlen($file)-$other_chars;
                if ($max==3) 
                {
                     $max=1;
                }
                else
                {
                $max= $max-3;
                }
                echo "<div  id='ks' style='border-top:1px solid blue;'>";
                for ($j=0; $j < 26; $j++) 
                {    
                     $prercent_freq[$j]=($a_freq[$j]/$max)*100;
                     $width=$prercent_freq[$j];
                     echo "<div id='js' style='background:green;width:$width%;border:1px solid blue;'>".$alphas[$j].'='.$prercent_freq[$j]."%</div>";                
                }
                echo "</div>";        
        }
?>
<title> Word Frequency Finder</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript">
	$.fx.speeds._default = 1000;
	$(function() {
		$( "#about" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
         $( "#tabs" ).tabs();
		$( "#jh" ).click(function() {
			$( "#about" ).dialog( "open" );
			return false;
		});
	});
</script>
<style type="text/css">
	body{
		background: url(jquery/HDPackSuperiorWallpapers218_010.jpg);
	}
	#kl{
		width: 1000px;
	}
	#ki{width:220px;margin-left: 20px; float: left;font-size: 20px;}
	#jh{
		width:150px; height: 34px; background: green;
		font-size: 25px;border-radius: 4px;transition:all 0.3s ease-in-out;
	}#jh:hover{
        background: cyan;cursor: hand;
	}
    input.jhs{
    	width:250px; height: 34px; background: green;
		font-size: 25px;border-radius: 4px;transition:all 0.3s ease-in-out;
        border-color:green; 
    }
    input.jhs:hover{
    	background: cyan;cursor: hand;
    	border-color:cyan; 
    }
</style>
<ul>
<li style="display:inline"><div id='jh'>About this app</div></li>
	
</ul>
<div id='kl'>
 <div id="ki">
 	<b style='text-decoration:underline'>How to use </b><br>
 	Paste the paragraph in which frequency has to be analised then hit 'Find frequency!' button.
 	frequency will be analised within micro-seconds...

 </div>
 <div id="ko">
<form action="<?php  $_SERVER["PHP_SELF"]; ?>" method='POST'>
<center><textarea style='width:500px; height:300px;text-align:center;border-color:cyan;opacity:0.7;color:blue;border-radius:7px;border-image:img.jpg' name="hs">
	
</textarea><br>
<input class='jhs' type="submit" value="Find frequency!"/>
</form></center></div>
<h2>Word frequency</h2>

<div id='about' title="about this app">
This app can be used in finding the frequencies of a to z alphabets in a paragraph
which is very useful for learning the characterists of alphabets..
and it can be easily  found that which alphabet is most encountered in a paragraph


</div> 
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Word Frequencies</a></li>
		<li><a href="#tabs-2">coming soon..</a></li>
		<li><a href="#tabs-3">coming soon..</a></li>
	</ul>
	<div id="tabs-1">
<?php
if(!empty($_POST['hs']))
 {
 	
 	word_frequency($_POST['hs']);

 }
 ?>
    </div>
	<div id="tabs-2">
		<p><a href="http://facebook.com/HiteshSaini99">Tell me what can I put there</a></p>
		</div>
	<div id="tabs-3">
		<p>Say Hello To <a href="http://hiteshs.netai.net">HITESH SAINI</a></p>
		</div>
</div>