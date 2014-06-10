<script type="text/javascript" src="<?php echo base_url();?>uploads/jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>uploads/jquery.livequery.js"></script>
	<script type="text/javascript">

$(document).ready(function() {
	
	var Arrays=new Array();
	
	$('#wrap li').mousemove(function(){
		
		var position = $(this).position();
		
		$('#cart').stop().animate({
																									
				left   : position.left+'px',
				
			},250,function(){
			
		});			
	}).mouseout(function(){
		
	});	
		$('#wraps li').mousemove(function(){
		
		var position = $(this).position();
		
		$('#cart').stop().animate({
																									
				left   : position.left+'px',
				
			},250,function(){
			
		});			
	}).mouseout(function(){
		
	});	
	
	$('#wrap li').click(function(){
		
		var thisID = $(this).attr('id');
		
		var itemname  = $(this).find('div .name').html();
		var itemprice = $(this).find('div .price').html();
			
		if(include(Arrays,thisID))
		{
			var price 	 = $('#each-'+thisID).children(".shopp-price").find('em').html();
			var quantity = $('#each-'+thisID).children(".shopp-quantity").html();
			quantity = parseInt(quantity)+parseInt(1);
			
			var total = parseInt(itemprice)*parseInt(quantity);
			
			$('#each-'+thisID).children(".shopp-price").find('em').html(total);
			$('#each-'+thisID).children(".shopp-quantity").html(quantity);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)-parseInt(price);
			
			prev_charges = parseInt(prev_charges)+parseInt(total);
			$('.cart-total span').html(prev_charges);
			
			$('#total-hidden-charges').val(prev_charges);
		}
		else
		{
			Arrays.push(thisID);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)+parseInt(itemprice);
			
			$('.cart-total span').html(prev_charges);
			$('#total-hidden-charges').val(prev_charges);
			
			$('#left_bar .cart-info').append('<div class="shopp" id="each-'+thisID+'"><div class="label">'+itemname+'</div><div class="shopp-price"> $<em>'+itemprice+'</em></div><span class="shopp-quantity">1</span><img src="remove.png" class="remove" /><br class="all" /></div>');
			
						$('#left_bar_cont .cart-info').append('<div class="shopp" id="each-'+thisID+'"><div class="label">'+itemname+'</div><div class="shopp-price"> $<em>'+itemprice+'</em></div><span class="shopp-quantity">1</span><img src="remove.png" class="remove" /><br class="all" /></div>');
			
			$('#cart').css({'-webkit-transform' : 'rotate(20deg)','-moz-transform' : 'rotate(20deg)' });
		}
		
		setTimeout('angle()',200);
	});	
	
	$('#wraps li').click(function(){
		
		var thisID = $(this).attr('id');
		
		var itemname  = $(this).find('div .name').html();
		var itemprice = $(this).find('div .price').html();
			
		if(include(Arrays,thisID))
		{
			var price 	 = $('#each-'+thisID).children(".shopp-price").find('em').html();
			var quantity = $('#each-'+thisID).children(".shopp-quantity").html();
			quantity = parseInt(quantity)+parseInt(1);
			
			var total = parseInt(itemprice)*parseInt(quantity);
			
			$('#each-'+thisID).children(".shopp-price").find('em').html(total);
			$('#each-'+thisID).children(".shopp-quantity").html(quantity);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)-parseInt(price);
			
			prev_charges = parseInt(prev_charges)+parseInt(total);
			$('.cart-total span').html(prev_charges);
			
			$('#total-hidden-charges').val(prev_charges);
		}
		else
		{
			Arrays.push(thisID);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)+parseInt(itemprice);
			
			$('.cart-total span').html(prev_charges);
			$('#total-hidden-charges').val(prev_charges);
			
			$('#left_bar .cart-info').append('<div class="shopp" id="each-'+thisID+'"><div class="label">'+itemname+'</div><div class="shopp-price"> $<em>'+itemprice+'</em></div><span class="shopp-quantity">1</span><img src="remove.png" class="remove" /><br class="all" /></div>');
			
			$('#left_bar_cont .cart-info').append('<div class="shopp" id="each-'+thisID+'"><div class="label">'+itemname+'</div><div class="shopp-price"> $<em>'+itemprice+'</em></div><span class="shopp-quantity">1</span><img src="remove.png" class="remove" /><br class="all" /></div>');
			
			$('#cart').css({'-webkit-transform' : 'rotate(20deg)','-moz-transform' : 'rotate(20deg)' });
		}
		
		setTimeout('angle()',200);
	});	
	$('.remove').livequery('click', function() {
		
		var deduct = $(this).parent().children(".shopp-price").find('em').html();
		var prev_charges = $('.cart-total span').html();
		
		var thisID = $(this).parent().attr('id').replace('each-','');
		
		var pos = getpos(Arrays,thisID);
		Arrays.splice(pos,1,"0")
		
		prev_charges = parseInt(prev_charges)-parseInt(deduct);
		$('.cart-total span').html(prev_charges);
		$('#total-hidden-charges').val(prev_charges);
		$(this).parent().remove();
		
	});	
	
	$('#Submit').livequery('click', function() {
		
		var totalCharge = $('#total-hidden-charges').val();
		
		$('#left_bar').html('Total Charges: $'+totalCharge);
		
		$('#left_bar_cont').html('Total Charges: $'+totalCharge);
		return false;
		
	});	
	
});

function include(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return true;
  }
}
function getpos(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return i;
  }
}
function angle(){$('#cart').css({'-webkit-transform' : 'rotate(0deg)','-moz-transform' : 'rotate(0deg)' });}

</script>
  
  <script type="text/javascript">
   function addTextTag(text){
    document.getElementById('text_tag_input').value = text;
   }        
</script>
          <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="portlet box red" id="form_wizard_1">
                     <div class="portlet-title">
                        <h4>
                           <i class="icon-reorder"></i> Tent Selection - <span class="step-title">Step 1 of 5</span>
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <form action="#" class="form-horizontal" id="form_rent">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3" style="width:200px">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i>Tent Selection</span>   
                                          </a>
                                       </li>
                                       <li class="span3" style="width:150px">
                                          <a href="#tab2" data-toggle="tab" class="step">
                                          <span class="number">2</span>
                                          <span class="desc"><i class="icon-ok"></i>Layout</span>   
                                          </a>
                                       </li>
                                       <li class="span3" style="width:150px">
                                          <a href="#tab3" data-toggle="tab" class="step">
                                          <span class="number">3</span>
                                          <span class="desc"><i class="icon-ok"></i>Menu</span>   
                                          </a>
                                       </li>
                                       <li class="span3" style="width:150px">
                                          <a href="#tab4" data-toggle="tab" class="step">
                                          <span class="number">4</span>
                                          <span class="desc"><i class="icon-ok"></i>Order</span>   
                                          </a>
                                       </li>
                                       <li class="span3" style="width:150px">
                                          <a href="#tab5" data-toggle="tab" class="step">
                                          <span class="number">5</span>
                                          <span class="desc"><i class="icon-ok"></i>Contract</span>   
                                          </a>
                                       </li>
                                       
                                    </ul>
                                 </div>
                              </div>
                              <div id="bar" class="progress progress-success progress-striped">
                                 <div class="bar"></div>
                              </div>
                              <div class="tab-content">
                                 <div class="tab-pane active" id="tab1">
                                 <h3 class="block">Select your tent position</h3>
                                     <div class="control-group">
                                      
                                     <a  href="#myModal2" role="button" data-toggle="modal" style="text-decoration:none" ><div class="map_view" style="float:right;margin-right:40px">Click to view tent arrangement map</div></a><p>&nbsp;</p> 
<table>
<tr>
	<td width="36" align="center" valign="middle"><h3><img src="<?php echo base_url();?>uploads/blue.png"/></h3></td>
    <td width="94" align=" " valign="middle" style="font-size:12px; color:#666" >&nbsp;Available</td>
    <td width="36" align="center" valign="middle"><img src="<?php echo base_url();?>uploads/orange.png"/></td>
    <td width="89" align=" " valign="middle" style="font-size:12px; color:#666" >&nbsp;Reserved</td>
    <td width="36" align="center" valign="middle"><img src="<?php echo base_url();?>uploads/red.png"/></td>
    <td width="97" align=" " valign="middle" style="font-size:12px; color:#666">&nbsp;Reserved & Paid</td>
</tr>
</table> <br/>                                    
<table bordercolor="#ffffff" border="1" width="1020" style="background-color:#35AA47">
  <tr height="80" >
    <td align="center"><a href="#" onClick="addTextTag('Tent 1'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">1</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 2'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">2</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 3'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">3</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 4'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">4</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 5'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">5</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 6'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">6</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 7'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">7</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 8'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">8</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 9'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">9</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 10'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">10</div></a></td>
  </tr>
  <tr height="80">
    <td align="center"><a href="#" onClick="addTextTag('Tent 11'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">11</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 12'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">12</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 13'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">13</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 14'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">14</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 15'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">15</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 16'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">16</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 17'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">17</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 18'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">18</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 19'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">19</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 20'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">20</div></a></td>
  </tr>
  <tr height="80">
    <td align="center"><a href="#" onClick="addTextTag('Tent 21'); return false" style="display:block;width:100%;height:100%;text-decoration:none;"> &nbsp;<div class="img_num">21</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 22'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">22</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 23'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">23</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 24'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">24</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 25'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">25</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 26'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">26</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 27'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">27</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 28'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">28</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 29'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">29</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 30'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">30</div></a></td>
  </tr>
  <tr style="" height="80">
	<td align="center"><a href="#" onClick="addTextTag('Tent 31'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">31</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 32'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">32</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 33'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">33</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 34'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">34</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 35'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">35</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 36'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">36</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 37'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">37</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 38'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">38</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 39'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">39</div></a></td>
    <td align="center"><a href="#" onClick="addTextTag('Tent 40'); return false" style="display:block;width:100%;height:100%;text-decoration:none;">&nbsp;<div class="img_num">40</div></a></td>
  </tr>
</table><br/><br/>
 <div class="control-group">
                                       
                    <div class="controls" style="margin-left:-.5px">
   <input type="text" id="text_tag_input" class="span6 m-wrap" placeholder="Tent Selected" style="width:200px;background-color:#eeeeee" disabled="disabled" />
                                         <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h3 id="myModalLabel2">Airshow Map</h3>
									</div>
									<div class="modal-body">
										<p><img src="<?php echo base_url();?>uploads/Tent-Area-Layout.png"/></p>
									</div>
									<div class="modal-footer">
										<button data-dismiss="modal" class="btn green">OK</button>
									</div>
								</div>
                                </div>
                                    </div>

                         </div>           
                                 </div>
                                 <div class="tab-pane" id="tab2">
                                    <h3 class="block">Select your tent layout</h3>
                                   
                                    <div class="control-group">
                                       <div align="left">
	
	<div id="wrap" align="left">
		
		<ul>
			<li id="1">
				<img src="<?php echo base_url();?>uploads/Tent-Seating-Layout-1.png" class="items"  alt="" />
				
				<br clear="all" />
				<div><input name="" type="checkbox" value="" /><span class="name" style="visibility:hidden">Layout - 96 People</span>:  Ksh<span class="price">300000</span> </div>
			</li>
			<li id="2">
				<img src="<?php echo base_url();?>uploads/Tent-Seating-Layout-2.png" class="items"  alt="" />
				
				<br clear="all" />
				<div><span class="name">Layout - 80 People</span>:  Ksh<span class="price">200000</span> </div>
			</li>
			<li id="3">
				<img src="<?php echo base_url();?>uploads/Tent-Seating-Layout-3.png" class="items"  alt="" />
				
				<br clear="all" />
				<div><span class="name">Layout - 65 People</span>:  Ksh<span class="price">100000</span> </div>
			</li>
			
			 
		</ul>
		
		<br clear="all" />
		
		<div id="bottomBar" align="left"><img src="carts.png" id="cart" /></div>
	
	</div>
	
	<div id="left_bar"> 
		
		<form action="#" id="cart_form" name="cart_form">
		
		<div class="cart-info"></div>
		
		<div class="cart-total">
		
			<b>Total Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> $<span>1500000</span>
			
			<input type="hidden" name="total-hidden-charges" id="total-hidden-charges" value="0" />
		</div>
		
		<!-- <button type="submit" id="Submit">CheckOut</button>-->
		
		</form>
		
	</div> 
		
		
	
</div>
   </div>
                                  
                                      
                                    
                                    
                                    
                               
                                 </div>
                                 <div class="tab-pane" id="tab3">
                                    <h3 class="block">Select your menu items</h3>
                                  <div class="row-fluid">
                                  <div class="span8">
                                <ul>    
                         <div class="portlet">
                          <div class="control-group">
                                       <label class="control-label">Number of guests</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" />
                                          <span class="help-inline">Enter number of guests</span>
                                       </div>
                                    </div><br/><br/>
							 <div class="food_menu">Breakfast Menu</div>
							<div class="portlet-body">
       <!--  <li id="1">
				<img src="<?php //echo base_url();?>uploads/layout.png" class="items" height="200" alt="" />
				
				<br clear="all" />
				<div><span class="name">Layout - 96 People</span>:  Ksh<span class="price">300000</span> </div>
			</li>
			<li id="2">
				<img src="<?php //echo base_url();?>uploads/layout.png" class="items" height="200" alt="" />
				
				<br clear="all" />
				<div><span class="name">Layout - 80 People</span>:  Ksh<span class="price">200000</span> </div>
			</li>
			<li id="3">
				<img src="<?php //echo base_url();?>uploads/layout.png" class="items" height="200" alt="" />
				
				<br clear="all" />
				<div><span class="name">Layout - 65 People</span>:  Ksh<span class="price">100000</span> </div>
			</li>-->
								<table class="table table-striped table-bordered table-advance table-hover">
									<thead>
										<tr>
											<th><i class="icon-briefcase"></i> Option</th>
 											<th><i class="icon-shopping-cart"></i> Cost</th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Option 1</a>
											</td>
 											<td>Ksh <span class="price">450.00</span></td>
											<td><a href="#" class="btn mini green-stripe">View</a></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="4">
            <div><span class="name" style="visibility:hidden">Breakfast Option 1</span>Select <span class="price" style="visibility:hidden">450</span> </div>
        </li>
    </ul>
</div></td>

										</tr>
										<tr>
											<td class="highlight">
												<div class="info"></div>
												<a href="#">Option 2</a>
											</td>
 											<td>Ksh <span class="price">630.00</span></td>
											<td><a href="#" class="btn mini green-stripe">View</a></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="5">
            <div><span class="name" style="visibility:hidden">Breakfast Option 2</span>Select<span class="price" style="visibility:hidden">630</span> </div>
        </li>
    </ul>
</div></td>
                                           
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="warning"></div>
												<a href="#">Option 3</a>
											</td>
 											<td>Ksh <span class="price">750.00</span></td>
											<td><a href="#" class="btn mini green-stripe">View</a></td>
											<td><div id="wraps" align="left">
    <ul>
         <li id="6">
            <div><span class="name" style="visibility:hidden">Breakfast Option 3</span>Select<span class="price" style="visibility:hidden">750</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="important"></div>
												<a href="#">Option 4</a>
											</td>
 											<td>Ksh <span class="price">890.00</span></td>
											<td><a href="#" class="btn mini green-stripe">View</a></td>
											<td><div id="wraps" align="left">
    <ul>
        <li id="7">
            <div><span class="name" style="visibility:hidden">Breakfast Option 4</span>Select <span class="price" style="visibility:hidden">890</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Option 5</a>
											</td>
 											<td>Ksh <span class="price">1200.00</span></td>
											<td><a href="#" class="btn mini green-stripe">View</a></td>
											<td><div id="wraps" align="left">
    <ul>
        <li id="8">
            <div><span class="name" style="visibility:hidden">Breakfast Option 5</span>Select <span class="price" style="visibility:hidden">1200</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
                        <br/>
                        
                          <div class="portlet">
							 <div class="food_menu">Lunch Menu</div>
							<div class="portlet-body">
								<table class="table table-striped table-bordered table-advance table-hover">
									<thead>
										<tr>
											<th><i class="icon-briefcase"></i> Option</th>
 											<th><i class="icon-shopping-cart"></i> Cost</th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Option 1</a>
											</td>
 											<td>Ksh <span class="price">490.00</span></td>
											<td><a href="#" class="btn mini green-stripe">View</a></td>
											<td><div id="wraps" align="left">
    <ul>
        <li id="9">
            <div><span class="name" style="visibility:hidden">Lunch Option 1</span>Select <span class="price" style="visibility:hidden">490</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
										<tr>
											<td class="highlight">
												<div class="info"></div>
												<a href="#">Option 2</a>
											</td>
 											<td>Ksh <span class="price">560.00</span></td>
											<td><a href="#" class="btn mini green-stripe">View</a></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="10">
            <div><span class="name" style="visibility:hidden">Lunch Option 2</span>Select <span class="price" style="visibility:hidden">560</span> </div>
        </li>
    </ul>
</div></td>
                                           
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="warning"></div>
												<a href="#">Option 3</a>
											</td>
 											<td>Ksh <span class="price">825.00</span></td>
											<td><a href="#" class="btn mini green-stripe">View</a></td>
											<td><div id="wraps" align="left">
    <ul>
        <li id="11">
            <div><span class="name" style="visibility:hidden">Lunch Option 3</span>Select <span class="price" style="visibility:hidden">825</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        
									</tbody>
								</table>
							</div>
						</div>
                        <br/>
                          <div class="portlet">
							 <div class="food_menu">Snack Menu</div>
							<div class="portlet-body">
								<table class="table table-striped table-bordered table-advance table-hover">
									<thead>
										<tr>
											<th><i class="icon-briefcase"></i> Snacks</th>
 											<th><i class="icon-shopping-cart"></i> Grammage</th>
											<th>Ksh</th>
                                            <th></th>
 										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Sausage Wraps</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">150.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="12">
            <div><span class="name" style="visibility:hidden">Sausage Wraps</span>Select <span class="price" style="visibility:hidden">150</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
										<tr>
											<td class="highlight">
												<div class="info"></div>
												<a href="#">Doughnuts</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">40.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="13">
            <div><span class="name" style="visibility:hidden">Doughnuts</span>Select <span class="price" style="visibility:hidden">40</span> </div>
        </li>
    </ul>
</div></td>
                                           
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="warning"></div>
												<a href="#">Chocolate doughnut</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">40.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="14">
            <div><span class="name" style="visibility:hidden">Choc doughnut</span>Select <span class="price" style="visibility:hidden">40</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="important"></div>
												<a href="#">Cinnamon Rolls</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">180.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="15">
            <div><span class="name" style="visibility:hidden">Cinnamon Rolls</span>Select <span class="price" style="visibility:hidden">180</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Muffins(Strawberry/Blueberry/Chocolate)</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">150.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="16">
            <div><span class="name" style="visibility:hidden">Muffins</span>Select <span class="price" style="visibility:hidden">150</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Scones</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">80.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="17">
            <div><span class="name" style="visibility:hidden">Scones</span>Select <span class="price" style="visibility:hidden">80</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
										<tr>
											<td class="highlight">
												<div class="info"></div>
												<a href="#">Croissant(Plain, Chocolate)</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">100.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="18">
            <div><span class="name" style="visibility:hidden">Croissant</span>Select <span class="price" style="visibility:hidden">100</span> </div>
        </li>
    </ul>
</div></td>
                                           
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="warning"></div>
												<a href="#">Grilled Beef Sausages</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">60.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="19">
            <div><span class="name" style="visibility:hidden">Grilled Sausages</span>Select <span class="price" style="visibility:hidden">60</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="important"></div>
												<a href="#">Beef Samosa</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">60.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="20">
            <div><span class="name" style="visibility:hidden">Beef Samosa</span>Select <span class="price" style="visibility:hidden">60</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Vegetable Samosa(V*)</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">60.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="21">
            <div><span class="name" style="visibility:hidden">Veg Samosa</span>Select <span class="price" style="visibility:hidden">60</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Spring rolls</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">100.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="22">
            <div><span class="name" style="visibility:hidden">Spring rolls</span>Select <span class="price" style="visibility:hidden">100</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
										<tr>
											<td class="highlight">
												<div class="info"></div>
												<a href="#">Kebab</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">100.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="23">
            <div><span class="name" style="visibility:hidden">Kebab</span>Select <span class="price" style="visibility:hidden">100</span> </div>
        </li>
    </ul>
</div></td>
                                           
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="warning"></div>
												<a href="#">Hot dogs</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">60.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="24">
            <div><span class="name" style="visibility:hidden">Hot dogs</span>Select <span class="price" style="visibility:hidden">60</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="important"></div>
												<a href="#">Mandazi</a>
											</td>
                                            <td>40gr</td>
 											<td>Ksh <span class="price">60.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="25">
            <div><span class="name" style="visibility:hidden">Mandazi</span>Select <span class="price" style="visibility:hidden">60</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Chapati</a>
											</td>
                                            <td>40gr</td>
 											<td>Ksh <span class="price">40.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="26">
            <div><span class="name" style="visibility:hidden">Chapati</span>Select <span class="price" style="visibility:hidden">40</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Pancakes</a>
											</td>
                                            <td>40gr</td>
 											<td>Ksh <span class="price">100.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="27">
            <div><span class="name" style="visibility:hidden">Pancakes</span>Select <span class="price" style="visibility:hidden">100</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
										<tr>
											<td class="highlight">
												<div class="info"></div>
												<a href="#">Fruit Cake</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">120.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="28">
            <div><span class="name" style="visibility:hidden">Fruit Cake</span>Select <span class="price" style="visibility:hidden">120</span> </div>
        </li>
    </ul>
</div></td>
                                           
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="warning"></div>
												<a href="#">Pumpkin Muffin</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">45.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="29">
            <div><span class="name" style="visibility:hidden">Pumpkin Muffin</span>Select <span class="price" style="visibility:hidden">45</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="important"></div>
												<a href="#">Zucchini Muffin</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">30.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="30">
            <div><span class="name" style="visibility:hidden">Zucchini Muffin</span>Select <span class="price" style="visibility:hidden">30</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">English Cake</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">45.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="31">
            <div><span class="name" style="visibility:hidden">English Cake</span>Select <span class="price" style="visibility:hidden">45</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Banana Cake</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">100.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="32">
            <div><span class="name" style="visibility:hidden">Banana Cake</span>Select <span class="price" style="visibility:hidden">100</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
										<tr>
											<td class="highlight">
												<div class="info"></div>
												<a href="#">Mocha Cake</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">55.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="33">
            <div><span class="name" style="visibility:hidden">Mocha Cake</span>Select <span class="price" style="visibility:hidden">55</span> </div>
        </li>
    </ul>
</div></td>
                                           
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="warning"></div>
												<a href="#">Chocolate Cake</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">155.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="34">
            <div><span class="name" style="visibility:hidden">Chocolate Cake</span>Select <span class="price" style="visibility:hidden">155</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="important"></div>
												<a href="#">Black Forest Cake</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">120.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="35">
            <div><span class="name" style="visibility:hidden">Black Forest Cake</span>Select <span class="price" style="visibility:hidden">120</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Carrot Cake</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">130.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="36">
            <div><span class="name" style="visibility:hidden">Carrot Cake</span>Select <span class="price" style="visibility:hidden">130</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="success"></div>
												<a href="#">Marble Cake</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">140.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="37">
            <div><span class="name" style="visibility:hidden">Marble Cake</span>Select <span class="price" style="visibility:hidden">140</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
										<tr>
											<td class="highlight">
												<div class="info"></div>
												<a href="#">Apple Pie</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">50.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="38">
            <div><span class="name" style="visibility:hidden">Apple Pie</span>Select <span class="price" style="visibility:hidden">50</span> </div>
        </li>
    </ul>
</div></td>
                                           
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="warning"></div>
												<a href="#">Apple/Strawberry Tart</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">100.00</span></td>
 											<td><div id="wraps" align="left">
    <ul>
        <li id="39">
            <div><span class="name" style="visibility:hidden">Tart</span>Select <span class="price" style="visibility:hidden">100</span> </div>
        </li>
    </ul>
</div></td>
										</tr>
                                        <tr>
											<td class="highlight">
												<div class="important"></div>
												<a href="#">Beef Shawerma</a>
											</td>
                                            <td>60gr</td>
 											<td>Ksh <span class="price">135.00</span></td>
 											<td>
<div id="wraps" align="left">
    <ul>
        <li id="40">
            <div><span class="name" style="visibility:hidden">Beef Shawerma</span>Select <span class="price" style="visibility:hidden">135</span> </div>
        </li>
    </ul>
</div>
            </td>
										</tr>                                       
									</tbody>
								</table>
							</div>
                            <div id="wrap" align="left">
		
		 
		
		<br clear="all" />
		
		<div id="bottomBar" align="left"><img src="carts.png" id="cart" /></div>
	
	</div>
                            <div id="left_bar"> 
		
		<form action="#" id="cart_form" name="cart_form" style="top:-500px">
		
		<div class="cart-info"></div>
		
		<div class="cart-total">
		
			<b>Total Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> $<span>1500000</span>
			
			<input type="hidden" name="total-hidden-charges" id="total-hidden-charges" value="0" />
		</div>
		
		<!-- <button type="submit" id="Submit">CheckOut</button>-->
		
		</form>
		
	</div> 
						</div>

                                   </div></ul>
                                     </div>
                                     
                                 </div>
                                 
                                      <div class="tab-pane" id="tab4">
                                    <h3 class="block">Confirm your selection</h3>
                                    <div class="control-group">
 
	
	<div id="left_bar_cont" class=" "> 
		
		<form action="#" id="cart_form" name="cart_form">
		
		<div class="cart-info" style="width:600px"></div>
		
		<div class="cart-total">
		
			<b>Total Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> $<span>1500000</span>
			
			<input type="hidden" name="total-hidden-charges" id="total-hidden-charges" value="0" />
		</div>
		
		<!-- <button type="submit" id="Submit">CheckOut</button>-->
		
		</form>
		
	</div> 
                                    </div>
                                     
                                     
                                 </div>
                               
                               
                                    <div class="tab-pane" id="tab5">
                                    <h3 class="block">Terms and conditions</h3>
                                    
                                    <div class="control-group">
                                        
                                       <div class="controls">
                                          <div class="order_container">
                                         <strong>Article</strong><br/>
                                          These General Terms and Conditions, and the related Service Contract Proposal, form together the “Agreement” that govern the provision of consulting, coaching and implementation services by Createlli nv.

“Createlli” refers to the Createlli nv company identified in the Service Proposal Contract. “Licensee” refers to the company subscribing to the consultancy services as indicated on the Service Proposal Contract.

The present general terms and conditions are applicable to any sale of software license and access to software services carried out by Createlli nv. They do not apply to provision of consulting, coaching or implementation services.

They are considered as formally and explicitly accepted by the Licensee.

They remain valid even in cases where they contradict the general or special terms and conditions of Licensee, unless Createlli nv has accepted the latter conditions explicitly and in writing. 

Createlli is licensor of a software application “collaborate.Createlli”. As it may be modified from time to time collaborate.Createlli is globally described in Annex 1. Createlli desires to grant under the conditions of this Agreement a license to Licensee to get access to the software application and make use of it. Licensee has studied the Licensed Program before signing this Agreement, and fully understands the working and value of the system.<br/>
<strong>Article 2: Definitions</strong><br/>


1. "Licensed Program": The term Licensed Program shall include the software application as described in Annex 1 and related licensed materials and data, access to which is granted supplied to the Licensee under this Agreement

2. "Use": Unless otherwise defined in this Agreement, the term Use shall mean the use of all or any part of the Licensed Program. The rights granted are further specified in article 4 of this agreement.
<br/>
<strong>Article 3: Term</strong><br/>



1. The Agreement is effective from the date that the Service Contract Proposal is signed by both parties.

2. In addition to the remedies provided for in Article 8, Createlli may immediately terminate the Agreement in total upon written notice if (a) Licensee becomes insolvent, files a petition of bankruptcy (or any similar petition under any insolvency law of any jurisdiction), ceases its activities, or proposes any dissolution, or (b) Licensee is in severe violation of this Agreement.

3. Right to use the license can be terminated for convenience, depending on the subscription model chosen, as described in the Service Contract Proposal
<br/>
<strong>Article 4: License</strong><br/>


1.   Upon payment of the due amounts, Createlli grants to Licensee

·       A non-transferable and non-exclusive right of access to the Licensed Program

·       A non-transferable and non-exclusive license to use the Licensed Program for data processing with its business partners in accordance with its intended use. 

2.  Licensee shall not use, print, copy, modify, translate or alter the Licensed Program in whole or in part except as expressly provided for in this Agreement or as permitted by compelling law. In addition, Licensee has no permission to decompile, disassemble, or analyse the Licensed Program by "reverse engineering" and each attempt thereto shall constitute an infringement to this Agreement, unless such act is expressly permitted by compelling law.

3.   The parties hereto expressly agree that the Licensed Program, to the extent that it would be modified, will replace as modified version the original or previous version of such Licensed Program and henceforth be subject to all rights and obligations as mentioned in this Agreement, including but not limited to, the provisions concerning term, rights of use ("license"), protection and security, title, default, limited warranty, patents and copyrights, unless such matters are regulated differently in this Agreement.
 
                                          </div>
                                          <span class="help-inline"></span>
                                       </div>
                                        <div class="controls">
                                         <label class="hidden-phone">
                        <input type="checkbox" class="header" checked value="" />
                        <span class="color-mode-label">Terms and conditions</span>
                        </label>  
                                       </div>
                                    </div>
                                     
                                 </div>
                              </div>
                              <div class="form-actions clearfix">
                                 <a href="javascript:;" class="btn button-previous">
                                 <i class="m-icon-swapleft"></i> Back 
                                 </a>
                                 <a href="javascript:;" class="btn red button-next">
                                 Continue <i class="m-icon-swapright m-icon-white"></i>
                                 </a>
                                 <a href="javascript:;" class="btn green button-submit">
                                 Submit <i class="m-icon-swapright m-icon-white"></i>
                                 </a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->  