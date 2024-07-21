<div>

    <div class="mt-5 mb-20 p-4">

        <div class="md:w-8/12 mx-auto border border-gray-300 shadow-xl rounded-lg bg-cyan-100 mt-5 mb-20 p-4">



            {{-- <div class="flex flex-col items-center"> --}}
                {{-- <div class="flex items-center  gap-4"> --}}
                    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
                    {{-- <button --}}
                        {{-- wire:click="like" --}}
                    {{-- > --}}
                        {{-- <svg --}}
                            {{-- xmlns="http://www.w3.org/2000/svg" --}}
                            {{-- fill="{{$isliked ? 'red' : 'white'}}" --}}
                            {{-- viewBox="0 0 24 24" --}}
                            {{-- stroke-width="{{$isliked ? .5 : 1}}" --}}
                            {{-- stroke="currentColor" --}}
                            {{-- class="w-8 h-8"> --}}
                                {{-- <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /> --}}
                        {{-- </svg> --}}

                    {{-- </button> --}}
                    {{-- {{dd($historia)}} --}}
                    {{-- <p class="font-bold">{{ $likes }} --}}
                    {{-- <a href="{{ route('history.index',  $historia) }}" class="font-bold">{{ $likes }} --}}
                        {{-- <span class="font-normal"> @choice('Like|Likes', $historia->likes->count() )</span> --}}
                    {{-- </a> --}}
                    {{-- {{dd($historia->likes)}} --}}
                {{-- </div> --}}
                    {{-- @if ($historia->likes->count() > 0)

                        <div class="flex gap-1">
                            <p class="font-bold">
                                {{$historia->likes[0]->user->historia->nombre}}
                            </p>
                            @if($historia->likes->count() > 1 )
                            <p> y {{$historia->likes->count()-1}} <span>@choice('Like más|Likes más', $historia->likes->count()-1 )</span></p>
                            @else

                            @endif
                        </div>
                    @else
                    @endif --}}
            {{-- </div> --}}




            <div class="my-5 md:flex md:justify-around md:items-center">
                <p class=" text-md text-blue-600 uppercase font-bold dark:text-gray-300 text-center">Datos personales del paciente</p>

            </div>
            <div class="md:flex md:justify-around">
                <div class="flex flex-col justify-between  items-center ">
                    <p class="block text-sm text-gray-700 uppercase font-bold dark:text-gray-300 my-3 md:my-0">Foto de perfil:</p>
                    {{-- <img src="{{ asset('../storage/imagenes/' . $historia->imagen) }}" alt="{{ 'imagen de' . ' ' . $historia->nombre }}" class="w-44 mb-5 md:mb-0 "> --}}
                    <img src="{{ asset('/storage/imagenes/' . $historia->imagen) }}" alt="{{ 'imagen de' . ' ' . $historia->nombre }}" class="w-44 mb-5 md:mb-0 ">

                </div>
                <div class="space-y-3">
                    <div class="md:flex md:justify-between md:items-center md:gap-4">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#4b5563" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                            <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300"> Nombre del paciente:</p>
                        </div>
                        <p class="font-medium text-gray-500">{{$historia->nombre}}</p>
                    </div>

                    <div class="md:flex md:justify-between md:items-center md:gap-4">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#4b5563" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/></svg>
                            <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Fecha de nacimiento:</p>
                        </div>
                        <p class="font-medium text-gray-500">{{Carbon\Carbon::parse($historia->fecha_nacimiento)->format('d / m / Y') }}</p>
                    </div>
                    {{-- {{dd($historia)}} --}}
                    <div class="md:flex md:justify-between md:items-center md:gap-4">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#4b5563" d="M86.4 5.5L61.8 47.6C58 54.1 56 61.6 56 69.2V72c0 22.1 17.9 40 40 40s40-17.9 40-40V69.2c0-7.6-2-15-5.8-21.6L105.6 5.5C103.6 2.1 100 0 96 0s-7.6 2.1-9.6 5.5zm128 0L189.8 47.6c-3.8 6.5-5.8 14-5.8 21.6V72c0 22.1 17.9 40 40 40s40-17.9 40-40V69.2c0-7.6-2-15-5.8-21.6L233.6 5.5C231.6 2.1 228 0 224 0s-7.6 2.1-9.6 5.5zM317.8 47.6c-3.8 6.5-5.8 14-5.8 21.6V72c0 22.1 17.9 40 40 40s40-17.9 40-40V69.2c0-7.6-2-15-5.8-21.6L361.6 5.5C359.6 2.1 356 0 352 0s-7.6 2.1-9.6 5.5L317.8 47.6zM128 176c0-17.7-14.3-32-32-32s-32 14.3-32 32v48c-35.3 0-64 28.7-64 64v71c8.3 5.2 18.1 9 28.8 9c13.5 0 27.2-6.1 38.4-13.4c5.4-3.5 9.9-7.1 13-9.7c1.5-1.3 2.7-2.4 3.5-3.1c.4-.4 .7-.6 .8-.8l.1-.1 0 0 0 0s0 0 0 0s0 0 0 0c3.1-3.2 7.4-4.9 11.9-4.8s8.6 2.1 11.6 5.4l0 0 0 0 .1 .1c.1 .1 .4 .4 .7 .7c.7 .7 1.7 1.7 3.1 3c2.8 2.6 6.8 6.1 11.8 9.5c10.2 7.1 23 13.1 36.3 13.1s26.1-6 36.3-13.1c5-3.5 9-6.9 11.8-9.5c1.4-1.3 2.4-2.3 3.1-3c.3-.3 .6-.6 .7-.7l.1-.1c3-3.5 7.4-5.4 12-5.4s9 2 12 5.4l.1 .1c.1 .1 .4 .4 .7 .7c.7 .7 1.7 1.7 3.1 3c2.8 2.6 6.8 6.1 11.8 9.5c10.2 7.1 23 13.1 36.3 13.1s26.1-6 36.3-13.1c5-3.5 9-6.9 11.8-9.5c1.4-1.3 2.4-2.3 3.1-3c.3-.3 .6-.6 .7-.7l.1-.1c2.9-3.4 7.1-5.3 11.6-5.4s8.7 1.6 11.9 4.8l0 0 0 0 0 0 .1 .1c.2 .2 .4 .4 .8 .8c.8 .7 1.9 1.8 3.5 3.1c3.1 2.6 7.5 6.2 13 9.7c11.2 7.3 24.9 13.4 38.4 13.4c10.7 0 20.5-3.9 28.8-9V288c0-35.3-28.7-64-64-64V176c0-17.7-14.3-32-32-32s-32 14.3-32 32v48H256V176c0-17.7-14.3-32-32-32s-32 14.3-32 32v48H128V176zM448 394.6c-8.5 3.3-18.2 5.4-28.8 5.4c-22.5 0-42.4-9.9-55.8-18.6c-4.1-2.7-7.8-5.4-10.9-7.8c-2.8 2.4-6.1 5-9.8 7.5C329.8 390 310.6 400 288 400s-41.8-10-54.6-18.9c-3.5-2.4-6.7-4.9-9.4-7.2c-2.7 2.3-5.9 4.7-9.4 7.2C201.8 390 182.6 400 160 400s-41.8-10-54.6-18.9c-3.7-2.6-7-5.2-9.8-7.5c-3.1 2.4-6.8 5.1-10.9 7.8C71.2 390.1 51.3 400 28.8 400c-10.6 0-20.3-2.2-28.8-5.4V480c0 17.7 14.3 32 32 32H416c17.7 0 32-14.3 32-32V394.6z"/></svg>
                            <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Edad del paciente:</p>
                        </div>
                        <p class="font-medium text-gray-500">{{Carbon\Carbon::parse($historia->fecha_nacimiento)->age }} años</p>
                    </div>
                    <div class="md:flex md:justify-between md:items-center md:gap-4">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#4b5563" d="M176 288a112 112 0 1 0 0-224 112 112 0 1 0 0 224zM352 176c0 86.3-62.1 158.1-144 173.1V384h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H208v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V448H112c-17.7 0-32-14.3-32-32s14.3-32 32-32h32V349.1C62.1 334.1 0 262.3 0 176C0 78.8 78.8 0 176 0s176 78.8 176 176zM271.9 360.6c19.3-10.1 36.9-23.1 52.1-38.4c20 18.5 46.7 29.8 76.1 29.8c61.9 0 112-50.1 112-112s-50.1-112-112-112c-7.2 0-14.3 .7-21.1 2c-4.9-21.5-13-41.7-24-60.2C369.3 66 384.4 64 400 64c37 0 71.4 11.4 99.8 31l20.6-20.6L487 41c-6.9-6.9-8.9-17.2-5.2-26.2S494.3 0 504 0H616c13.3 0 24 10.7 24 24V136c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2l-33.4-33.4L545 140.2c19.5 28.4 31 62.7 31 99.8c0 97.2-78.8 176-176 176c-50.5 0-96-21.3-128.1-55.4z"/></svg>
                            <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Género del paciente:</p>
                        </div>
                        <p class="font-medium text-gray-500"> {{$historia->genero->genero}}</p>
                    </div>
                    <div class="md:flex md:justify-between md:items-center md:gap-4">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#4b5563" d="M128 176a128 128 0 1 1 256 0 128 128 0 1 1 -256 0zM391.8 64C359.5 24.9 310.7 0 256 0S152.5 24.9 120.2 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H391.8zM296 224c0-10.6-4.1-20.2-10.9-27.4l33.6-78.3c3.5-8.1-.3-17.5-8.4-21s-17.5 .3-21 8.4L255.7 184c-22 .1-39.7 18-39.7 40c0 22.1 17.9 40 40 40s40-17.9 40-40z"/></svg>
                            <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Peso del paciente:</p>
                        </div>
                        <p class="font-medium text-gray-500">{{$historia->peso }} kg.</p>
                    </div>
                    <div class="md:flex md:justify-between md:items-center md:gap-4">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#4b5563" d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152z"/></svg>
                            <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Estatura del paciente:</p>
                        </div>
                        <p class="font-medium text-gray-500">{{$historia->estatura }} cms.</p>
                    </div>



                    </div>
                </div>

                <div class="my-10">
                    <p class="block text-md text-blue-600 uppercase font-bold dark:text-gray-300 md:px-5 text-center ">Historia médica del paciente</p>
                </div>
                <div class="md:flex md:flex-col md:justify-between md:gap-4 md:px-5 space-y-3 md:space-y-0">
                    <div class="md:flex justify-between items-center gap-2 border-b border-gray-300">

                        <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Alergias del paciente:</p>
                        <p class="font-medium text-gray-500">
                            @if (!$historia->alergias)
                                No hay alergias registradas
                            @else
                                {{$historia->alergias}}
                            @endif
                        </p>
                    </div>

                    <div class="md:flex justify-between items-center gap-2 border-b border-gray-300">

                        <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Antecedentes familiares:</p>
                        <p class="font-medium text-gray-500">
                            @if (!$historia->antecedentes_familiares)
                                No hay antecedentes registrados
                            @else
                                {{$historia->antecedentes_familiares}}
                            @endif
                        </p>
                    </div>

                    <div class="md:flex justify-between items-center gap-2 border-b border-gray-300">

                        <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Enfermedades crónicas:</p>
                        <p class="font-medium text-gray-500">
                            @if (!$historia->enfermedades_cronicas)
                                No hay antecedentes registrados
                            @else
                                {{$historia->enfermedades_cronicas}}
                            @endif
                        </p>
                    </div>

                    <div class="md:flex justify-between items-center gap-2 border-b border-gray-300">

                        <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Procedimientos quirúrgicos:</p>
                        <p class="font-medium text-gray-500">
                            @if (!$historia->procedimientos_quirurgicos)
                                No hay procedimientos registrados
                            @else
                                {{$historia->procedimientos_quirurgicos}}
                            @endif
                        </p>
                    </div>

                    <div class="md:flex justify-between items-center gap-2 border-b border-gray-300">

                        <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Condiciones pasadas:</p>
                        <p class="font-medium text-gray-500">
                            @if (!$historia->condiciones_pasadas)
                                No hay condiciones registradas
                            @else
                                {{$historia->condiciones_pasadas}}
                            @endif
                        </p>
                    </div>

                    <div class="md:flex justify-between items-center gap-2 border-b border-gray-300">

                        <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Observaciones:</p>
                        <p class="font-medium text-gray-500">
                            @if (!$historia->observaciones)
                                No hay observaciones registradas
                            @else
                                {{$historia->observaciones}}
                            @endif
                        </p>
                    </div>

                    <div class="flex justify-end items-center gap-2 my-5">

                        <p class="text-sm text-gray-700 uppercase font-bold dark:text-gray-300">Perfil creado:</p>
                        <p class="font-medium text-gray-500">
                            {{$historia->created_at->diffForHumans()}}
                        </p>
                    </div>


                </div>




        </div>






</div>
