<x-layout>
    <div class="mx-auto space-y-3 max-w-7xl py-6 sm:px-6 lg:px-8">
        <x-slot name="headertitle">Delivery Order Documents</x-slot>
        <a href="/deliveryorder-app/public/{{ $listdoc->last()->id+1 }}/create"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add
            new document
        </a>
        @foreach($listdoc as $lst)
        <x-doclist>
            <div>
                <h1 >Delivery Order Number: <a class="font-bold">{{ $lst['DONumber'] }}</a></h1>
                <p class="text-sm">Sent to <a class="font-bold">{{ $lst->buyerinfo->Name }}</a> on <a class="font-bold">{{ $lst['DeliveryDate'] }}</a></p>
            </div>
        </x-doclist>
        @endforeach
    </div>
</x-layout>
