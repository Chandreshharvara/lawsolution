( function( api ) {

	// Extends our custom "corporate-lawyer-firm" section.
	api.sectionConstructor['corporate-lawyer-firm'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );