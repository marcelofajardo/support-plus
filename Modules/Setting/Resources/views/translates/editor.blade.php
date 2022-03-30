<div class="table-responsive">
    <form class="" action="{{ route('localization.languages.key_value_store') }}" method="post" id="translateForm">
        @csrf
        <div class="">
            <input type="hidden" name="id" value="{{ $language->id }}">
            <input type="hidden" name="translatable_file_name" value="{{ $translatable_file_name }}">

        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Key</th>
                    <th scope="col">Value</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($default_languages as $key => $value)

                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $key }}</td>
                        <td>
                            @if( is_array($value) )
                                <table class="table pt-0 shadow_none pt-0 pb-0">
                                    <tbody>
                                    @foreach($value as $sub_key => $sub_value)
                                        <tr>
                                            <td width="10%">{{ $sub_key }}</td>
                                            <td>
                                                @if( is_array($sub_value) )
                                                    <table class="table pt-0 shadow_none pt-0 pb-0">
                                                        <tbody>
                                                        @foreach($sub_value as $sub_sub_key => $sub_sub_value)
                                                            <tr>
                                                                <td>{{ $sub_sub_key }}</td>
                                                                <td>
                                                                    <div class="col-lg-12">
                                                                        <input type="text" class="form-control"
                                                                               style="width:100%"
                                                                               name="key[{{ $key }}][{{ $sub_key }}][{{ $sub_sub_key }}]"
                                                                               @isset($sub_sub_value)
                                                                               value="{{ $sub_sub_value }}"
                                                                            @endisset>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                @else

                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control"
                                                               style="width:100%"
                                                               name="key[{{ $key }}][{{ $sub_key }}]"
                                                               @isset($sub_value)
                                                               value="{{ $sub_value }}"
                                                            @endisset>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" style="width:100%"
                                           name="key[{{ $key }}]"
                                           value="{{ $languages[$key]??$default_languages[$key] }}"
                                    >
                                </div>
                            @endif
                        </td>
                    </tr>
                    @php
                        $i++
                    @endphp
                @endforeach
                </tbody>
            </table>
        </div>
    </form>
</div>
