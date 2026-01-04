
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <?= $this->Html->link(
                                'Inbox',
                                ['controller' => 'Pages', 'action' => 'display', 'home'],
                                ['key' => 't-default']
                            ) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                'Saas',
                                ['controller' => 'Pages', 'action' => 'display', 'dashboard_saas'],
                                ['key' => 't-saas']
                            ) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                'Crypto',
                                ['controller' => 'Pages', 'action' => 'display', 'dashboard-crypto'],
                                ['key' => 't-crypto']
                            ) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                'Blog',
                                ['controller' => 'Pages', 'action' => 'display', 'dashboard-blog'],
                                ['key' => 't-blog']
                            ) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                'Jobs',
                                ['controller' => 'Pages', 'action' => 'display', 'dashboard-job'],
                                ['key' => 't-job']
                            ) ?>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span>
                            <i class="bx bx-layout"></i>
                        <span key="t-layouts">Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
<!--                                    <a href="layouts-light-sidebar" key="t-light-sidebar">Light Sidebar</a>-->
                                    <?= $this->Html->link(
                                        'Light Sidebar',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-light-sidebar'],
                                        ['key' => 't-light-sidebar']
                                    ) ?>
                                </li>

                                <li>
<!--                                    <a href="layouts-compact-sidebar" key="t-compact-sidebar">Compact Sidebar</a>-->
                                    <?= $this->Html->link(
                                        'Compact Sidebar',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-compact-sidebar'],
                                        ['key' => 't-compact-sidebar']
                                    ) ?>
                                </li>
                                <li>
<!--                                    <a href="layouts-icon-sidebar" key="t-icon-sidebar">Icon Sidebar</a>-->
                                    <?= $this->Html->link(
                                        'Icon Sidebar',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-icon-sidebar'],
                                        ['key' => 't-icon-sidebar']
                                    ) ?>
                                </li>
                                <li>
<!--                                    <a href="layouts-boxed" key="t-boxed-width">Boxed Width</a>-->
                                    <?= $this->Html->link(
                                        'Boxed Width',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-boxed'],
                                        ['key' => 't-boxed-width']
                                    ) ?>
                                </li>
                                <li>
<!--                                    <a href="layouts-preloader" key="t-preloader">Preloader</a>-->
                                    <?= $this->Html->link(
                                        'Preloader',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-preloader'],
                                        ['key' => 't-preloader']
                                    ) ?>
                                </li>
                                <li>
                                    <a href="layouts-colored-sidebar" key="t-colored-sidebar">Colored Sidebar</a>
                                    <?= $this->Html->link(
                                        'Jobs',
                                        ['controller' => 'Pages', 'action' => 'display', 'dashboard-job'],
                                        ['key' => 't-job']
                                    ) ?>
                                </li>
                                <li>
<!--                                    <a href="layouts-scrollable" key="t-scrollable">Scrollable</a>-->
                                    <?= $this->Html->link(
                                        'Scrollable',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-scrollable'],
                                        ['key' => 't-scrollable']
                                    ) ?>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
<!--                                    <a href="layouts-horizontal" key="t-horizontal">Horizontal</a>-->
                                    <?= $this->Html->link(
                                        'Horizontal',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-horizontal'],
                                        ['key' => 't-horizontal']
                                    ) ?>
                                </li>
                                <li>
<!--                                    <a href="layouts-hori-topbar-light" key="t-topbar-light">Topbar light</a>-->
                                    <?= $this->Html->link(
                                        'Topbar light',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-hori-topbar-light'],
                                        ['key' => 't-topbar-light']
                                    ) ?>
                                </li>
                                <li>
<!--                                    <a href="layouts-hori-boxed-width" key="t-boxed-width">Boxed width</a>-->
                                    <?= $this->Html->link(
                                        'Boxed width',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-hori-boxed-width'],
                                        ['key' => 't-boxed-width']
                                    ) ?>
                                </li>
                                <li>
<!--                                    <a href="layouts-hori-preloader" key="t-preloader">Preloader</a>-->
                                    <?= $this->Html->link(
                                        'Preloader',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-hori-preloader'],
                                        ['key' => 't-preloader']
                                    ) ?>
                                </li>
                                <li>
<!--                                    <a href="layouts-hori-colored-header" key="t-colored-topbar">Colored Header</a>-->
                                    <?= $this->Html->link(
                                        'Colored Header',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-hori-colored-header'],
                                        ['key' => 't-colored-topbar']
                                    ) ?>
                                </li>
                                <li>
<!--                                    <a href="layouts-hori-scrollable" key="t-scrollable">Scrollable</a>-->
                                    <?= $this->Html->link(
                                        'Scrollable',
                                        ['controller' => 'Pages', 'action' => 'display', 'layouts-hori-scrollable'],
                                        ['key' => 't-scrollable']
                                    ) ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title" key="t-apps">Apps</li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards">Calendars</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
<!--                            <a href="calendar" key="t-tui-calendar">TUI Calendar</a>-->
                            <?= $this->Html->link(
                                'TUI Calendar',
                                ['controller' => 'Pages', 'action' => 'display', 'calendar'],
                                ['key' => 't-t-tui-calendar']
                            ) ?>
                        </li>
                        <li>
<!--                            <a href="calendar-full" key="t-full-calendar">Full Calendar</a>-->
                            <?= $this->Html->link(
                                'Full Calendar',
                                ['controller' => 'Pages', 'action' => 'display', 'calendar-full'],
                                ['key' => 't-full-calendar']
                            ) ?>
                        </li>
                    </ul>
                </li>

                <li>
<!--                    <a href="chat" class="waves-effect">-->
<!--                        <i class="bx bx-chat"></i>-->
<!--                        <span key="t-chat">Chat</span>-->
<!--                    </a>-->
                    <?= $this->Html->link(
                        '<i class="bx bx-chat"></i><span key="t-chat">Chat</span>',
                        ['controller' => 'Pages', 'action' => 'display', 'chat'],
                        ['class' => 'waves-effect', 'escape' => false]
                    ) ?>

                </li>

                <li>
<!--                    <a href="apps-filemanager" class="waves-effect">-->
<!--                        <i class="bx bx-file"></i>-->
<!--                        <span key="t-file-manager">File Manager</span>-->
<!--                    </a>-->
                    <?= $this->Html->link(
                        '<i class="bx bx-file"></i><span key="t-file-manager">File Manager</span>',
                        ['controller' => 'Pages', 'action' => 'display', 'apps-filemanager'],
                        ['class' => 'waves-effect', 'escape' => false]
                    ) ?>

                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Ecommerce</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
<!--                        <li><a href="ecommerce-products" key="t-products">Products</a></li>-->
<!--                        <li><a href="ecommerce-product-detail" key="t-product-detail">Product Detail</a></li>-->
<!--                        <li><a href="ecommerce-orders" key="t-orders">Orders</a></li>-->
<!--                        <li><a href="ecommerce-customers" key="t-customers">Customers</a></li>-->
<!--                        <li><a href="ecommerce-cart" key="t-cart">Cart</a></li>-->
<!--                        <li><a href="ecommerce-checkout" key="t-checkout">Checkout</a></li>-->
<!--                        <li><a href="ecommerce-shops" key="t-shops">Shops</a></li>-->
<!--                        <li><a href="ecommerce-add-product" key="t-add-product">Add Product</a></li>-->
                        <li><?= $this->Html->link('Products', ['controller' => 'Pages', 'action' => 'display', 'ecommerce-products'], ['key' => 't-products']) ?></li>
                        <li><?= $this->Html->link('Product Detail', ['controller' => 'Pages', 'action' => 'display', 'ecommerce-product-detail'], ['key' => 't-product-detail']) ?></li>
                        <li><?= $this->Html->link('Orders', ['controller' => 'Pages', 'action' => 'display', 'ecommerce-orders'], ['key' => 't-orders']) ?></li>
                        <li><?= $this->Html->link('Customers', ['controller' => 'Pages', 'action' => 'display', 'ecommerce-customers'], ['key' => 't-customers']) ?></li>
                        <li><?= $this->Html->link('Cart', ['controller' => 'Pages', 'action' => 'display', 'ecommerce-cart'], ['key' => 't-cart']) ?></li>
                        <li><?= $this->Html->link('Checkout', ['controller' => 'Pages', 'action' => 'display', 'ecommerce-checkout'], ['key' => 't-checkout']) ?></li>
                        <li><?= $this->Html->link('Shops', ['controller' => 'Pages', 'action' => 'display', 'ecommerce-shops'], ['key' => 't-shops']) ?></li>
                        <li><?= $this->Html->link('Add Product', ['controller' => 'Pages', 'action' => 'display', 'ecommerce-add-product'], ['key' => 't-add-product']) ?></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span key="t-crypto">Crypto</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
<!--                        <li><a href="crypto-wallet" key="t-wallet">Wallet</a></li>-->
<!--                        <li><a href="crypto-buy-sell" key="t-buy">Buy/Sell</a></li>-->
<!--                        <li><a href="crypto-exchange" key="t-exchange">Exchange</a></li>-->
<!--                        <li><a href="crypto-lending" key="t-lending">Lending</a></li>-->
<!--                        <li><a href="crypto-orders" key="t-orders">Orders</a></li>-->
<!--                        <li><a href="crypto-kyc-application" key="t-kyc">KYC Application</a></li>-->
<!--                        <li><a href="crypto-ico-landing" key="t-ico">ICO Landing</a></li>-->
                        <li><?= $this->Html->link('Wallet', ['controller' => 'Pages', 'action' => 'display', 'crypto-wallet'], ['key' => 't-wallet']) ?></li>
                        <li><?= $this->Html->link('Buy/Sell', ['controller' => 'Pages', 'action' => 'display', 'crypto-buy-sell'], ['key' => 't-buy']) ?></li>
                        <li><?= $this->Html->link('Exchange', ['controller' => 'Pages', 'action' => 'display', 'crypto-exchange'], ['key' => 't-exchange']) ?></li>
                        <li><?= $this->Html->link('Lending', ['controller' => 'Pages', 'action' => 'display', 'crypto-lending'], ['key' => 't-lending']) ?></li>
                        <li><?= $this->Html->link('Orders', ['controller' => 'Pages', 'action' => 'display', 'crypto-orders'], ['key' => 't-orders']) ?></li>
                        <li><?= $this->Html->link('KYC Application', ['controller' => 'Pages', 'action' => 'display', 'crypto-kyc-application'], ['key' => 't-kyc']) ?></li>
                        <li><?= $this->Html->link('ICO Landing', ['controller' => 'Pages', 'action' => 'display', 'crypto-ico-landing'], ['key' => 't-ico']) ?></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email">Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <!-- <a href="email-inbox" key="t-inbox">Inbox</a> -->
                            <?= $this->Html->link(
                                'Inbox',
                                ['controller' => 'Pages', 'action' => 'display', 'email-inbox'],
                                ['key' => 't-inbox']
                            ) ?>

                        </li>
                        <li><a href="email-read" key="t-read-email">Read Email</a></li>
                        <li>
                            <a href="javascript: void(0);">
                                <span key="t-email-templates">Templates</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="email-template-basic" key="t-basic-action">Basic Action</a></li>
                                <li><a href="email-template-alert" key="t-alert-email">Alert Email</a></li>
                                <li><a href="email-template-billing" key="t-bill-email">Billing Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list" key="t-invoice-list">Invoice List</a></li>
                        <li><a href="invoices-detail" key="t-invoice-detail">Invoice Detail</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-projects">Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="projects-grid" key="t-p-grid">Projects Grid</a></li>
                        <li><a href="projects-list" key="t-p-list">Projects List</a></li>
                        <li><a href="projects-overview" key="t-p-overview">Project Overview</a></li>
                        <li><a href="projects-create" key="t-create-new">Create New</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-tasks">Tasks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list" key="t-task-list">Task List</a></li>
                        <li><a href="tasks-kanban" key="t-kanban-board">Kanban Board</a></li>
                        <li><a href="tasks-create" key="t-create-task">Create Task</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Contacts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid" key="t-user-grid">Users Grid</a></li>
                        <li><a href="contacts-list" key="t-user-list">Users List</a></li>
                        <li><a href="contacts-profile" key="t-profile">Profile</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-detail"></i>
                        <span key="t-blog">Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="blog-list" key="t-blog-list">Blog List</a></li>
                        <li><a href="blog-grid" key="t-blog-grid">Blog Grid</a></li>
                        <li><a href="blog-details" key="t-blog-details">Blog Details</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect has-arrow">
                        <i class="bx bx-briefcase-alt"></i>
                        <span key="t-jobs">Jobs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="job-list" key="t-job-list">Job List</a></li>
                        <li><a href="job-grid" key="t-job-grid">Job Grid</a></li>
                        <li><a href="job-apply" key="t-apply-job">Apply Job</a></li>
                        <li><a href="job-details" key="t-job-details">Job Details</a></li>
                        <li><a href="job-categories" key="t-Jobs-categories">Jobs Categories</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-candidate">Candidate</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="candidate-list" key="t-list">List</a></li>
                                <li><a href="candidate-overview" key="t-overview">Overview</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title" key="t-pages">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" key="t-login">Login</a></li>
                        <li><a href="auth-login-2" key="t-login-2">Login 2</a></li>
                        <li><a href="auth-register" key="t-register">Register</a></li>
                        <li><a href="auth-register-2" key="t-register-2">Register 2</a></li>
                        <li><a href="auth-recoverpw" key="t-recover-password">Recover Password</a></li>
                        <li><a href="auth-recoverpw-2" key="t-recover-password-2">Recover Password 2</a></li>
                        <li><a href="auth-lock-screen" key="t-lock-screen">Lock Screen</a></li>
                        <li><a href="auth-lock-screen-2" key="t-lock-screen-2">Lock Screen 2</a></li>
                        <li><a href="auth-confirm-mail" key="t-confirm-mail">Confirm Email</a></li>
                        <li><a href="auth-confirm-mail-2" key="t-confirm-mail-2">Confirm Email 2</a></li>
                        <li><a href="auth-email-verification" key="t-email-verification">Email verification</a></li>
                        <li><a href="auth-email-verification-2" key="t-email-verification-2">Email Verification 2</a></li>
                        <li><a href="auth-two-step-verification" key="t-two-step-verification">Two Step Verification</a></li>
                        <li><a href="auth-two-step-verification-2" key="t-two-step-verification-2">Two Step Verification 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-utility">Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter" key="t-starter-page">Starter Page</a></li>
                        <li><a href="pages-maintenance" key="t-maintenance">Maintenance</a></li>
                        <li><a href="pages-comingsoon" key="t-coming-soon">Coming Soon</a></li>
                        <li><a href="pages-timeline" key="t-timeline">Timeline</a></li>
                        <li><a href="pages-faqs" key="t-faqs">FAQs</a></li>
                        <li><a href="pages-pricing" key="t-pricing">Pricing</a></li>
                        <li><a href="pages-404" key="t-error-404">Error 404</a></li>
                        <li><a href="pages-500" key="t-error-500">Error 500</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-components">Components</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-tone"></i>
                        <span key="t-ui-elements">UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts" key="t-alerts">Alerts</a></li>
                        <li><a href="ui-buttons" key="t-buttons">Buttons</a></li>
                        <li><a href="ui-cards" key="t-cards">Cards</a></li>
                        <li><a href="ui-carousel" key="t-carousel">Carousel</a></li>
                        <li><a href="ui-dropdowns" key="t-dropdowns">Dropdowns</a></li>
                        <li><a href="ui-grid" key="t-grid">Grid</a></li>
                        <li><a href="ui-images" key="t-images">Images</a></li>
                        <li><a href="ui-lightbox" key="t-lightbox">Lightbox</a></li>
                        <li><a href="ui-modals" key="t-modals">Modals</a></li>
                        <li><a href="ui-offcanvas" key="t-offcanvas">Offcanvas</a></li>
                        <li><a href="ui-rangeslider" key="t-range-slider">Range Slider</a></li>
                        <li><a href="ui-session-timeout" key="t-session-timeout">Session Timeout</a></li>
                        <li><a href="ui-progressbars" key="t-progress-bars">Progress Bars</a></li>
                        <li><a href="ui-placeholders" key="t-placeholders">Placeholders</a></li>
                        <li><a href="ui-sweet-alert" key="t-sweet-alert">Sweet-Alert</a></li>
                        <li><a href="ui-tabs-accordions" key="t-tabs-accordions">Tabs & Accordions</a></li>
                        <li><a href="ui-typography" key="t-typography">Typography</a></li>
                        <li><a href="ui-toasts" key="t-toasts">Toasts</a></li>
                        <li><a href="ui-video" key="t-video">Video</a></li>
                        <li><a href="ui-general" key="t-general">General</a></li>
                        <li><a href="ui-colors" key="t-colors">Colors</a></li>
                        <li><a href="ui-rating" key="t-rating">Rating</a></li>
                        <li><a href="ui-notifications" key="t-notifications">Notifications</a></li>
                        <li><a href="ui-utilities" key="t-utilities">Utilities</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-eraser"></i>
                        <span class="badge rounded-pill bg-danger float-end">10</span>
                        <span key="t-forms">Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages/form-elements" key="t-form-elements">Form Elements</a></li>
                        <li><a href="pages/form-layouts" key="t-form-layouts">Form Layouts</a></li>
                        <li><a href="pages/form-validation" key="t-form-validation">Form Validation</a></li>
                        <li><a href="pages/form-advanced" key="t-form-advanced">Form Advanced</a></li>
                        <li><a href="pages/form-editors" key="t-form-editors">Form Editors</a></li>
                        <li><a href="pages/form-uploads" key="t-form-upload">Form File Upload</a></li>
                        <li><a href="pages/form-xeditable" key="t-form-xeditable">Form Xeditable</a></li>
                        <li><a href="pages/form-repeater" key="t-form-repeater">Form Repeater</a></li>
                        <li><a href="pages/form-wizard" key="t-form-wizard">Form Wizard</a></li>
                        <li><a href="pages/form-mask" key="t-form-mask">Form Mask</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic" key="t-basic-tables">Basic Tables</a></li>
                        <li><a href="tables-datatable" key="t-data-tables">Data Tables</a></li>
                        <li><a href="tables-responsive" key="t-responsive-table">Responsive Table</a></li>
                        <li><a href="tables-editable" key="t-editable-table">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-bar-chart-alt-2"></i>
                        <span key="t-charts">Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex" key="t-apex-charts">Apex Charts</a></li>
                        <li><a href="charts-echart" key="t-e-charts">E Charts</a></li>
                        <li><a href="charts-chartjs" key="t-chartjs-charts">Chartjs Charts</a></li>
                        <li><a href="charts-flot" key="t-flot-charts">Flot Charts</a></li>
                        <li><a href="charts-tui" key="t-ui-charts">Toast UI Charts</a></li>
                        <li><a href="charts-knob" key="t-knob-charts">Jquery Knob Charts</a></li>
                        <li><a href="charts-sparkline" key="t-sparkline-charts">Sparkline Charts</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-aperture"></i>
                        <span key="t-icons">Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons" key="t-boxicons">Boxicons</a></li>
                        <li><a href="icons-materialdesign" key="t-material-design">Material Design</a></li>
                        <li><a href="icons-dripicons" key="t-dripicons">Dripicons</a></li>
                        <li><a href="icons-fontawesome" key="t-font-awesome">Font Awesome</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-map"></i>
                        <span key="t-maps">Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google" key="t-g-maps">Google Maps</a></li>
                        <li><a href="maps-vector" key="t-v-maps">Vector Maps</a></li>
                        <li><a href="maps-leaflet" key="t-l-maps">Leaflet Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level">Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" key="t-level-1-1">Level 1.1</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1">Level 2.1</a></li>
                                <li><a href="javascript: void(0);" key="t-level-2-2">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->