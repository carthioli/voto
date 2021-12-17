<?php
    class Eleitor
    {
        public function __construct( string $nome=null, int $documento=0)
        {
            $this->nome = $nome;
            $this->documento = $documento;
        }
        public function insereEleitor( $dados )
        {
            $link = conectar();

            $insert = "INSERT INTO eleitor( nome, numero_documento ) VALUES ( '{$dados[0]}', '{$dados[1]}' )";
            $inserted = pg_query( $link, $insert ); 
            
            if ( $inserted ){
                return $inserted;
                header( 'location: formulario.php' );
                $_SESSION['valida'] = 1;
            }else{
                echo "não";
            }
        }
    }
?>    