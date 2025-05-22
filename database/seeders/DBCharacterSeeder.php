<?php

namespace Database\Seeders;

use App\Models\Character;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DBCharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dragonBallId = 2;

        // Devil My Cry 
        Character::insert([
            [
                'name' => 'Goku',
                'description' => 'Goku es un guerrero saiyajin de no muchas luces que pelea por la tierra y sobretodo, por su ambición de hacerse fuerte.',
                'image' => 'goku-db.png',
                'habilities' =>  json_encode([
                    'Dominio del ki',
                    'Dominio de las artes marciales',
                    'Ki divino',
                ]),
                'disadvantages' =>  json_encode([
                    'Demasiado confiado',
                    'Es capaz de perdonar a enemigos que suponen un peligro mortal para todos',
                    'Tiende a subestimar a sus oponentes',
                    'No le gusta pelear con personas que no son fuertes',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Vegeta',
                'description' => 'Vegeta es el príncipe de los saiyajins, un guerrero orgulloso y arrogante que busca superar a Goku y demostrar su superioridad.',
                'image' => 'vegeta-db.png',
                'habilities' => json_encode([
                    'Dominio del ki',
                    'Sayiajin de primera clase',
                    'Tenacidad absoluta',
                ]),
                'disadvantages' => json_encode([
                    'Cabezón',
                    'Demasiado orgulloso',
                    'No le gusta pedir ayuda',

                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Vegetto',
                'description' => 'Vegetto es la fusión entre Goku y Vegeta usando los pendientes Potara, lo que le otorga un poder inmenso.',
                'image' => 'vegito-db.png',
                'habilities' => json_encode([
                    'Dominio del ki',
                    'Técnicas de Goku y Vegeta',
                    'Potencial entre dos guerreros inconmensurable',
                    'Dominio de las artes marciales',

                ]),
                'disadvantages' => json_encode([
                    'Bastante arrogante',
                    'La fusión no dura para siempre',
                    'Sus transformaciones le reducen tiempo de fusión, cada menos que la anterior',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Gogeta',
                'description' => 'Gogeta es la fusión entre Goku y Vegeta usando la danza de la fusión metamoru, lo que le otorga un poder inmenso.',
                'image' => 'gogeta-db.png',
                'habilities' => json_encode([
                    'Dominio del ki',
                    'Técnicas de Goku y Vegeta',
                    'Potencial entre dos guerreros inconmensurable',
                    'Dominio de las artes marciales',
                ]),
                'disadvantages' => json_encode([
                    'Bastante arrogante',
                    'La fusión no dura para siempre, menos aún que con los potara',
                    'Sus transformaciones le reducen tiempo de fusión, cada menos que la anterior',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Gohan',
                'description' => 'Gohan es el hijo de Goku y Chi-Chi, un guerrero con un gran potencial que lucha por proteger a sus seres queridos.',
                'image' => 'gohan-db.png',
                'habilities' => json_encode([
                    'Potencial casi infinito',
                    'Dominio del ki',
                    'Dominio de las artes marciales',
                ]),
                'disadvantages' => json_encode([
                    'DUalidad de personalidad',
                    'No le gusta pelear',
                    'Cuanto tiene que pelear y tiene ventaja, tiende a dejar que su oponente se recupere para jugar con el, dandole tiempo',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Trunks',
                'description' => 'Trunks es el hijo de Vegeta y Bulma, un guerrero con un gran potencial que lucha por proteger a sus seres queridos y su propio futuro.',
                'image' => 'trunks-db.png',
                'habilities' => json_encode([
                    'Dominio del ki',
                    'Dominio de las artes marciales',
                    'Dominio de la espada',
                    'Potencial desmesurado',
                ]),
                'disadvantages' => json_encode([
                    'Confia mucho en los suyos, dejandose de lado como una opcion para ganar',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Piccolo',
                'description' => 'Piccolo es un guerrero Namekiano que ha pasado de ser un enemigo de Goku a convertirse en su aliado y amigo.',
                'image' => 'piccoro-db.png',
                'habilities' => json_encode([
                    'Dominio del ki',
                    'Dominio de las artes marciales',
                    'Regeneracion',
                    'Tecnicas de absorcion',
                    'Tiene una gran inteligencia',
                ]),
                'disadvantages' => json_encode([
                    'Hombre muy serio',
                    'No le gusta pedir ayuda',
                    'No le gusta que le digan lo que tiene que hacer',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Gotenks',
                'description' => 'Gotenks es la fusión entre Goten y Trunks, lo que le otorga un gran poder y habilidades únicas.',
                'image' => 'gotenks-db.png',
                'habilities' => json_encode([
                    'Increible velocidad',
                    'Dominio del ki',
                    'Potencial entre dos guerreros inconmensurable',
                    'Impredecible',
                ]),
                'disadvantages' => json_encode([
                    'Erratico',
                    'Un actuar de niño',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Freezer',
                'description' => 'Freezer es un tirano intergaláctico que busca la inmortalidad y la dominación del universo, conocido por su crueldad y ambición desmedida.',
                'image' => 'freezer-db.png',
                'habilities' => json_encode([
                    'Frialdad absoluta',
                    'Dominio del ki',
                    'Dominio de la dirección de su ejercito',
                    'Potencial monstruoso',
                    'Inteligencia',

                ]),
                'disadvantages' => json_encode([
                    'Demasiado arrogante',
                    'No le gusta perder',
                    'Vengativo',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cell',
                'description' => 'Cell es un bioandroide creado por el Dr. Gero, que busca alcanzar la perfección absorbiendo a otros guerreros.',
                'image' => 'cell-db.png',
                'habilities' => json_encode([
                    'Dominio del ki',
                    'Dominio de las artes marciales',
                    'Regeneracion',
                    'Inteligencia',
                    'Potencial monstruoso',
                ]),
                'disadvantages' => json_encode([
                    'Sangre Saiyajin, tiene a dejarse llevar por sus instintos',
                    'Demasiado arrogante',
                    'No le gusta perder',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Majin Buu',
                'description' => 'Majin Buu es un antiguo ser mágico que puede absorber a otros seres y transformarse en diferentes formas, cada una con sus propias habilidades y personalidad.',
                'image' => 'majin_boo-db.png',
                'habilities' => json_encode([
                    'Potencial monstruoso',
                    'Regeneracion casi absoluta',
                    'Dominio del ki',
                ]),
                'disadvantages' => json_encode([
                    'Erratico',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Black Goku',
                'description' => 'Black Goku es una versión malvada de Goku del universo alternativo, que busca destruir a los mortales y alcanzar la inmortalidad.',
                'image' => 'black_goku-db.png',
                'habilities' => json_encode([
                    'Dominio del ki',
                    'Dominio de las artes marciales',
                    'Potencial monstruoso',
                    'Inteligencia',
                ]),
                'disadvantages' => json_encode([
                    'Muy egocentrico',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Zamasu Fusionado',
                'description' => 'Zamasu es un Kaioshin que busca eliminar a los mortales y alcanzar la inmortalidad, fusionándose con Goku Black para convertirse en un ser aún más poderoso.',
                'image' => 'zamasu_f-db.png',
                'habilities' => json_encode([
                    'Dominio del ki',
                    'Dominio del ki',
                    'Dominio de las artes marciales',
                    'Potencial monstruoso',
                    'Inteligencia',
                    'Regeneracion',
                ]),
                'disadvantages' => json_encode([
                    'Muy egocentrico',
                    'Demasiado arrogante',
                    'Percepcion de la realidad distorsionada',
                ]),
                'franchise_id' => $dragonBallId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
