/**
 * Theme's main JS.
 *  
 * @license https://opensource.org/licenses/MIT MIT
 * @author Vee W.
 */


// jQuery on DOM is ready. ------------------------------------------------------------------------------------------------
jQuery(document).ready(function($) {

    $('html').removeClass('no-js').addClass('js');

    new WOW().init();
    $('#home_page_portfolio_slider').slick({
        infinite: true,
        slidesToShow: 3,
        prevArrow:"<svg class='left' width=\"50\" height=\"50\" viewBox=\"0 0 50 50\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M36.6667 26.25L19.4792 26.25L26.25 33.0208L24.8667 34.5833L15.4917 25.2083L24.8667 15.8333L26.25 17.3958L19.4792 24.1667L36.6667 24.1667L36.6667 26.25ZM5.41667 25.2083C5.41667 22.6092 5.9286 20.0356 6.92323 17.6344C7.91785 15.2331 9.37569 13.0513 11.2135 11.2135C13.0513 9.37568 15.2332 7.91784 17.6344 6.92321C20.0356 5.92859 22.6093 5.41666 25.2083 5.41666C27.8074 5.41666 30.381 5.92859 32.7823 6.92321C35.1835 7.91784 37.3653 9.37568 39.2032 11.2135C41.041 13.0513 42.4988 15.2332 43.4935 17.6344C44.4881 20.0356 45 22.6093 45 25.2083C45 30.4574 42.9148 35.4915 39.2032 39.2032C35.4915 42.9148 30.4574 45 25.2083 45C19.9593 45 14.9252 42.9148 11.2135 39.2032C7.50186 35.4915 5.41667 30.4574 5.41667 25.2083ZM7.50001 25.2083C7.50001 29.9049 9.3657 34.4091 12.6867 37.73C16.0076 41.051 20.5118 42.9167 25.2083 42.9167C29.9049 42.9167 34.4091 41.051 37.73 37.73C41.051 34.4091 42.9167 29.9049 42.9167 25.2083C42.9167 20.5118 41.051 16.0076 37.73 12.6866C34.4091 9.36569 29.9049 7.49999 25.2083 7.49999C20.5118 7.49999 16.0076 9.36569 12.6867 12.6866C9.36571 16.0076 7.50001 20.5118 7.50001 25.2083Z\" fill=\"white\"/></svg>\n",
        nextArrow:"<svg class='right' width=\"50\" height=\"50\" viewBox=\"0 0 50 50\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M13.3333 23.75H30.5208L23.75 16.9792L25.1333 15.4167L34.5083 24.7917L25.1333 34.1667L23.75 32.6042L30.5208 25.8333H13.3333V23.75ZM44.5833 24.7917C44.5833 27.3907 44.0714 29.9644 43.0768 32.3656C42.0822 34.7668 40.6243 36.9487 38.7865 38.7865C36.9487 40.6243 34.7668 42.0822 32.3656 43.0768C29.9644 44.0714 27.3907 44.5833 24.7917 44.5833C22.1926 44.5833 19.619 44.0714 17.2177 43.0768C14.8165 42.0822 12.6347 40.6243 10.7968 38.7865C8.95902 36.9487 7.50117 34.7668 6.50655 32.3656C5.51193 29.9644 5 27.3907 5 24.7917C5 19.5426 7.08519 14.5085 10.7968 10.7968C14.5085 7.08519 19.5426 5 24.7917 5C30.0407 5 35.0748 7.08519 38.7865 10.7968C42.4981 14.5085 44.5833 19.5426 44.5833 24.7917ZM42.5 24.7917C42.5 20.0951 40.6343 15.5909 37.3133 12.27C33.9924 8.94903 29.4882 7.08333 24.7917 7.08333C20.0951 7.08333 15.5909 8.94903 12.27 12.27C8.94903 15.5909 7.08333 20.0951 7.08333 24.7917C7.08333 29.4882 8.94903 33.9924 12.27 37.3134C15.5909 40.6343 20.0951 42.5 24.7917 42.5C29.4882 42.5 33.9924 40.6343 37.3133 37.3134C40.6343 33.9924 42.5 29.4882 42.5 24.7917Z\" fill=\"white\"/></svg>\n",
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $(".link-to-bottom").on('click', function (e) {
        let hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 700);
        e.preventDefault();
    });


    $('#technical-task').change( (event) => {
        const reader = new FileReader();
        const file = event.target.files[0];
        reader.onloadend = () => {
            $('#technical-task').value = reader.result;
            console.log(event.target.files[0].name)
            $('.btn-add-file').text(event.target.files[0].name);
            $('.input-file-wrapper').addClass('fileAdded');
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    });

    $('.removeFile').click( function () {
        $('#technical-task').replaceWith(  $('#technical-task').val('').clone( true ) );
        $('.input-file-wrapper').removeClass('fileAdded');
        $('.btn-add-file').text('прикріпити файл');
    })

    let stepperCounter = 0;

    $('#brief-form .next-step').click( function () {
        const briefSteps = [$('.brief-form-steps .first-step'),$('.brief-form-steps .second-step'),$('.brief-form-steps .third-step')];
        const stepIndex = briefSteps.findIndex((item) => item.hasClass('active'));
        briefFormStepper(briefSteps, stepIndex, 'next');
    });

    $('#brief-form .back-step').click( function () {
        const briefSteps = [$('.brief-form-steps .first-step'),$('.brief-form-steps .second-step'),$('.brief-form-steps .third-step')];
        const stepIndex = briefSteps.findIndex((item) => item.hasClass('active'));
        briefFormStepper(briefSteps, stepIndex, 'back');
    });

    function briefFormStepper(formsArray, indexForm, type){
        if(type === 'next'){
            formsArray.forEach( (item, index) => {
                if(indexForm === index){
                    formsArray[indexForm].removeClass('active');
                    formsArray[indexForm + 1].addClass('active');
                    hideStepperButton(indexForm + 1);
                }
            });
        } else if(type === 'back'){
            formsArray.forEach( (item, index) => {
                if(indexForm === index){
                    formsArray[indexForm].removeClass('active');
                    formsArray[indexForm - 1].addClass('active');
                    hideStepperButton(indexForm - 1);
                }
            });
        }
    }

    function hideStepperButton(indexForm) {
        stepperCounter = indexForm + 1;
        $('.active-form-step .step-number').text(stepperCounter);
        const btnBack = $('.back-step');
        const btnNext = $('.next-step');

        if(indexForm === 0){
            btnBack.css('display','none');
        }
        if(indexForm === 1){
            btnBack.css('display','flex');
            btnNext.css('display','flex');
        }
        if(indexForm === 2){
            btnNext.css('display','none');
        }
    }

    hideStepperButton(0);

    $('.form-wrapper label input,.form-wrapper label textarea').focus(function () {
        $(this).parents('.form-item').addClass('has-label');
    }).blur(function () {
        if ($(this).val() === '') {
            $(this).parents('.form-item').removeClass('has-label');
        }
    });

    $('.form-wrapper label').each(function () {
        if ($(this).find('input').val()) {
            $(this).addClass('has-label');
        }

        if ($(this).find('textarea').val()) {
            $(this).addClass('has-label');
        }
    });


    $('.wpcf7-checkbox .wpcf7-list-item label .wpcf7-list-item-label').click( function (e) {
        $(this).parent().toggleClass( "checked" );
    });

    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $('.page-header.page-header-sitebrand-topbar').addClass('header-white');
        } else {
            $('.page-header.page-header-sitebrand-topbar').removeClass('header-white');
        }
    });

    $(document).load( function () {
        if ($(window).scrollTop() > 100) {
            $('.page-header.page-header-sitebrand-topbar').addClass('header-white');
        } else {
            $('.page-header.page-header-sitebrand-topbar').removeClass('header-white');
        }
    })

    $('.toggle-navigation').click( function () {
       $(this).toggleClass('btn-toggle');
       $('.main-navigation').toggleClass('menu-toggle');
       $('.overlay').toggleClass('active');
    });

    $('.btn-leave-application').click( function () {
        $('.main-navigation').removeClass('menu-toggle');
        $('.toggle-navigation').removeClass('btn-toggle');
        $('.overlay').addClass('active');
        $('#application-form').addClass('active');
    });

    $('.btn-complete-brief').click( function () {
        $('.main-navigation').removeClass('menu-toggle');
        $('.toggle-navigation').removeClass('btn-toggle');
        $('.overlay').addClass('active');
        $('#brief-form').addClass('active');
    });

    $('.overlay').click( () => {
        $('.overlay').removeClass('active');
        $('#brief-form').removeClass('active');
        $('#application-form').removeClass('active');
        $('.main-navigation').removeClass('menu-toggle');
        $('.toggle-navigation').removeClass('btn-toggle');
    })

});
