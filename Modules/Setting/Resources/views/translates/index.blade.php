@extends('backend.layouts.app')


@section('title')
    Translate
@endsection
@section('content')



    <div class="py-4 main pt-0">
        <div class="card">
            <div class="card-header">
                <div class="header-space-between">
                <span class="card_title h4">
                 {{ $language->name }}   Translate
                </span>


                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="primary_input ">
                            <select name="file_name" id="file_name"
                                    class="primary_select w-100 bb form-control  mb-15"
                                    onchange="get_translate_file()">
                                <option value="">Select Translatable File</option>
                                @foreach ($languagePaths as $key => $path)
                                    <option value="{{ $path['path'] }}"
                                            @if ($path['name'] == session('lang')??'') selected @endif>{{ $path['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6  ">

                        <button type="button" class="btn btn-secondary" id="translateFormBtn">
                            Save
                        </button>

                    </div>
                </div>
                <div class="table-responsive">
                    <div class="w-100">
                        <div id="translate_form"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <input type="hidden" name="translate_file" class="translate_file"
           value="{{ route('localization.language.get_translate_file') }}">
    <input type="hidden" name="id" id="id" value="{{ $language->id }}">
    <input type="hidden" name="code" id="code" value="{{ $language->code }}">
@endsection
@section('scripts')

    <script type="text/javascript">
        $(document).ready(function () {
            $('.demo_wait').show();
            get_translate_file();
        });

        function get_translate_file() {
            $('#translate_form').empty();
            $('.demo_wait').show();
            var file_name = $('#file_name').val();
            var id = $('#id').val();
            var code = $('#code').val();
            $.post('{{ route('localization.language.get_translate_file') }}', {
                _token: '{{ csrf_token() }}',
                file_name: file_name,
                id: id,
                code: code,
            }, function (data) {
                $('#translate_form').html(data);
                $('.demo_wait').hide();
            });
        }
    </script>
@endsection
