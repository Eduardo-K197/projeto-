<?
	$ usuario = "Eduardo" ;
	$ senha = "353331499Eduardo" ;
	$ dbname = "cadastro" ;
	$ servirdor = "localhost" ;

	$ conexao = mysql_connect ( $ usuario , $ senha, $ servirdor ) or die ( "Não pode conectar: ​​" . mysql_error ());
	mysql_select_db ( $ dbname , $ conexao );
	mysql_set_charset ( 'utf8' );

	$ Dados = data ( "Ymd" );
	$ Hora = data ( "H:i:s" );

	session_start ();
	$ Usuario = $ _SESSION [ "usuarioEduardo" ];
?>