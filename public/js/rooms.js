
$(document).ready(function(){
	$("#addroom").click(function(){
		$("#my-table").hide();
		$("#addroom").hide();
		$("#back").show();
		$("#formnew").show();
	});

	$("#back").click(function(){
		$("#formnew").hide();
		$("#back").hide();
		$("#my-table").show();
		$("#addroom").show();
	});

});
function loadImg1(event){
	var output = document.getElementById('output1');
    output.src = URL.createObjectURL(event.target.files[0]);
}

function loadImg2(event){
	var output = document.getElementById('output2');
    output.src = URL.createObjectURL(event.target.files[0]);
}

function loadImg3(event){
	var output = document.getElementById('output3');
    output.src = URL.createObjectURL(event.target.files[0]);
}

function loadImg4(event){
	var output = document.getElementById('output4');
    output.src = URL.createObjectURL(event.target.files[0]);
}