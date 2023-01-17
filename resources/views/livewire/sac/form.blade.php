<div>
    @include('flash-message')
    <form wire:submit.prevent="send">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
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
                <select class="campo" wire:model="type">
                    <option>Dúvida, Suguestão, Reclamação ou Elogio</option>
                    <option value="1">Dúvida</option>
                    <option value="2">Suguestão</option>
                    <option value="3">Reclamação</option>
                    <option value="4">Elogio</option>
                    <option value="5">Outros</option>
                </select>
                @error('type')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
            </div>
        </div>
        <textarea cols="30" rows="6" class="campo mt-3" placeholder="Mensagem" wire:model="message"></textarea>
        @error('message')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
        <div class="text-center mt-4"><input type="submit" value="ENVIAR" class="botao"></div>
    </form>
</div>
