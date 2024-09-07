<div id="header" class="page-header bg-body sticky" data-class="bg-body">
         <div class="navbar navbar-expand-lg">
            <!-- brand --> 
            <li class="nav-item d-lg-none" style="
               LIST-STYLE-TYPE: NONE;
               ">
               <a class="nav-link px-1" data-toggle="modal" data-target="#aside" data-pjax-state="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                     <line x1="3" y1="12" x2="21" y2="12"></line>
                     <line x1="3" y1="6" x2="21" y2="6"></line>
                     <line x1="3" y1="18" x2="21" y2="18"></line>
                  </svg>
               </a>
            </li>
            <a onclick="$('.pagecont').hide();$('#games-id').show();" class="navbar-brand d-lg-none" data-pjax-state="">
            <span class="hidden-folded d-inline l-s-n-1x d-lg-none"><i class="fas fa-fire" style="color: #f4c414!important;"></i> <span style="margin-left:5px">HOTSKINS</span></span> 
            </a>
            <!-- / brand --><!-- Navbar collapse -->
            <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarToggler">
               <form class="input-group m-2 my-lg-0">
                  <div class="input-group-prepend">       
                  </div>
               </form>
            </div>
            <ul class="nav navbar-menu order-1 order-lg-2">
			   <li class="nav-item" style="display:none">
			       <div style="border-radius:50px;border: 1px solid gray!important;padding:8px;background:#f9f9fa;cursor:pointer" onclick="var CookieDate = new Date;CookieDate.setFullYear(CookieDate.getFullYear() +10);document.cookie = 'background=light; expires=' + CookieDate.toGMTString() + ';';$('html').attr('class', 'bg-light');$('html').attr('data-class', 'bg-light');$('.modal-content').css('border', 'none!important');$('.modal-content').css('background-color', '#f9f9fa!important');$('.modal-footer').css('border-top', '1px solid #eee!important');"></div>
				   <div style="border-radius:50px;border: 1px solid gray!important;padding:8px;margin-left:5px;background:#1c233f;cursor:pointer" onclick="var CookieDate = new Date;CookieDate.setFullYear(CookieDate.getFullYear() +10);document.cookie = 'background=dark; expires=' + CookieDate.toGMTString() + ';';$('html').attr('class', 'bg-dark');$('html').attr('data-class', 'bg-dark');$('.modal-content').css('border', '1px solid #2D3347!important');$('.modal-content').css('background-color', '#161d33!important');$('.modal-footer').css('border-top', '1px solid #2D3347!important');"></div>
			   </li>
               <li class="nav-item d-none d-sm-block">
                  <a class="nav-link px-2" data-toggle="fullscreen" data-pjax-state="">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize">
                        <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
                     </svg>
                  </a>
               </li>
               <!-- User dropdown menu -->
			   <?php if($user){ ?>
               <li class="nav-item">
                  <a href="#" data-toggle="modal" data-target="#profile" class="nav-link d-flex align-items-center px-2 text-color" data-pjax-state=""><span class="avatar w-24" style="margin: -2px"><div style="display:inline-flex;text-align:center;text-transform:uppercase;padding:8px;border-radius:99px;background:#3f51b5;color:#fff;font-weight:600"><?php echo $ava1;?></div></span></a>
               </li>			  
			   <?php } ?>
            </ul>
         </div>
      </div>