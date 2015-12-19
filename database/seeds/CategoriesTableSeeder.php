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
	    		'title_singular' => 'Matrimonio'
	    	]);

	    	Category::create([
	    		'title_plural' => 'Familias',
	    		'title_singular'	=> 'Familia'
	    	]);

	    	Category::create([
	    		'title_plural' => 'Mascotas',
	    		'title_singular'	=> 'Mascota'
	    	]);

	    

	    }
	}
?>