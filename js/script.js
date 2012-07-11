/* Author: 

*/
var q1_array = new Array();
q1_array[0] = "";
q1_array[1] = "";
q1_array[2] = "";
q1_array[3] = "";
q1_array[4] = "";
q1_array[5] = "";
q1_array[6] = "";

var q3_array = new Array();
q3_array[0] = "";
q3_array[1] = "";
q3_array[2] = "";
q3_array[3] = "";
q3_array[4] = "";
q3_array[5] = "";
q3_array[6] = "";

var dropPosition = {

	"0": 0,
	"37": 1,
	"74": 2,
	"111": 3,
	"148": 4,
	"185": 5,
	"222": 6
};

function removeByValue(arr, val) {
    for(var i=0; i<arr.length; i++) {
        if(arr[i] == val) {
            arr[i] = "";
            break;
        }
    }
}
function include(arr, obj) {
    for(var i=0; i<arr.length; i++) {
        if (arr[i] == obj) return true;
    }
}
$(document).ready(function() {
		
	$(".personal").validate();
	
	
	$(".options li").draggable({ });
	
	$( ".sb_q1 li" ).droppable({
		
		tolerance: "intersect",
		activeClass: "ui-state-default",
		hoverClass: "ui-state-hover",
		drop: function( event, ui ) {
			
			var p = $(this).position();
			if (q1_array[dropPosition[p.top]] == "") {
				removeByValue(q1_array,$(ui.draggable).text());
				q1_array.splice(dropPosition[p.top],1,$(ui.draggable).text());
				$(ui.draggable).css({"left":p.left,"top":p.top});

			} else {
				if ($(ui.draggable).attr("id") == "q1opt1") {
					$(ui.draggable).css({"left":433,"top":0});
				} else if ($(ui.draggable).attr("id") == "q1opt2") {
					$(ui.draggable).css({"left":433,"top":37});
				} else if ($(ui.draggable).attr("id") == "q1opt3") {
					$(ui.draggable).css({"left":433,"top":73});
				} else if ($(ui.draggable).attr("id") == "q1opt4") {
					$(ui.draggable).css({"left":433,"top":110});
				} else if ($(ui.draggable).attr("id") == "q1opt5") {
					$(ui.draggable).css({"left":433,"top":147});
				} else if ($(ui.draggable).attr("id") == "q1opt6") {
					$(ui.draggable).css({"left":433,"top":185});
				} else if ($(ui.draggable).attr("id") == "q1opt7") {
					$(ui.draggable).css({"left":433,"top":223});
				}
			} 
			

			console.log(q1_array);
			
			if (!include(q1_array, "")) {
				$(".arrow span").hide();
				    for(var i=0; i<q1_array.length; i++) {
  						q1_array[i]=q1_array[i].replace(",",".");
  					}
				console.log(q1_array);

				$(".formquiz #q1").val(q1_array);
			}				
		},
		out: function( event, ui ) {
			removeByValue(q1_array,$(ui.draggable).text());
			$(".arrow span").show();
			
		}
		
	});
	
	$( ".sb_q3 li" ).droppable({
		
		tolerance: "intersect",
		activeClass: "ui-state-default",
		hoverClass: "ui-state-hover",
		drop: function( event, ui ) {
			
			var p = $(this).position();
			if (q3_array[dropPosition[p.top]] == "") {
				removeByValue(q3_array,$(ui.draggable).text());
				q3_array.splice(dropPosition[p.top],1,$(ui.draggable).text());
				$(ui.draggable).css({"left":p.left,"top":p.top});

			} else {
				if ($(ui.draggable).attr("id") == "q1opt1") {
					$(ui.draggable).css({"left":433,"top":0});
				} else if ($(ui.draggable).attr("id") == "q1opt2") {
					$(ui.draggable).css({"left":433,"top":37});
				} else if ($(ui.draggable).attr("id") == "q1opt3") {
					$(ui.draggable).css({"left":433,"top":73});
				} else if ($(ui.draggable).attr("id") == "q1opt4") {
					$(ui.draggable).css({"left":433,"top":110});
				} else if ($(ui.draggable).attr("id") == "q1opt5") {
					$(ui.draggable).css({"left":433,"top":147});
				} else if ($(ui.draggable).attr("id") == "q1opt6") {
					$(ui.draggable).css({"left":433,"top":185});
				} else if ($(ui.draggable).attr("id") == "q1opt7") {
					$(ui.draggable).css({"left":433,"top":223});
				}
			} 
			

			console.log(q3_array);
			
			if (!include(q3_array, "")) {
				$(".arrow span").hide();
			}				
		},
		out: function( event, ui ) {
			removeByValue(q3_array,$(ui.draggable).text());
			$(".arrow span").show();
			console.log(q3_array);
		}
		
	});
		
});

















