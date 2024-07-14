<!DOCTYPE html>
<!--
Template Name: Enigma - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('/dist/images/logo.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>@yield('titulo')</title>

        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('/dist/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5 md:py-0">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="{{asset('/dist/images/logo.svg')}}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-white/[0.08] py-5 hidden">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="menu__title"> Mantenedor <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('alumno.index')}}" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Alumnos 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 3 </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 4 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="box"></i> </div>
                        <div class="menu__title"> Menu Layout <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-dashboard-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-light-dashboard-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Top Menu </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-inbox.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                        <div class="menu__title"> Inbox </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-manager.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="menu__title"> File Manager </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-point-of-sale.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                        <div class="menu__title"> Point of Sale </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-chat.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
                        <div class="menu__title"> Chat </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-post.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                        <div class="menu__title"> Post </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-calendar.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                        <div class="menu__title"> Calendar </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="edit"></i> </div>
                        <div class="menu__title"> Crud <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-crud-data-list.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Data List </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-crud-form.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Form </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="users"></i> </div>
                        <div class="menu__title"> Users <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-users-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Layout 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Layout 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Layout 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="trello"></i> </div>
                        <div class="menu__title"> Profile <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-profile-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="layout"></i> </div>
                        <div class="menu__title"> Pages <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Wizards <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Blog <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-blog-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Pricing <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Invoice <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> FAQ <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-faq-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login-light-login.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Login </div>
                            </a>
                        </li>
                        <li>
                            <a href="login-light-register.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Register </div>
                            </a>
                        </li>
                        <li>
                            <a href="main-light-error-page.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Error Page </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-update-profile.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Update profile </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-change-password.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Change Password </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                        <div class="menu__title"> Components <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Table <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-regular-table.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-tabulator.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Tabulator</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overlay <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-modal.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Modal</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-slide-over.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Slide Over</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-notification.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Notification</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-Tab.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Tab </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-accordion.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Accordion </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-button.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Button </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-alert.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Alert </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-progress-bar.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Progress Bar </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tooltip.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Tooltip </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dropdown.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Dropdown </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-typography.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Typography </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-icon.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Icon </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-loading-icon.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Loading Icon </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="sidebar"></i> </div>
                        <div class="menu__title"> Forms <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-form.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Regular Form </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-datepicker.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Datepicker </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tom-select.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Tom Select </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-file-upload.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> File Upload </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Wysiwyg Editor <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-classic.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Classic</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-inline.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Inline</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-balloon.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Balloon</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Balloon Block</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-document.html" class="menu">
                                        <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="menu__title">Document</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-validation.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Validation </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="menu__title"> Widgets <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                    </a>
                    <ul class="menu__sub-open">
                        <li>
                            <a href="side-menu-light-chart.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Chart </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slider.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Slider </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-image-zoom.html" class="menu menu--active">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Image Zoom </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed top-bar-boxed--top-menu h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] -mt-7 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="logo -intro-x hidden md:flex xl:w-[180px] block">
                    <img alt="Midone - HTML Admin Template" class="logo__image w-6" src="{{asset('/dist/images/logo.svg')}}">
                    <span class="logo__text text-white text-lg ml-3"> PISCINA </span> 
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><a href="#">SISTEMA DE CONTROL PISCINA POSEIDÓN</a></li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                        <i data-lucide="search" class="search__icon dark:text-slate-500"></i> 
                    </div>
                    <a class="notification notification--light sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
                    <div class="search-result">
                        <div class="search-result__content">
                            <div class="search-result__content__title">Pages</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center">
                                    <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                                    <div class="ml-3">Mail Settings</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                                    <div class="ml-3">Users & Permissions</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                                    <div class="ml-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Users</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('dist/images/profile-1.jpg')}}">
                                    </div>
                                    <div class="ml-3">Robert De Niro</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">robertdeniro@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('/dist/images/profile-1.jpg')}}">
                                    </div>
                                    <div class="ml-3">John Travolta</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johntravolta@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('/dist/images/profile-13.jpg')}}">
                                    </div>
                                    <div class="ml-3">John Travolta</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johntravolta@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('/dist/images/profile-13.jpg')}}">
                                    </div>
                                    <div class="ml-3">Sylvester Stallone</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">sylvesterstallone@left4code.com</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Products</div>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('/dist/images/preview-15.jpg')}}">
                                </div>
                                <div class="ml-3">Apple MacBook Pro 13</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('/dist/images/preview-15.jpg')}}">
                                </div>
                                <div class="ml-3">Nike Air Max 270</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('/dist/images/preview-10.jpg')}}">
                                </div>
                                <div class="ml-3">Oppo Find X2 Pro</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('/dist/images/preview-14.jpg')}}">
                                </div>
                                <div class="ml-3">Oppo Find X2 Pro</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-content">
                            <div class="notification-content__title">Notifications</div>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('/dist/images/profile-1.jpg')}}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('/dist/images/profile-1.jpg')}}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('/dist/images/profile-13.jpg')}}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="/dist/images/profile-13.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Sylvester Stallone</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('/dist/images/profile-2.jpg')}}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Midone - HTML Admin Template" src="{{asset('/dist/images/profile-4.jpg')}}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                            <li class="p-2">
                                <div class="font-medium">POSEIDON</div>
                                <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Software Engineer</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="{{route('logout')}}"   class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <!-- BEGIN: Top Menu -->
        <nav class="top-nav">
            <ul>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="top-menu__title"> Mantenedor <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('alumno.index')}}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="users"></i> </div>
                                <div class="top-menu__title"> Alumnos </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('delegacion.index')}}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="credit-card"></i> </div>
                                <div class="top-menu__title"> Delegación </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('cargo.index')}}"  class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="trello"></i> </div>
                                <div class="top-menu__title"> Cargo </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('personal.index')}}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="user"></i> </div>
                                <div class="top-menu__title"> Personal </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="calendar"></i> </div>
                        <div class="top-menu__title">Horarios <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('dia.index')}}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="building"></i> </div>
                                <div class="top-menu__title"> Dìas </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('horario.index')}}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="file-digit"></i> </div>
                                <div class="top-menu__title">Turnos </div>
                            </a>
                        </li>
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="file-plus"></i> </div>
                        <div class="top-menu__title">Programación <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('piscina.index')}}"  class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="droplets"></i> </div>
                                <div class="top-menu__title"> Piscina </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('nivel.index')}}"  class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="align-justify"></i> </div>
                                <div class="top-menu__title">Nivel </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('programaciones.index')}}"  class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="check-square"></i> </div>
                                <div class="top-menu__title">Programación de Clase </div>
                            </a>
                        </li>
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="banknote"></i> </div>
                        <div class="top-menu__title">Tarifas <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('monto.index')}}"  class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="dollar-sign"></i> </div>
                                <div class="top-menu__title"> Montos </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('descuento.index')}}"  class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="wallet"></i> </div>
                                <div class="top-menu__title">Descuentos </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('pago.index')}}"  class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="piggy-bank"></i> </div>
                                <div class="top-menu__title">Medios de Pago</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="user-plus"></i> </div>
                        <div class="top-menu__title">Matrículas <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('matricula.index')}}"  class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="clipboard-list"></i> </div>
                                <div class="top-menu__title">  Registrar Matrículas </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('anular.index')}}"  class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="archive"></i> </div>
                                <div class="top-menu__title">Anular Matrícula </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('matriculadelg.index')}}"  class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="clipboard-copy"></i> </div>
                                <div class="top-menu__title">  Matrículas Delegación </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="clock"></i> </div>
                        <div class="top-menu__title">Periodo <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('periodo.index')}}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="copyleft"></i> </div>
                                <div class="top-menu__title">  Registro y Activación  </div>
                            </a>
                        </li>
                       
                    </ul>
                    
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="file-check"></i> </div>
                        <div class="top-menu__title">Reporte Matriculas <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('descargarPDF')}}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="book"></i> </div>
                                <div class="top-menu__title">  General </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('descargarPDFDI')}}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="minus-square"></i> </div>
                                <div class="top-menu__title"> Diario </div>
                            </a>
                        </li>
                  
                        <li>
                            <a href="{{route('descargarPDFM')}}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="terminal-square"></i> </div>
                                <div class="top-menu__title">Por Mes </div>
                            </a>
                        </li>
                       
                    
                        <li>
                            <a href="{{route('descargarPDFP')}}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="airplay"></i> </div>
                                <div class="top-menu__title"> Por Medio de Pago </div>
                            </a>
                        </li>
                      
                       
                       
                    </ul>
                    
                </li>
                <!-- 
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="banknote"></i> </div>
                        <div class="top-menu__title"> Matrículas <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Wizards <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-wizard-layout-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wizard-layout-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wizard-layout-3.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Blog <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-blog-layout-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-blog-layout-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-blog-layout-3.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Pricing <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-pricing-layout-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-pricing-layout-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Invoice <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-invoice-layout-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-invoice-layout-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> FAQ <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-faq-layout-1.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-faq-layout-2.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-faq-layout-3.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login-light-login.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Login </div>
                            </a>
                        </li>
                        <li>
                            <a href="login-light-register.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Register </div>
                            </a>
                        </li>
                        <li>
                            <a href="main-light-error-page.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Error Page </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-update-profile.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Update profile </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-change-password.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Change Password </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="inbox"></i> </div>
                        <div class="top-menu__title"> Components <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Table <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-regular-table.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-tabulator.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Tabulator</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Overlay <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-modal.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Modal</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-slide-over.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Slide Over</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-notification.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Notification</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="top-menu-light-Tab.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Tab </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-accordion.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Accordion </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-button.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Button </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-alert.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Alert </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-progress-bar.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Progress Bar </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-tooltip.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Tooltip </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dropdown.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Dropdown </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-typography.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Typography </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-icon.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Icon </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-loading-icon.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Loading Icon </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="sidebar"></i> </div>
                        <div class="top-menu__title"> Forms <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="top-menu-light-regular-form.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Regular Form </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-datepicker.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Datepicker </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-tom-select.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Tom Select </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-file-upload.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> File Upload </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Wysiwyg Editor <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="top-menu-light-wysiwyg-editor-classic.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Classic</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wysiwyg-editor-inline.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Inline</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wysiwyg-editor-balloon.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Balloon</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wysiwyg-editor-balloon-block.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Balloon Block</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-wysiwyg-editor-document.html" class="top-menu">
                                        <div class="top-menu__icon"> <i data-lucide="zap"></i> </div>
                                        <div class="top-menu__title">Document</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="top-menu-light-validation.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Validation </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;.html" class="top-menu top-menu--active">
                        <div class="top-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="top-menu__title"> Widgets <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="top-menu__sub-open">
                        <li>
                            <a href="top-menu-light-chart.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Chart </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-slider.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Slider </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-image-zoom.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="top-menu__title"> Image Zoom </div>
                            </a>
                        </li>
                    </ul>
                </li> 
                -->
            </ul>
        </nav>
        <!-- END: Top Menu -->
        <!-- BEGIN: Content -->
        <div class="content content--top-nav">
              @yield('contenido')
        </div>
        <!-- END: Content -->
        <!-- BEGIN: Dark Mode Switcher-->
       
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{asset('/dist/js/app.js')}}"></script>
        @yield('script')
        <!-- END: JS Assets-->
    </body>
</html>