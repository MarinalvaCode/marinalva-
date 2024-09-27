<?php
class Vinho {
    private $nome;
    private $tipo;
    private $preco;
    private $safra;

    public function getNome() 
    {
        return $this->Nome;
    }
    public function setNome($Nome)
    {
        $this->nome= $Nome;
    }

    public function getTipo()
    {
        return  $this->Tipo;  
    }
    public function setTipo($Tipo)
    {
        $this->tipo= $Tipo;
    
    }
    public function getPreco() 
    {
        return $this->Preco;
    }  
    public function setPreco($Preco)
    {
        $this->preco= $Preco;
    
    }
    public function getSafra()
    {
        return $this->Safra;
    } 
    public function setSafra($Safra)
    {
        $this->safra= $Safra;


    }
     
    public function mostrarVinho (){

        return "Nome: {$this->nome}<br>Tipo: {$this->tipo}<br>preco: R$ {$this->preco}<br>safra: {$this->safra}";
    }    

    public function verificarpreco($preco){
        if($preco < 25){
            return true;
        }else{
            return false;
        }
    }

    }
    ?>
