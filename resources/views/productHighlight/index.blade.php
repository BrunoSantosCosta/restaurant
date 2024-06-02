@extends('layouts.backend')
@section('title', 'Produtos - Destaques')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card col">
                <div class="card-header col d-block">
                    <h4>{{ $page_title }}</h4>
                    <p>Você deve sempre manter 8 produtos selecionados!</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 fixed-height-column">
                            <ul id="itemList" class="list-group">
                                @foreach ($products as $item)
                                    <li class="list-group-item d-flex justify-content-between align-items-center" data-id="{{ $item->id }}">
                                        {{ $item->title }}
                                        <button class="btn btn-sm btn-primary select-button">&rarr;</button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-6 fixed-height-column">
                            <ul id="selectedItems" class="list-group">
                                @foreach ($highlightedProducts as $item)
                                <li class="list-group-item d-flex justify-content-between align-items-center" data-id="{{ $item->id }}">
                                    {{ $item->title }}
                                    <button class="btn btn-sm btn-danger select-button">←</button>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <form action="{{ route('productHighlight.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="selectedItems" id="selectedItemsInput">
                        <button type="submit" id="submitButton" class="btn btn-primary" disabled>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const itemList = document.getElementById('itemList');
        const selectedItems = document.getElementById('selectedItems');
        const submitButton = document.getElementById('submitButton');
        const selectedItemsInput = document.getElementById('selectedItemsInput');

        itemList.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('select-button')) {
                const item = e.target.closest('.list-group-item');
                if (selectedItems.children.length < 8) {
                    itemList.removeChild(item);
                    const selectedItem = item.cloneNode(true);
                    selectedItem.querySelector('.select-button').classList.replace('btn-primary', 'btn-danger');
                    selectedItem.querySelector('.select-button').textContent = '←';
                    selectedItems.appendChild(selectedItem);
                    updateSubmitButton();
                }
            }
        });

        selectedItems.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('btn-danger')) {
                const item = e.target.closest('.list-group-item');
                selectedItems.removeChild(item);
                item.querySelector('.select-button').classList.replace('btn-danger', 'btn-primary');
                item.querySelector('.select-button').textContent = '→';
                itemList.appendChild(item);
                updateSubmitButton();
            }
        });

        function updateSubmitButton() {
            const items = Array.from(selectedItems.children).map(item => item.getAttribute('data-id'));
            selectedItemsInput.value = JSON.stringify(items);
            submitButton.disabled = selectedItems.children.length !== 8;
        }

        new Sortable(selectedItems, {
            animation: 150,
            onEnd: function() {
                updateSubmitButton();
            }
        });
    });
</script>
@endsection

@section('styles')
<style>
    .fixed-height-column {
        height: 300px;
        overflow-y: auto;
    }
</style>
@endsection
