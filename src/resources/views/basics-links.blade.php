<a href="{{ route('basics.introduction') }}"><div class="border my-2 p-2 shadow-sm hover:shadow text-green-500">{!! in_array('basics.introduction', $basics) ? '&#9989;' : '' !!} Introduktion</div></a>
<a href="{{ route('basics.print') }}"><div class="border my-2 p-2 shadow-sm hover:shadow text-green-500">{!! in_array('basics.print', $basics) ? '&#9989;' : '' !!} Skriva ut text och tal</div></a>
<a href="{{ route('basics.simple-calc') }}"><div class="border my-2 p-2 shadow-sm hover:shadow text-green-500">{!! in_array('basics.simple-calc', $basics) ? '&#9989;' : '' !!} Enkla beräkningar</div></a>
<a href="{{ route('basics.variables') }}"><div class="border my-2 p-2 shadow-sm hover:shadow text-green-500">{!! in_array('basics.variables', $basics) ? '&#9989;' : '' !!} Variabler och datatyper</div></a>
<a href="{{ route('basics.input') }}"><div class="border my-2 p-2 shadow-sm hover:shadow text-green-500">{!! in_array('basics.input', $basics) ? '&#9989;' : '' !!} Indata med input</div></a>
<a href="{{ route('basics.logic') }}"><div class="border my-2 p-2 shadow-sm hover:shadow text-green-500">{!! in_array('basics.logic', $basics) ? '&#9989;' : '' !!} Logiska uttryck</div></a>
<a href="{{ route('basics.if') }}"><div class="border my-2 p-2 shadow-sm hover:shadow text-green-500">{!! in_array('basics.if', $basics) ? '&#9989;' : '' !!} If-satsen</div></a>
<a href="{{ route('basics.while') }}"><div class="border my-2 p-2 shadow-sm hover:shadow text-green-500">{!! in_array('basics.while', $basics) ? '&#9989;' : '' !!} While-satsen</div></a>
<a href="{{ route('basics.random') }}"><div class="border my-2 p-2 shadow-sm hover:shadow text-green-500">{!! in_array('basics.random', $basics) ? '&#9989;' : '' !!} Slumptal</div></a>