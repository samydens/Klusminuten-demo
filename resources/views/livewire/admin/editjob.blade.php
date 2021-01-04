<div>
    {{-- Mobile version --}}
    <div class="lg:hidden rounded-xl bg-white shadow m-4 p-4 text-gray-500">
        {{-- Image --}}
        <div class="w-full lg:w-48 h-48 rounded-xl bg-cover bg-no-repeat bg-center" style="background-image: url('/storage/{{$job->photo}}')"></div>
        {{-- Title --}}
        <div class="flex flex-row justify-between items-center my-4">
            <input wire:model="title" class="font-ubuntu font-bold text-xl w-3/5" type="text">
            <p class="text-gray-300 text-sm">{{$job->created_at->format('d-m-y')}}</p>
        </div>
        {{-- Statistics --}}
        <p class="mb-2">Huidig:</p>
        <div class="flex space-x-4 text-center mb-4">
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 p-2 rounded space-y-2">
                <svg class="text-orange-100 fill-current text-center w-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                    <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                </svg>
                <p>{{$this->totalMinutes()}}</p>
            </div>
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 p-2 rounded space-y-2">
                <svg class="text-orange-100 fill-current text-center w-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M15 18.5c-2.51 0-4.68-1.42-5.76-3.5H15v-2H8.58c-.05-.33-.08-.66-.08-1s.03-.67.08-1H15V9H9.24C10.32 6.92 12.5 5.5 15 5.5c1.61 0 3.09.59 4.23 1.57L21 5.3C19.41 3.87 17.3 3 15 3c-3.92 0-7.24 2.51-8.48 6H3v2h3.06c-.04.33-.06.66-.06 1 0 .34.02.67.06 1H3v2h3.52c1.24 3.49 4.56 6 8.48 6 2.31 0 4.41-.87 6-2.3l-1.78-1.77c-1.13.98-2.6 1.57-4.22 1.57z"/>
                </svg>
                <p>{{$this->totalMaterial()}}</p>
            </div>
        </div>
        <p class="mb-2">Afgesproken:</p>
        <div class="flex space-x-4 text-center">
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 p-2 rounded space-y-2">
                <svg class="text-orange-100 fill-current text-center w-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                    <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                </svg>
                <input type="number" wire:model="minutes" class="bg-gray-600 w-1/2 text-center">
            </div>
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 p-2 rounded space-y-2">
                <svg class="text-orange-100 fill-current text-center w-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M15 18.5c-2.51 0-4.68-1.42-5.76-3.5H15v-2H8.58c-.05-.33-.08-.66-.08-1s.03-.67.08-1H15V9H9.24C10.32 6.92 12.5 5.5 15 5.5c1.61 0 3.09.59 4.23 1.57L21 5.3C19.41 3.87 17.3 3 15 3c-3.92 0-7.24 2.51-8.48 6H3v2h3.06c-.04.33-.06.66-.06 1 0 .34.02.67.06 1H3v2h3.52c1.24 3.49 4.56 6 8.48 6 2.31 0 4.41-.87 6-2.3l-1.78-1.77c-1.13.98-2.6 1.57-4.22 1.57z"/>
                </svg>
                <input type="number" wire:model="material" class="bg-gray-600 w-1/2 text-center">
            </div>
        </div>
        {{-- Status --}}
        <p class="mt-4 mb-2">Status: </p>
        <div class="w-full flex justify-center">
            <select class="border-b-2 border-orange-100 mb-4" wire:model="status">
                <option value="0">Nog niet begonnen</option>
                <option value="1">In uitvoering</option>
                <option value="2">Afgerond</option>
                <option value="3">Factuur verzonden</option>
                <option value="4">Factuur betaald</option>
            </select>
        </div>
        {{-- Save button --}}
        <button class="rounded bg-orange-100 text-white w-full p-4 mt-4">
            opslaan
        </button>
    </div>

    {{-- Desktop version --}}
    <div class="hidden lg:flex flex-row rounded-xl bg-white shadow m-4 p-4 text-gray-500">
        {{-- image --}}
        <div class="w-48 rounded-l-xl bg-cover bg-no-repeat bg-center flex-shrink-0 -ml-4 -my-4 mr-4" style="background-image: url('/storage/{{$job->photo}}')"></div>
        <div class="flex flex-col w-full space-y-4">
            {{-- title & date --}}
            <div class="flex flex-row justify-between align-center w-full">
                <p class="font-bold text-xl font-ubuntu">{{$job->title}}</p>
                <p class="text-sm text-gray-300">{{$job->created_at->format('d-m-y')}}</p>
            </div>
            {{-- Statistics --}}
            <div class="flex flex-row space-x-4">
                {{-- Minutes box --}}
                <div class="bg-gradient-to-tr from-gray-600 to-gray-700 p-2 rounded space-y-2 w-36">
                    <svg class="text-orange-100 fill-current text-center w-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                        <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                    </svg>
                    <div class="flex items-center w-full justify-center">
                        <p>{{$this->totalMinutes()}}</p>
                        <p class="text-gray-300 text-sm ml-1">/ {{$minutes}} min</p>
                    </div>
                </div>
                {{-- Material box --}}
                <div class="bg-gradient-to-tr from-gray-600 to-gray-700 p-2 rounded space-y-2 w-36">
                    <svg class="text-orange-100 fill-current text-center w-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M15 18.5c-2.51 0-4.68-1.42-5.76-3.5H15v-2H8.58c-.05-.33-.08-.66-.08-1s.03-.67.08-1H15V9H9.24C10.32 6.92 12.5 5.5 15 5.5c1.61 0 3.09.59 4.23 1.57L21 5.3C19.41 3.87 17.3 3 15 3c-3.92 0-7.24 2.51-8.48 6H3v2h3.06c-.04.33-.06.66-.06 1 0 .34.02.67.06 1H3v2h3.52c1.24 3.49 4.56 6 8.48 6 2.31 0 4.41-.87 6-2.3l-1.78-1.77c-1.13.98-2.6 1.57-4.22 1.57z"/>
                    </svg>
                    <div class="flex items-center w-full justify-center">
                        <p>{{$this->totalMaterial()}}</p>
                        <p class="text-gray-300 text-sm ml-1">/ €{{$material}}</p>
                    </div>
                </div>
                {{-- Status box --}}
                <div class="bg-gradient-to-tr from-gray-600 to-gray-700 p-2 rounded space-y-2 w-48 text-center">
                    <p class="text-sm text-gray-300">status:</p>
                    <p class="">{{$statuses[$status]}}</p>
                    {{-- <select wire:model="status" class="w-full bg-gradient-to-tr from-gray-600 to-gray-700">
                        <option value="0">Nog niet begonnen</option>
                        <option value="1">In uitvoering</option>
                        <option value="2">Afgerond</option>
                        <option value="3">Factuur verzonden</option>
                        <option value="4">Factuur betaald</option>
                    </select> --}}
                </div>
            </div>
        </div>
    </div>
</div>
