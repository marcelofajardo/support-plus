<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">

            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Version</th>
                        <th>Minimum Requirement</th>
                        <th>Note</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($versions) && count($versions)!=0)
                        @foreach($versions as $key=>$version)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$version->release_date}}</td>
                                <td>{{$version->version}}</td>
                                <td>{{$version->min}}</td>
                                <td>
                                    @foreach(json_decode($version->notes) as $k=>$note)
                                        <span
                                            class="ti-check"></span> {{$note}}  <br>
                                    @endforeach
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">
                                No Updated Version
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
