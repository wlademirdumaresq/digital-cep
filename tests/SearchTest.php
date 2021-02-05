<?php


use Dumaresq\DigitalCep\Search;
use PHPUnit\Framework\TestCase;

/**
 * @uses Dumaresq\DigitalCep\Search
 */

class SearchTest extends TestCase
{
    /**
     * @covers Dumaresq\DigitalCep\Search::getAddressFromZipCode
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipCode(string $input, array $esperado)
    {
        $busca = new Search();
        $resultado = $busca->getAddressFromZipCode($input);

        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste()
    {
        return [
            "Endereco Cortez Pereira" => [
                "59072600", [
                    "cep" => "59072-600",
                    "logradouro" => "Rua Cortez Pereira",
                    "complemento" => "",
                    "bairro" => "Cidade Nova",
                    "localidade" => "Natal",
                    "uf" => "RN",
                    "ibge" => "2408102",
                    "gia" => "",
                    "ddd" => "84",
                    "siafi" => "1761"
                ]
            ],
            "Endereco Bela Vista" => [
                "59072710", [
                    "cep" => "59072-710",
                    "logradouro" => "Rua Bela Vista",
                    "complemento" => "",
                    "bairro" => "Cidade Nova",
                    "localidade" => "Natal",
                    "uf" => "RN",
                    "ibge" => "2408102",
                    "gia" => "",
                    "ddd" => "84",
                    "siafi" => "1761"
                ]
            ]
        ];
    }
}


