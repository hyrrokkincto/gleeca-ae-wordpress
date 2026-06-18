<?php 
   /**
    * Template Name: Whyus Template 
    */
    get_header(); ?>
<style>
   .breadcrumb_text h2 {
   font-size: 50px;
   line-height: 66px;
   font-weight: 500;
   margin-bottom: 15px;
   }
   body section.main h2 {
   font-size: 50px !important;
   line-height: 66px !important;
   font-weight: 500 !important;
   margin-bottom: 15px !important;
   }
   body section.main.light-yellow-bg{
   background-color: #FFFCF0;
   }
   body section.main .column-wrap{
   position: realitive;
   } 
   body section.main .column-wrap .shape{
   position: absolute; 
   left: -125px;
   top: -50px;   
   max-width: 300px;
   z-index: -1;
   }
   body section.main .column-wrap .shape-1{
   position: absolute; 
   left: -125px;
   top: -50px;   
   max-width: 300px;
   z-index: -1;
   }
   body section.main .column-wrap .shape-4{
   position: absolute; 
   left: -50px;
   top: -50px;  
   position: absolute; 
   max-width: 300px;
   z-index: -1;
   }
   body section.main .background-overlay{
   background-image: url('<?php bloginfo('template_directory');?>/img/why-us/stack-dots-background-prod-dev-01-min.svg');
   background-position: top right;
   background-repeat: repeat-y;
   background-size: 50% auto;
   position: absolute;
   height: 100%;
   width: 100%;
   top: 0;
   left: 0; 
   }
   body section.main .big-title{
   color: #1F1F1F; 
   font-size: 118px;
   line-height: 1em;
   margin-bottom: 20px;
   } 
   body section.main .medium-title{
   color: #1F1F1F;  
   font-size: 40px;
   line-height: 45px;
   margin-bottom: 1rem;
   }
   body section.main .text-desc-big{
   color: #1F1F1F;
   font-size: 24px;
   line-height: 32px;
   }
   body section.main .text-label{
   color: #C2750A;
   font-size: 16px;
   font-weight: bold;
   text-transform: uppercase;
   line-height: 20px;
   letter-spacing: 1.92px;
   }
   body section.main.shadow-1{
   position: relative;
   padding: 200px 50px 200px 50px;
   }
   body section.main.shadow-1:before{
   content: "";
   position: absolute;
   top: 0;
   right: 0;
   left: 0;
   height: 0;
   border-left: 100vw solid #FFF;
   border-bottom: 170px solid transparent;
   width: 0;
   z-index: 1;
   }
   body section.main.shadow-1:after{
   content: "";
   position: absolute;
   bottom: 0;
   right: 0;
   left: 0;
   height: 0;
   border-right: 100vw solid #FFF;
   border-top: 170px solid transparent;
   width: 0;
   z-index: 1;
   }
   .review-default-wrap .fl-wrap{
   position: relative;
   }
   .review-default-wrap .fl-wrap:after{
   background: #e6fff9;
   content: '';
   position: absolute;
   top: -50px;
   right: 50px;
   left: -70px;
   bottom: 50px;
   z-index: -1;
   }
   .review-default-wrap .single-comment{
   position: relative;
   }
   .review-default-wrap .single-comment:before{
   content: url('<?php bloginfo('template_directory');?>/img/why-us/customer-quote-marks-FCC8C5.svg');
   position: absolute;
   top: -60px;
   left: -25px;
   z-index: -1;
   }
   .review-default-wrap .single-comment .text-editor h6{
   font-size: 24px;
   font-weight: bold;
   line-height: 32px;
   margin-top:40px;
   }
   .review-default-wrap .single-comment .text-editor p{
   color: #821403; 
   font-size: 20px;
   line-height: 28px;
   }
   body section.main .schedule-list{
   list-style: none;
   margin: 0;
   padding: 0;
   }
   body section.main .schedule-list .schedule-item{ 
   padding-bottom: 3rem;
   position: relative;
   overflow: inherit;
   }	
   body section.main .schedule-list .schedule-item::after { 
   content: "";
   background: linear-gradient(180deg, rgba(191, 217, 248, 0) 0%, #FAEB9E 51.04%, rgba(191, 217, 248, 0) 100%);
   height: calc(100% - 50px);
   width: 2px;
   display: block;
   position: absolute;
   left: 22px;
   top: 50px;
   }
   body section.main .schedule-list .schedule-item:last-child::after {
   display: none;
   }
   body section.main .schedule-list .schedule-item .schedule-item-inner {
   display: flex;
   }
   body section.main .schedule-list .schedule-item .schedule-symbol{
   position: relative;
   align-self: flex-start;
   display: inline-flex; 
   margin-top: 5px;
   }
   body section.main .schedule-list .schedule-item .media-circle{
   width: 2.8rem;
   height: 2.8rem;
   display: inline-flex;
   align-items: center;
   justify-content: center;
   background-color: #fcf3c6 !important;
   margin-right: 15px;
   }
   body section.main .schedule-list .schedule-content .overline-title{
   font-size: 24px;
   font-weight: 800;
   line-height: 32px;
   }
   .element-populated-wrap {
   margin-top: 20px;
   }
   .element-populated-wrap .spilt-sec-detail{
   position: relative;
   padding: 16px 14px 24px 0px;
   }
   .element-populated-wrap .spilt-sec-detail .box-icon{
   margin-bottom: 20px;
   }
   .element-populated-wrap .spilt-sec-detail:before{
   content: "";
   background: linear-gradient(90deg, rgba(191, 217, 248, 0) 0%, #FAEB9E 90%);
   height: 2px;
   width: 100%;
   display: block;
   position: absolute;
   top: 0;
   }
   .element-populated-wrap .spilt-right{
   position: relative;
   margin-top: 50px;
   }
   .element-populated-wrap .spilt-right:before{
   content: "";
   background: linear-gradient(180deg, rgba(191, 217, 248, 0) 0%, #FAEB9E 51.04%, rgba(191, 217, 248, 0) 100%);
   height: calc(100% - 50px);
   width: 2px;
   display: block;
   position: absolute;
   left: 0;
   }
   .element-populated-wrap .spilt-right .spilt-sec-detail:before{
   content: "";
   background: linear-gradient(90deg, #FAEB9E 0%, rgba(191, 217, 248, 0) 90%);
   height: 2px;
   width: 100%;
   display: block;
   position: absolute;
   top: 0;
   }
   .element-populated-wrap .spilt-sec-detail .icon-box-title h3{
   font-size: 24px;
   font-weight: 600;
   line-height: 32px;
   }
   @media (max-width: 767px){
	   body section.main .column-wrap .shape-1{
		   display: none;
	   }
	   body section.main.shadow-1{
		  padding: 120px 20px 90px 20px;
	   }
	     body section.main.shadow-1:before{
		   border-bottom: 100px solid transparent;
	   }
	   body section.main.shadow-1:after{
		   border-top: 100px solid transparent;
	   }
   body section.main .big-title{ 
   font-size: 48px;
   line-height: 1.2em;
   } 
   body section.main .medium-title{ 
   font-size: 40px;
   line-height: 1em;
   } 
   body section.main .text-desc-big { 
   font-size: 20px;
   line-height: 28px;
   }
   }	
</style>
<div class="doc_banner_area search-banner-light-2" style="background:#c3e2ff; padding-bottom:0px;">
   <div class="container">
      <div class="breadcrumb_text" style="max-width: none;">
         <h1>Get a grip on your restaurants’ operations</h1>
         <p>Why Choose Gleeca Restaurant Management System for your Restaurant?</p>
      </div>
	   
   </div>
</div>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row align-items-center"> 
         <div class="col-md-6">
            <div class="column-wrap"> 
				 <div class="shape shape-1">
             <img src="<?php bloginfo('template_directory');?>/img/why-us/shape-01.png" class="img-1">
         </div>
               <h1 class="big-title">Get time back</h1>
               <p class="text-desc-big">
                  Updating spreadsheets is time-consuming and error-prone. So how about you leave all that data mining behind, tap into our visualisations, and get a clear overview of your BoH foundations.
               </p>
            </div>
         </div>
         <div class="col-md-6">
            <ul class="schedule-list">
               <li class="schedule-item">
                  <div class="schedule-item-inner">
                     <div class="schedule-symbol">
                        <div class="media-circle">
                           <img src="<?php bloginfo('template_directory');?>/img/why-us/inventory.png" class="img-fluid"> 
                        </div>
                     </div>
                     <div class="schedule-content">
                        <h5 class=" overline-title">
                           Inventory
                        </h5>
                        <p class="text-lead">
                           Get an overview of your inventory — stock, transfers, and variance — to control your spending and food waste.
                        </p>
                     </div>
                  </div>
               </li>
               <li class="schedule-item">
                  <div class="schedule-item-inner">
                     <div class="schedule-symbol">
                        <div class="media-circle">
                           <img src="<?php bloginfo('template_directory');?>/img/why-us/inventory.png" class="img-fluid"> 
                        </div>
                     </div>
                     <div class="schedule-content">
                        <h5 class=" overline-title">
                           Procurement
                        </h5>
                        <p class="text-lead">
                           Visualise purchasing trends, delivery values & location procurement behaviour to optimise your food costs.
                        </p>
                     </div>
                  </div>
               </li>
               <li class="schedule-item">
                  <div class="schedule-item-inner">
                     <div class="schedule-symbol">
                        <div class="media-circle">
                           <img src="<?php bloginfo('template_directory');?>/img/why-us/inventory.png" class="img-fluid"> 
                        </div>
                     </div>
                     <div class="schedule-content">
                        <h5 class=" overline-title">
                           Sales
                        </h5>
                        <p class="text-lead">
                           Study insights from your reconciled PoS & vendor data to make tailored profit-driving decisions for each outlet.
                        </p>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="main light-yellow-bg shadow-1">
   <div class="container pb-4">
      <div class="background-overlay"></div>
      <div class="row">
         <div class="col-md-6">
            <div class="column-wrap">
               <h3 class="medium-title">Check, compare &amp; fine-tune BoH performance of all your outlets without using Excel.</h3>
               <p class="text-desc-big">
                  Spreadsheets turn data reconciliation from different outlets into a nightmare. Our F&B group analytics functionality lets you skip the messy middle of number-crunching. This shortens your reaction time, so your underperforming locations get the attention they need, when they need it.
               </p>
            </div>
            <div class="element-populated-wrap">
               <div class="row">
                  <div class="col-md-6">
                     <div class="spilt-sec-detail">
                        <div class="box-icon">
                           <img src="<?php bloginfo('template_directory');?>/img/why-us/inventory.png" class="img-fluid"> 
                        </div>
                        <div class="icon-box-title">
                           <h3> 
                              Collaborate with unit managers
                           </h3>
                           <p>
                              Save your managers from drowning in data dumps by arming them with performance-building graphics & insights.
                           </p>
                        </div>
                     </div>
                     <div class="spilt-sec-detail">
                        <div class="box-icon">
                           <img src="<?php bloginfo('template_directory');?>/img/why-us/inventory.png" class="img-fluid"> 
                        </div>
                        <div class="icon-box-title">
                           <h3> 
                              Collaborate with unit managers
                           </h3>
                           <p>
                              Save your managers from drowning in data dumps by arming them with performance-building graphics & insights.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 spilt-right">
                     <div class="spilt-sec-detail last">
                        <div class="box-icon">
                           <img src="<?php bloginfo('template_directory');?>/img/why-us/inventory.png" class="img-fluid"> 
                        </div>
                        <div class="icon-box-title">
                           <h3> 
                              Collaborate with unit managers
                           </h3>
                           <p>
                              Save your managers from drowning in data dumps by arming them with performance-building graphics & insights.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/img/why-us/insights-check-compare-01-min-_-1622x2048.png" class="img-fluid"> 
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row">
         <div class="col-md-3"> 
            <img src="<?php bloginfo('template_directory');?>/img/why-us/shape-02.png" class="img-fluid"> 
         </div>
         <div class="col-md-9">
            <div class="column-wrap">
               <h5 class="text-label">Restaurant Inventory Analytics Dashboard
               </h5>
               <h1 class="big-title">Stay on top of inventory</h1>
               <p class="text-desc-big">
                  You need to keep your biggest cost centre in the crosshairs at all times… and spreadsheets don’t cut it. Our restaurant analytics software solution analyses thousands of data points — from counts to transfers — to paint an insightful picture of the state of your inventory at every outlet.
               </p>
               <div class="my-3"> 
                  <a href="#" class="btn action_btn btnhover thm_btn p-4" type="button">Talk to sales</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row align-items-center">
         <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/img/why-us/insights-hub-prevent-wasteful-01-min_.png" class="img-fluid"> 
         </div>
         <div class="col-md-6">
            <div class="column-wrap">
               <h3 class="medium-title">Know your variance...</h3>
               <p class="text-desc-big">
                 ... without digging for it. Keep tabs on count variance to weed out theft and errors and prevent them from eating into your bottom line.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="column-wrap">
               <h3 class="medium-title">See item price evolution</h3>
               <p class="text-desc-big">
                  When you know item price trends, you can build tighter and more profitable menus… rethink your costly recipes… and keep vendors in check.
               </p>
            </div>
         </div>
         <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/img/why-us/insights-hub-know-variance-01-min_.png" class="img-fluid"> 
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row align-items-center">
         <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/img/why-us/insights-hub-price-evolution-01-min_-2048x971.png" class="img-fluid"> 
         </div>
         <div class="col-md-6">
            <div class="column-wrap">
               <h3 class="medium-title">Know your variance...</h3>
               <p class="text-desc-big">
                  ... without digging for it. Keep tabs on count variance to weed out theft and errors and prevent them from eating into your bottom line.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main review-default-wrap pb-0">
   <div class="container pb-4">
      <div class="row justify-content-between align-items-center">
         <div class="col-md-5">
            <div class="fl-wrap"> 
               <img src="<?php bloginfo('template_directory');?>/img/why-us/tosca-eggenhuizen-01-min.jpeg" class="img-fluid"> 
            </div>
         </div>
         <div class="col-md-6">
            <div class="column-wrap">
               <div class="single-comment">
                  <p class="text-desc-big">
                     The item price evolution dashboard is packed with value — it guides our recipe decisions and tells us when it’s time to touch base with our vendors.
                  </p>
                  <div class="text-editor">
                     <h6>
                        Tosca Eggenhuizen
                     </h6>
                     <p>CitizenM</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row">
         <div class="col-md-9">
            <div class="column-wrap">
               <div class="shape-4">
                  <img src="<?php bloginfo('template_directory');?>/img/why-us/shape-03.png" class="img-fluid">
               </div>
               <h5 class="text-label">Restaurant Procurement Analytics Dashboard
               </h5>
               <h1 class="big-title">Get better deals from vendors</h1>
               <p class="text-desc-big">
                  Track vendor behaviour and weekly delivery values with restaurant analytics software. Use these insights to negotiate better deals and lower your theoretical [and actual] food costs. And keep a vice-like grip on your CoGS at all times.
               </p>
               <div class="my-3"> 
                  <a href="#" class="btn action_btn btnhover thm_btn p-4" type="button">Talk to sales</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row align-items-center">
         <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/img/why-us/insights-hub-monthly-purchased-01-min_.png" class="img-fluid"> 
         </div>
         <div class="col-md-6">
            <div class="column-wrap">
               <h3 class="medium-title">See monthly delivery values</h3>
               <p class="text-desc-big">
                  Monitor how much you spend with vendors at every location. Optimise deliveries to keep operational costs down.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="column-wrap">
               <h3 class="medium-title">Stop unauthorised purchasing</h3>
               <p class="text-desc-big">
                  Identify ‘rogue’ spending by location managers. Nip it in the bud. One less variance driver to worry about.
               </p>
            </div>
         </div>
         <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/img/why-us/insights-hub-unauth-purch-01-min_.png" class="img-fluid"> 
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row align-items-center">
         <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/img/why-us/insights-hub-focus-best-01-min_.png" class="img-fluid"> 
         </div>
         <div class="col-md-6">
            <div class="column-wrap">
               <h3 class="medium-title">Focus on your best vendors</h3>
               <p class="text-desc-big">
                  Find vendors with long-term potential. Build lasting partnerships. Secure optimal prices to drive growth.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="column-wrap">
               <h1 class="big-title">Turn noisy data into clear visuals for efficient decision-making</h1>
            </div>
         </div>
         <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/img/why-us/insights-hub-turn-noisy-01-min_-768x1185.png" class="img-fluid"> 
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row">
         <div class="col-md-9">
            <div class="column-wrap">
               <div class="shape-4">
                  <img src="<?php bloginfo('template_directory');?>/img/why-us/shape-04.png" class="img-fluid">
               </div>
               <h5 class="text-label">Restaurant Sales Analytics Dashboard
               </h5>
               <h1 class="big-title">Make sales data work for you</h1>
               <p class="text-desc-big">
                  Your PoS is choke-full of profit-driving insights. The only problem? They’re buried in piles of useless data. Our restaurant reporting software turns those insights into charts and graphs, giving you an overview of sales trends so you can continually improve your menus and offers.
               </p>
               <div class="my-3"> 
                  <a href="#" class="btn action_btn btnhover thm_btn p-4" type="button">Talk to sales</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row align-items-center">
         <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/img/why-us/insights-hub-historical-cross-01-min_.png" class="img-fluid"> 
         </div>
         <div class="col-md-6">
            <div class="column-wrap">
               <h3 class="medium-title">Get historical & cross-location insights</h3>
               <p class="text-desc-big">
                  Track the sales evolution of your menu items, and make budget, menu & promotion plans that maximise profit.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="column-wrap">
               <h3 class="medium-title">Dig into profit contribution per PoS category</h3>
               <p class="text-desc-big">
                  See how each of your PoS categories is performing over time. Make the right decisions on what to cut & what to double down on.
               </p>
            </div>
         </div>
         <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/img/why-us/insights-hub-profit-contrib-01-min_.png" class="img-fluid"> 
         </div>
      </div>
   </div>
</section>
<section class="main pb-0">
   <div class="container pb-4">
      <div class="row align-items-center">
         <div class="col-md-6">
            <img src="<?php bloginfo('template_directory');?>/img/why-us/insights-hub-cogs-01-min_.png" class="img-fluid"> 
         </div>
         <div class="col-md-6">
            <div class="column-wrap">
               <h3 class="medium-title">Stay on top of CoGS</h3>
               <p class="text-desc-big">
                  Zoom in on cost-of-goods-sold per location to discover vendor & inventory discrepancies that are hurting your bottom line.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="main">
   <div class="container">
      <div class="row align-items-center justify-content-center">
         <div class="col-md-10">
            <div class="column-wrap text-center">
               <h3 class="medium-title">Comprehensive Comparison of Scale, Service and Pricing</h3>
               <p class="text-desc-big text-center">
                  Before we start comparing, let’s look at the parameters that you should use to judge a POS system (*click on each header to learn more)
               </p>
            </div>
            <div class="table-responsive mt-4">
               <table class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>
                        </th>
                        <th>
                           <img src="<?php bloginfo('template_directory');?>/img/logo.png" class="img-fluid" width="140"> 
                        </th>
                        <th>
                           <img src="<?php bloginfo('template_directory');?>/img/logo.png" class="img-fluid" width="140"> 
                        </th>
                        <th>
                           <img src="<?php bloginfo('template_directory');?>/img/logo.png" class="img-fluid" width="140"> 
                        </th>
                        <th>
                           <img src="<?php bloginfo('template_directory');?>/img/logo.png" class="img-fluid" width="140"> 
                        </th>
                        <th>
                           <img src="<?php bloginfo('template_directory');?>/img/logo.png" class="img-fluid" width="140"> 
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th>
                           <h6>
                              Clients
                           </h6>
                        </th>
                        <td>
                           <span class="text-danger">1500</span>
                        </td>
                        <td>
                           <span class="text-success">1500</span>
                        </td>
                        <td>
                           <span>1500</span>
                        </td>
                        <td>
                           <span class="text-danger">1500</span>
                        </td>
                        <td>
                           <span class="text-success">1500</span>
                        </td>
                     </tr>
                     <tr>
                        <th>
                           <h6>
                              Online Support
                           </h6>
                        </th>
                        <td>
                           <span class="text-success">1500</span>
                        </td>
                        <td>
                           <span>1500</span>
                        </td>
                        <td>
                           <span class="text-danger">1500</span>
                        </td>
                        <td>
                           <span>1500</span>
                        </td>
                        <td>
                           <span class="text-warning">1500</span>
                        </td>
                     </tr>
                     <tr>
                        <th>
                           <h6>
                              Ground Support
                           </h6>
                        </th>
                        <td>
                           <span>1500</span>
                        </td>
                        <td>
                           <span class="text-danger">1500</span>
                        </td>
                        <td>
                           <span class="text-success">1500</span>
                        </td>
                        <td>
                           <span>1500</span>
                        </td>
                        <td>
                           <span class="text-danger">1500</span>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>