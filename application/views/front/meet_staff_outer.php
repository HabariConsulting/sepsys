	<div class="tophead">
    	<h1>CAREERS</h1>
        <a href="careers.html">Careers In Helath Research</a>
        <a href="meet-the-staff.html" class="current">Meet The Staff </a>
        <a href="slas.html">SLAS</a>
    </div>
	<div class="all margintfourtytop clrgry">
    	<div class="third">
				<div class="heading rotate" style="width:50%;">
          			<h1 class="hide">
                        <span class="clrgry" style="font-size:17px;">MEET THE</span> <br>
                        <span class="clrorg">STAFF</span>
                    </h1>
                	<img src="<?php echo base_url(); ?>images/v-p.png" class="hide"> 
                    <img src="<?php echo base_url(); ?>images/meet-the-staff.png">
				</div>
		</div>
        <div class="all margintfourtytop bgwht">
        	<div class="searchtop">
            	<div class="quater floatleft">
                	<div class="styled-select">
                       <select>
                          <option>6 per page</option>
                          <option>1</option>
                          <option>2 </option>
                          <option>3</option>
                          <option>4 </option>
                          <option>5</option>
                          <option>6</option>
                       </select>
                    </div>
                </div>
                <div class="quater floatleft">
                	<div class="styled-select">
                       <select>
                          <option>Search by</option>
                          <option>1</option>
                          <option>2 </option>
                          <option>3</option>
                          <option>4 </option>
                          <option>5</option>
                          <option>6</option>
                       </select>
                    </div>
                </div>
                <div class="quater floatleft">
                       <input type="text" name="search" class="input" onFocus="if(this.value=='Filter by name'){this.value='';}" onBlur="if(this.value==''){this.value='Filter by name';}" value="Filter by name" title="Enter search key word and press enter."/>
                </div>
                <div class="pagination floatright">
                	Page 1 of 4 << 1 2 3 4 >>
                </div>
            </div>
			<?php 
			$x=0;
			foreach ($stafflist as $list) { 
				$x+=1;
			?>			
			
            <?php if ($x==2){  ?>
					<div class="career">
						<div class="pic"><img src="<?php echo base_url(); ?>images/person2.jpg" alt="person"></div>
						<div class="txt">
							<h3><?php echo $x; ?></h3>
							<div class="line"></div>
						  <p>Faucibus orci luctus et luctus lorem@ipsum.org</p>
						</div>
						<div class="all">
							<a href="careers-inside.html" class="readmorethree">view full profile</a>
						</div>
					</div>	
				</div>
				<?php
				}
				else
				{ 
				$x=1;
				?>
				<div class="all">
					<div class="career">
						<div class="pic"><img src="<?php echo base_url(); ?>images/person1.jpg" alt="person"></div>
						<div class="txt">
							<h3><?php echo $x; ?></h3>
							<div class="line"></div>
						  <p>Faucibus orci luctus et luctus lorem@ipsum.org</p>
						</div>
						<div class="all">
							<a href="careers-inside.html" class="readmorethree">view full profile</a>
						</div>
					</div>
				<?php 
				}
			} 
			?>
		</div>
    </div>
   
</div>
