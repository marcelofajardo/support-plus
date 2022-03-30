<div class="form-check form-switch">
    <input class="form-check-input statusBtn"
           data-table="{{$model->getTable()}}"
           data-id="{{$model->id}}"
           type="checkbox"
           id="status{{$model->id}}" {{$model->status==1?'checked':''}}>
    <label class="form-check-label" for="status{{$model->id}}"></label>
</div>
