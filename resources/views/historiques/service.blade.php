@extends('historiques.index')
@section('appel-content')

<div class="">
    <form action="{{ route('historiques.appel') }}" method="GET" class="input-group">
        <input type="text" class="form-control" name="search" placeholder="search for a number">
        <div class="input-group-addon">
            <span class="input-group-test"><i class="ti-search"></i></span>
        </div>
    </form>
</div>


<div class="bg-white shadow-lg rounded-lg overflow-hidden mt-4">
    <div class="px-6 py-4">
        <table class="w-full table-auto text-center">
            <thead>
                <tr class="bg-gray-300 text-gray-700">
                    <th class="py-4">id</th>
                    <th class="py-4">num_tel</th>
                    <th class="py-4">date_acivation</th>
                    <th class="py-4">date_fin</th>
                </tr>
            </thead>
            <tbody>
                <tr class=" hover:bg-gray-200">
                     !<td class="py-4">rueighei</td> 
                     <td class="py-4">rueighei</td> 
                     <td class="py-4">rueighei</td> 
                     <td class="py-4">rueighei</td> 
                     <td class="py-4">rueighei min</td> 
                     <td class="py-4">rueighei um </td> 
                     <td class="py-4">rueighei</td> 
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
