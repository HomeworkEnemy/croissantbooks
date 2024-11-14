( function( api ) {

	// Extends our custom "pest-control-treatment" section.
	api.sectionConstructor['pest-control-treatment'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );