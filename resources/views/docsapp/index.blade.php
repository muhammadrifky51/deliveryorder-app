<x-layout>
    <div class="mx-auto space-y-3 max-w-7xl py-6 sm:px-6 lg:px-8">
        <x-slot name="headertitle">Delivery Order Documents</x-slot>
        <a href="/deliveryorder-app/public/create"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add
            new document
        </a>
        <x-doclist>Document Existing 1</x-doclist>
        <x-doclist>Document Existing 2</x-doclist>
    </div>
</x-layout>
