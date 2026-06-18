<?php 
/**
 * Template Name: Sales Partner Contest
 */
 get_header(); ?>
      <section class="doc_banner_area search-banner-light-2">
        <div class="container">
            <div class="home_banner_content">
                <div class="col-md-10 mx-auto text-center">
                <h1 class="mb-3">Sales Partner Contest</h1>
                </div>
            </div>
            <div class="text-center">
              <div class="col-md-12 form-group">
    	         <a href="https://gleeca.com/admin/sales-partner-registration" class="btn action_btn btnhover thm_btn" onclick="gtag_report_conversion_partner_signup()" type="submit">Sign up as Sales Partner </a>
              </div>
              <div class="col-md-12 form-group">
              <p>Already have a Sales Partner account? <a href="https://gleeca.com/admin/sales-partner-login" target="_blank">Login</a></p>
              </div>
            </div>
        </div>
      </section>

      <section class="main"> 
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-md-12" style="color:#1d2746;">
                     <?php echo acf_esc_html( get_field('promotion_content') ); ?>
                  </div> 
              </div>
          </div>
		  
		  <div class="container mt-5">
			  <h5><strong>Case 1: Sample Earnings Based on Bonus Offer</strong></h5>
			  <table class="table table-striped  mt-4">
				  <thead>
					  <tr class="table-primary">
						  <th scope="col">No of Restaurants</th>
						  <th scope="col">Your Earnings</th>
						  <th scope="col">Bonus</th>
					  </tr>
				  </thead>
				  <tbody>
					  <tr>
						  <td>First</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					  <tr>
						  <td>Second</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					  <tr>
						  <td>Third</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					  <tr>
						  <td>Fourth</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					   <tr>
						  <td>Fifth</td>
						  <td>₹ 3000</td>
						  <td>₹ 5000</td>
					  </tr>
					  <tr class="table-light">
						  <td><b>Total Regular Commission</b></td>
						  <td><b>₹ 15000</b></td>
						  <td></td>
					  </tr>
					  <tr class="table-light">
						  <td><b>Total Bonus</b></td>
						  <td><b class="blink">₹ 5000</b></td>
						  <td></td>
					  </tr>
					  <tr class="table-success">
						  <td>Total Earnings</td>
						  <td>₹ 20,000</td>
						  <td></td>
					  </tr>
				  </tbody>
			  </table>
		  </div>
		  
		  <div class="container mt-5">
			  <h5><strong>Case 2: Sample Earnings Based on Bonus Offer</strong></h5>
			  <table class="table table-striped  mt-4">
				  <thead>
					  <tr class="table-primary">
						  <th scope="col">No of Restaurants</th>
						  <th scope="col">Your Earnings</th>
						  <th scope="col">Bonus</th>
					  </tr>
				  </thead>
				  <tbody>
					  <tr>
						  <td>First</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					  <tr>
						  <td>Second</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					  <tr>
						  <td>Third</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					  <tr>
						  <td>Fourth</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					   <tr>
						  <td>Fifth</td>
						  <td>₹ 3000</td>
						  <td>₹ 5000</td>
					  </tr>
					  <tr>
						  <td>Sixth</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					  <tr>
						  <td>Seventh</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					  <tr>
						  <td>Eighth</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					  <tr>
						  <td>Ninth</td>
						  <td>₹ 3000</td>
						  <td>NIL</td>
					  </tr>
					  <tr>
						  <td>Tenth</td>
						  <td>₹ 3000</td>
						  <td>₹ 5000</td>
					  </tr>
					  <tr class="table-light">
						  <td><b>Total Regular Commission</b></td>
						  <td><b>₹ 30000</b></td>
						  <td></td>
					  </tr>
					  <tr class="table-light">
						  <td><b>Total Bonus</b></td>
						  <td><b class="blink">₹ 10000</b></td>
						  <td></td>
					  </tr>
					  <tr class="table-success">
						  <td>Total Earnings</td>
						  <td>₹ 40,000</td>
						  <td></td>
					  </tr>
				  </tbody>
			  </table>
		  </div>
		  
		  <div class="container mt-4" align="center"><a href="https://gleeca.in/sales-partner" class="btn-black btnhover"><i class="fas fa-chevron-left pl-3 arrow"></i>&nbsp; &nbsp;Back to Sales Partner Info</a></div>
		  
		 
		  
      </section>

    
<?php get_footer(); ?>