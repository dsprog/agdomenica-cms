<div>
    @include('flash-message')
    <form wire:submit.prevent="send">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
            <div>
                <input type="text" placeholder="Nome Completo" class="campo" wire:model="name">
                @error('name')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
            </div>
            <div>
                <input type="email" placeholder="E-mail" class="campo" wire:model="email">
                @error('email')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
            </div>
            <div>
                <input type="text" placeholder="Telefone" class="campo" wire:model="phone">
                @error('phone')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
            </div>
            <div>
                <input type="text" placeholder="UF" class="campo" wire:model="uf">
                @error('uf')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
            </div>
            <div>
                <input type="text" placeholder="Cidade" class="campo" wire:model="city">
                @error('city')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
            </div>
            <div>
                <select class="campo" wire:model="type">
                    <option>Você é?</option>
                    <option value="1">Consumidor</option>
                    <option value="2">Nutricionista/Médico</option>
                    <option value="3">Lojista</option>
                    <option value="4">Outros</option>
                </select>
                @error('type')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
            </div>
        </div>
        <textarea cols="30" rows="6" class="campo mt-3" placeholder="Observação" wire:model="note"></textarea>
        @error('note')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
        <div class="text-center mt-4"><input type="submit" value="ENVIAR" class="botao"></div>
    </form>
</div>
