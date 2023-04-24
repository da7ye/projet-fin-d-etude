@extends('historiques.index')
@section('appel-content')

<div class="">
    <form action="{{ route('historiques.internet') }}" method="GET" class="input-group">
        <input type="text" class="form-control" name="search" placeholder="search for a number">
        <div class="input-group-addon">
            <span class="input-group-test"><i class="ti-search"></i></span>
        </div>
    </form>
</div>

@if($internets->isNotEmpty())
<div class="bg-white shadow-lg rounded-lg overflow-hidden mt-4">
    <div class="px-6 py-4">
        <table class="w-full table-auto text-center">
            <thead>
                <tr class="bg-gray-300 text-gray-700">
                    <th class="py-4">id</th>
                    <th class="py-4">numTel</th>
                    <th class="py-4">debut_session</th>
                    <th class="py-4">fin_session</th>
                    <th class="py-4">cout</th>
                    <th class="py-4">balanceApres</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($internets as $internet)
                <tr class=" hover:bg-gray-200">
                    <td class="py-4">{{ $internet->id }}</td>
                    <td class="py-4">{{ $internet->num_tel }}</td>
                    <td class="py-4">{{ $internet->debut_session }}</td>
                    <td class="py-4">{{ $internet->fin_session }}</td>
                    <td class="py-4">{{ $internet->cout }} min</td>
                    <td class="py-4">{{ $internet->balance_apres }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@elseif(request()->has('search'))
<p class="mt-4">Aucun enregistrement trouvé</p>
@endif

@endsection
