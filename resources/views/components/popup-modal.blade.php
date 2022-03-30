<div>
    @foreach($popups as  $key=>$popup)
        <div data-popup_delay="{{$popup->delay*1000}}" data-popup_id="{{$key}}" id="modal-popup{{$key}}"
             class="popup-wrapper">
            <div class="popup">
                <div class="popup_main-content">
                    <div class="left-bg bg_cover lazy"
                         data-bg="{{assetPath($popup->image)}}">
                    </div>
                    <div class="right-content bg_cover lazy" data-bg="{{assetPath($popup->bg)}}">
                        <h1>{{$popup->title}}</h1>
                        <h4>
                            {{$popup->text}}
                        </h4>
                        <a href="{{$popup->button_url}}" class="btn btn-secondary">{{$popup->button_text}}</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
