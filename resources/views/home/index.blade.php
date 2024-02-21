@extends('layouts.app')
@section('title', __('home.home'))

@section('content')
    <style>
        @font-face {
            font-family: "icomoon";
            src: url("fonts/icomoon.eot");
            src: url("fonts/icomoon.eot?#iefix") format("embedded-opentype"), url("fonts/icomoon.woff")
            format("woff"), url("fonts/icomoon.ttf") format("truetype"), url("fonts/icomoon.svg#icomoon")
            format("svg");
            font-weight: normal;
            font-style: normal;
        }
        .info-box-text {
            color: #01070e;
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 2px;
        }

        h5{
            font-family: 'Cairo', sans-serif;
            color: inherit;

        }
        .row-custom .col-custom {
            display: flex;
            /* margin: 0px; */
            padding: 0px 4px;
            margin: 0px 0px;
        }
        .box, .info-box {
            margin-bottom: 7px;
            box-shadow: 0 0 2rem 0 rgba(136,152,170,.15)!important;
            border-radius: 5px;
        }
        .box-icon{
            color: #40485b !important;
            background:white !important;
            text-align:center;
            border: none;
        }
        .box-icon:hover{
            background: #40485b !important;
            color:white !important;
            text-align:center;
        }
        .parent-box{
            border:1px solid #ddd;
            height: 110px;
            background:white;
            padding-top: 20px;
            color: #40485b;
            text-align: center;
        }

        .parent-box h5{
            font-family: 'Cairo', sans-serif;
            font-size: 13px;
        }
        .parent-box i{
            font-size: 36px;



        }
        .list-group-item {
            position: relative;
            display: block;
            padding: 5px 15px;
            margin-bottom: -1px;
            background: inherit;
            border: none;

        }
        .parent-box:hover{
            font-size: 36px;
            background: #40485b !important;
            color:white !important;

        }
        .list-group-item a{
            color: inherit;
            font-size: 10px;
            text-decoration: inherit;
        }
        .list-group-item a:hover{
            color: inherit;
            font-size: 10px;
            text-decoration: revert;
        }
        .icon-user-tie:before {
            content: "\e976";
        }
        .list-group-item {
            position: relative;
            display: block;
            padding: 9px 15px;
            margin-bottom: -1px;
            background: inherit;
            border: none;
        }
        .list-group{
            color: #40485b !important;
            background:white !important;
            text-decoration: none;
            height: 331px;

        }
        .list-group:hover{
            background: #40485b !important;
            color:white !important;
            text-decoration: revert;
        }
        .row{
            background:#fafafa;
        }
        .info-box-new-style .info-box-content {
            padding: 6px 12px 6px 12px;
            margin-left: 64px;
        }
        .info-box-number{
            float:left;
        }
        .total-labels{
            font-size:20px !important;
            float:right;
        }
        .change-charts{
            z-index: 100;
            position: relative;
            top: 36px;
            left:  -55%;
        }
        .cont{
            background-color: #3c3e4f;
            color: white;
            display: block;
            height: 140px;
            text-align: center;
            padding-top: 2px;
            font-size: 23px;
            border-radius: 10px;
            /*border: 1px solid #590631;*/
            margin: auto;
            margin-bottom: auto;
            margin-bottom: 35px;
            max-width: 200px;
            transition: all .5s ease;
          /*  border-top: 3px solid #18466f;*/
            border-bottom: 9px solid #8c1818;
        }

        .cont>h3,h2{
            color: #ffffff;
        }

        .cont:hover{
            background-color: #2084ae;
        }

        .cont:hover h2,.cont:hover h3{
             color: white;
        }
        .c_c.small-box{
            background-color: #3ebfbe!important;
            border-radius: 10px;
            overflow: hidden;
        }
        .c_c.small-box p{
            color: white;
            font-weight: bolder;
            font-size: 20px !important;
            padding: 1em 0.3em 0.2em 0;
        }
        .small-box:hover .icon {
            font-size: 65px;
        }.small-box .icon {
            top: 0;
            font-size: 60px;
        }
        @media (max-width: 767px)
        {
            .small-box .icon {
                display: block;
            }
        }

    </style>


    <div style="background-color: white;
                width: 95%;
                margin: auto;
                margin-top: 20px;
                padding: 20px;
                border-top: solid;
                border-top-color: currentcolor;
                border-top-style: solid;
                border-top-width: medium;
                border-radius: 10px 10px 0px 0px;">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="/pos/create">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.kasher')</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <a href="/pos/create" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="/sells">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.sells')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-registered"></i>
                    </div>
                    <a href="/sells" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="/reports/product-sell-return-report">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.sell_return')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-undo-alt"></i>
                    </div>
                    <a href="/reports/product-sell-return-report" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="/purchases">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.purchases')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-cart-plus"></i>
                    </div>
                    <a href="/purchases" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="/reports/product-purchase-report">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.purchase_return')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-undo-alt"></i>
                    </div>
                    <a href="/reports/product-purchase-report" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <!--  -->

            
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="/products">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.list_products')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fas fa-cubes"></i>
                    </div>
                    <a href="/products" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="/contacts?type=customer">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.customers')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fas fa-address-book"></i>
                    </div>
                    <a href="/contacts?type=customer" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="/contacts?type=supplier">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.suppliers')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fas fa-address-book"></i>
                    </div>
                    <a href="/contacts?type=supplier" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="/users">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.users')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fas fa-users"></i>
                    </div>
                    <a href="/users" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="/expenses">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.expense')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-truck"></i>
                    </div>
                    <a href="/expenses" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="/repair/dashboard">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.repair')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fas fa-wrench"></i>
                    </div>
                    <a href="/repair/dashboard" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="manufacturing/recipe">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.manufacturing')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fas fa-industry"></i>
                    </div>
                    <a href="manufacturing/recipe" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="reports/stock-report">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>تقرير المخزون</p>
                        <!-- <p>@lang('lang_v1.stock_report')</p> -->
                    </div>
                    <div class="icon">
                        <i class="fa fas fa-chart-bar"></i>
                    </div>
                    <a href="reports/stock-report" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="reports/product-sell-report">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.product_sell_day')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fas fa-shopping-bag"></i>
                    </div>
                    <a href="reports/product-sell-report" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="eports/product-purchase-report">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>@lang('lang_v1.product_purchas_day')</p>
                    </div>
                    <div class="icon">
                        <i class="fa fas fa-shopping-bag"></i>
                    </div>
                    <a href="eports/product-purchase-report" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="crm/dashboard">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>العاملين</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa fa-broadcast-tower"></i>
                    </div>
                    <a href="crm/dashboard" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="project/project?project_view=list_view">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>ادارة المشاريع</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-project-diagram"></i>
                    </div>
                    <a href="project/project?project_view=list_view" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6">
                <!-- small box -->
                <a href="hrm/dashboard">
                <div class="small-box bg-success c_c">
                    <div class="inner">
                        <h3 style="opacity: 0;">0</h3>

                        <p>HRM</p>
                    </div>
                    <div class="icon">
                        <i class="fa fas fa-users"></i>
                    </div>
                    <a href="hrm/dashboard" class="small-box-footer">دخول <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                </a>
            </div>
<!--             
    <div class="col-lg-2 ">
                <a href="/pos/create" class="cont" >
                    <h2><i class="fas fa-dollar-sign"></i></h2>
                    <h3>@lang('lang_v1.kasher')   </h3>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="/sells" class="cont" >
                    <h2><i class="fa fa-registered"></i></h2>
                    <h3>@lang('lang_v1.sells')  </h3>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="/reports/product-sell-return-report" class="cont" >
                    <h2><i class="fa fa-undo-alt"></i></h2>
                    <h3>@lang('lang_v1.sell_return')  </h3>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="/purchases" class="cont" >
                    <h2><i class="fa fa-cart-plus"></i></h2>
                    <h3> @lang('lang_v1.purchases') </h3>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="/reports/product-purchase-report" class="cont" >
                    <h2><i class="fa fa-undo-alt"></i></h2>
                    <h3> @lang('lang_v1.purchase_return') </h3>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="/products" class="cont" >
                    <h2><i class="fa fas fa-cubes"></i></h2>
                    <h3>@lang('lang_v1.list_products')   </h3>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="/contacts?type=customer" class="cont" >
                    <h2><i class="fa fas fa-address-book"></i></h2>
                    <h3>  @lang('lang_v1.customers')</h3>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="/contacts?type=supplier" class="cont" >
                    <h2><i class="fa fas fa-address-book"></i></h2>
                    <h3>@lang('lang_v1.suppliers')   </h3>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="/users" class="cont" >
                    <h2><i class="fa fas fa-users"></i></h2>
                    <h3>@lang('lang_v1.users')   </h3>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="/expenses" class="cont" >
                    <h2><i class="fa fa-truck"></i></h2>
                    <h3>@lang('lang_v1.expense')   </h3>
                </a>
            </div>

              <div class="col-lg-2">
                <a href="/repair/dashboard" class="cont" >
                    <h2><i class="fa fas fa-wrench"></i></h2>
                    <h3>   @lang('lang_v1.repair')</h3>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="manufacturing/recipe" class="cont" >
                    <h2><i class="fa fas fa-industry"></i></h2>
                    <h3>@lang('lang_v1.manufacturing')   </h3>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="reports/stock-report" class="cont" >
                    <h2><i class="fa fas fa-chart-bar"></i></h2>
                    <h3>@lang('report.stock_report')   </h3>
                </a>
            </div>


            <div class="col-lg-2">
                <a href="reports/product-sell-report" class="cont" >
                    <h2><i class="fa fas fa-shopping-bag"></i></h2>
                    <h3>@lang('lang_v1.product_sell_day')   </h3>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="eports/product-purchase-report" class="cont" >
                    <h2><i class="fa fas fa-shopping-bag"></i></h2>
                    <h3>@lang('lang_v1.product_purchas_day')   </h3>
                </a>
            </div> -->

        </div>
 <br><br>

        <br>
        <div class="row">
            <div class="col-md-8 col-xs-12"style="">
                <div class="btn-group pull-right" data-toggle="buttons">
                    <label class="btn btn-info active">
                        <input type="radio" name="date-filter"
                               data-start="{{ date('Y-m-d') }}"
                               data-end="{{ date('Y-m-d') }}"
                               checked> {{ __('home.today') }}
                    </label>
                    <label class="btn btn-info">
                        <input type="radio" name="date-filter"
                               data-start="{{ $date_filters['this_week']['start']}}"
                               data-end="{{ $date_filters['this_week']['end']}}"
                        > {{ __('home.this_week') }}
                    </label>
                    <label class="btn btn-info">
                        <input type="radio" name="date-filter-month"
                               data-start="{{ $date_filters['this_month']['start']}}"
                               data-end="{{ $date_filters['this_month']['end']}}"
                               checked> {{ __('home.this_month') }}
                    </label>
                    <label class="btn btn-info">
                        <input type="radio" name="date-filter-year"
                               data-start="{{ $date_filters['this_fy']['start']}}"
                               data-end="{{ $date_filters['this_fy']['end']}}"
                               checked> {{ __('home.this_fy') }}
                    </label>
                </div>
            </div>
        </div>
        <br>


        <div class="row row-custom">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-custom">
                                <div class="info-box info-box-new-style">

                                    <div class="info-box-content">
                                        <span class="info-box-text" style="color:#2d91ea">{{ __('home.total_purchase') }}</span>
                                        <table >
                                            <tr>
                                                <td><span class="total-labels">اليوم : </span></td>
                                                <td><span class="info-box-number total_purchase"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i> </span></td>
                                            </tr>
                                            <tr>
                                                <td></span><span class="total-labels">الشهر : </span></td>
                                                <td><span class="info-box-number total_purchase_month"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></td>
                                            </tr>
                                            <tr>
                                                <td></span><span class="total-labels">السنة  : </span></td>
                                                <td><span class="info-box-number total_purchase_year"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 col-sm-6 col-xs-12 col-custom">
                                <div class="info-box info-box-new-style">

                                    <div class="info-box-content">
                                        <span class="info-box-text" style="color:#3ebfbe">{{ __('home.total_sell') }}</span>
                                        <table >
                                            <tr>
                                                <td><span class="total-labels">اليوم : </span></td>
                                                <td><span class="info-box-number total_sell"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i> </span></td>
                                            </tr>
                                            <tr>
                                                <td></span><span class="total-labels">الشهر : </span></td>
                                                <td><span class="info-box-number total_sell_month"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></td>
                                            </tr>
                                            <tr>
                                                <td></span><span class="total-labels">السنة  : </span></td>
                                                <td><span class="info-box-number total_sell_year"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></td>
                                            </tr>
                                        </table>


                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-custom">
                                <div class="info-box info-box-new-style">


                                    <div class="info-box-content">
                                        <span class="info-box-text" style="color:#ffb553">مستحقات مشتريات</span>
                                        <table >
                                            <tr>
                                                <td><span class="total-labels">اليوم : </span></td>
                                                <td><span class="info-box-number purchase_due"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i> </span></td>
                                            </tr>
                                            <tr>
                                                <td></span><span class="total-labels">الشهر : </span></td>
                                                <td><span class="info-box-number purchase_due_month"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></td>
                                            </tr>
                                            <tr>
                                                <td></span><span class="total-labels">السنة  : </span></td>
                                                <td><span class="info-box-number purchase_due_year"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <!-- fix for small devices only -->
                            <!-- <div class="clearfix visible-sm-block"></div> -->
                            <div class="col-md-6 col-sm-6 col-xs-12 col-custom">
                                <div class="info-box info-box-new-style">


                                    <div class="info-box-content">
                                        <span class="info-box-text" style="color:#f33e6f">مستحقات مبيعات</span>
                                        <table >
                                            <tr>
                                                <td><span class="total-labels">اليوم : </span></td>
                                                <td><span class="info-box-number invoice_due"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i> </span></td>
                                            </tr>
                                            <tr>
                                                <td></span><span class="total-labels">الشهر : </span></td>
                                                <td><span class="info-box-number invoice_due_month"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></td>
                                            </tr>
                                            <tr>
                                                <td></span><span class="total-labels">السنة  : </span></td>
                                                <td><span class="info-box-number invoice_due_year"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></td>
                                            </tr>
                                        </table>

                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <div class="row">
                            <!-- expense -->
                            <div class="col-md-12 col-sm-12 col-xs-12 col-custom">
                                <div class="info-box info-box-new-style">


                                    <div class="info-box-content">
                  <span class="info-box-text" style="color:#64d2e9">
                    {{ __('lang_v1.expense') }}
                  </span>
                                        <table >
                                            <tr>
                                                <td><span class="total-labels">اليوم : </span></td>
                                                <td><span class="info-box-number total_expense"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i> </span></td>
                                            </tr>
                                            <tr>
                                                <td></span><span class="total-labels">الشهر : </span></td>
                                                <td><span class="info-box-number total_expense_month"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span></td>
                                            </tr>
                                            <tr>
                                                <td></span><span class="total-labels">السنة  : </span></td>
                                                <td><span class="info-box-number total_expense_year"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span></td>
                                            </tr>
                                        </table>

                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div class="row">
            <div class="@if((session('business.enable_product_expiry') != 1) && auth()->user()->can('stock_report.view')) col-sm-12 @else col-sm-6 @endif">
                @component('components.widget', ['class' => 'box-warning'])
                    @slot('icon')
                        <i class="fa fa-exclamation-triangle text-yellow" aria-hidden="true"></i>
                    @endslot
                    @slot('title')
                        {{ __('home.product_stock_alert') }} @show_tooltip(__('tooltip.product_stock_alert'))
                    @endslot
                    <table class="table table-bordered table-striped" id="stock_alert_table" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>@lang( 'sale.product' )</th>
                            <th>@lang( 'business.location' )</th>
                            <th>@lang( 'report.current_stock' )</th>
                        </tr>
                        </thead>
                    </table>
                @endcomponent
            </div>
        </div>
    </div>






<!-- /.content -->
<div class="modal fade payment_modal" tabindex="-1" role="dialog" 
    aria-labelledby="gridSystemModalLabel">
</div>

<div class="modal fade edit_payment_modal" tabindex="-1" role="dialog" 
    aria-labelledby="gridSystemModalLabel">
</div>
@stop
@section('javascript')
    <script src="{{ asset('js/home.js?v=' . $asset_v) }}"></script>
    <script src="{{ asset('js/payment.js?v=' . $asset_v) }}"></script>

@endsection

