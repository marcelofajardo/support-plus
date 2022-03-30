@include('partials._multi_language_editor')
<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group pb-2">
            {{ Form::label(trans('blog.Category')) }}
            {{ Form::select('category_id',$categories->pluck('name', 'id'), $blogPost->category_id, ['class' => 'form-control ' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => trans('common.Select').' '.trans('blog.Category')]) }}

        </div>


        <div class="form-group pb-2">
            {{ Form::label(trans('common.Title')) }}
            {{ Form::text('title', $blogPost->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => trans('common.Title')]) }}

        </div>


        <div class="form-group">
            {{ Form::label(trans('common.Details')) }}
            {{ Form::textarea('details', $blogPost->details, ['class' => 'form-control editor' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Details')]) }}

        </div>

        <div class="form-group pt-2">
            {{ Form::label(trans('common.Image')) }}
            <div class="row">
                <div class="col-md-6">
                    <x-image-input-with-preview :name="'image'" :src="$blogPost->image"/>
                </div>
            </div>
        </div>
        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
