@extends('web.main')

@section('title', 'Добавить нового пользователя')

@section('content')
    <h1 class="py-6 text-2xl">Добавить нового пользователя</h1>
    <form action="{{route('users.add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid bg-white rounded-lg shadow-xl w-full">
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Имя</label>
                <input class="py-2 px-3 rounded-lg border-2 border-indigo-300 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" type="text" placeholder="Имя" name="name"/>
            </div>
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Эл.адрес</label>
                <input class="py-2 px-3 rounded-lg border-2 border-indigo-300 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" type="email" placeholder="Эл.адрес" name="email"/>
            </div>
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Пароль</label>
                <input class="py-2 px-3 rounded-lg border-2 border-indigo-300 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" type="password" placeholder="Пароль" name="password" />
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Роль</label>
                <select class="py-2 px-3 rounded-lg border-2 border-indigo-300 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" name="role_id">
                  @foreach (\App\Models\Role::get() as $role)
                  <option value="{{$role->id}}">{{$role->name}}</option>
                  @endforeach
                </select>
              </div>
    
            <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                <button class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Назад</button>
                <button class='w-auto bg-indigo-500 hover:bg-indigo-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Добавить</button>
            </div>
  
        </div>
    </form>
@endsection