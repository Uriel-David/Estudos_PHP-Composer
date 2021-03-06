<?php

use PHPUnit\Framework\TestCase;
use zinrax\estudosPHPComposer\Search;

class SearchTest extends TestCase {

  /**
  * @dataProvider dadosTeste
  */
  public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado) {
    $result = new Search;
    $result = $result->getAddressFromZipcode($input);

    $this->assertEquals($esperado, $result);
  }

  public function dadosTeste() {
    return [
      "Endereço Praça da Sé" => [
        "01001000",
        [
           "cep" => "01001-000",
           "logradouro" => "Praça da Sé",
           "complemento" => "lado ímpar",
           "bairro" => "Sé",
           "localidade" => "São Paulo",
           "uf" => "SP",
           "ibge" => "3550308",
           "gia" => "1004",
           "ddd" => "11",
           "siafi" => "7107"
        ]
      ],
      "Endereço Qualquer" => [
        "03624010",
        [
           "cep" => "03624-010",
           "logradouro" => "Rua Luís Asson",
           "complemento" => "",
           "bairro" => "Vila Buenos Aires",
           "localidade" => "São Paulo",
           "uf" => "SP",
           "ibge" => "3550308",
           "gia" => "1004",
           "ddd" => "11",
           "siafi" => "7107",
        ]
      ]
    ];

  }

}
