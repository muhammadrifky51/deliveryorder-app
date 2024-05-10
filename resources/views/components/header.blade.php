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
      <h1 class="text-3xl font-bold tracking-tight text-slate-900">Delivery Order Documents</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto space-y-3 max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <a href="/deliveryorder-app/public/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add new document</a>
        <div class="mx-auto max-w py-6 rounded-md bg-white-800 flex text-lg rounded-md border-solid border-2 px-2">
        Something
        </div>
    </div>
  </main>
</div>
