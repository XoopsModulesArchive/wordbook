<?php

/**
 * $Id: main.php v 1.0 8 May 2004 hsalazar Exp $
 * Module: Wordbook - a multicategory glossary
 * Version: v 1.00
 * Release Date: 8 May 2004
 * Author: hsalazar
 * Licence: GNU
 */

// Informa��es do m�dulo
// O nome deste m�dulo
global $xoopsModule;
define("_MI_WB_MD_NAME", "Dicion�rio");

// Uma breve descri��o deste m�dulo
define("_MI_WB_MD_DESC", "Um gloss�rio de multicategoria");

// Sub menus no bloco principal
define("_MI_WB_SUB_SMNAME1", "Enviar uma entrada");
define("_MI_WB_SUB_SMNAME2", "Solicitar uma defini��o");
define("_MI_WB_SUB_SMNAME3", "Buscar uma defini��o");

define("_MI_WB_RANDOMTERM", "Dicion�rio - Termo Aleat�rio");

// Uma breve descri��o deste m�dulo
define("_MI_WB_ALLOWSUBMIT", "1. Os usu�rios podem enviar entradas?");
define("_MI_WB_ALLOWSUBMITDSC", "Se configurado para 'Sim', os usu�rios ter�o acesso ao formul�rio de envio");

define("_MI_WB_ANONSUBMIT", "2. Os convidados podem enviar entradas?");
define("_MI_WB_ANONSUBMITDSC", "Se configurado para 'Sim', os convidados ter�o acesso ao formul�rio de envio");

define("_MI_WB_DATEFORMAT", "3. Em que formato a data dever� aparecer?");
define("_MI_WB_DATEFORMATDSC", "Utilize a parte final do arquivo language/english/global.php para selecionar o estilo a ser mostrado. Examplo: 'd-M-Y H:i' traduzido para '23-Mar-2004 22:35'");

define("_MI_WB_PERPAGE", "4. Numero de entradas por p�gina (Lado administrativo)?");
define("_MI_WB_PERPAGEDSC", "N�mero de entradas que ser�o mostradas cada vez que a tabela mostrar as entradas ativadas no lado administrativo.");

define("_MI_WB_PERPAGEINDEX", "5. N�mero de entradas por p�gina (Lado do usu�rio)?");
define("_MI_WB_PERPAGEINDEXDSC", "N�mero de entradas que ser�o mostradas em cada p�gina no lado administrativo do m�dulo.");

define("_MI_WB_AUTOAPPROVE", "6. Aprovar as entradas automaticamente?");
define("_MI_WB_AUTOAPPROVEDSC", "Se configurado para 'Sim', ser�o publicadas as entradas enviadas sem a interven��o do administrador.");

define("_MI_WB_MULTICATS", "7. Voc� deseja ter categorias de gloss�rios?");
define("_MI_WB_MULTICATSDSC", "Se configurado para 'Sim', ser� permitido voc� ter categorias de glossarios. Se configurado para n�o, voc� ter� uma �nica categoria automatica.");

define("_MI_WB_CATSINMENU","8. As categorias deve ser mostradas no menu?");
define("_MI_WB_CATSINMENUDSC","Se configurado para 'Sim', se voc� deseja links para as categorias no menu principal.");

define("_MI_WB_CATSPERINDEX","9. N�mero de categorias por p�gina (Lado administrativo)?");
define("_MI_WB_CATSPERINDEXDSC","Isto definir� quantas categorias ser�o mostradas na p�gina index.");

define("_MI_WB_ALLOWADMINHITS", "10. Os acessos do administrador ser�o incluidos na contagem?");
define("_MI_WB_ALLOWADMINHITSDSC", "Se configurado para 'Sim', o contador ser� acrescido a cada entrada do administrador.");

define("_MI_WB_MAILTOADMIN", "11. Enviar email para o administrador a cada novo envio?");
define("_MI_WB_MAILTOADMINDSC", "Se configurado para 'Sim', o administrador receber� um email para toda a entrada enviada.");
define("_MI_WB_RANDOMLENGTH", "12. Cumprimentos da string a mostrar nas defini��es rand�mica?");
define("_MI_WB_RANDOMLENGTHDSC", "Quantos caracteres voc� deseja mostrar nas caixas de termo rand�mico, tanto na p�gina principal como no bloco? (Default: 150)");

define("_MI_WB_LINKTERMS", "13. Mostar links para outro gloss�rio de termos nas defini��es?");
define("_MI_WB_LINKTERMSDSC", "Se configurado para 'Sim', automaticamente suas defini��es ser�o linkadas com aquelas que voc� j� tem em seus gloss�rios.");

// Nomes dos itens do menu de administra��o
define("_MI_WB_ADMENU1", "Index");
define("_MI_WB_ADMENU2", "Categorias");
define("_MI_WB_ADMENU3", "Entradas");
define("_MI_WB_ADMENU4", "Blocos");
define("_MI_WB_ADMENU5", "Ir para o m�dulo");
//mondarse
define("_MI_WB_ADMENU6", "Importar");

//Nomes dos blocos e bloco de informa��o
define("_MI_WB_ENTRIESNEW", "Dicion�rio - Termos Recentes");
define("_MI_WB_ENTRIESTOP", "Dicion�rio - Termos mais Lidos");

// added in version 1.17
define("_MI_WB_ADMENU8", "Enviados");
define("_MI_WB_ADMENU10", "Sobre");


?>
