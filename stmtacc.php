<?php
include("header.php");
?>
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
    <table width="484" border="1">
      <tr>
        <th width="401" scope="col">STATEMENTS OF ACCOUNTS</th>
      </tr>
      <tr>
        <td>SELECT AND ACCOUNT NUMBER </td>
      </tr>
      <tr>
        <td>ACCOUNT NUMBER
          <select name="select2" id="select2">
          </select>
           <input type="submit" name="button2" id="button2" value="GO" /></td>
      </tr>
      <tr>
        <td>LAST 
          <label for="textfield"></label>            <input type="text" name="textfield2" id="textfield" /> 
          TRANSACTION</td>
      </tr>
      <tr>
        <td>FROM    
          <label for="textfield2"></label>            <input type="text" name="textfield" id="textfield2" /></td>
      </tr>
      <tr>
        <td>TO
          <label for="textfield3"></label>          <input type="text" name="textfield3" id="textfield3" /></td>
      </tr>
      <tr>
        <td>TRANSACTION TYPE 
          <select name="select" id="select">
          </select></td>
      </tr>
      <tr>
        <td><form id="form1" name="form1" method="post" action="">
          <input type="submit" name="button3" id="button3" value="DISPLAY" />
        </form></td>
      </tr>
  </table>
</div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            
       <?php
	   include("myaccountssidebar.php");
	   ?>
                

                
                <div class="cleaner_h40"></div>
                
                <h2>Testimonial</h2>
                <blockquote>
                <p>In ac libero urna. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                
                <cite>David - <span>Web Specialist</span></cite>
                </blockquote>
            
            </div>
                
		<div class="cleaner"></div>
   </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>