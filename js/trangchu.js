

$( document ).ready(function() {
    $('#showCollapse').click(function(){
        $(".collapse-handmade").slideToggle("slow");
    });

     $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots:false
      });
      
});
