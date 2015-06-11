<?php  
	use \Illuminate\Database\Seeder;
	use App\Entities\Category;
	/**
	* 
	*/
	class CategoriesTableSeeder extends Seeder
	{

		public function run()
	    {
	    	Category::create([
	    		'title_plural' => 'Matrimonios',
	    		'title_singular' => 'Matrimonio',
	    		'alt' => 'Fotografias de Matrimonios realizadas por tufoto.co',
	    		'url' => 'matrimonios'
	    	]);

	    	Category::create([
	    		'title_plural' => 'Familias',
	    		'title_singular'	=> 'Familia',
	    		'alt' => 'Fotografias de Familias realizadas por tufoto.co',
	    		'url' => 'familias'
	    	]);

	    	Category::create([
	    		'title_plural' => 'Mascotas',
	    		'title_singular'	=> 'Mascota',
	    		'alt' => 'Fotografias de Mascotas realizadas por tufoto.co',
	    		'url' => 'mascotas'
	    	]);

	    

	    }
	}
?>