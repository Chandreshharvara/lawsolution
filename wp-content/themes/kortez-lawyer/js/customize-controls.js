( function( $, api ) {

	/* === Upsell Section === */
	api.sectionConstructor['kortez-lawyer-upsell'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( jQuery, wp.customize );
