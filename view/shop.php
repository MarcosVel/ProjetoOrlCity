<?php include_once("header.php");?>

    <section>       <!--CORPO DO SITE-->
      
      <div class="container" id="destaque-produtos-container" ng-controller="destaque-controller">

        <div id="destaque-produtos" class="owl-carousel owl-theme">
        
            <div class="item" ng-repeat="produto in produtos">

                <div class="row">
                    <div class="col-sm-6 col-imagem">
                        <img src="img/produtos/{{produto.foto_principal}}" id="imgCelular" alt="{{produto.nome_prod_longo}}">
                    </div>
                    <div class="col-sm-6 col-descricao">
                        <h2>{{produto.nome_prod_longo}}</h2>
                        <div class="box-valor">
                            <div class="text-noboleto text-arial-cinza">no boleto</div>
                            <div class="text-por text-arial-cinza">por</div>
                            <div class="text-reais text-roxo">R$</div>
                            <div class="text-valor text-roxo">{{produto.preco}}</div>
                            <div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
                            <div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
                            <div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>                            
                        </div>
                        <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"> compre agora</i></a>
                    </div>
                </div>
            
            </div>            

        </div>

        <button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
        <button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>

      </div>   

      <div id="promocoes" class="container">

        <div class="row">
            <div class="col-md-2">

                <div class="box-promocao box-1">
                    <p>escolha por desconto</p>
                </div>

            </div>
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-3">                                
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">40</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-md-3">                                
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">60</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-md-3">                                
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">80</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-md-3">                                
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">85</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

      </div>

      <div id="mais-buscados" class="container">

        <div class="text-center title-default-roxo">
          <h2>os mais buscados<hr></h2>
        </div>

        <div class="row">

            <div class="col-md-3">
                <div class="box-produto-info">
                    <a href="#">
                        <img src="img/produtos/iphone.jpg" alt="iPhone">
                        <div class="box-produto-descr">
                            <h3>Iphone 6 iOS 12 Desbloqueado</h3>                        
                            <div class="estrelas" data-score="3"></div> <!--data-score é a quantidade de estrelas-->
                            <div class="text-qtd-reviews">(300)</div>
                            <div class="text-valor">R$ 2000,00</div>
                            <div class="text-parcelado">10x de R$ 200,00 sem juros</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box-produto-info">
                    <a href="#">
                        <img src="img/produtos/iphone.jpg" alt="iPhone">
                        <div class="box-produto-descr">
                            <h3>Iphone 6 iOS 12 Desbloqueado</h3>                        
                            <div class="estrelas" data-score="5"></div>
                            <div class="text-qtd-reviews">(300)</div>
                            <div class="text-valor">R$ 2000,00</div>
                            <div class="text-parcelado">10x de R$ 200,00 sem juros</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box-produto-info">
                    <a href="#">
                        <img src="img/produtos/iphone.jpg" alt="iPhone">
                        <div class="box-produto-descr">
                            <h3>Iphone 6 iOS 12 Desbloqueado</h3>                        
                            <div class="estrelas" data-score="4.5"></div>
                            <div class="text-qtd-reviews">(300)</div>
                            <div class="text-valor">R$ 2000,00</div>
                            <div class="text-parcelado">10x de R$ 200,00 sem juros</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box-produto-info">
                    <a href="#">
                        <img src="img/produtos/iphone.jpg" alt="iPhone">
                        <div class="box-produto-descr">
                            <h3>Iphone 6 iOS 12 Desbloqueado</h3>                        
                            <div class="estrelas" data-score="2.5"></div>
                            <div class="text-qtd-reviews">(300)</div>
                            <div class="text-valor">R$ 2000,00</div>
                            <div class="text-parcelado">10x de R$ 200,00 sem juros</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

      </div> <!--FIM #mais-buscados -->
      
      
    </section>
    
<?php include_once("footer.php");?>

<script>
angular.module("shop", []).controller("destaque-controller", function($scope, $http){

    $scope.produtos = [];

    var initCarousel = function(){

        $("#destaque-produtos").owlCarousel({
            autoplay: 5000,
            items:1,
            singleItem: true
        });

        var owl = $("#destaque-produtos");

        owl.owlCarousel();

        $('#btn-destaque-prev').on("click", function(){
        owl.trigger('prev.owl.carousel');
        });

        $('#btn-destaque-next').on("click", function(){
        owl.trigger('next.owl.carousel');
        });

    }

    $http({
        method: 'GET',
        url: 'produtos'
    }).then(function successCallback(response) {
        
        $scope.produtos = response.data;

        setTimeout(initCarousel, 1000);

    }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
    });

    /*
    $scope.produtos.push({
        nome_prod_longo:"Smartphone Motorola Moto X Play Dual Chip Desbloqueado Android 5.1",
        foto_principal:"moto-x.png",
        preco:"1.259",
        centavos:"10",
        parcelas:8,
        parcela:"174,88",
        total:"1.399,00"
    });

    $scope.produtos.push({
        nome_prod_longo:"iPhone",
        foto_principal:"iphone.jpg",
        preco:"1.259",
        centavos:"10",
        parcelas:8,
        parcela:"174,88",
        total:"1.399,00"
    });
    */

});

$(function(){

    $(".estrelas").each(function(){

        $(this).raty({
            starHalf     :  "lib/raty/lib/images/star-half.png",
            starOff      :  "lib/raty/lib/images/star-off.png",
            starOn       :  "lib/raty/lib/images/star-on.png",
            score        :  parseFloat($(this).data("score")) //faz com que as estrelas sendo exibidas de acordo com a nota de cada
        });

    });

});


    // $(function(){

    //     $("#destaque-produtos").owlCarousel({
    //         autoPlay: 5000,
    //         items : 1,
    //         singleItem: true
    //     });

    //     var owlDestaque = $('.owl-carousel');
    //     owlDestaque.owlCarousel();

    //     $('#btn-destaque-next').click(function() {
    //         owlDestaque.trigger('next.owl.carousel');
    //     })

    //     $('#btn-destaque-prev').click(function() {
    //         owlDestaque.trigger('prev.owl.carousel');
    //     });

    // });
</script>