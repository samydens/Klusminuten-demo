{{-- <form wire:submit.prevent="changeRole"> --}}
    {{-- Display messages --}}
    @if (session()->has('message'))
        <div class="relative bg-white text-orange-100 rounded-xl shadow p-4">{{session('message')}}</div>
    @endif
    {{-- <div class="bg-white rounded shadow px-8 py-4 rounded-xl font-roboto">
        <a class="text-white text-orange-100" href="/admin/user">
            {!! file_get_contents('icons/back.svg') !!}
        </a>
        <div class="flex flex-row items-center justify-between py-4">
            <p class="text-2xl font-ubuntu font-bold text-gray-500">{{$user->name}}</p>
            <p class="text-xs text-gray-300">{{$user->email}}</p>
        </div>
        <div class="w-48 flex flex-col">
            <label for="role" class="text-xs text-gray-300">Rol:</label>
            <select wire:model="role" id="role">
                <option value="">Selecteer een optie: </option>
                @foreach($this->getRoles() as $singleRole)
                    <option value="{{$singleRole}}">{{$singleRole}}</option>
                @endforeach
            </select>
            @error('role')
                <span class="text-red text-xs">{{ $message }}</span><br>
            @enderror
            <button type="submit">Opslaan</button>
        </div>
    </div> --}}
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow border-b border-gray-300 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-white font-roboto">
                        <thead class="bg-orange-100 text-white text-xs">
                            <tr>
                                <th scope="col" class="px-6 py-3 font-medium uppercase tracking-wider text-left">
                                    Naam
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium uppercase tracking-wider text-left">
                                    Rol
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium uppercase tracking-wider text-left">
                                    save
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-white">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm font-medium text-gray-500">
                                                {{$user->name}}
                                            </div>
                                            <div class="text-sam text-gray-300">
                                                {{$user->email}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <form wire:submit.prevent="changeRole">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <select wire:model="role" class="border-b-2 border-orange-100">
                                            <option value="">Selecteer een optie: </option>
                                            @foreach($this->getRoles() as $singleRole)
                                                <option value="{{$singleRole}}">{{$singleRole}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-orange-100">
                                        <button type="submit">
                                            {!! file_get_contents('icons/save.svg') !!}
                                        </button>
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{{-- </form> --}}
