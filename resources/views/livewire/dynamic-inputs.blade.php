<div class="sm:col-span-full">
    {{-- Do your work, then step back. --}}
    <table class="w-1/2 text-sm font-medium text-left text-gray-900 ">
        <thead>
            <tr>
                <th scope="col" class="w-1/3">
                    Items
                </th>
                <th scope="col" class="w-1/3">
                    Quantity
                </th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($docitems as $index=>$docitem)
            <tr class="mt-2">
                <td>
                    <select wire:model="items.{{ $index }}.name"
                        class="w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                        placeholder="Item Name">
                        <option>Item 1</option>
                        <option>Item 2</option>
                        <option>Item 3</option>
                    </select>
                </td>
                <td>
                    <input type="text" wire:model="items.{{ $index }}.qty"
                        class="w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="Item Quantity">
                </td>
                <td>
                    <button type="submit"
                        class="block flex justify-end rounded-md bg-red-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Remove
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-span-2">
        <div class="mt-2">
            <button type="submit" wire:click="add()"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Add Item
            </button>
        </div>
    </div>
</div>
