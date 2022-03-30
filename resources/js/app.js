import "bootstrap";
import "simplebar";
import SmoothScroll from "smooth-scroll";
import "jquery";
import "datatables.net-bs5";
import "datatables.net-buttons-bs5";
import "select2"
import swal from 'sweetalert2';
import './summernote.min';
import '@chenfengyuan/datepicker'
import AOS from 'aos';
import Chart from 'chart.js/auto';
import {Datepicker} from 'vanillajs-datepicker';
import LazyLoad from "vanilla-lazyload";
import 'pdfobject/pdfobject.min'
import 'magnific-popup'

let $ = require('jquery');
window.$ = window.jQuery = require('jquery');

require('datatables.net-bs5');
require('datatables.net-buttons-bs5');
require('owl.carousel')

"use strict";
const d = document;

window.Swal = swal;
window.Chart = Chart;


let _token = $('meta[name="csrf-token"]').attr('content');
let mark_notification_route = $('meta[name="mark_notification"]').attr('content');
var base_url = $("meta[name=base_url]").attr("content");



function sendMarkRequest(id = null) {
    return $.ajax(mark_notification_route, {
        method: 'POST',
        data: {
            _token,
            id
        }
    });
}
$(function() {
    $('.mark-as-read').click(function() {
        let request = sendMarkRequest($(this).data('id'));
        request.done(() => {
            $(this).remove();
        });
    });
    $('#mark-all').click(function() {
        let request = sendMarkRequest();
        request.done(() => {
            $('.mark-as-read').remove();
        })
    });
});

d.addEventListener("DOMContentLoaded", function (event) {

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-primary me-3',
            cancelButton: 'btn btn-gray'
        },
        buttonsStyling: false
    });

    // options
    const breakpoints = {
        sm: 540,
        md: 720,
        lg: 960,
        xl: 1140
    };

    var preloader = d.querySelector('.preloader');
    if (preloader) {
        setTimeout(function () {
            preloader.classList.add('show');

            setTimeout(function () {
                d.querySelector('.loader-element').classList.add('hide');
            }, 200);
        }, 1000);
    }

    var sidebar = document.getElementById('sidebarMenu');
    var content = document.getElementsByClassName('content')[0];
    if (sidebar && d.body.clientWidth < breakpoints.lg) {
        sidebar.addEventListener('shown.bs.collapse', function () {
            document.querySelector('body').style.position = 'fixed';
        });
        sidebar.addEventListener('hidden.bs.collapse', function () {
            document.querySelector('body').style.position = 'relative';
        });
    }

    var iconNotifications = d.querySelector('.notification-bell');
    if (iconNotifications) {
        iconNotifications.addEventListener('shown.bs.dropdown', function () {
            iconNotifications.classList.remove('unread');
        });
    }

    [].slice.call(d.querySelectorAll('[data-background]')).map(function (el) {
        el.style.background = 'url(' + el.getAttribute('data-background') + ')';
    });

    [].slice.call(d.querySelectorAll('[data-background-lg]')).map(function (el) {
        if (document.body.clientWidth > breakpoints.lg) {
            el.style.background = 'url(' + el.getAttribute('data-background-lg') + ')';
        }
    });

    [].slice.call(d.querySelectorAll('[data-background-color]')).map(function (el) {
        el.style.background = 'url(' + el.getAttribute('data-background-color') + ')';
    });

    [].slice.call(d.querySelectorAll('[data-color]')).map(function (el) {
        el.style.color = 'url(' + el.getAttribute('data-color') + ')';
    });

    //Tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // Popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })


    // Datepicker
    let datepickers = [].slice.call(d.querySelectorAll('.date'))
    datepickers.map(function (el) {
        return new Datepicker(el, {
            buttonClass: 'btn',
            autohide: true
        });
    })

    // DataTables
    var dataTableEl = d.getElementById('datatable');
    if (dataTableEl) {
        const dataTable = new simpleDatatables.DataTable(dataTableEl);
    }

    if (d.querySelector('.input-slider-container')) {
        [].slice.call(d.querySelectorAll('.input-slider-container')).map(function (el) {
            var slider = el.querySelector(':scope .input-slider');
            var sliderId = slider.getAttribute('id');
            var minValue = slider.getAttribute('data-range-value-min');
            var maxValue = slider.getAttribute('data-range-value-max');

            var sliderValue = el.querySelector(':scope .range-slider-value');
            var sliderValueId = sliderValue.getAttribute('id');
            var startValue = sliderValue.getAttribute('data-range-value-low');

            var c = d.getElementById(sliderId),
                id = d.getElementById(sliderValueId);

            noUiSlider.create(c, {
                start: [parseInt(startValue)],
                connect: [true, false],
                //step: 1000,
                range: {
                    'min': [parseInt(minValue)],
                    'max': [parseInt(maxValue)]
                }
            });
        });
    }

    if (d.getElementById('input-slider-range')) {
        var c = d.getElementById("input-slider-range"),
            low = d.getElementById("input-slider-range-value-low"),
            e = d.getElementById("input-slider-range-value-high"),
            f = [d, e];

        noUiSlider.create(c, {
            start: [parseInt(low.getAttribute('data-range-value-low')), parseInt(e.getAttribute('data-range-value-high'))],
            connect: !0,
            tooltips: true,
            range: {
                min: parseInt(c.getAttribute('data-range-value-min')),
                max: parseInt(c.getAttribute('data-range-value-max'))
            }
        }), c.noUiSlider.on("update", function (a, b) {
            f[b].textContent = a[b]
        });
    }

    // Apex Charts

    //Main Chart
    var options = {
        chart: {
            height: 420,
            type: "area",
            fontFamily: 'Inter',
            foreColor: '#4B5563',
            toolbar: {
                show: true,
                offsetX: 0,
                offsetY: 0,
                tools: {
                    download: false,
                    selection: false,
                    zoom: false,
                    zoomin: true,
                    zoomout: true,
                    pan: false,
                    reset: false | '<img src="/static/icons/reset.png" width="20">',
                    customIcons: []
                },
                export: {
                    csv: {
                        filename: undefined,
                        columnDelimiter: ',',
                        headerCategory: 'category',
                        headerValue: 'value',
                        dateFormatter(timestamp) {
                            return new Date(timestamp).toDateString()
                        }
                    }
                },
                autoSelected: 'zoom'
            },
        },
        dataLabels: {
            enabled: false
        },
        tooltip: {
            style: {
                fontSize: '14px',
                fontFamily: 'Inter',
            },
        },
        theme: {
            monochrome: {
                enabled: true,
                color: '#f3c78e',
            }
        },
        grid: {
            show: true,
            borderColor: '#f5e1c5',
            strokeDashArray: 1,
        },
        series: [
            {
                name: "Sales",
                data: [95, 52, 78, 45, 19, 53, 60]
            }
        ],
        markers: {
            size: 5,
            strokeColors: '#ffffff',
            hover: {
                size: undefined,
                sizeOffset: 3
            }
        },
        xaxis: {
            categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
            labels: {
                style: {
                    fontSize: '12px',
                    fontWeight: 500,
                },
            },
            axisBorder: {
                color: '#f5e1c5',
            },
            axisTicks: {
                color: '#f5e1c5',
            }
        },
        yaxis: {
            labels: {
                style: {
                    colors: ['#4B5563'],
                    fontSize: '12px',
                    fontWeight: 500,
                },
            },
        },
        responsive: [
            {
                breakpoint: 768,
                options: {
                    yaxis: {
                        show: false,
                    }
                }
            }
        ]
    };


    if (d.getElementById('loadOnClick')) {
        d.getElementById('loadOnClick').addEventListener('click', function () {
            var button = this;
            var loadContent = d.getElementById('extraContent');
            var allLoaded = d.getElementById('allLoadedText');

            button.classList.add('btn-loading');
            button.setAttribute('disabled', 'true');

            setTimeout(function () {
                loadContent.style.display = 'block';
                button.style.display = 'none';
                allLoaded.style.display = 'block';
            }, 1500);
        });
    }

    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 500,
        speedAsDuration: true
    });


    if (d.querySelector('.current-year')) {
        d.querySelector('.current-year').textContent = new Date().getFullYear();
    }

    if (d.querySelector('.glide-testimonials')) {
        new Glide('.glide-testimonials', {
            type: 'carousel',
            startAt: 0,
            perView: 1,
            autoplay: 2000
        }).mount();
    }

    if (d.querySelector('.glide-clients')) {
        new Glide('.glide-clients', {
            type: 'carousel',
            startAt: 0,
            perView: 5,
            autoplay: 2000
        }).mount();
    }

    if (d.querySelector('.glide-news-widget')) {
        new Glide('.glide-news-widget', {
            type: 'carousel',
            startAt: 0,
            perView: 1,
            autoplay: 2000
        }).mount();
    }

    if (d.querySelector('.glide-autoplay')) {
        new Glide('.glide-autoplay', {
            type: 'carousel',
            startAt: 0,
            perView: 3,
            autoplay: 2000
        }).mount();
    }

    // Choices.js
    var selectStateInputEl = d.querySelector('#state');
    if (selectStateInputEl) {
        const choices = new Choices(selectStateInputEl);
    }


    if (sidebar) {
        if (localStorage.getItem('sidebar') === 'contracted') {
            sidebar.classList.add('notransition');
            content.classList.add('notransition');

            sidebar.classList.add('contracted');

            setTimeout(function () {
                sidebar.classList.remove('notransition');
                content.classList.remove('notransition');
            }, 500);

        } else {
            sidebar.classList.add('notransition');
            content.classList.add('notransition');

            sidebar.classList.remove('contracted');

            setTimeout(function () {
                sidebar.classList.remove('notransition');
                content.classList.remove('notransition');
            }, 500);
        }

        var sidebarToggle = d.getElementById('sidebar-toggle');
        sidebarToggle.addEventListener('click', function () {
            if (sidebar.classList.contains('contracted')) {
                sidebar.classList.remove('contracted');
                localStorage.removeItem('sidebar', 'contracted');
            } else {
                sidebar.classList.add('contracted');
                localStorage.setItem('sidebar', 'contracted');
            }
        });

        sidebar.addEventListener('mouseenter', function () {
            if (localStorage.getItem('sidebar') === 'contracted') {
                if (sidebar.classList.contains('contracted')) {
                    sidebar.classList.remove('contracted');
                } else {
                    sidebar.classList.add('contracted');
                }
            }
        });

        sidebar.addEventListener('mouseleave', function () {
            if (localStorage.getItem('sidebar') === 'contracted') {
                if (sidebar.classList.contains('contracted')) {
                    sidebar.classList.remove('contracted');
                } else {
                    sidebar.classList.add('contracted');
                }
            }
        });
    }


    //custom code
    $.fn.select2.defaults.set("theme", "bootstrap-5");

    $(document).on('click', '.deleteBtn', function (e) {
        e.preventDefault();
        var form = $(this).parents('form');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                form.submit();
            }
        });

    });
    $(document).ready(function () {
        $('.dataTables_length select')
            .append($("<option></option>")
                .attr("value", -1)
                .text('All'));
        $('.dataTables_wrapper table').addClass('table-striped table-hover   ');

    });


    $(document).ready(function () {
        $('.dataTables_length select').select2();
        $('.primary_select').select2();

        $(document).on('click', '#translateFormBtn', function () {
            $("#translateForm").submit();
        });
    });

    let editor = $(".editor");
    if (editor.length) {
        editor.summernote({
            height: 200,
            // toolbar: [
            //     ['style', ['style']],
            //     ['font', ['bold', 'italic', 'underline']],
            //     ['fontname', ['fontname']],
            //     ['fontsize', ['fontsize']],
            //     ['color', ['color']],
            //     ['para', ['ol', 'ul', 'paragraph']],
            //     ['table', ['table']],
            //     ['insert', ['link']]
            // ]
        });
    }


    AOS.init({
        easing: 'ease-in-back',
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(document).on("change", ".statusBtn", function () {
        let table = $(this).data('table');
        let id = $(this).data('id');
        let url = $('title').data('url');

        $.post(url + '/change-status', {table: table, id: id},
            function (data) {
                console.log(data.msg)
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    toast: true,
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    title: data.msg,
                })
            });
    });

    $(document).on('change', '#hasBoth', function () {
        if ($('#hasBoth').is(":checked")) {
            $('.hasBoth').removeClass('d-none');
        } else {
            $('.hasBoth').addClass('d-none');
        }
    });

    $('.datepicker').datepicker();

    $(document).on('change', '#packageType', function () {
        if ($('#packageType').is(":checked")) {
            $('.monthlyPrice').addClass('d-none');
            $('.yearlyPrice').removeClass('d-none');
            $('.packageType').val('yearly');
        } else {
            $('.monthlyPrice').removeClass('d-none');
            $('.yearlyPrice').addClass('d-none');
            $('.packageType').val('monthly');
        }
    });
    $(document).on('click', '.onClickLoading', function () {
        $(this).attr('disable', 'true');
        $(this).append(' <div class="spinner-border spinner-border-sm" role="status">\n' +
            '    <span class="visually-hidden">Loading...</span>   </div>');
        $(this).css("opacity", .6);
    });

    let floatingMenu = $('.floatingMenu');
    $(document).ready(function () {
        $('.floatingButton').on('click',
            function (e) {
                e.preventDefault();
                $(this).toggleClass('open');
                if ($(this).children('i').hasClass('ti-plus')) {
                    $(this).children('i').removeClass('ti-plus');
                    $(this).children('i').addClass('ti-close');
                } else if ($(this).children('i').hasClass('ti-close')) {
                    $(this).children('i').removeClass('ti-close');
                    $(this).children('i').addClass('ti-plus');
                }
                floatingMenu.stop().slideToggle();
            }
        );

        $('.header-menu').on('click',
            function (e) {
                e.preventDefault();
                if ($(this).hasClass('ti-menu')) {
                    $(this).removeClass('ti-menu');
                    $(this).addClass('ti-close');
                } else if ($(this).hasClass('ti-close')) {
                    $(this).removeClass('ti-close');
                    $(this).addClass('ti-menu');
                }
                floatingMenu.stop().slideToggle();
            }
        );
        $(this).on('click', function (e) {
            var container = $(".floatingButton");
            if (!container.is(e.target) && $('.floatingButtonWrap').has(e.target).length === 0) {
                if (container.hasClass('open')) {
                    container.removeClass('open');
                }
                if (container.children('i').hasClass('ti-close')) {
                    container.children('i').removeClass('ti-close');
                    container.children('i').addClass('ti-plus');
                }
                floatingMenu.hide();
            }

            if (!container.is(e.target) && (floatingMenu.has(e.target).length > 0)) {
                $('.floatingButton').removeClass('open');
                floatingMenu.stop().slideToggle();
            }
        });
    });

    let country = $('.countrySelect');
    let state = $('.stateSelect');
    let city = $('.citySelect');
    let city_id = city.find(":selected").val();
    // $(document).on('change', '.countrySelect', function () {

        // let country_id = country.find(":selected").val();
        // let state_id = state.find(":selected").val();

        state.select2({
            ajax: {
                url: base_url + '/ajax/get-state-by-country-id/'+country.find(":selected").val(),
                type: "GET",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        search: params.term,
                        page: params.page || 1
                    }
                },
                cache: false
            }
        });
    // });

    $(".loaderShow").remove();


    $(document).on('click', '.qrView', function (e) {
        e.preventDefault();
        let item = $(this).data('item');
        let image = base_url + '/' + item.image;
        $('#qrViewImg').attr('src', image);
        $('#qrDownloadBtn').attr('href', image);
    });

    function cookie() {
        let allow = localStorage.getItem('allow_cookie');
        var cookieAcceptButton = $('.cookie__accept'),
            cookieAlert = $('.cookie');
        if (allow) {
            cookieAlert.addClass('d-none');
        } else {
            cookieAlert.removeClass('d-none');

        }
        cookieAcceptButton.on('click', function () {
            localStorage.setItem('allow_cookie', true);
            cookieAlert.fadeOut('slow');
        });


    }

    $(function () {
        cookie();
    });

    $(document).ready(function () {
        // $('.owl-carousel').owlCarousel();
        //
        //

        $('.partner-slider').owlCarousel({
            autoplay: true,
            margin: 20,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 5000,
            smartSpeed: 800,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 3
                },

                1024: {
                    items: 4
                },

                1366: {
                    items: 4
                }
            }
        });

        $('.workflow-slider').owlCarousel({
            autoplay: true,
            margin: 20,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 5000,
            smartSpeed: 800,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 3
                },

                1024: {
                    items: 4
                },

                1366: {
                    items: 4
                }
            }
        });

        $('.testimonial-slider').owlCarousel({
            autoplay: true,
            margin: 20,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 5000,
            smartSpeed: 800,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 2
                },

                1024: {
                    items: 3
                },

                1366: {
                    items: 3
                }
            }
        });


    });


});

$(window).on('load', function (event) {
    if ($(".popup-wrapper").length > 0) {
        let $firstPopup = $(".popup-wrapper").eq(0);
        popupAnnouncement($firstPopup);
        $(".popup-wrapper").css('display', 'none');

    }
    var lazyLoadInstance = new LazyLoad();
})


function popupAnnouncement($this) {
    let closedPopups = [];
    if (sessionStorage.getItem('closedPopups')) {
        $(".popup-wrapper").addClass('mfp-hide');

        closedPopups = JSON.parse(sessionStorage.getItem('closedPopups'));
    }

    if (closedPopups.indexOf($this.data('popup_id')) === -1) {
        $('#' + $this.attr('id')).show();
        let popupDelay = $this.data('popup_delay');

        setTimeout(function () {
            jQuery.magnificPopup.open({
                items: {src: '#' + $this.attr('id')},
                type: 'inline',
                callbacks: {
                    afterClose: function () {
                        closedPopups.push($this.data('popup_id'));
                        sessionStorage.setItem('closedPopups', JSON.stringify(closedPopups));
                        if ($this.next('.popup-wrapper').length > 0) {
                            popupAnnouncement($this.next('.popup-wrapper'));
                        }
                    }
                }
            }, 0);

            $this.css('display', 'block')
        }, popupDelay);
    } else {
        if ($this.next('.popup-wrapper').length > 0) {
            popupAnnouncement($this.next('.popup-wrapper'));
        }
    }
}


/*================================
 Fullscreen Page
 ==================================*/
$(window).on('load', function (event) {
    if ($('#full-view').length) {

        var requestFullscreen = function (ele) {
            if (ele.requestFullscreen) {
                ele.requestFullscreen();
            } else if (ele.webkitRequestFullscreen) {
                ele.webkitRequestFullscreen();
            } else if (ele.mozRequestFullScreen) {
                ele.mozRequestFullScreen();
            } else if (ele.msRequestFullscreen) {
                ele.msRequestFullscreen();
            } else {
                console.log('Fullscreen API is not supported.');
            }
        };

        var exitFullscreen = function () {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            } else {
                console.log('Fullscreen API is not supported.');
            }
        };

        var fsDocButton = document.getElementById('full-view');
        var fsExitDocButton = document.getElementById('full-view-exit');

        fsDocButton.addEventListener('click', function (e) {
            e.preventDefault();
            $('#full-view').addClass('d-none');
            $('#full-view-exit').removeClass('d-none');
            requestFullscreen(document.documentElement);
            $('body').addClass('expanded');
        });

        fsExitDocButton.addEventListener('click', function (e) {
            e.preventDefault();
            exitFullscreen();
            $('#full-view').removeClass('d-none');
            $('#full-view-exit').addClass('d-none');
            $('body').removeClass('expanded');
        });
    }

    $(document).bind('webkitfullscreenchange mozfullscreenchange fullscreenchange', function (e) {
        let currentState = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
        if (!currentState) {
            $('#full-view').removeClass('d-none');
            $('#full-view-exit').addClass('d-none');
        }

    });

    let top_scroll_btn = $('#btt-button');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            top_scroll_btn.addClass('show');
        } else {
            top_scroll_btn.removeClass('show');
        }
    });

    top_scroll_btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });
});













