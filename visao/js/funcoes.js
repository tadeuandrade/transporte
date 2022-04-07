/* FUNÇÕES JAVASCRIPT*/

function showAjax(codigo, campo, link) {

    if (codigo == "") {
        document.getElementById(campo).innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(campo).innerHTML = this.responseText;                
            }
        };
        xmlhttp.open("GET",link,true);
        xmlhttp.send();
    }
}


function submitForm(formulario,link){  
  
  if( $("#"+formulario).valid())
    EnviaForm(formulario,link);
}

function Envia(link)
{    
  document.getElementById("form").action = link;
  document.getElementById("form").submit();     

}

function EnviaForm(formulario,link)
{    
  //alert(link);
  document.getElementById(formulario).action = link;
  document.getElementById(formulario).submit();     

}

function submitEnter(evt,link)
{
  
    var key_code = evt.keyCode  ? evt.keyCode  :
                       evt.charCode ? evt.charCode :
                       evt.which    ? evt.which    : void 0;


    if (key_code == 13)
    {
        Envia(link);
        //Envia(link);

    }
}
function confirmacao(frase,url) {
    var resposta= confirm(frase);
  if (resposta){
        Envia(url);
  }
}

function mascara(o, f) {
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}


function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}


function soNumeros(campo) { //Somente Números
    return campo.replace(/\D/g, "")
}


function telefone(v) { //Máscara para telefones
    v = v.replace(/\D/g, "") //Remove tudo o que não é dígito
    v = v.replace(/^(\d\d)(\d)/g, "($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d{4})(\d)/, "$1-$2") //Coloca hífen entre o quarto e o quinto dígitos
    return v
}


function inscricao_estadual_mg(v) { //Máscara para inscricao em minas
    v = v.replace(/\D/g, "") //Remove tudo o que não é dígito
    v = v.replace(/^(\d{3})(\d)/, "$1.$2") //Coloca ponto entre o segundo e o terceiro dígitos
    v = v.replace(/^(\d{3})\.(\d{3})(\d)/, "$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
    v = v.replace(/\.(\d{3})(\d)/, ".$1/$2") //Coloca uma barra entre o oitavo e o nono dígitos

    return v
}

function cnpj(v) { //Máscara para CNPJ
    v = v.replace(/\D/g, "") //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/, "$1.$2") //Coloca ponto entre o segundo e o terceiro dígitos
    v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
    v = v.replace(/\.(\d{3})(\d)/, ".$1/$2") //Coloca uma barra entre o oitavo e o nono dígitos
    v = v.replace(/(\d{4})(\d)/, "$1-$2") //Coloca um hífen depois do bloco de quatro dígitos
    return v
}

/**
* Primeira letra de cada palavra em maiúscula
**/
function maiuscula(id) {
    /*
     * Função transforma as primeiras letras de cada palavra digitada em Maiúscula
     */
    var palavras = document.getElementById(id).value; //pega o valor do input
    // var palavras =  $(id).getValue();
    palavras = palavras.split(""); //separa o mesmo em palavras
    var tmp = "";

    //altera o vetor de palavras
    for (i = 0; i < palavras.length; i++) {
        //percore as palavras
        if (palavras[i - 1]) {
            if (palavras[i - 1] == " ") {
                palavras[i] = palavras[i].replace(palavras[i], palavras[i].toUpperCase());
            }
            else {
                palavras[i] = palavras[i].replace(palavras[i], palavras[i].toLowerCase());
            }
        }
        else {
            palavras[i] = palavras[i].replace(palavras[i], palavras[i].toUpperCase());
        }
        tmp += palavras[i];
    }
    tmp = tmp.replace(' Da ', ' da ');
    tmp = tmp.replace(' De ', ' de ');
    tmp = tmp.replace(' Di ', ' di ');
    tmp = tmp.replace(' Do ', ' do ');

    tmp = tmp.replace(' Das ', ' das ');
    tmp = tmp.replace(' Des ', ' des ');
    tmp = tmp.replace(' Dis ', ' dis ');
    tmp = tmp.replace(' Dos ', ' dos ');

    tmp = tmp.replace(' A ', ' a ');
    tmp = tmp.replace(' E ', ' e ');
    tmp = tmp.replace(' I ', ' i ');
    tmp = tmp.replace(' O ', ' o ');
    tmp = tmp.replace(' U ', ' u ');

    document.getElementById(id).value = tmp;
    //$(id).setValue(tmp);
}


function MascaraCpf(campo, teclapres)
			{
				var tecla = teclapres.keyCode;
				var vr = new String(campo.value);
				vr = vr.replace(".", "");
				vr = vr.replace("/", "");
				vr = vr.replace("-", "");
				tam = vr.length + 1;
				if (tecla != 14)
				{
					if (tam == 4)
						campo.value = vr.substr(0, 3) + '.';
					if (tam == 7)
						campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 6) + '.';
					if (tam == 11)
						campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 3) + '.' + vr.substr(7, 3) + '-' + vr.substr(11, 2);
				}
			}

 function somenteNumeros(campo){
 var digits="0123456789"
 var campo_temp
     for (var i=0;i<campo.value.length;i++){
         campo_temp=campo.value.substring(i,i+1)
         if (digits.indexOf(campo_temp)==-1){
             campo.value = campo.value.substring(0,i);
         }
     }
 }
 
function MascaraCep(Campo, teclapres)
			{
				var tecla = teclapres.keyCode;
				var vr = new String(Campo.value);
				vr = vr.replace("-", "");
				tam = vr.length + 1;
				if (tecla != 8)
				{
					if (tam == 6)
						Campo.value = vr.substr(0, 5) + '-' + vr.substr(5, 5);
				}
			}



function validaFormDadosPessoais(){
        if(document.form.endereco.value == "")
        {
           alert("Necessário preencher campo Logradouro !");
           document.form.endereco.focus();
           return false;
        }

        else if(document.form.numero.value == "")
        {
           alert("Necessário preencher campo Numero !");
           document.form.numero.focus();
           return false;
        }
        
       
        
        else if(document.form.bairro.value == "")
        {
           alert("Necessário preencher campo Bairro !");
           document.form.bairro.focus();
           return false;
        }
        
        else if(document.form.estado.value == "")
        {
           alert("Necessário preencher campo Estado !");
           document.form.estado.focus();
           return false;
        }
        
        else if(document.form.cidade.value == "")
        {
           alert("Necessário preencher campo Cidade !");
           document.form.cidade.focus();
           return false;
        }
        
        else if(document.form.cep.value == "")
        {
           alert("Necessário preencher campo Cep !");
           document.form.cep.focus();
           return false;
        }
        
        else if(document.form.telResidencial.value == "")
        {
           alert("Necessário preencher campo Telefone Residêncial !");
           document.form.telResidencial.focus();
           return false;
        }

        else if(document.form.celular.value == "")
        {
           alert("Necessário preencher campo Celular !");
           document.form.celular.focus();
           return false;
        }

        
        else if(document.form.rg.value == "")
        {
           alert("Necessário preencher campo RG !");
           document.form.rg.focus();
           return false;
        }
        var DataNasc = document.form.dataNasc_dia.value+"/"+document.form.dataNasc_mes.value+"/"+document.form.dataNasc_ano.value;
        var resultado = VerificaData(DataNasc);
        if(resultado == false)
                     return false;

        return true;
}

/*FUNÇÂO DEIXA TODO O TEXTO DIGITADO EM MAIUSCULO*/

function naoPermiteAcento(obj)
{
    var str = new String(obj.value);
    var acentos =   new String('Ã Â´Ã¢`Ãª~Ã´^Ã»Ã£ÃµÃ¡Ã©Ã¨Ã­Ã¬Ã³ÃºÃ§Ã¼Ã€Ã‚ÃŠÃ”Ã›ÃƒÃ•ÃÃ‰ÃˆÃÃŒÃ“ÃšÃ™Ã‡ÃœÃ±Ã‘Ã½Ã');
    var SemAcento = new String('a a e o uaoaeeiioucuAAEOUAOAEEIIOUUCUnNyY');
    var c = new String();
    var i = new Number();
    var x = new Number();
    var res = '';

    for (i = 0; i<str.length; i++){
        c = str.substring(i,i+1);
        for (x=0; x< acentos.length; x++){
            if (acentos.substring(x,x+1) == c){
                c = SemAcento.substring(x,x+1);
            }
        }
        res += c;
    }
    obj.value = res.toUpperCase();
}

function mascaraData(campoData){
              var data_nascimento = campoData.value;
              if (data_nascimento.length == 2){
                  data_nascimento = data_nascimento + '/';
                  document.forms[0].data_nascimento.value = data_nascimento;
      return true;              
              }
              if (data_nascimento.length == 5){
                  data_nascimento = data_nascimento + '/';
                  document.forms[0].data_nascimento.value = data_nascimento;
                  return true;
              }
         }

function mascaraDataVencimento(campoDt_vencimento){
              var dt_vencimento = campoDt_vencimento.value;
              if (dt_vencimento.length == 2){
                  dt_vencimento = dt_vencimento + '/';
                  document.forms[0].dt_vencimento.value = dt_vencimento;
      return true;              
              }
              if (dt_vencimento.length == 5){
                  dt_vencimento = dt_vencimento + '/';
                  document.forms[0].dt_vencimento.value = dt_vencimento;
                  return true;
              }
         }
		 
function mascaraDataInicio(campoDt_inicio){
              var dt_inicio = campoDt_inicio.value;
              if (dt_inicio.length == 2){
                  dt_inicio = dt_inicio + '/';
                  document.forms[0].dt_inicio.value = dt_inicio;
      return true;              
              }
              if (dt_inicio.length == 5){
                  dt_inicio = dt_inicio + '/';
                  document.forms[0].dt_inicio.value = dt_inicio;
                  return true;
              }
         }

function mascaraDataAssinatura(campoDt_assinatura){
              var dt_assinatura = campoDt_assinatura.value;
              if (dt_assinatura.length == 2){
                  dt_assinatura = dt_assinatura + '/';
                  document.forms[0].dt_assinatura.value = dt_assinatura;
      return true;              
              }
              if (dt_assinatura.length == 5){
                  dt_assinatura = dt_assinatura + '/';
                  document.forms[0].dt_assinatura.value = dt_assinatura;
                  return true;
              }
         }
		 

function mascara_hora(hora){ 
              var myhora = ''; 
              myhora = myhora + hora; 
              if (myhora.length == 2){ 
                  myhora = myhora + ':'; 
                  document.forms[0].hora.value = myhora; 
              } 
              
          } 
		  
function moeda(z){  
		v = z.value;
		v=v.replace(/\D/g,"")  //permite digitar apenas números
	v=v.replace(/[0-9]{12}/,"inválido")   //limita pra máximo 999.999.999,99
	v=v.replace(/(\d{1})(\d{8})$/,"$1.$2")  //coloca ponto antes dos últimos 8 digitos
	v=v.replace(/(\d{1})(\d{5})$/,"$1.$2")  //coloca ponto antes dos últimos 5 digitos
	v=v.replace(/(\d{1})(\d{1,2})$/,"$1,$2")	//coloca virgula antes dos últimos 2 digitos
		z.value = v;
	}


function abrir(URL) {

  var x = parseInt((screen.width-1024)/2);
  var y = parseInt((screen.height-768)/2);

  var width = 1024;
  var height = 768;

  var left = 00;
  var top = 00;

  var win = open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=yes, fullscreen=no');

  win.moveTo(x, y);
  win.focus();

}

function DataHora(evento, objeto){
  var keypress=(window.event)?event.keyCode:evento.which;
  campo = eval (objeto);
  if (campo.value == '00/00/0000 00:00:00')
  {
    campo.value=""
  }
 
  caracteres = '0123456789';
  separacao1 = '/';
  separacao2 = ' ';
  separacao3 = ':';
  conjunto1 = 2;
  conjunto2 = 5;
  conjunto3 = 10;
  if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (10))
  {
    if (campo.value.length == conjunto1 )
    campo.value = campo.value + separacao1;
    else if (campo.value.length == conjunto2)
    campo.value = campo.value + separacao1;
    else if (campo.value.length == conjunto3)
    campo.value = campo.value + separacao2;
    else if (campo.value.length == conjunto4)
    campo.value = campo.value + separacao3;
    else if (campo.value.length == conjunto5)
    campo.value = campo.value + separacao3;
  }
  else
    event.returnValue = false;
}
       
/* DESENVOLVIDO POR GABRIEL HENRIQUE VICENTE
E-MAIL: gabriel.henric@gmail.com*/

