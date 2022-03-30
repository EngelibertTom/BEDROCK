import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function save( { attributes } ) {
	return (
		<div className="partie1" style={`background-image: url(${attributes?.imageUrl})`}>

			<div className="container">
				<h1>{attributes?.title}</h1>
				<p>{attributes?.subtitle}</p>
				<p>{attributes?.subtitle2}</p>

	<button>TRY FOR FREE</button>
	<header></header>
</div>

</div>
	);
}
