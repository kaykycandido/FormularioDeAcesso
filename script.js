function abrePopUp(){
                        //URL(Conteudo),Nome da janela, coordenadas da tela, true or false
    var popUp=windown.open("","popUp","width=400, height=270, top=100, left=710");

    ////////////////////////////////
    //Conteudo do PopUp
    varConteudo  =  "<strong>PopUp Aberto </strong><br/><br/> ";
    varConteudo += "<label for='idtextoPopup'>";
    varConteudo += "Texto da janela principal</label>";
    /////
    varConteudo += "<input type='text' id='idtextoPopup' ";
    varConteudo += "name='nometextoPopup' value='' /> <br/><br/>";
    /////
    varConteudo += "<label>Texto janela popup</label>";
    varConteudo += "<input type='text' id='idSegundotextoPopup' ";
    varConteudo += "name='nomeSegundoTextoPopup' value='' /> <br /> <br />";
    ///Botao no popUp
    varConteudo += "<input type='button' id='botaoFechar' ";
    varConteudo += "name='botaoFechar' value='Fechar popup JULIUS' ";
    varConteudo += "onclick='window.close()' />";
    //Mostrando
    popUp.document.write(varConteudo);        
}

