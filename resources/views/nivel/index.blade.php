@extends('layout.plantilla')
@section('titulo','nivel')

@section('contenido')

                            
    <div class="card-body">
        <h2 class="intro-y text-lg font-medium mt-10">REGISTRAR NIVEL</h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href="{{route('nivel.create')}}"> <button class="btn btn-primary shadow-md mr-2">Agregar nivel</button></a>
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                            </li>
                        </ul>
                    </div>
                </div>
            <div class="hidden md:block mx-auto text-slate-500"></div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-120 relative text-slate-500">
                    <form class="d-flex" role="search"  method="GET">
                        <input name="buscarpor" type="text" class="form-control w-56" placeholder="Buscar por nivel" value="{{$buscarpor}}">
                    <button class="btn btn-primary shadow-md mr-2">Buscar</button> 
                    </form>  
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">CÓDIGO</th>
                        <th class="whitespace-nowrap"> NIVEL</th>
                        <th class="text-center whitespace-nowrap">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($nivel)<=0)
                        <tr class="intro-x">
                            <td class="text-center">No hay registros</td>
                        </tr>
                    @else
                        @foreach($nivel as $item)
                            <tr class="intro-x">
                                <td class="text">{{$item->idnivel}}</td>
                                <td class="text">{{$item->descripcion}}</td>
                                <td  class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3 btn btn-info btn-sm" href="{{route('nivel.edit',$item->idnivel)}}" data-tw-toggle="modal"><i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Editar </a>
                                        <a class="flex items-center text-danger btn btn-info btn-sm" href="{{route('nivel.confirmar',$item->idnivel)}}" data-tw-toggle="modal" > <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Eliminar </a>
                                    </div>
                                </td>

                            </tr>

                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

               
@endsection
@section('script')
  <script>
    setTimeout(function(){
      document.querySelector('#mensaje').remove();
    }, 2000);
  </script>
@endsection