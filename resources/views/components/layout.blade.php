<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<script src="https://cdn.tailwindcss.com"></script>
<div class="min-h-full">
  <nav class="bg-slate-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-20" src="https://www.ptcs.co.id/assets/img/ptcs.png?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/deliveryorder-app/public" class="bg-slate-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
            </div>
          </div>
        </div>
        </div>
      </div>
  </nav>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Delivery Order Form</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <form>
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Seller</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Seller information, this section will be read only.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-2">
                <x-input-label for="sellername" class="block text-sm font-medium leading-6 text-gray-900">Seller Name</x-input-label>
                <div class="mt-2">
<!--
                    <div  class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
-->
                    <x-text-input readonly :disabled="true" name="sellername" id="sellername" value="Control System" type="text" class="block w-full flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm"  placeholder="Control System"></x-text-input>
<!--
                    <x-text-input readonly name="sellername" id="sellername" value="Control System" type="text" class="block flex border-1 bg-transparent select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm"  placeholder="Control System"></x-text-input>
                    </div>
-->
                </div>
                </div>

                <div class="col-span-full">
                <x-input-label for="selleraddress" class="block text-sm font-medium leading-6 text-gray-900">Seller Address</x-input-label>
                <div class="mt-2">
                    <div  class="block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-text-input readonly :disabled="true" id="selleraddress" name="selleraddress" value="Jalan Ampera Raya" type="text" class="block w-full flex border-0 bg-transparent select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm"></x-text-input>
                        <x-text-input readonly :disabled="true" id="selleraddress2" name="selleraddress2" value="Gedung B" type="text" class="block w-full flex border-0 bg-transparent select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm"></x-text-input>
<!--
                    <textarea readonly id="selleraddress" name="selleraddress" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
Jalan Ampera Raya &#13;&#10; Gedung B
                    </textarea>
-->
                    </div>
                </div>
                <p class="mt-3 text-sm leading-6 text-gray-600"></p>
                </div>

                <div class="sm:col-span-1">
                <x-input-label for="sellernumber" class="block text-sm font-medium leading-6 text-gray-900">Seller Number</x-input-label>
                <div class="mt-2">
                    <input readonly disabled name="sellernumber" id="sellernumber" type="tel" pattern="^[0-9-+\s()]{6,16}$"  value = "(021)524463" class="block w-full rounded-md border-0 py-1.5 pl-1 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
            </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Buyer</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Buyer information.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-2">
                <x-input-label for="buyername" class="block text-sm font-medium leading-6 text-gray-900">Buyer Name</x-input-label>
                <div class="mt-2">
                    <x-text-input :disabled="false" name="buyername" id="buyername" type="text" class="block w-full flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 select-none items-center py-1.5 pl-1 text-gray-900 sm:text-sm placeholeder:text-gray-400"  placeholder="Seller Name"></x-text-input>
                </div>
                </div>

                <div class="col-span-full">
                <x-input-label for="buyeraddress" class="block text-sm font-medium leading-6 text-gray-900">Buyer Address</x-input-label>
                <div class="mt-2">
                    <div  class="block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-text-input :disabled="false" id="buyeraddress" name="buyeraddress" type="text" class="block w-full flex border-0 bg-transparent select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm placeholder:text-gray-400" placeholder="Buyer Address 1"></x-text-input>
                        <x-text-input :disabled="false" id="buyeraddress2" name="buyeraddress2" type="text" class="block w-full flex border-0 bg-transparent select-none items-center py-1.5 pl-1 text-gray-500 sm:text-sm placeholder:text-gray-400" placeholder="Buyer Address 2"></x-text-input>
                    </div>
                </div>
                <p class="mt-3 text-sm leading-6 text-gray-600"></p>
                </div>

                <div class="sm:col-span-1">
                <x-input-label for="buyernumber" class="block text-sm font-medium leading-6 text-gray-900">Buyer Number</x-input-label>
                <div class="mt-2">
                    <input name="buyernumber" id="buyernumber" type="tel" pattern="^[0-9-+\s()]{6,16}$" class="block w-full rounded-md border-0 py-1.5 pl-1 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="(021)123456">
                </div>
                </div>
            </div>

            </div>

            <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Delivery Order</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Delivery order document information.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                <div class="mt-2">
                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                <div class="mt-2">
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-4">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-3">
                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                <div class="mt-2">
                    <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                    </select>
                </div>
                </div>

                <div class="col-span-full">
                <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Street address</label>
                <div class="mt-2">
                    <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-2 sm:col-start-1">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                <div class="mt-2">
                    <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-2">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">State / Province</label>
                <div class="mt-2">
                    <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-2">
                <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">ZIP / Postal code</label>
                <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
            </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Notifications</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">We'll always let you know about important changes, but you pick what else you want to hear about.</p>

            <div class="mt-10 space-y-10">
                <fieldset>
                <legend class="text-sm font-semibold leading-6 text-gray-900">By Email</legend>
                <div class="mt-6 space-y-6">
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="comments" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-sm leading-6">
                        <label for="comments" class="font-medium text-gray-900">Comments</label>
                        <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="candidates" name="candidates" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-sm leading-6">
                        <label for="candidates" class="font-medium text-gray-900">Candidates</label>
                        <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                    </div>
                    </div>
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="text-sm leading-6">
                        <label for="offers" class="font-medium text-gray-900">Offers</label>
                        <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                    </div>
                    </div>
                </div>
                </fieldset>
                <fieldset>
                <legend class="text-sm font-semibold leading-6 text-gray-900">Push Notifications</legend>
                <p class="mt-1 text-sm leading-6 text-gray-600">These are delivered via SMS to your mobile phone.</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                    <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="push-everything" class="block text-sm font-medium leading-6 text-gray-900">Everything</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                    <input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">Same as email</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                    <input id="push-nothing" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="push-nothing" class="block text-sm font-medium leading-6 text-gray-900">No push notifications</label>
                    </div>
                </div>
                </fieldset>
            </div>
            </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/deliveryorder-app/public" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
        </form>

    </div>
  </main>
</div>

</div>
  </main>
</div>
