<div class=" bg-white shadow-lg rounded-lg border border-gray-200 mb-10">
    {{-- <h2 class="text-center text-2xl uppercase font-bold my-10 text-gray-700">Tratamientos</h2> --}}
    <div class="px-5 md:flex md:flex-row md:justify-between md:gap-5">


            <div class="my-5 ">
                <div class="w-full border  border-gray-500  p-3 bg-white">
                    <p class="text-2xl font-semibold text-center">{{$tratamiento->nombre}} {{$tratamiento->gramos}}</p>
                </div>
                <div class="flex justify-between ">
                    <div class="w-4/12 border border-gray-500  p-3 bg-white flex flex-col justify-center items-center">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#4b5563" d="M149.1 64.8L138.7 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H373.3L362.9 64.8C356.4 45.2 338.1 32 317.4 32H194.6c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg> --}}
                        <img src="{{ asset('../storage/medicamentos/' . $tratamiento->imagen) }}" alt="{{ 'imagen de' . ' ' . $tratamiento->nombre }}" class="w-40  mb-5 md:mb-0">
                        {{-- <p class="font-bold text-gray-800 text-center text-5xl">{{Carbon\Carbon::parse($cita->fecha)->isoFormat('D')}}</p> --}}
                        {{-- <p class="font-semibold text-gray-500 text-center uppercase ">{{Carbon\Carbon::parse($cita->fecha)->isoFormat('MMM')}}</p> --}}
                    </div>

                    <div class="w-8/12 border border-gray-500  p-3 md:p-5 bg-white">
                        {{-- <p class="font-bold uppercase">{{$cita->clinica}}</p> --}}
                        <div class="md:flex  gap-4">
                            {{-- <p class="font-semibold">{{Carbon\Carbon::parse($cita->fecha)->isoFormat('dddd,')}} <span class="font-normal">{{Carbon\Carbon::parse($cita->fecha)->isoFormat('D-M-YYYY')}}</span> </p> --}}

                            <p class="font-semibold">{{Carbon\Carbon::parse($tratamiento->hora)->format('H:i')}}</p>
                            @if (!$tratamiento->cuando)

                            @else
                                <p>{{$tratamiento->cuando}} </p>
                            @endif
                        </div>
                        <div class="lg:flex gap-5">
                            @if (!$tratamiento->cantidad)

                            @else
                            <p>cantidad: <span class="font-semibold text-gray-700">{{$tratamiento->cantidad}}</span> </p>
                            @endif
                        </div>
                        <div class="lg:flex gap-5">
                            @if (!$tratamiento->recetado)

                            @else
                                <p><span class="font-semibold text-sky-600">{{$tratamiento->recetado}}</span> </p>
                            @endif
                        </div>
                        <div class="lg:flex gap-5">
                            @if (!$tratamiento->observaciones)

                            @else
                                <p><span class="font-semibold">{{$tratamiento->observaciones}}</span> </p>
                            @endif
                        </div>
                        <div class="mt-5 flex justify-between md:items-center md:gap-2 print:hidden ">


                                <p class="font-bold">{{$tratamiento->comentarios->count()}} <span class="font-normal"> @choice('comentario|comentarios', $tratamiento->comentarios->count() )</span></p>


                        </div>

                    </div>
                </div>
            </div>

    </div>

</div>
