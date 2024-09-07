<div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade sticky" aria-hidden="true" data-class="bg-light">
         <div class="sidenav h-100 modal-dialog bg-light">
            <!-- sidenav top -->
            <div class="navbar">
               <!-- brand --> 			   
               <a onclick="$('.pagecont').hide();$('#games-id').show();" class="navbar-brand" data-pjax-state="">			   
               <span class="hidden-folded d-inline l-s-n-1x"><i class="fas fa-fire" style="color: #f4c414!important;"></i> <span style="margin-left:5px">HOTSKINS</span></span> 
               </a>
               <!-- / brand -->
            </div>
            <!-- Flex nav content -->
            <div class="flex scrollable hover">
               <div class="nav-active-text-primary" data-nav="">
                  <ul class="nav bg">
                     <li class="nav-header hidden-folded"><span class="text-muted">Главная</span></li>
                     <li class="active">
                        <a onclick="$('.pagecont').hide();$('#games-id').show();$('#aside').click()" data-pjax-state="">
                           <span class="nav-icon text-primary">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                 <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                 <polyline points="9 22 9 12 15 12 15 22"></polyline>
                              </svg>
                           </span>
                           <span class="nav-text">Игры</span>
                        </a>
                     </li>
                     <li class="nav-header hidden-folded"><span class="text-muted">Страницы</span></li>
					 <?php if($user){ ?>
                     <li>
                        <a onclick="$('.pagecont').hide();$('#bonus-id').show();$('#aside').click()" data-pjax-state="">
                           <span class="nav-icon text-warning">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift mx-2">
                                 <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                 <rect x="2" y="7" width="20" height="5"></rect>
                                 <line x1="12" y1="22" x2="12" y2="7"></line>
                                 <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                 <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                              </svg>
                           </span>
                           <span class="nav-text">Бонусы</span>
                        </a>
                     </li>
                     <li>
                        <a onclick="$('.pagecont').hide();$('#reftyrik-id').show();$('#aside').click()" data-pjax-state="">
                           <span class="nav-icon text-warning">
                               <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="16"><g><g><g><g><g id="XMLID_2783_"><g id="XMLID_2784_"><g id="XMLID_2785_"><g id="XMLID_2786_"><g id="XMLID_2787_"><g id="XMLID_2788_"><g id="XMLID_2789_"><g id="XMLID_2790_"><g id="XMLID_2791_"><g id="XMLID_2792_"><g id="XMLID_2793_"><g id="XMLID_2794_"><g id="XMLID_2795_"><g id="XMLID_2818_"><g id="XMLID_3411_"><circle cx="256" cy="256" fill="#ff4d05" r="256"/></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g></g><path d="m265.656 148.608-69.92-69.99-83.289 83.29 82.675 82.643-30.891 41.564-39.254-39.254-19.571 32.006-19.417 6.982 34.522 34.522-65.35 53.222 127.824 127.824c23.141 6.874 47.643 10.583 73.015 10.583 141.385 0 256-114.615 256-256 0-28.158-4.56-55.249-12.958-80.59l-98.14-98.14z" fill="#c30047"/><g><g><path d="m360.606 309.988h69.887v103.465h-69.887z" fill="#ff9d21" transform="matrix(-.707 .707 -.707 -.707 931.02 337.8)"/><g><g><path d="m365.721 322.34h34.946v103.471h-34.946z" fill="#ff7d47" transform="matrix(.707 -.707 .707 .707 -152.277 380.523)"/></g></g><path d="m111.098 77.27 84.638 1.348 188.962 229.266-42.986 42.986-229.265-188.962z" fill="#daeaec"/><path d="m112.447 161.906 197.083 162.442 27.535 22.691 4.652 3.831 21.491-21.491-252.108-252.108z" fill="#cedfe2"/><path d="m278.161 291.953h150.378v55.137h-150.378z" fill="#ffdd54" transform="matrix(-.707 .707 -.707 -.707 829.142 295.601)"/><path d="m289.17 318.533h75.19v55.139h-75.19z" fill="#ff9d21" transform="matrix(.707 -.707 .707 .707 -149.025 332.43)"/></g><g><path d="m81.507 309.988h69.887v103.465h-69.887z" fill="#5ecbf1" transform="matrix(.707 .707 -.707 .707 289.883 23.603)"/><g><g><path d="m77.07 356.603h103.471v34.946h-103.471z" fill="#0fa7da" transform="matrix(.707 -.707 .707 .707 -226.785 200.644)"/></g></g><path d="m400.901 77.27-84.637 1.348-188.962 229.266 42.986 42.986 229.265-188.962z" fill="#fff"/><path d="m399.553 161.906-197.083 162.442-27.535 22.691-4.652 3.831-21.491-21.491 252.108-252.108z" fill="#f1f4f6"/><path d="m83.461 291.953h150.378v55.137h-150.378z" fill="#00e4ef" transform="matrix(.707 .707 -.707 .707 272.403 -18.597)"/><path d="m157.666 308.508h55.139v75.19h-55.139z" fill="#5ecbf1" transform="matrix(.707 -.707 .707 .707 -190.477 232.352)"/></g></g></g></svg>
                           </span>
                           <span class="nav-text">Реф. турнир</span>
                        </a>
                     </li>					 
					 <?php } ?>
                     <li>
                        <a onclick="$('.pagecont').hide();$('#fair-id').show();$('#aside').click()" data-pjax-state="">
                           <span class="nav-icon text-info">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu mx-2">
                                 <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                 <rect x="9" y="9" width="6" height="6"></rect>
                                 <line x1="9" y1="1" x2="9" y2="4"></line>
                                 <line x1="15" y1="1" x2="15" y2="4"></line>
                                 <line x1="9" y1="20" x2="9" y2="23"></line>
                                 <line x1="15" y1="20" x2="15" y2="23"></line>
                                 <line x1="20" y1="9" x2="23" y2="9"></line>
                                 <line x1="20" y1="14" x2="23" y2="14"></line>
                                 <line x1="1" y1="9" x2="4" y2="9"></line>
                                 <line x1="1" y1="14" x2="4" y2="14"></line>
                              </svg>
                           </span>
                           <span class="nav-text">Честная игра</span>
                        </a>
                     </li>
                     <li>
                        <a onclick="$('.pagecont').hide();$('#faq-id').show();$('#aside').click()" data-pjax-state="">
                           <span class="nav-icon text-danger">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book mx-2">
                                 <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                 <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                              </svg>
                           </span>
                           <span class="nav-text">FAQ</span>
                        </a>
                     </li>
					  <?php if($user){ ?>
                     <li>
                        <a onclick="$('.pagecont').hide();$('#ref-id').show();$('#aside').click();" data-pjax-state="">
                           <span class="nav-icon text-success">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus mx-2">
                                 <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="8.5" cy="7" r="4"></circle>
                                 <line x1="20" y1="8" x2="20" y2="14"></line>
                                 <line x1="23" y1="11" x2="17" y2="11"></line>
                              </svg>
                           </span>
                           <span class="nav-text">Рефералы</span>
                        </a>
                     </li>
					 <?php } ?>
                     <li>
                        <a href="https://vk.com/im?media=&message=&sel=-196560794" data-pjax-state="" onclick="$('#aside').click()">
                           <span class="nav-icon text-success">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag mx-2">
                                 <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                 <line x1="4" y1="22" x2="4" y2="15"></line>
                              </svg>
                           </span>
                           <span class="nav-text">Поддержка</span>
                        </a>
                     </li>
                     <li>
                        <a href="https://tgme.pro/hotskinsclub" data-pjax-state="" onclick="$('#aside').click()">
                           <span class="nav-icon text-success">
                              <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512.004 512.004" height="512" viewBox="0 0 512.004 512.004" width="16">
                                 <g>
                                    <path d="m511.35 52.881-122 400c-3.044 9.919-14.974 13.828-23.29 7.67-7.717-5.727-203.749-151.217-214.37-159.1l-142.1-54.96c-5.79-2.24-9.6-7.81-9.59-14.02.01-6.21 3.85-11.77 9.65-13.98l482-184c5.824-2.232 12.488-.626 16.67 4.17 3.37 3.87 4.55 9.24 3.03 14.22z" fill="#f54394"/>
                                    <path d="m511.35 52.881-122 400c-3.044 9.919-14.974 13.828-23.29 7.67l-190.05-141.05 332.31-280.84c3.37 3.87 4.55 9.24 3.03 14.22z" fill="#f54394"/>
                                    <path d="m507.89 58.821-271.49 286.4-63 125.03c-3.16 6.246-10.188 9.453-16.87 7.84-6.76-1.6-11.53-7.64-11.53-14.59v-175.3c0-4.86 2.35-9.41 6.31-12.23l337-239.69c6.29-4.48 14.95-3.45 20.01 2.38 5.07 5.83 4.88 14.56-.43 20.16z" fill="#eee"/>
                                    <path d="m507.89 58.821-271.49 286.4-63 125.03c-3.16 6.246-10.188 9.453-16.87 7.84-6.76-1.6-11.53-7.64-11.53-14.59l31.01-144 332.31-280.84c5.07 5.83 4.88 14.56-.43 20.16z" fill="#f54394"/>
                                 </g>
                              </svg>
                           </span>
                           <span class="nav-text">Телеграм</span>
                        </a>
                     </li>
                     <li>
                        <a href="https://vk.com/im?media=&message=&sel=-196560794" onclick="$('#aside').click()" data-pjax-state="">
                           <span class="nav-icon text-success">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-percent mx-2">
                                 <line x1="19" y1="5" x2="5" y2="19"></line>
                                 <circle cx="6.5" cy="6.5" r="2.5"></circle>
                                 <circle cx="17.5" cy="17.5" r="2.5"></circle>
                              </svg>
                           </span>
                           <span class="nav-text">Сотрудничество</span></span>
                        </a>
                     </li>
                  </ul>
                  <ul class="nav">
                     <li class="nav-header hidden-folded"><span class="text-muted">Дополнительное</span></li>
					 <?php if($user){ ?>
                     <li>
                        <a href="#" onclick="Cookies.set('sid', '');location.href = '/';$('#aside').click()" data-pjax-state="">
                           <span class="nav-icon text-success">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle mx-2">
                                 <circle cx="12" cy="12" r="10"></circle>
                                 <line x1="15" y1="9" x2="9" y2="15"></line>
                                 <line x1="9" y1="9" x2="15" y2="15"></line>
                              </svg>
                           </span>
                           <span class="nav-text">Выйти</span>
                        </a>
                     </li>
					 <?php }else{ ?>
                     <li>
                        <a data-toggle="modal" data-target="#loginAccount" data-pjax-state="" onclick="$('#aside').click()">
                           <span class="nav-icon text-success">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                           </span>
                           <span class="nav-text">Войти</span>
                        </a>
                     </li>
 					 <?php } ?>
                  </ul>
               </div>
            </div>
            <!-- sidenav bottom -->
            <div class="no-shrink">
               <div class="p-3 d-flex align-items-center">
                  <center>
                     <div class="text-sm hidden-folded text-muted">Copyright © 2020 Hotskins.<br>All rights reserved.</div>
                  </center>
               </div>
            </div>
         </div>
      </div>