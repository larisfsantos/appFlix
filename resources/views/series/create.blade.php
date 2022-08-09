<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="title" class="form-label">Nome:</label>
                <input type="text"
                       autofocus
                       id="title"
                       name="title"
                       class="form-control"
                       value="{{ old('title') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
