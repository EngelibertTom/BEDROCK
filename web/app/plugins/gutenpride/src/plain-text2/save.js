import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function save( { attributes } ) {
	return (
		<div className="partie3">

				<div className="container">
							<div>
								<h1>{attributes?.title}</h1>
								<p>{attributes?.subtitle}</p>
								<p>{attributes?.subtitle2}</p>
							<button>DOWNLOAD OUR APP</button>
						</div>

				</div>
		</div>


		</div>
	);
}
