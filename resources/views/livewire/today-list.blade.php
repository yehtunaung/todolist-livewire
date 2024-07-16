@extends('welcome')
@section('content')
<div class="row">
    <div id="content" class="mx-auto mt-5 row" style="max-width: 500px;">
        @include('livewire.includes.create-today-box')
        <div id="search-box" class="d-flex flex-column align-items-center px-2 my-4 justify-content-center">
            <div class="d-flex justify-content-center align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6" style="width: 35px;">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
                <input type="search" wire:model.live.debounce.100ms="search" placeholder="Search..." class="form-control bg-light ml-2 rounded px-4 py-2">
            </div>
            <span class="text-danger text-xs d-block mt-2">Error</span>

        </div>
        <div id="todos-list">
            @foreach ($todas as $todo)
                @include('livewire.includes.today-card')
            @endforeach

            <div class="d-flex justify-content-between flex-column mt-3">
                    {{ $todas->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection 