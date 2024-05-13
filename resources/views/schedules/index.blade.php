@extends('layouts.backend')
@section('title', $page_title)
@section('content')
    <div class="card">
        <form action="{{ route('schedules.update', 1) }}" method="POST" enctype="multipart/form-data" id="meuFormulario">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h4>{{ $page_title }}</h4>
            </div>
            <div class="card-body" id="hours-container-domingo">
                @foreach ($schedules as $item)
                    @if ($item->dias == 'Domingo')
                        <div class="form-group row mb-4 horario-domingo" id="item-{{ $item->id }}">
                            <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">{{ $item->dias }}</label>
                            <div class="container-select">
                                <div class="open-selected-domingo mr-5">
                                    <label class="container_radio">
                                        <input
                                            type="radio" value="open"
                                            @if ($item->is_open == 1)
                                                checked
                                            @endif
                                            name="is_open_selected_domingo_{{ $item->id }}" class="radio-change">
                                        Aberto
                                        <span class="checkmark"></span>
                                    </label>
                                    <i class="icon_creditcard"></i>
                                </div>
                                <div class="open-selected-domingo mr-5">
                                    <label class="container_radio">
                                        <input type="radio" value="closed"
                                        @if ($item->is_open == 0)
                                            checked
                                        @endif
                                        name="is_open_selected_domingo_{{ $item->id }}" class="radio-change">
                                        <span class="checkmark"></span>
                                        Fechado
                                    </label>
                                    <i class="icon_wallet"></i>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_open_domingo_{{ $item->id }}">
                                    <?php
                                    for ($hour = 0; $hour < 24; $hour++) {
                                        for ($minute = 0; $minute < 60; $minute += 30) {
                                            $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                            $suffix = ($hour < 12 ? ' AM' : ' PM');
                                            $selected = ($item->open === $time . $suffix) ? ' selected' : '';
                                            echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_close_domingo_{{ $item->id }}">
                                    <?php
                                        for ($hour = 0; $hour < 24; $hour++) {
                                            for ($minute = 0; $minute < 60; $minute += 30) {
                                                $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                                $suffix = ($hour < 12 ? ' AM' : ' PM');
                                                $selected = ($item->close === $time . $suffix) ? ' selected' : '';
                                                echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" name="domingo" value="{{ $item->id }}">
                            <div class="row">
                                <div class="col container-button">
                                    <button type="submit" class="btn btn-primary btn-save" value="save_domingo_{{ $item->id }}" name="button" disabled>Salvar</button>
                                    @if ($item->id == 1 && $item->dias == 'Domingo')
                                        <button type="submit" class="btn btn-secondary" value="add_domingo" name="button">Adicionar</button>
                                    @elseif($item->id != 1)
                                        <button type="submit" class="btn btn-danger" value="excluir_{{ $item->id }}" name="button">Excluir</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach ($schedules as $item)
                    @if ($item->dias == 'Segunda-Feira')
                        <div class="form-group row mb-4 horario-segunda" id="item-{{ $item->id }}">
                            <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">{{ $item->dias }}</label>
                            <div class="container-select">
                                <div class="open-selected-segunda mr-5">
                                    <label class="container_radio">
                                        <input
                                            type="radio" value="open"
                                            @if ($item->is_open == 1)
                                                checked
                                            @endif
                                            name="is_open_selected_segunda_{{ $item->id }}" class="radio-change">
                                        Aberto
                                        <span class="checkmark"></span>
                                    </label>
                                    <i class="icon_creditcard"></i>
                                </div>
                                <div class="open-selected-segunda mr-5">
                                    <label class="container_radio">
                                        <input type="radio" value="closed"
                                        @if ($item->is_open == 0)
                                            checked
                                        @endif
                                        name="is_open_selected_segunda_{{ $item->id }}" class="radio-change">
                                        <span class="checkmark"></span>
                                        Fechado
                                    </label>
                                    <i class="icon_wallet"></i>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_open_segunda_{{ $item->id }}">
                                    <?php
                                    for ($hour = 0; $hour < 24; $hour++) {
                                        for ($minute = 0; $minute < 60; $minute += 30) {
                                            $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                            $suffix = ($hour < 12 ? ' AM' : ' PM');
                                            $selected = ($item->open === $time . $suffix) ? ' selected' : '';
                                            echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_close_segunda_{{ $item->id }}">
                                    <?php
                                        for ($hour = 0; $hour < 24; $hour++) {
                                            for ($minute = 0; $minute < 60; $minute += 30) {
                                                $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                                $suffix = ($hour < 12 ? ' AM' : ' PM');
                                                $selected = ($item->close === $time . $suffix) ? ' selected' : '';
                                                echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" name="segunda" value="{{ $item->id }}">
                            <div class="row">
                                <div class="col container-button">
                                    <button type="submit" class="btn btn-primary btn-save" value="save_segunda_{{ $item->id }}" name="button" disabled>Salvar</button>
                                    @if ($item->id == 2 && $item->dias == 'Segunda-Feira')
                                        <button type="submit" class="btn btn-secondary" value="add_segunda" name="button">Adicionar</button>
                                    @elseif($item->id != 2 && $item->dias == 'Segunda-Feira')
                                        <button type="submit" class="btn btn-danger" value="excluir_{{ $item->id }}" name="button">Excluir</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach ($schedules as $item)
                    @if ($item->dias == 'Terça-Feira')
                        <div class="form-group row mb-4 horario-terca" id="item-{{ $item->id }}">
                            <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">{{ $item->dias }}</label>
                            <div class="container-select">
                                <div class="open-selected-terca mr-5">
                                    <label class="container_radio">
                                        <input
                                            type="radio" value="open"
                                            @if ($item->is_open == 1)
                                                checked
                                            @endif
                                            name="is_open_selected_terca_{{ $item->id }}" class="radio-change">
                                        Aberto
                                        <span class="checkmark"></span>
                                    </label>
                                    <i class="icon_creditcard"></i>
                                </div>
                                <div class="open-selected-terca mr-5">
                                    <label class="container_radio">
                                        <input type="radio" value="closed"
                                        @if ($item->is_open == 0)
                                            checked
                                        @endif
                                        name="is_open_selected_terca_{{ $item->id }}" class="radio-change">
                                        <span class="checkmark"></span>
                                        Fechado
                                    </label>
                                    <i class="icon_wallet"></i>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_open_terca_{{ $item->id }}">
                                    <?php
                                    for ($hour = 0; $hour < 24; $hour++) {
                                        for ($minute = 0; $minute < 60; $minute += 30) {
                                            $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                            $suffix = ($hour < 12 ? ' AM' : ' PM');
                                            $selected = ($item->open === $time . $suffix) ? ' selected' : '';
                                            echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_close_terca_{{ $item->id }}">
                                    <?php
                                        for ($hour = 0; $hour < 24; $hour++) {
                                            for ($minute = 0; $minute < 60; $minute += 30) {
                                                $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                                $suffix = ($hour < 12 ? ' AM' : ' PM');
                                                $selected = ($item->close === $time . $suffix) ? ' selected' : '';
                                                echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" name="terca" value="{{ $item->id }}">
                            <div class="row">
                                <div class="col container-button">
                                    <button type="submit" class="btn btn-primary btn-save" value="save_terca_{{ $item->id }}" name="button" disabled>Salvar</button>
                                    @if ($item->id == 3 && $item->dias == 'Terça-Feira')
                                        <button type="submit" class="btn btn-secondary" value="add_terca" name="button">Adicionar</button>
                                    @elseif($item->id != 3 && $item->dias == 'Terça-Feira')
                                        <button type="submit" class="btn btn-danger" value="excluir_{{ $item->id }}" name="button">Excluir</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach ($schedules as $item)
                    @if ($item->dias == 'Quarta-Feira')
                        <div class="form-group row mb-4 horario-quarta" id="item-{{ $item->id }}">
                            <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">{{ $item->dias }}</label>
                            <div class="container-select">
                                <div class="open-selected-quarta mr-5">
                                    <label class="container_radio">
                                        <input
                                            type="radio" value="open"
                                            @if ($item->is_open == 1)
                                                checked
                                            @endif
                                            name="is_open_selected_quarta_{{ $item->id }}" class="radio-change">
                                        Aberto
                                        <span class="checkmark"></span>
                                    </label>
                                    <i class="icon_creditcard"></i>
                                </div>
                                <div class="open-selected-quarta mr-5">
                                    <label class="container_radio">
                                        <input type="radio" value="closed"
                                        @if ($item->is_open == 0)
                                            checked
                                        @endif
                                        name="is_open_selected_quarta_{{ $item->id }}" class="radio-change">
                                        <span class="checkmark"></span>
                                        Fechado
                                    </label>
                                    <i class="icon_wallet"></i>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_open_quarta_{{ $item->id }}">
                                    <?php
                                    for ($hour = 0; $hour < 24; $hour++) {
                                        for ($minute = 0; $minute < 60; $minute += 30) {
                                            $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                            $suffix = ($hour < 12 ? ' AM' : ' PM');
                                            $selected = ($item->open === $time . $suffix) ? ' selected' : '';
                                            echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_close_quarta_{{ $item->id }}">
                                    <?php
                                        for ($hour = 0; $hour < 24; $hour++) {
                                            for ($minute = 0; $minute < 60; $minute += 30) {
                                                $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                                $suffix = ($hour < 12 ? ' AM' : ' PM');
                                                $selected = ($item->close === $time . $suffix) ? ' selected' : '';
                                                echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" name="quarta" value="{{ $item->id }}">
                            <div class="row">
                                <div class="col container-button">
                                    <button type="submit" class="btn btn-primary btn-save" value="save_quarta_{{ $item->id }}" name="button" disabled>Salvar</button>
                                    @if ($item->id == 4 && $item->dias == 'Quarta-Feira')
                                        <button type="submit" class="btn btn-secondary" value="add_quarta" name="button">Adicionar</button>
                                    @elseif($item->id != 4 && $item->dias == 'Quarta-Feira')
                                        <button type="submit" class="btn btn-danger" value="excluir_{{ $item->id }}" name="button">Excluir</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach ($schedules as $item)
                    @if ($item->dias == 'Quinta-Feira')
                        <div class="form-group row mb-4 horario-quinta" id="item-{{ $item->id }}">
                            <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">{{ $item->dias }}</label>
                            <div class="container-select">
                                <div class="open-selected-quinta mr-5">
                                    <label class="container_radio">
                                        <input
                                            type="radio" value="open"
                                            @if ($item->is_open == 1)
                                                checked
                                            @endif
                                            name="is_open_selected_quinta_{{ $item->id }}" class="radio-change">
                                        Aberto
                                        <span class="checkmark"></span>
                                    </label>
                                    <i class="icon_creditcard"></i>
                                </div>
                                <div class="open-selected-quinta mr-5">
                                    <label class="container_radio">
                                        <input type="radio" value="closed"
                                        @if ($item->is_open == 0)
                                            checked
                                        @endif
                                        name="is_open_selected_quinta_{{ $item->id }}" class="radio-change">
                                        <span class="checkmark"></span>
                                        Fechado
                                    </label>
                                    <i class="icon_wallet"></i>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_open_quinta_{{ $item->id }}">
                                    <?php
                                    for ($hour = 0; $hour < 24; $hour++) {
                                        for ($minute = 0; $minute < 60; $minute += 30) {
                                            $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                            $suffix = ($hour < 12 ? ' AM' : ' PM');
                                            $selected = ($item->open === $time . $suffix) ? ' selected' : '';
                                            echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_close_quinta_{{ $item->id }}">
                                    <?php
                                        for ($hour = 0; $hour < 24; $hour++) {
                                            for ($minute = 0; $minute < 60; $minute += 30) {
                                                $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                                $suffix = ($hour < 12 ? ' AM' : ' PM');
                                                $selected = ($item->close === $time . $suffix) ? ' selected' : '';
                                                echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" name="quinta" value="{{ $item->id }}">
                            <div class="row">
                                <div class="col container-button">
                                    <button type="submit" class="btn btn-primary btn-save" value="save_quinta_{{ $item->id }}" name="button" disabled>Salvar</button>
                                    @if ($item->id == 5 && $item->dias == 'Quinta-Feira')
                                        <button type="submit" class="btn btn-secondary" value="add_quinta" name="button">Adicionar</button>
                                    @elseif($item->id != 5 && $item->dias == 'Quinta-Feira')
                                        <button type="submit" class="btn btn-danger" value="excluir_{{ $item->id }}" name="button">Excluir</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach ($schedules as $item)
                    @if ($item->dias == 'Sexta-Feira')
                        <div class="form-group row mb-4 horario-sexta" id="item-{{ $item->id }}">
                            <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">{{ $item->dias }}</label>
                            <div class="container-select">
                                <div class="open-selected-sexta mr-5">
                                    <label class="container_radio">
                                        <input
                                            type="radio" value="open"
                                            @if ($item->is_open == 1)
                                                checked
                                            @endif
                                            name="is_open_selected_sexta_{{ $item->id }}" class="radio-change">
                                        Aberto
                                        <span class="checkmark"></span>
                                    </label>
                                    <i class="icon_creditcard"></i>
                                </div>
                                <div class="open-selected-sexta mr-5">
                                    <label class="container_radio">
                                        <input type="radio" value="closed"
                                        @if ($item->is_open == 0)
                                            checked
                                        @endif
                                        name="is_open_selected_sexta_{{ $item->id }}" class="radio-change">
                                        <span class="checkmark"></span>
                                        Fechado
                                    </label>
                                    <i class="icon_wallet"></i>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_open_sexta_{{ $item->id }}">
                                    <?php
                                    for ($hour = 0; $hour < 24; $hour++) {
                                        for ($minute = 0; $minute < 60; $minute += 30) {
                                            $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                            $suffix = ($hour < 12 ? ' AM' : ' PM');
                                            $selected = ($item->open === $time . $suffix) ? ' selected' : '';
                                            echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_close_sexta_{{ $item->id }}">
                                    <?php
                                        for ($hour = 0; $hour < 24; $hour++) {
                                            for ($minute = 0; $minute < 60; $minute += 30) {
                                                $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                                $suffix = ($hour < 12 ? ' AM' : ' PM');
                                                $selected = ($item->close === $time . $suffix) ? ' selected' : '';
                                                echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" name="sexta" value="{{ $item->id }}">
                            <div class="row">
                                <div class="col container-button">
                                    <button type="submit" class="btn btn-primary btn-save" value="save_sexta_{{ $item->id }}" name="button" disabled>Salvar</button>
                                    @if ($item->id == 6 && $item->dias == 'Sexta-Feira')
                                        <button type="submit" class="btn btn-secondary" value="add_sexta" name="button">Adicionar</button>
                                    @elseif($item->id != 6 && $item->dias == 'Sexta-Feira')
                                        <button type="submit" class="btn btn-danger" value="excluir_{{ $item->id }}" name="button">Excluir</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach ($schedules as $item)

                    @if ($item->dias == 'Sábado')
                        <div class="form-group row mb-4 horario-sabado" id="item-{{ $item->id }}">
                            <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">{{ $item->dias }}</label>
                            <div class="container-select">
                                <div class="open-selected-sabado mr-5">
                                    <label class="container_radio">
                                        <input
                                            type="radio" value="open"
                                            @if ($item->is_open == 1)
                                                checked
                                            @endif
                                            name="is_open_selected_sabado_{{ $item->id }}" class="radio-change">
                                        Aberto
                                        <span class="checkmark"></span>
                                    </label>
                                    <i class="icon_creditcard"></i>
                                </div>
                                <div class="open-selected-sabado mr-5">
                                    <label class="container_radio">
                                        <input type="radio" value="closed"
                                        @if ($item->is_open == 0)
                                            checked
                                        @endif
                                        name="is_open_selected_sabado_{{ $item->id }}" class="radio-change">
                                        <span class="checkmark"></span>
                                        Fechado
                                    </label>
                                    <i class="icon_wallet"></i>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_open_sabado_{{ $item->id }}">
                                    <?php
                                    for ($hour = 0; $hour < 24; $hour++) {
                                        for ($minute = 0; $minute < 60; $minute += 30) {
                                            $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                            $suffix = ($hour < 12 ? ' AM' : ' PM');
                                            $selected = ($item->open === $time . $suffix) ? ' selected' : '';
                                            echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2 form-group">
                                <select class="form-control selectric_1 select-change" name="hour_selected_close_sabado_{{ $item->id }}">
                                    <?php
                                        for ($hour = 0; $hour < 24; $hour++) {
                                            for ($minute = 0; $minute < 60; $minute += 30) {
                                                $time = ($hour < 10 ? '0' . $hour : $hour) . ':' . ($minute === 0 ? '00' : $minute);
                                                $suffix = ($hour < 12 ? ' AM' : ' PM');
                                                $selected = ($item->close === $time . $suffix) ? ' selected' : '';
                                                echo "<option value=\"$time$suffix\"$selected>$time$suffix</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" name="sabado" value="{{ $item->id }}">
                            <div class="row">
                                <div class="col container-button">
                                    <button type="submit" class="btn btn-primary btn-save" value="save_sabado_{{ $item->id }}" name="button" disabled>Salvar</button>
                                    @if ($item->id == 7 && $item->dias == 'Sábado')
                                        <button type="submit" class="btn btn-secondary" value="add_sabado" name="button">Adicionar</button>
                                    @elseif($item->id != 7 && $item->dias == 'Sábado')
                                        <button type="submit" class="btn btn-danger" value="excluir_{{ $item->id }}" name="button">Excluir</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selects = document.querySelectorAll('.select-change');
            var radios = document.querySelectorAll('.radio-change');

            selects.forEach(function(select) {
                select.addEventListener('change', function() {
                    var item = this.closest('.horario-domingo');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });

            radios.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    var item = this.closest('.horario-domingo');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });


            selects.forEach(function(select) {
                select.addEventListener('change', function() {
                    var item = this.closest('.horario-segunda');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });

            radios.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    var item = this.closest('.horario-segunda');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });


            selects.forEach(function(select) {
                select.addEventListener('change', function() {
                    var item = this.closest('.horario-terca');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });

            radios.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    var item = this.closest('.horario-terca');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });



            selects.forEach(function(select) {
                select.addEventListener('change', function() {
                    var item = this.closest('.horario-quarta');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });

            radios.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    var item = this.closest('.horario-quarta');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });

            selects.forEach(function(select) {
                select.addEventListener('change', function() {
                    var item = this.closest('.horario-quinta');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });

            radios.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    var item = this.closest('.horario-quinta');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });

            selects.forEach(function(select) {
                select.addEventListener('change', function() {
                    var item = this.closest('.horario-sexta');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });

            radios.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    var item = this.closest('.horario-sexta');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });

            selects.forEach(function(select) {
                select.addEventListener('change', function() {
                    var item = this.closest('.horario-sabado');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });

            radios.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    var item = this.closest('.horario-sabado');
                    var btnSave = item.querySelector('.btn-save');
                    btnSave.disabled = false;
                });
            });
        });
    </script>
@endsection
