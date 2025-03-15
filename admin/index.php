<!DOCTYPE html>
<html
    lang="en"
    dir="ltr"
    data-bs-theme="light"
    data-color-theme="Blue_Theme"
    data-layout="vertical"
>
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin - Hydro Therm Engineers</title>

        <?php include 'temp/head.php'; ?>

    </head>

    <body class="link-sidebar">
        <!-- Toast -->
        <div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body hstack align-items-start gap-6">
                <i class="ti ti-alert-circle fs-6"></i>
                <div>
                    <h5 class="text-white fs-3 mb-1">Welcome to MatDash</h5>
                    <h6 class="text-white fs-2 mb-0">Easy to costomize the Template!!!</h6>
                </div>
                <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <!-- Preloader -->
        <div class="preloader">
            <!-- <img src="assets/icons/favicon.png" alt="loader" class="lds-ripple img-fluid" /> -->
            <h4 class="lds-ripple img-fluid">Hydro Therm Engineers</h4>
        </div>
        <div id="main-wrapper">
            <!-- Sidebar Start -->
            <?php include "temp/sideheader.php"; ?>
            <!--  Sidebar End -->
            <div class="page-wrapper">
                <!--  Header Start -->
                <?php include "temp/header.php"; ?>
                <!--  Header End -->

                <aside class="left-sidebar with-horizontal">
                    <!-- Sidebar scroll-->
                    <div>
                        <!-- Sidebar navigation-->
                        <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
                            <ul id="sidebarnav">
                                <!-- ============================= -->
                                <!-- Home -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Home</span>
                                </li>
                                <!-- =================== -->
                                <!-- Dashboard -->
                                <!-- =================== -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                        <span>
                                            <iconify-icon icon="solar:layers-line-duotone" class="ti"></iconify-icon>
                                        </span>
                                        <span class="hide-menu">Dashboard</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="" class="sidebar-link">
                                                <i class="ti ti-aperture"></i>
                                                <span class="hide-menu">Dashboard 1</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/index2.html" class="sidebar-link">
                                                <i class="ti ti-shopping-cart"></i>
                                                <span class="hide-menu">Dashboard 2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/index3.html" class="sidebar-link">
                                                <i class="ti ti-atom"></i>
                                                <span class="hide-menu">Dashboard 3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- ============================= -->
                                <!-- Front Pages -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Front Pages</span>
                                </li>

                                <!-- =================== -->
                                <!-- Icon -->
                                <!-- =================== -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                        <span class="rounded-3">
                                            <iconify-icon icon="solar:home-angle-line-duotone" class="ti"></iconify-icon>
                                        </span>
                                        <span class="hide-menu">Front Pages</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/frontend-landingpage.html" aria-expanded="false">
                                                <span class="rounded-3">
                                                    <i class="ti ti-circle"></i>
                                                </span>
                                                <span class="hide-menu">Homepage</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link sidebar-link" href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/frontend-aboutpage.html" aria-expanded="false">
                                                <span class="rounded-3">
                                                    <i class="ti ti-circle"></i>
                                                </span>
                                                <span class="hide-menu">About Us</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link sidebar-link" href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/frontend-blogpage.html" aria-expanded="false">
                                                <span class="rounded-3">
                                                    <i class="ti ti-circle"></i>
                                                </span>
                                                <span class="hide-menu">Blog</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link sidebar-link" href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/frontend-blogdetailpage.html" aria-expanded="false">
                                                <span class="rounded-3">
                                                    <i class="ti ti-circle"></i>
                                                </span>
                                                <span class="hide-menu">Blog Details</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link sidebar-link" href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/frontend-contactpage.html" aria-expanded="false">
                                                <span class="rounded-3">
                                                    <i class="ti ti-circle"></i>
                                                </span>
                                                <span class="hide-menu">Contact Us</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link sidebar-link" href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/frontend-portfoliopage.html" aria-expanded="false">
                                                <span class="rounded-3">
                                                    <i class="ti ti-circle"></i>
                                                </span>
                                                <span class="hide-menu">Portfolio</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link sidebar-link" href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/frontend-pricingpage.html" aria-expanded="false">
                                                <span class="rounded-3">
                                                    <i class="ti ti-circle"></i>
                                                </span>
                                                <span class="hide-menu">Pricing</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- ============================= -->
                                <!-- Apps -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Apps</span>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                                        <span>
                                            <iconify-icon icon="solar:widget-line-duotone" class="ti"></iconify-icon>
                                        </span>
                                        <span class="hide-menu">Apps</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/app-calendar.html" class="sidebar-link">
                                                <i class="ti ti-calendar"></i>
                                                <span class="hide-menu">Calendar</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/apps-kanban.html" class="sidebar-link">
                                                <i class="ti ti-layout-kanban"></i>
                                                <span class="hide-menu">Kanban</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/app-chat.html" class="sidebar-link">
                                                <i class="ti ti-message-dots"></i>
                                                <span class="hide-menu">Chat</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/app-email.html" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-mail"></i>
                                                </span>
                                                <span class="hide-menu">Email</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/app-contact.html" class="sidebar-link">
                                                <i class="ti ti-phone"></i>
                                                <span class="hide-menu">Contact Table</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/app-contact2.html" class="sidebar-link">
                                                <i class="ti ti-list-details"></i>
                                                <span class="hide-menu">Contact List</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/app-notes.html" class="sidebar-link">
                                                <i class="ti ti-notes"></i>
                                                <span class="hide-menu">Notes</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/app-invoice.html" class="sidebar-link">
                                                <i class="ti ti-file-text"></i>
                                                <span class="hide-menu">Invoice</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/page-user-profile.html" class="sidebar-link">
                                                <i class="ti ti-user-circle"></i>
                                                <span class="hide-menu">User Profile</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/blog-posts.html" class="sidebar-link">
                                                <i class="ti ti-article"></i>
                                                <span class="hide-menu">Posts</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/blog-detail.html" class="sidebar-link">
                                                <i class="ti ti-details"></i>
                                                <span class="hide-menu">Detail</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/eco-shop.html" class="sidebar-link">
                                                <i class="ti ti-shopping-cart"></i>
                                                <span class="hide-menu">Shop</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/eco-shop-detail.html" class="sidebar-link">
                                                <i class="ti ti-basket"></i>
                                                <span class="hide-menu">Shop Detail</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/eco-product-list.html" class="sidebar-link">
                                                <i class="ti ti-list-check"></i>
                                                <span class="hide-menu">List</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/eco-checkout.html" class="sidebar-link">
                                                <i class="ti ti-brand-shopee"></i>
                                                <span class="hide-menu">Checkout</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/eco-add-product.html">
                                                <i class="ti ti-file-plus"></i>
                                                <span class="hide-menu">Add Product</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/eco-edit-product.html">
                                                <i class="ti ti-file-pencil"></i>
                                                <span class="hide-menu">Edit Product</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ============================= -->
                                <!-- PAGES -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">PAGES</span>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                        <span>
                                            <iconify-icon icon="solar:notes-line-duotone" class="ti"></iconify-icon>
                                        </span>
                                        <span class="hide-menu">Pages</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/page-faq.html" class="sidebar-link">
                                                <i class="ti ti-help"></i>
                                                <span class="hide-menu">FAQ</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/page-account-settings.html" class="sidebar-link">
                                                <i class="ti ti-user-circle"></i>
                                                <span class="hide-menu">Account Setting</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/page-pricing.html" class="sidebar-link">
                                                <i class="ti ti-currency-dollar"></i>
                                                <span class="hide-menu">Pricing</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/widgets-cards.html" class="sidebar-link">
                                                <i class="ti ti-cards"></i>
                                                <span class="hide-menu">Card</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/widgets-banners.html" class="sidebar-link">
                                                <i class="ti ti-ad"></i>
                                                <span class="hide-menu">Banner</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/widgets-charts.html" class="sidebar-link">
                                                <i class="ti ti-chart-bar"></i>
                                                <span class="hide-menu">Charts</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/starter.html" class="sidebar-link">
                                                <i class="ti ti-file"></i>
                                                <span class="hide-menu">Starter</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/landingpage/index.html" class="sidebar-link">
                                                <i class="ti ti-app-window"></i>
                                                <span class="hide-menu">Landing Page</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/icon-tabler.html" class="sidebar-link">
                                                <i class="ti ti-mood-smile"></i>
                                                <span class="hide-menu">Tabler Icon</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/icon-solar.html" class="sidebar-link">
                                                <i class="ti ti-mood-smile"></i>
                                                <span class="hide-menu">Solar Icon</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ============================= -->
                                <!-- UI -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">UI</span>
                                </li>
                                <!-- =================== -->
                                <!-- UI Elements -->
                                <!-- =================== -->
                                <li class="sidebar-item mega-dropdown">
                                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                        <span class="rounded-3">
                                            <iconify-icon icon="solar:archive-line-duotone" class="ti"></iconify-icon>
                                        </span>
                                        <span class="hide-menu">UI</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-accordian.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Accordian</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-badge.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Badge</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-buttons.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Buttons</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-dropdowns.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Dropdowns</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-modals.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Modals</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-tab.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Tab</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-tooltip-popover.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Tooltip &amp; Popover</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-notification.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Notification</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-progressbar.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Progressbar</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-pagination.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Pagination</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-typography.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Typography</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-bootstrap-ui.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Bootstrap UI</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-breadcrumb.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Breadcrumb</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-offcanvas.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Offcanvas</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-lists.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Lists</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-grid.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Grid</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-carousel.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Carousel</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-scrollspy.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Scrollspy</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-spinner.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Spinner</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/ui-link.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Link</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ============================= -->
                                <!-- Forms -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Forms</span>
                                </li>
                                <!-- =================== -->
                                <!-- Forms -->
                                <!-- =================== -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                                        <span class="rounded-3">
                                            <iconify-icon icon="solar:folder-line-duotone" class="ti"></iconify-icon>
                                        </span>
                                        <span class="hide-menu">Forms</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <!-- form elements -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-inputs.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Forms Input</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-input-groups.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Input Groups</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-input-grid.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Input Grid</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-checkbox-radio.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Checkbox &amp; Radios</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-bootstrap-switch.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Bootstrap Switch</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-select2.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Select2</span>
                                            </a>
                                        </li>
                                        <!-- form inputs -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-basic.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Basic Form</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-vertical.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Form Vertical</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-horizontal.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Form Horizontal</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-actions.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Form Actions</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-row-separator.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Row Separator</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-bordered.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Form Bordered</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-detail.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Form Detail</span>
                                            </a>
                                        </li>
                                        <!-- form wizard -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-wizard.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Form Wizard</span>
                                            </a>
                                        </li>
                                        <!-- Quill Editor -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-editor-quill.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Quill Editor</span>
                                            </a>
                                        </li>
                                        <!-- Tinymce Editor -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/form-editor-tinymce.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Tinymce Editor</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ============================= -->
                                <!-- Tables -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Tables</span>
                                </li>
                                <!-- =================== -->
                                <!-- Bootstrap Table -->
                                <!-- =================== -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                        <span class="rounded-3">
                                            <iconify-icon icon="solar:tuning-square-2-line-duotone" class="ti"></iconify-icon>
                                        </span>
                                        <span class="hide-menu">Tables</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/table-basic.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Basic Table</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/table-dark-basic.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Dark Table</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/table-sizing.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Sizing Table</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/table-layout-coloured.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Coloured Table</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/table-datatable-basic.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Basic Initialisation</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/table-datatable-api.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">API</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/table-datatable-advanced.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Advanced</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ============================= -->
                                <!-- Charts -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Charts</span>
                                </li>
                                <!-- =================== -->
                                <!-- Apex Chart -->
                                <!-- =================== -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                        <span class="rounded-3">
                                            <iconify-icon icon="solar:chart-square-line-duotone" class="ti"></iconify-icon>
                                        </span>
                                        <span class="hide-menu">Charts</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/chart-apex-line.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Line Chart</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/chart-apex-area.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Area Chart</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/chart-apex-bar.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Bar Chart</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/chart-apex-pie.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Pie Chart</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/chart-apex-radial.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Radial Chart</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/default-sidebar/chart-apex-radar.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Radar Chart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- multi level -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                        <span class="rounded-3">
                                            <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone" class="ti"></iconify-icon>
                                        </span>
                                        <span class="hide-menu">Multi DD</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.adminmart.com/matdash/dist/docs/index.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Documentation</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Page 1</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link has-arrow">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Page 2</span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse second-level">
                                                <li class="sidebar-item">
                                                    <a href="javascript:void(0)" class="sidebar-link">
                                                        <i class="ti ti-circle"></i>
                                                        <span class="hide-menu">Page 2.1</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-item">
                                                    <a href="javascript:void(0)" class="sidebar-link">
                                                        <i class="ti ti-circle"></i>
                                                        <span class="hide-menu">Page 2.2</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-item">
                                                    <a href="javascript:void(0)" class="sidebar-link">
                                                        <i class="ti ti-circle"></i>
                                                        <span class="hide-menu">Page 2.3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Page 3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Sidebar navigation -->
                    </div>
                    <!-- End Sidebar scroll-->
                </aside>

                <div class="body-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- -------------------------------------------- -->
                                <!-- Welcome Card -->
                                <!-- -------------------------------------------- -->
                                <div class="card text-bg-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="d-flex flex-column h-100">
                                                    <div class="hstack gap-3">
                                                        <span class="d-flex align-items-center justify-content-center round-48 bg-white rounded flex-shrink-0">
                                                            <iconify-icon icon="solar:course-up-outline" class="fs-7 text-muted"></iconify-icon>
                                                        </span>
                                                        <h5 class="text-white fs-6 mb-0 text-nowrap">
                                                            Welcome Back <br />
                                                            David
                                                        </h5>
                                                    </div>
                                                    <div class="mt-4 mt-sm-auto">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="opacity-75">Budget</span>
                                                                <h4 class="mb-0 text-white mt-1 text-nowrap fs-13 fw-bolder">
                                                                    $98,450
                                                                </h4>
                                                            </div>
                                                            <div class="col-6 border-start border-light" style="--bs-border-opacity: 0.15;">
                                                                <span class="opacity-75">Expense</span>
                                                                <h4 class="mb-0 text-white mt-1 text-nowrap fs-13 fw-bolder">
                                                                    $2,440
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 text-center text-md-end">
                                                <img src="welcome-bg.png" alt="welcome" class="img-fluid mb-n7 mt-2" width="180" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- -------------------------------------------- -->
                                    <!-- Customers -->
                                    <!-- -------------------------------------------- -->
                                    <div class="col-md-6">
                                        <div class="card bg-secondary-subtle overflow-hidden shadow-none">
                                            <div class="card-body p-4">
                                                <span class="text-dark-light">Customers</span>
                                                <div class="hstack gap-6">
                                                    <h5 class="mb-0 fs-7">36,358</h5>
                                                    <span class="fs-11 text-dark-light fw-semibold">-12%</span>
                                                </div>
                                            </div>
                                            <div id="customers"></div>
                                        </div>
                                    </div>
                                    <!-- -------------------------------------------- -->
                                    <!-- Projects -->
                                    <!-- -------------------------------------------- -->
                                    <div class="col-md-6">
                                        <div class="card bg-danger-subtle overflow-hidden shadow-none">
                                            <div class="card-body p-4">
                                                <span class="text-dark-light">Projects</span>
                                                <div class="hstack gap-6 mb-4">
                                                    <h5 class="mb-0 fs-7">78,298</h5>
                                                    <span class="fs-11 text-dark-light fw-semibold">+31.8%</span>
                                                </div>
                                                <div class="mx-n1">
                                                    <div id="projects"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <!-- -------------------------------------------- -->
                                <!-- Revenue Forecast -->
                                <!-- -------------------------------------------- -->
                                <div class="card">
                                    <div class="card-body pb-4">
                                        <div class="d-md-flex align-items-center justify-content-between mb-4">
                                            <div class="hstack align-items-center gap-3">
                                                <span class="d-flex align-items-center justify-content-center round-48 bg-primary-subtle rounded flex-shrink-0">
                                                    <iconify-icon icon="solar:layers-linear" class="fs-7 text-primary"></iconify-icon>
                                                </span>
                                                <div>
                                                    <h5 class="card-title">Revenue Forecast</h5>
                                                    <p class="card-subtitle mb-0">Overview of Profit</p>
                                                </div>
                                            </div>

                                            <div class="hstack gap-9 mt-4 mt-md-0">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="d-block flex-shrink-0 round-8 bg-primary rounded-circle"></span>
                                                    <span class="text-nowrap text-muted">2024</span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="d-block flex-shrink-0 round-8 bg-danger rounded-circle"></span>
                                                    <span class="text-nowrap text-muted">2023</span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="d-block flex-shrink-0 round-8 bg-secondary rounded-circle"></span>
                                                    <span class="text-nowrap text-muted">2022</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height: 285px;" class="me-n7">
                                            <div id="revenue-forecast"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <!-- -------------------------------------------- -->
                                <!-- Your Performance -->
                                <!-- -------------------------------------------- -->
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title fw-semibold">Your Performance</h5>
                                        <p class="card-subtitle mb-0 lh-base">Last check on 25 february</p>

                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="vstack gap-9 mt-2">
                                                    <div class="hstack align-items-center gap-3">
                                                        <div class="d-flex align-items-center justify-content-center round-48 rounded bg-primary-subtle flex-shrink-0">
                                                            <iconify-icon icon="solar:shop-2-linear" class="fs-7 text-primary"></iconify-icon>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 text-nowrap">64 new orders</h6>
                                                            <span>Processing</span>
                                                        </div>
                                                    </div>
                                                    <div class="hstack align-items-center gap-3">
                                                        <div class="d-flex align-items-center justify-content-center round-48 rounded bg-danger-subtle">
                                                            <iconify-icon icon="solar:filters-outline" class="fs-7 text-danger"></iconify-icon>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">4 orders</h6>
                                                            <span>On hold</span>
                                                        </div>
                                                    </div>
                                                    <div class="hstack align-items-center gap-3">
                                                        <div class="d-flex align-items-center justify-content-center round-48 rounded bg-secondary-subtle">
                                                            <iconify-icon icon="solar:pills-3-linear" class="fs-7 text-secondary"></iconify-icon>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">12 orders</h6>
                                                            <span>Delivered</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-center mt-sm-n7">
                                                    <div id="your-preformance"></div>
                                                    <h2 class="fs-8">275</h2>
                                                    <p class="mb-0">
                                                        Learn insigs how to manage all aspects of your startup.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- -------------------------------------------- -->
                                        <!-- Customers -->
                                        <!-- -------------------------------------------- -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <h5 class="card-title fw-semibold">Customers</h5>
                                                        <p class="card-subtitle mb-0">Last 7 days</p>
                                                    </div>
                                                    <span class="fs-11 text-success fw-semibold lh-lg">+26.5%</span>
                                                </div>
                                                <div class="py-4 my-1">
                                                    <div id="customers-area"></div>
                                                </div>
                                                <div class="d-flex flex-column align-items-center gap-2 w-100 mt-3">
                                                    <div class="d-flex align-items-center gap-2 w-100">
                                                        <span class="d-block flex-shrink-0 round-8 bg-primary rounded-circle"></span>
                                                        <h6 class="fs-3 fw-normal text-muted mb-0">April 07 - April 14</h6>
                                                        <h6 class="fs-3 fw-normal mb-0 ms-auto text-muted">6,380</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-2 w-100">
                                                        <span class="d-block flex-shrink-0 round-8 bg-light rounded-circle"></span>
                                                        <h6 class="fs-3 fw-normal text-muted mb-0">Last Week</h6>
                                                        <h6 class="fs-3 fw-normal mb-0 ms-auto text-muted">4,298</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- -------------------------------------------- -->
                                        <!-- Sales Overview -->
                                        <!-- -------------------------------------------- -->
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title fw-semibold">Sales Overview</h5>
                                                <p class="card-subtitle mb-1">Last 7 days</p>

                                                <div class="position-relative labels-chart">
                                                    <span class="fs-11 label-1">0%</span>
                                                    <span class="fs-11 label-2">25%</span>
                                                    <span class="fs-11 label-3">50%</span>
                                                    <span class="fs-11 label-4">75%</span>
                                                    <div id="sales-overview"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <!-- -------------------------------------------- -->
                                <!-- Revenue by Product -->
                                <!-- -------------------------------------------- -->
                                <div class="card mb-lg-0">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-3 mb-9 justify-content-between align-items-center">
                                            <h5 class="card-title fw-semibold mb-0">Revenue by Product</h5>
                                            <select class="form-select w-auto fw-semibold">
                                                <option value="1" selected="">Sep 2024</option>
                                                <option value="2">Oct 2024</option>
                                                <option value="3">Nov 2024</option>
                                            </select>
                                        </div>

                                        <div class="table-responsive">
                                            <ul class="nav nav-tabs theme-tab gap-3 flex-nowrap" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#app" role="tab">
                                                        <div class="hstack gap-2">
                                                            <iconify-icon icon="solar:widget-linear" class="fs-4"></iconify-icon>
                                                            <span>App</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#mobile" role="tab">
                                                        <div class="hstack gap-2">
                                                            <iconify-icon icon="solar:smartphone-line-duotone" class="fs-4"></iconify-icon>
                                                            <span>Mobile</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#saas" role="tab">
                                                        <div class="hstack gap-2">
                                                            <iconify-icon icon="solar:calculator-linear" class="fs-4"></iconify-icon>
                                                            <span>SaaS</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#other" role="tab">
                                                        <div class="hstack gap-2">
                                                            <iconify-icon icon="solar:folder-open-outline" class="fs-4"></iconify-icon>
                                                            <span>Others</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content mb-n3">
                                            <div class="tab-pane active" id="app" role="tabpanel">
                                                <div class="table-responsive" data-simplebar="">
                                                    <table class="table text-nowrap align-middle table-custom mb-0 last-items-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="fw-normal ps-0">Assigned</th>
                                                                <th scope="col" class="fw-normal">Progress</th>
                                                                <th scope="col" class="fw-normal">Priority</th>
                                                                <th scope="col" class="fw-normal">Budget</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-1.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Minecraf App</h6>
                                                                            <span>Jason Roy</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-success-subtle text-success">Low</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-2.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Web App Project</h6>
                                                                            <span>Mathew Flintoff</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-warning-subtle text-warning">Medium</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-3.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Modernize Dashboard</h6>
                                                                            <span>Anil Kumar</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-secondary-subtle text-secondary">Very High</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-4.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Dashboard Co</h6>
                                                                            <span>George Cruize</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-danger-subtle text-danger">High</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="mobile" role="tabpanel">
                                                <div class="table-responsive" data-simplebar="">
                                                    <table class="table text-nowrap align-middle table-custom mb-0 last-items-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="fw-normal ps-0">Assigned</th>
                                                                <th scope="col" class="fw-normal">Progress</th>
                                                                <th scope="col" class="fw-normal">Priority</th>
                                                                <th scope="col" class="fw-normal">Budget</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-2.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Web App Project</h6>
                                                                            <span>Mathew Flintoff</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-warning-subtle text-warning">Medium</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-3.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Modernize Dashboard</h6>
                                                                            <span>Anil Kumar</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-secondary-subtle text-secondary">Very High</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-1.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Minecraf App</h6>
                                                                            <span>Jason Roy</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-success-subtle text-success">Low</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-4.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Dashboard Co</h6>
                                                                            <span>George Cruize</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-danger-subtle text-danger">High</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="saas" role="tabpanel">
                                                <div class="table-responsive" data-simplebar="">
                                                    <table class="table text-nowrap align-middle table-custom mb-0 last-items-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="fw-normal ps-0">Assigned</th>
                                                                <th scope="col" class="fw-normal">Progress</th>
                                                                <th scope="col" class="fw-normal">Priority</th>
                                                                <th scope="col" class="fw-normal">Budget</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-2.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Web App Project</h6>
                                                                            <span>Mathew Flintoff</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-warning-subtle text-warning">Medium</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-1.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Minecraf App</h6>
                                                                            <span>Jason Roy</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-success-subtle text-success">Low</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-3.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Modernize Dashboard</h6>
                                                                            <span>Anil Kumar</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-secondary-subtle text-secondary">Very High</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-4.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Dashboard Co</h6>
                                                                            <span>George Cruize</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-danger-subtle text-danger">High</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="other" role="tabpanel">
                                                <div class="table-responsive" data-simplebar="">
                                                    <table class="table text-nowrap align-middle table-custom mb-0 last-items-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="fw-normal ps-0">Assigned</th>
                                                                <th scope="col" class="fw-normal">Progress</th>
                                                                <th scope="col" class="fw-normal">Priority</th>
                                                                <th scope="col" class="fw-normal">Budget</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-1.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Minecraf App</h6>
                                                                            <span>Jason Roy</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-success-subtle text-success">Low</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-3.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Modernize Dashboard</h6>
                                                                            <span>Anil Kumar</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-secondary-subtle text-secondary">Very High</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-2.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Web App Project</h6>
                                                                            <span>Mathew Flintoff</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-warning-subtle text-warning">Medium</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="ps-0">
                                                                    <div class="d-flex align-items-center gap-6">
                                                                        <img src="dash-prd-4.jpg" alt="prd1" width="48" class="rounded" />
                                                                        <div>
                                                                            <h6 class="mb-0">Dashboard Co</h6>
                                                                            <span>George Cruize</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span>73.2%</span>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-danger-subtle text-danger">High</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-light">$3.5k</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <!-- -------------------------------------------- -->
                                <!-- Total settlements -->
                                <!-- -------------------------------------------- -->
                                <div class="card bg-primary-subtle mb-0">
                                    <div class="card-body">
                                        <div class="hstack align-items-center gap-3 mb-4">
                                            <span class="d-flex align-items-center justify-content-center round-48 bg-white rounded flex-shrink-0">
                                                <iconify-icon icon="solar:box-linear" class="fs-7 text-primary"></iconify-icon>
                                            </span>
                                            <div>
                                                <p class="mb-1 text-dark-light">Total settlements</p>
                                                <h4 class="mb-0 fw-bolder">$122,580</h4>
                                            </div>
                                        </div>
                                        <div style="height: 278px;">
                                            <div id="settlements"></div>
                                        </div>
                                        <div class="row mt-4 mb-2">
                                            <div class="col-md-6 text-center">
                                                <p class="mb-1 text-dark-light lh-lg">Total balance</p>
                                                <h4 class="mb-0 text-nowrap">$122,580</h4>
                                            </div>
                                            <div class="col-md-6 text-center mt-3 mt-md-0">
                                                <p class="mb-1 text-dark-light lh-lg">Withdrawals</p>
                                                <h4 class="mb-0">$31,640</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-danger p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="icon ti ti-settings fs-7"></i>
                </button>

                <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                        <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
                            Settings
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body" data-simplebar="" style="height: calc(100vh - 80px);">
                        <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout"> <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light </label>

                            <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout"> <i class="icon ti ti-moon fs-7 me-2"></i>Dark </label>
                        </div>

                        <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="ltr-layout"> <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR </label>

                            <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="rtl-layout"> <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL </label>
                        </div>

                        <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

                        <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
                            <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
                            <label
                                class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                                onclick="handleColorTheme('Blue_Theme')"
                                for="Blue_Theme"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                data-bs-title="BLUE_THEME"
                            >
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>

                            <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
                            <label
                                class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                                onclick="handleColorTheme('Aqua_Theme')"
                                for="Aqua_Theme"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                data-bs-title="AQUA_THEME"
                            >
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>

                            <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
                            <label
                                class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                                onclick="handleColorTheme('Purple_Theme')"
                                for="Purple_Theme"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                data-bs-title="PURPLE_THEME"
                            >
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>

                            <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
                            <label
                                class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                                onclick="handleColorTheme('Green_Theme')"
                                for="green-theme-layout"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                data-bs-title="GREEN_THEME"
                            >
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>

                            <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
                            <label
                                class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                                onclick="handleColorTheme('Cyan_Theme')"
                                for="cyan-theme-layout"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                data-bs-title="CYAN_THEME"
                            >
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>

                            <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
                            <label
                                class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
                                onclick="handleColorTheme('Orange_Theme')"
                                for="orange-theme-layout"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                data-bs-title="ORANGE_THEME"
                            >
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>
                        </div>

                        <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <div>
                                <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
                                <label class="btn p-9 btn-outline-primary rounded-2" for="vertical-layout"> <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical </label>
                            </div>
                            <div>
                                <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
                                <label class="btn p-9 btn-outline-primary rounded-2" for="horizontal-layout"> <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal </label>
                            </div>
                        </div>

                        <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="boxed-layout"> <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed </label>

                            <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="full-layout"> <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full </label>
                        </div>

                        <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <a href="javascript:void(0)" class="fullsidebar">
                                <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
                                <label class="btn p-9 btn-outline-primary rounded-2" for="full-sidebar"> <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full </label>
                            </a>
                            <div>
                                <input type="radio" class="btn-check" name="sidebar-type" id="mini-sidebar" autocomplete="off" />
                                <label class="btn p-9 btn-outline-primary rounded-2" for="mini-sidebar"> <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse </label>
                            </div>
                        </div>

                        <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="card-with-border"> <i class="icon ti ti-border-outer fs-7 me-2"></i>Border </label>

                            <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary rounded-2" for="card-without-border"> <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow </label>
                        </div>
                    </div>
                </div>

                <script>
                    function handleColorTheme(e) {
                        document.documentElement.setAttribute("data-color-theme", e);
                    }
                </script>
            </div>

            <!--  Search Bar -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-bottom">
                            <input type="search" class="form-control" placeholder="Search here" id="search" value="" />
                            <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                                <i class="ti ti-x fs-5 ms-3"></i>
                            </a>
                        </div>
                        <div class="modal-body message-body" data-simplebar="">
                            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                            <ul class="list mb-0 py-2">
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">Analytics</span>
                                        <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard1</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">eCommerce</span>
                                        <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard2</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">CRM</span>
                                        <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard3</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">Contacts</span>
                                        <span class="fs-2 d-block text-body-secondary">/apps/contacts</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">Posts</span>
                                        <span class="fs-2 d-block text-body-secondary">/apps/blog/posts</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">Detail</span>
                                        <span class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">Shop</span>
                                        <span class="fs-2 d-block text-body-secondary">/apps/ecommerce/shop</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">Modern</span>
                                        <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard1</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">Dashboard</span>
                                        <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard2</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">Contacts</span>
                                        <span class="fs-2 d-block text-body-secondary">/apps/contacts</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">Posts</span>
                                        <span class="fs-2 d-block text-body-secondary">/apps/blog/posts</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">Detail</span>
                                        <span class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                    </a>
                                </li>
                                <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                                    <a href="javascript:void(0)">
                                        <span class="text-dark fw-semibold d-block">Shop</span>
                                        <span class="fs-2 d-block text-body-secondary">/apps/ecommerce/shop</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dark-transparent sidebartoggler"></div>
        <!-- Import Js Files -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>
        <script src="assets/js/app.init.js"></script>
        <script src="assets/js/theme.js"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/js/sidebarmenu-default.js"></script>

        <!-- solar icons -->
        <script src="assets/js/iconify-icon.min.js"></script>

        <!-- highlight.js (code view) -->
        <script src="assets/js/highlight.min.js"></script>
        <script>
            hljs.initHighlightingOnLoad();

            document.querySelectorAll("pre.code-view > code").forEach((codeBlock) => {
                codeBlock.textContent = codeBlock.innerHTML;
            });
        </script>
        <script src="assets/js/apexcharts.min.js"></script>
        <script src="assets/js/dashboard1.js"></script>
        <script src="assets/js/index.global.min.js"></script>
    </body>
</html>
