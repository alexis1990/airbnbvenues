var rsr = Raphael('parisMap', '1080', '800');

var sectors = [], selected_sectors = [];

var sectors_name = ['20e', '19e', '18e', '17e', '16e', '15e', '14e', '13e', '12e', '11e', '10e', '9e', '8e', '7e', '6e', '5e', '4e', '3e', '2e', '1er'];

var _x32_0 = rsr.path("M 967.124,505.062   880.703,494.174 875.667,472.571 852.804,436.333 833.07,418.721 822.182,382.575 764.341,315.888 807.212,294.113 871.177,285.437   935.822,262.13 969.846,345.829 967.124,405.031 963.042,428.167 967.124,452.665  z");
_x32_0.attr({id: '_x32_0',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x32_0');
sectors.push(_x32_0);

var _x31_9 = rsr.path("M 695.613,221.982   722.832,224.704 715.347,234.23 730.317,238.313 732.359,273.018 764.341,315.888 807.212,294.113 871.177,285.437 935.822,262.13   888.189,234.23 873.218,176.39 863.691,122.632 839.875,93.371 803.809,96.093 726.234,96.093 737.803,132.839 713.355,173.191  z");
_x31_9.attr({id: '_x31_9',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x31_9');
sectors.push(_x31_9);

var _x31_8 = rsr.path("M 509.161,234.23   501.191,202.928 511.883,115.827 511.883,103.578 606.47,100.176 674.178,100.176 726.234,96.093 737.803,132.839 714.666,169.585   695.613,221.982 677.24,221.982 615.997,230.148 568.363,238.994 518.008,221.982  z");
_x31_8.attr({id: '_x31_8',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x31_8');
sectors.push(_x31_8);

var _x31_7 = rsr.path("M 345.846,308.403   258.745,269.615 277.798,228.787 318.627,204.97 358.095,176.39 415.255,126.715 464.93,108.342 511.883,103.578 511.883,115.827   501.191,202.928 509.161,234.23 437.711,256.686 420.699,254.645 362.178,273.698  z");
_x31_7.attr({id: '_x31_7',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x31_7');
sectors.push(_x31_7);

var _x31_6 = rsr.path("M 371.024,381.895   344.485,389.38 318.627,415.919 262.65,488.39 168.241,624.146 137.619,612.577 114.483,583.997 119.246,538.68 129.454,519.352   120.607,481.925 138.3,455.386 168.241,437.014 194.78,379.173 235.608,305 258.745,269.615 345.846,308.403  z");
_x31_6.attr({id: '_x31_6',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x31_6');
sectors.push(_x31_6);

var _x31_5 = rsr.path("M 430.906,531.6   460.167,512.547 473.096,525.136 501.191,538.68 488.407,561.201 488.407,576.843 468.333,594.885 452.682,596.926 383.273,684.708   249.898,632.145 228.804,624.146 168.241,624.146 217.235,554.056 267.591,481.245 318.627,415.919 332.917,424.765   325.432,438.374  z");
_x31_5.attr({id: '_x31_5',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x31_5');
sectors.push(_x31_5);

var _x31_4 = rsr.path("M 590.258,576.843   585.529,601.431 586.736,669.057 575.168,689.472 584.695,722.815 593.541,726.898 593.541,747.993 568.363,747.993   383.273,684.708 452.682,596.926 468.333,594.885 488.407,576.843 488.407,561.201 501.191,538.68 558.496,566.305  z");
_x31_4.attr({id: '_x31_4',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x31_4');
sectors.push(_x31_4);

var _x31_3 = rsr.path("M 590.258,576.843   632.328,590.802 686.767,568.346 701.057,531.6 719.839,516.296 852.123,662.933 783.395,701.72 716.708,742.549 696.974,747.993   665.332,739.147 641.174,737.105 593.541,747.993 593.541,726.898 584.695,722.815 575.168,689.472 586.736,669.057   584.695,605.773  z");
_x31_3.attr({id: '_x31_3',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x31_3');
sectors.push(_x31_3);

var _x31_2 = rsr.path("M 883.425,494.174   805.17,484.647 745.288,471.718 722.832,459.469 729.637,468.316 737.803,501.659 719.839,516.296 852.123,662.933 877.982,653.406   899.757,647.282 918.13,628.228 946.71,601.009 963.722,573.109 967.124,543.849 967.124,505.062  z");
_x31_2.attr({id: '_x31_2',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x31_2');
sectors.push(_x31_2);

var _x31_1 = rsr.path("M 722.832,459.469   714.666,396.185 699.696,348.891 764.341,315.888 822.182,382.575 833.07,418.721 852.804,436.333 877.301,475.16 883.425,494.174   805.17,484.647 745.288,471.718  z");
_x31_1.attr({id: '_x31_1',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x31_1');
sectors.push(_x31_1);

var _x31_0 = rsr.path("M 615.997,230.148   612.384,330.284 652.743,341.066 699.696,348.891 764.341,315.888 732.359,273.018 730.317,238.313 715.347,234.23 722.832,224.704   677.24,221.982  z");
_x31_0.attr({id: '_x31_0',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x31_0');
sectors.push(_x31_0);

var _x39_ = rsr.path("M 475.818,305 494.871,345.829   534.339,332.9 558.496,315.888 612.384,330.284 615.997,230.148 568.363,238.994 518.008,221.982 509.161,234.23 507.12,292.752  z");
_x39_.attr({id: '_x39_',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x39_');
sectors.push(_x39_);

var _x38_ = rsr.path("M 509.161,234.23   507.12,292.752 475.818,305 494.871,345.829 475.818,382.575 451.983,379.283 371.024,381.895 345.846,308.403 362.178,273.698   420.699,254.645 437.711,256.686  z");
_x38_.attr({id: '_x38_',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x38_');
sectors.push(_x38_);

var _x37_ = rsr.path("M 540,410.475 540,430.889   520.049,480.564 460.167,512.547 430.906,531.6 325.432,438.374 332.917,424.765 318.627,415.919 344.485,389.38 371.024,381.895   455.403,379.173 475.818,382.575  z");
_x37_.attr({id: '_x37_',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x37_');
sectors.push(_x37_);

var _x36_ = rsr.path("M 592.86,459.469 540,410.475   540,430.889 520.049,480.564 460.167,512.547 473.096,525.136 558.496,566.305  z");
_x36_.attr({id: '_x36_',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x36_');
sectors.push(_x36_);

var _x35_ = rsr.path("M 592.86,459.469   616.677,475.16 665.332,497.576 701.057,531.6 686.767,568.346 632.328,590.802 558.496,566.305  z");
_x35_.attr({id: '_x35_',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x35_');
sectors.push(_x35_);

var _x34_ = rsr.path("M 592.86,459.469   612.594,418.721 625.523,418.721 722.832,459.469 729.637,468.316 737.803,501.659 701.057,531.6 665.332,497.576 616.677,475.16    z");
_x34_.attr({id: '_x34_',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x34_');
sectors.push(_x34_);

var _x33_ = rsr.path("M 625.523,418.721   652.743,341.066 699.696,348.891 714.666,396.185 718.069,427.487 722.832,459.469  z");
_x33_.attr({id: '_x33_',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x33_');
sectors.push(_x33_);

var _x32_ = rsr.path("M 534.339,332.9 540,353.995   616.677,381.895 641.174,371.687 652.743,341.066 558.496,315.888  z");
_x32_.attr({id: '_x32_',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x32_');
sectors.push(_x32_);

var _x31__1_ = rsr.path("M 592.86,459.469   540,410.475 475.818,382.575 494.871,345.829 534.339,332.9 540,353.995 616.677,381.895 641.174,371.687 625.523,418.721   612.594,418.721  z");
_x31__1_.attr({id: '_x31__1_',fill: '#EFEFEF',stroke: '#FFFFFF',"stroke-width": '3',"stroke-miterlimit": '10','stroke-opacity': '1'}).data('id', '_x31__1_');
sectors.push(_x31__1_);

var rsrGroups = [];

for(var i = 0; i < sectors.length; i++){
	sectors[i].data('id', i);

	sectors[i].mouseover(function(e){
		this.node.style.opacity = 0.5;
	});

	sectors[i].mouseout(function(e){
		this.node.style.opacity = 1;
	});

	sectors[i].click(function(e){
		var id = this.data('id');

		if(selected_sectors[id] == true){
			this.node.style.fill = "#EFEFEF";
			selected_sectors[id] = false;
			this.node.style.opacity = 0.5;
		}
		else{
			this.node.style.fill = "#40b160";
			this.node.style.opacity = 1;
			selected_sectors[id] = true;
			console.log(sectors_name[id]);
		}
	});
}
