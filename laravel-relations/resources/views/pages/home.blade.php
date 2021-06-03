@extends('layout.main-layout')

@section('content')
    <main>
        <ul>
            @foreach ($cars as $car)
            <li>
                <h3>
                    Casa costruttrice:
                </h3>
                <h4>
                    {{$car -> brand -> name}},
                     <br>
                    {{$car -> brand -> nationality}}
                </h4>
                <h3>
                    Dettagli auto:
                </h3>
                 <h4>
                    {{ $car -> name}} -
                    {{ $car -> model}}
                </h4>
                <h3>
                    Piloti che hanno guidato questa macchina:
                </h3>
                <ul>

                    @foreach ($car -> pilots as $pilot)

                       <li>

                           <h5>
                               <a href="{{route('pilots', $pilot -> id)}}">

                                   {{ $pilot -> name}} {{ $pilot -> lastname}}

                               </a>

                           </h5>

                       </li>
                    @endforeach

                </ul>

            </li>
            @endforeach

        </ul>


    </main>

@endsection
