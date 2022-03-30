@include('partials._multi_language_editor')

<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group pb-3">
            {{ Form::label(trans('common.Title')) }}
            {{ Form::text('title', $page->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => trans('common.Title')]) }}

        </div>
        @if($page->system!=1)
            <div class="form-group pb-3 ">
                {{ Form::label(trans('common.Details')) }}
                {{ Form::textarea('details', $page->details, ['class' => 'form-control editor' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' =>trans('common.Details')]) }}
            </div>
        @endif

        <div class="form-group pb-3 ">
            <div class="col-lg-3 col-md-6">
                <div class="mb-3">
                    <span class="h6 fw-bold">{{__('frontendmanager.Display Position')}}</span>
                </div>
                <div class="form-check">
                    {{Form::checkbox('menu',  1, $page->menu?true:false, ['class' => 'form-check-input'])}}
                    {{ Form::label(trans('frontendmanager.Menu')) }}
                </div>
                <div class="form-check">
                    {{Form::checkbox('footer1',  1, $page->footer1?true:false, ['class' => 'form-check-input'])}}
                    {{ Form::label(trans('frontendmanager.Footer 1')) }}
                </div>
                <div class="form-check">
                    {{Form::checkbox('footer2',  1   , $page->footer2?true:false, ['class' => 'form-check-input'])}}
                    {{ Form::label(trans('frontendmanager.Footer 2')) }}
                </div>
            </div>
        </div>


        <div class="box-footer mt-3">
            <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
        </div>
    </div>
</div>
