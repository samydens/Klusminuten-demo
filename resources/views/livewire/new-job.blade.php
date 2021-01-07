<div>
    
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        
            @if ($step == 0)

                <div class="bg-white rounded-xl shadow p-4 mx-4 text-gray-500">
                    
                    {{-- Form title --}}
                    <p class="font-ubuntu font-bold text-xl">Klus</p>
                    
                    {{-- Step count --}}
                    <p class="text-gray-300">Stap {{$step + 1}}</p>
                    
                    {{-- Job title --}}
                    <div class="mt-8">
                        <label for="title" class="text-sm text-gray-300">titel:<br></label>
                        <input wire:model.lazy="job.title" type="text" id="title" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="typ hier de titel">
                        @error('job.title') <span class="text-sm text-red">{{$message}}</span> @enderror
                    </div>
                    
                    {{-- Job description --}}
                    <div class="mt-4">
                        <label for="desc" class="text-sm text-gray-300">beschrijving:<br></label>
                        <textarea wire:model.lazy="job.desc" id="desc" cols="30" rows="5" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="typ hier de beschrijving"></textarea>
                        @error('job.desc') <span class="text-sm text-red">{{$message}}</span> @enderror
                    </div>
                    
                    {{-- Image upload --}}
                    <div class="mt-4">
                        <label class="w-full flex flex-col items-center border border-gray-400 rounded py-2 bg-gray-200 text-gray-300">
                            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                            </svg>
                            <span class="mt-1">Kies een afbeelding</span>
                            <span class="text-xs">(optioneel)</span>
                            <input wire:model="photo" type="file" class="hidden">
                        </label>
                        @error('photo') <span class="text-sm text-red">{{$message}}</span> @enderror

                        @if ($photo)
                        <div class="mt-4">
                            <span class="text-gray-300 text-sm">Afbeelding:</span>
                            <img src="{{ $photo->temporaryUrl() }}" class="max-h-48 mx-auto">
                        </div>
                        @endif

                    </div>
                    
                    {{-- Next button --}}
                    <div class="mt-8">
                        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Volgende</button>
                    </div>
                </div>
                
                
            @endif
        
            @if ($step == 1)
                    
                    <div class="bg-white rounded-xl shadow p-4 mx-4 text-gray-500">

                        {{-- Form title --}}
                        <p class="font-ubuntu font-bold text-xl">Klant</p>
                        
                        {{-- Step count --}}
                        <p class="text-gray-300">Stap {{$step + 1}}</p>
                        
                        {{-- Choose customer --}}
                        <div class="mt-8">
                            <label for="customer" class="text-sm text-gray-300">Klant:<br></label>
                            <input wire:model.lazy="job.client_name" list="customers" id="customer" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="kies een bestaande klant">
                            @error('job.client_name') <span class="text-sm text-red">{{$message}}</span> @enderror
                            <datalist id="customers">
                                @foreach ($customerIndex as $customer)
                                    <option value="{{$customer->full_name}}">
                                @endforeach
                            </datalist>
                        </div>

                        {{-- Link to new customer form --}}
                        <div class="mt-4">
                            <p wire:click="newClient" class="text-orange-100 font-medium mt-4"><u>voeg een klant toe</u></p>
                        </div>


                        {{-- Next & previous buttons --}}
                        <div class="mt-8 flex flex-row space-x-4">
                            <div wire:click="previousStep" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded text-center">Terug</div>
                            <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Volgende</button>
                        </div>
                    </div>
            @endif
        
            @if ($step == 2)
                    
                    <div class="bg-white rounded-xl shadow p-4 mx-4 text-gray-500">

                        {{-- Form title --}}
                        <p class="font-ubuntu font-bold text-xl">Medewerker</p>
                        
                        {{-- Step count --}}
                        <p class="text-gray-300">Stap {{$step + 1}}</p>
                        
                        {{-- Choose customer --}}
                        <div class="mt-8">
                            <label for="employee" class="text-sm text-gray-300">medewerker:<br></label>
                            <input wire:model.lazy="job.employee_name" list="employees" id="employee" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="kies een bestaande medewerker">
                            @error('job.employee_name') <span class="text-sm text-red">{{$message}}</span> @enderror
                            <datalist id="employees">
                                @foreach ($employeeIndex as $employee)
                                    <option value="{{$employee->name}}">
                                @endforeach
                            </datalist>
                        </div>

                        {{-- Link to new customer form --}}
                        <div class="mt-4">
                            <p wire:click="newEmployee" class="text-orange-100 font-medium mt-4"><u>voeg een medewerker toe</u></p>
                        </div>


                        {{-- Next & previous buttons --}}
                        <div class="mt-8 flex flex-row space-x-4">
                            <div wire:click="previousStep" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded text-center">Terug</div>
                            <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Volgende</button>
                        </div>
                    </div>
            @endif
        
            @if ($step == 3)

                    <div class="bg-white rounded-xl shadow p-4 mx-4 text-gray-500">

                        {{-- Form title --}}
                        <p class="font-ubuntu font-bold text-xl">Afspraken</p>
                        
                        {{-- Step count --}}
                        <p class="text-gray-300">Stap {{$step + 1}}</p>
                        
                        {{-- Agreed minutes --}}
                        <div class="mt-8">
                            <label for="min" class="text-sm text-gray-300">minuten:<br></label>
                            <input wire:model.lazy="job.agr_minutes" id="min" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="afgesproken minuten" type="number">
                            @error('job.agr_minutes') <span class="text-sm text-red">{{$message}}</span> @enderror
                        </div>

                        {{-- Agreed material budget --}}
                        <div class="mt-4">
                            <label for="material" class="text-sm text-gray-300">materiaalkosten:<br></label>
                            <input wire:model.lazy="job.agr_material" id="material" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="afgesproken materiaalkosten" type="number">
                            @error('job.agr_material') <span class="text-sm text-red">{{$message}}</span> @enderror
                        </div>

                        {{-- Next & previous buttons --}}
                        <div class="mt-8 flex flex-row space-x-4">
                            <div wire:click="previousStep" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded text-center">Terug</div>
                            <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Opslaan</button>
                        </div>
                    </div>
            @endif

            @if ($step == 4)

                <div class="bg-white rounded-xl shadow p-4 mx-4 text-gray-500">

                    {{-- Form title --}}
                    <p class="font-ubuntu font-bold text-xl">Nieuwe klant toevoegen</p>
                    
                    {{-- Step count --}}
                    <p class="text-gray-300">Stap {{$step - 2}}</p>
                    
                    {{-- Client name --}}
                    <div class="mt-8">
                        <label for="clientName" class="text-sm text-gray-300">naam:<br></label>
                        <input wire:model.lazy="client.full_name" id="clientName" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. Kees Jan" type="text">
                        @error('client.full_name') <span class="text-sm text-red">{{$message}}</span> @enderror
                    </div>

                    {{-- Client adres --}}
                    <div class="mt-4">
                        <label for="clientAdres" class="text-sm text-gray-300">adres:<br></label>
                        <input wire:model.lazy="client.adres" id="clientAdres" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. Straat 1" type="text">
                        @error('client.adres') <span class="text-sm text-red">{{$message}}</span> @enderror
                    </div>

                    {{-- Client ZIP --}}
                    <div class="mt-4">
                        <label for="clientZip" class="text-sm text-gray-300">postcode:<br></label>
                        <input wire:model.lazy="client.zip" id="clientZip" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. 1234AB" type="text">
                        @error('client.zip') <span class="text-sm text-red">{{$message}}</span> @enderror
                    </div>

                    {{-- Client city --}}
                    <div class="mt-4">
                        <label for="clientCity" class="text-sm text-gray-300">plaats:<br></label>
                        <input wire:model.lazy="client.city" id="clientCity" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. Amsterdam" type="text">
                        @error('client.city') <span class="text-sm text-red">{{$message}}</span> @enderror
                    </div>

                    {{-- Client phone --}}
                    <div class="mt-4">
                        <label for="clientPhone" class="text-sm text-gray-300">telefoonnummer:<br></label>
                        <input wire:model.lazy="client.phone_number" id="clientPhone" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. 0612345678" type="text">
                        @error('client.phone') <span class="text-sm text-red">{{$message}}</span> @enderror
                    </div>

                    {{-- Client mail --}}
                    <div class="mt-4">
                        <label for="clientMail" class="text-sm text-gray-300">E-mail:<br></label>
                        <input wire:model.lazy="client.mail" id="clientMail" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. keesjan@bedrijf.nl" type="email">
                        @error('client.mail') <span class="text-sm text-red">{{$message}}</span> @enderror
                    </div>

                    {{-- Next & previous buttons --}}
                    <div class="mt-8 flex flex-row space-x-4">
                        <div wire:click="backFromNew" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded text-center">Terug</div>
                        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Opslaan</button>
                    </div>
                </div>
            @endif

            @if ($step == 5)
                <div class="bg-white rounded-xl shadow p-4 mx-4 text-gray-500">

                    {{-- Form title --}}
                    <p class="font-ubuntu font-bold text-xl">Nieuwe medewerker toevoegen</p>
                    
                    {{-- Step count --}}
                    <p class="text-gray-300">Stap {{$step - 2}}</p>
                    
                    {{-- Employee name --}}
                    <div class="mt-8">
                        <label for="employeeName" class="text-sm text-gray-300">Naam:<br></label>
                        <input wire:model.lazy="employee.name" id="employeeName" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. Frans Timmermans" type="text">
                        @error('employee.name') <span class="text-sm text-red">{{$message}}</span> @enderror
                    </div>

                    {{-- Employee ID --}}
                    <div class="mt-4">
                        <label for="employeeId" class="text-sm text-gray-300">Vakman ID:<br></label>
                        <input wire:model.lazy="employee.vakman_id" id="employeeId" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. 5" type="number">
                        @error('employee.vakman_id') <span class="text-sm text-red">{{$message}}</span> @enderror
                    </div>

                    {{-- Employee phone --}}
                    <div class="mt-4">
                        <label for="employeePhone" class="text-sm text-gray-300">Telefoonnummer:<br></label>
                        <input wire:model.lazy="employee.phone" id="employeePhone" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. 0612345678" type="number">
                        @error('employee.phone') <span class="text-sm text-red">{{$message}}</span> @enderror
                    </div>

                    {{-- Next & previous buttons --}}
                    <div class="mt-8 flex flex-row space-x-4">
                        <div wire:click="backFromNew" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded text-center">Terug</div>
                        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Opslaan</button>
                    </div>
                </div>
            @endif
            
        </form>
</div>
