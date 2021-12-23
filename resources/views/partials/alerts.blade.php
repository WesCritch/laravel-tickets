@if (session()->has('success'))
<div class="fixed top-0 left-0 z-10 w-full h-full pt-24 overflow-auto bg-black bg-opacity-50 alert">
   <div class="flex justify-between max-w-sm p-4 mx-auto bg-white rounded-lg font-os">
      <div class="pb-3">
         <h3 class="text-2xl font-semibold">Success</h3>
         <p>{{session('success') }}</p>
      </div>
      <div>
         <button type="button" data-dismiss="alert" class="text-2xl font-semibold" aria-hidden="true">&times;</button>
      </div>
   </div>

</div>
@endif

@if(session()->has('error'))
<div class="fixed top-0 left-0 z-10 w-full h-full pt-24 overflow-auto bg-black bg-opacity-50 alert">
   <div class="flex justify-between max-w-sm p-4 mx-auto bg-white rounded-lg font-os">
      <div class="pb-3">
         <h3 class="text-2xl font-semibold">Error</h3>
         <p>{{session('error') }}</p>
      </div>
      <div>
         <button type="button" data-dismiss="modal" class="text-2xl font-semibold" aria-hidden="true">&times;</button>
      </div>
   </div>

</div>
@endif