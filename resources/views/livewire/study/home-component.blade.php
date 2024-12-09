<div>
    <x-navigation/>
    <h1 class="text-3xl font-bold">
        <section>
            <form class="flex w-full h-3/4 bg-slate-100 rounded-md shadow-md" wire:submit.prevent="submit">
                <div class="flex flex-col w-full">
                    <div class="flex items-start p-3 w-full">
                        <button type="button" class="button-warning">
                            Create New Record
                        </button>
                    </div>
                    <div class="flex flex-col">
                        <div class="w-1/2 p-3">
                            <label class="block text-gray-700 text-sm font-bold" for="firstName">
                                FirstName 
                            </label>
                            <input 
                                class="input-field"
                                type="text" 
                                wire:model="firstName"
                                placeholder="Enter your First Name">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="w-1/2 p-3">
                            <label class="block text-gray-700 text-sm font-bold" for="middleName">
                                Middle Name 
                            </label>
                            <input 
                                class="input-field"
                                type="text"
                                wire:model="middleName"
                                placeholder="Enter your Middle Name">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="w-1/2 p-3">
                            <label class="block text-gray-700 text-sm font-bold" for="lastName">
                                Last Name 
                            </label>
                            <input 
                                class="input-field"
                                type="text"
                                wire:model="lastName"
                                placeholder="Enter your Last Name">
                        </div>
                    </div>
                    <div class="flex mx-2 py-3">
                        <div class="flex flex-col">
                            <button type="submit" class="bg-blue-500 text-xs hover:bg-blue-700 text-white font-bold py-2 
                                px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 mx-1">
                                Submit
                            </button>
                        </div>
                    </div>
                    @if (session()->has('message'))
                        <div class="text-lg text-red-600">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </form>
        </section>
    </h1>
</div>

{{-- 
<form class="flex w-full h-3/4 bg-slate-100 rounded-md shadow-md" wire:submit="save">
    <div class="flex flex-col border-2 border-slate-500 w-full h-full m-2 p-2 rounded-md">
         <div class="flex border-b-2 border-orange-500 w-20">
             <h1 class="font-sans font-bold">Information</h1>
         </div>
        <x-textinput
         wire:model="registerSaveForm.title"
         name="title"
         placeholder="Please input Title"
         label="TITLE"/>
         <x-textarea
         wire:model="registerSaveForm.description"
         name="description"
         placeholder="Please input Description"
         label="TITLE"/>
         <x-select
         wire:model="registerSaveForm.postStatus"
         name="postStatus"
         placeholder="Select Post Status"
         label="POST STATUS"/>
         <div class="flex mx-1 py-2">
             <div class="flex flex-col">
                 <button type="submit" class="bg-blue-500 text-xs hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 mx-1">Submit</button>
             </div>
         </div>
    </div>



    <div class="w-72">
            <input type="text"
                {{ $attributes->whereStartsWith('wire:model') }}
                id="{{ $attributes->whereStartsWith('wire:model')->first() }}" 
                name="{{ $name }}" 
                placeholder="{{ $placeholder }}"
                value="{{ $value }}"
                class="shadow-sm appearance-none border text-sm w-full px-2 py-1 rounded text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>
 </form> --}}
