<div class="mt-5">

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <a href="{{ route('login') }}" class="btn btn-success">
               Ir para o Login
            </a>
    @endif


    <div class="card">
        <h5 class="card-header">Cadastro de Usuário</h5>
        <div class="card-body">
            <form wire:submit.prevent='store'>
                {{-- Nome --}}
                <div class="mb-3">
                    <label for="nome" class="form-label fw-semibold">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo"
                        wire:model.defer="name">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- E-mail --}}
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="exemplo@email.com" wire:model.defer="email">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Senha --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" wire:model="password"
                        placeholder="Digite sua senha">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
