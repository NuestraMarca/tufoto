<?php  
	use \Illuminate\Database\Seeder;
	use App\Entities\ProviderType;
	/**
	* 
	*/
	class ProviderTypesTableSeeder extends Seeder
	{

		public function run()
	    {
	    	ProviderType::create([
	    		'name' => 'Peluquerías',
	    		'order' => 1
	    	]);

	    	ProviderType::create([
	    		'name' => 'Organizadores de bodas',
	    		'order' => 2
	    	]);

	    	ProviderType::create([
	    		'name' => 'Vestidos y Trajes',
	    		'order' => 3
	    	]);

	    	ProviderType::create([
	    		'name' => 'Haciendas y Fincas',
	    		'order' => 4
	    	]);

	    	ProviderType::create([
	    		'name' => 'Tortas y Ponques',
	    		'order' => 5
	    	]);

	    	ProviderType::create([
	    		'name' => 'Hora loca',
	    		'order' => 6
	    	]);
	    	
	    }
	}
?>