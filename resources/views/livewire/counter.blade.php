<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>Hello World!</h1>
    <div style="text-align: center">
        <button class="btn btn-danger" wire:click="increment">Incremete</button>
        <h1>{{ $count }}</h1>
        <input wire:model="a" type="text" placeholder="A" class="form-control">
        <input wire:model="b" type="text" name="b" placeholder="B" class="form-control">
        <h1>{{ $s }}</h1>
        <h2>{{ $a }} ; {{$b}}
            <button class="btn btn-danger" wire:click="somme({{$a}},{{$b}})">Calculer</button>
    </div>
</div>
