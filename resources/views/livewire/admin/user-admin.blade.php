<div class="flex flex-row justify-between">
    <div class="w-4/5 m-4 space-y-4">
        {{-- Display messages --}}
        @if (session()->has('message'))
            <div class="relative bg-white text-orange-100 rounded-xl shadow p-4">{{session('message')}}</div>
        @endif
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 font-roboto">
                            <thead class="bg-orange-100">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Naam
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Rol
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                    Edit
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$user->name}}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{$user->email}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @foreach($this->getUserRoles($user) as $role)
                                        <p>{{$role}}</p>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="/admin/user/{{$user->id}}">{!!file_get_contents('icons/edit.svg')!!}</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Filter --}}
    <div class="bg-white rounded-xl shadow w-1/5 h-60 m-4 p-4">
        <p class="text-2xl font-ubuntu font-bold text-gray-500">Filter</p>
        <div class="flex flex-col mt-4">
            <label class="text-gray-300 text-xs" for="role">Rol</label>
            <select class="border-b-2 border-orange-100" wire:model="role" id="role">
                <option value="5" selected="selected">Alle rollen</option>
                @foreach($roles as $singleRole)
                    <option value="{{$singleRole}}">{{$singleRole}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
