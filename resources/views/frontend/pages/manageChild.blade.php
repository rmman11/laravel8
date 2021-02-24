  <ul >


@foreach($children as $child)

      <li>

	    <a href="product/{{ $child->id }}" title="product">{{ $child->name }}</a>


	</li>

@endforeach

</ul>

