<?php
class Conta{
    //Area de variavel
   private string $cpfTitular;
   private string $nomeTitular;
   private float  $saldoTitular;


   public function __construct(string $cpf, string $nome, float $saldo)
   {
        $this->setCPF ($cpf);
        $this->setNome ($nome);
        $this->setSaldo ($saldo);
        

   }// Fim do construtor

   //Métodos do acesso e modificação
   public function getCPF() : string
   {
        return $this->cpfTitular;
   }// Fim do getCPF

   public function getNome() : string{
    return $this-> nomeTitular;
   }//Fim do getNome

   public function getSaldo() : string{
    return $this->saldoTitular;
   }//Fim do getSaldo


   public function setCPF(string $cpf) : void
   {
    $this->cpfTitular = $cpf;
   }//Fim do setCPF

   public function setNome(string $nome) : void
   {
    $this->nomeTitular = $nome;
   }// Fim do setNome

   public function setSaldo(float $saldo) : void
   {
    $this->saldoTitular = $saldo;
   }// Fim do setSaldo
   public function sacar(Conta $cont, float $valor) : void
   {
        if($cont->getSaldo()>= $valor){
            $cont->setSaldo($cont->getSaldo() - $valor);
            return; // Parar a execução do método
        }
        echo"<br>Não é possivel sacar R$ $valor, pois a conta tem apenas R$ " .$cont->getSaldo()."<br>";
   }// Fim do Sacar
   public function depositar(Conta $cont, float $valor) : void
   {
        if($valor > 0){
        $cont->setSaldo($cont->getSaldo()+$valor);
        echo "Depósito realizado com sucesso!<br>";
        return;
        }
        echo "Impossivel depositar, algo deu errado!<br>";
   }// Fim do depositar
   public function transferir(Conta $saque, Conta $transf, float $valor) : void
   {
        if($valor > 0){
        $saque-> sacar($saque,$valor);
        $transf->depositar($transf,$valor);
        echo "Tranferencia realizado com sucesso!<br>";
        return;
    }
        echo "Impossivel tranferir a Tranferencia!<br>";

   }// Fim do transferir
   //Mostrar na tela dos detalhes da conta

   public function imprimir() : void
   {
    echo "CPF: ".$this->getCPF()."<br> Nome: ".$this->getNome()."<br> Saldo: R$ ".$this->getSaldo();
   }//Fim do imprimir
}// Fim da classe conta
?>