<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
</script>

<x-layout :hiddenbtn="true">
    <x-slot name="headertitle">Delivery Order Form</x-slot>
    <form method="POST" action="." enctype="multipart/form-data">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Seller</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Seller information, this section will be read
                    only.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <x-input-label for="sellername" class="block text-sm font-medium leading-6 text-gray-900">Seller
                            Name</x-input-label>
                        <div class="mt-2">
                            <!--
                    <div  class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
-->
                            <x-text-input readonly :disabled="true" name="sellername" id="sellername"
                                value="Control System" type="text"
                                class="block w-full flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm"
                                placeholder="Control System"></x-text-input>
                            <!--
                    <x-text-input readonly name="sellername" id="sellername" value="Control System" type="text" class="block flex border-1 bg-transparent select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm"  placeholder="Control System"></x-text-input>
                    </div>
-->
                        </div>
                    </div>

                    <div class="col-span-full">
                        <x-input-label for="selleraddress"
                            class="block text-sm font-medium leading-6 text-gray-900">Seller
                            Address</x-input-label>
                        <div class="mt-2">
                            <div
                                class="block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <x-text-input readonly :disabled="true" id="selleraddress" name="selleraddress"
                                    value="Jalan Ampera Raya" type="text"
                                    class="block w-full flex border-0 bg-transparent select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm"></x-text-input>
                                <x-text-input readonly :disabled="true" id="selleraddress2" name="selleraddress2"
                                    value="Gedung B" type="text"
                                    class="block w-full flex border-0 bg-transparent select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm"></x-text-input>
                                <!--
                    <textarea readonly id="selleraddress" name="selleraddress" rows="3"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
Jalan Ampera Raya &#13;&#10; Gedung B
                    </textarea>
-->
                            </div>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600"></p>
                    </div>

                    <div class="sm:col-span-1">
                        <x-input-label for="sellernumber"
                            class="block text-sm font-medium leading-6 text-gray-900">Seller
                            Number</x-input-label>
                        <div class="mt-2">
                            <input readonly disabled name="sellernumber" id="sellernumber" type="tel"
                                pattern="^[0-9-+\s()]{6,16}$" value = "(021)524463"
                                class="block w-full rounded-md border-0 py-1.5 pl-1 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Buyer</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Buyer information. </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <x-input-label for="buyername" class="block text-sm font-medium leading-6 text-gray-900">Buyer
                            Name</x-input-label>
                        <div class="mt-2">
<!--
                            <select name="buyername" id="buyername" class="block w-full flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 select-none items-center py-1.5 pl-1 text-gray-900 sm:text-sm placeholeder:text-gray-400"
                                placeholder="Seller Name">
                            <option> Item 1</option>
                            <option> Item 2</option>
                            <option> Item 3</option>
                            </select>
-->    
                            <x-text-input :disabled="false" name="buyername" id="buyername" type="text"
                                class="block w-full flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 select-none items-center py-1.5 pl-1 text-gray-900 sm:text-sm placeholeder:text-gray-400"
                                placeholder="Buyer Name"></x-text-input>
                        </div>
                        @error('buyername')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-full">
                        <x-input-label for="buyeraddress"
                            class="block text-sm font-medium leading-6 text-gray-900">Buyer
                            Address</x-input-label>
                        <div class="mt-2">
                            <div
                                class="block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <x-text-input :disabled="false" id="buyeraddress" name="buyeraddress" type="text"
                                    class="block w-full flex border-0 bg-transparent select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm placeholder:text-gray-400"
                                    placeholder="Buyer Address 1" value=""></x-text-input>
                                <x-text-input :disabled="false" id="buyeraddress2" name="buyeraddress2" type="text"
                                    class="block w-full flex border-0 bg-transparent select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm placeholder:text-gray-400"
                                    placeholder="Buyer Address 2"></x-text-input>
                            </div>
                        </div>
                        @error('buyeraddress')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror                        
                        <p class="mt-3 text-sm leading-6 text-gray-600"></p>
                    </div>

                    <div class="sm:col-span-1">
                        <x-input-label for="buyernumber" class="block text-sm font-medium leading-6 text-gray-900">Buyer
                            Number</x-input-label>
                        <div class="mt-2">
                            <input name="buyernumber" id="buyernumber" type="tel" pattern="^((\(021\)|))([0-9]){6,12}$"
                                class="block w-full rounded-md border-0 py-1.5 pl-1 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="(021)123456">
                        </div>
                        @error('buyernumber')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror                                    
                    </div>
                </div>

            </div>

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Delivery Order</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Delivery order document information.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <x-input-label for="DONumber" class="block text-sm font-medium leading-6 text-gray-900">DO
                            Number</x-input-label>
                        <div class="mt-2">
                            <x-text-input :disabled="true" type="text" name="DONumber" id="DONumber"
                                class="block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ $docnum }}"></x-text-input>
                            <x-text-input :disabled="false" type="hidden" name="DONumber" id="DONumber"
                                class="block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ $docnum }}"></x-text-input>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="PONumber" class="block text-sm font-medium leading-6 text-gray-900">PO
                            Number</label>
                        <div class="mt-2">
                            <input type="text" name="PONumber" id="PONumber" maxlength=6, pattern="^[0-9]{6}$"
                                class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('PONumber')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror                        
                    </div>

                    <div class="sm:col-span-2">
                        <label for="datepicker" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                        <div class="mt-2">
                            <input type="text" name="datepicker" id="datepicker"
                                class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('datepicker')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror                             
                    </div>

                    <div class="sm:col-span-full">
                        <label for="notes" class="block text-sm font-medium leading-6 text-gray-900">Notes</label>
                        <div class="mt-2">
                            <textarea id="notes" name="notes" type="text"
                                class="block row-2 w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>

                    <!--@-livewireStyles-->
                    <!--<live wirex:dynamic-inputs />-->

                    <div class="sm:col-span-2">
                        <label for="items" class="block text-sm font-medium leading-6 text-gray-900">Items</label>
                        <div class="mt-2">
                            <select id="items1" name="items1"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>Select Item</option>
                                @foreach(App\Models\Item::all(["ItemDesc"]) as $item)
                                <option>{{ $item->ItemDesc }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <label for="itemqty"
                            class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                        <div class="mt-2">
                            <input type="text" name="itemqty1" id="itemqty1"
                                class="block w-3/5 rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('itemqty1')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <label for="imgfile1"
                            class="block text-sm font-medium leading-6 text-transparent">a</label>
                        <input type="file" id="imgfile1" name="imgfile1" accept="image/png, image/jpeg, image/jpg" class="w-full py-1.5 px-1 text-gray-900 sm:text-sm sm:leading-6">
                        @error('imgfile1')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror                    
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="items" class="block text-sm font-medium leading-6 text-gray-900">Items</label>
                        <div class="mt-2">
                            <select id="items2" name="items2"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>Select Item</option>
                                @foreach(App\Models\Item::all(["ItemDesc"]) as $item)
                                <option>{{ $item->ItemDesc }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <label for="itemqty"
                            class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                        <div class="mt-2">
                            <input type="text" name="itemqty2" id="itemqty2"
                                class="block w-3/5 rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('itemqty2')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <label for="imgfile2"
                            class="block text-sm font-medium leading-6 text-transparent">a</label>                        
                        <input type="file" id="imgfile2" name="imgfile2" accept="image/png, image/jpeg, image/jpg" class="w-full py-1.5 px-1 text-gray-900 sm:text-sm sm:leading-6"/>
                        @error('imgfile2')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror                    
                    </div>

                    <div class="sm:col-span-2">
                        <label for="items" class="block text-sm font-medium leading-6 text-gray-900">Items</label>
                        <div class="mt-2">
                            <select id="items3" name="items3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>Select Item</option>
                                @foreach(App\Models\Item::all(["ItemDesc"]) as $item)
                                <option>{{ $item->ItemDesc }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <label for="itemqty"
                            class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                        <div class="mt-2">
                            <input type="text" name="itemqty3" id="itemqty3"
                                class="block w-3/5 rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('itemqty3')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror                    
                    </div>

                    <div class="col-span-2">
                        <label for="imgfile3"
                            class="block text-sm font-medium leading-6 text-transparent">a</label>                        
                        <input type="file" id="imgfile3" name="imgfile3" accept="image/png, image/jpeg, image/jpg" class="w-full py-1.5 px-1 text-gray-900 sm:text-sm sm:leading-6"/>
                        @error('imgfile3')
                            <p class="text-red-500 italic text-sm">{{ $message }}</p>
                        @enderror                    
                    </div>
                    
                    @if ($errors->first('items')!=null)
                        <div class="col-span-full">
                            <p class="text-red-500 italic text-sm">{{ $errors->first('items') }}</p>
                        </div>    
                    @endif
                    

                    <!--@-livewireScripts-->
<!--
                    <div class="col-span-1">
                        <div class="mt-2 pt-6">
                            <button type="button"
                                class="rounded-md bg-red-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Remove
                            </button>
                        </div>
                    </div>

                    <div class="col-span-2">
                        <div class="mt-2">
                            <button type="button"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Add Item
                            </button>
                        </div>
                    </div>
                -->
                    
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="." type="button"
                    class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
    </form>
</x-layout>
