<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
    </span> </div>
                <!-- /input-group -->
            </li>
            <li> <a href="index.blade.php" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Tableau de bord</span></a> </li>
            </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-list p-r-10"></i> <span class="hide-menu"> Categories <span class="fa arrow"></span><span class="label label-rouded label-danger pull-right"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('categories.index') }}">Liste categorie</a></li>
                    <li> <a href="{{ route('categories.create') }}">Ajouter</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span class="hide-menu"> Articles <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('articles.index') }}">Liste</a></li>
                    <li> <a href="{{ route('articles.create') }}">Ajouter </a></li>
                    <li> <a href="{{ route('articles.index') }}">Modifier</a></li>
                </ul>
            </li>  <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-sharp fa-solid fa-cart-plus"></i> <span class="hide-menu"> Commandes <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('commandes.index') }}">Liste</a></li>
                    <li> <a href="{{ route('commandes.create') }}">Ajouter </a></li>
                </ul>
            </li>
          </li>  <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-truck p-r-10"></i>
            <span class="hide-menu"> Fournisseurs <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('fournisseurs.index') }}">Liste</a></li>
                    <li> <a href="{{ route('fournisseurs.create') }}">Ajouter </a></li>
                </ul>
            </li>
            <li> <a href="widgets.html" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
            <li> <a href="#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="fontawesome.html">Font awesome</a> </li>
                    <li> <a href="themifyicon.html">Themify Icons</a> </li>
                    <li> <a href="simple-line.html">Simple line Icons</a> </li>
                    <li><a href="linea-icon.html">Linea Icons</a></li>
                    <li><a href="weather.html">Weather Icons</a></li>
                </ul>
            </li>
            <li class="nav-small-cap">--- Extra Components</li>
            <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                <ul class="nav nav-second-level">
                    <li><a href="cards.html">Cards</a></li>
                    <li><a href="panels-wells.html">Panels and Wells</a></li>
                    <li><a href="panel-ui-block.html">Panels With BlockUI</a></li>
                    <li><a href="panel-draggable.html">Draggable Panel</a></li>
                    <li><a href="portlet-draggable.html">Draggable Portlet</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="bootstrap-switch.html">Bootstrap Switch</a></li>
                    <li><a href="date-paginator.html">Date Paginator</a></li>
                    <li><a href="sweatalert.html">Sweat alert</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="tabs.html">Tabs</a></li>
                    <li><a href="tab-stylish.html">Stylish Tabs</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="progressbars.html">Progress Bars</a></li>
                    <li><a href="notification.html">Notifications</a></li>
                    <li><a href="carousel.html">Carousel</a></li>
                    <li><a href="list-style.html">List & Media object</a></li>
                    <li><a href="user-cards.html">User Cards</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="timeline-horizontal.html">Horizontal Timeline</a></li>
                    <li><a href="nestable.html">Nesteble</a></li>
                    <li><a href="range-slider.html">Range Slider</a></li>
                    <li><a href="ribbons.html">Ribbons</a></li>
                    <li><a href="steps.html">Steps</a></li>
                    <li><a href="session-idle-timeout.html">Session Idle Timeout</a></li>
                    <li><a href="session-timeout.html">Session Timeout</a></li>
                    <li><a href="tooltip-stylish.html">Stylish Tooltip</a></li>
                    <li><a href="bootstrap.html">Bootstrap UI</a></li>
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">30</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="starter-page.html">Starter Page</a></li>
                    <li><a href="blank.html">Blank Page</a></li>
                    <li><a href="javascript:void(0)" class="waves-effect">Email Templates
    <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="../email-templates/basic.html">Basic</a></li>
                            <li><a href="../email-templates/alert.html">Alert</a></li>
                            <li><a href="../email-templates/billing.html">Billing</a></li>
                            <li><a href="../email-templates/password-reset.html">Reset Pwd</a></li>
                        </ul>
                    </li>
                    <li><a href="lightbox.html">Lightbox Popup</a></li>
                    <li><a href="treeview.html">Treeview</a></li>
                    <li><a href="search-result.html">Search Result</a></li>
                    <li><a href="utility-classes.html">Utility Classes</a></li>
                    <li><a href="custom-scroll.html">Custom Scrolls</a></li>
                    <li><a href="login.html">Login Page</a></li>
                    <li><a href="login2.html">Login v2</a></li>
                    <li><a href="animation.html">Animations</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="register2.html">Register v2</a></li>
                    <li><a href="register3.html">3 Step Registration</a></li>
                    <li><a href="recoverpw.html">Recover Password</a></li>
                    <li><a href="lock-screen.html">Lock Screen</a></li>
                    <li><a href="400.html">Error 400</a></li>
                    <li><a href="403.html">Error 403</a></li>
                    <li><a href="404.html">Error 404</a></li>
                    <li><a href="500.html">Error 500</a></li>
                    <li><a href="503.html">Error 503</a></li>
                </ul>
            </li>
            <li> <a href="forms.html" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="form-basic.html">Basic Forms</a></li>
                    <li><a href="form-layout.html">Form Layout</a></li>
                    <li><a href="form-advanced.html">Form Addons</a></li>
                    <li><a href="form-material-elements.html">Form Material</a></li>
                    <li><a href="form-float-input.html">Form Float Input</a></li>
                    <li><a href="form-upload.html">File Upload</a></li>
                    <li><a href="form-mask.html">Form Mask</a></li>
                    <li><a href="form-img-cropper.html">Image Cropping</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-dropzone.html">File Dropzone</a></li>
                    <li><a href="form-pickers.html">Form-pickers</a></li>
                    <li><a href="icheck-control.html">Icheck Form Controls</a></li>
                    <li><a href="form-wizard.html">Form-wizards</a></li>
                    <li><a href="form-typehead.html">Typehead</a></li>
                    <li><a href="form-xeditable.html">X-editable</a></li>
                    <li><a href="form-summernote.html">Summernote</a></li>
                    <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                    <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                </ul>
            </li>
            <li> <a href="tables.html" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">7</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="basic-table.html">Basic Tables</a></li>
                    <li><a href="table-layouts.html">Table Layouts</a></li>
                    <li><a href="data-table.html">Data Table</a></li>
                    <li class="hidden"><a href="crud-table.html">Crud Table</a></li>
                    <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                    <li><a href="responsive-tables.html">Responsive Tables</a></li>
                    <li><a href="editable-tables.html">Editable Tables</a></li>
                    <li><a href="foo-tables.html">FooTables</a></li>
                    <li><a href="jsgrid.html">JsGrid Tables</a></li>
                </ul>
            </li>
            <li class="nav-small-cap">--- Support</li>
            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                    <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
            <li class="hide-menu">
                <a href="javacript:void(0);">
                    <span>Progress Report</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                    </div>
                    <span>Leads Report</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
