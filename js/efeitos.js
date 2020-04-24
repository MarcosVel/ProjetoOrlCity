$(document).ready(function(){ //quando acessar o documento e estiver pronto, executará a função
    $("#logotipo").on("mouseover", function(){
      $("#banner h1").addClass("efeito");
    }).on("mouseout", function(){
      $("#banner h1").removeClass("efeito");
    });

    $("#input-search").on("focus", function(){
      $("li.search").addClass("ativo")
    }).on("blur", function(){  //blur para quando clicar fora da caixa (perder o foco)
      $("li.search").removeClass("ativo")
    });

    //para adicionar o carrousel
    $(".thumbnails").owlCarousel({
      loop:true,
      nav:true,
      autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
      //center:true,
      // navText: ["Anterior", "Próximo"],  //caso queira o escrito
      responsive: {
        0 :{
          items: 1
        },
        480:{
          items: 3
        },
        768:{
          items: 3
        },
        1000:{
          items: 4
        }
      }
    });


    // var owl = $(".thumbnails").data("owlCarousel");

    // $("#btn-news-prev").on("click", function(){
    //   owl.prev();
    // });

    // $("#btn-news-next").on("click", function(){
    //   owl.next();
    // });

    var owl = $('.owl-carousel');
    owl.owlCarousel();

    $('#btn-news-next').click(function() {
        owl.trigger('next.owl.carousel');
    })

    $('#btn-news-prev').click(function() {
        owl.trigger('prev.owl.carousel');
    });



    $("#page-up").on("click",function(event){
      $("html, body").animate({
          scrollTop:0
      }, 1000);
      event.preventDefault();   // para cancelar o clique padrão dentro do <a href="#"
   
    });

    //FAZENDO COM QUE O MENU MOBILE ABRE/FECHE NO CLIQUE UTILIZANDO BOOLEAN
    var aberto = false;

    //AULA 58
    $("#btn-bars").on("click", function(){
      if (!aberto) {
        $("header").addClass("open-menu"); //addClass = coloque ou retire a classe
        aberto = true;
      } else {
        $("header").removeClass("open-menu");
        aberto = false;
      } 
    });

    $("#menu-mobile-mask, .btn-close").on("click", function(){
      $("header").removeClass("open-menu");
    });


    //botão search
    $("#btn-search").on("click", function(){
      $("header").addClass("open-search"); //addClass = coloque ou retire a classe
      $("#input-search-mobile").focus();
    });

    $("section").on("click", function(){
      $("header").removeClass("open-search");
    })


  });