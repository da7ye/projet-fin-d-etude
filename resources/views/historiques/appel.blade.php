@extends('historiques.index')
@section('appel-content')

<div class="w-full md:w-1/2 mx-auto p-4">
    <form action="{{ route('historiques.appel') }}" method="GET" class="flex items-center bg-white border rounded-lg shadow-lg overflow-hidden">
      <input type="text" class="bg-gray-100 appearance-none border-none w-full text-gray-800 mr-3 py-2 px-4 leading-tight focus:outline-none" name="search" placeholder="Search for a number...">
      <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded">
        <i class="ti-search mr-2"></i> Search
      </button>
    </form>
  </div>
  
  
  


@if($appeles->isNotEmpty())
<div class="bg-white shadow-lg rounded-lg overflow-hidden mt-4">
    <div class="px-6 py-4">
        <table class="w-full table-auto text-center">
            <thead>
                <tr class="bg-gray-300 text-gray-700">
                    <th class="py-4">id</th>
                    <th class="py-4">numTel</th>
                    <th class="py-4">autreTEl</th>
                    <th class="py-4">dtAppel</th>
                    <th class="py-4">duree</th>
                    <th class="py-4">cout</th>
                    <th class="py-4">balanceApres</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appeles as $appel)
                <tr class=" hover:bg-gray-200">
                    <td class="py-4">{{ $appel->id }}</td>
                    <td class="py-4">{{ $appel->num_tel }}</td>
                    <td class="py-4">{{ $appel->autre_num }}</td>
                    <td class="py-4">{{ $appel->date_appel }}</td>
                    <td class="py-4">{{ $appel->duree }} min</td>
                    <td class="py-4">{{ $appel->cout }} um </td>
                    <td class="py-4">{{ $appel->balance_apres }}</td>
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
