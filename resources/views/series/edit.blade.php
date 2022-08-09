<x-layout title="Editar Série '{!! $serie->title !!}'">
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->title" :update="true" />
</x-layout>
