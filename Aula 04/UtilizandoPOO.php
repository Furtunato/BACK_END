<?php
class carro {
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $N_Donos;
    
    public function __construct($marca, $modelo, $ano, $revisao, $N_Donos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->N_Donos = $N_Donos;
    }
}
$carro1 = new carro(marca: "Porsche", modelo: "911", ano: 2020, revisao: false, N_Donos: 3);
$carro2 = new carro(marca: "BMW", modelo: "X6", ano: 2022, revisao: true, N_Donos: 1);
$carro3 = new carro(marca: "Mercedes-Benz", modelo: "G63", ano: 2021, revisao: false, N_Donos: 2);
$carro4 = new carro(marca: "Lamborghini", modelo: "Aventador SVJ", ano: 2023, revisao: true, N_Donos: 1);
$carro5 = new carro(marca: "Audi", modelo: "RS7", ano: 2019, revisao: true, N_Donos: 2);
$carro6 = new carro(marca: "Ferrari", modelo: "Purosangue", ano: 2023, revisao: false, N_Donos: 1);



?>