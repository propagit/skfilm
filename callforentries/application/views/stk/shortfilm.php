<script type="text/javascript">
   $j(document).ready(function()
  {  
    $j("form#shortfilmForm").submit(function() 
	{
		
		if($j("input[name='Film title']").val() == '' || $j("input[name='Film title']").val() == null)
		{
			alert('Please enter film title');
			$j("input[name='Film title']").focus();
			return false;
		}
		
		if($j("input[name='Year Completed']").val() == '' || $j("input[name='Year Completed']").val() == null)
		{
			alert('Please enter Year Completed');
			$j("input[name='Year Completed']").focus();
			return false;
		}
		if($j("input[name='Film running mins']").val() == '' || $j("input[name='Film running mins']").val() == null)
		{
			alert('Please enter Film running mins');
			$j("input[name='Film running mins']").focus();
			return false;
		}
		if($j("input[name='Film running seconds']").val() == '' || $j("input[name='Film running seconds']").val() == null)
		{
			alert('Please enter Film running seconds');
			$j("input[name='Film running seconds']").focus();
			return false;
		}
		if($j("input[name='Producer']").val() == '' || $j("input[name='Producer']").val() == null)
		{
			alert('Please enter Producer');
			$j("input[name='Producer']").focus();
			return false;
		}
		if($j("input[name='Director']").val() == '' || $j("input[name='Director']").val() == null)
		{
			alert('Please enter Director');
			$j("input[name='Director']").focus();
			return false;
		}
		if($j("input[name='Screenwriter']").val() == '' || $j("input[name='Screenwriter']").val() == null)
		{
			alert('Please enter Screenwriter');
			$j("input[name='Screenwriter']").focus();
			return false;
		}
		if($j("#sypnosis").val() == '' || $j("#sypnosis").val() == null)
		{
			alert('Please enter sypnosis');
			$j("#sypnosis").focus();
			return false;
		}
		if($j("#publicity").val() == '' || $j("#publicity").val() == null)
		{
			alert('Please enter publicity');
			$j("#publicity").focus();
			return false;
		}
		if($j("input[name='Principal first name']").val() == '' || $j("input[name='Principal first name']").val() == null)
		{
			alert('Please enter Principal first name');
			$j("input[name='Principal first name']").focus();
			return false;
		}
		if($j("input[name='Principal last name']").val() == '' || $j("input[name='Principal last name']").val() == null)
		{
			alert('Please enter Principal last name');
			$j("input[name='Principal last name']").focus();
			return false;
		}
		if($j("input[name='Principal position']").val() == '' || $j("input[name='Principal position']").val() == null)
		{
			alert('Please enter Principal position');
			$j("input[name='Principal position']").focus();
			return false;
		}
		
		if($j("input[name='Principal address']").val() == '' || $j("input[name='Principal address']").val() == null)
		{
			alert('Please enter Principal address');
			$j("input[name='Principal address']").focus();
			return false;
		}
		if($j("input[name='Principal suburb']").val() == '' || $j("input[name='Principal suburb']").val() == null)
		{
			alert('Please enter Principal suburb');
			$j("input[name='Principal suburb']").focus();
			return false;
		}
		if($j("input[name='Principal postcode']").val() == '' || $j("input[name='Principal postcode']").val() == null)
		{
			alert('Please enter Principal postcode');
			$j("input[name='Principal postcode']").focus();
			return false;
		}
		if($j("input[name='Telephone business hours']").val() == '' || $j("input[name='Telephone business hours']").val() == null)
		{
			alert('Please enter Telephone business hours');
			$j("input[name='Telephone business hours']").focus();
			return false;
		}
		if($j("input[name='Telephone after hours']").val() == '' || $j("input[name='Telephone after hours']").val() == null)
		{
			alert('Please enter Telephone after hours');
			$j("input[name='Telephone after hours']").focus();
			return false;
		}
		if($j("input[name='email private']").val() == '' || $j("input[name='email private']").val() == null)
		{
			alert('Please enter email private');
			$j("input[name='email private']").focus();
			return false;
		}
		if($j("input[name='email public']").val() == '' || $j("input[name='email public']").val() == null)
		{
			alert('Please enter email public');
			$j("input[name='email public']").focus();
			return false;
		}
		if($j("input[name='return address']").val() == '' || $j("input[name='return address']").val() == null)
		{
			alert('Please enter return address');
			$j("input[name='return address']").focus();
			return false;
		}
		if($j("input[name='return suburb']").val() == '' || $j("input[name='return suburb']").val() == null)
		{
			alert('Please enter return suburb');
			$j("input[name='return suburb']").focus();
			return false;
		}
		if($j("input[name='return postcode']").val() == '' || $j("input[name='return postcode']").val() == null)
		{
			alert('Please enter return postcode');
			$j("input[name='return postcode']").focus();
			return false;
		}
		if(!$j("input[name='payment_option']:checked").val())
		{
			alert('Please choose your payment option');
			return false;
		}
	});  
  });
   function ratio_other()
   {
	   if($j('select#screening_ratio').val() == 'Other')
	   {
		   $j('#ratio_other').show();
	   }
	   else
	   {
		   $j('#ratio_other').hide();
	   }
   }
</script>
<div id="bodier_page">
    <div id="content">
       <div class="sponsor">
    	<div class="page_heading">Short Film Competition Entry Form</div>
        <p><br/>This application needs to be completed in one sitting. We recommend you print out a copy of the form after completion and return it with all the relevant information. It is important that ALL the information you provide is correct and up to date.<br/></p>
        <p>&nbsp;</p>
        <p><strong>Entry fee is $33 (including GST)<br/></strong></p>
         <p>&nbsp;</p>
        <p>
There are <strong>two payment options</strong> for this application process – you can either pay online with a credit card or by posting in a cheque or money order. If you choose the online payment option, it must be competed at the end of this application – you cannot return and pay at another time.</p>
        <p>&nbsp;</p>
        <p><strong>Please follow the payment options at the end of the application.</strong></p>
        <p>&nbsp;</p>
        <p>Please complete the following form:</p><p>&nbsp;</p>
        <p><span class="required">*</span> <span style="font-style:italic; font-size:12px">denotes required field</span></p>
        <p>&nbsp;</p>
        <div id="form-container">
          <form name="shortfilmForm" id="shortfilmForm" method="post" action="<?=base_url()?>stk/submit_form">
             <div class="form-row">
                <div class="row-title">
                  Film Title<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Film title" style="width:288px" />
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Date Film Completed<span class="required">*</span>
                </div>
                <div class="row-input">
                 <select name="Month completed">
                   <option value="January">Jan</option>
                   <option value="February">Feb</option>
                   <option value="March">Mar</option>
                   <option value="April">Apr</option>
                   <option value="May">May</option>
                   <option value="June">Jun</option>
                   <option value="July">Jul</option>
                   <option value="August">Aug</option>
                   <option value="September">Sep</option>
                   <option value="October">Oct</option>
                   <option value="November">Nov</option>
                   <option value="December">Dec</option>
                 </select>
                 &nbsp;
                 Year&nbsp;&nbsp;<input type="text" name="Year Completed" style="width:181px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Running Time<span class="required">*</span>
                </div>
                <div class="row-input">Mins&nbsp;&nbsp;
                 <input type="text" name="Film running mins" style="width:78px"/>
                 &nbsp;&nbsp;Seconds&nbsp;&nbsp;
                 <input type="text" name="Film running seconds" style="width:78px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                 State where film was made<span class="required">*</span>
                </div>
                <div class="row-input">
                 <select name="where film  was made">
                   <option value="VIC">VIC</option>
                   <option value="NSW">NSW</option>
                   <option value="SA">SA</option>
                   <option value="ACT">ACT</option>
                   <option value="WA">WA</option>
                   <option value="NT">NT</option>
				   <option value="QLD">QLD</option>
				   <option value="TAS">TAS</option>
                 </select>
                
                </div>
             </div>
             
             <!-- new field -->
             <div class="form-row">
                <div class="row-title">
                 Link to Film preview (if not submitting on DVD)
                </div>
                <div class="row-input">
                 <input type="text" name="film_link" style="width:261px;"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                 Password
                </div>
                <div class="row-input">
                 <input type="text" name="account_password" style="width:261px;"/>
                </div>
             </div>
             <p>*please note, this is not for us to download the film, <br>
             but to watch via Vimeo or YoutTube through a private link</p>
            <p>&nbsp;</p>
             <!-- end new film field --> 
             
             <p>&nbsp;</p>
             <p><span class="page_boldheading">FILM DETAILS</span>
                <p>&nbsp;</p>
             <div class="form-row">
                <div class="row-title">
                  Producer<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Producer" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Director<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Director" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Screenwriter/s<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Screenwriter" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                    Director of Photography
                </div>
                <div class="row-input">
                  <input type="text" name="Director of Photography" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                    Production Designer
                </div>
                <div class="row-input">
                  <input type="text" name="Production Designer" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                     Sound Recordist
                </div>
                <div class="row-input">
                  <input type="text" name="Sound Recordist" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                     Editor
                </div>
                <div class="row-input">
                  <input type="text" name="Editor" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                     Composer(if original score)
                </div>
                <div class="row-input">
                  <input type="text" name="Composer" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                     Post Prod Sound/ Sound Design
                </div>
                <div class="row-input">
                  <input type="text" name="Post Prod Sound/Sound Design" style="width:288px"/>
                </div>
             </div>
              <div class="form-row">
                <div class="row-title">
                    Visual Effects
                </div>
                <div class="row-input">
                  <input type="text" name="Visual Effects" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                    Animator/s
                </div>
                <div class="row-input">
                  <input type="text" name="Animator" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                    Other Key Crew
                </div>
                <div class="row-input">
                  <input type="text" name="Other Key Crew" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                    Principal Cast
                </div>
                <div class="row-input">
                  <input type="text" name="Principal Cast" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title" style="width:368px;">
                  Genre
                </div>
             </div>
              <div style="margin-top:5px;">
                <table cellpadding="0" cellspacing="0" border="0">
                  <tr valign="top" height="30"><td valign="top">
                 
                  <input type="checkbox" name="Genre[]" value="Drama" /></td>
                      <td valign="top" width="10">&nbsp;</td>
                      <td valign="top">Drama</td>
                  </tr>
                  <tr height="30" valign="top"><td valign="top"><input type="checkbox" name="Genre[]" value="Comedy" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Comedy</td>
                  </tr>
                  <tr height="30" valign="top"><td valign="top"><input type="checkbox" name="Genre[]" value="Thriller" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Thriller</td>
                  </tr>
                  <tr height="30" valign="top"><td valign="top"><input type="checkbox" name="Genre[]" value="Horror" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Horror</td>
                  </tr>
                  <tr height="30" valign="top"><td valign="top"><input type="checkbox" name="Genre[]" value="Animation" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Animation</td>
                  </tr>
                  <tr height="30" valign="top"><td valign="top"><input type="checkbox" name="Genre[]" value="Documentary" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Documentary</td>
                  </tr>
                  <tr height="30" valign="top"><td valign="top"><input type="checkbox" name="Genre[]" value="Science Fiction" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Science Fiction</td>
                  </tr>
                  <tr height="30" valign="top"><td valign="top"><input type="checkbox" name="Genre[]" value="Childrens" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Childrens</td>
                  </tr>
                  <tr height="30" valign="top"><td valign="top"><input type="checkbox" name="Genre[]" value="Experimental" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Experimental</td>
                  </tr>
                  
                </table>
              </div>
               <div class="form-row" style="margin-top:12px">
                <div class="row-title">
                 <span style="font-weight:bold">Synopsis</span><span class="required">*</span><br/>
                 <span class="information_text">(Must not exceed 25 words. The Festival reserves the right to edit the synopsis for the printed program).</span>
                </div>
                <div class="row-input">
                <textarea rows="8" cols="50" id="sypnosis" name="sypnosis"></textarea>
                </div>
                <p class="information_text">Please do not cut and paste into this section as it will affect <br/> the formatting and you may lose some text.</p>
             </div>
             <div class="form-row" style="margin-top:12px">
                <div class="row-title">
                 <span style="font-weight:bold">Publicity</span><span class="required">*</span><br/>
                 <em>Please provide us with some information about your film that we can use for publicity eg screening history, principal cast biogs, any other interesting information.</em>
                </div>
                <div class="row-input">
                <textarea rows="8" cols="50" name="publicity" id="publicity"></textarea>
                </div>
                <p class="information_text">(Must not exceed 25 words. The Festival reserves <br/> the right to edit publicity for the printed program).
                <br/>Please do not cut and paste into this section as it will affect <br/> the formatting and you may lose some text.</p>				
             </div>
			 <div class="form-row" style="margin-top:12px">
                <div class="row-title">
                Does the film have an original score?<span class="required"></span>
                </div>
                <div class="row-input">
                 <select name="is_film_score">
                   <option value="Yes">Yes</option>
                   <option value="No">No</option>
               
                 </select>
                 
                </div>
             </div>
			 <div style="clear:both"></div>
             <div class="form-row">
                <div class="row-title">
                   Is this entry a student production?<span class="required">*</span>
                </div>
                <div class="row-input">
                  <select name="is student production">
                   <option value="Yes">Yes</option>
                   <option value="No">No</option>
                 </select>
                </div>
             </div>
             <div style="clear:both"></div><br/>
             <div class="form-row">
                <div class="row-title"><span id="student_production">If yes please state the name of the educational institution</span>
                 </div>
                 <div class="row-input"><input type="text" name="education institution" style="width:288px" /></div>
             </div>
            <div style="clear:both"></div>
             <br/>
             <div class="form-row">
                <div class="row-title">
               Has this film been screened or broadcast publicly in Australia (or will it be screened in the near future)?
                </div>
                <div class="row-input">
                 <select name="screened or broadcast publicly in Australia">
                   <option value="Yes">Yes</option>
                   <option value="No">No</option>
               
                 </select>
                 
                </div>
             </div>
             <!--
			 <div class="form-row">
                <div class="row-title">
                 Is your entry...
                </div>
                <div class="row-input">
                 <select name="is your entry">
                   <option value="An independent release">An independent release</option>
                   <option value="A major recording company release">A major recording company release</option>
               
                 </select>
                 
                </div>
             </div>
			 -->
			 <br/>
              <div class="form-row">
			  	<p style="line-height: 23px;padding-bottom:3px" class="information_text"><strong>Please note: The next 3 questions DO NOT affect your eligibility:</strong></p>
                <div class="row-title">
                If selected for screening, will this entry be a Victorian Premiere?<span class="required">*</span>
                </div>
                <div class="row-input">
                 <select name="this entry to be a Victorian Premiere">
                   <option value="Yes">Yes</option>
                   <option value="No">No</option>
               
                 </select>
                 
                </div>
             </div>
             <div style="clear:both"></div>
             <br/>
             <div class="form-row" style="margin-top:6px">
                <div class="row-title">
                   Have you, or do you intend to enter any other Australian film festivals in 2014 or 2015
                </div>
                <div class="row-input">
                  <select name="intend to enter any other Australian film festivals">
                   <option value="Yes">Yes</option>
                   <option value="No">No</option>
               
                 </select>
                  
                </div>
             </div>
             <div style="clear:both"></div>
             <br/>
             <div class="form-row">
                <div class="row-title"><span id="student_production">If yes, please specify which festival</span>
                </div>
                <div class="row-input"><input type="text" name="other Australian film festivals intent to enter" style="width:288px"/></div>
             </div>
             <div style="clear:both"></div><br/>
             <div class="form-row" style="margin-top:6px">
                <div class="row-title">
                   Films that are written, directed or produced by Aboriginal filmmakers qualify for the Festival award:  Best Achievement in Aboriginal Filmmaking. Should this film be considered for this Award?
                </div>
                <div class="row-input">
                  <select name="by_Aboriginal_filmmakers">
                   <option value="Yes">Yes</option>
                   <option value="No">No</option>
               
                 </select>
                  
                </div>
             </div>
               <p>&nbsp;</p>
             <p class="page_boldheading"><strong>PRINCIPAL CONTACT DETAILS</strong>
                <p>&nbsp;</p>
                <p>This person will be the main contact for the duration of the competition. All correspondence, including invitations, will be sent to this address. It is the entrant's responsibility to notify the Festival if any of these details change.</p>
                 <p>&nbsp;</p>
              <div class="form-row">
                <div class="row-title">
                  First Name<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Principal first name" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Last Name<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Principal last name" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Position (eg Producer, Director etc)<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Principal position" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Production Company
                </div>
                <div class="row-input">
                  <input type="text" name="Principal production company" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Address<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Principal address" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Suburb<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Principal suburb" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  State<span class="required">*</span>
                </div>
                <div class="row-input">
                  <select name="Principal state">
                   <option value="VIC">VIC</option>
                   <option value="NSW">NSW</option>
                   <option value="SA">SA</option>
                   <option value="ACT">ACT</option>
                   <option value="WA">WA</option>
                   <option value="NT">NT</option>
				   <option value="QLD">QLD</option>
				   <option value="TAS">TAS</option>
                 </select>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Postcode<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Principal postcode" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Telephone (business hours)<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Telephone business hours" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Telephone (after hours)<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="Telephone after hours" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Mobile
                </div>
                <div class="row-input">
                  <input type="text" name="Principal mobile" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Fax
                </div>
                <div class="row-input">
                  <input type="text" name="Principal fax" style="width:288px"/>
                </div>
             </div>
              <div class="form-row">
                <div class="row-title">
                  Email address (private)<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="email private" style="width:288px"/>
                </div>
             </div>
              <div class="form-row">
                <div class="row-title">
                  Email address (public - can be provided to media, other filmmakers, festivals or general inquiries)<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="email public" style="width:288px"/>
                </div>
             </div>
             <p>&nbsp;</p>
             <p class="page_boldheading"><strong>SCREENING INFORMATION</strong></p><br/>
             <p>If your film is selected for the Festival,<br/>would you prefer to upload a screening copy to secure FTP site?
             	<input type="checkbox" name="upload_ftp" value="yes"> Yes/No</p><br/>
             <div class="form-row">
                <div class="row-title">
                 Screening ratio<span class="required">*</span>
                </div>
                <div class="row-input">
                 <select style="width:290px;" name="Screening ratio" id="screening_ratio" onchange="ratio_other()">
                   <option value="16:9 Full Height Anamorphic (FHA) *preferred">16:9 Full Height Anamorphic (FHA) *preferred</option>
                   <option value="4:3 (letterbox)">4:3 (letterbox)</option>
                   <option value="4:3 (full frame)">4:3 (full frame)</option>
                   <option value="1:1.37">1:1.37</option>
                   <option value="1:1.66">1:1.66</option>
                   <option value="1:1.85">1:1.85</option>
                   <option value="1:1.37">1:1.37</option>
                   <option value="1:1.66">1:1.66</option>
                   <option value="1:1.85">1:1.85</option>
                  
                 </select>
                  &nbsp;<span id="ratio_other" style="display:none">Please specify&nbsp;<input type="text" name="screening_ratio_other" /></span>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                 Screening format<span class="required">*</span><br/>
                </div>
                <div class="row-input">
                 <select name="Screening format">
                   <!--<option value="35mm">35mm</option>
                   <option value="16mm">16mm</option>-->
                   <option value="Digibeta (25fps)">Digibeta (25fps)</option>
                   <option value="HDCam SR (25fps)">HDCam SR (25fps)</option>
                   <option value="Harddrive">Harddrive</option>
                   <option value="Secure FTP">Secure FTP</option>
                   <option value="DCP (unencrypted)">DCP (unencrypted)</option>
                   <option value="E-Cinema">E-Cinema</option>
                   <!--<option value="Blu-Ray (25fps)">Blu-Ray (25fps)</option>-->
                 </select>
                 <div style="line-height: 14px; margin-top: 5px;">
                 	Please note that all successful films<br/>need to be submitted at 25fps
                 </div>
                </div>
             </div>
             <div class="form-row information_text"><em>(Please click <a href="<?=base_url()?>page-119/screening-formats-audio-specs" target="_blank">here</a> for more information on preferred <br/>screening formats and audio specifications)</a></em></div>
             <div class="form-row">
                <div class="row-title">
                  Audio specifications
                </div>
             </div>
              <div style="margin-top:5px">
                <table cellpadding="0" cellspacing="0" border="0">
                  <tr valign="top" height="30"><td valign="top"><input type="radio" name="Audio specifications" value="Stereo" /></td>
                      <td valign="top" width="10">&nbsp;</td>
                      <td valign="top">Stereo <i>(A Mix with only Left and Right information - L/R)</i></td>
                  </tr>
                  <tr height="40" valign="top"><td valign="top"><input type="radio" name="Audio specifications" value="Dolby Surround" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Dolby Surround <i>(A Mix delivered on NON film formats with Left, Centre, Right and Surround information encoded into 2 channels called Left Total and Right Total – LtRt)</i></td>
                  </tr>
                  <tr height="40" valign="top"><td valign="top"><input type="radio" name="Audio specifications" value="5.1 Discrete" /></td>
                      <td width="10">&nbsp;</td>
                      <td>5.1 Discrete <i>(A Mix delivered on NON film formats with Left, Right, Centre, LFE (Sub Bass), Left Surround, and Right Surround)</i></td>
                  </tr>
                  <!--<tr height="30" valign="top"><td valign="top"><input type="radio" name="Audio specifications" value="Blu-Ray 5.1 AC-3 Encoded" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Blu-Ray 5.1 AC-3 Encoded <i>(A 5.1 Mix encoded for BLU-RAY DVD)</i></td>
                  </tr>-->
                  <tr height="30" valign="top"><td valign="top"><input type="radio" name="Audio specifications" value="Dolby Stereo" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Dolby Stereo <i>(A 35mm Film only format – Similar to Dolby Surround and in the format LtRt)</i></td>
                  </tr>
                  <tr height="30" valign="top"><td valign="top"><input type="radio" name="Audio specifications" value="Dolby Digital" /></td>
                      <td width="10">&nbsp;</td>
                      <td>Dolby Digital <i>(A 35mm Film only format –with a 5.1 Mix and Dolby Stereo also on the print)</i></td>
                  </tr>
                </table>
              </div>
             <br/>
             <p class="page_boldheading"><strong>RETURN ADDRESS DETAILS</strong>
                <p>&nbsp;</p>
             <div class="form-row">
                <div class="row-title">
                  Address<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="return address" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  Suburb<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="return suburb" style="width:288px"/>
                </div>
             </div>
             <div class="form-row">
                <div class="row-title">
                  State<span class="required">*</span>
                </div>
                <div class="row-input">
                
                  <select name="return state">
                   <option value="VIC">VIC</option>
                   <option value="NSW">NSW</option>
                   <option value="SA">SA</option>
                   <option value="ACT">ACT</option>
                   <option value="WA">WA</option>
                   <option value="NT">NT</option>
				   <option value="QLD">QLD</option>
				   <option value="TAS">TAS</option>
                 </select>
              
                </div>
             </div>
              <div class="form-row">
                <div class="row-title">
                  Postcode<span class="required">*</span>
                </div>
                <div class="row-input">
                  <input type="text" name="return postcode" style="width:288px"/>
                </div>
             </div>
              <p>&nbsp;</p>
               <p class="page_boldheading"><strong>CHECKLIST</strong></p><br/>

              <p><ol style="margin-left:18px; list-style:decimal"><li>Entry form completed and submitted</li>
<li>Payment completed via online service (below), or by cheque or money order</li>
<li>Submit Vimeo/YouTube link and password</li>
<li>Preview copy of film on DVD (please ensure DVD is not copy-protected, as multiple copies may need to be made for judging)</li>
<li>One film still to be used in the program/website if film is successful<br/>
Stills must be submitted on a CD. Please ensure resolution is at least 300 DPI and as large as possible. Do not email your stills – the large files block up our inbox! Materials that are emailed will not be accepted</li>
</ol><br/><br/>
Once the online entry form and payment have been completed, preview DVD and additional material should be posted to:<br/>
St Kilda Film Festival<br/>
Private Bag No 3<br/>
PO St Kilda <br/>
VIC 3182<br/>
<br/>
Or delivered by hand to:<br/>
St Kilda Film Festival<br/>
Level 1<br/>
232 Carlisle Street<br/>
Balaclava<br/>
VIC 3183<br/><br/>
Entries MUST be postmarked or received by 5pm, January 31 2014
</p>
               <br/>
             <p class="page_boldheading"><strong>PAYMENT OPTIONS</strong>
                <p>&nbsp;</p>
                
                <p><input type="radio" name="payment_option" value="credit card" />&nbsp;&nbsp;Credit Card</p> <p>&nbsp;</p>
                 <p><input type="radio" name="payment_option" value="cheque or money order" />&nbsp;&nbsp;Posting in a cheque or money order</p><p>&nbsp;</p>
                 <p>By submitting this entry form you are certifying that you have read and agree to the <a style="color:#0ff" target="_blank" href="<?=base_url()?>page-116/terms-conditions">terms and conditions</a> of entry.</p><p>&nbsp;</p>
                 <p>Please note that you must have cookies enabled on your browser to continue.</p><p>&nbsp;</p>
                 <input type="hidden" name="entry_form" value="shortfilm" />
                 <p><input class="button_submit" type="submit" name="submit" value="Submit" /></p>
          </form>
          
        </div>
       </div>
    </div>
    <?php foreach($films as $film) { 
		$genres = $this->Film_model->get_film_genres($film['id']); 
		$genre = '';
		if ($genres) {
			$genre = $genres[0]['name'];
			for($i=1;$i<count($genres);$i++) { 
				$genre .= ', '.$genres[$i]['name'];
			} 
		} ?>
    <div class="film">
        <div class="photo">
        	<a href="<?=base_url()?>details/<?=$film['id']?>">
			<?php if($film['small_image'] != "") { ?>
            <img src="<?=base_url()?>uploads/films/<?=$film['small_image']?>" />
            <?php } else { ?>
            <img src="<?=base_url()?>img/noimage.png" />
            <?php } ?>
            </a>
        </div>
        <div class="text">
        	<div class="brief">
            	<div class="title"><?=$film['title']?></div>
            	<p>
					<?php 
						$text = $film['synopsis'];
						if (strlen($text) > 130) {
							$text = substr($text,0,135).'...';
						}
						print $text;
					?>
                </p>
            </div>
            <div class="more">
            	<?php if ($film['type'] > 1) { ?>
            	<h4><a href="<?=base_url()?>details/<?=$film['id']?>">More information</a></h4>
                <?php } else { ?><br /><?php } ?>
                <p>
                	<b><?=$film['year']?>
                    <?php if($film['format'] != "") { ?>
                    / <?=$film['format']?>
                    <?php } ?>
                    
                    <?php if ($film['running_time'] != "") { ?>
                    / <?=$film['running_time']?>
                    <?php } ?>
                    </b>
                </p>
                
                <?php if ($film['artist'] != "") { ?>
                <p><span>Artist</span> 
                	<?php
					$artist = $film['artist'];
						if (strlen($artist) > 18) { $artist = substr($artist,0,18).'...'; }
						print $artist;                        
                } ?>
                </p>
                
				<?php if ($genre != "") { ?>
                <p><span>Genre</span> <?=$genre?></p>
                <?php } ?>
                
                <?php if ($film['director'] != "") { ?>
                <p><span>Director</span> 
					<?php
                    	$director = $film['director'];
						if (strlen($director) > 16) { $director = substr($director,0,16).'...'; }
						print $director;
					?>
                </p>
                <?php } ?>
                
				<?php if ($film['producer'] != "") { ?>
                <p><span>Producer</span> 
					<?php 
						$producer = $film['producer']; 
						if (strlen($producer) > 15) { $producer = substr($producer,0,15).'...'; }
						print $producer;
					?>
                </p>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
    
</div>