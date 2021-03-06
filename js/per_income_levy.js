//推定年収-所得割額
var income_levy = [
[0,48600,0,330],
[48600,60700,331,360],
[60700,67000,361,380],
[67000,77000,381,410],
[77000,87000,411,440],
[87000,97000,441,470],
[97000,115000,471,510],
[115000,121000,511,530],
[121000,133000,531,550],
[133000,169000,551,640],
[169000,189000,641,690],
[189000,199000,691,710],
[199000,211000,711,740],
[211000,247000,741,820],
[247000,301000,821,930],
[301000,339000,931,1010],
[339000,349000,1011,1030],
[349000,397000,1031,1130],
[397000,,1130,9999]
];

var incentive = {
	hasBros:{
		1: [],
		2: [308000,253000,211000,185000,154000,0],
		3: [308000,308000,308000,308000,308000,0]
	},
	noBros:{
		1: [308000,199200,115200,62200,0,0],
		2: [308000,253000,211000,185000,154000,0],
		3: [308000,308000,308000,308000,308000,0]
	}
};

var ai_index = [0, 271, 361, 681, 999, -1];

$(function(){
	// Document is ready
	$('#calc').click(function(){
		var hasBros = $('#hasbros').prop('checked');
		var num = parseInt($('#num').val());
		var ai = parseInt($('#ai').val());
		console.log("[START] Calc", hasBros, num, ai);

		var res = 0;
		var data = {};
		if (hasBros) {
			data = incentive.hasBros;
		} else {
			data = incentive.noBros;
		}
		//年収から適合する所得割額を得る
		if (hasBros && num == 1) {
			alert("兄・姉がいる場合は第2子か第3子以降を選択して下さい");
		}
		if (isNaN(num)) {
			alert("何人目の子か選択して下さい");
		}
		if (isNaN(ai)) {
			alert("年収を選択して下さい");
		}
		var idx = jQuery.inArray(ai, ai_index);
		res = data[num][idx];
		$('#result-price').html(res);
		console.log(res);
	});
});


