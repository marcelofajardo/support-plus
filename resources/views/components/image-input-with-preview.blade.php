<div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group">
                <div class="custom-file">
                    <input name="{{$name}}" type="file" id="inputGroupFile{{$id}}"
                           class="imgInp custom-file-input form-control"
                           aria-describedby="inputGroupFileAddon{{$id}}">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id='img_contain'>
                <img id="preview{{$id}}" height="150px"
                     src="{{assetPath($src)}}"
                     alt="" title=''/>
            </div>
        </div>
    </div>
    <script>
        $("#inputGroupFile{{$id}}").change(function (event) {
            readURL{{$id}}(this);
        });

        function readURL{{$id}}(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var filename = $("#inputGroupFile{{$id}}").val();
                filename = filename.substring(filename.lastIndexOf('\\') + 1);
                reader.onload = function (e) {
                    $('#preview{{$id}}').attr('src', e.target.result);

                }
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
</div>
