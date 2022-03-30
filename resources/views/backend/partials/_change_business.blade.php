<div class="modal fade" id="changeBusinessModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleNotify"
     aria-hidden="true">
    <div class="modal-dialog   modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="modalTitleNotify">
                    {{__('frontend.My Businesses')}}
                </p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="quiz_section" id="quizeSection">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="quiz_content_area">

                                    <div class="row">
                                        @foreach(loginUserBusiness() as $business)
                                            <div class="col-sm-4">
                                                <div class="quiz_card_area">
                                                    <input class="quiz_checkbox" type="radio" id="1" value="1"
                                                           name="business_id" checked="checked"/>
                                                    <div class="single_quiz_card">
                                                        <div class="quiz_card_content">
                                                            <div class="quiz_card_icon">
                                                                <div class="quiz_icon quiz_icon1">
                                                                    <img src="{{ assetPath($business->logo) }}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="quiz_card_title">
                                                                <h3><i class="fa fa-check" aria-hidden="true"></i>
                                                                    {{$business->name}}
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</div>
