@extends('historiques.index')
@section('appel-content')

<div class="">
    <form action="{{ route('historiques.sms') }}" method="GET" class="input-group">
        <input type="text" class="form-control" name="search" placeholder="search for a number">
        <div class="input-group-addon">
            <span class="input-group-test"><i class="ti-search"></i></span>
        </div>
    </form>
</div>

@if($sms->isNotEmpty())
<div class="bg-white shadow-lg rounded-lg overflow-hidden mt-4">
    <div class="px-6 py-4">
        <table class="w-full table-auto text-center">
            <thead>
                <tr class="bg-gray-300 text-gray-700">
                    <th class="py-4">id</th>
                    <th class="py-4">num_tel</th>
                    <th class="py-4">autre_num</th>
                    <th class="py-4">date_sms</th>
                    <th class="py-4">cout</th>
                    <th class="py-4">balanceApres</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sms as $sms)
                <tr class=" hover:bg-gray-200">
                    <td class="py-4">{{ $sms->id }}</td>
                    <td class="py-4">{{ $sms->num_tel }}</td>
                    <td class="py-4">{{ $sms->autre_num }}</td>
                    <td class="py-4">{{ $sms->date_sms }}</td>
                    <td class="py-4">{{ $sms->cout }} um </td>
                    <td class="py-4">{{ $sms->balance_apres }}</td>
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
