<?php
namespace App\Classes;
class SidebarHelper
{
    public static function getLinksType($tipo)
    {
        switch ($tipo) {
            case 'user':
                return SidebarHelper::developerLinks();
                break;
            case 'dono':
                return SidebarHelper::donoLinks();
                break;

            default:
                throw new \Exception("Não foi possivel gerar links sidebar tipo: '$tipo', não é reconehcido na condição  ");
                break;
        }
    }
    public static function getSubLinksType($tipo)
    {
        switch ($tipo) {
            case 'user':
                return SidebarHelper::developerSubLinks();
                break;
            case 'dono':
                return SidebarHelper::donoSubLinks();
                break;

            default:
                throw new \Exception("Não foi possivel gerar sublinks sidebar tipo: '$tipo', não é reconehcido na condição  ");
                break;
        }
    }
    public static function developerLinks()
    {
        return [
            [
                "nome" => 'Dashboard',
                "url" => route('rota_um'),
                'icone' => '<i class="fa-solid fa-route"></i>'
            ],
            [
                "nome" => 'Donos',
                "url" =>  route('rota_dois'),
                'icone' => '<i class="fa-solid fa-route"></i>'
            ],
        ];
    }
    public static function developerSubLinks()
    {
        return [
            //array key titulo sublink
            // "teste" => [
            //     [
            //         "nome" => 'Link 1',
            //         "url" => '',
            //         'icone' => '<i class="fa-solid fa-route"></i>'
            //     ],
            //     [
            //         "nome" => 'Link 2',
            //         "url" => '',
            //         'icone' => '<i class="fa-solid fa-route"></i>'
            //     ],
            // ],
        ];
    }
    public static function donoLinks()
    {
        return [
            [
                "nome" => 'Developers',
                "url" => '',
                'icone' => '<i class="fa-solid fa-route"></i>'
            ],
            [
                "nome" => 'Donos',
                "url" => '',
                'icone' => '<i class="fa-solid fa-route"></i>'
            ],
        ];
    }
    public static function donoSubLinks()
    {
        return [

        ];
    }
}
