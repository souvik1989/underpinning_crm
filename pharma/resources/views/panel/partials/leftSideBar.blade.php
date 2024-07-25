 <!-- Page Sidebar Start-->
        <div class="iconsidebar-menu">
          <div class="sidebar">
            <ul class="iconMenu-bar custom-scrollbar">
           
              <li class="{{ (str_starts_with(Route::current()->getName(), 'dashboard') ||str_starts_with(Route::current()->getName(), 'dashboard.profile')|| str_starts_with(Route::current()->getName(), 'dashboard.password') ) ? 'open2' : '' }}"><a class="bar-icons" href="javascript:void(0)">
                  <!--img(src='../assets/images/menu/home.png' alt='')--><i class="pe-7s-home"></i><span>General    </span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Dashboard</li>
                  <li class="{{  Route::is('dashboard') ? 'active' : '' }}"><a href="{{route('dashboard')}}" class="{{  Route::is('dashboard') ? 'active' : '' }}">Go To HomePage</a></li>
                   <li class="iconbar-header">Profile</li>
                  <li class="{{ str_starts_with(Route::current()->getName(), 'dashboard.profile') ? 'active' : '' }}"><a href="{{route('dashboard.profile')}}" class="{{ str_starts_with(Route::current()->getName(), 'dashboard.profile') ? 'active' : '' }}">Edit Profile</a></li>
                   
                  <li class="{{ str_starts_with(Route::current()->getName(), 'dashboard.password') ? 'active' : '' }}"><a href="{{route('dashboard.password')}}" class="{{ str_starts_with(Route::current()->getName(), 'dashboard.password') ? 'active' : '' }}">Change Password</a></li>
                </ul>
              </li>
              
              
              <li class="{{ (str_starts_with(Route::current()->getName(), 'doctor.')) ? 'open2' : '' }}"><span class="badge badge-pill badge-danger">{{$user_count ?? 0}}</span><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-users"></i><span>Doctor</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Doctor List</li>
                  <li class="{{ str_starts_with(Route::current()->getName(), 'doctor.') ? 'active' : '' }}"><a href="{{route('doctor.index')}}" class="{{ str_starts_with(Route::current()->getName(), 'doctor.') ? 'active' : '' }}">View List</a></li>
                </ul>
              </li>

               
               {{--<li class="{{ (str_starts_with(Route::current()->getName(), 'contact.')  ) ? 'open2' : '' }}"><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-mail-open-file"></i><span>Contacts</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">All Contacts</li>
                  <li class="{{ str_starts_with(Route::current()->getName(), 'contact.') ? 'active' : '' }}"><a href="{{route('contact.index')}}" class="{{ str_starts_with(Route::current()->getName(), 'contact.') ? 'active' : '' }}">Message lists</a></li>
                  
                  
                  
                </ul>
              </li>--}}
               
             {{-- <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-note2"></i><span>Forms</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Form Controls</li>
                  <li><a href="form-validation.html">Form Validation</a></li>
                  <li><a href="base-input.html">Base Inputs</a></li>
                  <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                  <li><a href="input-group.html">Input Groups</a></li>
                  <li><a href="megaoptions.html">Mega Options</a></li>
                  <li class="iconbar-header sub-header">Form Widgets</li>
                  <li><a href="datepicker.html">Datepicker</a></li>
                  <li><a href="time-picker.html">Timepicker</a></li>
                  <li><a href="datetimepicker.html">Datetimepicker</a></li>
                  <li><a href="daterangepicker.html">Daterangepicker</a></li>
                  <li><a href="touchspin.html">Touchspin</a></li>
                  <li><a href="select2.html">Select2</a></li>
                  <li><a href="switch.html">Switch</a></li>
                  <li><a href="typeahead.html">Typeahead</a></li>
                  <li><a href="clipboard.html">Clipboard</a></li>
                  <li class="iconbar-header sub-header">Form Layout</li>
                  <li><a href="default-form.html">Default Forms</a></li>
                  <li><a href="form-wizard.html">Form Wizard 1</a></li>
                  <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                  <li><a href="form-wizard-three.html">Form Wizard 3</a></li>
                  <li><a href="form-wizard-four.html">Form Wizard 4</a></li>
                </ul>
              </li>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-id"></i><span>Tables</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Bootstrap Tables</li>
                  <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>
                  <li><a href="bootstrap-sizing-table.html">Sizing Tables</a></li>
                  <li><a href="bootstrap-border-table.html">Border Tables</a></li>
                  <li><a href="bootstrap-styling-table.html">Styling Tables</a></li>
                  <li><a href="table-components.html">Table components</a></li>
                  <li class="iconbar-header sub-header">Data Tables</li>
                  <li><a href="datatable-basic-init.html">Basic Init</a></li>
                  <li><a href="datatable-advance.html">Advance Init</a></li>
                  <li><a href="datatable-styling.html">Styling</a></li>
                  <li><a href="datatable-AJAX.html">AJAX</a></li>
                  <li><a href="datatable-server-side.html">Server Side</a></li>
                  <li><a href="datatable-plugin.html">Plug-in</a></li>
                  <li><a href="datatable-API.html">API</a></li>
                  <li><a href="datatable-data-source.html">Data Sources</a></li>
                  <li class="iconbar-header sub-header">Extension Data Tables</li>
                  <li><a href="datatable-ext-autofill.html">Auto Fill</a></li>
                  <li><a href="datatable-ext-basic-button.html">Basic Button</a></li>
                  <li><a href="datatable-ext-col-reorder.html">Column Reorder</a></li>
                  <li><a href="datatable-ext-fixed-header.html">Fixed Header</a></li>
                  <li><a href="datatable-ext-html-5-data-export.html">HTML 5 Export</a></li>
                  <li><a href="datatable-ext-key-table.html">Key Table</a></li>
                  <li><a href="datatable-ext-responsive.html">Responsive</a></li>
                  <li><a href="datatable-ext-row-reorder.html">Row Reorder</a></li>
                  <li><a href="datatable-ext-scroller.html">Scroller</a></li>
                  <li><a href="jsgrid-table.html">Js Grid Table</a></li>
                </ul>
              </li>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-graph3"></i><span>Charts</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Charts</li>
                  <li><a href="chart-apex.html">Apex Chart</a></li>
                  <li><a href="chart-google.html">Google Chart</a></li>
                  <li><a href="chart-sparkline.html">sparkline chart</a></li>
                  <li><a href="chart-flot.html">Flot Chart</a></li>
                  <li><a href="chart-knob.html">Knob Chart</a></li>
                  <li><a href="chart-morris.html">Morris Chart</a></li>
                  <li><a href="chartjs.html">chatjs Chart</a></li>
                  <li><a href="chartist.html">chartist Chart</a></li>
                  <li><a href="chart-peity.html">Peity Chart</a></li>
                </ul>
              </li>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-server"></i><span>Apps</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Ecommerce</li>
                  <li><a href="product.html">Product</a></li>
                  <li><a href="product-page.html">Product page</a></li>
                  <li><a href="list-products.html">Product list</a></li>
                  <li><a href="payment-details.html">Payment Details</a></li>
                  <li><a href="order-history.html">Order History</a></li>
                  <li><a href="invoice-template.html">Invoice</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li class="iconbar-header sub-header"> Blog</li>
                  <li><a href="blog.html">Blog Details</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                  <li><a href="add-post.html">Add Post</a></li>
                  <li class="iconbar-header sub-header">Timeline</li>
                  <li><a href="timeline-v-1.html">Timeline 1</a></li>
                  <li><a href="timeline-v-2.html">Timeline 2</a></li>
                  <li><a href="timeline-small.html">Timeline 3</a></li>
                  <li class="iconbar-header sub-header"> Gallery</li>
                  <li><a href="gallery.html">Gallery Grid</a></li>
                  <li><a href="gallery-with-description.html">Gallery Grid with Desc</a></li>
                  <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                  <li><a href="masonry-gallery-with-disc.html">Masonry Gallery Desc</a></li>
                  <li><a href="gallery-hover.html">Hover Effects</a></li>
                  <li class="iconbar-header sub-header">Job Search</li>
                  <li><a href="job-cards-view.html">Cards view</a></li>
                  <li><a href="job-list-view.html">List View</a></li>
                  <li><a href="job-details.html">Job Details</a></li>
                  <li><a href="job-apply.html">Apply</a></li>
                  <li class="iconbar-header sub-header">Learning</li>
                  <li><a href="learning-list-view.html">Learning List</a></li>
                  <li><a href="learning-detailed.html">Detailed Course                </a></li>
                </ul>
              </li>
              <li><span class="badge badge-pill badge-primary">New</span><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-gift"></i><span>Apps</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">User</li>
                  <li><a href="user-profile.html">Users Profile</a></li>
                  <li><a href="edit-profile.html">Users Edit</a></li>
                  <li><a href="user-cards.html">Users Cards</a></li>
                  <li><a href="email-application.html">Email App</a></li>
                  <li><a href="email-compose.html">Email Compose</a></li>
                  <li><a href="chat.html">Chat App</a></li>
                  <li><a href="chat-video.html">Video chat</a></li>
                  <li><a href="calendar-basic.html">Calender Basic</a></li>
                  <li> <a href="social-app.html">Social App</a></li>
                  <li><a href="to-do.html">To-Do</a></li>
                  <li class="iconbar-header sub-header">Editors</li>
                  <li><a href="summernote.html">Summer Note</a></li>
                  <li><a href="ckeditor.html">CK editor</a></li>
                  <li><a href="simple-MDE.html">MDE editor</a></li>
                  <li><a href="ace-code-editor.html">ACE code editor</a></li>
                  <li class="iconbar-header sub-header">Others</li>
                  <li><a href="landing-page.html">Landing page</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="knowledgebase.html">Knowledgebase</a></li>
                  <li><a href="internationalization.html">Internationalization</a></li>
                  <li class="iconbar-header sub-header">Maps</li>
                  <li><a href="map-js.html">Maps JS</a></li>
                  <li><a href="vector-map.html">Vector Maps           </a></li>
                </ul>
              </li>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-copy-file"></i><span>Pages</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">All Pages</li>
                  <li><a href="sample-page.html">Sample page</a></li>
                  <li><a href="support-ticket.html">Support Ticket</a></li>
                  <li><a href="search.html">Search Website</a></li>
                  <li><a href="error-400.html">Error 400</a></li>
                  <li><a href="error-404.html">Error 404</a></li>
                  <li><a href="error-500.html">Error 500</a></li>
                  <li><a href="maintenance.html">Maintenance</a></li>
                  <li><a href="login.html">Login Simple</a></li>
                  <li><a href="signup.html">Register Simple</a></li>
                  <li><a href="forget-password.html">Forget Password</a></li>
                  <li><a href="comingsoon.html">Coming Simple</a></li>
                  <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                  <li><a href="comingsoon-bg-img.html">Coming with Bg Image               </a></li>
                </ul>
              </li> --}}
            </ul>
          </div>
        </div>
        <!-- Page Sidebar Ends-->

       