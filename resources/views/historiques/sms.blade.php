@extends('historiques.index')
@section('appel-content')

<div class="w-full md:w-1/2 mx-auto p-4">
    <form action="{{ route('historiques.sms') }}" method="GET" class="flex items-center bg-white border rounded-lg shadow-lg overflow-hidden">
      <input type="text" class="bg-gray-100 appearance-none border-none w-full text-gray-800  py-2 px-4 leading-tight focus:outline-none" name="search" placeholder="Search for a number...">
      <button type="submit" class=" bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">
        <i class="ti-search  bg-orange-500 mr-2"></i> Search
      </button>
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
           @endforeach
            </tbody>     </tr>
                
        </table>
    </div>
</div>
@elseif(request()->has('search'))
<p class="mt-4">Aucun enregistrement trouvé</p>
@endif

@endsection
