@extends('historiques.index')
@section('appel-content')

<div class="">
    <form action="{{ route('historiques.recharge') }}" method="GET" class="input-group">
        <input type="text" class="form-control" name="search" placeholder="search for a number">
        <div class="input-group-addon">
            <span class="input-group-test"><i class="ti-search"></i></span>
        </div>
    </form>
</div>

@if($recharges->isNotEmpty())
<div class="bg-white shadow-lg rounded-lg overflow-hidden mt-4">
    <div class="px-6 py-4">
        <table class="w-full table-auto text-center">
            <thead>
                <tr class="bg-gray-300 text-gray-700">
                    <th class="py-4">id</th>
                    <th class="py-4">num_tel</th>
                    <th class="py-4">num_carte</th>
                    <th class="py-4">date_recharge</th>
                    <th class="py-4">cout</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recharges as $recharge)
                <tr class=" hover:bg-gray-200">
                    <td class="py-4">{{ $recharge->id }}</td>
                    <td class="py-4">{{ $recharge->num_tel }}</td>
                    <td class="py-4">{{ $recharge->num_carte }}</td>
                    <td class="py-4">{{ $recharge->date_recharge }}</td>
                    <td class="py-4">{{ $recharge->cout }}</td>
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
