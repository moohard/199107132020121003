<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Metronic | Local Data</title>
    <meta name="description" content="Initialized with local json data">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right">
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                </div>
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon">
                                        <i class="kt-font-brand flaticon2-line-chart"></i>
                                    </span>
                                    <h3 class="kt-portlet__head-title">
                                        JSON Datatable
                                        <small>initialized from remote json file</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 order-2 order-xl-1">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                    <div class="kt-input-icon kt-input-icon--left">
                                                        <input type="text" class="form-control" placeholder="Search..."
                                                            id="generalSearch">
                                                        <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                            <span><i class="la la-search"></i></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                    <div class="kt-form__group kt-form__group--inline">
                                                        <div class="kt-form__label">
                                                            <label>Status:</label>
                                                        </div>
                                                        <div class="kt-form__control">
                                                            <select class="form-control bootstrap-select"
                                                                id="kt_form_status">
                                                                <option value="">All</option>
                                                                <option value="1">Pending</option>
                                                                <option value="2">Delivered</option>
                                                                <option value="3">Canceled</option>
                                                                <option value="4">Success</option>
                                                                <option value="5">Info</option>
                                                                <option value="6">Danger</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                    <div class="kt-form__group kt-form__group--inline">
                                                        <div class="kt-form__label">
                                                            <label>Type:</label>
                                                        </div>
                                                        <div class="kt-form__control">
                                                            <select class="form-control bootstrap-select"
                                                                id="kt_form_type">
                                                                <option value="">All</option>
                                                                <option value="1">Online</option>
                                                                <option value="2">Retail</option>
                                                                <option value="3">Direct</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                                            <a href="#" class="btn btn-default kt-hidden">
                                                <i class="la la-cart-plus"></i> New Order
                                            </a>
                                            <div
                                                class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <table class="kt-datatable" id="html_table">
                                    <thead>
                                        <tr>
                                            <th title="Field #1">Nama</th>
                                            <th title="Field #2">Deskripsi</th>
                                            <th title="Field #3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($datas as $r) { ?>
                                            <tr>
                                                <td><?=$r['nama']?></td>
                                                <td>Land Rover</td>
                                                <td>Range Rover</td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
    </script>
    <script src="/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
    <script src="/assets/js/scripts.bundle.js" type="text/javascript"></script>
    <script src="/assets/js/my-script.js" type="text/javascript"></script>
</body>

</html>