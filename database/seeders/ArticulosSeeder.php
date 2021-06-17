<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('articulos')->insert([
            'titulo' => 'Titulo del articulo',
            'contenido' => '<div>Contenido del articulo Contenido del articulo Contenido del articulo Contenido del articulo Contenido del articulo Contenido del articulo Contenido del articulo Contenido del articulo Contenido del articulo </div>',
            'imagen' => 'upload_images/monalisa.jpg',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('articulos')->insert([
            'titulo' => 'La tercera vía de Microsoft: su plan para buscar un camino alternativo en el futuro de los videojuegos',
            'contenido' => '<div>El E3 ha finalizado y, sea uno de la facción que sea, es fácil señalar a un justo ganador: la propuesta de Microsoft, volcada en reforzar su Game Pass con juegos exclusivos y un mantra continuo de "Todas las novedades desde en Game Pass desde el día 1", ha acaparado todos los titulares. No es para menos: podríamos estar ante un auténtico cambio en las reglas de juego.
Porque aunque Game Pass lleva bastantes meses en funcionamiento, es el E3 es el que le ha dado el espaldarazo definitivo. Analizamos también en este episodio cómo recientes estrategias de la compañía, como la compra de Bethesda o los acuerdos con compañías de la envergadura de EA han acabado dando forma a la estrategia que han planteado en el E3. </div>',
            'imagen' => 'upload_images/microsoft.jpg',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
//videojuegos,técnologia.
        ]);


DB::table('articulos')->insert([
            'titulo' => 'Amazon Prime Day 2021: Ofertas anticipadas del día de hoy (17 de junio)',
            'contenido' => '<div>Faltan cuatro días para que comience el Prime Day 2021 y quizás no tengas que esperar hasta las 0:01 horas del 21 de junio para encontrar grandes descuentos porque Amazon ha comenzado con sus ofertas en algunos productos. Si no quieres perdértelas, aquí tienes las mejores ofertas anticipadas en tecnología del Prime Day 2021 de hoy 17 de junio.
        Algunas de las ofertas más apetecibles son: Xiaomi Redmi Note 10 5G de 128GB por 194 euros, más de 50 euros de diferencia respecto a otros comercios. El nuevo aspirante a bestseller de la casa cuenta con último en conectividad, panel a 90Hz y batería de 5.000 mAh. Xiaomi Mi 10T 5G por 310 euros, en otras tiendas a 350 - 400 euros. Cuando probamos el Xiaomi Mi 10T destacamos la sensación que ofrece su altísima tasa de refresco, una construcción elegante y moderna y su buen rendimiento sin calentamientos en gaming
Samsung Galaxy A21s de 128GB por 169 euros en Amazon, en otras tiendas ronda los 200 euros. Con cámara cuádruple, gran batería de 5.000 mAh y un diseño muy agradable en mano </div>',
            'imagen' => 'upload_images/amazon.jpg',
            'user_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
//comercio,técnologia.
        ]);


        DB::table('articulos')->insert([
            'titulo' => 'El mejor móvil Xiaomi en calidad precio (2020): guía de compra y comparativa',
            'contenido' => '<div>Hemos probado todos los móviles de Xiaomi para encontrar cuál es el mejor en calidad/precio. Con tantos modelos similares es difícil entender cómo funciona su catálogo, pero una vez los tenemos uno junto al otro es cuando podemos ver dónde destaca cada uno. Esta es nuestra comparativa a fondo para encontrar el Xiaomi más recomendado.
Un repaso para ayudar a elegir el móvil que mejor se adapte a las necesidades de cada usuario, siempre teniendo en cuenta el precio como un factor clave. Desde los últimos Redmi Note hasta la serie Mi 10, esta ha sido nuestra experiencia probando los terminales de Xiaomi para este 2020.
Y es que pese a que la diferencia entre España y China nunca había sido tan alta, Xiaomi sigue siendo una de las marcas más competitivas. Aquí os traemos una nueva guía de compra y comparativa con los los mejores móviles Xiaomi en relación calidad/precio. Esperamos que os sirva para decidir qué smartphone comprar.</div>',
            'imagen' => 'upload_images/xiaomi.jpg',
            'user_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
//técnologia.
        ]);


DB::table('articulos')->insert([
            'titulo' => 'Sergio Ramos: "Cuando acepté la oferta me dijeron que había caducado"',
            'contenido' => '<div>
Despedida. Florentino Pérez: "No es un día fácil porque eres especial para mí"
Ya sin lágrimas, con las emociones más controladas, Sergio Ramos se sentó en la sala de prensa de la Ciudad Deportiva de Valdebebas para contestar las preguntas de los periodistas.
En el acto de despedida y homenaje tiró del discurso sentimental, pero en la sala de prensa tocaba conocer los motivos del adiós. ¿Por qué no ha habido acuerdo? ¿Se va porque él quiere o se va porque quieren que se vaya? Eran muchas las preguntas las que había que hacer ya el ex capitán del club blanco, que compareció ante los periodistas junto a Emilio Butragueño.
Han pasado muchas cosas, circunstancias que pasan en la vida. Nunca me he querido ir del Madrid, ese ha sido mi propósito. Me remonto a LaLiga del confinamiento, que la ganamos. A raíz de ahí el club me ofreció la renovación, pero se dejó ahí por el Covid. Ahora, el club me hace una oferta de un año y bajada de sueldo. Yo solo he pedido dos años. El tema no ha sido de dinero. Llegados a este punto, acepto la oferta con bajada y el club me dice que ya no hay oferta. Me dicen que la oferta tiene fecha de caducidad y yo no me había enterado.</div>',
            'imagen' => 'upload_images/sergioramos.jpg',
            'user_id' => '3',
            'created_at' => now(),
            'updated_at' => now(),
//Deportes.
        ]);












    }
}
