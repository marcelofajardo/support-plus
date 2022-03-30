<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">
            <div class="col-md-6">

                <div class="input-group">
                    <div class="custom-file">
                        <input name="file" type="file" id="inputGroupFile" class="custom-file-input form-control"
                               aria-describedby="inputGroupFileAddon">
                    </div>
                </div>

                <div class="box-footer mt-3">
                    <button type="submit" class="btn btn-primary">{{__('common.Submit')}}</button>
                </div>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>Software Version</th>
                        <td>{{app('generalSettings')['version']}}</td>
                    </tr>

                    <tr>
                        <th>Php Version</th>
                        <td>{{phpversion()}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
