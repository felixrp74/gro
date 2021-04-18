<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <div class="flex bg-white shadow-2xl rounded-lg">
            {{-- ingenieria-mecanica --}}
        @if ( $category->slug == 'guia' ) 
            <div class="lg:flex-1 md:flex-shrink-0">
                 
                {{-- logo --}}
                <a class="flex justify-center" href="#">
                    <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" src="https://i.pinimg.com/736x/f9/33/2f/f9332fd3172a685acc11038857e3078a.jpg" alt="Man looking at item at a store">
                </a>
                
            </div>
            <div class="lg:flex-1 p-8">
                <a href="#" class="uppercase tracking-wide text-3xl text-indigo-500 font-semibold">GUIA</a>
                {{-- <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black ">Respondable MSc Julio Fredy Chura Acero</a> --}}
                <p class="mt-2 text-gray-500">Una guía es algo que tutela, rige u orienta. A partir de esta definición, el término puede hacer referencia a múltiples significados de acuerdo al contexto.</p>
            </div>

            {{-- ingenieria-electronica --}}
        @elseif( $category->slug == 'procesos' )
            <div class="lg:flex-1 md:flex-shrink-0">
                
                {{-- logo --}}
                <a class="flex justify-center" href="#">
                    <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" src="https://www-cdn-4.winshuttle.com/wp-content/uploads/2017/01/operations-circle.png" alt="Man looking at item at a store">
                </a>
            </div>
            <div class="lg:flex-1 p-8">
                <a href="#" class="uppercase tracking-wide text-3xl text-indigo-500 font-semibold">PROCESOS</a>
                {{-- <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black ">Respondable MSc Edwin Chambi Mamani</a> --}}
                <p class="mt-2 text-gray-500">Un proceso es una secuencia de acciones que se llevan a cabo para lograr un fin determinado. </p>
            </div>

            {{-- ingenieria-sistemas --}}
            @elseif( $category->slug == 'documentos' )
                <div class="lg:flex-1 md:flex-shrink-0">
                    
                    {{-- logo --}}
                    <a class="flex justify-center" href="#">
                        <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-documents-vector-icon-png-image_3758958.jpg" alt="Man looking at item at a store">
                    </a>

                </div>
                <div class="lg:flex-1 p-8">
                    <a href="#" class="uppercase tracking-wide text-3xl text-indigo-500 font-semibold">DOCUMENTOS</a>
                    {{-- <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black ">Respondable Ing. Milder Zanavria</a> --}}
                    <p class="mt-2 text-gray-500">Se almacenan documentos de Acreditacion y Calidad que son Útiles para su posterior admnistración. Los documentos que se guardan son tipo PDF y Docx.</p>
                </div>

            @elseif( $category->slug == 'general' )
                <div class="lg:flex-1 md:flex-shrink-0">
                    
                    {{-- logo --}}
                    <a class="flex justify-center" href="#">
                        <img class="h-60 w-full object-scale-down md:w-48 mx-4 p-4" src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Logo_UNAP.png" alt="Man looking at item at a store">
                    </a>
                    
                </div>
                <div class="lg:flex-1 p-8">
                    <a href="#" class="uppercase tracking-wide text-3xl text-indigo-500 font-semibold">general</a>
                    {{-- <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black ">Respondable Ing. Milder Zanavria</a> --}}
                    <p class="mt-2 text-gray-500">Publicaciones generales una ayuda extra para facilitar el acceso rapido a la informacion.</p>
                </div>

        @endif
        </div>
    </div>









    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">



        {{-- <h1 class="uppercase text-center text-3xl font-bold">
            Programa Estudio: {{$category->name}}
        </h1> --}}

        @foreach ($posts as $post)
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden" >
  
                @if ($post->image != null) 
                    <img class="w-full h-72 object-cover -object-center"
                     src="{{Storage::url($post->image->url)}}" alt="">
                    {{-- <h1>{{Storage::url($post->image->url)}}</h1> --}}
                @else
                    <img class="w-full h-72 object-cover object-center" 
                    src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061_960_720.jpg" alt="">
                @endif
            

                <div class="px-6 py-4">
                    {{-- nombre --}}
                    <div class="font-bold text-xl mb-2">
                        <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                    </div>

                    {{-- resumen --}}
                    <div class="text-gray-700 text-base mt-3">
                         {!!$post->extract!!}
                    </div>

                    {{-- fecha --}}
                    <div class="text-gray-700 text-base mt-3">
                        {{-- $formattedString = $currentTime->format( 'c' ); --}}
                        Publicado Fecha:   {{ $post->created_at}}
                    </div>

                    {{-- documento --}}
                    <div class="text-gray-700 text-base mt-6">
                        
                        @if ($post->file != null) 
                             
                            <a class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 mt-5 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                                 href="{{ Storage::url($post->file->url) }}" target="_blank" rel="noopener noreferrer">Documento</a>
                                                  
                        @endif 

                            <a class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 mt-5 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline"
                                 href="{{route('posts.show', $post)}}" target="_blank" rel="noopener noreferrer">Ver</a>

                    </div>
                </div>
 
            </article>
        @endforeach
 
        <div class="mt-4">
            {{$posts->links()}}
        </div>

    </div>
</x-app-layout>