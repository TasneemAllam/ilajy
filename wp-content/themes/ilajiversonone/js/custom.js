$(document).ready(function(){
    var $searchToggle = 0 ,$menuToggle = 0 , $langToggle = 0;
    $('#dropdown1').dropdown({gutter : 0});
    $('#dropdown2').dropdown({gutter : 0});
    $('body').on('click','#search-btn',function(e){
        e.preventDefault();
        if($searchToggle == 0){
            $searchToggle = 1;
            $('#top-search').addClass('open').find('input[type=\"text\"]').focus();
            
        }
        return false;
    }); 
    $('body').on('click','#close-search-btn',function(e){
        e.preventDefault();
        if($searchToggle == 1){
            $searchToggle = 0;
            $('#top-search').removeClass('open');
        }
        return false;
    });
    $('body').on('click','#toggle-menu',function(e){
        e.preventDefault();
        if($menuToggle == 0){
            $menuToggle = 1;
            $('#main-menu').addClass('open');
        }else{
            $menuToggle = 0;
            $('#main-menu').removeClass('open');
        }
        return false;
    });
    $('body').on('click','#toplang',function(e){
        e.preventDefault();
        if($langToggle == 0){
            $langToggle = 1;
            $('#toplang').addClass('open');
        }else{
            $langToggle = 0;
            $('#toplang').removeClass('open');
        }
        return false;
    });
    enquire.register("screen and (min-width:60em)", {
        match: function () {
            $.stellar({
                horizontalScrolling: false,
                verticalOffset: 40
            });
        }, unmatch: function () {
            $.stellar('destroy');
        }
    });
});