<x-app-layout>
  <div class="bg-gray-300 rounded-lg shadow-2xl overflow-hidden w-[1200px] mx-auto my-16">
    <div class="p-6">
      <div class="flex justify-between items-center mb-8">
        <div class="text-lg font-bold">Reclamation Information</div>
        <div class="text-gray-600">{{ $reclamation->created_at->format('M d, Y') }}</div>
      </div>
      <div class="flex flex-col space-y-4">
        <div class="flex justify-between items-center border-b pb-2">
          <div class="text-sm font-bold uppercase text-gray-600">ID reclamation:</div>
          <div class="text-lg font-medium">{{ $reclamation->id }}</div>
        </div>
        <div class="flex justify-between items-center border-b pb-2">
          <div class="text-sm font-bold uppercase text-gray-600">Numero Telephone:</div>
          <div class="text-lg font-medium">{{ $reclamation->contact }}</div>
        </div>
        <div class="flex justify-between items-center border-b pb-2">
          <div class="text-sm font-bold uppercase text-gray-600">Canal:</div>
          <div class="text-lg font-medium">{{ $reclamation->canal }}</div>
        </div>
        <div class="flex justify-between items-center border-b pb-2">
          <div class="text-sm font-bold uppercase text-gray-600">Type De Reclamation:</div>
          <div class="text-lg font-medium">{{ $reclamation->typereclamation }}</div>
        </div>
        <div class="flex justify-between items-center border-b pb-2">
          <div class="text-sm font-bold uppercase text-gray-600">Creer Par:</div>
          <div class="text-lg font-medium">{{ $reclamation->user->name }}</div>
        </div>
        <div class="flex justify-between items-center border-b pb-2">
          <div class="text-sm font-bold uppercase text-gray-600">dernière modification Par:</div>
          <div class="text-lg font-medium">{{ $reclamation->updated_at }}</div>
        </div>
        <div class="flex justify-between items-center border-b pb-2">
          <div class="text-sm font-bold uppercase text-gray-600">Delai de Traitement:</div>
          <div class="text-lg font-medium">{{ $reclamation->delai_traitement }}jrs</div>
        </div>
        <div class="flex justify-between items-center border-b pb-2">
          <div class="text-sm font-bold uppercase text-gray-600">Entity Entering Complaint:</div>
          <div class="text-lg font-medium">{{ $reclamation->user->entity->name }}</div>
        </div>
        <div class="flex justify-between items-center border-b pb-2">
          <div class="text-sm font-bold uppercase text-gray-600">Entity Processing Complaint:</div>
          <div class="text-lg font-medium">{{ $reclamation->entite_traitement }}</div>
        </div>
        <div class="flex justify-between items-center border-b pb-2">
          <div class="text-sm font-bold uppercase text-gray-600">State:</div>
          <div class="text-lg font-medium">{{ $reclamation->etat }}</div>
        </div>
        <div class="flex justify-between items-center border-b pb-2">
          <div class="text-sm font-bold uppercase text-gray-600">Description:</div>
          <div class="text-lg font-medium">{{ $reclamation->description }}</div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
