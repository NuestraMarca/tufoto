<?php  
	use \Illuminate\Database\Seeder;
	use App\Entities\Provider;
	/**
	* 
	*/
	class ProvidersTableSeeder extends Seeder
	{

		public function run()
	    {

		    Provider::create([	
				'name' 		=> 'ADN',
				'tel'		=> '3105874420 – (8) 6729084',
				'address' 	=> 'CALLE 16 # 44-15 barrio Buque Villavicencio',
				'links'		=> '<a href="https://www.facebook.com/ADN-PELUQUERIA-100399856713239/timeline/">Facebook</a> - <a href="https://instagram.com/adnpeluqueria">Instagram</a>',
				'folder'	=> 'ADN',
				'url'		=> 'peluqueria-adn',
				'type_id'	=> 1
			]);

			Provider::create([	 
				'name' 		=> 'Diego Gaviria',
				'tel'		=> '320 3443119',
				'address' 	=> 'calle 33 A N° 38 – 23 Villavicencio',
				'links'		=> '<a href="https://www.facebook.com/peluqueriadiegogaviria?fref=ts">Facebook</a>',
				'folder'	=> 'Diego Gaviria',
				'url'		=> 'peluqueria-diego-gaviria',
				'type_id'	=> 1
			]);	 
			
			Provider::create([	 
				'name' 		=> 'Estudio 93',
				'tel'		=> '3144598260 – (8) 6833895',
				'address' 	=> 'CRA 44 Nº 20 - 53 BUQUE - Villavicencio',
				'links'		=> '<a href="https://instagram.com/eduardojaimesestudio93/>Instagram</a> - <a href="https://www.facebook.com/Estudio93SalonCreativo?pnref=lhc">Facebook</a>',
				'folder'	=> 'Estudio 93',
				'url'		=> 'peluqueria-estudio-93',
				'type_id'	=> 1
			]);

			Provider::create([	 
				'name' 		=> 'Wild Peluquería',
				'tel'		=> '3105069244 - (8) 6814703',
				'address' 	=> 'Calle 41 # 24A - 54 Emporio Villavicencio',
				'links'		=> '<a href="https://www.facebook.com/Wild-Peluquer%C3%ADa-1595103564038705/timeline/">Facebook</a> - <a href="https://instagram.com/wildpeluqueria">Instagram</a>',
				'folder'	=> 'Wild Peluqueria',
				'url'		=> 'wild-peluqueria',
				'type_id'	=> 1
			]);

			Provider::create([	 
				'name' 		=> 'Finca Turística Villa Esperanza',
				'tel' 		=> '320 472 24 25 - 310 320 40 66',
				'address' 	=> 'Ubicada a 20 minutos de Villavicencio, y 5 minutos de Restrepo, 1.5 Km. de Restrepo , Via San Nicolás',
				'links' 	=> 'https://www.facebook.com/villaesperanza.fincaturistica',
				'folder'	=> 'Villa Esperanza',
				'url'		=> 'finca-turistica-villa-esperanza',
				'type_id'	=> 4
			]);
	    }
	}
?>