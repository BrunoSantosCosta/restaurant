@extends('layouts.backend')
@section('title', 'Produtos - Destaques')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card col">
                <div class="card-header col d-block">
                    <h4>{{ $page_title }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('styles.store') }}" method="POST" class="form-inline">
                        @csrf
                        <div class="form-group mb-2 color-picker">
                            <label for="colorPicker">Escolha uma cor:</label>
                            <div class="color-box" id="colorBox"></div>
                            <input type="color" id="colorPicker" name="color" value="{{ $general_color }}" onchange="updateColorBox(this)">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 ml-2">Salvar Cor</button>
                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function updateColorBox(element) {
        document.getElementById('colorBox').style.backgroundColor = element.value;
    }

    // Inicializa a cor da caixa
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('colorBox').style.backgroundColor = document.getElementById('colorPicker').value;
    });
</script>
@endsection
@section('styles')
<style>
    .color-picker {
        position: relative;
    }
    .color-picker input[type="color"] {
        position: absolute;
        opacity: 0;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        cursor: pointer;
    }
    .color-box {
        width: 40px;
        height: 40px;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        display: inline-block;
    }
</style>
@endsection
