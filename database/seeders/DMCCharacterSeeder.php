<?php

namespace Database\Seeders;

use App\Models\Character;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DMCCharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $devilMyCryId = 1;
        $dragonBallId = 2;
        $finalFantasyId = 3;

        // Devil My Cry 
        Character::insert([
            [
                'name' => 'Dante',
                'description' => 'El hijo de Sparda, un demonio legendario que lucha contra demonios y protege a la humanidad.',
                'image' => 'dante-dmc.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                    'Uso de armas de fuego y espadas',
                    'Transformación en demonio',
                    'Uso de magia y habilidades demoníacas',
                    'Agilidad y velocidad sobrehumanas',
                    'Resistencia a los ataques físicos y mágicos',
                    'Capacidad para absorber almas demoníacas',
                    'Uso de poderes elementales como fuego y hielo',
                    'Uso de habilidades especiales como Devil Trigger',
                ]),
                'disadvantages' => json_encode([
                    'Su arrogancia y confianza excesiva pueden llevarlo a subestimar a sus enemigos',
                    'Su naturaleza impulsiva puede llevarlo a tomar decisiones arriesgadas',
                    'Su pasado traumático y la carga de ser el hijo de Sparda pueden afectarlo emocionalmente',
                    'Endeudado',
                ]),
                'franchise_id' => $devilMyCryId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Vergil',
                'description' => 'El hermano gemelo de Dante, un guerrero poderoso que busca obtener el poder de su padre.',
                'image' => 'vergil-dmc.png',
                'habilities' => json_encode([
                    '',
                ]),
                'disadvantages' => json_encode([
                    '',
                ]),
                'franchise_id' => $devilMyCryId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Arkham',
                'description' => 'Un demonio que busca obtener el poder de Sparda y manipula a Dante, Vergil y Lary para sus propios fines.',
                'image' => 'arkham-dmc.png',
                'habilities' => json_encode([
                    'Manipulación de la magia demoníaca',
                    'Control sobre los demonios y sus poderes',
                    'Inteligente y astuto',
                ]),
                'disadvantages' => json_encode([
                    'Su arrogancia y confianza excesiva pueden llevarlo a subestimar a sus enemigos',
                ]),
                'franchise_id' => $devilMyCryId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Lady',
                'description' => 'Una cazadora de demonios que busca venganza hacía su padre por la muerte de su madre.',
                'image' => 'mary-dmc.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                    'Uso de armas de fuego y explosivos',
                    'Agilidad y velocidad casi sobrehumanas',
                ]),
                'disadvantages' => json_encode([
                    'Su deseo de venganza puede nublar su juicio y llevarla a tomar decisiones arriesgadas',
                    'Su falta de confianza en sí misma puede hacerla dudar en situaciones críticas',
                    'Su pasado traumático y la carga de ser la hija de imbécil llega a afectarla emocionalmente',
                ]),
                'franchise_id' => $devilMyCryId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Trish',
                'description' => 'Una demonio creada por Mundus, que se convierte en aliada de Dante y lucha junto a él.',
                'image' => 'trish-dmc.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                ]),
                'disadvantages' => json_encode([
                    'Su lealtad a Dante puede ser cuestionada debido a su origen demoníaco',
                ]),
                'franchise_id' => $devilMyCryId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nero',
                'description' => 'Un joven cazador de demonios con un brazo demoníaco llamado Devil Bringer, que busca descubrir su pasado.',
                'image' => 'nero-dmc.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                    'Uso de armas de fuego y espadas',
                ]),
                'disadvantages' => json_encode([
                    'Su arrogancia y confianza excesiva pueden llevarlo a subestimar a sus enemigos',
                    'Su deseo de proteger a sus seres queridos puede llevarlo a tomar decisiones arriesgadas',
                    'Su falta de experiencia en combate puede hacer que cometa errores',
                ]),
                'franchise_id' => $devilMyCryId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Lucía',
                'description' => 'Una guerrera que lucha contra los demonios y combate frente a su naturaleza.',
                'image' => 'lucia-dmc.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                    'Uso de cuchillas y espadas',
                    'Agilidad y velocidad sobrehumanas',
                    'Resistencia a los ataques físicos y mágicos',
                ]),
                'disadvantages' => json_encode([
                    'Tiene un pasado traumático que la afecta emocionalmente',
                    'Su deseo de proteger a sus seres queridos puede llevarla a tomar decisiones arriesgadas',
                ]),
                'franchise_id' => $devilMyCryId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mundus',
                'description' => 'El rey demonio que busca conquistar el mundo humano y destruir a Dante.',
                'image' => 'mundus-dmc.png',
                'habilities' => json_encode([
                    'Manipulación de la magia demoníaca',
                    'Control sobre los demonios y sus poderes',
                    'Inteligente y astuto',
                    'Resistencia a los ataques físicos y mágicos',
                ]),
                'disadvantages' => json_encode([
                    'Su arrogancia y confianza excesiva pueden llevarlo a subestimar a sus enemigos',
                    'Su deseo de venganza puede nublar su juicio y llevarlo a tomar decisiones arriesgadas',
                    'Su falta de confianza en sí mismo puede hacerle dudar en situaciones críticas',
                ]),
                'franchise_id' => $devilMyCryId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
