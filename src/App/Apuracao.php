<?php
      namespace Carlos\Voto\App;

      use Carlos\Voto\App\Conexao;
      use Carlos\Voto\App\Candidato_voto;
        
      
      class Apura
      {
        public function __construct()
        {
          $link = ( new Conexao )->conecta();
        }
        public function totalVotos()
        {
          $query = pg_query("SELECT count(id_candidato) AS id_candidato
                             FROM candidato_voto");
          $result = pg_fetch_assoc( $query );
          
          if( isset( $_POST['busca'] ) ){
            echo json_encode(array('result' => $result['id_candidato']) ); 
          }
                                          
        }
        public function totalVotoCandidatos()
        {
          $query = pg_query("SELECT ca.id, ca.nome, count(id_candidato) AS id_candidato
                             FROM candidato AS ca  
                             JOIN candidato_voto AS cv ON cv.id_candidato = ca.id
                             GROUP BY ca.id
                             ORDER BY id_candidato desc");
            $lista = [];

            while( $result = pg_fetch_assoc( $query ) ){

                $lista[] = ['id' => $result['id'], 'nome' => $result['nome'], 'id_candidato' => $result['id_candidato']]; 

            }
         return $lista;                 
        }
        public function ultimoMaisVotado()
        {
          $query = pg_query("SELECT ca.id, ca.nome, count(id_candidato) AS id_candidato
                             FROM candidato AS ca  
                             JOIN candidato_voto AS cv ON cv.id_candidato = ca.id
                             GROUP BY ca.id
                             ORDER BY id_candidato DESC
                             LIMIT 1");
            $lista = [];

            while( $result = pg_fetch_assoc( $query ) ){

                $lista = ['nome' => $result['nome'], 'id_candidato' => $result['id_candidato']]; 

            }
         return $lista;   
        }
      }

  
?>
