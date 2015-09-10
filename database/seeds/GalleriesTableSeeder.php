<?php  
	use \Illuminate\Database\Seeder;
	use App\Entities\Gallery;
	/**
	* 
	*/
	class GalleriesTableSeeder extends Seeder
	{

		public function run()
	    {
	    	/* Matrimonios */
	    	Gallery::create([
	    		'title' => 'Alex y Barbara',
	    		'description'	=> '<p>Una llanera y un paisa son los protagonistas de esta historia. Una excelente luz natural fue el mejor ingrediente para lograr estas fotografías en la Hacienda Los Gavanes. <a href="/galerias/matrimonios/alex-y-barbara">Aquí podrás ver las fotos de su Matrimonio.</a></p>',
	    		'date'	=> '2015-01-01',
	    		'url' => 'preboda-alex-y-barbara',
	    		'alt' => 'Fotografias de la Preboda de Alex y Barbara en Villavicencio 2015',
	    		'folder'	=> '002-Preboda-Alex-y-Barbara',
	    		'category_id'	=> 1,
	    		'tag'	=> 'Preboda'
	    	]);

	    	Gallery::create([
	    		'title' => 'Alex y Barbara',
	    		'description'	=> '<p>Llegaremos en canoa a la recepción, nos dijo Barbara el día que la conocimos… Todo se realizó en la Finca Los Gavanes, fue un día soleado y tranquilo, los preparativos poco a poco iban tomando forma. Alex estaba pendiente de cada detalle y mientras tanto en el segundo piso estaba Barbara en su preparación. Pasaron algunos minutos, ambos estaban listos y salimos para el lago donde esperaba la canoa que los iba llevar a la ceremonia. Con ustedes el resumen de este matrimonio. <a href="/galerias/matrimonios/preboda-alex-y-barbara">Aquí podrás ver las fotos de su Preboda</a></p>',
	    		'date'	=> '2015-01-01',
	    		'url' => 'alex-y-barbara',
	    		'alt' => 'Fotografias del Matrimonio de Alex y Barbara en Villavicencio 2015',
	    		'folder'	=> '007-Alex-y-Barbara',
	    		'category_id'	=> 1
	    	]);

	    	Gallery::create([
	    		'title' => 'Alexis y Maye',
	    		'description'	=> '<p>Esta pareja no quiere perder un solo detalle, así que optaron por estar al tanto de la decoración de su boda. <a href="/galerias/matrimonios/alexis-y-maye">Aquí podrás ver las fotos de su Matrimonio.</a></p>',
	    		'date'	=> '2015-01-01',
	    		'url' => 'preboda-alexis-y-maye',
	    		'alt' => 'Fotografias de la Preboda de Alexis y Maye en Villavicencio 2015',
	    		'folder'	=> '001-Preboda-Alexis-y-Maye',
	    		'category_id'	=> 1,
	    		'tag'	=> 'Preboda'
	    	]);

	    	Gallery::create([
	    		'title' => 'Alexis y Maye',
	    		'description'	=> '<p>Lluvia, viento, árboles caídos y más obstáculos no lograron impedir la unión de esta gran pareja. Su matrimonio se realizó en la Iglesia de Restrepo y la recepción fue a 5 minutos de la iglesia en un sitio llamado La Talanquera. Hubo opera, música llanera, canto, baile, diversión y muchos amigos. Días atrás habíamos realizado una sesión de preboda.</p>',
	    		'date'	=> '2015-01-01',
	    		'url' => 'alexis-y-maye',
	    		'alt' => 'Fotografias del Matrimonio de Alexis y Maye en Villavicencio 2015',
	    		'folder'	=> '006-Alexis-y-Maye',
	    		'category_id'	=> 1
	    	]);

	    	Gallery::create([
	    		'title' => 'Diana se casó de rojo',
	    		'description'	=> '<p>Diana Marcela se casaba en pocas horas, su vestido era rojo (odia el blanco) y su esposo quien llegaba de Mariachi a la iglesia no creía que realmente llegara de rojo. Así fue su preparación.</p>',
	    		'date'	=> '2015-01-01',
	    		'url' => 'diana-se-caso-de-rojo',
	    		'alt' => 'Fotografias del Matrimonio de Diana en Villavicencio 2015',
	    		'folder'	=> '005-Diana-se-caso de-rojo',
	    		'category_id'	=> 1
	    	]);

	    	Gallery::create([
	    		'title' => 'Omar y Edith',
	    		'description'	=> '<p>Gina, la hija de Joaquín y Myriam nos recomendó con Omar y Edith, nos pusimos cita en el centro de Villavicencio y nos contaron detalles y deseos sobre su matrimonio. La ceremonia fue en la iglesia María Madre Auxiliadora del barrio Villa María y la recepción en la Hacienda El Paraíso. Ambos vienen de familias numerosas y próximamente Tomás hará parte de esta gran familia. A ustedes muchas gracias por confiar en nuestro trabajo y en nuestra forma de contar historias. Así recibieron Omar y Edith los mejores recuerdos de su matrimonio. <a href="/producto">Ver vídeo</a></p>',
	    		'date'	=> '2015-01-01',
	    		'url' => 'omar-y-edith',
	    		'alt' => 'Fotografias del Matrimonio de Omar y Edith en Villavicencio 2015',
	    		'folder'	=> '004-Omar-y-Edith',
	    		'category_id'	=> 1
	    	]);

	    	Gallery::create([
	    		'title' => 'Joaquin y Miryam',
	    		'description'	=> '<p>Don Joaquín está en la iglesia esperando la llegada de su novia y me pregunta: ¿y ahora qué hago?, ¿qué tengo que hacer?, ¡Dígame usted que tiene la experiencia!... Fue su hija Ginna quien nos llamó. Sus padres llevaban juntos 30 años, ya eran abuelos y querían dar ese paso que no habían dado antes por muchas circunstancias. Aprendimos mucho de ellos, de la voz de la experiencia y que “Con amor todo es posible”.</p>',
	    		'date'	=> '2015-01-01',
	    		'url' => 'joaquin-y-miryam',
	    		'alt' => 'Fotografias del Matrimonio de Joaquin y Miryam en Villavicencio 2015',
	    		'folder'	=> '003-Joaquin-y-Miryam',
	    		'category_id'	=> 1
	    	]);

	    	Gallery::create([
	    		'title' => 'Alvaro y Lina',
	    		'description'	=> '<p>Alvaro nos llama y lo primero que nos dice es que les había gustado mucho nuestro trabajo y querían una cita con nosotros. Lina tenía 5 meses de embarazo, nos contaron su historia y sobre el gran amor que sienten por sus 11 mascotas. Alvaro y Lina ahora son nuestros amigos y estamos muy agradecidos por eso.</p>',
	    		'date'	=> '2015-01-01',
	    		'url' => 'alvaro-y-lina',
	    		'alt' => 'Fotografias del Matrimonio de Alvaro y Lina en Villavicencio 2015',
	    		'folder'	=> '002-Alvaro-y-Lina',
	    		'category_id'	=> 1
	    	]);

	    	Gallery::create([
	    		'title' => 'Bleimer y Mery',
	    		'description'	=> '<p>Bleimer era el animador de un concurso de talentos para niños, llamó a Mery a la tarima y de un momento a otro sus amigos se giran y levantan unos letreros con una propuesta de matrimonio… Estuvimos ahí en el momento justo y eso no tiene precio.</p>',
	    		'date'	=> '2015-01-01',
	    		'url' => 'propuesta-bleimer-y-mery',
	    		'alt' => 'Fotografias de la Propuesta de Bleimer y Mery en Villavicencio 2015',
	    		'folder'	=> '003-Propuesta-Bleimer-y-Mery',
	    		'category_id'	=> 1,
	    		'tag'	=> 'Propuesta'
	    	]);
	    	
	    	Gallery::create([
	    		'title' => 'Oscar y Luti',
	    		'description'	=> '<p>Esta bella pareja celebró su matrimonio en la Hacienda La Primavera (Vereda al Cairo), todo fue perfecto. Siempre tuvieron la mejor energía y la compartieron con todos y cada uno de los invitados, así se gozaron su matrimonio al máximo.  Gracias por elegirnos y confiar en nuestro trabajo.</p>',
	    		'date'	=> '2010-11-27',
	    		'alt' => 'Fotografias del Matrimonio de Oscar y Luti en Villavicencio 2015',
	    		'url' => 'matrimonio-de-oscar-y-luti-en-villavicencio',
	    		'folder'	=> '001-Oscar-y-Luti',
	    		'category_id'	=> 1
	    	]);

	    	/* Familias */

	    	Gallery::create([
	    		'title' => 'Esperando a victoria',
	    		'description'	=> '<p>EAhora el turno es para Ronal y Keily, a quienes acompañamos para su sesión fotográfica en el Eco Hotel La Rosita (Vía Restrepo antes del peaje). En muy pocos días nacerá Victoría y estas fotografías recordarán ese momento.</p>',
	    		'date'	=> '2015-06-01',
	    		'alt' => 'Fotografias de Ronal y Keily',
	    		'url' => 'fotografias-esperando-a-victoria',
	    		'folder'	=> '001-Esperando-a-victoria',
	    		'category_id'	=> 2
	    	]);

	    	Gallery::create([
	    		'title' => 'Alan está por nacer',
	    		'description'	=> '<p>Camilo y Fernanda esperan la llegada de su hijo Alan. Los visitamos a su casa y este fue el resultado de esta sesión</p>',
	    		'date'	=> '2015-05-18',
	    		'alt' => 'Fotografias de Camilo y Fernanda a la espera de su hijo Alan',
	    		'url' => 'fotografias-alan-esta-por-nacer',
	    		'folder'	=> '002-Alan-esta-por-nacer',
	    		'category_id'	=> 2
	    	]);

	    	Gallery::create([
	    		'title' => 'Juan José es hijo de Felipe y Leidy',
	    		'description'	=> '<p>Acompañamos a esta pareja paisa hasta el mirador turístico de Restrepo. Mientras disfrutaban su tiempo en familia y después de tomarnos unas ‘aguapanelas’ con queso, le enseñaban a su hijo Juan José a montar en bicicleta.</p>',
	    		'date'	=> '2015-05-08',
	    		'alt' => 'Fotografias de Juan José es hijo de Felipe y Leidy en Villavicencio 2015',
	    		'url' => 'fotografias-juan-jose-es-hijo-de-felipe-y-leidy',
	    		'folder'	=> '003-Juan-Jose-es-hijo-de-Felipe-y-Leidy',
	    		'category_id'	=> 2
	    	]);

	    	Gallery::create([
	    		'title' => 'Juan y Aurora son hijos de Mónica',
	    		'description'	=> '<p>En sus tiempos libres Mónica y sus hijos se divierten, esa tarde estuvo llena de risas, muecas y juegos en el parque del restaurante Rodizio Brasil de Villavicencio (Vía La Grama).</p>',
	    		'date'	=> '2015-04-19',
	    		'alt' => 'Fotografias del Juan y Aurora, hijos de Mónica en Villavicencio 2015',
	    		'url' => 'fotografias-juan-y-aurora-son-hijos-de-monica',
	    		'folder'	=> '004-Juan-y-Aurora-son-hijos-de-Monica',
	    		'category_id'	=> 2
	    	]);
	    	
	    	Gallery::create([
	    		'title' => 'Cabrera Espinoza',
	    		'description'	=> '<p>William y Shirly bautizaron a su hija Aitana. Sus padrinos Ana y Alan, familiares y amigos los esperaban en el club Meta, para celebrar esta gran bendición.</p>',
	    		'date'	=> '2015-03-14',
	    		'alt' => 'Fotografias de Cabrera Espinoza en Villavicencio 2015',
	    		'url' => 'fotografias-familia-cabrera-espinoza',
	    		'folder'	=> '005-Familia-Cabrera-espinoza',
	    		'category_id'	=> 2
	    	]);

	    	Gallery::create([
	    		'title' => 'Nicolas es hijo de Islanda y Fredy',
	    		'description'	=> '<p>Nos encontramos en la Hacienda Gualanday a las 3 de la tarde, conocimos a Nicolás quien se enamoró de mi esposa y no paraba de hacerle ‘ojitos’. Este coquetón y sus padres la pasaron rico en el parque de diversiones del hotel y nosotros hicimos estas bellas fotos.</p>',
	    		'date'	=> '2015-01-09',
	    		'alt' => 'Fotografias de Nicolas es hijo de Islanda y Fredy en Villavicencio 2015',
	    		'url' => 'fotografias-nicolas-es-hijo-de-islanda-y-fredy',
	    		'folder'	=> '006-Nicolas-es-hijo-de-Islanda-y-Fredy',
	    		'category_id'	=> 2
	    	]);

	    	Gallery::create([
	    		'title' => 'Salome es hija de Ana Sanchez',
	    		'description'	=> '<p>Salomé cumplió años y Ana no podía dejar pasar este momento de su vida sin fotografías. Este es un pequeño resumen.</p>',
	    		'date'	=> '2014-11-01',
	    		'alt' => 'Fotografias de Salome es hija de Ana Sanchez en Villavicencio 2015',
	    		'url' => 'fotografias-salome-es-hija-de-ana-sanchez',
	    		'folder'	=> '007-Salome-es-hija-de-Ana-Sanchez',
	    		'category_id'	=> 2
	    	]);

	    	/* Mascotas */

	    	Gallery::create([
	    		'title' => 'Mascotas de Alvaro y Lina',
	    		'description'	=> '<p>Huracán, Samantha, Capitán, Negro, Simón, Chuchi, Manchis, Rayas, Ceci, Luna y Carlota no los podían acompañar en su matrimonio, hicimos estas fotografías e imprimimos unos cuadros de 80x50cm que fueron ubicados en la recepción y que ahora hacen parte de la decoración de su casa.</p>',
	    		'date'	=> '2014-11-23',
	    		'alt' => 'Fotografias de Mascotas de Alvaro y Lina en Villavicencio 2014',
	    		'url' => 'fotografias-salome-es-hija-de-ana-sanchez',
	    		'folder'	=> '001-Mascotas-de-Alvaro-y-Lina',
	    		'category_id'	=> 3
	    	]);

	    	Gallery::create([
	    		'title' => 'Andrea y Bruno',
	    		'description'	=> '<p>Bruno alias “Nunis”, es el compañero y ángel guardián de mi esposa Andrea, lo recibió siendo un cachorro y han pasado 11 años desde aquel entonces. Happy birthday Bruno!!!</p>',
	    		'date'	=> '2014-12-06',
	    		'alt' => 'Fotografias de Andrea y Bruno en Villavicencio 2014',
	    		'url' => 'fotografias-andrea-y-bruno',
	    		'folder'	=> '002-Andrea-y-Bruno',
	    		'category_id'	=> 3
	    	]);

	    	Gallery::create([
	    		'title' => 'Andrea y Milo',
	    		'description'	=> '<p>Milo está recién llegado a la casa Piñeros, ha destruido todo a su paso y su padre está orgulloso… </p>',
	    		'date'	=> '2015-01-19',
	    		'alt' => 'Fotografias de Andrea y Milo en Villavicencio 2015',
	    		'url' => 'fotografias-andres-y-milo',
	    		'folder'	=> '003-Andres-y-Milo',
	    		'category_id'	=> 3
	    	]);
	    	

	    	

	    	

	    	

	    	

	    	


	    	

	    

	    	


	    	

	    }
	}
?>