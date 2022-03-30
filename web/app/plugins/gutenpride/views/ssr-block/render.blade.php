<div class="partie2">
	<div class="container">
<h1>{{$title}}</h1>
<div class="cartes">
@while ( $albums->have_posts()) @php $albums->the_post() @endphp


		<div class="carte">
			<div class="img1">{{the_post_thumbnail()}}</div>
				<div class="infos">
					<p><strong>{{the_terms(get_the_ID(),'artist')}}</strong>{{the_title()}}</p>
					<p>{{the_field('annee')}}</p>
					<p>{{the_field('genre')}}</p>
				</div>
		</div>




@endwhile

</div>
		<div>
			<button>DISCOVER OUR PLANS</button>
		</div>
</div>
</div>
