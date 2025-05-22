<?php

namespace Database\Seeders;

use App\Models\Character;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FFVIICharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $finalFantasyId = 3;

        // Devil My Cry 
        Character::insert([
            [
                'name' => 'Cloud Strife',
                'description' => 'Un ex-soldado de la organización Shinra que se convierte en mercenario y lucha contra la corporación.',
                'image' => 'cloud-ffvii.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                    'Dominio de la espada Buster',
                    'Uso de magia y habilidades especiales',
                ]),
                'disadvantages' => json_encode([
                    'Confusión sobre su identidad',
                    'Carga emocional por su pasado',
                    'Dificultad para confiar en los demás',
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tifa Lockhart',
                'description' => 'Una amiga de la infancia de Cloud y una experta en artes marciales que lucha contra Shinra.',
                'image' => 'tifa-ffvii.png',
                'habilities' => json_encode([
                    'Habilidades de combate cuerpo a cuerpo',
                    'Uso de materia para potenciar habilidades',
                    'Gran agilidad y velocidad',
                ]),
                'disadvantages' => json_encode([
                    'Carga emocional por la pérdida de seres queridos',
                    'Conflictos internos sobre su pasado',
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Aerith Gainsborough',
                'description' => 'Una florista con un misterioso pasado y la última de su especie, los Cetra.',
                'image' => 'aerith-ffvii.png',
                'habilities' => json_encode([
                    'Habilidades de curación y magia',
                    'Conexión con la naturaleza y el planeta',
                    'Uso de materia para potenciar habilidades',
                ]),
                'disadvantages' => json_encode([
                    'Conflictos internos sobre su destino',
                    'Vulnerabilidad emocional',
                    'Carga emocional por su pasado',
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Barret Wallace',
                'description' => 'El líder de avalancha, un grupo ecoterrorista que lucha contra Shinra y la destrucción del planeta.',
                'image' => 'barret-ffvii.png',
                'habilities' => json_encode([
                    'Fuerza física excepcional',
                    'Uso de un brazo mecánico como arma',
                    'Habilidades de liderazgo y estrategia',
                ]),
                'disadvantages' => json_encode([
                    'Carga emocional por la pérdida de su familia',
                    'Conflictos internos sobre su papel en la lucha',
                    'Impulsividad en la toma de decisiones',
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Red XIII',
                'description' => 'Un guerrero felino con habilidades excepcionales y un profundo conocimiento de la historia del planeta.',
                'image' => 'redxii-ffvii.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                    'Conocimiento de la historia del planeta',
                    'Uso de magia y habilidades especiales',
                    'Sabiduría ancestral',
                ]),
                'disadvantages' => json_encode([
                    'Carga emocional por la pérdida de su tribu',
                    'Conflictos internos sobre su identidad en base a su padre Seto',
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Yuffie Kisaragi',
                'description' => 'Una joven ninja y ladrona que busca obtener materia papara Wutai, y ser la cazamaterias número 1.',
                'image' => 'yuffie-ffvii.png',
                'habilities' => json_encode([
                    'Habilidades de combate cuerpo a cuerpo',
                    'Uso de materia para potenciar habilidades',
                    'Agilidad y velocidad excepcionales',
                    'Habilidades de sigilo y robo',
                    'Conocimiento de la cultura ninja',
                ]),
                'disadvantages' => json_encode([
                    'Carga emocional por la pérdida de su madre',
                    'Impulsividad en la toma de decisiones',    
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Caith Sith',
                'description' => 'Un gato robot que puede hablar y tiene la habilidad de controlar a los enemigos con su magia.',
                'image' => 'cait-sith-ffvii.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                    'Uso de magia y habilidades especiales',
                    'Capacidad para controlar a los enemigos',
                    'Conocimiento de la cultura de los gatos',
                    'Conocimiento de la cultura de Shinra',
                ]),
                'disadvantages' => json_encode([
                    'Caith Sith',
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Zack Fair',
                'description' => 'Es un joven e impetuoso SOLDADO. Zack tiene una gran conexión con el pasado de Cloud Strife y con Sephiroth. También fue novio de Aerith Gainsborough.',
                'image' => 'zack-ffvii.png',
                'habilities' => json_encode([
                    ' Habilidades de combate excepcionales',
                    'Uso de la espada Buster',
                    'Uso de magia y habilidades especiales',
                    'Agilidad y velocidad excepcionales',
                    'Habilidades de liderazgo y estrategia',
                    'Conocimiento de la historia de SOLDADO',
                    'Conocimiento de la cultura de Shinra',
                    'Motivación y determinación excepcionales',
                    'Habilidades de curación y magia',
                    'Una personalidad carismática y encantadora',
                ]),
                'disadvantages' => json_encode([
                    'Demasiado bueno, a vceces peca de ingenuidad',
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Angeal',
                'description' => 'Es un SOLDADO de primera clase y mentor de Zack Fair. Es conocido por su fuerte sentido del deber y su conexión con la espada Buster.',
                'image' => 'angeal-ffvii.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                    'Uso de la espada Buster',
                    'Uso de magia y habilidades especiales',
                    'Agilidad y velocidad excepcionales',
                    'Habilidades de liderazgo y estrategia',
                ]),
                'disadvantages' => json_encode([
                    'Demasiado bueno, a veces peca de ingenuidad',
                    'Carga emocional por su pasado',
                    'Conflictos internos sobre su identidad',
                    'Conflictos internos sobre su papel en la lucha',
                    'Conflictos internos sobre su relación con Zack Fair, Genesis y Sephiroth',
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Genesis',
                'description' => 'Es un SOLDADO de primera clase y rival de Zack Fair. Es conocido por su obsesión con la literatura y su búsqueda de la inmortalidad.',
                'image' => 'genesis-ffvii.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                    'Uso de magia y habilidades especiales',
                    'Agilidad y velocidad excepcionales',
                ]),
                'disadvantages' => json_encode([
                    'Chapas',
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sephiroth',
                'description' => 'El antagonista principal de la serie, un ex-soldado de Shinra que busca destruir el planeta y convertirse en un dios.',
                'image' => 'sephiroth-ffvii.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                    'Uso de la espada Masamune',
                    'Uso de magia y habilidades especiales',
                    'Agilidad y velocidad excepcionales',
                    'Habilidades de liderazgo y estrategia',
                ]),
                'disadvantages' => json_encode([
                    'Porta consigo un pasado que de por vida, lo atormenta',
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Weiss',
                'description' => 'Un personaje de la serie que es un miembro de la organización Deepground y un antagonista en Dirge of Cerberus.',
                'image' => 'weiss-ffvii.png',
                'habilities' => json_encode([
                    'Habilidades de combate excepcionales',
                    'Uso de magia y habilidades especiales',
                    'Agilidad y velocidad excepcionales',
                    'Habilidades de liderazgo y estrategia',
                    'Conocimiento de la historia de Deepground',
                ]),
                'disadvantages' => json_encode([
                    'Carga emocional por su pasado',
                    'Conflictos internos sobre su identidad',
                ]),
                'franchise_id' => $finalFantasyId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
