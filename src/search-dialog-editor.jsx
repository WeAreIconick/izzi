import { __ } from '@wordpress/i18n';
import { addFilter } from '@wordpress/hooks';
import { InspectorControls } from '@wordpress/block-editor';
import {
	PanelBody,
	PanelRow,
	ToggleControl,
} from '@wordpress/components';

/**
 * Confirm adding our custom attributes to core blocks.
 *
 * @param {Object} settings The block settings for the registered block type.
 * @param {string} name     The block type name, including namespace.
 * @return {Object}         The modified block settings.
 */
function addSearchDialogAttributes( settings, name ) {
	// Only add the attribute to supported blocks.
	if ( 'core/search' === name ) {
		settings.attributes = {
			...settings.attributes,
			search_dialog: {
				type: 'boolean',
				default: false,
			},
		};
	}

	return settings;
}

addFilter(
	'blocks.registerBlockType',
	'izzy/search-dialog/add-attributes',
	addSearchDialogAttributes
);

const searchDialogHelpText = (
	<>
		{ __( 'Enabling this will activate a pop-up dialog when used to search.' ) }
	</>
);

function addSearchDialogInspectorControls( BlockEdit ) {
	return ( props ) => {
		const { name, attributes, setAttributes } = props;

		// Early return if the block is not supported.
		if ( 'core/search' !== name ) {
			return <BlockEdit { ...props } />;
		}

		// Retrieve selected attributes from the block.
		const { search_dialog: dialogEnabled } = attributes;

		return (
			<>
				<BlockEdit { ...props } />
				<InspectorControls>
					<PanelBody title={ __( 'Pop-Up Dialog' ) }>
						<PanelRow>
							<ToggleControl
								label={ __( 'Enable pop-up modal dialog?' ) }
								checked={ dialogEnabled }
								onChange={ ( value ) => {
									setAttributes( {
										search_dialog: value,
									} );
								} }
								help={ searchDialogHelpText }
								__nextHasNoMarginBottom
							/>
						</PanelRow>
					</PanelBody>
				</InspectorControls>
			</>
		);
	};
}

addFilter(
	'editor.BlockEdit',
	'izzy/search-dialog/add-inspector-controls',
	addSearchDialogInspectorControls
);
