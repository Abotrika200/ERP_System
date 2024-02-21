<div class="row resizable" id="featured_products_box" style="display: none;">
@if(!empty($featured_products))
	@include('sale_pos.partials.featured_products')
@endif
</div>
<div class="row">
</div>
<br>
<div class="row">
	<input type="hidden" id="suggestion_page" value="1">
	<div class="col-md-3">
			@if(!empty($categories))
        		<div class="col-md-4" id="product_category_div">
        		    <style>
        		        .product_category_ul {
                            max-height: 100vh;
                            overflow-x: auto;
                            width: 140px;
        		            padding: 0;
                            list-style-type: none;
                        }
        		        .product_category_ul .cate_filter_btn {
        		            color: white;
        		            margin: 3px 0;
                            background-color: #605ca8;
                            width: 140px;
                        }
        		    </style>
        			<ul class="product_category_ul">
        				<button type="button" cate-id="all" id="cate_filter_btn" class="cate_filter_btn">الكل</button>
        			    @foreach($categories as $category)
        					<li><button type="button" cate-id="{{$category['id']}}" id="cate_filter_btn" class="cate_filter_btn">{{$category['name']}}</button></li>
        				@endforeach
        			</ul>
        		</div>
        	@endif
        
        	@if(!empty($brands))
        		<div class="col-sm-4" id="product_brand_div">
        			{!! Form::select('size', $brands, null, ['id' => 'product_brand', 'class' => 'select2', 'name' => null, 'style' => 'width:100% !important']) !!}
        		</div>
        	@endif
        
        	<!-- used in repair : filter for service/product -->
        	<div class="col-md-6 hide" id="product_service_div">
        		{!! Form::select('is_enabled_stock', ['' => __('messages.all'), 'product' => __('sale.product'), 'service' => __('lang_v1.service')], null, ['id' => 'is_enabled_stock',  'name' => null, 'style' => 'width:100% !important']) !!}
        	</div>
        
        	<div class="col-sm-4 @if(empty($featured_products)) hide @endif" id="feature_product_div">
        		<button type="button" class="btn btn-primary btn-flat" id="show_featured_products">@lang('lang_v1.featured_products')</button>
        	</div>
	</div>
	<div class="col-md-9">
		<div class="eq-height-row" id="product_list_body"></div>
	</div>
	<div class="col-md-9 text-center" id="suggestion_page_loader" style="display: none;">
		<i class="fa fa-spinner fa-spin fa-2x"></i>
	</div>
</div>