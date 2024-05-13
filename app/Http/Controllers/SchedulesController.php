<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Horários';
        $schedules = Schedules::all();

        return view('schedules.index', compact( 'page_title', 'schedules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedules $schedules)
    {

        $page_title = 'Horários';
        $schedules = Schedules::all();
        $buttonClicked = $request->input('button');
        switch ($buttonClicked) {
            // Botões de Adicionar
            case 'add_domingo':
                Schedules::create([
                    'dias' => 'Domingo',
                    'is_open' => 0,
                    'open' => '00:00 AM',
                    'close' => '01:00 AM',
                ]);
                return redirect()->route('schedules.index')->with('toast_success', 'Novo Horario Adicionado!');

            break;
            case 'add_segunda':
                Schedules::create([
                    'dias' => 'Segunda-Feira',
                    'is_open' => 0,
                    'open' => '00:00 AM',
                    'close' => '01:00 AM',
                ]);
                return redirect()->route('schedules.index')->with('toast_success', 'Novo Horario Adicionado!');

            break;
            case 'add_terca':
                Schedules::create([
                    'dias' => 'Terça-Feira',
                    'is_open' => 0,
                    'open' => '00:00 AM',
                    'close' => '01:00 AM',
                ]);
                return redirect()->route('schedules.index')->with('toast_success', 'Novo Horario Adicionado!');

            break;
            case 'add_quarta':
                Schedules::create([
                    'dias' => 'Quarta-Feira',
                    'is_open' => 0,
                    'open' => '00:00 AM',
                    'close' => '01:00 AM',
                ]);
                return redirect()->route('schedules.index')->with('toast_success', 'Novo Horario Adicionado!');

            break;
            case 'add_quinta':
                Schedules::create([
                    'dias' => 'Quinta-Feira',
                    'is_open' => 0,
                    'open' => '00:00 AM',
                    'close' => '01:00 AM',
                ]);
                return redirect()->route('schedules.index')->with('toast_success', 'Novo Horario Adicionado!');

            break;
            case 'add_sexta':
                Schedules::create([
                    'dias' => 'Sexta-Feira',
                    'is_open' => 0,
                    'open' => '00:00 AM',
                    'close' => '01:00 AM',
                ]);
                return redirect()->route('schedules.index')->with('toast_success', 'Novo Horario Adicionado!');

            break;
            case 'add_sabado':
                Schedules::create([
                    'dias' => 'Sábado',
                    'is_open' => 0,
                    'open' => '00:00 AM',
                    'close' => '01:00 AM',
                ]);
                return redirect()->route('schedules.index')->with('toast_success', 'Novo Horario Adicionado!');

            break;
            case strpos($buttonClicked, 'excluir_') === 0:
                $idItem = substr($buttonClicked, 8);
                $this->deleteScheduleById($idItem);
                return redirect()->route('schedules.index')->with('toast_success', 'Horario Excluido!');

            break;
            case strpos($buttonClicked, 'save_domingo_') === 0:
                $idItem = substr($buttonClicked,    13);
                $is_open = 0;
                if ($request->get('is_open_selected_domingo_' . $idItem) == 'open') {
                    $is_open = 1;
                };
                $this->updateScheduleById($idItem, $is_open, $request->get('hour_selected_open_domingo_'. $idItem), $request->get('hour_selected_close_domingo_'. $idItem));
                return redirect()->route('schedules.index')->with('toast_success', 'Horario Atualizado!');

            break;
            case strpos($buttonClicked, 'save_segunda_') === 0:
                $idItem = substr($buttonClicked, 13);
                $is_open = 0;
                if ($request->get('is_open_selected_segunda_' . $idItem) == 'open') {
                    $is_open = 1;
                };
                $this->updateScheduleById($idItem, $is_open, $request->get('hour_selected_open_segunda_'. $idItem), $request->get('hour_selected_close_segunda_'. $idItem));
                return redirect()->route('schedules.index')->with('toast_success', 'Horario Atualizado!');

            break;
            case strpos($buttonClicked, 'save_terca_') === 0:
                $idItem = substr($buttonClicked, 11);
                $is_open = 0;
                if ($request->get('is_open_selected_terca_' . $idItem) == 'open') {
                    $is_open = 1;
                };
                $this->updateScheduleById($idItem, $is_open, $request->get('hour_selected_open_terca_'. $idItem), $request->get('hour_selected_close_terca_'. $idItem));
                return redirect()->route('schedules.index')->with('toast_success', 'Horario Atualizado!');

            break;
            case strpos($buttonClicked, 'save_quarta_') === 0:
                $idItem = substr($buttonClicked, 12 );
                $is_open = 0;
                if ($request->get('is_open_selected_quarta_' . $idItem) == 'open') {
                    $is_open = 1;
                };
                $this->updateScheduleById($idItem, $is_open, $request->get('hour_selected_open_quarta_'. $idItem), $request->get('hour_selected_close_quarta_'. $idItem));
                return redirect()->route('schedules.index')->with('toast_success', 'Horario Atualizado!');

            break;
            case strpos($buttonClicked, 'save_quinta_') === 0:
                $idItem = substr($buttonClicked, 12 );
                $is_open = 0;
                if ($request->get('is_open_selected_quinta_' . $idItem) == 'open') {
                    $is_open = 1;
                };
                $this->updateScheduleById($idItem, $is_open, $request->get('hour_selected_open_quinta_'. $idItem), $request->get('hour_selected_close_quinta_'. $idItem));
                return redirect()->route('schedules.index')->with('toast_success', 'Horario Atualizado!');

            break;
            case strpos($buttonClicked, 'save_sexta_') === 0:
                $idItem = substr($buttonClicked, 12 );
                $is_open = 0;
                if ($request->get('is_open_selected_sexta_' . $idItem) == 'open') {
                    $is_open = 1;
                };
                $this->updateScheduleById($idItem, $is_open, $request->get('hour_selected_open_sexta_'. $idItem), $request->get('hour_selected_close_sexta_'. $idItem));
                return redirect()->route('schedules.index')->with('toast_success', 'Horario Atualizado!');

            break;
            case strpos($buttonClicked, 'save_sabado_') === 0:
                $idItem = substr($buttonClicked, 12 );
                $is_open = 0;
                if ($request->get('is_open_selected_sabado_' . $idItem) == 'open') {
                    $is_open = 1;
                };
                $this->updateScheduleById($idItem, $is_open, $request->get('hour_selected_open_sabado_'. $idItem), $request->get('hour_selected_close_sabado_'. $idItem));
                return redirect()->route('schedules.index')->with('toast_success', 'Horario Atualizado!');

            break;
            default:
                // Se nenhum botão foi pressionado
                break;
        }

        return view('schedules.index', compact( 'page_title', 'schedules'));

    }

    private function updateDomingo()
    {

    }

    private function updateScheduleById($id ,$is_open, $hours_open, $hours_close) {
        if (!is_numeric($id)) {
            return false;
        }

        $schedule = Schedules::find($id);
        if ($schedule) {
            $schedule->update([
                'is_open' => $is_open,
                'open' => $hours_open,
                'close' => $hours_close
            ]);
            return true;
        } else {
            return false;
        }
    }

    private function deleteScheduleById($id) {
        if (!is_numeric($id)) {
            return false;
        }

        $schedule = Schedules::find($id);

        if ($schedule) {
            $schedule->delete();
            return true;
        } else {
            return false;
        }
    }

}
