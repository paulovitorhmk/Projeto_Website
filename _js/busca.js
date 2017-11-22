(function($){
    
    $(document).ready(function(){
        $("#comer input[type=submit]:not(.disabled)").click(function(e){
            e.preventDefault();
            let estabelecimentos = $("#estabelecimentos").val();
            let restricoes = $("#restricoes").val();
            
            // Desabilita o Botao Buscar
            $("#comer input[type=submit]").addClass('disabled');
            // alert de teste
            // alert("teste:  Estabelecimentos" + estabelecimentos + " Restricoes " + restricoes);
            
            // Limpa os Resultados Anteriores
            $("#resultado").html('');
            
            // Busca o Json com os Dados dos Estabelecimentos e Restricoes
            $.ajax({
                type: "POST",
                url: "/_js/json/busca.json",
                dataType: "json",
                success: function (response) {
                    // alert("Details saved successfully!!!");
                    // console.log(response);
                
                    // Variavel de Apoio
                    var result = response.restricoes;
                
                    Object.keys(response).map( function(tipo){
                        // retorna as Chaves(keys) dos Objetos Filtrados
                        let filtrados = Object.keys( response[tipo] ).filter( (restri)=>{
                            // console.log('filter: ', -1 != restricoes.indexOf(restri))
                            return -1 != ( tipo == 'estabelecimentos' 
                                            ? estabelecimentos.indexOf(restri)
                                            : restricoes.indexOf(restri));
                        } )
                    
                        // Percorre / Mappeia as Chaves(keys) dos Objetos Filtrados
                        filtrados.map( function( item ){
                            // Aplica a Função createResultado para cara item do array dos objetos filtrados
                            response[tipo][item].map( function(loja){
                                $("#resultado").append(  createResultado(loja) );
                            });
                        });
                    });
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError);
                    $("#resultado").html( "<p class='h3 text-center'>Foi encontrado um erro inesperado, por favor tente novamente em instantes.</p>" );
                }
            });
            
            // Desabilita o Botao Buscar
            $("#comer input[type=submit].disabled").removeClass('disabled');
        });
    });
    
    
    function createResultado(obj){
        let html =  '<div class="col-sm-4">' +
                    '   <div class=\"panel panel-default\">' +
                    '       <div class="panel-heading">'+
                    '           <img src="' + obj.foto + '?text='+ obj.nome +'" alt="" class="img-responsive">'+
                    '       </div>'+
                    '       <div class="panel-body">'+
                    '           <p class="h3">' + obj.nome + '</p>'+
                    '           <p class="">' + obj.conteudo + '</p>'+
                    '       </div>'+
                    '       <div class="panel-footer">' + obj.endereco + '</div>'+
                    '   </div>'+
                    '</div>';
        return html;
    }
})(jQuery);


// Açúcar
// Sal
// Glúten
// Lactose
// Proteínas do Leite
// Outros