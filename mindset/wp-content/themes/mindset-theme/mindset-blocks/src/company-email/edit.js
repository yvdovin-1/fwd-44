import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { useEntityProp } from '@wordpress/core-data';

export default function Edit() {
	const postID = 16;

	const [meta, setMeta] = useEntityProp(
		'postType',
		'page',
		'meta',
		postID
	);

	const { company_email } = meta;

	const updateMeta = ( key, value ) => {
		setMeta( { ...meta, [key]: value } );
	};

	return (
		<p { ...useBlockProps() }>
			<RichText
				placeholder={ __( 'Enter email here...', 'company-email' ) }
				value={ company_email }
				onChange={ ( nextValue ) => updateMeta( 'company_email', nextValue ) }
			/>
		</p>
	);
}