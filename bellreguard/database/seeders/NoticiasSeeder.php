<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noticias')->truncate();

        DB::table('noticias')->insert([
          [
                'titulo' => 'Inicio del semestre 2026',
                'contenido' => 'El semestre académico dará inicio el próximo lunes para todos los estudiantes.',
                'fecha' => Carbon::now()->toDateString(),
                'todo_contenido' => 'El semestre académico 2026 dará inicio oficialmente el próximo lunes, marcando una nueva etapa de formación para todos los estudiantes de la institución. Durante las primeras semanas se desarrollarán actividades académicas, reuniones informativas y procesos administrativos que permitirán una correcta adaptación al nuevo periodo. Se recomienda a los estudiantes revisar constantemente la plataforma virtual, los horarios asignados y los comunicados oficiales, ya que se publicará información relevante sobre normas institucionales, servicios de apoyo académico y acompañamiento tutorial.',
                'tutor_id' => 1,
                'categoria' => 'Académico',
                'foto' => 'not1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Reunión general de tutores',
                'contenido' => 'Se convoca a todos los tutores a una reunión general el día viernes.',
                'fecha' => Carbon::now()->subDays(1)->toDateString(),
                'todo_contenido' => 'Se convoca a todos los tutores académicos a participar en la reunión general institucional que se realizará el día viernes en el auditorio principal. El objetivo de este encuentro es coordinar estrategias de seguimiento estudiantil, revisar lineamientos pedagógicos y fortalecer el acompañamiento académico durante el semestre. La asistencia es obligatoria, ya que se abordarán temas clave relacionados con el rendimiento académico, la comunicación con los estudiantes y la planificación de actividades tutoriales.',
                'tutor_id' => 1,
                'categoria' => 'Reuniones',
                'foto' => 'not4.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Charla de orientación',
                'contenido' => 'Charla dirigida a estudiantes de primer ingreso sobre normas institucionales.',
                'fecha' => Carbon::now()->subDays(3)->toDateString(),
                'todo_contenido' => 'La charla de orientación está dirigida a los estudiantes de primer ingreso con el propósito de brindar información clara y detallada sobre las normas institucionales, el uso de plataformas académicas y los servicios de apoyo disponibles. Durante la actividad se explicarán los reglamentos internos, los canales de comunicación oficiales y las responsabilidades académicas. Esta iniciativa busca facilitar la integración a la vida universitaria y promover una experiencia académica organizada y exitosa.',
                'tutor_id' => 1,
                'categoria' => 'Eventos',
                'foto' => 'not2.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Suspensión de clases',
                'contenido' => 'Las clases serán suspendidas por trabajos de mantenimiento.',
                'fecha' => Carbon::now()->subDays(5)->toDateString(),
                'todo_contenido' => 'Se informa a la comunidad educativa que las clases presenciales serán suspendidas temporalmente debido a trabajos de mantenimiento programados en las instalaciones de la institución. Estas labores tienen como finalidad mejorar la infraestructura, garantizar la seguridad y optimizar los espacios académicos. Durante este periodo no se realizarán actividades presenciales, por lo que se recomienda a los estudiantes mantenerse atentos a los comunicados oficiales para conocer la fecha exacta de reanudación.',
                'tutor_id' => 1,
                'categoria' => 'Avisos',
                'foto' => 'not1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Entrega de calificaciones',
                'contenido' => 'Las calificaciones estarán disponibles en el sistema académico.',
                'fecha' => Carbon::now()->subWeek()->toDateString(),
                'todo_contenido' => 'Las calificaciones correspondientes al periodo académico estarán disponibles en el sistema académico institucional dentro de las fechas establecidas. Los estudiantes podrán consultar sus resultados utilizando sus credenciales personales a través de la plataforma virtual. En caso de detectar inconsistencias o tener dudas sobre las notas publicadas, se recomienda comunicarse con el tutor académico o con el área administrativa correspondiente para recibir la orientación necesaria.',
                'tutor_id' => 1,
                'categoria' => 'Académico',
                'foto' => 'not1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Inscripciones abiertas',
                'contenido' => 'Se abren las inscripciones para actividades extracurriculares.',
                'fecha' => Carbon::now()->subDays(10)->toDateString(),
                'todo_contenido' => 'Se informa a los estudiantes que el proceso de inscripciones para las actividades extracurriculares se encuentra oficialmente abierto. Estas actividades buscan complementar la formación académica mediante talleres, cursos y eventos culturales y deportivos. La participación es voluntaria y permitirá el desarrollo de habilidades adicionales. Los interesados deberán realizar el proceso de inscripción a través de la plataforma institucional dentro de los plazos establecidos.',
                'tutor_id' => 1,
                'categoria' => 'Inscripciones',
                'foto' => 'not3.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Cambio de horario',
                'contenido' => 'Algunos cursos tendrán modificaciones en su horario habitual.',
                'fecha' => Carbon::now()->subDays(12)->toDateString(),
                'todo_contenido' => 'Se comunica a la comunidad estudiantil que algunos cursos presentarán modificaciones en su horario habitual debido a ajustes en la planificación académica. Estos cambios tienen como objetivo optimizar el uso de los recursos institucionales y mejorar la organización de las actividades educativas. Los estudiantes deberán revisar cuidadosamente la plataforma académica para verificar sus horarios actualizados y evitar inconvenientes durante el semestre.',
                'tutor_id' => 1,
                'categoria' => 'Avisos',
                'foto' => 'not1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Feria educativa',
                'contenido' => 'Se realizará una feria educativa con participación de diversas instituciones.',
                'fecha' => Carbon::now()->subDays(15)->toDateString(),
                'todo_contenido' => 'La feria educativa se llevará a cabo con la participación de diversas instituciones y organizaciones invitadas, ofreciendo a los estudiantes un espacio de orientación académica y profesional. Durante el evento se presentarán programas de estudio, oportunidades de formación continua y servicios de apoyo estudiantil. Esta actividad tiene como objetivo ampliar las perspectivas académicas y profesionales, fortaleciendo la toma de decisiones informadas sobre el futuro educativo.',
                'tutor_id' => 1,
                'categoria' => 'Eventos',
                'foto' => 'not1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
