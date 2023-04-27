<x-mail::message>
<h1>IL PROGETTO E' STATO CARICATO CORRETTAMENTE!</h1>

 #{{$proj->title}}
 ##{{$proj->description}}


Thanks,<br>
{{ config('app.name') }}

</x-mail::message>