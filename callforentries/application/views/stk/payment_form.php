<div id="bodier_page">
    <div id="content">
       <div class="sponsor">
          <? if(isset($entry))
					  {
						  $form = $this->session->userdata('entry_type');
						  $id = $entry['id'];
						  ?>
                           <script type="text/javascript">
function usePage(frm,nm){
for (var i_tem = 0, bobs=frm.elements; i_tem < bobs.length; i_tem++)
if(bobs[i_tem].name==nm&&bobs[i_tem].checked)
frm.action=bobs[i_tem].value;
}
</script>
<!-- onSubmit="usePage(this, 'bob');" -->
						  	<FORM METHOD=POST action="https://vault.safepay.com.au/cgi-bin/make_payment.pl"  NAME="UD">
         
			
			             <INPUT TYPE=Hidden NAME=reply_link_url VALUE="<?php echo base_url()?>payment_return/?id=<?=$id?>&&form=<?=$form?>&&payment_number=">
                        
<div class="messagethanks">
			<p class="page_boldheading"><strong>Thank you for submitting your application for the St Kilda Film Festival.</strong></p>

<p class="page_boldheading"><strong>Please ensure you have:</strong></p><br/>
<p><ol style="margin-left:18px; list-style:decimal;"><li>Entry form completed and submitted</li>
<li>Payment completed via online service (below), or by cheque or money order</li>
<li>Preview copy of film on DVD (please ensure DVD is not copy-protected, as multiple copies may need to be made for judging)</li>
<li>One film still to be used in the program/website if film is successful<br/>
Stills must be submitted on a CD. Please ensure resolution is at least 300 DPI and as large as possible. Do not email your stills – the large files block up our inbox! Materials that are emailed will not be accepted</li>
</ol><br/><br/>

<p>Preview DVD and additional material should be posted to:</p>
<p>
St Kilda Film Festival<br />
Private Bag No 3<br />
PO St Kilda <br />
VIC 3182</p>
<p>
Or delivered by hand to:<br />
St Kilda Film Festival<br />
Level 1<br />
232 Carlisle Street<br />
Balaclava<br />
VIC 3183<br/>
Entries MUST be postmarked or received by 5pm, January 30, 2015</p>

</div> 
<br/>
<p>Please follow the steps below to make your payment...</p>
	<INPUT TYPE=Hidden NAME=vendor_name VALUE=portphillip>
<!--
<P><B>Payment Method:</B><BR>

<TABLE BORDER=0 CELLSPACING=1>
  
  <TR>
		<TD><input type="radio" name="bob" value="https://vault.safepay.com.au/cgi-bin/make_payment.pl"> </TD>
		<TD>Credit Card</TD>

	</TR>
</TABLE>
-->
<br />
<P><B>Payment Information:</B><BR><br/>

<TABLE BORDER=0 CELLSPACING=1>
  <TR>
		<TD style="width:125px; height:25px;">Name: </TD>
		<TD><INPUT TYPE=Text NAME=Payment_name SIZE=30  ><BR></TD>
	</TR>
  <TR>
		<TD style="width:125px; height:25px;">Email Address: </TD>
		<TD><INPUT TYPE=Text NAME=Contact_email SIZE=30><BR></TD>

	</TR>
</TABLE>
<br />
<P><B>Billing Information:</B><br /><br/><TABLE BORDER=0 CELLSPACING=1>
	<TR>
		<TD style="width:125px; height:25px;">Name: </TD><TD><INPUT TYPE=Text NAME=Billing_name SIZE=30></TD>
	</TR>
	<TR>
		<TD style="width:125px; height:25px;">Address Line 1: </TD>

		<TD><INPUT TYPE=Text NAME=Billing_address1 SIZE=30></TD>
	</TR>
</TABLE>
<br />
<INPUT TYPE=Hidden NAME=Application_Fee_value    VALUE="33">
        	<INPUT TYPE=Hidden NAME=Application_Fee_qty    VALUE="1">
            <INPUT TYPE=Hidden   NAME=Application_Fee_subtotal VALUE="33">
            <INPUT TYPE=Hidden NAME=Application_Fee     VALUE="33" >
            <INPUT TYPE=Hidden NAME=OrderTotal value=33>
	<INPUT TYPE=Hidden NAME=information_fields VALUE="Billing_name,Billing_address1,Payment_name, Contact_email">

	<INPUT TYPE=Hidden NAME=suppress_field_names VALUE="">

	<INPUT TYPE=Hidden NAME=hidden_fields VALUE="Application_Fee_value,Application_Fee_qty,Application_Fee_subtotal,OrderTotal">

	<INPUT TYPE=Hidden NAME=print_zero_qty VALUE=false>
    <input class="button_submit" type="submit" name="Submit" value="Submit" />
	<br/><br/>
  <p>Your credit card payment will be processed securly by DirectOne Payment Solutions.
	<br>Please click the DirectOne logo below to find out more about payment security.</p>
	<br><p><a href=http://www.directone.com.au/html/contacts/vendor_link.html target='_blank'><img src=http://www.directone.com.au/images/safe_link.gif BORDER=0></a></p>
</FORM>

            <?
					  }
					  else
					  {
			?>
			<div class="messagethanks">
			<p class="page_boldheading"><strong>Thank you for submitting your application for the St Kilda Film Festival.</strong></p>

<p class="page_boldheading"><strong>Please ensure you have:</strong></p><br/>
<p><ol style="margin-left:18px; list-style:decimal;"><li>Entry form completed and submitted</li>
<li>Payment completed via online service (below), or by cheque or money order</li>
<li>Preview copy of film on DVD (please ensure DVD is not copy-protected, as multiple copies may need to be made for judging)</li>
<li>One film still to be used in the program/website if film is successful<br/>
Stills must be submitted on a CD. Please ensure resolution is at least 300 DPI and as large as possible. Do not email your stills – the large files block up our inbox! Materials that are emailed will not be accepted</li>
</ol><br/><br/>

<p>Preview DVD and additional material should be posted to:</p>
<p>
St Kilda Film Festival<br />
Private Bag No 3<br />
PO St Kilda <br />
VIC 3182</p>
<p>
Or delivered by hand to:<br />
St Kilda Film Festival<br />
Level 1<br />
232 Carlisle Street<br />
Balaclava<br />
VIC 3183<br/>
Entries MUST be postmarked or received by 5pm, January 30, 2015</p>

</div>
			<?php
					  }
		  ?>
       </div>
    	
    </div>
  
</div>