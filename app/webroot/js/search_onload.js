
// JavaScript Document
/* Table initialisation */
$(document).ready(function() {
	$('#search_results').dataTable( {
		"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
		"sPaginationType": "bootstrap",
		"bLengthChange": false,
		"bFilter": false,
		"iDisplayLength": 20,
		"oLanguage": {
			"sLengthMenu": "_MENU_ records per page"
		}
	} );

	$("#advanced_search").collapse({
		toggle:false
	});
	
	/*
	$('#team_typeahead').typeahead({
		source: function (typeahead, query){
			$.ajax({
			  url:"/autocomplete/fetch/FranchiseGroup/name/"+query,
			  success: function (data){
				typeahead.process(data)
				} 
			})
		},
		property: "name",
		onselect: function (obj) {
			alert('Selected '+obj)
		}
	});
	*/
	
} );