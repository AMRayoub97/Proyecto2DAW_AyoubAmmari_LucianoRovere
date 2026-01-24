<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Google\Client;
use Google\Service\Calendar;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Google\Service\Calendar\Event;
use Google\Service\Calendar\EventDateTime;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::orderBy('fecha', 'DESC')->limit(15)->get();

        return view('eventos.index')->with('eventos', $eventos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

   public function syncToGoogleCalendar()
    {
        if(!Auth::user() || Auth::user()->role != 'admin') {
            return redirect()->route('index'); // protection
        }

        if(Auth::user()->role == 'admin'){
            // 1️⃣ Setup Google Client
            $client = new Client();
            $client->setAuthConfig(storage_path('app/google/bellreguard-d754feb1b72b.json'));
            $client->addScope(Calendar::CALENDAR);

            $service = new Calendar($client);
            $calendarId = '84c77a57829987452c49d60bb03eaab97665b000d99116c01f48819584c0168b@group.calendar.google.com';

            // 2️⃣ Delete all existing events in the calendar
            $optParams = ['singleEvents' => true];
            $existingEvents = $service->events->listEvents($calendarId, $optParams);

            foreach ($existingEvents->getItems() as $e) {
                $service->events->delete($calendarId, $e->getId());
            }

            // 3️⃣ Get events men DB
            $eventos = Evento::all();

            // 4️⃣ Loop and push each event to Google Calendar
            foreach ($eventos as $evento) {
                $startDate = Carbon::parse($evento->fecha);
                $endDate = $startDate->copy()->addHour();

                $googleEvent = new Event([
                    'summary' => $evento->titulo,
                    'location' => $evento->lugar,
                    'description' => $evento->descripcion ?? '',
                    'start' => new EventDateTime([
                        'dateTime' => $startDate->toRfc3339String(),
                        'timeZone' => 'Europe/Madrid'
                    ]),
                    'end' => new EventDateTime([
                        'dateTime' => $endDate->toRfc3339String(),
                        'timeZone' => 'Europe/Madrid'
                    ]),
                ]);

                $service->events->insert($calendarId, $googleEvent);
            }

            return redirect()->route('index')->with('success', "Events synced successfully to Google Calendar!");
        }

    }
}
