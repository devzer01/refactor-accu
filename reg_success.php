<?php include("tpl/header2.tpl");

$reg_id = isset( $_GET['reg_id'] )?$_GET['reg_id']:0;
if($reg_id != 0 ){	
	$get_data = Registration :: Get_registration_data_back($reg_id);
	
}
$get_eventdata = Registration ::  Get_event_name_by_eventID($get_data['event_id']);
$members = Registration :: Get_member_name_BY_ID($get_data['name_of_member']);
$country = Registration :: GetCountryNameBYID($get_data['country_id']);
					

 if($get_data['gender'] == 1){ $title ="Mr."; }
 elseif($get_data['gender'] == 2){$title ="Mrs.";}
 elseif($get_data['gender'] == 3){ $title ="Miss.";}
           
$to = "accu@aaccu.coop";
//$to = "sandunchanaka@gmail.com";
$subj = $get_data['name_of_part']." Registered For ".$get_eventdata['event_name'];
$msg = "<table>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Event Name</strong></td>
    <td>:</td>
    <td><strong>
   ".$get_eventdata['event_name']."</strong>
    </td>
  </tr>
  <tr>
    <td colspan=\"3\"><table align=\"left\">
      <tr>
        <td class=\"eventreg_text\">Name of Participant</td>
        <td width=\"2%\">:</td>
        <td width=\"62%\">
          <label>".$get_data['name_of_part']."</label>
       </td>
      </tr>
      <tr>
        <td valign=\"top\" class=\"eventreg_text\">Gender</td>
        <td valign=\"top\">:</td>
        <td class=\"eventreg_text\">
          <label>".$title."          
            </label>
         </td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Name of Member </td>
        <td>:</td>
        <td>".
					$members['member_name']."
        </td>
      </tr>
      <tr>
        <td valign=\"top\" class=\"eventreg_text\">Organization Address</td>
        <td valign=\"top\">:</td>
        <td>
          <label>
           ".$get_data['organization_address']."
          </label>
       </td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Country </td>
        <td>:</td>
        <td>". 
		$country['country_name']."
       </td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Work Phone </td>
        <td>:</td>
        <td>".$get_data['work_phone']."</td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Cell Phone </td>
        <td>:</td>
        <td>
		".$get_data['cell_phone']."</td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Fax </td>
        <td>:</td>
        <td>".$get_data['fax']."</td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Email </td>
        <td>:</td>
        <td>
          <label>".$get_data['email']."</label>
       </td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Organization website </td>
        <td>:</td>
        <td>
          <label>".$get_data['organization_url']."
            </label>
          </td>
      </tr>
      <tr>
         <td colspan=\"3\" class=\"eventreg_text\"><a href=\"http://www.aaccu.asia/registration_email.php?reg_id=".$reg_id."\">If you want to more details pls refer this link</a></td>
      </tr>
    </table></td>
  </tr>
</table>";
$head = "MIME-Version: 1.0\r\nContent-Type: text/html; charset=ISO-8859-1\r\nFrom:".$get_data['name_of_part']."<".$get_data['email']."> \r\nBcc:ranjith@aaccu.coop\r\nBcc:sandunchanaka@gmail.com";
mail($to, $subj, $msg, $head); ?>
<body>
    <div id="fb-root"></div>

    <div id="header">
		<div class="container">
			<div id="branding">
				<?php include("tpl/logo.tpl");?>
<div id="masdar-logo">
					
				</div>
			</div><!-- #branding -->
			<div id="access">
				<div class="skip-link screen-reader-text"><a href="#content" title="skip to content">Skip to content</a></div>
				<div id="utilities">
                <?php include("tpl/utilities.tpl");?>
<span class="clear"></span>
<?php include("tpl/main_menu.tpl");?>			</div><!-- #access -->
			<div id="header-banners">
				<div id="primary-header">
					
				</div>
				<div id="secondary-header">
					<ul class="xoxo">
						
					</ul>
				</div><!-- #secondary-header -->
				<div id="tertiary-header">
					<span class="corner g-tl"></span>
					<span class="corner g-tr"></span>
					<span class="corner gb-bl"></span>
					<span class="corner gb-br"></span>
					<ul class="xoxo">
						<!--MOD_904e4620-9cfd-4f59-a547-b87256ff6026-->

<li class="breadcrumb">
    <ul> 
        <li><a href="index.php">Home</a></li>
        <li class="separator">\</li>
		<li class="" ><a href="#">
        Registration Form &gt;&gt; </a></li>
                <li class="separator">\</li>
                <li class="" ><a href="#">Completed</a></li>
                
<!--                <li class="separator">\</li>
                <li class="current" ><a href="#">Photo Gallery</a></li>-->
                
    </ul>
</li>
<!--/MOD_904e4620-9cfd-4f59-a547-b87256ff6026-->
<!--MOD_25a1441f-8ac1-4d7e-be18-bf68bf52572d-->

<li class="share-utilities">
<?php include("tpl/share-link.tpl");?>
</li>
<!--/MOD_25a1441f-8ac1-4d7e-be18-bf68bf52572d-->

					</ul>
				</div>
				<span class="clear"></span>
			</div><!-- #header-banners -->
			<span class="clear"></span>
		</div><!-- .container -->
	</div> 
    <!-- #header -->
	<div id="main">		<div class="container">
	  <div id="content" class="print-area">
	    <!--MOD_0aff5a33-3102-49f5-9e46-91d7a3735978-->
	    <div class="content-container"> <span class="clearfix"></span>
	      <h1>Registration Form &gt;&gt;Completed</h1>
	      <p></p>
	      <!--<h2 class="section-header"><span>Fields marked with ( <span class="asterisk">*</span> ) are mandatory.</span></h2>-->
          <h4>
          <?php if($_GET["msg"] !="" || $_GET["msg"] !=0){?>
          <span class="errormsg" style="color:#D00;">
                <?php include('common/registration_massage.php'); ?>
              
</span>
          <?php }?>
          </h4>
	      <div class="section-body">
            <table width="100%" border="0">
            <tr>
              <td width="13%">&nbsp;</td>
              <td width="80%">&nbsp;</td>
              <td width="7%">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="banner_text">Registration Successful</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          </div>
	      <script type="text/javascript">
    //<!--
        $(document).ready(function () {
            $('#frmRegUrInterest').xForm(
                { 
                    submitMessage: 'Saving your information... Please wait!' 
                }
            );
            
            try{
                if(window.location.hash.length > 4){
                    var urlHash = window.location.hash.replace('#!','').toLowerCase();
                
                    $('#frm_Interests input').each(function(){
                        var id = $(this).attr('id').toLowerCase();
                        if(id.indexOf(urlHash)>0) $(this).attr('checked',true);
                    });
                }
            }catch(er){
            }
            
        });
    //-->
        </script>
        </div>
	    <!--/MOD_0aff5a33-3102-49f5-9e46-91d7a3735978-->
      </div>
	  <div id="primary">
<?php include("tpl/globle-afiliation.tpl");?>	
<?php include("tpl/development-partners-home.tpl");?>			
 <?php include("tpl/e-coop.tpl");?>				
 <?php include("tpl/access-tool.tpl");?>	                
 <?php include("tpl/benchmark.tpl");?>					
 <?php //include("tpl/co-op-year.tpl");?>
<?php include("tpl/social-media-sidebox.tpl");?>
      </div><!-- #primary -->
		  <div id="secondary">
				
		  </div><!-- #secondary -->
			<span class="clear"></span>
	  </div><!-- .container -->
	</div><!-- #main -->
	<div id="footer">
		<div id="primary-footer">
			<div class="container">
                <!--MOD_2811f601-6cbd-414b-98a0-36eea2b10c7c-->

 <?php include("tpl/footer-menu.tpl");?>

<!--/MOD_2811f601-6cbd-414b-98a0-36eea2b10c7c-->

			</div><!-- .container -->
		</div><!-- #primary-footer -->
		<div id="secondary-footer">
			<div class="container">
				<div class="primary">
                    <!--MOD_f39b07bd-de39-4cb5-9ab5-ba58220f5c82-->
                  <!--/MOD_f39b07bd-de39-4cb5-9ab5-ba58220f5c82-->

                    <span class="clear"></span>
			  </div>
				<div class="secondary">
                <?php include("tpl/footer-text.tpl"); ?>
					<span class="clear"></span>
				</div>
				<span class="clear"></span>
			</div><!-- .container -->
		</div><!-- #secondary-footer -->
	</div><!-- #footer -->
	
    </form>
    <!-- AddThis Button BEGIN  -->
    <script type="text/javascript"> 
        var addthis_config = {
            ui_delay: 200,
            services_exclude: 'print, email'
        }
        $(document).ready(function () {
            if ($('a.share-link').length > 0) {
                $('a.share-link').addClass('addthis_button').attr('href', 'http://www.addthis.com/bookmark.php?v=250&username=ra-4df33de459429749');
                var at = document.createElement('script');
                at.type = 'text/javascript';
                at.async = true;
                at.src = '../../../../s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4df33de459429749'/*tpa=http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4df33de459429749*/;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(at, s);
            }
        });
    </script>
    <!-- AddThis Button END -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10296834-28']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www/') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
