$(function(){

    
    $(".print-tab .print-tab-menu > li").click(function(event){
        var $this = $(this),
            $data = $this.data('tab-menu'),
            $tabID = $this.parent().parent().data('tab-id');
        if(!$(this).hasClass("active")){

            window.location.hash = $data;
            
            $('.print-tab[data-tab-id="' + $tabID + '"] .print-tab-menu > li').removeClass('active');
            $(this).addClass('active');
            
            $('.print-tab[data-tab-id="' + $tabID + '"] .print-tab-content > div.view').removeClass('view');
            $('.print-tab[data-tab-id="' + $tabID + '"] .print-tab-content > div[data-tab-content="' + $data + '"]').addClass('view');
        }
    });
});