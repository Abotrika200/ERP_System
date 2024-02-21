@extends('layouts.app')
@section('title', __('project::lang.project'))

@section('content')
@include('project::layouts.nav')
<section class="content-header">
	<h1>
    	@lang('project::lang.projects')
    	<small> @lang('project::lang.all_projects')</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    @if($project_view == 'list_view')

	@endif
	<div class="box box-solid">
		<div class="box-header with-border">
			<h3 class="box-title">@lang('project::lang.projects')</h3>
			<div class="box-tools pull-right">
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
				    <label class="btn btn-info btn-sm active list">
				        <input type="radio" name="project_view" value="list_view" class="project_view" data-href="{{action('\Modules\Project\Http\Controllers\ProjectController@index').'?project_view=list_view'}}">
				        @lang('project::lang.list_view')
				    </label>
				    <label class="btn btn-info btn-sm kanban">
				        <input type="radio" name="project_view" value="kanban" class="project_view" data-href="{{action('\Modules\Project\Http\Controllers\ProjectController@index').'?project_view=kanban'}}">
				        @lang('project::lang.kanban_board')
				    </label>
				</div>
				@can('project.create_project')
					<button type="button" class="btn btn-primary btn-sm add_new_project" data-href="{{action('\Modules\Project\Http\Controllers\ProjectController@create')}}">
						@lang('project::lang.new_project')&nbsp;
						<i class="fa fa-plus"></i>
					</button>
				@endcan
			</div>
		</div>
		<div class="box-body">
			<div class="row">
				@if($project_view == 'list_view')
				
				@endif
			
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('project_categories_filter', __('project::lang.category') . ':') !!}
						{!! Form::select('project_categories_filter', $categories, null, ['class' => 'form-controll select2', 'placeholder' => __('messages.all'), 'style' => 'width:100%;']); !!}
					</div>
				</div>
			</div>
			@if($project_view == 'list_view')
				<div class="project_html">
				</div>
			@endif
			<!-- project kanban -->
			@if($project_view == 'kanban')
				<div class="project-kanban-board">
				    <div class="page">
				        <div class="main">
				            <div class="meta-tasks-wrapper">
				                <div id="myKanban" class="meta-tasks">
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
			@endif
		</div>			
	</div>
	<!-- /.box -->
	<div class="modal fade" tabindex="-1" role="dialog" id="project_model"></div>
</section>
<link rel="stylesheet" href="{{ asset('modules/project/sass/project.css?v=' . $asset_v) }}">
@endsection
@section('javascript')
<script src="{{ asset('modules/project/js/project.js?v=' . $asset_v) }}"></script>
<!-- get list of project on load of page -->
<script type="text/javascript">
	$(document).ready(function() {
		var project_view = urlSearchParam('project_view');

		//if project view is empty, set default to list_view
		if (_.isEmpty(project_view)) {
			project_view = 'list_view';
		}

		if (project_view == 'kanban') {
			$('.kanban').addClass('active');
			$('.list').removeClass('active');
			initializeProjectKanbanBoard();
		} else if(project_view == 'list_view') {
			getProjectList();
		}
	});
</script>
@endsection