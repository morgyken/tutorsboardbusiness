<style type="text/css">
	// DEMO STUFF
$primary: #0077db;
$danger: #fa424a;
$success: #46c35f;
@mixin flex-center {
	display: flex;
	align-items: center;
	justify-content: center;
}

@mixin transition($prop, $duration, $timing:'ease', $delay:0) {
	transition: #{$prop} #{$duration}ms #{$timing} #{$delay}ms;
}

body {
	width: 100vw;
	height: 100vh;
	margin: 0;
	overflow-x: hidden;
	display: flex;
	justify-content: center;
	align-items: center;
	font-family: "Roboto Condensed";
	font-size: 14px;
}

.container {
	width: 80vw;
	display: flex;
	justify-content: space-around;
	flex-flow: columns;
}

.panel {
	width: 25vw;
}

// CUSTOM

.custom-style .selectr-label,
.custom-style .selectr-option {
	font-family: "Raleway";
}

.custom-style .selectr-selected::before {
	border-color: #fff transparent transparent;
}

.selectr-container.custom-style.open .selectr-selected::before {
  border-width: 0 4px 4px 4px;
  border-color: transparent transparent #fff;
}

.custom-style.open .selectr-selected {
	border-color: #34495e #34495e transparent;
	border-radius: 0;
}

.custom-style .selectr-selected,
.custom-style .selectr-options-container {
	background-color: #34495e !important;
	border-color: #34495e;
	border-radius: 0;
}

.custom-style .selectr-placeholder,
.custom-style .selectr-label {
	color: #ecf0f1;
}

.custom-style .selectr-selected::after {
	border-color: #ecf0f1 transparent transparent;
}

.custom-style .selectr-tag {
	background-color: #2c3e50;
	border-color: #2c3e50;
	border-radius: 0;
	color: #ecf0f1;
}

.custom-style .selectr-input {
	background-color: #2c3e50;
	border-color: #2c3e50;
	color: #ecf0f1;
	font-family: "Roboto Condensed";
}

.custom-style .selectr-clear::before,
.custom-style .selectr-clear::after,
.custom-style .selectr-tag-remove::before,
.custom-style .selectr-tag-remove::after {
	background-color: #2ecc71;
	height: 10px;
	top: 4px;
	width: 2px;
}

.custom-style .selectr-options li {
	color: #ecf0f1;
}

.custom-style .selectr-option.active,
.custom-style .selectr-option.active:hover,
.custom-style .selectr-option.selected:hover,
.custom-style .selectr-option.selected.active,
.custom-style .selectr-option.selected.active:hover {
	background-color: #2ecc71;
	color: #ecf0f1;
}

.custom-style .selectr-option.selected {
	background-color: #2c3e50;
}

.custom-style .selectr-option:hover:not(.disabled) {
	background-color: #2c3e50;
}

.custom-style .selectr-option::after {
	font-family: Material Design Icons;
	position: absolute;
	right: 5px;
	top: 5px;
}

.custom-style .selectr-option.selected::after {
	color: #2ecc71;
	content: "";
}

.custom-style .selectr-option.active:hover::after,
.custom-style .selectr-option.selected:hover::after {
	color: #ecf0f1;
}

.custom-style .selectr-option.disabled {
	cursor: not-allowed;
	opacity: 1;
}

.selectr-option.disabled .color-option {
	opacity: 0.2;
}

.custom-style .selectr-option.disabled::after {
	color: #c0392b;
	content: "";
}

.custom-style .selectr-notice {
	background-color: #34495e;
	border-color: #34495e;
	color: #ecf0f1;
}

.custom-style .selectr-tag-input {
	background-color: transparent;
	color: #ecf0f1;
}

.custom-style .selectr-tag-input::placeholder {
	color: #ecf0f1;
}

.color-option > span {
	border-radius: 1px;
	display: inline-block;
	height: 10px;
	margin: 0 8px 0 0;
	width: 10px;
}

.selectr-tag {
	background-color: transparent;
	border: 1px solid #999;
	border-radius: 0;
	color: #000;
	margin: 0 5px 2px 0;
	padding: 1px 25px 1px 8px;
}

.selectr-tag-remove::after,
.selectr-tag-remove::before {
	background-color: #6c7a86;
	width: 2px;
}
</style>

<div class="container">
	<div class="panel">
		<h2>Default</h2>
		<form action="">
			<select name="" id="default"></select>
			<button type="button" onclick="randomRender()">Randomise Config</button>
		</form>
		<h2>defaultSelected: false</h2>
		<form action="">
			<select name="" id="defaultSelected"></select>	
		</form>		
		<h2>Multiple</h2>
		<form action="">
			<select name="" id="multiple"></select>			
		</form>
		<h2>Optgroups</h2>
		<form action="">
			<select name="" id="optgroups"></select>			
		</form>
		<h2>Empty</h2>
		<form action="">
			<select name="" id="empty"></select>			
		</form>				
		<h2>Disabled Options</h2>
		<form action="">
			<select name="" id="disabled_opts">
				<option value="#9b59b6">Amethyst</option>
				<option value="#8e44ad">Wisteria</option>
				<option value="#2ecc71" disabled>Emerald</option>
				<option value="#27ae60">Nephritis</option>
				<option value="#3498db">Peter River</option>
				<option value="#2980b9" disabled>Belize Hole</option>
				<option value="#f1c40f" disabled>Sunflower</option>
				<option value="#f39c12">Orange</option>
				<option value="#e74c3c">Alizarin</option>
				<option value="#c0392b">Pomegranate</option>
				<option value="#e67e22" disabled>Carrot</option>
				<option value="#d35400">Pumpkin</option>	
			</select>			
		</form>		
	</div>
	<div class="panel">
		<h2>Pagination</h2>
		<form action="">
			<select name="" id="pagination"></select>			
		</form>		
		<h2>Disabled</h2>
		<form action="">
			<select name="" id="disabled"></select>			
		</form>
		<h2>Taggable</h2>
		<form action="">
			<select name="" id="taggable">
				<option value="foo">foo</option>
				<option value="bar">bar</option>
				<option value="baz">baz</option>
			</select>			
		</form>			
		<h2>Custom Renderers</h2>
		<form action="">
			<select name="" id="renderer"></select>			
		</form>				
		<h2>Custom Class + Custom Renderers</h2>
		<form action="">
			<select name="" id="class"></select>			
		</form>
		<h2>Native Dropdown (Single)</h2>
		<form action="">
			<select name="" id="native_single"></select>			
		</form>
		<h2>Native Dropdown (Multi)</h2>
		<form action="">
			<select name="" id="native_multi"></select>			
		</form>		
	</div>	
</div>
<style type="text/css">
	var data = [{
		value: '#9b59b6',
		text: 'Amethyst'
	}, {
		value: '#8e44ad',
		text: 'Wisteria',
	}, {
		value: '#2ecc71',
		text: 'Emerald'
	}, {
		value: '#27ae60',
		text: 'Nephritis'
	}, {
		value: '#3498db',
		text: 'Peter River'
	}, {
		value: '#2980b9',
		text: 'Belize Hole'
	}, {
		value: '#f1c40f',
		text: 'Sunflower'
	}, {
		value: '#f39c12',
		text: 'Orange'
	}, {
		value: '#e74c3c',
		text: 'Alizarin'
	}, {
		value: '#c0392b',
		text: 'Pomegranate'
	}, {
		value: '#e67e22',
		text: 'Carrot'
	}, {
		value: '#d35400',
		text: 'Pumpkin'
}];

var nested = [{
		text: "Purples",
		children: [{
			value: "#9b59b6",
			text: "Amethyst"
		}, {
			value: "#8e44ad",
			text: "Wisteria",
		}],
	}, {
		text: "Greens",
		children: [{
			value: "#2ecc71",
			text: "Emerald"
		}, {
			value: "#27ae60",
			text: "Nephritis"
		}]
	}, {
		text: "Blues",
		children: [{
			value: "#3498db",
			text: "Peter River"
		}, {
			value: "#2980b9",
			text: "Belize Hole"
		}]
	}, {
		text: "Greys",
		children: [{
			value: "#95a5a6",
			text: "Concrete"
		}, {
			value: "#7f8c8d",
			text: "Asbestos"
		}]
	}, {
		text: "Reds",
		children: [{
			value: "#e74c3c",
			text: "Alizarin"
		}, {
			value: "#c0392b",
			text: "Pomegranate"
		}]
	}, {
		text: "Oranges",
		children: [{
			value: "#e67e22",
			text: "Carrot"
		}, {
			value: "#d35400",
			text: "Pumpkin"
		}]
	}];

var configs = {
	default: {
		data: data
	},
	defaultSelected: {
		data: data,
		defaultSelected: false
	},
	multiple: {
		data: data,
		multiple: true,
		selectedValue: ["#8e44ad", "#e74c3c"]
	},
	selectorGroups: {
		data: nested
	},
	selectorDisabled: {
		data: data,
		disabled: true
	},
	taggable: {
		taggable: true
	},
	selectorRenderer: {
		data: data,
		renderOption: renderer,
		renderSelection: renderer,
		selectedValue: "#3498db"
	},
	selectorClass: {
		data: data,
		renderOption: renderer,
		renderSelection: renderer,
		customClass: "custom-style",
		selectedValue: "#2ecc71"
	},
	nativeSingle: {
		data: data,
		nativeDropdown: true
	},
	nativeMulti: {
		data: data,
		nativeDropdown: true,
		multiple: true
	}
};

var selectorDefault = new Selectr('#default', configs.default);

var selectorDefaultSelected = new Selectr('#defaultSelected', configs.defaultSelected);

var selectorMultiple = new Selectr('#multiple', configs.multiple);

var selectorGroups = new Selectr('#optgroups', configs.selectorGroups);

var selectorEmpty = new Selectr('#empty');

var selectorDisabledOpts = new Selectr('#disabled_opts');

var selectorDisabled = new Selectr('#disabled', configs.selectorDisabled);

var selectorTaggable = new Selectr('#taggable', configs.taggable);

var selectorRenderer = new Selectr('#renderer', configs.selectorRenderer);

var selectorClass = new Selectr('#class', configs.selectorClass);

var selectorNativeSingle = new Selectr('#native_single', configs.nativeSingle);

var selectorNativeMulti = new Selectr('#native_multi', configs.nativeMulti);

pagination
var newXHR = new XMLHttpRequest();

var selectorPagination = new Selectr("#pagination", {
	pagination: 25
});
  
newXHR.addEventListener( 'load', function() {
	selectorPagination.add(JSON.parse(this.responseText));
});
  
newXHR.open( 'GET', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/86186/data.large.json' );

newXHR.send();


function renderer(data) {
	var text = data.text;
	var template = ['<div class="color-option"><span style="background-color: ', data.value, ';"></span>', data.text, '</div>'];
	return template.join('');
}

var forms = document.getElementsByTagName("form");

for ( var i = 0; i < forms.length; i++ ) {
	forms[i].addEventListener("submit", function(e) {
		alert(this.elements[2].value)
		e.preventDefault();
	});
}

function randomRender() {
	var randomProperty = function (obj) {
			var keys = Object.keys(obj)
			return obj[keys[ keys.length * Math.random() << 0]];
	};
	
	selectorDefault.destroy();
	
	setTimeout(() => {
		selectorDefault.render(randomProperty(configs))
	}, 100);
}
</style>

