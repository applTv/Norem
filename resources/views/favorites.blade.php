<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Избранные') }}
        </h2>
    </x-slot>
    <div class="p-3">

    <div class="row">
        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show p-3" role="alert">
        {{session()->get('message')}}
        </div>
        @endif
            <div class="col-lg-4 col-md-4 mb-4 mb-md-0 imgdiv">
                <div class="col-lg-10 mb-12 mb-md-0 list-group list-group-light">
                    <h1 class="p-3 text-center">Избранные персонажи</h1>
                    @foreach ($favorites as $favorite)
                        <a href="{{ route('character.show' , $favorite->character_id) }}" 
                        class="list-group-item list-group-item-action px-3 border-0">
                        <h5>{{$favorite-> character_name}}</h5></a>
                        <a href="{{url('destroy_character', $favorite->id)}}" class="btn-outline-danger btn-sm m-2 me-md-2" role="button">Убрать из избранных</a>
                    @endforeach
                </div>
            </div>
                <div class="col-lg-4  col-md-4 mb-4 mb-md-0 imgdiv">
                    
                    
                    <div class="col-lg-10 mb-12 mb-md-0 list-group list-group-light ">
                        <h1 class="p-3 text-center">Избранные расы</h1>
                        @foreach ($races as $race)
                            <a href="{{ route('races.show' , $race->race_id) }}" 
                            class="list-group-item list-group-item-action px-3 border-0">
                            <h5>{{$race-> race_name}}</h5></a>
                            <a href="{{url('destroy_race', $race->id)}}" class="btn-outline-danger btn-sm m-2 me-md-2" role="button">Убрать из избранных</a>
                        @endforeach
                    </div>
                    
                </div>
            <div class="col-lg-4 col-md-4 mb-4 mb-md-0 imgdiv">
                <div class="col-lg-10 mb-12 mb-md-0 list-group list-group-light ">
                    <h1 class="p-3 text-center">Избранные организации</h1>
                    @foreach ($organizs as $organiz)
                        <a href="{{ route('organiz.show' , $organiz->Organiz_name) }}" 
                        class="list-group-item list-group-item-action px-3 border-0">
                        <h5>{{$organiz-> Organiz_name}}</h5></a>
                        <a href="{{url('destroy_character', $organiz->id)}}" class="btn-outline-danger btn-sm m-2 me-md-2" role="button">Убрать из избранных</a>
                    @endforeach
                </div>
            </div>
    </div>
    
    
</x-app-layout>
