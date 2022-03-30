import { __ } from '@wordpress/i18n';
import { PlainText, useBlockProps, InspectorControls, BaseControl,MediaUploadCheck, MediaUpload, } from '@wordpress/block-editor';
import './editor.scss';
import { Button, } from '@wordpress/components';



export default function Edit( { attributes, setAttributes } ) {

const ALLOWED_MEDIA_TYPES = ["image"];
	return (
		<div { ...useBlockProps() }>
			<PlainText
				className={"block-editor-plain-text2-title"}
				placeholder={__('Title')}
				value={attributes?.title}
				onChange={(title) => {
					setAttributes({ title })
				}}
			/>
			<PlainText
				className={"block-editor-plain-text2-subtitle"}
				placeholder={__('Sous-titre')}
				value={attributes?.subtitle}
				onChange={(subtitle) => {
					setAttributes({ subtitle })
				}}
			/>

			<PlainText
				className={"block-editor-plain-text2-subtitle2"}
				placeholder={__('Sous-titre')}
				value={attributes?.subtitle2}
				onChange={(subtitle2) => {
					setAttributes({ subtitle2 })
				}}
			/>

			<MediaUploadCheck>
				<MediaUpload
					onSelect={(media) => setAttributes({ imageUrl: media.url, imageId: media.id })}
					allowedTypes={ ALLOWED_MEDIA_TYPES }
					value={ attributes?.imageId }
					render={ ( { open } ) => (
						<Button onClick={ open }>{__('Replace the image')}</Button>
					) }
				/>
			</MediaUploadCheck>


		</div>
	);
}
