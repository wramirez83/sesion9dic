<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $cards = [
            [
                'url' => 'https://enmedio.com/wp-content/uploads/2019/08/VR-MR-copia-4.png',
                'data' => 'La realidad virtual (RV) es un entorno de escenas u objetos de apariencia real. La acepción más común refiere a un entorno generado mediante tecnología informática, que crea en el usuario la sensación de estar inmerso'
            ],
            [
                'url' => 'https://cnet3.cbsistatic.com/img/_Z9zah25VVWjT8FXOJ4SbZexbjE=/1200x675/2018/08/07/354e8bfc-0f90-4c70-8f41-b923cb760fc6/13-magicleapone-florida-1.jpg',
                'data' => 'Una puerta se abre en la pared. Más allá, hay una ciudad reluciente. Un robot pasa volando, lanzándome misiles. Mi mano tiene un control, pero lo veo como una espada de láser. Aprieto el gatillo en mi control, enviando rayos de energía al robot.'
            ],
            [
                'url' => 'https://c.files.bbci.co.uk/180DF/production/_105772589_ed577158-e304-493a-8a79-fc21432ed065.jpg',
                'data' => 'Microsoft has a new version of its augmented reality headset, which now detects where its users are looking and tracks the movements of their hands.'
            ],
            [
                'url' => 'https://cdn1.appsisecommerce.com.br/clientes/cliente10694/produtos/29870/Z3969.jpg',
                'data' => 'VIVE PRO EYE VR SYSTEM INCLUDES:'
            ],
            [
                'url' => 'https://www.maslenovo.es/wp-content/uploads/2016/05/oculos-lenovo-VR-e1497372425298.jpg',
                'data' => 'Las gafas de realidad virtual son compatibles con todos los móviles con Android 6 y Android 7, Robustas y cómodas, sin duda estas gafas son una .'
            ],

        ];
        
        return view('index.index', compact('cards'));
    }
}
