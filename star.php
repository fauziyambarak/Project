<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style type="text/css">
		.checked{
			color: orange;
		}
    .unchecked:hover{
      color: orange;
    }
		.unchecked{
			color:grey;
		}
	</style>
</head>
<body>

<span class="fa fa-star unchecked" id="one" style="font-size:30px;"></span>
<span class="fa fa-star unchecked" id="two" style="font-size:30px;"></span>
<span class="fa fa-star unchecked" id="three" style="font-size:30px;"></span>
<span class="fa fa-star unchecked" id="four" style="font-size:30px;"></span>
<span class="fa fa-star unchecked" id="five" style="font-size:30px;"></span>
</body>

<script type="text/javascript">
	var list=['one','two','three','four','five'];
	list.forEach(function(element){
		document.getElementById(element).addEventListener("click",function(){
			var
			cls=document.getElementById(element).className;
			if(cls.includes("unchecked")){
				document.getElementById(element).classList.remove("unchecked");
				document.getElementById(element).classList.add("checked");
			}
			else
			{
				document.getElementById(element).classList.remove("checked");
				document.getElementById(element).classList.add("unchecked");
			}
	});
	
	});
</script>
</html>
